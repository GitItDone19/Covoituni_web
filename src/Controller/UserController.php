<?php

namespace App\Controller;

use App\Service\UserService;
use App\Service\UserBanService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;
use Doctrine\ORM\EntityManagerInterface;

#[Route('/user')]
class UserController extends AbstractController
{
    private $userService;
    private $userBanService;

    public function __construct(UserService $userService, UserBanService $userBanService)
    {
        $this->userService = $userService;
        $this->userBanService = $userBanService;
    }

    #[Route('/profile', name: 'app_user_profile')]
    public function profile(): Response
    {
        // Get the current user
        $user = $this->getUser();
        
        if (!$user) {
            return $this->redirectToRoute('app_login');
        }

        return $this->render('user/profile.html.twig', [
            'user' => $user,
        ]);
    }

    #[Route('/profile/edit', name: 'app_user_edit_profile')]
    public function editProfile(Request $request): Response
    {
        $user = $this->getUser();
        
        if (!$user) {
            return $this->redirectToRoute('app_login');
        }

        if ($request->isMethod('POST')) {
            try {
                $data = [
                    'nom' => $request->request->get('nom'),
                    'prenom' => $request->request->get('prenom'),
                    'username' => $request->request->get('username'),
                    'tel' => $request->request->get('tel'),
                ];

                $this->userService->updateUserProfile($user->getId(), $data);
                
                $this->addFlash('success', 'Profile updated successfully');
                return $this->redirectToRoute('app_user_profile');
            } catch (\Exception $e) {
                $this->addFlash('error', $e->getMessage());
            }
        }

        return $this->render('user/edit_profile.html.twig', [
            'user' => $user,
        ]);
    }

    #[Route('/profile/change-password', name: 'app_user_change_password')]
    public function changePassword(Request $request): Response
    {
        $user = $this->getUser();
        
        if (!$user) {
            return $this->redirectToRoute('app_login');
        }

        if ($request->isMethod('POST')) {
            $currentPassword = $request->request->get('current_password');
            $newPassword = $request->request->get('new_password');
            $confirmPassword = $request->request->get('confirm_password');

            if ($newPassword !== $confirmPassword) {
                $this->addFlash('error', 'New passwords do not match');
            } else {
                try {
                    $success = $this->userService->changePassword(
                        $user->getId(),
                        $currentPassword,
                        $newPassword
                    );

                    if ($success) {
                        $this->addFlash('success', 'Password changed successfully');
                        return $this->redirectToRoute('app_user_profile');
                    } else {
                        $this->addFlash('error', 'Current password is incorrect');
                    }
                } catch (\Exception $e) {
                    $this->addFlash('error', $e->getMessage());
                }
            }
        }

        return $this->render('user/change_password.html.twig');
    }

    #[Route('/admin/users', name: 'app_admin_users')]
    public function listUsers(Request $request): Response
    {
        // Check if the user has admin rights
        $this->denyAccessUnlessGranted('ROLE_ADMIN');

        $page = max(1, $request->query->getInt('page', 1));
        $limit = $request->query->getInt('limit', 10);
        $searchTerm = $request->query->get('search', '');
        $filter = $request->query->get('filter', '');

        $result = [];
        
        // Handle filtering by role
        if (!empty($filter)) {
            $roleCode = strtoupper($filter);
            if (in_array($roleCode, ['ADMIN', 'CONDUCTEUR', 'PASSAGER'])) {
                $result = $this->userService->findUsersByRole($roleCode, $page, $limit);
            }
        } 
        // Handle search
        else if (!empty($searchTerm)) {
            $result = $this->userService->searchUsers($searchTerm, $page, $limit);
        } 
        // Default list
        else {
            $result = $this->userService->listUsers($page, $limit);
        }
        
        // Check ban status for each user
        $users = $result['users'];
        $bannedStatuses = [];
        
        foreach ($users as $user) {
            $bannedStatuses[$user->getId()] = $this->userBanService->isUserBanned($user);
        }

        return $this->render('user/list.html.twig', [
            'users' => $users,
            'totalUsers' => $result['totalUsers'],
            'page' => $page,
            'limit' => $limit,
            'totalPages' => ceil($result['totalUsers'] / $limit),
            'bannedStatuses' => $bannedStatuses,
            'user' => $this->getUser()
        ]);
    }

