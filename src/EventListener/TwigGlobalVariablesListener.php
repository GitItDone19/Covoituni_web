<?php

namespace App\EventListener;

use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\HttpKernel\Event\ControllerEvent;
use Symfony\Component\HttpKernel\KernelEvents;
use Symfony\Bundle\SecurityBundle\Security;
use Twig\Environment;

class TwigGlobalVariablesListener implements EventSubscriberInterface
{
    private $twig;
    private $security;

    public function __construct(Environment $twig, Security $security)
    {
        $this->twig = $twig;
        $this->security = $security;
    }

    public function onKernelController(ControllerEvent $event)
    {
        // Ajouter l'utilisateur actuel comme variable globale dans Twig
        $this->twig->addGlobal('user', $this->security->getUser());
    }

    public static function getSubscribedEvents()
    {
        return [
            KernelEvents::CONTROLLER => 'onKernelController',
        ];
    }
} 