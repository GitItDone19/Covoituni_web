<?php

namespace App\Controller\Admin;

use App\Entity\Reclamation;
use App\Form\ReclamationResponseType;
use App\Repository\ReclamationRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

// Ne pas mettre de name ici pour éviter les conflits
#[Route('/admin/reclamations')]
class ReclamationController extends AbstractController
{
    // Utiliser le nom de route exact défini dans admin.yaml
    #[Route('/', name: 'admin_reclamation', methods: ['GET'])]
    public function index(Request $request, ReclamationRepository $reclamationRepository): Response
    {
        $filter = $request->query->get('filter');
        
        $reclamations = match($filter) {
            'pending' => $reclamationRepository->findBy(['status' => 'pending']),
            'in_progress' => $reclamationRepository->findBy(['status' => 'in_progress']),
            'resolved' => $reclamationRepository->findBy(['status' => 'resolved']),
            'rejected' => $reclamationRepository->findBy(['status' => 'rejected']),
            default => $reclamationRepository->findAll(),
        };
        
        return $this->render('admin/reclamation/index.html.twig', [
            'reclamations' => $reclamations,
            'current_filter' => $filter
        ]);
    }

    #[Route('/{id}', name: 'admin_reclamations_show', methods: ['GET', 'POST'])]
    public function show(Request $request, Reclamation $reclamation, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(ReclamationResponseType::class, $reclamation, [
            'admin_response_only' => true
        ]);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();
            $this->addFlash('success', 'La réclamation a été mise à jour avec succès');
            return $this->redirectToRoute('admin_reclamation');
        }

        return $this->render('admin/reclamation/show.html.twig', [
            'reclamation' => $reclamation,
            'form' => $form->createView(),
        ]);
    }

    #[Route('/{id}/resolve', name: 'admin_reclamations_resolve', methods: ['POST'])]
    public function resolve(Request $request, Reclamation $reclamation, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('resolve'.$reclamation->getId(), $request->request->get('_token'))) {
            $reclamation->setStatus('resolved');
            $entityManager->flush();
            $this->addFlash('success', 'La réclamation a été marquée comme résolue');
        }

        return $this->redirectToRoute('admin_reclamation');
    }

    /**
     * Action pour répondre à une réclamation
     */
    #[Route('/{id}/respond', name: 'app_admin_reclamation_respond', methods: ['GET', 'POST'])]
    public function respond(Request $request, Reclamation $reclamation, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(ReclamationResponseType::class, $reclamation);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // Ajoutons du débogage pour voir ce qui se passe
            dump($reclamation); // Afficher l'objet complet
            dump($reclamation->getStatus()); // Vérifier si le status est bien défini
            
            // Ajout d'une date de mise à jour si nécessaire
            if (method_exists($reclamation, 'setUpdatedAt')) {
                $reclamation->setUpdatedAt(new \DateTime());
            }
            
            // Forcer explicitement le status
            $status = $form->get('status')->getData();
            if ($status) {
                $reclamation->setStatus($status);
            }
            
            // Persistez les changements en base de données
            $entityManager->persist($reclamation);
            $entityManager->flush();
            
            // Pour déboguer, nouvelle vérification après flush
            dump($reclamation->getStatus()); // Le status après sauvegarde
            // die; // Décommentez pour arrêter l'exécution et voir les valeurs

            $this->addFlash('success', 'La réponse a été enregistrée avec succès.');
            
            // Corrigeons la redirection pour utiliser le bon nom de route
            return $this->redirectToRoute('admin_reclamations_show', ['id' => $reclamation->getId()]);
        }

        return $this->render('admin/reclamation/respond.html.twig', [
            'reclamation' => $reclamation,
            'form' => $form,
        ]);
    }

    /**
     * Action pour mettre à jour tous les statuts
     */
    #[Route('/update-all-status', name: 'admin_reclamations_update_all_status', methods: ['GET'])]
    public function updateAllStatus(ReclamationRepository $reclamationRepository, EntityManagerInterface $entityManager): Response
    {
        // Récupérer toutes les réclamations
        $reclamations = $reclamationRepository->findAll();
        $updatedCount = 0;
        
        // Mise à jour des statuts selon une logique définie
        foreach ($reclamations as $reclamation) {
            // Vérifier si le statut est vide ou null
            if (empty($reclamation->getStatus())) {
                // Définir un statut par défaut si nécessaire
                $reclamation->setStatus('pending');
                $updatedCount++;
            }
            
            // Vérifier si le statut est dans un format ancien et le convertir
            // Exemple: convertir "en_attente" en "pending"
            if ($reclamation->getStatus() === 'en_attente') {
                $reclamation->setStatus('pending');
                $updatedCount++;
            } else if ($reclamation->getStatus() === 'en_cours') {
                $reclamation->setStatus('in_progress');
                $updatedCount++;
            } else if ($reclamation->getStatus() === 'resolu') {
                $reclamation->setStatus('resolved');
                $updatedCount++;
            } else if ($reclamation->getStatus() === 'rejete') {
                $reclamation->setStatus('rejected');
                $updatedCount++;
            }
            
            // Vous pouvez ajouter d'autres règles de conversion ici
        }
        
        // Enregistrer toutes les modifications
        $entityManager->flush();
        
        $this->addFlash('success', $updatedCount . ' réclamations ont été mises à jour avec succès.');
        return $this->redirectToRoute('admin_reclamation');
    }

    /**
     * Action pour corriger les problèmes de statut dans une seule réclamation
     */
    #[Route('/{id}/fix-status', name: 'admin_reclamations_fix_status', methods: ['GET'])]
    public function fixStatus(Reclamation $reclamation, EntityManagerInterface $entityManager): Response
    {
        // Si le statut est vide, le définir à "pending"
        if (empty($reclamation->getStatus())) {
            $reclamation->setStatus('pending');
        }
        
        // S'assurer que le statut est dans un format valide
        $validStatuses = ['pending', 'in_progress', 'resolved', 'rejected'];
        if (!in_array($reclamation->getStatus(), $validStatuses)) {
            // Convertir l'ancien format si possible
            switch (strtolower($reclamation->getStatus())) {
                case 'en attente':
                case 'en_attente':
                    $reclamation->setStatus('pending');
                    break;
                case 'en cours':
                case 'en_cours':
                    $reclamation->setStatus('in_progress');
                    break;
                case 'résolu':
                case 'resolu':
                    $reclamation->setStatus('resolved');
                    break;
                case 'rejeté':
                case 'rejete':
                    $reclamation->setStatus('rejected');
                    break;
                default:
                    // Par défaut, mettre en attente
                    $reclamation->setStatus('pending');
            }
        }
        
        // Sauvegarder les modifications
        $entityManager->flush();
        
        $this->addFlash('success', 'Le statut de la réclamation a été corrigé avec succès.');
        return $this->redirectToRoute('admin_reclamations_show', ['id' => $reclamation->getId()]);
    }
} 