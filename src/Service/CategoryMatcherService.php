<?php

namespace App\Service;

use App\Entity\Car;
use App\Entity\Categorie;
use Doctrine\ORM\EntityManagerInterface;

class CategoryMatcherService
{
    private EntityManagerInterface $entityManager;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    public function assignBestMatchingCategory(Car $car): bool
    {
        $categories = $this->entityManager->getRepository(Categorie::class)->findAll();
        $carFeatures = $car->getFeatures();
        
        $bestMatch = null;
        $bestScore = -1;
        
        foreach ($categories as $category) {
            $score = $category->calculateSimilarity($carFeatures);
            
            if ($score > $bestScore) {
                $bestScore = $score;
                $bestMatch = $category;
            }
        }
        
        if ($bestMatch) {
            $car->setCategorie($bestMatch);
            return true;
        }
        
        return false;
    }
} 