<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\ORM\EntityManagerInterface;
use App\Entity\Trajet;
use App\Entity\Annonce;
use App\Repository\TrajetRepository;
use App\Repository\AnnonceRepository;
use App\Entity\Reservation;
use Symfony\Component\HttpFoundation\Request;

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
    
    #[Route('/annonce/submit', name: 'app_conducteur_annonce_submit', methods: ['POST'])]
    public function annonceSubmit(Request $request, EntityManagerInterface $entityManager): Response
    {
        // Make sure only users with ROLE_CONDUCTEUR can access this endpoint
        $this->denyAccessUnlessGranted('ROLE_CONDUCTEUR');
        
        $user = $this->getUser();
        
        // Create new trajet
        $trajet = new Trajet();
        $trajet->setDeparturePoint($request->request->get('depart'));
        $trajet->setArrivalPoint($request->request->get('destination'));
        $trajet->setPrice(floatval($request->request->get('prix')));
        $trajet->setCreatedAt(new \DateTime());
        $trajet->setUpdatedAt(new \DateTime());
        
        $entityManager->persist($trajet);
        
        // Create new annonce using the trajet
        $annonce = new Annonce();
        $annonce->setTitre($request->request->get('depart') . ' → ' . $request->request->get('destination'));
        $annonce->setDescription($request->request->get('description') ?? '');
        $annonce->setTrajet($trajet);
        $annonce->setDriverId($user->getId());
        $annonce->setAvailableSeats(intval($request->request->get('places')));
        $annonce->setStatus('ouvert');
        $annonce->setDatePublication(new \DateTime());
        
        // Parse date and time
        $departureDate = new \DateTime($request->request->get('date') . ' ' . $request->request->get('heure'));
        $annonce->setDepartureDate($departureDate);
        
        $entityManager->persist($annonce);
        $entityManager->flush();
        
        $this->addFlash('success', 'Votre annonce a été publiée avec succès !');
        
        return $this->redirectToRoute('app_conducteur_liste_annonce');
    }
    
    #[Route('/reservations', name: 'app_conducteur_reservations')]
    public function reservations(EntityManagerInterface $entityManager): Response
    {
        // Make sure only users with ROLE_CONDUCTEUR can access this page
        $this->denyAccessUnlessGranted('ROLE_CONDUCTEUR');
        
        $user = $this->getUser();
        
        // Récupérer les annonces du conducteur
        $annonces = $entityManager->getRepository(Annonce::class)
            ->findByDriver($user->getId());
        
        // Créer un tableau pour stocker les réservations par annonce
        $reservationsByAnnonce = [];
        
        // Pour chaque annonce, récupérer ses réservations
        foreach ($annonces as $annonce) {
            $reservationsByAnnonce[$annonce->getId()] = [
                'annonce' => $annonce,
                'reservations' => $entityManager->getRepository(Reservation::class)
                    ->findBy(['annonce' => $annonce], ['dateReservation' => 'DESC'])
            ];
        }
        
        return $this->render('conducteur/reservations.html.twig', [
            'user' => $user,
            'reservationsByAnnonce' => $reservationsByAnnonce
        ]);
    }
    
    #[Route('/accepter-reservation/{id}', name: 'app_conducteur_accepter_reservation', methods: ['POST'])]
    public function accepterReservation(Reservation $reservation, EntityManagerInterface $entityManager): Response
    {
        // Make sure only users with ROLE_CONDUCTEUR can access this endpoint
        $this->denyAccessUnlessGranted('ROLE_CONDUCTEUR');
        
        $user = $this->getUser();
        $annonce = $reservation->getAnnonce();
        
        // Vérifier que l'utilisateur est bien le conducteur de cette annonce
        if (!$annonce || $annonce->getDriverId() !== $user->getId()) {
            throw $this->createAccessDeniedException('Vous n\'êtes pas autorisé à gérer cette réservation.');
        }
        
        // Vérifier que la réservation est en attente
        if ($reservation->getStatus() !== 'PENDING') {
            $this->addFlash('error', 'Cette réservation ne peut plus être acceptée.');
            return $this->redirectToRoute('app_conducteur_reservations');
        }
        
        // Accepter la réservation
        $reservation->setStatus('ACCEPTED');
        $reservation->setUpdatedAt(new \DateTime());
        
        $entityManager->flush();
        
        $this->addFlash('success', 'La réservation a été acceptée avec succès.');
        
        return $this->redirectToRoute('app_conducteur_reservations');
    }
    
    #[Route('/refuser-reservation/{id}', name: 'app_conducteur_refuser_reservation', methods: ['POST'])]
    public function refuserReservation(Reservation $reservation, EntityManagerInterface $entityManager): Response
    {
        // Make sure only users with ROLE_CONDUCTEUR can access this endpoint
        $this->denyAccessUnlessGranted('ROLE_CONDUCTEUR');
        
        $user = $this->getUser();
        $annonce = $reservation->getAnnonce();
        
        // Vérifier que l'utilisateur est bien le conducteur de cette annonce
        if (!$annonce || $annonce->getDriverId() !== $user->getId()) {
            throw $this->createAccessDeniedException('Vous n\'êtes pas autorisé à gérer cette réservation.');
        }
        
        // Vérifier que la réservation est en attente
        if ($reservation->getStatus() !== 'PENDING') {
            $this->addFlash('error', 'Cette réservation ne peut plus être refusée.');
            return $this->redirectToRoute('app_conducteur_reservations');
        }
        
        // Refuser la réservation
        $reservation->setStatus('REJECTED');
        $reservation->setUpdatedAt(new \DateTime());
        
        // Libérer une place dans l'annonce
        if ($annonce) {
            $annonce->setAvailableSeats($annonce->getAvailableSeats() + 1);
            
            // Si l'annonce était pleine, la remettre à disponible
            if ($annonce->getStatus() === 'plein') {
                $annonce->setStatus('ouvert');
            }
        }
        
        $entityManager->flush();
        
        $this->addFlash('success', 'La réservation a été refusée avec succès.');
        
        return $this->redirectToRoute('app_conducteur_reservations');
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
    
    #[Route('/liste-trajet', name: 'app_conducteur_liste_trajet')]
    public function listeTrajet(TrajetRepository $trajetRepository): Response
    {
        // Make sure only users with ROLE_CONDUCTEUR can access this page
        $this->denyAccessUnlessGranted('ROLE_CONDUCTEUR');
        
        $user = $this->getUser();
        
        // Récupérer les trajets depuis la base de données
        $trajets = $trajetRepository->findAllOrderedByDepartureDate('DESC');
        
        return $this->render('conducteur/liste_trajet.html.twig', [
            'user' => $user,
            'trajets' => $trajets
        ]);
    }
    
    #[Route('/liste-annonce', name: 'app_conducteur_liste_annonce')]
    public function listeAnnonce(AnnonceRepository $annonceRepository): Response
    {
        // Make sure only users with ROLE_CONDUCTEUR can access this page
        $this->denyAccessUnlessGranted('ROLE_CONDUCTEUR');
        
        $user = $this->getUser();
        
        // Récupérer les annonces depuis la base de données
        $annonces = $annonceRepository->findByDriver($user->getId());
        
        return $this->render('conducteur/liste_annonce.html.twig', [
            'user' => $user,
            'annonces' => $annonces
        ]);
    }
    
    #[Route('/ajouter-trajet', name: 'app_conducteur_ajouter_trajet')]
    public function ajouterTrajet(): Response
    {
        // Make sure only users with ROLE_CONDUCTEUR can access this page
        $this->denyAccessUnlessGranted('ROLE_CONDUCTEUR');
        
        $user = $this->getUser();
        
        return $this->render('conducteur/ajouter_trajet.html.twig', [
            'user' => $user
        ]);
    }
    
    #[Route('/ajouter-trajet/submit', name: 'app_conducteur_ajouter_trajet_submit', methods: ['POST'])]
    public function ajouterTrajetSubmit(Request $request, EntityManagerInterface $entityManager): Response
    {
        // Make sure only users with ROLE_CONDUCTEUR can access this endpoint
        $this->denyAccessUnlessGranted('ROLE_CONDUCTEUR');
        
        $user = $this->getUser();
        
        // Create new trajet
        $trajet = new Trajet();
        $trajet->setTitre($request->request->get('titre'));
        $trajet->setDeparturePoint($request->request->get('departure_point'));
        $trajet->setArrivalPoint($request->request->get('arrival_point'));
        $trajet->setPrice(floatval($request->request->get('price')));
        $trajet->setCreatedAt(new \DateTime());
        $trajet->setUpdatedAt(new \DateTime());
        
        $entityManager->persist($trajet);
        $entityManager->flush();
        
        $this->addFlash('success', 'Votre trajet a été ajouté avec succès !');
        
        return $this->redirectToRoute('app_conducteur_liste_trajet');
    }
    
    #[Route('/ajouter-annonce', name: 'app_conducteur_ajouter_annonce')]
    public function ajouterAnnonce(TrajetRepository $trajetRepository): Response
    {
        // Make sure only users with ROLE_CONDUCTEUR can access this page
        $this->denyAccessUnlessGranted('ROLE_CONDUCTEUR');
        
        $user = $this->getUser();
        
        // Récupérer les trajets disponibles
        $trajets = $trajetRepository->findAllOrderedByDepartureDate();
        
        return $this->render('conducteur/ajouter_annonce.html.twig', [
            'user' => $user,
            'trajets' => $trajets
        ]);
    }
    
    #[Route('/ajouter-annonce/submit', name: 'app_conducteur_ajouter_annonce_submit', methods: ['POST'])]
    public function ajouterAnnonceSubmit(Request $request, EntityManagerInterface $entityManager, TrajetRepository $trajetRepository): Response
    {
        // Make sure only users with ROLE_CONDUCTEUR can access this endpoint
        $this->denyAccessUnlessGranted('ROLE_CONDUCTEUR');
        
        $user = $this->getUser();
        $trajetId = $request->request->get('trajet_id');
        
        // Récupérer le trajet sélectionné
        $trajet = $trajetRepository->find($trajetId);
        
        if (!$trajet) {
            $this->addFlash('error', 'Le trajet sélectionné n\'existe pas.');
            return $this->redirectToRoute('app_conducteur_ajouter_annonce');
        }
        
        $annonce = new Annonce();
        $annonce->setTitre($request->request->get('titre'));
        $annonce->setDescription($request->request->get('description'));
        $annonce->setTrajet($trajet);
        $annonce->setDriverId($user->getId());
        $annonce->setCarId(1); // Valeur par défaut, à ajuster selon votre modèle
        $annonce->setAvailableSeats((int)$request->request->get('available_seats'));
        $annonce->setStatus('ouvert');
        $annonce->setDatePublication(new \DateTime());
        $annonce->setDepartureDate(new \DateTime($request->request->get('departure_date')));
        
        $entityManager->persist($annonce);
        $entityManager->flush();
        
        $this->addFlash('success', 'L\'annonce a été ajoutée avec succès !');
        
        return $this->redirectToRoute('app_conducteur_liste_annonce');
    }
    
    #[Route('/terminer-annonce/{id}', name: 'app_conducteur_terminer_annonce', methods: ['POST'])]
    public function terminerAnnonce(Annonce $annonce, EntityManagerInterface $entityManager): Response
    {
        // Make sure only users with ROLE_CONDUCTEUR can access this endpoint
        $this->denyAccessUnlessGranted('ROLE_CONDUCTEUR');
        
        // Vérifier que l'utilisateur actuel est bien le conducteur de cette annonce
        $user = $this->getUser();
        if ($user->getId() !== $annonce->getDriverId()) {
            throw $this->createAccessDeniedException('Vous n\'êtes pas autorisé à terminer cette annonce.');
        }
        
        // Changer le statut de l'annonce à "termine"
        $annonce->setStatus('termine');
        $annonce->setDateTermination(new \DateTime());
        
        // Mettre à jour toutes les réservations en cours pour cette annonce
        foreach ($annonce->getReservations() as $reservation) {
            if ($reservation->getStatus() === 'ACCEPTED') {
                $reservation->setStatus('COMPLETED');
                $reservation->setUpdatedAt(new \DateTime());
            }
        }
        
        $entityManager->flush();
        
        $this->addFlash('success', 'L\'annonce a été marquée comme terminée avec succès.');
        
        return $this->redirectToRoute('app_conducteur_liste_annonce');
    }
    
    #[Route('/modifier-annonce/{id}', name: 'app_conducteur_modifier_annonce')]
    public function modifierAnnonce(Annonce $annonce, TrajetRepository $trajetRepository): Response
    {
        // Make sure only users with ROLE_CONDUCTEUR can access this endpoint
        $this->denyAccessUnlessGranted('ROLE_CONDUCTEUR');
        
        // Vérifier que l'utilisateur actuel est bien le conducteur de cette annonce
        $user = $this->getUser();
        if ($user->getId() !== $annonce->getDriverId()) {
            throw $this->createAccessDeniedException('Vous n\'êtes pas autorisé à modifier cette annonce.');
        }
        
        // Récupérer les trajets disponibles
        $trajets = $trajetRepository->findAllOrderedByDepartureDate();
        
        return $this->render('conducteur/modifier_annonce.html.twig', [
            'user' => $user,
            'annonce' => $annonce,
            'trajets' => $trajets
        ]);
    }
    
    #[Route('/modifier-annonce/{id}/submit', name: 'app_conducteur_modifier_annonce_submit', methods: ['POST'])]
    public function modifierAnnonceSubmit(Request $request, Annonce $annonce, EntityManagerInterface $entityManager, TrajetRepository $trajetRepository): Response
    {
        // Make sure only users with ROLE_CONDUCTEUR can access this endpoint
        $this->denyAccessUnlessGranted('ROLE_CONDUCTEUR');
        
        // Vérifier que l'utilisateur actuel est bien le conducteur de cette annonce
        $user = $this->getUser();
        if ($user->getId() !== $annonce->getDriverId()) {
            throw $this->createAccessDeniedException('Vous n\'êtes pas autorisé à modifier cette annonce.');
        }
        
        $trajetId = $request->request->get('trajet_id');
        $trajet = $trajetRepository->find($trajetId);
        
        if (!$trajet) {
            $this->addFlash('error', 'Le trajet sélectionné n\'existe pas.');
            return $this->redirectToRoute('app_conducteur_modifier_annonce', ['id' => $annonce->getId()]);
        }
        
        $annonce->setTitre($request->request->get('titre'));
        $annonce->setDescription($request->request->get('description'));
        $annonce->setTrajet($trajet);
        $annonce->setAvailableSeats((int)$request->request->get('available_seats'));
        $annonce->setDepartureDate(new \DateTime($request->request->get('departure_date')));
        
        $entityManager->flush();
        
        $this->addFlash('success', 'L\'annonce a été modifiée avec succès !');
        
        return $this->redirectToRoute('app_conducteur_liste_annonce');
    }
    
    #[Route('/supprimer-annonce/{id}', name: 'app_conducteur_supprimer_annonce', methods: ['GET'])]
    public function supprimerAnnonce(Annonce $annonce, EntityManagerInterface $entityManager): Response
    {
        // Make sure only users with ROLE_CONDUCTEUR can access this endpoint
        $this->denyAccessUnlessGranted('ROLE_CONDUCTEUR');
        
        // Vérifier que l'utilisateur actuel est bien le conducteur de cette annonce
        $user = $this->getUser();
        if ($user->getId() !== $annonce->getDriverId()) {
            throw $this->createAccessDeniedException('Vous n\'êtes pas autorisé à supprimer cette annonce.');
        }
        
        // Récupérer toutes les réservations associées à cette annonce
        $reservations = $annonce->getReservations();
        
        // Supprimer d'abord toutes les réservations associées
        foreach ($reservations as $reservation) {
            $entityManager->remove($reservation);
        }
        
        // Puis supprimer l'annonce
        $entityManager->remove($annonce);
        $entityManager->flush();
        
        $this->addFlash('success', 'L\'annonce a été supprimée avec succès !');
        
        return $this->redirectToRoute('app_conducteur_liste_annonce');
    }
} 