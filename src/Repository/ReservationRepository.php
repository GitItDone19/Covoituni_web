<?php

namespace App\Repository;

use App\Entity\Reservation;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Reservation>
 *
 * @method Reservation|null find($id, $lockMode = null, $lockVersion = null)
 * @method Reservation|null findOneBy(array $criteria, array $orderBy = null)
 * @method Reservation[]    findAll()
 * @method Reservation[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ReservationRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Reservation::class);
    }

    /**
     * Trouver les réservations par utilisateur
     */
    public function findByUser(int $userId): array
    {
        try {
            $conn = $this->getEntityManager()->getConnection();
            
            // Use direct SQL query with the correct column name and check if columns exist
            $sql = "SELECT r.*,
                CASE 
                    WHEN COLUMN_EXISTS('reservation', 'annonce_event_id') THEN r.annonce_event_id
                    WHEN COLUMN_EXISTS('reservation', 'event_id') THEN r.event_id
                    ELSE NULL
                END as event_id_value
                FROM reservation r WHERE r.user_id = :userId";
            
            // Check if the COLUMN_EXISTS function exists, if not use a simpler query
            try {
                $stmt = $conn->prepare($sql);
                $resultSet = $stmt->executeQuery(['userId' => $userId]);
            } catch (\Exception $e) {
                // Fallback to simpler query if COLUMN_EXISTS function doesn't exist
                $sql = "SELECT * FROM reservation WHERE user_id = :userId";
                $stmt = $conn->prepare($sql);
                $resultSet = $stmt->executeQuery(['userId' => $userId]);
            }
            
            $reservationDataArray = $resultSet->fetchAllAssociative();
            
            if (empty($reservationDataArray)) {
                return [];
            }
            
            // Hydrate Reservation entities manually from the database results
            $reservations = [];
            $entityManager = $this->getEntityManager();
            $metadata = $entityManager->getClassMetadata(Reservation::class);
            
            foreach ($reservationDataArray as $reservationData) {
                $reservation = new Reservation();
                
                // Map the database columns to entity properties
                if (isset($reservationData['id'])) {
                    $metadata->setFieldValue($reservation, 'id', $reservationData['id']);
                }
                
                if (isset($reservationData['user_id'])) {
                    $metadata->setFieldValue($reservation, 'userId', $reservationData['user_id']);
                }
                
                if (isset($reservationData['date_reservation'])) {
                    $metadata->setFieldValue($reservation, 'dateReservation', new \DateTime($reservationData['date_reservation']));
                }
                
                if (isset($reservationData['status'])) {
                    $metadata->setFieldValue($reservation, 'status', $reservationData['status']);
                }
                
                if (isset($reservationData['comment'])) {
                    $metadata->setFieldValue($reservation, 'comment', $reservationData['comment']);
                }
                
                if (isset($reservationData['updated_at'])) {
                    $metadata->setFieldValue($reservation, 'updatedAt', new \DateTime($reservationData['updated_at']));
                }
                
                if (isset($reservationData['type'])) {
                    $metadata->setFieldValue($reservation, 'type', $reservationData['type']);
                }
                
                // Load the annonce relationship if needed
                if (isset($reservationData['annonce_id']) && $reservationData['annonce_id']) {
                    $annonce = $entityManager->getReference('App\Entity\Annonce', $reservationData['annonce_id']);
                    $metadata->setFieldValue($reservation, 'annonce', $annonce);
                }
                
                // Load the annonceEvent relationship if needed, checking both possible column names
                $eventId = null;
                if (isset($reservationData['event_id_value']) && $reservationData['event_id_value']) {
                    $eventId = $reservationData['event_id_value'];
                } elseif (isset($reservationData['event_id']) && $reservationData['event_id']) {
                    $eventId = $reservationData['event_id'];
                } elseif (isset($reservationData['annonce_event_id']) && $reservationData['annonce_event_id']) {
                    $eventId = $reservationData['annonce_event_id'];
                }
                
                if ($eventId) {
                    try {
                        $annonceEvent = $entityManager->getReference('App\Entity\AnnonceEvent', $eventId);
                        $metadata->setFieldValue($reservation, 'annonceEvent', $annonceEvent);
                    } catch (\Exception $e) {
                        // Skip if there's an issue with this relationship
                    }
                }
                
                $reservations[] = $reservation;
            }
            
            return $reservations;
        } catch (\Exception $e) {
            // Return empty array if anything goes wrong
            return [];
        }
    }

    /**
     * Trouver les réservations par annonce
     */
    public function findByAnnonce(int $annonceId): array
    {
        try {
            $qb = $this->createQueryBuilder('r')
                ->where('r.annonce = :annonceId')
                ->setParameter('annonceId', $annonceId);
            
            // Check if we're dealing with an annonce or event
            $conn = $this->getEntityManager()->getConnection();
            $sql = "SELECT COUNT(*) FROM annonce WHERE id = :annonceId";
            $stmt = $conn->prepare($sql);
            $result = $stmt->executeQuery(['annonceId' => $annonceId]);
            
            // If not found in annonce table, check if it's an event
            if ($result->fetchOne() == 0) {
                // Try to find if this is an AnnonceEvent instead
                $qb = $this->createQueryBuilder('r');
                
                // Try to determine which column name is used
                try {
                    $sql = "SHOW COLUMNS FROM reservation LIKE 'event_id'";
                    $stmt = $conn->prepare($sql);
                    $eventIdExists = count($stmt->executeQuery([])->fetchAllAssociative()) > 0;
                    
                    if ($eventIdExists) {
                        $qb->where('r.annonceEvent = :annonceId');
                    } else {
                        $sql = "SHOW COLUMNS FROM reservation LIKE 'annonce_event_id'";
                        $stmt = $conn->prepare($sql);
                        $annonceEventIdExists = count($stmt->executeQuery([])->fetchAllAssociative()) > 0;
                        
                        if ($annonceEventIdExists) {
                            $qb->where('r.annonceEvent = :annonceId');
                        } else {
                            // No matching column found
                            return [];
                        }
                    }
                } catch (\Exception $e) {
                    // In case of error, try the most likely column name
                    $qb->where('r.annonceEvent = :annonceId');
                }
                
                $qb->setParameter('annonceId', $annonceId);
            }
            
            return $qb->getQuery()->getResult();
        } catch (\Exception $e) {
            // Log error if needed
            return [];
        }
    }

    /**
     * Trouver les réservations en attente pour un conducteur
     */
    public function findPendingByDriver(int $driverId): array
    {
        return $this->createQueryBuilder('r')
            ->join('r.annonce', 'a')
            ->andWhere('a.driver_id = :driverId')
            ->andWhere('r.status = :status')
            ->setParameter('driverId', $driverId)
            ->setParameter('status', 'PENDING')
            ->orderBy('r.dateReservation', 'ASC')
            ->getQuery()
            ->getResult();
    }
    
    /**
     * Count reservations by status
     * 
     * @param string $status The status to count
     * @return int The number of reservations with the given status
     */
    public function countByStatus(string $status): int
    {
        try {
            return $this->createQueryBuilder('r')
                ->select('COUNT(r.id)')
                ->where('r.status = :status')
                ->setParameter('status', $status)
                ->getQuery()
                ->getSingleScalarResult();
        } catch (\Exception $e) {
            return 0;
        }
    }
    
    /**
     * Find reservations for the current day
     * 
     * @return Reservation[] Today's reservations
     */
    public function findToday(): array
    {
        $today = new \DateTime('today');
        $tomorrow = new \DateTime('tomorrow');
        
        try {
            return $this->createQueryBuilder('r')
                ->where('r.dateReservation >= :today')
                ->andWhere('r.dateReservation < :tomorrow')
                ->setParameter('today', $today)
                ->setParameter('tomorrow', $tomorrow)
                ->getQuery()
                ->getResult();
        } catch (\Exception $e) {
            return [];
        }
    }
    
    /**
     * Count today's confirmed reservations
     * 
     * @return int The number of confirmed reservations for today
     */
    public function countTodayConfirmed(): int
    {
        $today = new \DateTime('today');
        $tomorrow = new \DateTime('tomorrow');
        
        try {
            return $this->createQueryBuilder('r')
                ->select('COUNT(r.id)')
                ->where('r.dateReservation >= :today')
                ->andWhere('r.dateReservation < :tomorrow')
                ->andWhere('r.status = :status')
                ->setParameter('today', $today)
                ->setParameter('tomorrow', $tomorrow)
                ->setParameter('status', 'confirmed')
                ->getQuery()
                ->getSingleScalarResult();
        } catch (\Exception $e) {
            return 0;
        }
    }

    /**
     * Trouver une réservation par annonce et utilisateur
     */
    public function findByAnnonceAndUser(int $annonceId, int $userId): ?Reservation
    {
        try {
            // First try as regular annonce
            $qb = $this->createQueryBuilder('r')
                ->where('r.annonce = :annonceId')
                ->andWhere('r.utilisateur = :userId')
                ->setParameter('annonceId', $annonceId)
                ->setParameter('userId', $userId)
                ->setMaxResults(1);
            
            $result = $qb->getQuery()->getOneOrNullResult();
            
            // If not found, try as an event
            if ($result === null) {
                $conn = $this->getEntityManager()->getConnection();
                
                // Try to determine which column is used for event relationship
                try {
                    $sql = "SHOW COLUMNS FROM reservation LIKE 'event_id'";
                    $stmt = $conn->prepare($sql);
                    $eventIdExists = count($stmt->executeQuery([])->fetchAllAssociative()) > 0;
                    
                    $qb = $this->createQueryBuilder('r')
                        ->andWhere('r.utilisateur = :userId')
                        ->setParameter('userId', $userId)
                        ->setMaxResults(1);
                    
                    if ($eventIdExists) {
                        $qb->andWhere('r.annonceEvent = :annonceId');
                    } else {
                        $sql = "SHOW COLUMNS FROM reservation LIKE 'annonce_event_id'";
                        $stmt = $conn->prepare($sql);
                        $annonceEventIdExists = count($stmt->executeQuery([])->fetchAllAssociative()) > 0;
                        
                        if ($annonceEventIdExists) {
                            $qb->andWhere('r.annonceEvent = :annonceId');
                        } else {
                            // No matching column found
                            return null;
                        }
                    }
                    
                    $qb->setParameter('annonceId', $annonceId);
                    $result = $qb->getQuery()->getOneOrNullResult();
                } catch (\Exception $e) {
                    // In case of error, try the most likely column name
                    $qb = $this->createQueryBuilder('r')
                        ->andWhere('r.annonceEvent = :annonceId')
                        ->andWhere('r.utilisateur = :userId')
                        ->setParameter('annonceId', $annonceId)
                        ->setParameter('userId', $userId)
                        ->setMaxResults(1);
                    
                    $result = $qb->getQuery()->getOneOrNullResult();
                }
            }
            
            return $result;
        } catch (\Exception $e) {
            // Log error if needed
            return null;
        }
    }

    /**
     * Find all reservations for a specific event
     */
    public function findByEvent(int $eventId): array
    {
        try {
            $conn = $this->getEntityManager()->getConnection();
            
            // Try to determine which column is used for event relationship
            try {
                $sql = "SHOW COLUMNS FROM reservation LIKE 'event_id'";
                $stmt = $conn->prepare($sql);
                $eventIdExists = count($stmt->executeQuery([])->fetchAllAssociative()) > 0;
                
                $qb = $this->createQueryBuilder('r');
                
                if ($eventIdExists) {
                    $qb->andWhere('r.annonceEvent = :eventId');
                } else {
                    $sql = "SHOW COLUMNS FROM reservation LIKE 'annonce_event_id'";
                    $stmt = $conn->prepare($sql);
                    $annonceEventIdExists = count($stmt->executeQuery([])->fetchAllAssociative()) > 0;
                    
                    if ($annonceEventIdExists) {
                        $qb->andWhere('r.annonceEvent = :eventId');
                    } else {
                        // No matching column found
                        return [];
                    }
                }
                
                $qb->setParameter('eventId', $eventId);
                return $qb->getQuery()->getResult();
            } catch (\Exception $e) {
                // In case of error, try the most likely column name
                $qb = $this->createQueryBuilder('r')
                    ->andWhere('r.annonceEvent = :eventId')
                    ->setParameter('eventId', $eventId);
                
                return $qb->getQuery()->getResult();
            }
        } catch (\Exception $e) {
            // Log error if needed
            return [];
        }
    }

    /**
     * Find reservation by event and user
     */
    public function findByEventAndUser(int $eventId, int $userId): ?Reservation
    {
        try {
            $conn = $this->getEntityManager()->getConnection();
            
            // Try to determine which column is used for event relationship
            try {
                $sql = "SHOW COLUMNS FROM reservation LIKE 'event_id'";
                $stmt = $conn->prepare($sql);
                $eventIdExists = count($stmt->executeQuery([])->fetchAllAssociative()) > 0;
                
                $qb = $this->createQueryBuilder('r')
                    ->andWhere('r.user = :userId')
                    ->setParameter('userId', $userId);
                
                if ($eventIdExists) {
                    $qb->andWhere('r.annonceEvent = :eventId');
                } else {
                    $sql = "SHOW COLUMNS FROM reservation LIKE 'annonce_event_id'";
                    $stmt = $conn->prepare($sql);
                    $annonceEventIdExists = count($stmt->executeQuery([])->fetchAllAssociative()) > 0;
                    
                    if ($annonceEventIdExists) {
                        $qb->andWhere('r.annonceEvent = :eventId');
                    } else {
                        // No matching column found
                        return null;
                    }
                }
                
                $qb->setParameter('eventId', $eventId)
                   ->setMaxResults(1);
                
                return $qb->getQuery()->getOneOrNullResult();
            } catch (\Exception $e) {
                // In case of error, try the most likely column name
                $qb = $this->createQueryBuilder('r')
                    ->andWhere('r.annonceEvent = :eventId')
                    ->andWhere('r.user = :userId')
                    ->setParameter('eventId', $eventId)
                    ->setParameter('userId', $userId)
                    ->setMaxResults(1);
                
                return $qb->getQuery()->getOneOrNullResult();
            }
        } catch (\Exception $e) {
            // Log error if needed
            return null;
        }
    }
} 