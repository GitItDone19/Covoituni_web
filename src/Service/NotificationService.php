<?php

namespace App\Service;

use App\Entity\Notification;
use App\Entity\Reclamation;
use App\Entity\Reponse;
use App\Entity\Utilisateur;
use App\Repository\NotificationRepository;
use App\Repository\UtilisateurRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;

class NotificationService
{
    private $notificationRepository;
    private $utilisateurRepository;
    private $entityManager;
    private $urlGenerator;
    private $emailNotificationService;

    public function __construct(
        NotificationRepository $notificationRepository,
        UtilisateurRepository $utilisateurRepository,
        EntityManagerInterface $entityManager,
        UrlGeneratorInterface $urlGenerator,
        EmailNotificationService $emailNotificationService
    ) {
        $this->notificationRepository = $notificationRepository;
        $this->utilisateurRepository = $utilisateurRepository;
        $this->entityManager = $entityManager;
        $this->urlGenerator = $urlGenerator;
        $this->emailNotificationService = $emailNotificationService;
    }

    /**
     * Create notification for new reclamation
     */
    public function notifyAdminNewReclamation(Reclamation $reclamation): void
    {
        error_log("Starting notifyAdminNewReclamation for reclamation ID: " . $reclamation->getId());
        
        // Find all admin users by roleCode
        $admins = $this->utilisateurRepository->findBy(['roleCode' => 'ADMIN']);
        
        // Debug: check if we found any admins
        $count = count($admins);
        error_log("Found $count admin users to notify about new reclamation {$reclamation->getId()}");
        
        if (empty($admins)) {
            error_log("No admin users found to notify about reclamation {$reclamation->getId()}");
            return;
        }
        
        foreach ($admins as $admin) {
            error_log("Creating notification for admin: " . $admin->getEmail() . " (ID: " . $admin->getId() . ")");
            
            // Create in-app notification
            $notification = new Notification();
            $notification->setType('new_reclamation');
            $notification->setUser($admin);
            $notification->setContent('Nouvelle réclamation de ' . $reclamation->getUser()->getPrenom() . ' ' . $reclamation->getUser()->getNom());
            $notification->setUrl($this->urlGenerator->generate('app_admin_reclamation_show', ['id' => $reclamation->getId()]));
            $notification->setReclamation($reclamation);
            
            try {
                $this->notificationRepository->save($notification, true);
                error_log("Successfully created notification ID {$notification->getId()} for admin {$admin->getEmail()}");
                
                // Send email notification
                $this->emailNotificationService->notifyAdminNewReclamation($reclamation, $admin);
                error_log("Sent email notification to admin {$admin->getEmail()}");
            } catch (\Exception $e) {
                error_log("Error creating notification for admin {$admin->getEmail()}: " . $e->getMessage());
            }
        }
    }

    /**
     * Create notification for reclamation response
     */
    public function notifyUserReclamationResponse(Reponse $reponse): void
    {
        $reclamation = $reponse->getReclamation();
        $user = $reclamation->getUser();
        
        error_log("Creating notification for user {$user->getEmail()} about response to reclamation {$reclamation->getId()}");
        
        // Create in-app notification
        $notification = new Notification();
        $notification->setType('reclamation_response');
        $notification->setUser($user);
        $notification->setContent('Réponse à votre réclamation: ' . $reclamation->getSubject());
        $notification->setUrl($this->urlGenerator->generate('app_passager_reclamation_show', ['id' => $reclamation->getId()]));
        $notification->setReclamation($reclamation);
        $notification->setReponse($reponse);
        
        try {
            $this->notificationRepository->save($notification, true);
            error_log("Created notification ID {$notification->getId()} for user {$user->getEmail()}");
            
            // Send email notification
            $this->emailNotificationService->notifyUserReclamationResponse($reponse);
            error_log("Sent email notification to user {$user->getEmail()}");
        } catch (\Exception $e) {
            error_log("Error creating notification for user {$user->getEmail()}: " . $e->getMessage());
        }
    }

    /**
     * Get unread notifications for a user
     */
    public function getUnreadNotifications(Utilisateur $user, int $limit = 10): array
    {
        return $this->notificationRepository->findUnreadByUser($user, $limit);
    }

    /**
     * Count unread notifications for a user
     */
    public function countUnreadNotifications(Utilisateur $user): int
    {
        return $this->notificationRepository->countUnreadByUser($user);
    }

    /**
     * Mark notification as read
     */
    public function markAsRead(Notification $notification): void
    {
        $notification->setIsRead(true);
        $this->entityManager->flush();
    }

    /**
     * Mark all notifications as read for a user
     */
    public function markAllAsRead(Utilisateur $user): void
    {
        $this->notificationRepository->markAllAsReadForUser($user);
    }
} 