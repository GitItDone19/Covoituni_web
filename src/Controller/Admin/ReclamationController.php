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

    #[Route('/{id}/respond', name: 'admin_reclamations_respond', methods: ['GET', 'POST'])]
    public function respond(Request $request, Reclamation $reclamation, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(ReclamationResponseType::class, $reclamation);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // Gérer le statut qui est maintenant dans le champ caché
            $newStatus = $request->request->get('status_value');
            if ($newStatus) {
                $reclamation->setStatus($newStatus);
            }
            
            $entityManager->flush();
            
            $this->addFlash('success', 'Votre réponse a été envoyée avec succès.');
            return $this->redirectToRoute('app_admin_reclamation_index');
        }

        return $this->render('admin/reclamation/response.html.twig', [
            'reclamation' => $reclamation,
            'form' => $form->createView(),
        ]);
    }
} 