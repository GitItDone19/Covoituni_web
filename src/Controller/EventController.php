<?php

namespace App\Controller;

use App\Entity\EventParticipation;
use App\Repository\EventParticipationRepository;
use App\Repository\EventRepository;
use App\Repository\TypeEventRepository;
use App\Service\QrCodeService;
use App\Service\SmsService;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Attribute\IsGranted;

class EventController extends AbstractController
{
    #[Route('/events', name: 'app_events')]
    public function index(Request $request, EventRepository $eventRepository, TypeEventRepository $typeEventRepository): Response
    {
        $keyword = $request->query->get('keyword');
        $location = $request->query->get('location');
        $date = $request->query->get('date');
        $type = $request->query->get('type');

        $events = $eventRepository->findByFilters($keyword, $location, $date, $type);

        return $this->render('event/index.html.twig', [
            'events' => $events,
            'event_types' => $typeEventRepository->findAll(),
        ]);
    }

    #[Route('/events/{id}', name: 'app_events_show')]
    public function show(int $id, EventRepository $eventRepository, EventParticipationRepository $participationRepository): Response
    {
        $event = $eventRepository->find($id);

        if (!$event) {
            throw $this->createNotFoundException('Event not found');
        }

        $isAlreadyParticipating = false;
        if ($this->getUser()) {
            $isAlreadyParticipating = $participationRepository->findOneBy([
                'utilisateur' => $this->getUser(),
                'event' => $event
            ]) !== null;
        }

        return $this->render('event/show.html.twig', [
            'event' => $event,
            'is_already_participating' => $isAlreadyParticipating
        ]);
    }

    #[Route('/events/{id}/join', name: 'app_events_join', methods: ['POST'])]
    #[IsGranted('ROLE_USER')]
    public function join(
        int $id, 
        EventRepository $eventRepository, 
        EntityManagerInterface $entityManager,
        SmsService $smsService,
        QrCodeService $qrCodeService
    ): Response
    {
        $event = $eventRepository->find($id);

        if (!$event) {
            throw $this->createNotFoundException('Event not found');
        }

        $user = $this->getUser();

        foreach ($event->getParticipants() as $participation) {
            if ($participation->getUtilisateur() === $user) {
                $this->addFlash('warning', 'You are already participating in this event.');
                return $this->redirectToRoute('app_events_show', ['id' => $event->getId()]);
            }
        }

        $participation = new EventParticipation();
        $participation->setEvent($event);
        $participation->setUtilisateur($user);
        $participation->setDateInscription(new \DateTime());

        $entityManager->persist($participation);
        $entityManager->flush();

        try {
            $smsService->sendConfirmationSms(
                $user->getTel(),
                $event->getNom(),
                $event->getDateEvent()
            );
        } catch (\Exception $e) {
            $this->addFlash('error', 'Erreur lors de l\'envoi du SMS.');
        }

        $this->addFlash('success', 'You have successfully joined the event!');
        return $this->redirectToRoute('app_event_participation_qrcode', [
            'id' => $participation->getIdParticipation()
        ]);
    }

    #[Route('/events/{id}/leave', name: 'app_events_leave', methods: ['POST'])]
    #[IsGranted('ROLE_USER')]
    public function leave(
        int $id,
        EventRepository $eventRepository,
        EventParticipationRepository $participationRepository,
        EntityManagerInterface $entityManager
    ): Response
    {
        $event = $eventRepository->find($id);

        if (!$event) {
            throw $this->createNotFoundException('Event not found');
        }

        $user = $this->getUser();
        $participation = $participationRepository->findOneBy([
            'event' => $event,
            'utilisateur' => $user
        ]);

        if (!$participation) {
            $this->addFlash('warning', 'You are not participating in this event.');
            return $this->redirectToRoute('app_events_show', ['id' => $event->getId()]);
        }

        $entityManager->remove($participation);
        $entityManager->flush();

        $this->addFlash('success', 'You have successfully left the event.');
        return $this->redirectToRoute('app_events_show', ['id' => $event->getId()]);
    }

