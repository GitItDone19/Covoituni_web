<?php

namespace App\Controller;

use App\Entity\Reclamation;
use App\Form\ReclamationType;
use App\Repository\ReclamationRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/reclamation')]
class ReclamationController extends AbstractController
{
    #[Route('/', name: 'app_reclamation_index', methods: ['GET'])]
    public function index(ReclamationRepository $reclamationRepository): Response
    {
        return $this->render('reclamation/index.html.twig', [
            'reclamations' => $reclamationRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_reclamation_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        // Get the current user
        $user = $this->getUser();
        
        // Make sure user is logged in
        if (!$user) {
            $this->addFlash('error', 'You must be logged in to submit a reclamation.');
            return $this->redirectToRoute('app_login');
        }
        
        $reclamation = new Reclamation();
        $reclamation->setDate(new \DateTime());
        $reclamation->setState('pending');
        $reclamation->setUser($user);
        
        $form = $this->createForm(ReclamationType::class, $reclamation, [
            'simplified' => true
        ]);
        
        $form->handleRequest($request);

        // Debug: Check form submission
        if ($form->isSubmitted()) {
            // If form is valid, process it
            if ($form->isValid()) {
                try {
                    $entityManager->persist($reclamation);
                    $entityManager->flush();
                    $this->addFlash('success', 'Your reclamation has been submitted successfully!');
                    return $this->redirectToRoute('app_reclamation_index');
                } catch (\Exception $e) {
                    $this->addFlash('error', 'Database error: ' . $e->getMessage());
                }
            } else {
                // Debug validation errors in detail
                $errors = [];
                foreach ($form->getErrors(true) as $error) {
                    $errors[] = $error->getMessage() . ' (Origin: ' . $error->getOrigin()->getName() . ')';
                }
                
                // Send detailed errors to flash
                if (!empty($errors)) {
                    $this->addFlash('error', 'Validation errors: ' . implode(', ', $errors));
                } else {
                    $this->addFlash('error', 'Form is invalid but no specific errors were found.');
                }
            }
        }

        return $this->render('reclamation/new.html.twig', [
            'reclamation' => $reclamation,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_reclamation_show', methods: ['GET'])]
    public function show(Reclamation $reclamation): Response
    {
        return $this->render('reclamation/show.html.twig', [
            'reclamation' => $reclamation,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_reclamation_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Reclamation $reclamation, EntityManagerInterface $entityManager): Response
    {
        // Get original values
        $originalState = $reclamation->getState();
        $originalUser = $reclamation->getUser();
        $originalDate = $reclamation->getDate();
        $originalReply = $reclamation->getReply();
        
        // Create form
        $form = $this->createForm(ReclamationType::class, $reclamation, [
            'simplified_edit' => true
        ]);
        
        $form->handleRequest($request);
        
        // Handle form submission
        if ($form->isSubmitted() && $form->isValid()) {
            // Restore the values that shouldn't be changed by the edit form
            $reclamation->setState($originalState);
            $reclamation->setUser($originalUser);
            $reclamation->setDate($originalDate);
            $reclamation->setReply($originalReply);
            
            try {
                // Save changes
                $entityManager->persist($reclamation);
                $entityManager->flush();
                
                $this->addFlash('success', 'Reclamation updated successfully!');
                return $this->redirectToRoute('app_reclamation_show', ['id' => $reclamation->getId()]);
            } catch (\Exception $e) {
                $this->addFlash('error', 'Failed to update reclamation: ' . $e->getMessage());
            }
        }
        
        return $this->render('reclamation/edit.html.twig', [
            'reclamation' => $reclamation,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_reclamation_delete', methods: ['POST'])]
    public function delete(Request $request, Reclamation $reclamation, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$reclamation->getId(), $request->request->get('_token'))) {
            $entityManager->remove($reclamation);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_reclamation_index', [], Response::HTTP_SEE_OTHER);
    }
} 