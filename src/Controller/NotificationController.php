<?php

namespace App\Controller;

use App\Entity\Notification;
use App\Repository\NotificationRepository;
use App\Service\NotificationService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/notifications')]
class NotificationController extends AbstractController
{
    private $notificationService;
    private $notificationRepository;

    public function __construct(NotificationService $notificationService, NotificationRepository $notificationRepository)
    {
        $this->notificationService = $notificationService;
        $this->notificationRepository = $notificationRepository;
    }

    /**
     * Get unread notifications count (AJAX)
     */
    #[Route('/count', name: 'app_notifications_count', methods: ['GET'])]
    public function count(): JsonResponse
    {
        $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');
        $user = $this->getUser();
        
        error_log("Counting notifications for user: " . $user->getEmail() . " (ID: " . $user->getId() . ")");
        
        $count = $this->notificationService->countUnreadNotifications($user);
        error_log("Found {$count} unread notifications");
        
        return $this->json(['count' => $count]);
    }

    /**
     * List notifications
     */
    #[Route('/', name: 'app_notifications_list', methods: ['GET'])]
    public function list(Request $request): Response
    {
        $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');
        $user = $this->getUser();
        
        error_log("Listing notifications for user: " . $user->getEmail() . " (ID: " . $user->getId() . ")");
        
        $notifications = $this->notificationService->getUnreadNotifications($user, 20);
        error_log("Found " . count($notifications) . " notifications");
        
        // Handle AJAX requests for the notifications dropdown
        if ($request->query->has('ajax')) {
            $data = [];
            foreach ($notifications as $notification) {
                error_log("Processing notification ID: " . $notification->getId() . 
                         ", Type: " . $notification->getType() . 
                         ", Content: " . $notification->getContent());
                         
                $data[] = [
                    'id' => $notification->getId(),
                    'type' => $notification->getType(),
                    'content' => $notification->getContent(),
                    'url' => $notification->getUrl(),
                    'isRead' => $notification->isIsRead(),
                    'createdAt' => $notification->getCreatedAt()->format('c'),
                ];
            }
            return $this->json(['notifications' => $data]);
        }
        
        return $this->render('notifications/list.html.twig', [
            'notifications' => $notifications
        ]);
    }

    /**
     * Mark a notification as read
     */
    #[Route('/{id}/mark-read', name: 'app_notifications_mark_read', methods: ['POST'])]
    public function markRead(Notification $notification): JsonResponse
    {
        $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');
        
        error_log("Marking notification as read: " . $notification->getId());
        
        // Security check: only the notification owner can mark it as read
        if ($notification->getUser() !== $this->getUser()) {
            error_log("Unauthorized attempt to mark notification as read");
            return $this->json(['success' => false, 'message' => 'Unauthorized'], Response::HTTP_FORBIDDEN);
        }
        
        $this->notificationService->markAsRead($notification);
        error_log("Successfully marked notification as read");
        
        return $this->json(['success' => true]);
    }

    /**
     * Mark all notifications as read
     */
    #[Route('/mark-all-read', name: 'app_notifications_mark_all_read', methods: ['POST'])]
    public function markAllRead(): JsonResponse
    {
        $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');
        $user = $this->getUser();
        
        error_log("Marking all notifications as read for user: " . $user->getEmail());
        
        $this->notificationService->markAllAsRead($user);
        error_log("Successfully marked all notifications as read");
        
        return $this->json(['success' => true]);
    }
} 