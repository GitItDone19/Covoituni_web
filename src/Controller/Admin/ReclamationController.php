<?php

namespace App\Controller\Admin;

use App\Entity\Reclamation;
use App\Entity\Reponse;
use App\Form\ReclamationResponseType;
use App\Form\ReponseType;
use App\Repository\ReclamationRepository;
use App\Repository\ReponseRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Knp\Bundle\SnappyBundle\Snappy\Response\PdfResponse;
use Knp\Snappy\Pdf;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use Symfony\Component\HttpFoundation\StreamedResponse;

// Ne pas mettre de name ici pour éviter les conflits
#[Route('/admin/reclamation')]
class ReclamationController extends AbstractController
{
    private $pdf;
    
    public function __construct(Pdf $pdf)
    {
        $this->pdf = $pdf;
    }
    
    #[Route('/', name: 'app_admin_reclamation_index', methods: ['GET'])]
    public function index(Request $request, ReclamationRepository $reclamationRepository): Response
    {
        // Make sure only users with ROLE_ADMIN can access this page
        $this->denyAccessUnlessGranted('ROLE_ADMIN');
        
        $filter = $request->query->get('filter');
        
        // Filter reclamations based on the filter parameter
        if ($filter && in_array($filter, ['pending', 'in_progress', 'resolved', 'rejected'])) {
            $reclamations = $reclamationRepository->findBy(['status' => $filter], ['date' => 'DESC']);
        } else {
            // Get all reclamations, ordered by date (newest first)
            $reclamations = $reclamationRepository->findBy([], ['date' => 'DESC']);
        }
        
        return $this->render('admin/reclamation/index.html.twig', [
            'reclamations' => $reclamations,
            'user' => $this->getUser(),
        ]);
    }
    
    #[Route('/{id}', name: 'app_admin_reclamation_show', methods: ['GET'])]
    public function show(Reclamation $reclamation): Response
    {
        // Make sure only users with ROLE_ADMIN can access this page
        $this->denyAccessUnlessGranted('ROLE_ADMIN');
        
        return $this->render('admin/reclamation/show.html.twig', [
            'reclamation' => $reclamation,
            'user' => $this->getUser(),
        ]);
    }
    
    #[Route('/{id}/reply', name: 'app_admin_reclamation_reply', methods: ['GET', 'POST'])]
    public function reply(Request $request, Reclamation $reclamation, EntityManagerInterface $entityManager): Response
    {
        // Make sure only users with ROLE_ADMIN can access this page
        $this->denyAccessUnlessGranted('ROLE_ADMIN');
        
        // Create a new Reponse object
        $reponse = new Reponse();
        $reponse->setReclamation($reclamation);
        $reponse->setAdminUsername($this->getUser()->getUserIdentifier());
        
        $form = $this->createForm(ReponseType::class, $reponse);
        $form->handleRequest($request);
        
        if ($form->isSubmitted() && $form->isValid()) {
            // Update the reclamation status if needed
            $newStatus = $request->request->get('status');
            if ($newStatus && in_array($newStatus, ['pending', 'in_progress', 'resolved', 'rejected'])) {
                $reclamation->setStatus($newStatus);
            }
            
            // Save the response
            $entityManager->persist($reponse);
            $entityManager->flush();
            
            $this->addFlash('success', 'Votre réponse a été enregistrée avec succès');
            return $this->redirectToRoute('app_admin_reclamation_show', ['id' => $reclamation->getId()]);
        } elseif ($form->isSubmitted() && !$form->isValid()) {
            $this->addFlash('error', 'Veuillez corriger les erreurs dans le formulaire');
        }
        
        return $this->render('admin/reclamation/reply.html.twig', [
            'reclamation' => $reclamation,
            'form' => $form->createView(),
            'user' => $this->getUser(),
        ]);
    }
    
    #[Route('/{id}/delete', name: 'app_admin_reclamation_delete', methods: ['POST'])]
    public function delete(Request $request, Reclamation $reclamation, EntityManagerInterface $entityManager): Response
    {
        // Make sure only users with ROLE_ADMIN can access this page
        $this->denyAccessUnlessGranted('ROLE_ADMIN');
        
        if ($this->isCsrfTokenValid('delete'.$reclamation->getId(), $request->request->get('_token'))) {
            $entityManager->remove($reclamation);
            $entityManager->flush();
            
            $this->addFlash('success', 'La réclamation a été supprimée avec succès');
        }
        
        return $this->redirectToRoute('app_admin_reclamation_index');
    }
    
