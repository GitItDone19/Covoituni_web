<?php

namespace App\Controller;

use App\Entity\Categorie;
use App\Form\CategorieType;
use App\Service\CategoryMatcherService;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CategorieController extends AbstractController
{
    private EntityManagerInterface $entityManager;
    private CategoryMatcherService $categoryMatcher;

    public function __construct(
        EntityManagerInterface $entityManager,
        CategoryMatcherService $categoryMatcher
    ) {
        $this->entityManager = $entityManager;
        $this->categoryMatcher = $categoryMatcher;
    }

    #[Route('/categorie/new', name: 'categorie_new')]
    public function new(Request $request): Response
    {
        $categorie = new Categorie();
        $form = $this->createForm(CategorieType::class, $categorie);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->entityManager->persist($categorie);
            $this->entityManager->flush();

            $this->addFlash('success', 'Category created successfully!');
            return $this->redirectToRoute('categorie_list');
        }

        return $this->render('categorie/new.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    #[Route('/categorie/{id}/edit', name: 'categorie_edit')]
    public function edit(Request $request, Categorie $categorie): Response
    {
        $form = $this->createForm(CategorieType::class, $categorie);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->entityManager->flush();

            // Update all cars in this category to ensure they still match
            foreach ($categorie->getCars() as $car) {
                $this->categoryMatcher->assignBestMatchingCategory($car);
            }

            $this->addFlash('success', 'Category updated successfully!');
            return $this->redirectToRoute('categorie_list');
        }

        return $this->render('categorie/edit.html.twig', [
            'form' => $form->createView(),
            'categorie' => $categorie,
        ]);
    }

    #[Route('/categorie', name: 'categorie_list')]
    public function list(): Response
    {
        $categories = $this->entityManager->getRepository(Categorie::class)->findAll();

        return $this->render('categorie/list.html.twig', [
            'categories' => $categories,
        ]);
    }
} 