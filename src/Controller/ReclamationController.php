<?php

namespace App\Controller;

use App\Entity\Reclamation;
use App\Form\ReclamationType;
use App\Repository\ReclamationRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;

#[Route('/reclamation')]
class ReclamationController extends AbstractController
{
    #[Route('/', name: 'app_reclamation_index', methods: ['GET'])]
    public function index(ReclamationRepository $reclamationRepository): Response
    {
        $user = $this->getUser();
        
        // Si c'est un admin, afficher toutes les réclamations
        if ($this->isGranted('ROLE_ADMIN')) {
            $reclamations = $reclamationRepository->findAll();
        } else {
            // Sinon, n'afficher que les réclamations de l'utilisateur connecté
            $reclamations = $reclamationRepository->findBy(['user' => $user]);
        }
        
        return $this->render('reclamation/index.html.twig', [
            'reclamations' => $reclamations,
        ]);
    }

    #[Route('/new', name: 'app_reclamation_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        // Les admins ne peuvent pas créer de réclamations
        if ($this->isGranted('ROLE_ADMIN')) {
            throw new AccessDeniedException('Admins cannot create reclamations');
        }
        
        $reclamation = new Reclamation();
        $reclamation->setUser($this->getUser());
        $reclamation->setDate(new \DateTime());
        $reclamation->setStatus('pending');
        
        $form = $this->createForm(ReclamationType::class, $reclamation);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($reclamation);
            $entityManager->flush();

            return $this->redirectToRoute('app_reclamation_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('reclamation/new.html.twig', [
            'reclamation' => $reclamation,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_reclamation_show', methods: ['GET'])]
    public function show(Reclamation $reclamation): Response
    {
        // Vérifier que l'utilisateur a le droit de voir cette réclamation
        if (!$this->isGranted('ROLE_ADMIN') && $reclamation->getUser() !== $this->getUser()) {
            throw new AccessDeniedException('You cannot view this reclamation');
        }
        
        return $this->render('reclamation/show.html.twig', [
            'reclamation' => $reclamation,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_reclamation_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Reclamation $reclamation, EntityManagerInterface $entityManager): Response
    {
        // Vérification de sécurité: seul le propriétaire peut modifier
        if ($reclamation->getUser() !== $this->getUser()) {
            throw $this->createAccessDeniedException('Vous n\'êtes pas autorisé à modifier cette réclamation.');
        }
        
        // Vérifier que la réclamation est toujours en attente
        if ($reclamation->getStatus() !== 'pending') {
            $this->addFlash('error', 'Vous ne pouvez plus modifier cette réclamation car elle est déjà en cours de traitement.');
            return $this->redirectToRoute('app_reclamation_show', ['id' => $reclamation->getId()]);
        }
        
        // Sauvegarder les valeurs importantes avant la modification
        $originalUser = $reclamation->getUser();
        $originalStatus = $reclamation->getStatus();
        $originalDate = $reclamation->getDate();
        
        $form = $this->createForm(ReclamationType::class, $reclamation);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // Restaurer les valeurs qui ne doivent pas changer
            $reclamation->setUser($originalUser);
            $reclamation->setStatus($originalStatus);
            $reclamation->setDate($originalDate);
            
            try {
                // Forcer la persistance des modifications
                $entityManager->persist($reclamation);
                $entityManager->flush();
                
                // Message de succès
                $this->addFlash('success', 'Votre réclamation a été modifiée avec succès.');
                
                return $this->redirectToRoute('app_reclamation_show', ['id' => $reclamation->getId()]);
            } catch (\Exception $e) {
                // En cas d'erreur - CORRECTION DE LA SYNTAXE
                $this->addFlash('error', "Une erreur est survenue lors de l'enregistrement: " . $e->getMessage());
            }
        }

        return $this->render('reclamation/edit.html.twig', [
            'reclamation' => $reclamation,
            'form' => $form->createView(),
        ]);
    }

    #[Route('/{id}', name: 'app_reclamation_delete', methods: ['POST'])]
    public function delete(Request $request, Reclamation $reclamation, EntityManagerInterface $entityManager): Response
    {
        // Seul le propriétaire peut supprimer une réclamation en état "pending"
        if (!$this->isGranted('ROLE_ADMIN') && 
            ($reclamation->getUser() !== $this->getUser() || $reclamation->getStatus() !== 'pending')) {
            throw new AccessDeniedException('You cannot delete this reclamation');
        }
        
        if ($this->isCsrfTokenValid('delete'.$reclamation->getId(), $request->request->get('_token'))) {
            $entityManager->remove($reclamation);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_reclamation_index', [], Response::HTTP_SEE_OTHER);
    }
} 