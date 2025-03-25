<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\ORM\EntityManagerInterface;
use App\Entity\Reclamation;

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
    
    #[Route('/reclamation/submit', name: 'app_conducteur_reclamation_submit', methods: ['POST'])]
    public function submitReclamation(Request $request, EntityManagerInterface $entityManager): Response
    {
        // Make sure only users with ROLE_CONDUCTEUR can access this page
        $this->denyAccessUnlessGranted('ROLE_CONDUCTEUR');
        
        $user = $this->getUser();
        $subject = $request->request->get('subject');
        $description = $request->request->get('description');
        
        // Validate input
        if (empty($subject) || empty($description)) {
            $this->addFlash('error', 'Le sujet et la description sont requis.');
            return $this->redirectToRoute('app_conducteur_reclamation');
        }
        
        // Create new reclamation
        $reclamation = new Reclamation();
        $reclamation->setUser($user);
        $reclamation->setSubject($subject);
        $reclamation->setDescription($description);
        $reclamation->setState('pending');
        $reclamation->setDate(new \DateTime());
        
        // Save the reclamation
        $entityManager->persist($reclamation);
        $entityManager->flush();
        
        $this->addFlash('success', 'Votre réclamation a été envoyée avec succès.');
        return $this->redirectToRoute('app_conducteur_dashboard');
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