<?php

namespace App\Controller;

use App\Entity\Reclamation;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\ORM\EntityManagerInterface;

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
    
    #[Route('/reclamation/submit', name: 'app_passager_reclamation_submit', methods: ['POST'])]
    public function submitReclamation(Request $request, EntityManagerInterface $entityManager): Response
    {
        // Make sure only users with ROLE_PASSAGER can access this page
        $this->denyAccessUnlessGranted('ROLE_PASSAGER');
        
        $user = $this->getUser();
        $subject = $request->request->get('subject');
        $description = $request->request->get('description');
        
        // Validate input
        if (empty($subject) || empty($description)) {
            $this->addFlash('error', 'Le sujet et la description sont requis.');
            return $this->redirectToRoute('app_passager_reclamation');
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
        return $this->redirectToRoute('app_passager_dashboard');
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