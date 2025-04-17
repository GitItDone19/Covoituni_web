<?php

namespace App\Controller\Passager;

use App\Entity\Reclamation;
use App\Form\ReclamationType;
use App\Repository\ReclamationRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/passager/reclamation')]
class ReclamationController extends AbstractController
{
    #[Route('/', name: 'app_passager_reclamation')]
    public function reclamationForm(): Response
    {
        $user = $this->getUser();
        if (!$user) {
            return $this->redirectToRoute('app_login');
        }
        
        return $this->render('passager/reclamation.html.twig', [
            'user' => $user
        ]);
    }

    #[Route('/list', name: 'app_passager_reclamation_index')]
    public function index(ReclamationRepository $reclamationRepository): Response
    {
        $user = $this->getUser();
        if (!$user) {
            return $this->redirectToRoute('app_login');
        }
        
        $reclamations = $reclamationRepository->findBy(
            ['user' => $user],
            ['date' => 'DESC'] // Tri par date décroissante
        );
        
        return $this->render('passager/reclamation/index.html.twig', [
            'reclamations' => $reclamations,
            'user' => $user
        ]);
    }

    #[Route('/new', name: 'app_passager_reclamation_new')]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $user = $this->getUser();
        if (!$user) {
            return $this->redirectToRoute('app_login');
        }
        
        $reclamation = new Reclamation();
        $reclamation->setUser($user);
        $reclamation->setDate(new \DateTime());
        $reclamation->setStatus('pending');
        
        $form = $this->createForm(ReclamationType::class, $reclamation);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($reclamation);
            $entityManager->flush();

            $this->addFlash('success', 'Votre réclamation a été soumise avec succès.');
            return $this->redirectToRoute('app_passager_reclamation_index');
        }

        return $this->render('passager/reclamation/new.html.twig', [
            'form' => $form->createView(),
            'user' => $user
        ]);
    }

    #[Route('/submit', name: 'app_passager_reclamation_submit', methods: ['POST'])]
    public function submit(Request $request, EntityManagerInterface $entityManager): Response
    {
        $user = $this->getUser();
        if (!$user) {
            return $this->redirectToRoute('app_login');
        }
        
        $reclamation = new Reclamation();
        $reclamation->setUser($user);
        $reclamation->setDate(new \DateTime());
        $reclamation->setStatus('pending');
        $reclamation->setSubject($request->request->get('subject'));
        $reclamation->setDescription($request->request->get('description'));
        
        $entityManager->persist($reclamation);
        $entityManager->flush();
        
        $this->addFlash('success', 'Votre réclamation a été soumise avec succès.');
        return $this->redirectToRoute('app_passager_reclamation_index');
    }

    #[Route('/{id}', name: 'app_passager_reclamation_show')]
    public function show(Reclamation $reclamation): Response
    {
        $user = $this->getUser();
        if (!$user) {
            return $this->redirectToRoute('app_login');
        }
        
        // Vérifier que le passager est bien le propriétaire de cette réclamation
        if ($reclamation->getUser() !== $user) {
            throw $this->createAccessDeniedException('Vous n\'êtes pas autorisé à voir cette réclamation.');
        }
        
        return $this->render('passager/reclamation/show.html.twig', [
            'reclamation' => $reclamation,
            'user' => $user
        ]);
    }

    #[Route('/{id}/edit', name: 'app_passager_reclamation_edit')]
    public function edit(Request $request, Reclamation $reclamation, EntityManagerInterface $entityManager): Response
    {
        $user = $this->getUser();
        if (!$user) {
            return $this->redirectToRoute('app_login');
        }
        
        // Vérifier que l'utilisateur est bien le propriétaire de cette réclamation
        if ($reclamation->getUser() !== $user) {
            throw $this->createAccessDeniedException('Vous n\'êtes pas autorisé à modifier cette réclamation.');
        }
        
        // Si la réclamation n'est plus en attente, on ne peut plus la modifier
        if ($reclamation->getStatus() !== 'pending') {
            $this->addFlash('error', 'Vous ne pouvez plus modifier cette réclamation car elle est déjà en cours de traitement.');
            return $this->redirectToRoute('app_passager_reclamation_show', ['id' => $reclamation->getId()]);
        }
        
        $form = $this->createForm(ReclamationType::class, $reclamation);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();
            
            $this->addFlash('success', 'Votre réclamation a été mise à jour avec succès.');
            return $this->redirectToRoute('app_passager_reclamation_show', ['id' => $reclamation->getId()]);
        }

        return $this->render('passager/reclamation/edit.html.twig', [
            'reclamation' => $reclamation,
            'form' => $form->createView(),
            'user' => $user
        ]);
    }
} 