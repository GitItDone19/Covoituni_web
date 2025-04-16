<?php

namespace App\Controller\Api;

use App\Entity\Reclamation;
use App\Entity\Reponse;
use App\Entity\Utilisateur;
use App\Repository\ReclamationRepository;
use App\Repository\ReponseRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\SerializerInterface;
use Symfony\Component\Validator\Validator\ValidatorInterface;

#[Route('/api/reclamations')]
class ReclamationApiController extends AbstractController
{
    private $serializer;
    private $validator;
    private $entityManager;

    public function __construct(
        SerializerInterface $serializer,
        ValidatorInterface $validator,
        EntityManagerInterface $entityManager
    ) {
        $this->serializer = $serializer;
        $this->validator = $validator;
        $this->entityManager = $entityManager;
    }

    /**
     * Get all reclamations with optional filtering
     */
    #[Route('', name: 'api_reclamations_index', methods: ['GET'])]
    public function index(Request $request, ReclamationRepository $reclamationRepository): JsonResponse
    {
        // Handle query parameters for filtering
        $status = $request->query->get('status');
        $userId = $request->query->get('user_id');
        $startDate = $request->query->get('start_date');
        $endDate = $request->query->get('end_date');
        
        // Pagination parameters
        $page = max(1, $request->query->getInt('page', 1));
        $limit = $request->query->getInt('limit', 10);
        
        // Build query criteria based on filters
        $criteria = [];
        if ($status) {
            $criteria['status'] = $status;
        }
        if ($userId) {
            $criteria['user_id'] = $userId;
        }
        
        // Get reclamations with pagination
        $offset = ($page - 1) * $limit;
        $reclamations = $reclamationRepository->findBy($criteria, ['date' => 'DESC'], $limit, $offset);
        $total = count($reclamationRepository->findBy($criteria));
        
        // Format the response
        $data = [];
        foreach ($reclamations as $reclamation) {
            $reponses = [];
            foreach ($reclamation->getReponses() as $reponse) {
                $reponses[] = [
                    'id' => $reponse->getId(),
                    'content' => $reponse->getContent(),
                    'date' => $reponse->getDate()->format('Y-m-d H:i:s'),
                    'admin_username' => $reponse->getAdminUsername(),
                ];
            }
            
            $data[] = [
                'id' => $reclamation->getId(),
                'subject' => $reclamation->getSubject(),
                'description' => $reclamation->getDescription(),
                'status' => $reclamation->getStatus(),
                'date' => $reclamation->getDate()->format('Y-m-d H:i:s'),
                'user' => [
                    'id' => $reclamation->getUser()->getId(),
                    'prenom' => $reclamation->getUser()->getPrenom(),
                    'nom' => $reclamation->getUser()->getNom(),
                    'email' => $reclamation->getUser()->getEmail(),
                ],
                'reponses' => $reponses,
            ];
        }
        
        return $this->json([
            'data' => $data,
            'pagination' => [
                'total' => $total,
                'page' => $page,
                'limit' => $limit,
                'pages' => ceil($total / $limit),
            ],
        ]);
    }

    /**
     * Get a specific reclamation by ID
     */
    #[Route('/{id}', name: 'api_reclamations_show', methods: ['GET'])]
    public function show(int $id, ReclamationRepository $reclamationRepository): JsonResponse
    {
        $reclamation = $reclamationRepository->find($id);
        
        if (!$reclamation) {
            return $this->json(['message' => 'Reclamation not found'], Response::HTTP_NOT_FOUND);
        }
        
        $reponses = [];
        foreach ($reclamation->getReponses() as $reponse) {
            $reponses[] = [
                'id' => $reponse->getId(),
                'content' => $reponse->getContent(),
                'date' => $reponse->getDate()->format('Y-m-d H:i:s'),
                'admin_username' => $reponse->getAdminUsername(),
            ];
        }
        
        $data = [
            'id' => $reclamation->getId(),
            'subject' => $reclamation->getSubject(),
            'description' => $reclamation->getDescription(),
            'status' => $reclamation->getStatus(),
            'date' => $reclamation->getDate()->format('Y-m-d H:i:s'),
            'user' => [
                'id' => $reclamation->getUser()->getId(),
                'prenom' => $reclamation->getUser()->getPrenom(),
                'nom' => $reclamation->getUser()->getNom(),
                'email' => $reclamation->getUser()->getEmail(),
            ],
            'reponses' => $reponses,
        ];
        
        return $this->json($data);
    }

    /**
     * Create a new reclamation
     */
    #[Route('', name: 'api_reclamations_create', methods: ['POST'])]
    public function create(Request $request, EntityManagerInterface $entityManager): JsonResponse
    {
        $data = json_decode($request->getContent(), true);
        
        if (!isset($data['subject']) || !isset($data['description']) || !isset($data['user_id'])) {
            return $this->json(['message' => 'Missing required fields'], Response::HTTP_BAD_REQUEST);
        }
        
        // Create a new Reclamation
        $reclamation = new Reclamation();
        $reclamation->setSubject($data['subject']);
        $reclamation->setDescription($data['description']);
        $reclamation->setStatus('pending');
        $reclamation->setDate(new \DateTime());
        
        // Set the user
        $user = $entityManager->getRepository(Utilisateur::class)->find($data['user_id']);
        if (!$user) {
            return $this->json(['message' => 'User not found'], Response::HTTP_BAD_REQUEST);
        }
        $reclamation->setUser($user);
        
        // Validate the entity
        $errors = $this->validator->validate($reclamation);
        if (count($errors) > 0) {
            $errorMessages = [];
            foreach ($errors as $error) {
                $errorMessages[$error->getPropertyPath()] = $error->getMessage();
            }
            return $this->json(['errors' => $errorMessages], Response::HTTP_BAD_REQUEST);
        }
        
        // Save to database
        $entityManager->persist($reclamation);
        $entityManager->flush();
        
        return $this->json([
            'message' => 'Reclamation created successfully',
            'id' => $reclamation->getId()
        ], Response::HTTP_CREATED);
    }