    #[Route('/event/{id}/select', name: 'app_event_select', methods: ['POST'])]
    #[IsGranted('ROLE_USER')]
    public function selectEvent(
        int $id,
        Request $request,
        EventRepository $eventRepository,
        EntityManagerInterface $entityManager,
        SmsService $smsService
    ): JsonResponse
    {
        try {
            $user = $this->getUser();
            $event = $eventRepository->find($id);

            if (!$event) {
                return new JsonResponse(['error' => 'Événement non trouvé'], 404);
            }

            if ($event->hasParticipant($user)) {
                return new JsonResponse(['error' => 'Vous êtes déjà inscrit à cet événement'], 400);
            }

            $event->addParticipant($user);
            $entityManager->persist($event);
            $entityManager->flush();

            $smsService->sendConfirmationSms(
                $user->getTel(),
                $event->getNom(),
                $event->getDateEvent()
            );

            return new JsonResponse([
                'message' => 'Inscription réussie ! Un SMS de confirmation vous a été envoyé.',
                'event' => [
                    'id' => $event->getId(),
                    'name' => $event->getNom(),
                    'date' => $event->getDateEvent()->format('Y-m-d H:i:s')
                ]
            ]);
        } catch (\Exception $e) {
            return new JsonResponse(['error' => 'Erreur lors de l\'inscription'], 500);
        }
    }

    #[Route('/participations', name: 'app_event_mes_participations')]
    #[IsGranted('ROLE_USER')]
    public function mesParticipations(EventParticipationRepository $participationRepository): Response
    {
        $user = $this->getUser();

        $participations = $participationRepository->createQueryBuilder('p')
            ->leftJoin('p.event', 'e')
            ->leftJoin('e.typeEvent', 't')
            ->where('p.utilisateur = :user')
            ->setParameter('user', $user)
            ->orderBy('p.dateInscription', 'DESC')
            ->getQuery()
            ->getResult();

        $formattedParticipations = array_map(function ($participation) {
            return [
                'event' => $participation->getEvent(),
                'role' => 'participant',
                'dateInscription' => $participation->getDateInscription(),
                'auteur' => $participation->getAuteur(),
                'conducteur' => $participation->getConducteur()
            ];
        }, $participations);

        return $this->render('conducteur/participations_evenements.html.twig', [
            'participations' => $formattedParticipations
        ]);
    }

    #[Route('/event/participation/{id}/qrcode', name: 'app_event_participation_qrcode')]
    #[IsGranted('ROLE_USER')]
    public function showParticipationQrCode(
        int $id,
        EventParticipationRepository $participationRepository,
        QrCodeService $qrCodeService
    ): Response
    {
        $participation = $participationRepository->find($id);

        if (!$participation) {
            throw $this->createNotFoundException('Participation not found');
        }

        if ($participation->getUtilisateur() !== $this->getUser()) {
            throw $this->createAccessDeniedException('You are not allowed to view this QR code');
        }

        $qrCodeDataUri = $qrCodeService->generateParticipationQrCode($participation);

        return $this->render('event/participation_qrcode.html.twig', [
            'participation' => $participation,
            'qrcode' => $qrCodeDataUri
        ]);
    }

    #[Route('/event/verify-participation/{participationId}', name: 'app_event_verify_participation')]
    public function verifyParticipation(
        int $participationId,
        Request $request,
        EventParticipationRepository $participationRepository,
        QrCodeService $qrCodeService
    ): Response
    {
        $token = $request->query->get('token');

        if (!$token) {
            return $this->render('event/verify_participation.html.twig', [
                'valid' => false,
                'error' => 'Token manquant'
            ]);
        }

        $participation = $participationRepository->find($participationId);

        if (!$participation) {
            return $this->render('event/verify_participation.html.twig', [
                'valid' => false,
                'error' => 'Participation non trouvée'
            ]);
        }

        $isValid = $qrCodeService->verifyParticipationToken($participation, $token);

        return $this->render('event/verify_participation.html.twig', [
            'valid' => $isValid,
            'participation' => $isValid ? $participation : null,
            'error' => !$isValid ? 'Token invalide' : null
        ]);
    }

    #[Route('/event/participation/{id}/download-qrcode', name: 'app_event_download_qrcode')]
    #[IsGranted('ROLE_USER')]
    public function downloadParticipationQrCode(
        int $id,
        EventParticipationRepository $participationRepository,
        QrCodeService $qrCodeService
    ): Response
    {
        $participation = $participationRepository->find($id);

        if (!$participation) {
            throw $this->createNotFoundException('Participation not found');
        }

        if ($participation->getUtilisateur() !== $this->getUser()) {
            throw $this->createAccessDeniedException('You are not allowed to download this QR code');
        }

        $qrCode = $qrCodeService->generateParticipationQrCode($participation, false);

        $response = new Response($qrCode);
        $response->headers->set('Content-Type', 'image/png');
        $response->headers->set('Content-Disposition', 'attachment; filename="participation_qrcode.png"');

        return $response;
    }
}
