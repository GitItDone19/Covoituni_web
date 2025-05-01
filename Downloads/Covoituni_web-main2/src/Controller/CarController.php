<?php

namespace App\Controller;

use App\Entity\Car;
use App\Form\CarType;
use App\Service\CategoryMatcherService;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CarController extends AbstractController
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

    #[Route('/car/new', name: 'car_new')]
    public function new(Request $request): Response
    {
        $car = new Car();
        $form = $this->createForm(CarType::class, $car);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // Set the user ID from the current user
            $user = $this->getUser();
            $car->setUserId($user ? $user->getId() : 0);

            // Determine the best matching category based on features
            $matchResult = $this->categoryMatcher->assignBestMatchingCategory($car);
            
            if (!$matchResult) {
                // No matching category found, display an error
                $this->addFlash('error', 'Could not find a matching category for your vehicle. Please contact an administrator.');
                return $this->redirectToRoute('car_new');
            }

            $this->entityManager->persist($car);
            $this->entityManager->flush();

            $this->addFlash('success', 'Car added successfully! It has been assigned to the "' . $car->getCategorie()->getNom() . '" category.');
            return $this->redirectToRoute('car_list');
        }

        return $this->render('car/new.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    #[Route('/car/{id}/edit', name: 'car_edit')]
    public function edit(Request $request, Car $car): Response
    {
        $originalCategory = $car->getCategorie();
        $form = $this->createForm(CarType::class, $car);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // Re-determine the best matching category based on updated features
            $matchResult = $this->categoryMatcher->assignBestMatchingCategory($car);
            
            if (!$matchResult) {
                // No matching category found, keep the original category
                $car->setCategorie($originalCategory);
                $this->addFlash('warning', 'Could not find a better matching category. The original category has been preserved.');
            } elseif ($car->getCategorie()->getId() !== $originalCategory->getId()) {
                $this->addFlash('info', 'The car category has been updated to "' . $car->getCategorie()->getNom() . '" based on your feature selection.');
            }

            $this->entityManager->flush();

            $this->addFlash('success', 'Car updated successfully!');
            return $this->redirectToRoute('car_list');
        }

        return $this->render('car/edit.html.twig', [
            'form' => $form->createView(),
            'car' => $car,
        ]);
    }

    #[Route('/car/list', name: 'car_list')]
    public function list(): Response
    {
        $user = $this->getUser();
        $userId = $user ? $user->getId() : 0;
        
        $cars = $this->entityManager->getRepository(Car::class)
            ->findBy(['userId' => $userId]);

        return $this->render('car/list.html.twig', [
            'cars' => $cars,
        ]);
    }
} 