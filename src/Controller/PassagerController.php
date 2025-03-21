<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/passager')]
class PassagerController extends AbstractController
{
    #[Route('/dashboard', name: 'app_passager_dashboard')]
    public function dashboard(): Response
    {
        // Make sure only users with ROLE_PASSAGER can access this page
        $this->denyAccessUnlessGranted('ROLE_PASSAGER');
        
        $user = $this->getUser();
        
        return $this->render('passager/dashboard.html.twig', [
            'user' => $user
        ]);
    }
    
    #[Route('/profile', name: 'app_passager_profile')]
    public function profile(): Response
    {
        // Make sure only users with ROLE_PASSAGER can access this page
        $this->denyAccessUnlessGranted('ROLE_PASSAGER');
        
        $user = $this->getUser();
        
        return $this->render('passager/profile.html.twig', [
            'user' => $user
        ]);
    }
    
    #[Route('/reclamation', name: 'app_passager_reclamation')]
    public function reclamation(): Response
    {
        // Make sure only users with ROLE_PASSAGER can access this page
        $this->denyAccessUnlessGranted('ROLE_PASSAGER');
        
        $user = $this->getUser();
        
        return $this->render('passager/reclamation.html.twig', [
            'user' => $user
        ]);
    }
    
    #[Route('/avis', name: 'app_passager_avis')]
    public function avis(): Response
    {
        // Make sure only users with ROLE_PASSAGER can access this page
        $this->denyAccessUnlessGranted('ROLE_PASSAGER');
        
        $user = $this->getUser();
        
        return $this->render('passager/avis.html.twig', [
            'user' => $user
        ]);
    }
    
    #[Route('/reservation', name: 'app_passager_reservation')]
    public function reservation(): Response
    {
        // Make sure only users with ROLE_PASSAGER can access this page
        $this->denyAccessUnlessGranted('ROLE_PASSAGER');
        
        $user = $this->getUser();
        
        return $this->render('passager/reservation.html.twig', [
            'user' => $user
        ]);
    }
} 