    #[Route('/{id}/change-status', name: 'app_admin_reclamation_change_status', methods: ['POST'])]
    public function changeStatus(Request $request, Reclamation $reclamation, EntityManagerInterface $entityManager): Response
    {
        // Make sure only users with ROLE_ADMIN can access this page
        $this->denyAccessUnlessGranted('ROLE_ADMIN');
        
        $newStatus = $request->request->get('status');
        if (!in_array($newStatus, ['pending', 'in_progress', 'resolved', 'rejected'])) {
            $this->addFlash('error', 'Statut invalide');
            return $this->redirectToRoute('app_admin_reclamation_show', ['id' => $reclamation->getId()]);
        }
        
        $reclamation->setStatus($newStatus);
        $entityManager->flush();
        
        $this->addFlash('success', 'Le statut de la réclamation a été modifié avec succès');
        return $this->redirectToRoute('app_admin_reclamation_show', ['id' => $reclamation->getId()]);
    }

    /**
     * Action pour répondre à une réclamation
     */
    #[Route('/{id}/respond', name: 'app_admin_reclamation_respond', methods: ['GET', 'POST'])]
    public function respond(Request $request, Reclamation $reclamation, EntityManagerInterface $entityManager): Response
    {
        // Make sure only users with ROLE_ADMIN can access this page
        $this->denyAccessUnlessGranted('ROLE_ADMIN');
        
        $form = $this->createForm(ReclamationResponseType::class, $reclamation);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // Update reclamation status
            $entityManager->persist($reclamation);
            
            // Create a new response if content is provided
            $content = $form->get('content')->getData();
            if (!empty($content)) {
                // Create and configure the response
                $reponse = new Reponse();
                $reponse->setContent($content);
                $reponse->setReclamation($reclamation);
                $reponse->setAdminUsername($this->getUser()->getUserIdentifier());
                
                // Save the response
                $entityManager->persist($reponse);
            }
            
            $entityManager->flush();

            $this->addFlash('success', 'La réponse a été enregistrée avec succès.');
            
            // Redirection vers la page de détail
            return $this->redirectToRoute('app_admin_reclamation_show', ['id' => $reclamation->getId()]);
        } elseif ($form->isSubmitted() && !$form->isValid()) {
            $this->addFlash('error', 'Veuillez corriger les erreurs dans le formulaire');
        }

