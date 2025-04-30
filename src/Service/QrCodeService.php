<?php

namespace App\Service;

use App\Entity\EventParticipation;
use Endroid\QrCode\Encoding\Encoding;
use Endroid\QrCode\ErrorCorrectionLevel\ErrorCorrectionLevelHigh;
use Endroid\QrCode\Label\Alignment\LabelAlignmentCenter;
use Endroid\QrCode\Label\Font\NotoSans;
use Endroid\QrCode\RoundBlockSizeMode\RoundBlockSizeModeMargin;
use Endroid\QrCode\Writer\PngWriter;
use Endroid\QrCode\QrCode; // Utilisation correcte de la classe QrCode
use Symfony\Component\DependencyInjection\ParameterBag\ParameterBagInterface;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;

class QrCodeService
{
    private $params;
    private $urlGenerator;

    public function __construct(
        ParameterBagInterface $params,
        UrlGeneratorInterface $urlGenerator
    ) {
        $this->params = $params;
        $this->urlGenerator = $urlGenerator;
    }

    /**
     * Génère un QR code pour une participation à un événement
     * 
     * @param EventParticipation $participation La participation pour laquelle générer le QR code
     * @param bool $returnDataUri Si true, retourne une data URI, sinon retourne le contenu de l'image
     * @return string Le QR code en data URI ou en contenu binaire
     */
    public function generateParticipationQrCode(EventParticipation $participation, bool $returnDataUri = true): string
    {
        // Créer un identifiant unique pour cette participation
        $participationId = $participation->getIdParticipation();
        $userId = $participation->getUtilisateur()->getId();
        $eventId = $participation->getEvent()->getIdEvent();
        
        // URL de vérification du QR code
        $verificationUrl = $this->urlGenerator->generate(
            'app_event_verify_participation',
            [
                'participationId' => $participationId,
                'token' => $this->generateParticipationToken($participation)
            ],
            UrlGeneratorInterface::ABSOLUTE_URL
        );

        // Créer le QR code avec les informations d'identification
        $qrCode = new QrCode($verificationUrl);
        $qrCode->setEncoding(new Encoding('UTF-8'))
            ->setErrorCorrectionLevel(new ErrorCorrectionLevelHigh())
            ->setSize(300)
            ->setMargin(10)
            ->setRoundBlockSizeMode(new RoundBlockSizeModeMargin())
            ->setLabel('CovoitUni Event Participation', 12)
            ->setLabelAlignment(new LabelAlignmentCenter())
            ->setLabelFont(new NotoSans(12));

        if ($returnDataUri) {
            return $qrCode->writeDataUri(); // Retourner le QR code en data URI
        }

        // Retourner le contenu binaire de l'image
        return $qrCode->writeString();
    }

    /**
     * Génère un token de vérification pour une participation
     * 
     * @param EventParticipation $participation
     * @return string Le token de vérification
     */
    private function generateParticipationToken(EventParticipation $participation): string
    {
        $data = [
            'participationId' => $participation->getIdParticipation(),
            'userId' => $participation->getUtilisateur()->getId(),
            'eventId' => $participation->getEvent()->getIdEvent(),
            'date' => $participation->getDateInscription()->format('Y-m-d H:i:s')
        ];

        return hash_hmac('sha256', json_encode($data), $this->getSecretKey());
    }

    /**
     * Vérifie si un token de participation est valide
     * 
     * @param EventParticipation $participation La participation à vérifier
     * @param string $token Le token à vérifier
     * @return bool Vrai si le token est valide, faux sinon
     */
    public function verifyParticipationToken(EventParticipation $participation, string $token): bool
    {
        $expectedToken = $this->generateParticipationToken($participation);
        return hash_equals($expectedToken, $token);
    }

    /**
     * Récupère la clé secrète pour signer les tokens
     * 
     * @return string La clé secrète
     */
    private function getSecretKey(): string
    {
        // Utilisez un paramètre configuré ou une valeur par défaut
        return $this->params->has('app.qrcode_secret') 
            ? $this->params->get('app.qrcode_secret') 
            : 'CovoitUni_QRCode_Secret_Key';
    }
}