    #[Route('/admin/users/{id}/delete', name: 'app_admin_user_delete', methods: ['POST'])]
    public function deleteUser(int $id, Request $request): Response
    {
        // Check if the user has admin rights
        $this->denyAccessUnlessGranted('ROLE_ADMIN');

        // CSRF token validation
        if (!$this->isCsrfTokenValid('delete-user-'.$id, $request->request->get('_token'))) {
            throw new AccessDeniedException('Invalid CSRF token');
        }

        try {
            $success = $this->userService->deleteUser($id);
            
            if ($success) {
                $this->addFlash('success', 'User deleted successfully');
            } else {
                $this->addFlash('error', 'User not found');
            }
        } catch (\Exception $e) {
            $this->addFlash('error', $e->getMessage());
        }

        return $this->redirectToRoute('app_admin_users');
    }

    #[Route('/admin/users/{id}/edit-roles', name: 'app_user_edit_roles', methods: ['GET', 'POST'])]
    public function editRoles(int $id, Request $request, EntityManagerInterface $entityManager): Response
    {
        // Check if the user has admin rights
        $this->denyAccessUnlessGranted('ROLE_ADMIN');
        
        $user = $this->userService->findUserById($id);
        
        if (!$user) {
            $this->addFlash('error', 'User not found');
            return $this->redirectToRoute('app_admin_users');
        }
        
        if ($request->isMethod('POST')) {
            // CSRF token validation
            if (!$this->isCsrfTokenValid('edit-roles'.$id, $request->request->get('_token'))) {
                throw new AccessDeniedException('Invalid CSRF token');
            }
            
            $roleCode = $request->request->get('role_code', 'PASSAGER');
            
            // Validate role code
            if (!in_array($roleCode, ['PASSAGER', 'CONDUCTEUR', 'ADMIN'])) {
                $this->addFlash('error', 'Invalid role selected');
                return $this->redirectToRoute('app_user_edit_roles', ['id' => $id]);
            }
            
            // Find the Role entity
            $role = $entityManager->getRepository(\App\Entity\Role::class)->find($roleCode);
            if (!$role) {
                $this->addFlash('error', 'Role not found in database');
                return $this->redirectToRoute('app_user_edit_roles', ['id' => $id]);
            }
            
            // Update the user's role
            $user->setRoleCode($roleCode);
            $user->setRole($role);
            $entityManager->flush();
            
            $this->addFlash('success', 'User role updated successfully');
            return $this->redirectToRoute('app_admin_users');
        }
        
        return $this->render('user/edit_roles.html.twig', [
            'user' => $user,
        ]);
    }

    #[Route('/admin/users/{id}/ban', name: 'app_admin_user_ban', methods: ['POST'])]
    public function banUser(int $id, Request $request): Response
    {
        // Check if the user has admin rights
        $this->denyAccessUnlessGranted('ROLE_ADMIN');

        // CSRF token validation
        if (!$this->isCsrfTokenValid('ban-user-'.$id, $request->request->get('_token'))) {
            throw new AccessDeniedException('Invalid CSRF token');
        }

        $user = $this->userService->findUserById($id);
        
        if (!$user) {
            $this->addFlash('error', 'Utilisateur non trouvé');
            return $this->redirectToRoute('app_admin_users');
        }
        
        // Don't allow banning administrators if not super admin
        if ($user->getRoleCode() === 'ADMIN' && !$this->isGranted('ROLE_SUPER_ADMIN')) {
            $this->addFlash('error', 'Vous ne pouvez pas bannir un administrateur');
            return $this->redirectToRoute('app_admin_users');
        }
        
        // Toggle ban status using the service
        $isBanned = $this->userBanService->toggleBanStatus($user);
        
        if (!$isBanned) {
            $this->addFlash('success', 'L\'utilisateur a été débloqué avec succès');
        } else {
            $this->addFlash('success', 'L\'utilisateur a été banni avec succès');
        }
        
        return $this->redirectToRoute('app_admin_users', [
            'filter' => $request->query->get('filter'),
            'search' => $request->query->get('search'),
            'page' => $request->query->get('page', 1)
        ]);
    }
} 