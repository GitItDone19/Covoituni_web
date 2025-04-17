<?php

namespace App\Controller;

use App\Entity\Role;
use App\Entity\Utilisateur;
use App\Repository\RoleRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;

#[Route('/setup')]
class SetupController extends AbstractController
{
    private $entityManager;
    private $roleRepository;
    
    public function __construct(
        EntityManagerInterface $entityManager,
        RoleRepository $roleRepository
    ) {
        $this->entityManager = $entityManager;
        $this->roleRepository = $roleRepository;
    }
    
    #[Route('/profile', name: 'app_setup_profile')]
    public function setupProfile(Request $request): Response
    {
        /** @var Utilisateur $user */
        $user = $this->getUser();
        
        // Only allow access if the user is logged in
        if (!$user) {
            throw new AccessDeniedException('You must be logged in to access this page.');
        }
        
        // Check if user already has completed their profile (has phone number)
        if (!empty($user->getTel())) {
            // If they have a phone number set, they don't need setup
            $this->addFlash('info', 'Your profile is already set up.');
            return $this->redirectToRoute('app_login_redirect');
        }
        
        // Get all roles for the dropdown
        $roles = $this->roleRepository->findAll();
        
        // Handle form submission
        if ($request->isMethod('POST')) {
            $username = $request->request->get('username');
            $tel = $request->request->get('tel');
            $roleCode = $request->request->get('role');
            
            // Validate input
            $errors = false;
            
            if (empty($username)) {
                $this->addFlash('error', 'Username is required.');
                $errors = true;
            }
            
            if (empty($tel)) {
                $this->addFlash('error', 'Phone number is required.');
                $errors = true;
            }
            
            if (empty($roleCode)) {
                $this->addFlash('error', 'Role selection is required.');
                $errors = true;
            }
            
            if (!$errors) {
                // Get the role entity
                $role = $this->roleRepository->find($roleCode);
                
                if (!$role) {
                    $this->addFlash('error', 'Selected role is invalid.');
                } else {
                    // Update user profile
                    $user->setUsername($username);
                    $user->setTel($tel);
                    $user->setRole($role);
                    
                    $this->entityManager->flush();
                    
                    // Remove setup flag from session
                    $request->getSession()->remove('needs_setup');
                    
                    // Show success message
                    $this->addFlash('success', 'Your profile has been successfully set up!');
                    
                    // Redirect to welcome page
                    return $this->redirectToRoute('app_setup_welcome');
                }
            }
        }
        
        return $this->render('setup/profile.html.twig', [
            'roles' => $roles,
        ]);
    }
    
    #[Route('/welcome', name: 'app_setup_welcome')]
    public function welcome(): Response
    {
        /** @var Utilisateur $user */
        $user = $this->getUser();
        
        // Only allow access if the user is logged in
        if (!$user) {
            throw new AccessDeniedException('You must be logged in to access this page.');
        }
        
        return $this->render('setup/welcome.html.twig');
    }
} 