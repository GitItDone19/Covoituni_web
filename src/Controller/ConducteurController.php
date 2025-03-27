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
<<<<<<< HEAD
=======
use App\Entity\Voiture;
use App\Entity\Event;
use App\Entity\AnnonceEvent;
use App\Entity\EventParticipation;
use App\Repository\VoitureRepository;
use App\Repository\UtilisateurRepository;
use App\Repository\ReservationRepository;
use App\Repository\EventRepository;
use App\Repository\TypeEventRepository;
use App\Repository\AnnonceEventRepository;
use App\Repository\CarRepository;
use App\Repository\EventParticipationRepository;
>>>>>>> origin/Gestion_Event_Hassen

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
<<<<<<< HEAD
=======

    #[Route('/conducteur/events', name: 'app_conducteur_events')]
    public function events(EventRepository $eventRepository): Response
    {
        $events = $eventRepository->findActiveEvents();

        return $this->render('conducteur/events.html.twig', [
            'events' => $events,
        ]);
    }

    #[Route('/conducteur/event/create', name: 'app_conducteur_event_create')]
    public function createEvent(Request $request, TypeEventRepository $typeEventRepository, EntityManagerInterface $entityManager): Response
    {
        $eventTypes = $typeEventRepository->findAll();
        
        if ($request->isMethod('POST')) {
            // Récupérer les données du formulaire
            $nom = $request->request->get('nom');
            $date = $request->request->get('date');
            $heure = $request->request->get('heure');
            $lieu = $request->request->get('lieu');
            $description = $request->request->get('description');
            $typeId = $request->request->get('type');
            
            // Validation des champs obligatoires
            if (!$nom || !$date || !$heure || !$lieu || !$typeId) {
                $this->addFlash('error', 'Tous les champs sont obligatoires.');
                return $this->redirectToRoute('app_conducteur_event_create');
            }
            
            // Créer un nouvel événement
            $event = new Event();
            $event->setNom($nom);
            
            // Convertir la date et l'heure
            $dateEvent = \DateTime::createFromFormat('Y-m-d', $date);
            $heureEvent = \DateTime::createFromFormat('H:i', $heure);
            
            if (!$dateEvent || !$heureEvent) {
                $this->addFlash('error', 'Format de date ou d\'heure invalide.');
                return $this->redirectToRoute('app_conducteur_event_create');
            }
            
            $event->setDateEvent($dateEvent);
            $event->setHeureEvent($heureEvent);
            $event->setLieu($lieu);
            $event->setDescription($description);
            $event->setStatus('ACTIVE');
            
            $typeEvent = $typeEventRepository->find($typeId);
            if (!$typeEvent) {
                $this->addFlash('error', 'Type d\'événement invalide.');
                return $this->redirectToRoute('app_conducteur_event_create');
            }
            
            $event->setTypeEvent($typeEvent);
            
            $entityManager->persist($event);
            $entityManager->flush();
            
            $this->addFlash('success', 'Événement créé avec succès !');
            return $this->redirectToRoute('app_conducteur_events');
        }
        
        return $this->render('conducteur/event_create.html.twig', [
            'eventTypes' => $eventTypes,
        ]);
    }

    #[Route('/conducteur/event/{id}/edit', name: 'app_conducteur_event_edit')]
    public function editEvent(int $id, Request $request, EventRepository $eventRepository, TypeEventRepository $typeEventRepository, EntityManagerInterface $entityManager): Response
    {
        $event = $eventRepository->find($id);
        
        if (!$event) {
            throw $this->createNotFoundException('Événement non trouvé');
        }
        
        $eventTypes = $typeEventRepository->findAll();
        
        if ($request->isMethod('POST')) {
            // Récupérer les données du formulaire
            $nom = $request->request->get('nom');
            $date = $request->request->get('date');
            $heure = $request->request->get('heure');
            $lieu = $request->request->get('lieu');
            $description = $request->request->get('description');
            $typeId = $request->request->get('type');
            
            // Validation des champs obligatoires
            if (!$nom || !$date || !$heure || !$lieu || !$typeId) {
                $this->addFlash('error', 'Tous les champs sont obligatoires.');
                return $this->redirectToRoute('app_conducteur_event_edit', ['id' => $id]);
            }
            
            // Mettre à jour l'événement
            $event->setNom($nom);
            
            // Convertir la date et l'heure
            $dateEvent = \DateTime::createFromFormat('Y-m-d', $date);
            $heureEvent = \DateTime::createFromFormat('H:i', $heure);
            
            if (!$dateEvent || !$heureEvent) {
                $this->addFlash('error', 'Format de date ou d\'heure invalide.');
                return $this->redirectToRoute('app_conducteur_event_edit', ['id' => $id]);
            }
            
            $event->setDateEvent($dateEvent);
            $event->setHeureEvent($heureEvent);
            $event->setLieu($lieu);
            $event->setDescription($description);
            
            $typeEvent = $typeEventRepository->find($typeId);
            if (!$typeEvent) {
                $this->addFlash('error', 'Type d\'événement invalide.');
                return $this->redirectToRoute('app_conducteur_event_edit', ['id' => $id]);
            }
            
            $event->setTypeEvent($typeEvent);
            
            $entityManager->flush();
            
            $this->addFlash('success', 'Événement mis à jour avec succès !');
            return $this->redirectToRoute('app_conducteur_events');
        }
        
        return $this->render('conducteur/event_edit.html.twig', [
            'event' => $event,
            'eventTypes' => $eventTypes,
        ]);
    }

    #[Route('/conducteur/event/{id}/delete', name: 'app_conducteur_event_delete', methods: ['POST'])]
    public function deleteEvent(int $id, EventRepository $eventRepository, EntityManagerInterface $entityManager): Response
    {
        $event = $eventRepository->find($id);
        
        if (!$event) {
            throw $this->createNotFoundException('Événement non trouvé');
        }
        
        $entityManager->remove($event);
        $entityManager->flush();
        
        $this->addFlash('success', 'Événement supprimé avec succès !');
        return $this->redirectToRoute('app_conducteur_events');
    }

    #[Route('/conducteur/event/{id}/annonces', name: 'app_conducteur_event_annonces')]
    public function eventAnnonces(int $id, EventRepository $eventRepository, AnnonceEventRepository $annonceEventRepository): Response
    {
        $event = $eventRepository->find($id);
        
        if (!$event) {
            throw $this->createNotFoundException('Événement non trouvé');
        }
        
        $annonces = $annonceEventRepository->findByEvent($id);
        
        return $this->render('conducteur/event_annonces.html.twig', [
            'event' => $event,
            'annonces' => $annonces,
        ]);
    }

    #[Route('/conducteur/event/{id}/annonce/create', name: 'app_conducteur_event_annonce_create')]
    public function createEventAnnonce(int $id, Request $request, EventRepository $eventRepository, CarRepository $carRepository, EntityManagerInterface $entityManager): Response
    {
        $event = $eventRepository->find($id);
        
        if (!$event) {
            throw $this->createNotFoundException('Événement non trouvé');
        }
        
        $user = $this->getUser();
        $voitures = $carRepository->findBy(['userId' => $user->getId()]);
        
        // Si l'utilisateur n'a pas de voiture, créer une voiture par défaut
        if (count($voitures) == 0) {
            // Vérifier si des catégories existent
            $categorie = $entityManager->getRepository(\App\Entity\Categorie::class)->findOneBy([]);
            
            if (!$categorie) {
                // Créer une catégorie par défaut si aucune n'existe
                $categorie = new \App\Entity\Categorie();
                $categorie->setNom('Standard');
                $categorie->setDescription('Catégorie standard de véhicule');
                $entityManager->persist($categorie);
            }
            
            // Créer une voiture par défaut
            $voiture = new \App\Entity\Car();
            $voiture->setPlaqueImatriculation('TMP' . $user->getId() . rand(100, 999));
            $voiture->setDescription('Voiture temporaire');
            $voiture->setDateImatriculation(new \DateTime());
            $voiture->setCouleur('Noir');
            $voiture->setMarque('Standard');
            $voiture->setModele('Standard');
            $voiture->setCategorie($categorie);
            
            try {
                $reflection = new \ReflectionClass($voiture);
                if ($reflection->hasMethod('setUserId')) {
                    $voiture->setUserId($user->getId());
                }
            } catch (\Exception $e) {
                // Ignorer l'erreur si la méthode n'existe pas
            }
            
            $entityManager->persist($voiture);
            $entityManager->flush();
            
            $voitures = [$voiture];
        }
        
        if ($request->isMethod('POST')) {
            // Récupérer les données du formulaire
            $titre = $request->request->get('titre');
            $description = $request->request->get('description');
            $departurePoint = $request->request->get('departurePoint');
            $arrivalPoint = $request->request->get('arrivalPoint');
            $departureDate = $request->request->get('departureDate');
            $departureTime = $request->request->get('departureTime');
            $availableSeats = $request->request->get('availableSeats');
            $voitureId = $request->request->get('voiture');
            $prix = $request->request->get('prix');
            
            // Validation des champs obligatoires
            if (!$titre || !$departurePoint || !$arrivalPoint || !$departureDate || !$departureTime || !$availableSeats || !$voitureId || !$prix) {
                $this->addFlash('error', 'Tous les champs sont obligatoires.');
                return $this->redirectToRoute('app_conducteur_event_annonce_create', ['id' => $id]);
            }
            
            // Créer une nouvelle annonce d'événement
            $annonceEvent = new AnnonceEvent();
            $annonceEvent->setTitre($titre);
            $annonceEvent->setDescription($description ?? '');
            
            // Fusionner la date et l'heure de départ
            $dateTime = new \DateTime($departureDate . ' ' . $departureTime);
            $annonceEvent->setDepartureDate($dateTime);
            
            $annonceEvent->setStatus('ouvert');
            $annonceEvent->setAvailableSeats((int)$availableSeats);
            $annonceEvent->setDriverId($user->getId());
            $annonceEvent->setEvent($event);
            $annonceEvent->setDeparturePoint($departurePoint);
            $annonceEvent->setArrivalPoint($arrivalPoint);
            $annonceEvent->setPrix((float)$prix);
            
            $voiture = $carRepository->find($voitureId);
            if (!$voiture) {
                $this->addFlash('error', 'Voiture invalide.');
                return $this->redirectToRoute('app_conducteur_event_annonce_create', ['id' => $id]);
            }
            
            $annonceEvent->setCarId($voiture->getId());
            
            $entityManager->persist($annonceEvent);
            $entityManager->flush();
            
            $this->addFlash('success', 'Annonce pour l\'événement créée avec succès !');
            return $this->redirectToRoute('app_conducteur_event_annonces', ['id' => $id]);
        }
        
        return $this->render('conducteur/event_annonce_create.html.twig', [
            'event' => $event,
            'voitures' => $voitures,
        ]);
    }

    #[Route('/conducteur/event/annonce/{id}/edit', name: 'app_conducteur_event_annonce_edit')]
    public function editEventAnnonce(int $id, Request $request, AnnonceEventRepository $annonceEventRepository, CarRepository $carRepository, EntityManagerInterface $entityManager): Response
    {
        $annonceEvent = $annonceEventRepository->find($id);
        
        if (!$annonceEvent) {
            throw $this->createNotFoundException('Annonce non trouvée');
        }
        
        // Vérifier que l'utilisateur est bien le créateur de l'annonce
        $user = $this->getUser();
        if ($annonceEvent->getDriverId() !== $user->getId()) {
            $this->addFlash('error', 'Vous n\'êtes pas autorisé à modifier cette annonce.');
            return $this->redirectToRoute('app_conducteur_events');
        }
        
        $voitures = $carRepository->findBy(['userId' => $user->getId()]);
        
        // Si l'utilisateur n'a pas de voiture, créer une voiture par défaut
        if (count($voitures) == 0) {
            // Vérifier si des catégories existent
            $categorie = $entityManager->getRepository(\App\Entity\Categorie::class)->findOneBy([]);
            
            if (!$categorie) {
                // Créer une catégorie par défaut si aucune n'existe
                $categorie = new \App\Entity\Categorie();
                $categorie->setNom('Standard');
                $categorie->setDescription('Catégorie standard de véhicule');
                $entityManager->persist($categorie);
            }
            
            // Créer une voiture par défaut
            $voiture = new \App\Entity\Car();
            $voiture->setPlaqueImatriculation('TMP' . $user->getId() . rand(100, 999));
            $voiture->setDescription('Voiture temporaire');
            $voiture->setDateImatriculation(new \DateTime());
            $voiture->setCouleur('Noir');
            $voiture->setMarque('Standard');
            $voiture->setModele('Standard');
            $voiture->setCategorie($categorie);
            
            // Si la propriété userId n'existe pas encore dans l'entité Car,
            // nous ne pouvons pas l'utiliser directement
            // Il faudrait une migration pour ajouter cette colonne
            try {
                $reflection = new \ReflectionClass($voiture);
                if ($reflection->hasMethod('setUserId')) {
                    $voiture->setUserId($user->getId());
                }
            } catch (\Exception $e) {
                // Ignorer l'erreur si la méthode n'existe pas
            }
            
            $entityManager->persist($voiture);
            $entityManager->flush();
            
            $voitures = [$voiture];
        }
        
        if ($request->isMethod('POST')) {
            // Récupérer les données du formulaire
            $titre = $request->request->get('titre');
            $description = $request->request->get('description');
            $departurePoint = $request->request->get('departurePoint');
            $arrivalPoint = $request->request->get('arrivalPoint');
            $departureDate = $request->request->get('departureDate');
            $departureTime = $request->request->get('departureTime');
            $availableSeats = (int)$request->request->get('availableSeats');
            $voitureId = (int)$request->request->get('voiture');
            $prix = (float)$request->request->get('prix', 0);
            
            // Validation des champs obligatoires
            if (!$titre || !$departurePoint || !$arrivalPoint || !$departureDate || !$departureTime || !$availableSeats || !$voitureId) {
                $this->addFlash('error', 'Tous les champs sont obligatoires.');
                return $this->redirectToRoute('app_conducteur_event_annonce_edit', ['id' => $id]);
            }
            
            // Mettre à jour directement les propriétés de l'annonce d'événement
            // Fusionner la date et l'heure de départ
            $dateTime = new \DateTime($departureDate . ' ' . $departureTime);
            
            // Mettre à jour l'annonce
            $annonceEvent->setTitre($titre);
            $annonceEvent->setDescription($description);
            $annonceEvent->setDepartureDate($dateTime);
            $annonceEvent->setAvailableSeats($availableSeats);
            $annonceEvent->setDeparturePoint($departurePoint);
            $annonceEvent->setArrivalPoint($arrivalPoint);
            $annonceEvent->setPrix($prix);
            
            $voiture = $carRepository->find($voitureId);
            if (!$voiture) {
                $this->addFlash('error', 'Voiture invalide.');
                return $this->redirectToRoute('app_conducteur_event_annonce_edit', ['id' => $id]);
            }
            
            $annonceEvent->setCarId($voiture->getId());
            
            $entityManager->flush();
            
            $this->addFlash('success', 'Annonce mise à jour avec succès !');
            return $this->redirectToRoute('app_conducteur_event_annonces', ['id' => $annonceEvent->getEvent()->getIdEvent()]);
        }
        
        return $this->render('conducteur/event_annonce_edit.html.twig', [
            'annonce' => $annonceEvent,
            'voitures' => $voitures,
        ]);
    }

    #[Route('/conducteur/event/annonce/{id}/delete', name: 'app_conducteur_event_annonce_delete', methods: ['POST'])]
    public function deleteEventAnnonce(int $id, AnnonceEventRepository $annonceEventRepository, ReservationRepository $reservationRepository, EntityManagerInterface $entityManager): Response
    {
        $annonceEvent = $annonceEventRepository->find($id);
        
        if (!$annonceEvent) {
            throw $this->createNotFoundException('Annonce non trouvée');
        }
        
        // Vérifier que l'utilisateur est bien le créateur de l'annonce
        $user = $this->getUser();
        if ($annonceEvent->getDriverId() !== $user->getId()) {
            $this->addFlash('error', 'Vous n\'êtes pas autorisé à supprimer cette annonce.');
            return $this->redirectToRoute('app_conducteur_events');
        }
        
        $eventId = $annonceEvent->getEvent()->getIdEvent();
        
        try {
            // Récupérer toutes les réservations liées à cette annonce d'événement
            $reservations = $reservationRepository->findBy([
                'annonceEvent' => $annonceEvent->getId()
            ]);
            
            // Supprimer d'abord toutes les réservations associées
            foreach ($reservations as $reservation) {
                $entityManager->remove($reservation);
            }
            
            // Maintenant on peut supprimer l'annonce
            $entityManager->remove($annonceEvent);
            $entityManager->flush();
            
            $this->addFlash('success', 'Annonce et toutes ses réservations supprimées avec succès !');
        } catch (\Exception $e) {
            $this->addFlash('error', 'Erreur lors de la suppression : ' . $e->getMessage());
        }
        
        return $this->redirectToRoute('app_conducteur_event_annonces', ['id' => $eventId]);
    }

    #[Route('/conducteur/event/annonce/{id}/terminer', name: 'app_conducteur_event_annonce_terminer', methods: ['POST'])]
    public function terminerEventAnnonce(int $id, AnnonceEventRepository $annonceEventRepository, EntityManagerInterface $entityManager): Response
    {
        $annonceEvent = $annonceEventRepository->find($id);
        
        if (!$annonceEvent) {
            throw $this->createNotFoundException('Annonce non trouvée');
        }
        
        // Vérifier que l'utilisateur est bien le créateur de l'annonce
        $user = $this->getUser();
        if ($annonceEvent->getDriverId() !== $user->getId()) {
            $this->addFlash('error', 'Vous n\'êtes pas autorisé à terminer cette annonce.');
            return $this->redirectToRoute('app_conducteur_events');
        }
        
        $annonceEvent->setStatus('termine');
        $annonceEvent->setDateTermination(new \DateTime());
        
        $entityManager->flush();
        
        $this->addFlash('success', 'Annonce terminée avec succès !');
        return $this->redirectToRoute('app_conducteur_event_annonces', ['id' => $annonceEvent->getEvent()->getIdEvent()]);
    }

    #[Route('/conducteur/reservations-event', name: 'app_conducteur_reservations_event')]
    public function reservationsEvent(ReservationRepository $reservationRepository, AnnonceEventRepository $annonceEventRepository): Response
    {
        $user = $this->getUser();
        $annonces = $annonceEventRepository->findByDriver($user->getId());
        
        $reservationsByAnnonce = [];
        
        foreach ($annonces as $annonce) {
            $reservations = $reservationRepository->findBy([
                'annonceEvent' => $annonce->getId(),
                'type' => 'EVENT'
            ]);
            
            if (count($reservations) > 0) {
                $reservationsByAnnonce[$annonce->getId()] = [
                    'annonce' => $annonce,
                    'reservations' => $reservations
                ];
            }
        }
        
        return $this->render('conducteur/reservations_event.html.twig', [
            'reservationsByAnnonce' => $reservationsByAnnonce
        ]);
    }

    #[Route('/conducteur/event/{id}/terminer-all', name: 'app_conducteur_event_terminer_all', methods: ['POST'])]
    public function terminerAllEventAnnonce(int $id, EventRepository $eventRepository, AnnonceEventRepository $annonceEventRepository, EntityManagerInterface $entityManager): Response
    {
        $event = $eventRepository->find($id);
        
        if (!$event) {
            throw $this->createNotFoundException('Événement non trouvé');
        }
        
        // Récupérer toutes les annonces liées à cet événement
        $annonces = $annonceEventRepository->findByEvent($id);
        
        $terminatedCount = 0;
        
        foreach ($annonces as $annonce) {
            // Ne terminer que les annonces qui ne sont pas déjà terminées
            if ($annonce->getStatus() !== 'termine') {
                $annonce->setStatus('termine');
                $annonce->setDateTermination(new \DateTime());
                $terminatedCount++;
            }
        }
        
        // Mettre à jour le statut de l'événement
        $event->setStatus('TERMINE');
        
        $entityManager->flush();
        
        if ($terminatedCount > 0) {
            $this->addFlash('success', "Événement et $terminatedCount annonce(s) terminée(s) avec succès !");
        } else {
            $this->addFlash('info', "Événement terminé ! Aucune annonce active à terminer pour cet événement.");
        }
        
        return $this->redirectToRoute('app_conducteur_event_annonces', ['id' => $id]);
    }

    // Méthodes pour gérer les réservations d'événements

    #[Route('/conducteur/reservation-event/{id}/accepter', name: 'app_conducteur_accepter_reservation_event', methods: ['POST'])]
    public function accepterReservationEvent(int $id, ReservationRepository $reservationRepository, EntityManagerInterface $entityManager): Response
    {
        $reservation = $reservationRepository->find($id);
        
        if (!$reservation) {
            throw $this->createNotFoundException('Réservation non trouvée');
        }
        
        // Vérifier que la réservation concerne un événement
        if ($reservation->getType() !== 'EVENT') {
            throw $this->createAccessDeniedException('Cette réservation n\'est pas liée à un événement');
        }
        
        // Vérifier que l'utilisateur actuel est bien le conducteur de l'annonce
        $user = $this->getUser();
        $annonceEvent = $reservation->getAnnonceEvent();
        
        if (!$annonceEvent || $annonceEvent->getDriverId() !== $user->getId()) {
            throw $this->createAccessDeniedException('Vous n\'êtes pas autorisé à gérer cette réservation');
        }
        
        // Mettre à jour le statut de la réservation
        $reservation->setStatus('ACCEPTED');
        $reservation->setUpdatedAt(new \DateTime());
        
        // Récupérer l'utilisateur qui a fait la réservation
        $passager = $entityManager->getRepository(\App\Entity\Utilisateur::class)->find($reservation->getUserId());
        $event = $annonceEvent->getEvent();
        
        // Vérification des entités nécessaires
        if (!$passager) {
            $this->addFlash('error', 'Utilisateur passager non trouvé (ID: ' . $reservation->getUserId() . ')');
            return $this->redirectToRoute('app_conducteur_reservations_event');
        }
        
        if (!$event) {
            $this->addFlash('error', 'Événement non trouvé (ID: ' . ($annonceEvent->getEvent() ? $annonceEvent->getEvent()->getIdEvent() : 'null') . ')');
            return $this->redirectToRoute('app_conducteur_reservations_event');
        }
        
        // Vérifier si l'utilisateur participe déjà à l'événement
        $existingParticipation = $entityManager->getRepository(\App\Entity\EventParticipation::class)->findOneBy([
            'event' => $event,
            'utilisateur' => $passager
        ]);
        
        // Si l'utilisateur ne participe pas encore à l'événement, l'ajouter
        if (!$existingParticipation) {
            $participation = new \App\Entity\EventParticipation();
            $participation->setEvent($event);
            $participation->setUtilisateur($passager);
            $participation->setDateInscription(new \DateTime());
            $participation->setAuteur('Réservation acceptée via covoiturage');
            
            // Utiliser l'utilisateur connecté comme conducteur (plus fiable)
            $participation->setConducteur($user);
            
            $entityManager->persist($participation);
            $this->addFlash('success', 'Participation à l\'événement créée avec succès');
        } else {
            $this->addFlash('info', 'L\'utilisateur participe déjà à cet événement');
        }
        
        $entityManager->flush();
        
        return $this->redirectToRoute('app_conducteur_reservations_event');
    }
    
    #[Route('/conducteur/reservation-event/{id}/refuser', name: 'app_conducteur_refuser_reservation_event', methods: ['POST'])]
    public function refuserReservationEvent(int $id, ReservationRepository $reservationRepository, EntityManagerInterface $entityManager): Response
    {
        $reservation = $reservationRepository->find($id);
        
        if (!$reservation) {
            throw $this->createNotFoundException('Réservation non trouvée');
        }
        
        // Vérifier que la réservation concerne un événement
        if ($reservation->getType() !== 'EVENT') {
            throw $this->createAccessDeniedException('Cette réservation n\'est pas liée à un événement');
        }
        
        // Vérifier que l'utilisateur actuel est bien le conducteur de l'annonce
        $user = $this->getUser();
        $annonceEvent = $reservation->getAnnonceEvent();
        
        if (!$annonceEvent || $annonceEvent->getDriverId() !== $user->getId()) {
            throw $this->createAccessDeniedException('Vous n\'êtes pas autorisé à gérer cette réservation');
        }
        
        // Mettre à jour le statut de la réservation
        $reservation->setStatus('REJECTED');
        $reservation->setUpdatedAt(new \DateTime());
        
        // Augmenter le nombre de places disponibles dans l'annonce
        $annonceEvent->setAvailableSeats($annonceEvent->getAvailableSeats() + 1);
        
        // Si l'annonce était pleine, la remettre à "ouvert"
        if ($annonceEvent->getStatus() === 'plein') {
            $annonceEvent->setStatus('ouvert');
        }
        
        $entityManager->flush();
        
        $this->addFlash('success', 'Réservation refusée avec succès !');
        return $this->redirectToRoute('app_conducteur_reservations_event');
    }

    #[Route('/conducteur/participations-parraines', name: 'app_conducteur_participations_parraines')]
    public function participationsParrainees(EventParticipationRepository $participationRepository, EntityManagerInterface $entityManager): Response
    {
        $user = $this->getUser();
        
        // Récupérer les participations où l'utilisateur est conducteur
        $participations = $participationRepository->findByConducteur($user->getId());
        
        // Organiser les données pour l'affichage
        $participationsData = [];
        foreach ($participations as $participation) {
            $event = $participation->getEvent();
            $passager = $participation->getUtilisateur();
            
            $participationsData[] = [
                'id' => $participation->getIdParticipation(),
                'event' => $event,
                'passager' => $passager,
                'dateInscription' => $participation->getDateInscription(),
                'auteur' => $participation->getAuteur()
            ];
        }
        
        return $this->render('conducteur/participations_parraines.html.twig', [
            'participations' => $participationsData
        ]);
    }

    #[Route('/conducteur/participations-evenements', name: 'app_conducteur_participations_evenements')]
    public function mesParticipationsEvenements(EventParticipationRepository $participationRepository, EntityManagerInterface $entityManager): Response
    {
        $user = $this->getUser();
        
        // Récupérer toutes les participations de l'utilisateur (participant et conducteur)
        $participations = $participationRepository->findAllForUser($user->getId());
        
        // Reformater les données pour l'affichage
        $formattedParticipations = [];
        
        foreach ($participations as $participation) {
            $event = $participation->getEvent();
            $participantId = $participation->getUtilisateur()->getId();
            $conducteurId = $participation->getConducteur() ? $participation->getConducteur()->getId() : null;
            
            // Déterminer le rôle de l'utilisateur pour cette participation
            $role = 'participant';
            $auteur = $participation->getAuteur();
            
            if ($conducteurId === $user->getId() && $participantId !== $user->getId()) {
                // L'utilisateur est le conducteur mais pas le participant
                $role = 'conducteur';
                $auteur = ($auteur ? $auteur : 'Participation') . ' (Vous êtes le conducteur)';
            }
            
            // Créer une clé unique pour éviter les doublons
            $key = $event->getIdEvent() . '-' . $participantId;
            
            $formattedParticipations[$key] = [
                'event' => $event,
                'dateInscription' => $participation->getDateInscription(),
                'auteur' => $auteur,
                'conducteur' => $participation->getConducteur(),
                'utilisateur' => $participation->getUtilisateur(),
                'role' => $role
            ];
        }
        
        return $this->render('conducteur/participations_evenements.html.twig', [
            'participations' => array_values($formattedParticipations)
        ]);
    }

    #[Route('/conducteur/event/{id}/participants', name: 'app_conducteur_event_participants')]
    public function eventParticipants(int $id, EventRepository $eventRepository, EventParticipationRepository $participationRepository): Response
    {
        $event = $eventRepository->find($id);
        
        if (!$event) {
            throw $this->createNotFoundException('Événement non trouvé');
        }
        
        // Récupérer les participations à cet événement
        $participations = $participationRepository->findByEvent($id);
        
        // Organiser les données pour l'affichage
        $participants = [];
        foreach ($participations as $participation) {
            $participants[] = [
                'utilisateur' => $participation->getUtilisateur(),
                'dateInscription' => $participation->getDateInscription(),
                'auteur' => $participation->getAuteur(),
                'conducteur' => $participation->getConducteur()
            ];
        }
        
        return $this->render('conducteur/event_participants.html.twig', [
            'event' => $event,
            'participants' => $participants
        ]);
    }
    
    #[Route('/conducteur/event/{id}', name: 'app_conducteur_event_show')]
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
        
        return $this->render('conducteur/event_show.html.twig', [
            'event' => $event,
            'isParticipant' => $isParticipant
        ]);
    }
>>>>>>> origin/Gestion_Event_Hassen
} 