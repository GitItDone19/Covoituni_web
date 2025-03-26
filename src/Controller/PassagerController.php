<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\ORM\EntityManagerInterface;
use App\Entity\Trajet;
use App\Repository\TrajetRepository;
use App\Repository\AnnonceRepository;
use App\Entity\Annonce;
use App\Entity\Reservation;
use App\Repository\ReservationRepository;
use App\Repository\EventRepository;
use App\Repository\AnnonceEventRepository;
use App\Repository\EventParticipationRepository;
use App\Entity\EventParticipation;

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
    
    #[Route('/liste-trajet', name: 'app_passager_liste_trajet')]
    public function listeTrajet(TrajetRepository $trajetRepository): Response
    {
        // Make sure only users with ROLE_PASSAGER can access this page
        $this->denyAccessUnlessGranted('ROLE_PASSAGER');
        
        $user = $this->getUser();
        
        // Récupérer les trajets depuis la base de données
        $trajets = $trajetRepository->findUpcomingTrips();
        
        return $this->render('passager/liste_trajet.html.twig', [
            'user' => $user,
            'trajets' => $trajets
        ]);
    }
    
    #[Route('/liste-annonce', name: 'app_passager_liste_annonce')]
    public function listeAnnonce(AnnonceRepository $annonceRepository): Response
    {
        // Make sure only users with ROLE_PASSAGER can access this page
        $this->denyAccessUnlessGranted('ROLE_PASSAGER');
        
        $user = $this->getUser();
        
        // Récupérer les annonces actives depuis la base de données
        $annonces = $annonceRepository->findActiveAnnouncements();
        
        return $this->render('passager/liste_annonce.html.twig', [
            'user' => $user,
            'annonces' => $annonces
        ]);
    }

    #[Route('/ajouter-trajet', name: 'app_passager_ajouter_trajet')]
    public function ajouterTrajet(): Response
    {
        $this->denyAccessUnlessGranted('ROLE_PASSAGER');
        
        return $this->render('passager/ajouter_trajet.html.twig', [
            'user' => $this->getUser()
        ]);
    }

    #[Route('/ajouter-trajet/submit', name: 'app_passager_ajouter_trajet_submit', methods: ['POST'])]
    public function ajouterTrajetSubmit(Request $request, EntityManagerInterface $entityManager): Response
    {
        $this->denyAccessUnlessGranted('ROLE_PASSAGER');
        
        $trajet = new Trajet();
        $trajet->setTitre($request->request->get('titre'));
        $trajet->setDeparturePoint($request->request->get('departure_point'));
        $trajet->setArrivalPoint($request->request->get('arrival_point'));
        $trajet->setPrice($request->request->get('price'));
        $trajet->setCreatedAt(new \DateTime());
        $trajet->setUpdatedAt(new \DateTime());

        // Déboguer les informations avant de persister
        $entityManager->persist($trajet);
        $entityManager->flush();

        $this->addFlash('success', 'Le trajet a été ajouté avec succès !');
        
        return $this->redirectToRoute('app_passager_liste_trajet');
    }

    #[Route('/modifier-trajet/{id}', name: 'app_passager_modifier_trajet')]
    public function modifierTrajet(Trajet $trajet): Response
    {
        $this->denyAccessUnlessGranted('ROLE_PASSAGER');
        
        return $this->render('passager/modifier_trajet.html.twig', [
            'user' => $this->getUser(),
            'trajet' => $trajet
        ]);
    }

    #[Route('/modifier-trajet/{id}/submit', name: 'app_passager_modifier_trajet_submit', methods: ['POST'])]
    public function modifierTrajetSubmit(Request $request, Trajet $trajet, EntityManagerInterface $entityManager): Response
    {
        $this->denyAccessUnlessGranted('ROLE_PASSAGER');
        
        $trajet->setTitre($request->request->get('titre'));
        $trajet->setDeparturePoint($request->request->get('departure_point'));
        $trajet->setArrivalPoint($request->request->get('arrival_point'));
        $trajet->setPrice($request->request->get('price'));
        $trajet->setUpdatedAt(new \DateTime());

        $entityManager->flush();

        $this->addFlash('success', 'Le trajet a été modifié avec succès !');
        
        return $this->redirectToRoute('app_passager_liste_trajet');
    }

    #[Route('/supprimer-trajet/{id}', name: 'app_passager_supprimer_trajet', methods: ['POST'])]
    public function supprimerTrajet(Trajet $trajet, EntityManagerInterface $entityManager): Response
    {
        $this->denyAccessUnlessGranted('ROLE_PASSAGER');
        
        // Récupérer toutes les annonces associées à ce trajet
        $annonces = $trajet->getAnnonces();
        
        // Supprimer d'abord toutes les annonces associées
        foreach ($annonces as $annonce) {
            $entityManager->remove($annonce);
        }
        
        // Puis supprimer le trajet
        $entityManager->remove($trajet);
        $entityManager->flush();

        $this->addFlash('success', 'Le trajet a été supprimé avec succès !');
        
        return $this->redirectToRoute('app_passager_liste_trajet');
    }

    #[Route('/ajouter-annonce', name: 'app_passager_ajouter_annonce')]
    public function ajouterAnnonce(TrajetRepository $trajetRepository): Response
    {
        $this->denyAccessUnlessGranted('ROLE_PASSAGER');
        
        $user = $this->getUser();
        
        // Récupérer les trajets disponibles
        $trajets = $trajetRepository->findAllOrderedByDepartureDate();
        
        return $this->render('passager/ajouter_annonce.html.twig', [
            'user' => $user,
            'trajets' => $trajets
        ]);
    }
    
    #[Route('/ajouter-annonce/submit', name: 'app_passager_ajouter_annonce_submit', methods: ['POST'])]
    public function ajouterAnnonceSubmit(Request $request, EntityManagerInterface $entityManager, TrajetRepository $trajetRepository): Response
    {
        $this->denyAccessUnlessGranted('ROLE_PASSAGER');
        
        $user = $this->getUser();
        $trajetId = $request->request->get('trajet_id');
        
        // Récupérer le trajet sélectionné
        $trajet = $trajetRepository->find($trajetId);
        
        if (!$trajet) {
            $this->addFlash('error', 'Le trajet sélectionné n\'existe pas.');
            return $this->redirectToRoute('app_passager_ajouter_annonce');
        }
        
        $annonce = new Annonce();
        $annonce->setTitre($request->request->get('titre'));
        $annonce->setDescription($request->request->get('description'));
        $annonce->setTrajet($trajet);
        $annonce->setDriverId($user->getId());
        $annonce->setCarId(1); // Valeur par défaut, à ajuster selon votre modèle
        $annonce->setAvailableSeats((int)$request->request->get('available_seats'));
        $annonce->setStatus($request->request->get('status'));
        $annonce->setDatePublication(new \DateTime());
        $annonce->setDepartureDate(new \DateTime($request->request->get('departure_date')));
        
        $entityManager->persist($annonce);
        $entityManager->flush();
        
        $this->addFlash('success', 'L\'annonce a été ajoutée avec succès !');
        
        return $this->redirectToRoute('app_passager_liste_annonce');
    }
    
    #[Route('/modifier-annonce/{id}', name: 'app_passager_modifier_annonce')]
    public function modifierAnnonce(Annonce $annonce, TrajetRepository $trajetRepository): Response
    {
        $this->denyAccessUnlessGranted('ROLE_PASSAGER');
        
        $user = $this->getUser();
        
        // Vérifier que l'annonce appartient à l'utilisateur
        if ($annonce->getDriverId() !== $user->getId()) {
            $this->addFlash('error', 'Vous n\'êtes pas autorisé à modifier cette annonce.');
            return $this->redirectToRoute('app_passager_liste_annonce');
        }
        
        // Récupérer les trajets disponibles
        $trajets = $trajetRepository->findAllOrderedByDepartureDate();
        
        return $this->render('passager/modifier_annonce.html.twig', [
            'user' => $user,
            'annonce' => $annonce,
            'trajets' => $trajets
        ]);
    }
    
    #[Route('/modifier-annonce/{id}/submit', name: 'app_passager_modifier_annonce_submit', methods: ['POST'])]
    public function modifierAnnonceSubmit(Request $request, Annonce $annonce, EntityManagerInterface $entityManager, TrajetRepository $trajetRepository): Response
    {
        $this->denyAccessUnlessGranted('ROLE_PASSAGER');
        
        $user = $this->getUser();
        
        // Vérifier que l'annonce appartient à l'utilisateur
        if ($annonce->getDriverId() !== $user->getId()) {
            $this->addFlash('error', 'Vous n\'êtes pas autorisé à modifier cette annonce.');
            return $this->redirectToRoute('app_passager_liste_annonce');
        }
        
        $trajetId = $request->request->get('trajet_id');
        $trajet = $trajetRepository->find($trajetId);
        
        if (!$trajet) {
            $this->addFlash('error', 'Le trajet sélectionné n\'existe pas.');
            return $this->redirectToRoute('app_passager_modifier_annonce', ['id' => $annonce->getId()]);
        }
        
        $annonce->setTitre($request->request->get('titre'));
        $annonce->setDescription($request->request->get('description'));
        $annonce->setTrajet($trajet);
        $annonce->setAvailableSeats((int)$request->request->get('available_seats'));
        $annonce->setStatus($request->request->get('status'));
        $annonce->setDepartureDate(new \DateTime($request->request->get('departure_date')));
        
        $entityManager->flush();
        
        $this->addFlash('success', 'L\'annonce a été modifiée avec succès !');
        
        return $this->redirectToRoute('app_passager_liste_annonce');
    }
    
    #[Route('/supprimer-annonce/{id}', name: 'app_passager_supprimer_annonce', methods: ['POST'])]
    public function supprimerAnnonce(Annonce $annonce, EntityManagerInterface $entityManager): Response
    {
        $this->denyAccessUnlessGranted('ROLE_PASSAGER');
        
        // Récupérer toutes les annonces associées à ce trajet
        $reservations = $annonce->getReservations();
        
        // Supprimer d'abord toutes les réservations associées
        foreach ($reservations as $reservation) {
            $entityManager->remove($reservation);
        }
        
        // Puis supprimer l'annonce
        $entityManager->remove($annonce);
        $entityManager->flush();

        $this->addFlash('success', 'L\'annonce a été supprimée avec succès !');
        
        return $this->redirectToRoute('app_passager_liste_annonce');
    }

    #[Route('/reservation-create/{id}', name: 'app_passager_reservation_create')]
    public function createReservation(Annonce $annonce, Request $request, EntityManagerInterface $entityManager): Response
    {
        $this->denyAccessUnlessGranted('ROLE_PASSAGER');
        
        $user = $this->getUser();
        
        // Vérifier si l'annonce est disponible pour réservation
        if ($annonce->getStatus() === 'plein' || $annonce->getStatus() === 'termine') {
            $this->addFlash('error', 'Désolé, cette annonce n\'est plus disponible pour réservation.');
            return $this->redirectToRoute('app_passager_liste_annonce');
        }
        
        // Vérifier si l'utilisateur n'a pas déjà réservé cette annonce
        foreach ($annonce->getReservations() as $existingReservation) {
            if ($existingReservation->getUserId() === $user->getId() && 
                in_array($existingReservation->getStatus(), ['PENDING', 'ACCEPTED'])) {
                $this->addFlash('error', 'Vous avez déjà une réservation en cours pour cette annonce.');
                return $this->redirectToRoute('app_passager_liste_annonce');
            }
        }
        
        if ($request->isMethod('POST')) {
            $comment = $request->request->get('comment');
            
            // Créer une nouvelle réservation
            $reservation = new Reservation();
            $reservation->setAnnonce($annonce);
            $reservation->setUserId($user->getId());
            $reservation->setStatus('PENDING');
            $reservation->setComment($comment);
            $reservation->setType('TRAJET');
            
            $entityManager->persist($reservation);
            
            // Vérifier s'il reste des places après cette réservation
            $placesRestantes = $annonce->getAvailableSeats() - 1;
            $annonce->setAvailableSeats($placesRestantes);
            
            // Si plus de places disponibles, marquer l'annonce comme pleine
            if ($placesRestantes <= 0) {
                $annonce->setStatus('plein');
            }
            
            $entityManager->flush();
            
            $this->addFlash('success', 'Votre réservation a été créée avec succès et est en attente de confirmation par le conducteur.');
            return $this->redirectToRoute('app_passager_mes_reservations');
        }
        
        return $this->render('passager/create_reservation.html.twig', [
            'annonce' => $annonce,
            'user' => $user
        ]);
    }

    #[Route('/mes-reservations', name: 'app_passager_mes_reservations')]
    public function mesReservations(EntityManagerInterface $entityManager): Response
    {
        $this->denyAccessUnlessGranted('ROLE_PASSAGER');
        
        $user = $this->getUser();
        
        // Récupérer les réservations de l'utilisateur avec les conducteurs
        $reservations = $entityManager->getRepository(Reservation::class)
            ->createQueryBuilder('r')
            ->leftJoin('r.annonce', 'a')
            ->leftJoin('r.annonceEvent', 'ae')
            ->leftJoin('App\Entity\Utilisateur', 'u1', 'WITH', 'a.driver_id = u1.id')
            ->leftJoin('App\Entity\Utilisateur', 'u2', 'WITH', 'ae.driverId = u2.id')
            ->where('r.userId = :userId')
            ->setParameter('userId', $user->getId())
            ->orderBy('r.dateReservation', 'DESC')
            ->getQuery()
            ->getResult();
        
        // Récupérer les données des conducteurs pour chaque réservation
        foreach ($reservations as $reservation) {
            if ($reservation->getType() == 'TRAJET' && $reservation->getAnnonce()) {
                $driverId = $reservation->getAnnonce()->getDriverId();
                $driver = $entityManager->getRepository('App\Entity\Utilisateur')
                    ->find($driverId);
                $reservation->driver = $driver;
            } elseif ($reservation->getType() == 'EVENT' && $reservation->getAnnonceEvent()) {
                $driverId = $reservation->getAnnonceEvent()->getDriverId();
                $driver = $entityManager->getRepository('App\Entity\Utilisateur')
                    ->find($driverId);
                $reservation->driver = $driver;
            }
        }
        
        return $this->render('passager/mes_reservations.html.twig', [
            'user' => $user,
            'reservations' => $reservations
        ]);
    }

    #[Route('/annuler-reservation/{id}', name: 'app_passager_annuler_reservation', methods: ['POST'])]
    public function annulerReservation(Reservation $reservation, EntityManagerInterface $entityManager): Response
    {
        $this->denyAccessUnlessGranted('ROLE_PASSAGER');
        
        $user = $this->getUser();
        
        // Vérifier que l'utilisateur est bien le propriétaire de cette réservation
        if ($user->getId() !== $reservation->getUserId()) {
            throw $this->createAccessDeniedException('Vous n\'êtes pas autorisé à annuler cette réservation.');
        }
        
        // Vérifier que la réservation est en attente ou acceptée
        if (!in_array($reservation->getStatus(), ['PENDING', 'ACCEPTED'])) {
            $this->addFlash('error', 'Cette réservation ne peut plus être annulée.');
            return $this->redirectToRoute('app_passager_mes_reservations');
        }
        
        // Annuler la réservation
        $reservation->setStatus('CANCELLED_BY_PASSENGER');
        $reservation->setUpdatedAt(new \DateTime());
        
        // Libérer une place dans l'annonce
        $annonce = $reservation->getAnnonce();
        if ($annonce) {
            $annonce->setAvailableSeats($annonce->getAvailableSeats() + 1);
            
            // Si l'annonce était pleine, la remettre à disponible
            if ($annonce->getStatus() === 'plein') {
                $annonce->setStatus('ouvert');
            }
        }
        
        $entityManager->flush();
        
        $this->addFlash('success', 'Votre réservation a été annulée avec succès.');
        
        return $this->redirectToRoute('app_passager_mes_reservations');
    }

    #[Route('/historique-reservations', name: 'app_passager_historique_reservations')]
    public function historiqueReservations(EntityManagerInterface $entityManager): Response
    {
        $this->denyAccessUnlessGranted('ROLE_PASSAGER');
        
        $user = $this->getUser();
        
        // Récupérer les réservations terminées de l'utilisateur
        $reservations = $entityManager->getRepository(Reservation::class)
            ->findBy([
                'userId' => $user->getId(),
                'status' => 'COMPLETED'
            ], ['dateReservation' => 'DESC']);

        // Récupérer les réservations d'événements terminées
        $eventReservations = $entityManager->getRepository(Reservation::class)
            ->createQueryBuilder('r')
            ->innerJoin('r.annonceEvent', 'ae')
            ->where('r.userId = :userId')
            ->andWhere('r.type = :type')
            ->andWhere('ae.status = :status')
            ->setParameter('userId', $user->getId())
            ->setParameter('type', 'EVENT')
            ->setParameter('status', 'termine')
            ->orderBy('r.dateReservation', 'DESC')
            ->getQuery()
            ->getResult();

        // Combiner les deux types de réservations
        $allReservations = array_merge($reservations, $eventReservations);
        
        // Trier par date de réservation (la plus récente en premier)
        usort($allReservations, function($a, $b) {
            return $b->getDateReservation() <=> $a->getDateReservation();
        });
        
        // Récupérer les données des conducteurs pour chaque réservation
        foreach ($allReservations as $reservation) {
            if ($reservation->getType() == 'TRAJET' && $reservation->getAnnonce()) {
                $driverId = $reservation->getAnnonce()->getDriverId();
                $driver = $entityManager->getRepository('App\Entity\Utilisateur')
                    ->find($driverId);
                $reservation->driver = $driver;
            } elseif ($reservation->getType() == 'EVENT' && $reservation->getAnnonceEvent()) {
                $driverId = $reservation->getAnnonceEvent()->getDriverId();
                $driver = $entityManager->getRepository('App\Entity\Utilisateur')
                    ->find($driverId);
                $reservation->driver = $driver;
            }
        }
        
        return $this->render('passager/historique_reservations.html.twig', [
            'user' => $user,
            'reservations' => $allReservations
        ]);
    }

    #[Route('/passager/events', name: 'app_passager_events')]
    public function events(EventRepository $eventRepository): Response
    {
        $events = $eventRepository->findActiveEvents();

        return $this->render('passager/events.html.twig', [
            'events' => $events,
        ]);
    }

    #[Route('/passager/event/{id}', name: 'app_passager_event_show')]
    public function showEvent(int $id, EventRepository $eventRepository, EventParticipationRepository $participationRepository): Response
    {
        $event = $eventRepository->find($id);
        
        if (!$event) {
            throw $this->createNotFoundException('Événement non trouvé');
        }
        
        $user = $this->getUser();
        $isParticipant = false;
        
        // Vérifier si l'utilisateur participe déjà à l'événement
        $participation = $participationRepository->findOneBy([
            'event' => $event,
            'utilisateur' => $user
        ]);
        
        if ($participation) {
            $isParticipant = true;
        }
        
        return $this->render('passager/event_show.html.twig', [
            'event' => $event,
            'isParticipant' => $isParticipant
        ]);
    }

    #[Route('/passager/event/{id}/participer', name: 'app_passager_event_participer', methods: ['POST'])]
    public function participerEvent(int $id, EventRepository $eventRepository): Response
    {
        $event = $eventRepository->find($id);
        
        if (!$event) {
            throw $this->createNotFoundException('Événement non trouvé');
        }
        
        $user = $this->getUser();
        
        $entityManager = $this->getDoctrine()->getManager();
        
        // Vérifier si l'utilisateur participe déjà à l'événement
        $existingParticipation = $entityManager->getRepository(EventParticipation::class)->findOneBy([
            'event' => $event,
            'utilisateur' => $user
        ]);
        
        if ($existingParticipation) {
            $this->addFlash('info', 'Vous participez déjà à cet événement.');
            return $this->redirectToRoute('app_passager_event_show', ['id' => $id]);
        }
        
        // Créer une nouvelle participation
        $participation = new EventParticipation();
        $participation->setEvent($event);
        $participation->setUtilisateur($user);
        
        $entityManager->persist($participation);
        $entityManager->flush();
        
        $this->addFlash('success', 'Vous avez été inscrit à l\'événement avec succès !');
        return $this->redirectToRoute('app_passager_event_show', ['id' => $id]);
    }

    #[Route('/passager/event/{id}/annuler-participation', name: 'app_passager_event_annuler_participation', methods: ['POST'])]
    public function annulerParticipationEvent(int $id, EventRepository $eventRepository, EventParticipationRepository $participationRepository, ReservationRepository $reservationRepository): Response
    {
        $event = $eventRepository->find($id);
        
        if (!$event) {
            throw $this->createNotFoundException('Événement non trouvé');
        }
        
        $user = $this->getUser();
        
        // Trouver la participation de l'utilisateur
        $participation = $participationRepository->findOneBy([
            'event' => $event,
            'utilisateur' => $user
        ]);
        
        if (!$participation) {
            $this->addFlash('error', 'Vous ne participez pas à cet événement.');
            return $this->redirectToRoute('app_passager_event_show', ['id' => $id]);
        }
        
        // Vérifier s'il existe des réservations liées à cet événement pour cet utilisateur
        $reservationsForEvent = $reservationRepository->findBy([
            'userId' => $user->getId(),
            'type' => 'EVENT'
        ]);
        
        $hasLinkedReservations = false;
        foreach ($reservationsForEvent as $reservation) {
            if ($reservation->getAnnonceEvent() && $reservation->getAnnonceEvent()->getEvent()->getIdEvent() === $id) {
                $hasLinkedReservations = true;
                break;
            }
        }
        
        if ($hasLinkedReservations) {
            $this->addFlash('error', 'Vous avez des réservations de covoiturage liées à cet événement. Veuillez d\'abord annuler ces réservations.');
            return $this->redirectToRoute('app_passager_event_show', ['id' => $id]);
        }
        
        try {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($participation);
            $entityManager->flush();
            
            $this->addFlash('success', 'Votre participation à l\'événement a été annulée.');
        } catch (\Exception $e) {
            $this->addFlash('error', 'Impossible d\'annuler votre participation. Veuillez vérifier que vous n\'avez pas de réservations liées à cet événement.');
        }
        
        return $this->redirectToRoute('app_passager_event_show', ['id' => $id]);
    }

    #[Route('/passager/event/{id}/annonces', name: 'app_passager_event_annonces')]
    public function eventAnnonces(int $id, EventRepository $eventRepository, AnnonceEventRepository $annonceEventRepository): Response
    {
        $event = $eventRepository->find($id);
        
        if (!$event) {
            throw $this->createNotFoundException('Événement non trouvé');
        }
        
        $annonces = $annonceEventRepository->findByEvent($id);
        
        return $this->render('passager/event_annonces.html.twig', [
            'event' => $event,
            'annonces' => $annonces,
        ]);
    }

    #[Route('/passager/event/annonce/{id}/reserver', name: 'app_passager_event_annonce_reserver')]
    public function reserverEventAnnonce(int $id, Request $request, AnnonceEventRepository $annonceEventRepository, EntityManagerInterface $entityManager): Response
    {
        $annonceEvent = $annonceEventRepository->find($id);
        
        if (!$annonceEvent) {
            throw $this->createNotFoundException('Annonce non trouvée');
        }
        
        // Vérifier si l'annonce est toujours ouverte
        if ($annonceEvent->getStatus() !== 'ouvert') {
            $this->addFlash('error', 'Cette annonce n\'est plus disponible pour les réservations.');
            return $this->redirectToRoute('app_passager_event_annonces', ['id' => $annonceEvent->getEvent()->getIdEvent()]);
        }
        
        // Vérifier s'il reste des places
        if ($annonceEvent->getAvailableSeats() <= 0) {
            $this->addFlash('error', 'Il n\'y a plus de places disponibles pour cette annonce.');
            return $this->redirectToRoute('app_passager_event_annonces', ['id' => $annonceEvent->getEvent()->getIdEvent()]);
        }
        
        $user = $this->getUser();
        
        if ($request->isMethod('POST')) {
            $comment = $request->request->get('comment');
            
            // Créer une nouvelle réservation
            $reservation = new Reservation();
            $reservation->setAnnonceEvent($annonceEvent);
            $reservation->setUserId($user->getId());
            $reservation->setType('EVENT');
            $reservation->setStatus('PENDING');
            
            if ($comment) {
                $reservation->setComment($comment);
            }
            
            // Diminuer le nombre de places disponibles
            $annonceEvent->setAvailableSeats($annonceEvent->getAvailableSeats() - 1);
            
            // Si plus de places, mettre le statut à "plein"
            if ($annonceEvent->getAvailableSeats() <= 0) {
                $annonceEvent->setStatus('plein');
            }
            
            $entityManager->persist($reservation);
            $entityManager->flush();
            
            $this->addFlash('success', 'Votre réservation a été effectuée avec succès ! Elle est en attente de confirmation par le conducteur.');
            return $this->redirectToRoute('app_passager_mes_reservations');
        }
        
        return $this->render('passager/event_annonce_reserver.html.twig', [
            'annonce' => $annonceEvent,
        ]);
    }

    #[Route('/passager/reservation-event/{id}/annuler', name: 'app_passager_reservation_event_annuler', methods: ['POST'])]
    public function annulerReservationEvent(int $id, ReservationRepository $reservationRepository, EntityManagerInterface $entityManager): Response
    {
        $reservation = $reservationRepository->find($id);
        
        if (!$reservation) {
            throw $this->createNotFoundException('Réservation non trouvée');
        }
        
        $user = $this->getUser();
        
        // Vérifier que l'utilisateur est bien le créateur de la réservation
        if ($reservation->getUserId() !== $user->getId()) {
            $this->addFlash('error', 'Vous n\'êtes pas autorisé à annuler cette réservation.');
            return $this->redirectToRoute('app_passager_mes_reservations');
        }
        
        // Vérifier que la réservation peut être annulée
        if ($reservation->getStatus() === 'COMPLETED' || $reservation->getStatus() === 'CANCELLED_BY_PASSENGER') {
            $this->addFlash('error', 'Cette réservation ne peut pas être annulée.');
            return $this->redirectToRoute('app_passager_mes_reservations');
        }
        
        $annonceEvent = $reservation->getAnnonceEvent();
        
        // Mettre à jour le statut de la réservation
        $reservation->setStatus('CANCELLED_BY_PASSENGER');
        $reservation->setUpdatedAt(new \DateTime());
        
        // Mettre à jour le nombre de places disponibles dans l'annonce
        if ($annonceEvent) {
            $annonceEvent->setAvailableSeats($annonceEvent->getAvailableSeats() + 1);
            
            // Si l'annonce était pleine, la remettre à "ouvert"
            if ($annonceEvent->getStatus() === 'plein') {
                $annonceEvent->setStatus('ouvert');
            }
        }
        
        $entityManager->flush();
        
        $this->addFlash('success', 'Votre réservation a été annulée avec succès.');
        return $this->redirectToRoute('app_passager_mes_reservations');
    }
} 