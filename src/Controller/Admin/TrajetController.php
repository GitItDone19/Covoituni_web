<?php

namespace App\Controller\Admin;

use App\Entity\Trajet;
use App\Repository\TrajetRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/admin/trajets')]
class TrajetController extends AbstractController
{
    #[Route('/', name: 'app_admin_trajets', methods: ['GET'])]
    public function index(TrajetRepository $trajetRepository): Response
    {
        return $this->render('admin/trajet/index.html.twig', [
            'trajets' => $trajetRepository->findAll(),
        ]);
    }

    #[Route('/{id}/edit', name: 'app_admin_trajet_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Trajet $trajet, EntityManagerInterface $entityManager): Response
    {
        if ($request->isMethod('POST')) {
            $departurePoint = $request->request->get('departure_point');
            $arrivalPoint = $request->request->get('arrival_point');
            $price = $request->request->get('price');
            $titre = null;
            
            if ($request->request->has('titre') && method_exists($trajet, 'setTitre')) {
                $titre = $request->request->get('titre');
                
                // Validation du titre (maximum 25 caractères, alphanumérique + "-->")
                if (strlen($titre) > 25 || !$this->validateTitre($titre)) {
                    $this->addFlash('error', 'Le titre du trajet doit contenir uniquement des caractères alphabétiques et peut inclure "-->". Maximum 25 caractères.');
                    return $this->render('admin/trajet/edit.html.twig', [
                        'trajet' => $trajet,
                    ]);
                }
            }
            
            // Validation du lieu de départ
            if (strlen($departurePoint) > 25 || !$this->validateLocation($departurePoint)) {
                $this->addFlash('error', 'Le lieu de départ doit contenir uniquement des caractères alphabétiques. Maximum 25 caractères.');
                return $this->render('admin/trajet/edit.html.twig', [
                    'trajet' => $trajet,
                ]);
            }
            
            // Validation de la destination
            if (strlen($arrivalPoint) > 25 || !$this->validateLocation($arrivalPoint)) {
                $this->addFlash('error', 'La destination doit contenir uniquement des caractères alphabétiques. Maximum 25 caractères.');
                return $this->render('admin/trajet/edit.html.twig', [
                    'trajet' => $trajet,
                ]);
            }
            
            // Validation du prix
            if (floatval($price) < 0) {
                $this->addFlash('error', 'Le prix ne peut pas être négatif.');
                return $this->render('admin/trajet/edit.html.twig', [
                    'trajet' => $trajet,
                ]);
            }
            
            $trajet->setDeparturePoint($departurePoint);
            $trajet->setArrivalPoint($arrivalPoint);
            $trajet->setPrice($price);
            
            if ($titre !== null) {
                $trajet->setTitre($titre);
            }
            
            $entityManager->flush();
            
            $this->addFlash('success', 'Le trajet a été mis à jour avec succès.');
            return $this->redirectToRoute('app_admin_trajets');
        }

        return $this->render('admin/trajet/edit.html.twig', [
            'trajet' => $trajet,
        ]);
    }
    
    // Méthode de validation pour le titre
    private function validateTitre(string $titre): bool
    {
        // Autoriser les caractères alphabétiques et "-->"
        return preg_match('/^[a-zA-ZÀ-ÿ\s]*(-{2}>)?[a-zA-ZÀ-ÿ\s]*$/', $titre);
    }
    
    // Méthode de validation pour les lieux
    private function validateLocation(string $location): bool
    {
        // Autoriser uniquement les caractères alphabétiques
        return preg_match('/^[a-zA-ZÀ-ÿ\s]*$/', $location);
    }

    #[Route('/{id}/delete', name: 'app_admin_trajet_delete', methods: ['POST'])]
    public function delete(Request $request, Trajet $trajet, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$trajet->getId(), $request->request->get('_token'))) {
            $entityManager->remove($trajet);
            $entityManager->flush();
            $this->addFlash('success', 'Le trajet a été supprimé avec succès.');
        }

        return $this->redirectToRoute('app_admin_trajets', [], Response::HTTP_SEE_OTHER);
    }

    #[Route('/{id}', name: 'app_admin_trajet_show', methods: ['GET'])]
    public function show(Trajet $trajet): Response
    {
        return $this->render('admin/trajet/show.html.twig', [
            'trajet' => $trajet,
        ]);
    }
} 