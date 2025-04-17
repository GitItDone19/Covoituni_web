<?php

namespace App\Service;

use App\Entity\Reclamation;
use App\Entity\Reponse;
use App\Entity\Utilisateur;
use Psr\Log\LoggerInterface;
use Symfony\Component\Mailer\Exception\TransportExceptionInterface;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;

class EmailNotificationService
{
    private $mailer;
    private $urlGenerator;
    private $fromEmail;
    private $fromName;
    private $logger;

    public function __construct(
        MailerInterface $mailer,
        UrlGeneratorInterface $urlGenerator,
        LoggerInterface $logger = null,
        string $fromEmail = 'noreply@covoituni.com',
        string $fromName = 'CovoitUni'
    ) {
        $this->mailer = $mailer;
        $this->urlGenerator = $urlGenerator;
        $this->logger = $logger;
        $this->fromEmail = $fromEmail;
        $this->fromName = $fromName;
    }

    /**
     * Send email notification to admin about new reclamation
     */
    public function notifyAdminNewReclamation(Reclamation $reclamation, Utilisateur $admin): void
    {
        try {
            $reclamationUrl = $this->urlGenerator->generate(
                'app_admin_reclamation_show',
                ['id' => $reclamation->getId()],
                UrlGeneratorInterface::ABSOLUTE_URL
            );

            $email = (new Email())
                ->from($this->fromEmail)
                ->to($admin->getEmail())
                ->subject('Nouvelle réclamation - CovoitUni')
                ->html($this->getAdminNewReclamationTemplate($reclamation, $reclamationUrl));

            $this->mailer->send($email);
            
            if ($this->logger) {
                $this->logger->info('Email notification sent to admin', [
                    'admin_email' => $admin->getEmail(),
                    'reclamation_id' => $reclamation->getId(),
                    'type' => 'new_reclamation'
                ]);
            }
        } catch (TransportExceptionInterface $e) {
            if ($this->logger) {
                $this->logger->error('Failed to send email notification to admin', [
                    'admin_email' => $admin->getEmail(),
                    'reclamation_id' => $reclamation->getId(),
                    'error' => $e->getMessage()
                ]);
            }
            // Don't throw the exception - we don't want to break the application flow
            // just because email sending failed
        }
    }

    /**
     * Send email notification to user about reclamation response
     */
    public function notifyUserReclamationResponse(Reponse $reponse): void
    {
        try {
            $reclamation = $reponse->getReclamation();
            $user = $reclamation->getUser();
            
            $reclamationUrl = $this->urlGenerator->generate(
                'app_passager_reclamation_show',
                ['id' => $reclamation->getId()],
                UrlGeneratorInterface::ABSOLUTE_URL
            );

            $email = (new Email())
                ->from($this->fromEmail)
                ->to($user->getEmail())
                ->subject('Réponse à votre réclamation - CovoitUni')
                ->html($this->getUserReclamationResponseTemplate($reclamation, $reponse, $reclamationUrl));

            $this->mailer->send($email);
            
            if ($this->logger) {
                $this->logger->info('Email notification sent to user', [
                    'user_email' => $user->getEmail(),
                    'reclamation_id' => $reclamation->getId(),
                    'type' => 'reclamation_response'
                ]);
            }
        } catch (TransportExceptionInterface $e) {
            if ($this->logger) {
                $this->logger->error('Failed to send email notification to user', [
                    'user_email' => $user->getEmail(),
                    'reclamation_id' => $reclamation->getId(),
                    'error' => $e->getMessage()
                ]);
            }
            // Don't throw the exception - we don't want to break the application flow
            // just because email sending failed
        }
    }

    /**
     * Get HTML template for admin new reclamation email
     */
    private function getAdminNewReclamationTemplate(Reclamation $reclamation, string $reclamationUrl): string
    {
        $user = $reclamation->getUser();
        
        return <<<HTML
            <div style="font-family: Arial, sans-serif; max-width: 600px; margin: 0 auto;">
                <h2 style="color: #333;">Nouvelle réclamation</h2>
                <p>Bonjour,</p>
                <p>Une nouvelle réclamation a été soumise par {$user->getPrenom()} {$user->getNom()}.</p>
                <div style="background-color: #f5f5f5; padding: 15px; border-radius: 5px; margin: 20px 0;">
                    <p><strong>Sujet:</strong> {$reclamation->getSubject()}</p>
                    <p><strong>Description:</strong> {$reclamation->getDescription()}</p>
                </div>
                <p>
                    <a href="{$reclamationUrl}" 
                       style="background-color: #4F46E5; color: white; padding: 10px 20px; text-decoration: none; border-radius: 5px; display: inline-block;">
                        Voir la réclamation
                    </a>
                </p>
                <p style="color: #666; font-size: 0.9em; margin-top: 20px;">
                    Cet email a été envoyé automatiquement. Merci de ne pas y répondre.
                </p>
            </div>
        HTML;
    }

    /**
     * Get HTML template for user reclamation response email
     */
    private function getUserReclamationResponseTemplate(Reclamation $reclamation, Reponse $reponse, string $reclamationUrl): string
    {
        return <<<HTML
            <div style="font-family: Arial, sans-serif; max-width: 600px; margin: 0 auto;">
                <h2 style="color: #333;">Réponse à votre réclamation</h2>
                <p>Bonjour,</p>
                <p>Une réponse a été apportée à votre réclamation concernant "{$reclamation->getSubject()}".</p>
                <div style="background-color: #f5f5f5; padding: 15px; border-radius: 5px; margin: 20px 0;">
                    <p><strong>Réponse:</strong> {$reponse->getContent()}</p>
                </div>
                <p>
                    <a href="{$reclamationUrl}" 
                       style="background-color: #4F46E5; color: white; padding: 10px 20px; text-decoration: none; border-radius: 5px; display: inline-block;">
                        Voir la réclamation
                    </a>
                </p>
                <p style="color: #666; font-size: 0.9em; margin-top: 20px;">
                    Cet email a été envoyé automatiquement. Merci de ne pas y répondre.
                </p>
            </div>
        HTML;
    }
} 