<?php

namespace App\Controller;

use App\Entity\Avis;
use App\Entity\Utilisateur;
use App\Repository\UtilisateurRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
<<<<<<< Updated upstream
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\AvisRepository;
=======
use App\Entity\Trajet;
use App\Repository\TrajetRepository;
use App\Repository\AnnonceRepository;
use App\Entity\Annonce;
use App\Entity\Reservation;
use App\Entity\Reclamation;
use App\Repository\ReservationRepository;
use App\Repository\EventRepository;
use App\Repository\AnnonceEventRepository;
use App\Repository\EventParticipationRepository;
use App\Entity\EventParticipation;
use Symfony\Component\Security\Core\User\UserInterface;
use App\Form\AvisType;
>>>>>>> Stashed changes

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
    public function avis(UtilisateurRepository $utilisateurRepository): Response
    {
        // Make sure only users with ROLE_PASSAGER can access this page
        $this->denyAccessUnlessGranted('ROLE_PASSAGER');
        
        $user = $this->getUser();
        
        // Récupérer tous les conducteurs
        $conducteurs = $utilisateurRepository->findConducteurs();
        
        // Déboguer les conducteurs
        dump($conducteurs);
        
        // Si aucun conducteur n'est trouvé, essayons une autre approche
        if (empty($conducteurs)) {
            // Récupérer tous les utilisateurs et filtrer manuellement
            $allUsers = $utilisateurRepository->findAll();
            $conducteurs = array_filter($allUsers, function($user) {
                // Adapter cette condition selon votre structure
                return $user->getType() === 'conducteur' || 
                       (method_exists($user, 'getRoles') && in_array('ROLE_CONDUCTEUR', $user->getRoles()));
            });
            
            dump('Méthode alternative', $conducteurs);
        }
        
        return $this->render('passager/avis.html.twig', [
            'user' => $user,
            'conducteurs' => $conducteurs
        ]);
    }
    
    #[Route('/avis/submit', name: 'app_passager_avis_submit', methods: ['POST'])]
    public function submitAvis(Request $request, EntityManagerInterface $entityManager, UserInterface $user, $id): Response
    {
<<<<<<< Updated upstream
        $this->denyAccessUnlessGranted('ROLE_PASSAGER');
        
        $conducteurId = $request->request->get('driver');
        $rating = $request->request->get('rating');
        $comment = $request->request->get('comment');
        
        // Validation
        if (!$conducteurId || !$rating || !$comment) {
            $this->addFlash('error', 'Tous les champs sont obligatoires');
            return $this->redirectToRoute('app_passager_avis');
        }
        
        $conducteur = $utilisateurRepository->find($conducteurId);
=======
        // Vérifier si l'utilisateur est bien un passager
        if (!in_array('ROLE_PASSAGER', $user->getRoles())) {
            $this->addFlash('error', 'Vous n\'avez pas les droits pour accéder à cette page');
            return $this->redirectToRoute('app_login');
        }

        // Récupérer le conducteur
        $conducteur = $entityManager->getRepository(Utilisateur::class)->find($id);
>>>>>>> Stashed changes
        if (!$conducteur) {
            throw $this->createNotFoundException('Conducteur non trouvé');
        }

        // Vérifier si le passager a déjà soumis un avis pour ce conducteur
        $avisRepository = $entityManager->getRepository(Avis::class);
        if ($avisRepository->hasReviewForDriver($user->getId(), $id)) {
            $this->addFlash('error', 'Vous avez déjà soumis un avis pour ce conducteur');
            return $this->redirectToRoute('app_passager_avis');
        }

        $avis = new Avis();
        $avis->setPassager($user);
        $avis->setConducteur($conducteur);
        $avis->setDate(new \DateTime());

        $form = $this->createForm(AvisType::class, $avis);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($avis);
            $entityManager->flush();

            $this->addFlash('success', 'Avis soumis avec succès');
            return $this->redirectToRoute('app_passager_avis');
        }

        return $this->render('passager/avis/new.html.twig', [
            'form' => $form->createView(),
            'conducteur' => $conducteur,
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
    
    #[Route('/avis/list', name: 'app_passager_avis_list')]
    public function avisList(AvisRepository $avisRepository): Response
    {
        // Make sure only users with ROLE_PASSAGER can access this page
        $this->denyAccessUnlessGranted('ROLE_PASSAGER');
        
        // Récupérer tous les avis
        $avis = $avisRepository->findAll();
        
        return $this->render('avis/list.html.twig', [
            'avis' => $avis,
        ]);
    }
} 