        return $this->render('admin/reclamation/respond.html.twig', [
            'reclamation' => $reclamation,
            'form' => $form->createView(),
            'user' => $this->getUser(),
        ]);
    }

    /**
     * Action pour mettre à jour tous les statuts
     */
    #[Route('/update-all-status', name: 'app_admin_reclamation_update_all_status', methods: ['GET'])]
    public function updateAllStatus(ReclamationRepository $reclamationRepository, EntityManagerInterface $entityManager): Response
    {
        // Make sure only users with ROLE_ADMIN can access this page
        $this->denyAccessUnlessGranted('ROLE_ADMIN');
        
        // Récupérer toutes les réclamations
        $reclamations = $reclamationRepository->findAll();
        $updatedCount = 0;
        
        // Mise à jour des statuts selon une logique définie
        foreach ($reclamations as $reclamation) {
            // Vérifier si le statut est vide ou null
            if (empty($reclamation->getStatus())) {
                // Définir un statut par défaut si nécessaire
                $reclamation->setStatus('pending');
                $updatedCount++;
            }
            
            // Vérifier si le statut est dans un format ancien et le convertir
            // Exemple: convertir "en_attente" en "pending"
            if ($reclamation->getStatus() === 'en_attente') {
                $reclamation->setStatus('pending');
                $updatedCount++;
            } else if ($reclamation->getStatus() === 'en_cours') {
                $reclamation->setStatus('in_progress');
                $updatedCount++;
            } else if ($reclamation->getStatus() === 'resolu') {
                $reclamation->setStatus('resolved');
                $updatedCount++;
            } else if ($reclamation->getStatus() === 'rejete') {
                $reclamation->setStatus('rejected');
                $updatedCount++;
            }
            
            // Vous pouvez ajouter d'autres règles de conversion ici
        }
        
        // Enregistrer toutes les modifications
        $entityManager->flush();
        
        $this->addFlash('success', $updatedCount . ' réclamations ont été mises à jour avec succès.');
        return $this->redirectToRoute('app_admin_reclamation_index');
    }

    /**
     * Action pour corriger les problèmes de statut dans une seule réclamation
     */
    #[Route('/{id}/fix-status', name: 'app_admin_reclamation_fix_status', methods: ['GET'])]
    public function fixStatus(Reclamation $reclamation, EntityManagerInterface $entityManager): Response
    {
        // Make sure only users with ROLE_ADMIN can access this page
        $this->denyAccessUnlessGranted('ROLE_ADMIN');
        
        // Si le statut est vide, le définir à "pending"
        if (empty($reclamation->getStatus())) {
            $reclamation->setStatus('pending');
        }
        
        // S'assurer que le statut est dans un format valide
        $validStatuses = ['pending', 'in_progress', 'resolved', 'rejected'];
        if (!in_array($reclamation->getStatus(), $validStatuses)) {
            // Convertir l'ancien format si possible
            switch (strtolower($reclamation->getStatus())) {
                case 'en attente':
                case 'en_attente':
                    $reclamation->setStatus('pending');
                    break;
                case 'en cours':
                case 'en_cours':
                    $reclamation->setStatus('in_progress');
                    break;
                case 'résolu':
                case 'resolu':
                    $reclamation->setStatus('resolved');
                    break;
                case 'rejeté':
                case 'rejete':
                    $reclamation->setStatus('rejected');
                    break;
                default:
                    // Par défaut, mettre en attente
                    $reclamation->setStatus('pending');
            }
        }
        
        // Enregistrer les modifications
        $entityManager->flush();
        
        $this->addFlash('success', 'Le statut de la réclamation a été corrigé avec succès.');
        return $this->redirectToRoute('app_admin_reclamation_show', ['id' => $reclamation->getId()]);
    }

    #[Route('/{id}/pdf', name: 'app_admin_reclamation_pdf', methods: ['GET'])]
    public function generatePdf(Reclamation $reclamation): Response
    {
        // Make sure only users with ROLE_ADMIN can access this page
        $this->denyAccessUnlessGranted('ROLE_ADMIN');
        
        // Générer le contenu HTML
        $html = $this->renderView('passager/reclamation/pdf.html.twig', [
            'reclamation' => $reclamation
        ]);
        
        // Définir le nom du fichier
        $filename = 'reclamation-'.$reclamation->getId().'.pdf';
        
        // Retourner la réponse PDF
        return new PdfResponse(
            $this->pdf->getOutputFromHtml($html),
            $filename
        );
    }

    /**
     * Export all reclamations to Excel
     */
    #[Route('/export/excel', name: 'app_admin_reclamation_export_excel', methods: ['GET'])]
    public function exportExcel(ReclamationRepository $reclamationRepository): Response
    {
        // Make sure only users with ROLE_ADMIN can access this page
        $this->denyAccessUnlessGranted('ROLE_ADMIN');
        
        // Create new Spreadsheet object
        $spreadsheet = new Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();
        
        // Set headers
        $sheet->setCellValue('A1', 'ID');
        $sheet->setCellValue('B1', 'Date');
        $sheet->setCellValue('C1', 'Sujet');
        $sheet->setCellValue('D1', 'Description');
        $sheet->setCellValue('E1', 'Statut');
        $sheet->setCellValue('F1', 'Utilisateur');
        $sheet->setCellValue('G1', 'Réponses');
        
        // Style the header
        $sheet->getStyle('A1:G1')->getFont()->setBold(true);
        
        // Get all reclamations
        $reclamations = $reclamationRepository->findBy([], ['date' => 'DESC']);
        
        // Add data
        $row = 2;
        foreach ($reclamations as $reclamation) {
            $sheet->setCellValue('A' . $row, $reclamation->getId());
            $sheet->setCellValue('B' . $row, $reclamation->getDate()->format('d/m/Y H:i'));
            $sheet->setCellValue('C' . $row, $reclamation->getSubject());
            $sheet->setCellValue('D' . $row, $reclamation->getDescription());
            $sheet->setCellValue('E' . $row, $reclamation->getStatus());
            $sheet->setCellValue('F' . $row, $reclamation->getUser()->getEmail());
            
            // Get responses
            $responses = [];
            foreach ($reclamation->getReponses() as $reponse) {
                $responses[] = sprintf(
                    "[%s] %s: %s",
                    $reponse->getDate()->format('d/m/Y H:i'),
                    $reponse->getAdminUsername(),
                    $reponse->getContent()
                );
            }
            $sheet->setCellValue('G' . $row, implode("\n", $responses));
            
            $row++;
        }
        
        // Auto-size columns
        foreach (range('A', 'G') as $col) {
            $sheet->getColumnDimension($col)->setAutoSize(true);
        }
        
        // Create the Excel file
        $writer = new Xlsx($spreadsheet);
        
        // Create the response
        $response = new StreamedResponse(
            function () use ($writer) {
                $writer->save('php://output');
            }
        );
        
        // Set headers
        $response->headers->set('Content-Type', 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        $response->headers->set('Content-Disposition', 'attachment;filename="reclamations.xlsx"');
        $response->headers->set('Cache-Control', 'max-age=0');
        
        return $response;
    }
} 