<?php

namespace App\Repository;

use App\Entity\Car;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Car>
 *
 * @method Car|null find($id, $lockMode = null, $lockVersion = null)
 * @method Car|null findOneBy(array $criteria, array $orderBy = null)
 * @method Car[]    findAll()
 * @method Car[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CarRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Car::class);
    }

    /**
     * @return Car[] Returns an array of Car objects
     */
    public function findByUserId(int $userId): array
    {
        try {
            // Since there's no direct user_id column in the car table,
            // we need to look for cars that might be referenced in other tables
            $conn = $this->getEntityManager()->getConnection();
            
            // Check for cars referenced in annonces for this user
            $sql = "SELECT DISTINCT c.* FROM car c
                   JOIN annonce a ON a.car_id = c.id
                   WHERE a.driver_id = :userId";
            
            $stmt = $conn->prepare($sql);
            $resultSet = $stmt->executeQuery(['userId' => $userId]);
            $carDataArray = $resultSet->fetchAllAssociative();
            
            if (empty($carDataArray)) {
                return [];
            }
            
            // Create Car entities from the data
            $cars = [];
            $entityManager = $this->getEntityManager();
            $metadata = $entityManager->getClassMetadata(Car::class);
            
            foreach ($carDataArray as $carData) {
                $car = new Car();
                
                // Map the database columns to entity properties
                if (isset($carData['id'])) {
                    $metadata->setFieldValue($car, 'id', $carData['id']);
                }
                
                if (isset($carData['plaque_imatriculation'])) {
                    $metadata->setFieldValue($car, 'plaqueImatriculation', $carData['plaque_imatriculation']);
                }
                
                if (isset($carData['description'])) {
                    $metadata->setFieldValue($car, 'description', $carData['description']);
                }
                
                if (isset($carData['date_imatriculation'])) {
                    $metadata->setFieldValue($car, 'dateImatriculation', new \DateTime($carData['date_imatriculation']));
                }
                
                if (isset($carData['couleur'])) {
                    $metadata->setFieldValue($car, 'couleur', $carData['couleur']);
                }
                
                if (isset($carData['marque'])) {
                    $metadata->setFieldValue($car, 'marque', $carData['marque']);
                }
                
                if (isset($carData['modele'])) {
                    $metadata->setFieldValue($car, 'modele', $carData['modele']);
                }
                
                // Load the categorie relationship if needed
                if (isset($carData['categorie_id']) && $carData['categorie_id']) {
                    $categorie = $entityManager->getReference('App\Entity\Categorie', $carData['categorie_id']);
                    $metadata->setFieldValue($car, 'categorie', $categorie);
                }
                
                $cars[] = $car;
            }
            
            return $cars;
        } catch (\Exception $e) {
            // If there's an error, return an empty array
            return [];
        }
    }

    /**
     * Override de la méthode findBy pour gérer temporairement le cas où userId n'existe pas
     */
    public function findBy(array $criteria, ?array $orderBy = null, ?int $limit = null, ?int $offset = null): array
    {
        if (isset($criteria['userId'])) {
            try {
                return parent::findBy($criteria, $orderBy, $limit, $offset);
            } catch (\Exception $e) {
                // Si la colonne userId n'existe pas encore, retourne un tableau vide
                return [];
            }
        }
        
        return parent::findBy($criteria, $orderBy, $limit, $offset);
    }

    /**
     * Find a single Car by userId using alternative methods to work around schema issues
     */
    public function findCarByUserId(int $userId): ?Car
    {
        try {
            // Since there's no direct user_id column in the car table,
            // we need to look for cars that might be referenced in other tables
            $conn = $this->getEntityManager()->getConnection();
            
            // Check if there are any annonces for this user that reference a car
            $sql = "SELECT c.* FROM car c
                   JOIN annonce a ON a.car_id = c.id
                   WHERE a.driver_id = :userId
                   LIMIT 1";
            
            $stmt = $conn->prepare($sql);
            $resultSet = $stmt->executeQuery(['userId' => $userId]);
            $carData = $resultSet->fetchAssociative();
            
            if (!$carData) {
                return null;
            }
            
            // Create a Car entity from the data
            $entityManager = $this->getEntityManager();
            $metadata = $entityManager->getClassMetadata(Car::class);
            $car = new Car();
            
            // Map the database columns to entity properties
            if (isset($carData['id'])) {
                $metadata->setFieldValue($car, 'id', $carData['id']);
            }
            
            if (isset($carData['plaque_imatriculation'])) {
                $metadata->setFieldValue($car, 'plaqueImatriculation', $carData['plaque_imatriculation']);
            }
            
            if (isset($carData['description'])) {
                $metadata->setFieldValue($car, 'description', $carData['description']);
            }
            
            if (isset($carData['date_imatriculation'])) {
                $metadata->setFieldValue($car, 'dateImatriculation', new \DateTime($carData['date_imatriculation']));
            }
            
            if (isset($carData['couleur'])) {
                $metadata->setFieldValue($car, 'couleur', $carData['couleur']);
            }
            
            if (isset($carData['marque'])) {
                $metadata->setFieldValue($car, 'marque', $carData['marque']);
            }
            
            if (isset($carData['modele'])) {
                $metadata->setFieldValue($car, 'modele', $carData['modele']);
            }
            
            // Load the categorie relationship if needed
            if (isset($carData['categorie_id']) && $carData['categorie_id']) {
                $categorie = $entityManager->getReference('App\Entity\Categorie', $carData['categorie_id']);
                $metadata->setFieldValue($car, 'categorie', $categorie);
            }
            
            return $car;
        } catch (\Exception $e) {
            // If there's an error, return null
            return null;
        }
    }
} 