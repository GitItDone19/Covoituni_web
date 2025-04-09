<?php

namespace App\Service;

use Symfony\Component\Notifier\Message\SmsMessage;
use Symfony\Component\Notifier\TexterInterface;

class SmsService
{
    private TexterInterface $texter;

    public function __construct(TexterInterface $texter)
    {
        $this->texter = $texter;
    }

    public function sendConfirmationSms(string $phoneNumber, string $eventName, \DateTime $eventDate): void
    {
        $formattedDate = $eventDate->format('04/04/2025 04:00');
        
        $message = new SmsMessage(
            $phoneNumber,
            sprintf(
                "Confirmation CovoitUni : Vous êtes inscrit à l'événement '%s' le %s. Merci de votre participation !",
                $eventName,
                $formattedDate
            )
        );

        $this->texter->send($message);
    }

    public function sendEventReminderSms(string $phoneNumber, string $eventName, \DateTime $eventDate): void
    {
        $formattedDate = $eventDate->format('04/04/2025 04:00');
        
        $message = new SmsMessage(
            $phoneNumber,
            sprintf(
                "Rappel CovoitUni : Votre événement '%s' aura lieu demain à %s. À bientôt !",
                $eventName,
                $formattedDate
            )
        );

        $this->texter->send($message);
    }
}