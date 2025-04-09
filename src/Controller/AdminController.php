<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/admin')]
class AdminController extends AbstractController
{
    #[Route('/dashboard', name: 'app_admin_dashboard')]
    public function dashboard(): Response
    {
        // Make sure only users with ROLE_ADMIN can access this page
        $this->denyAccessUnlessGranted('ROLE_ADMIN');
        
        $user = $this->getUser();
        
        return $this->render('admin/dashboard.html.twig', [
            'user' => $user
        ]);
    }
} 