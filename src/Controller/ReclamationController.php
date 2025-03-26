<?php

namespace App\Controller;

use App\Entity\Reclamation;
use App\Form\ReclamationType;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;
use Doctrine\ORM\EntityManagerInterface;

#[Route('/reclamation')]
class ReclamationController extends AbstractController
{
    private $doctrine;

    public function __construct(ManagerRegistry $doctrine)
    {
        $this->doctrine = $doctrine;
    }

    #[Route('/', name: 'app_passager_reclamation_index')]
    public function index(): Response
    {
        $user = $this->getUser();
        $reclamations = $this->doctrine->getRepository(Reclamation::class)->findBy(['user' => $user]);
        
        return $this->render('passager/reclamation/index.html.twig', [
            'reclamations' => $reclamations
        ]);
    }

    #[Route('/{id}', name: 'app_passager_reclamation_show', methods: ['GET'])]
    public function show(Reclamation $reclamation): Response
    {
        // Vérifier que l'utilisateur est bien le propriétaire de la réclamation
        if ($reclamation->getUser() !== $this->getUser()) {
            throw $this->createAccessDeniedException('Vous n\'êtes pas autorisé à voir cette réclamation');
        }
        
        return $this->render('passager/reclamation/show.html.twig', [
            'reclamation' => $reclamation,
            'edit_url' => $this->generateUrl('app_passager_reclamation_edit', ['id' => $reclamation->getId()]),
        ]);
    }

    #[Route('/new', name: 'app_passager_reclamation_new')]
    public function new(Request $request): Response
    {
        $reclamation = new Reclamation();
        $form = $this->createForm(ReclamationType::class, $reclamation);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $reclamation->setUser($this->getUser());
            $reclamation->setDate(new \DateTime());
            $reclamation->setState('pending');
            
            $entityManager = $this->doctrine->getManager();
            $entityManager->persist($reclamation);
            $entityManager->flush();

            $this->addFlash('success', 'Votre réclamation a été soumise avec succès');
            return $this->redirectToRoute('app_passager_reclamation_index');
        }

        return $this->render('passager/reclamation/new.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    #[Route('/{id}/edit', name: 'app_passager_reclamation_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Reclamation $reclamation): Response
    {
        // Vérifier que l'utilisateur est bien le propriétaire de la réclamation
        if ($reclamation->getUser() !== $this->getUser()) {
            throw $this->createAccessDeniedException('Vous n\'êtes pas autorisé à modifier cette réclamation');
        }
        
        // Vérifier que la réclamation est toujours en attente
        if ($reclamation->getState() !== 'pending') {
            $this->addFlash('error', 'Vous ne pouvez pas modifier une réclamation qui a déjà été traitée');
            return $this->redirectToRoute('app_passager_reclamation_show', ['id' => $reclamation->getId()]);
        }
        
        $form = $this->createForm(ReclamationType::class, $reclamation);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->doctrine->getManager()->flush();
            
            $this->addFlash('success', 'Votre réclamation a été mise à jour avec succès');
            return $this->redirectToRoute('app_passager_reclamation_show', ['id' => $reclamation->getId()]);
        }

        return $this->render('passager/reclamation/edit.html.twig', [
            'reclamation' => $reclamation,
            'form' => $form->createView(),
        ]);
    }

    #[Route('/{id}', name: 'app_reclamation_delete', methods: ['POST'])]
    public function delete(Request $request, Reclamation $reclamation, EntityManagerInterface $entityManager): Response
    {
        // Seul le propriétaire peut supprimer une réclamation en état "pending"
        if (!$this->isGranted('ROLE_ADMIN') && 
            ($reclamation->getUser() !== $this->getUser() || $reclamation->getState() !== 'pending')) {
            throw new AccessDeniedException('You cannot delete this reclamation');
        }
        
        if ($this->isCsrfTokenValid('delete'.$reclamation->getId(), $request->request->get('_token'))) {
            $entityManager->remove($reclamation);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_reclamation_index', [], Response::HTTP_SEE_OTHER);
    }
} 