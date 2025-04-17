<?php

namespace App\Controller\Admin;

use App\Entity\Reclamation;
use App\Entity\Reponse;
use App\Form\ReponseType;
use App\Form\ReclamationResponseType;
use App\Repository\ReclamationRepository;
use App\Repository\ReponseRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\User\UserInterface;
use App\Service\NotificationService;

// Ne pas mettre de name ici pour éviter les conflits
#[Route('/admin/reclamation')]
class ReclamationController extends AbstractController
{
    #[Route('/', name: 'app_admin_reclamation_index', methods: ['GET'])]
    public function index(Request $request, ReclamationRepository $reclamationRepository): Response
    {
        // Make sure only users with ROLE_ADMIN can access this page
        $this->denyAccessUnlessGranted('ROLE_ADMIN');
        
        $filter = $request->query->get('filter');
        
        // Filter reclamations based on the filter parameter
        if ($filter && in_array($filter, ['pending', 'in_progress', 'resolved', 'rejected'])) {
            $reclamations = $reclamationRepository->findBy(['status' => $filter], ['date' => 'DESC']);
        } else {
            // Get all reclamations, ordered by date (newest first)
            $reclamations = $reclamationRepository->findBy([], ['date' => 'DESC']);
        }
        
        return $this->render('admin/reclamation/index.html.twig', [
            'reclamations' => $reclamations,
            'user' => $this->getUser(),
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
        return $this->redirectToRoute('app_admin_reclamation_index');
    }

    #[Route('/migrate-replies', name: 'admin_reclamations_migrate_replies', methods: ['GET'])]
    public function migrateReplies(ReclamationRepository $reclamationRepository, EntityManagerInterface $entityManager): Response
    {
        // Make sure only users with ROLE_ADMIN can access this page
        $this->denyAccessUnlessGranted('ROLE_ADMIN');
        
        // Get all reclamations with replies
        $reclamations = $reclamationRepository->findAll();
        $migratedCount = 0;
        
        foreach ($reclamations as $reclamation) {
            // Check if the reclamation has a reply and no responses yet
            if ($reclamation->getReply() && $reclamation->getReponses()->isEmpty()) {
                // Create a new Reponse entity
                $reponse = new Reponse();
                $reponse->setReclamation($reclamation);
                $reponse->setContent($reclamation->getReply());
                $reponse->setDate($reclamation->getDate());
                
                // If admin username is available from the session, set it
                $user = $this->getUser();
                if ($user instanceof UserInterface) {
                    $reponse->setAdminUsername($user->getUserIdentifier());
                } else {
                    $reponse->setAdminUsername('system_migration');
                }
                
                $entityManager->persist($reponse);
                $migratedCount++;
            }
        }
        
        // Save all changes
        $entityManager->flush();
        
        $this->addFlash('success', $migratedCount . ' réponses ont été migrées avec succès.');
        return $this->redirectToRoute('app_admin_reclamation_index');
    }
    
    #[Route('/{id}', name: 'app_admin_reclamation_show', methods: ['GET'])]
    public function show(int $id, ReclamationRepository $reclamationRepository): Response
    {
        // Make sure only users with ROLE_ADMIN can access this page
        $this->denyAccessUnlessGranted('ROLE_ADMIN');
        
        $reclamation = $reclamationRepository->find($id);
        
        if (!$reclamation) {
            throw $this->createNotFoundException('Reclamation not found');
        }
        
        return $this->render('admin/reclamation/show.html.twig', [
            'reclamation' => $reclamation,
            'user' => $this->getUser(),
        ]);
    }
    
    #[Route('/{id}/reply', name: 'app_admin_reclamation_reply', methods: ['GET', 'POST'])]
    public function reply(
        Request $request, 
        int $id, 
        ReclamationRepository $reclamationRepository, 
        EntityManagerInterface $entityManager,
        NotificationService $notificationService
    ): Response
    {
        // Make sure only users with ROLE_ADMIN can access this page
        $this->denyAccessUnlessGranted('ROLE_ADMIN');
        
        $reclamation = $reclamationRepository->find($id);
        
        if (!$reclamation) {
            throw $this->createNotFoundException('Reclamation not found');
        }
        
        // Handle direct form submission from the show page
        if ($request->isMethod('POST') && $request->request->has('content')) {
            $content = $request->request->get('content');
            $newStatus = $request->request->get('status');
            
            if (empty($content)) {
                $this->addFlash('error', 'La réponse ne peut pas être vide');
                return $this->redirectToRoute('app_admin_reclamation_show', ['id' => $reclamation->getId()]);
            }
            
            // Create new response
            $reponse = new Reponse();
            $reponse->setContent($content);
            $reponse->setReclamation($reclamation);
            
            // Set admin username if available
            $user = $this->getUser();
            if ($user instanceof UserInterface) {
                $reponse->setAdminUsername($user->getUserIdentifier());
            }
            
            // Update reclamation status
            if (in_array($newStatus, ['pending', 'in_progress', 'resolved', 'rejected'])) {
                $reclamation->setStatus($newStatus);
            }
            
            $entityManager->persist($reponse);
            $entityManager->flush();
            
            // Create notification for the user
            $notificationService->notifyUserReclamationResponse($reponse);
            
            $this->addFlash('success', 'Votre réponse a été enregistrée avec succès');
            return $this->redirectToRoute('app_admin_reclamation_show', ['id' => $reclamation->getId()]);
        }
        
        // Create a new Reponse entity for the form
        $reponse = new Reponse();
        $reponse->setReclamation($reclamation);
        
        // If the admin username is available, set it
        $user = $this->getUser();
        if ($user instanceof UserInterface) {
            $reponse->setAdminUsername($user->getUserIdentifier());
        }
        
        $form = $this->createForm(ReponseType::class, $reponse);
        $form->handleRequest($request);
        
        if ($form->isSubmitted() && $form->isValid()) {
            // Get the status from the request
            $newStatus = $request->request->get('status');
            if (in_array($newStatus, ['pending', 'in_progress', 'resolved', 'rejected'])) {
                $reclamation->setStatus($newStatus);
            }
            
            // Persist the Reponse entity
            $entityManager->persist($reponse);
            $entityManager->flush();
            
            // Create notification for the user
            $notificationService->notifyUserReclamationResponse($reponse);
            
            $this->addFlash('success', 'Votre réponse a été enregistrée avec succès');
            return $this->redirectToRoute('app_admin_reclamation_show', ['id' => $reclamation->getId()]);
        }
        
        return $this->render('admin/reclamation/reply.html.twig', [
            'reclamation' => $reclamation,
            'form' => $form->createView(),
            'user' => $this->getUser(),
        ]);
    }
    
    #[Route('/{id}/delete', name: 'app_admin_reclamation_delete', methods: ['POST'])]
    public function delete(Request $request, int $id, ReclamationRepository $reclamationRepository, EntityManagerInterface $entityManager): Response
    {
        // Make sure only users with ROLE_ADMIN can access this page
        $this->denyAccessUnlessGranted('ROLE_ADMIN');
        
        $reclamation = $reclamationRepository->find($id);
        
        if (!$reclamation) {
            throw $this->createNotFoundException('Reclamation not found');
        }
        
        if ($this->isCsrfTokenValid('delete'.$reclamation->getId(), $request->request->get('_token'))) {
            $entityManager->remove($reclamation);
            $entityManager->flush();
            
            $this->addFlash('success', 'La réclamation a été supprimée avec succès');
        }
        
        return $this->redirectToRoute('app_admin_reclamation_index');
    }
    
    #[Route('/{id}/change-status', name: 'app_admin_reclamation_change_status', methods: ['POST'])]
    public function changeStatus(Request $request, int $id, ReclamationRepository $reclamationRepository, EntityManagerInterface $entityManager): Response
    {
        // Make sure only users with ROLE_ADMIN can access this page
        $this->denyAccessUnlessGranted('ROLE_ADMIN');
        
        $reclamation = $reclamationRepository->find($id);
        
        if (!$reclamation) {
            throw $this->createNotFoundException('Reclamation not found');
        }
        
        $newStatus = $request->request->get('status');
        if (!in_array($newStatus, ['pending', 'in_progress', 'resolved', 'rejected'])) {
            $this->addFlash('error', 'Statut invalide');
            return $this->redirectToRoute('app_admin_reclamation_show', ['id' => $reclamation->getId()]);
        }
        
        $reclamation->setStatus($newStatus);
        $entityManager->flush();
        
        $this->addFlash('success', 'Le statut de la réclamation a été modifié avec succès');
        return $this->redirectToRoute('app_admin_reclamation_show', ['id' => $reclamation->getId()]);
    }

    /**
     * Action pour répondre à une réclamation
     */
    #[Route('/{id}/respond', name: 'app_admin_reclamation_respond', methods: ['GET', 'POST'])]
    public function respond(
        Request $request, 
        int $id, 
        ReclamationRepository $reclamationRepository, 
        EntityManagerInterface $entityManager,
        NotificationService $notificationService
    ): Response
    {
        // Make sure only users with ROLE_ADMIN can access this page
        $this->denyAccessUnlessGranted('ROLE_ADMIN');
        
        $reclamation = $reclamationRepository->find($id);
        
        if (!$reclamation) {
            throw $this->createNotFoundException('Reclamation not found');
        }
        
        // Create a new Reponse entity
        $reponse = new Reponse();
        $reponse->setReclamation($reclamation);
        
        // If the admin username is available, set it
        $user = $this->getUser();
        if ($user instanceof UserInterface) {
            $reponse->setAdminUsername($user->getUserIdentifier());
        }
        
        $form = $this->createForm(ReponseType::class, $reponse);
        $form->handleRequest($request);
        
        if ($form->isSubmitted() && $form->isValid()) {
            // Get the status from the request
            $newStatus = $request->request->get('status');
            if (in_array($newStatus, ['pending', 'in_progress', 'resolved', 'rejected'])) {
                $reclamation->setStatus($newStatus);
            }
            
            // Persist the Reponse entity
            $entityManager->persist($reponse);
            $entityManager->flush();
            
            // Create notification for the user
            $notificationService->notifyUserReclamationResponse($reponse);
            
            $this->addFlash('success', 'Votre réponse a été enregistrée avec succès');
            return $this->redirectToRoute('app_admin_reclamation_show', ['id' => $reclamation->getId()]);
        }
        
        return $this->render('admin/reclamation/reply.html.twig', [
            'reclamation' => $reclamation,
            'form' => $form->createView(),
            'user' => $this->getUser(),
        ]);
    }

    #[Route('/{id}/delete-response/{responseId}', name: 'app_admin_reclamation_delete_response', methods: ['POST'])]
    public function deleteResponse(
        Request $request, 
        int $id, 
        int $responseId, 
        ReclamationRepository $reclamationRepository,
        ReponseRepository $reponseRepository,
        EntityManagerInterface $entityManager
    ): Response
    {
        // Make sure only users with ROLE_ADMIN can access this page
        $this->denyAccessUnlessGranted('ROLE_ADMIN');
        
        $reclamation = $reclamationRepository->find($id);
        
        if (!$reclamation) {
            throw $this->createNotFoundException('Reclamation not found');
        }
        
        $reponse = $reponseRepository->find($responseId);
        
        if (!$reponse || $reponse->getReclamation()->getId() !== $reclamation->getId()) {
            $this->addFlash('error', 'Réponse introuvable');
            return $this->redirectToRoute('app_admin_reclamation_show', ['id' => $reclamation->getId()]);
        }
        
        if ($this->isCsrfTokenValid('delete_response'.$responseId, $request->request->get('_token'))) {
            $entityManager->remove($reponse);
            $entityManager->flush();
            
            $this->addFlash('success', 'La réponse a été supprimée avec succès');
        }
        
        return $this->redirectToRoute('app_admin_reclamation_show', ['id' => $reclamation->getId()]);
    }

    /**
     * Action pour corriger les problèmes de statut dans une seule réclamation
     */
    #[Route('/{id}/fix-status', name: 'admin_reclamations_fix_status', methods: ['GET'])]
    public function fixStatus(int $id, ReclamationRepository $reclamationRepository, EntityManagerInterface $entityManager): Response
    {
        // Make sure only users with ROLE_ADMIN can access this page
        $this->denyAccessUnlessGranted('ROLE_ADMIN');
        
        $reclamation = $reclamationRepository->find($id);
        
        if (!$reclamation) {
            throw $this->createNotFoundException('Reclamation not found');
        }
        
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
        return $this->redirectToRoute('app_admin_reclamation_show', ['id' => $reclamation->getId()]);
    }
} 