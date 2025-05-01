<?php

namespace App\Repository;

use App\Entity\Feature;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Feature>
 */
class FeatureRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Feature::class);
    }

    public function save(Feature $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(Feature $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function findDefaultFeatures(): array
    {
        return [
            ['name' => 'Air Conditioning', 'description' => 'Vehicle has air conditioning system'],
            ['name' => 'Bluetooth', 'description' => 'Vehicle has Bluetooth connectivity'],
            ['name' => 'AUX Input', 'description' => 'Vehicle has AUX input for audio'],
            ['name' => 'Water Bottle', 'description' => 'Vehicle has water bottle holder'],
            ['name' => 'Black Tinted Windows', 'description' => 'Vehicle has black tinted windows'],
        ];
    }
} 