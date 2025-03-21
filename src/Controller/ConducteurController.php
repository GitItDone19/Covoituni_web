<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/conducteur')]
class ConducteurController extends AbstractController
{
    #[Route('/dashboard', name: 'app_conducteur_dashboard')]
    public function dashboard(): Response
    {
        // Make sure only users with ROLE_CONDUCTEUR can access this page
        $this->denyAccessUnlessGranted('ROLE_CONDUCTEUR');
        
        $user = $this->getUser();
        
        return $this->render('conducteur/dashboard.html.twig', [
            'user' => $user
        ]);
    }
    
    #[Route('/profile', name: 'app_conducteur_profile')]
    public function profile(): Response
    {
        // Make sure only users with ROLE_CONDUCTEUR can access this page
        $this->denyAccessUnlessGranted('ROLE_CONDUCTEUR');
        
        $user = $this->getUser();
        
        return $this->render('conducteur/profile.html.twig', [
            'user' => $user
        ]);
    }
    
    #[Route('/reclamation', name: 'app_conducteur_reclamation')]
    public function reclamation(): Response
    {
        // Make sure only users with ROLE_CONDUCTEUR can access this page
        $this->denyAccessUnlessGranted('ROLE_CONDUCTEUR');
        
        $user = $this->getUser();
        
        return $this->render('conducteur/reclamation.html.twig', [
            'user' => $user
        ]);
    }
    
    #[Route('/annonce', name: 'app_conducteur_annonce')]
    public function annonce(): Response
    {
        // Make sure only users with ROLE_CONDUCTEUR can access this page
        $this->denyAccessUnlessGranted('ROLE_CONDUCTEUR');
        
        $user = $this->getUser();
        
        return $this->render('conducteur/annonce.html.twig', [
            'user' => $user
        ]);
    }
    
    #[Route('/reservations', name: 'app_conducteur_reservations')]
    public function reservations(): Response
    {
        // Make sure only users with ROLE_CONDUCTEUR can access this page
        $this->denyAccessUnlessGranted('ROLE_CONDUCTEUR');
        
        $user = $this->getUser();
        
        return $this->render('conducteur/reservations.html.twig', [
            'user' => $user
        ]);
    }
    
    #[Route('/voiture', name: 'app_conducteur_voiture')]
    public function voiture(): Response
    {
        // Make sure only users with ROLE_CONDUCTEUR can access this page
        $this->denyAccessUnlessGranted('ROLE_CONDUCTEUR');
        
        $user = $this->getUser();
        
        return $this->render('conducteur/voiture.html.twig', [
            'user' => $user
        ]);
    }
} 