    /**
     * Update an existing reclamation
     */
    #[Route('/{id}', name: 'api_reclamations_update', methods: ['PUT'])]
    public function update(int $id, Request $request, ReclamationRepository $reclamationRepository, EntityManagerInterface $entityManager): JsonResponse
    {
        $reclamation = $reclamationRepository->find($id);
        
        if (!$reclamation) {
            return $this->json(['message' => 'Reclamation not found'], Response::HTTP_NOT_FOUND);
        }
        
        $data = json_decode($request->getContent(), true);
        
        // Update fields if provided
        if (isset($data['subject'])) {
            $reclamation->setSubject($data['subject']);
        }
        
        if (isset($data['description'])) {
            $reclamation->setDescription($data['description']);
        }
        
        if (isset($data['status']) && in_array($data['status'], ['pending', 'in_progress', 'resolved', 'rejected'])) {
            $reclamation->setStatus($data['status']);
        }
        
        // Validate the entity
        $errors = $this->validator->validate($reclamation);
        if (count($errors) > 0) {
            $errorMessages = [];
            foreach ($errors as $error) {
                $errorMessages[$error->getPropertyPath()] = $error->getMessage();
            }
            return $this->json(['errors' => $errorMessages], Response::HTTP_BAD_REQUEST);
        }
        
        // Save changes
        $entityManager->flush();
        
        return $this->json(['message' => 'Reclamation updated successfully']);
    }

    /**
     * Add a response to a reclamation
     */
    #[Route('/{id}/responses', name: 'api_reclamations_add_response', methods: ['POST'])]
    public function addResponse(int $id, Request $request, ReclamationRepository $reclamationRepository, EntityManagerInterface $entityManager): JsonResponse
    {
        $reclamation = $reclamationRepository->find($id);
        
        if (!$reclamation) {
            return $this->json(['message' => 'Reclamation not found'], Response::HTTP_NOT_FOUND);
        }
        
        $data = json_decode($request->getContent(), true);
        
        if (!isset($data['content'])) {
            return $this->json(['message' => 'Missing content field'], Response::HTTP_BAD_REQUEST);
        }
        
        // Create a new Reponse
        $reponse = new Reponse();
        $reponse->setContent($data['content']);
        $reponse->setDate(new \DateTime());
        $reponse->setReclamation($reclamation);
        
        // Set admin username if provided
        if (isset($data['admin_username'])) {
            $reponse->setAdminUsername($data['admin_username']);
        }
        
        // Update reclamation status if provided
        if (isset($data['status']) && in_array($data['status'], ['pending', 'in_progress', 'resolved', 'rejected'])) {
            $reclamation->setStatus($data['status']);
        } else {
            // Default to in_progress if not specified
            $reclamation->setStatus('in_progress');
        }
        
        // Validate the entity
        $errors = $this->validator->validate($reponse);
        if (count($errors) > 0) {
            $errorMessages = [];
            foreach ($errors as $error) {
                $errorMessages[$error->getPropertyPath()] = $error->getMessage();
            }
            return $this->json(['errors' => $errorMessages], Response::HTTP_BAD_REQUEST);
        }
        
        // Save to database
        $entityManager->persist($reponse);
        $entityManager->flush();
        
        return $this->json([
            'message' => 'Response added successfully',
            'id' => $reponse->getId()
        ], Response::HTTP_CREATED);
    }

    /**
     * Get statistics about reclamations
     */
    #[Route('/stats', name: 'api_reclamations_stats', methods: ['GET'])]
    public function getStats(ReclamationRepository $reclamationRepository): JsonResponse
    {
        // Count reclamations by status
        $countByStatus = [
            'pending' => $reclamationRepository->countByStatus('pending'),
            'in_progress' => $reclamationRepository->countByStatus('in_progress'),
            'resolved' => $reclamationRepository->countByStatus('resolved'),
            'rejected' => $reclamationRepository->countByStatus('rejected'),
        ];
        
        // Total reclamations
        $total = array_sum($countByStatus);
        
        // Recently created reclamations (last 7 days)
        $date = new \DateTime();
        $date->modify('-7 days');
        $recentCount = $reclamationRepository->countCreatedSince($date);
        
        // Average response time (if this method exists in your repository)
        // $avgResponseTime = $reclamationRepository->calculateAverageResponseTime();
        
        return $this->json([
            'total' => $total,
            'by_status' => $countByStatus,
            'recent' => $recentCount,
            // 'avg_response_time' => $avgResponseTime,
        ]);
    }
} 