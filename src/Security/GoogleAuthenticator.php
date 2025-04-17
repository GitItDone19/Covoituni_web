<?php

namespace App\Security;

use App\Entity\Utilisateur;
use App\Entity\Role;
use App\Repository\UtilisateurRepository;
use App\Repository\RoleRepository;
use Doctrine\ORM\EntityManagerInterface;
use KnpU\OAuth2ClientBundle\Client\ClientRegistry;
use KnpU\OAuth2ClientBundle\Client\Provider\GoogleClient;
use KnpU\OAuth2ClientBundle\Security\Authenticator\OAuth2Authenticator;
use League\OAuth2\Client\Provider\GoogleUser;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Routing\RouterInterface;
use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;
use Symfony\Component\Security\Core\Exception\AuthenticationException;
use Symfony\Component\Security\Http\Authenticator\Passport\Badge\UserBadge;
use Symfony\Component\Security\Http\Authenticator\Passport\Passport;
use Symfony\Component\Security\Http\Authenticator\Passport\SelfValidatingPassport;
use Symfony\Component\Security\Http\EntryPoint\AuthenticationEntryPointInterface;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;
use Symfony\Component\HttpKernel\Exception\RedirectException;

class GoogleAuthenticator extends OAuth2Authenticator implements AuthenticationEntryPointInterface
{
    private $clientRegistry;
    private $entityManager;
    private $router;
    private $userRepository;
    private $roleRepository;
    private $passwordHasher;
    private $azureClient;
    private $googleOauth;

    public function __construct(
        ClientRegistry $clientRegistry,
        EntityManagerInterface $entityManager,
        RouterInterface $router,
        UtilisateurRepository $userRepository,
        RoleRepository $roleRepository,
        UserPasswordHasherInterface $passwordHasher,
        GoogleClient $azureClient,
        GoogleClient $googleOauth
    ) {
        $this->clientRegistry = $clientRegistry;
        $this->entityManager = $entityManager;
        $this->router = $router;
        $this->userRepository = $userRepository;
        $this->roleRepository = $roleRepository;
        $this->passwordHasher = $passwordHasher;
        $this->azureClient = $azureClient;
        $this->googleOauth = $googleOauth;
    }

    public function supports(Request $request): ?bool
    {
        // Only use this authenticator when the check route is requested
        return $request->attributes->get('_route') === 'connect_google_check';
    }

    public function authenticate(Request $request): Passport
    {
        $client = $this->clientRegistry->getClient('google');
        
        // Configure SSL verification for development
        $this->configureGoogleClientForDev($client);
        
        $accessToken = $this->fetchAccessToken($client);

        return new SelfValidatingPassport(
            new UserBadge($accessToken->getToken(), function() use ($accessToken, $client, $request) {
                /** @var GoogleUser $googleUser */
                $googleUser = $client->fetchUserFromToken($accessToken);
                $email = $googleUser->getEmail();
                
                // Check if the user already exists
                $existingUser = $this->userRepository->findOneBy(['email' => $email]);

                // If the user exists, return it
                if ($existingUser) {
                    return $existingUser;
                }

                // Get a default role
                $defaultRole = $this->roleRepository->find('PASSAGER');
                
                if (!$defaultRole) {
                    // If the role doesn't exist, create it
                    $defaultRole = new Role();
                    $defaultRole->setCode('PASSAGER');
                    $defaultRole->setLibelle('Passenger Role');
                    $this->entityManager->persist($defaultRole);
                }

                // Create a new user with minimal information
                $user = new Utilisateur();
                $user->setEmail($googleUser->getEmail());
                $user->setUsername($googleUser->getName() ?: explode('@', $googleUser->getEmail())[0]);
                $user->setPrenom($googleUser->getFirstName() ?: '');
                $user->setNom($googleUser->getLastName() ?: '');
                $user->setTel(''); // Empty phone number to indicate setup needed
                
                // Generate a random password
                $randomPassword = bin2hex(random_bytes(12));
                $user->setMdp($this->passwordHasher->hashPassword($user, $randomPassword));
                
                // Set a default role - they can change it during setup
                $user->setRole($defaultRole);
                
                $this->entityManager->persist($user);
                $this->entityManager->flush();
                
                // Set a session flag to indicate this is a new user needing setup
                $request->getSession()->set('needs_setup', true);
                
                return $user;
            })
        );
    }

    public function onAuthenticationSuccess(Request $request, TokenInterface $token, string $firewallName): ?Response
    {
        // If this is a new user that needs setup, redirect to the setup wizard
        if ($request->getSession()->get('needs_setup', false)) {
            return new RedirectResponse($this->router->generate('app_setup_profile'));
        }
        
        // Otherwise redirect to the regular login redirect handler
        return new RedirectResponse($this->router->generate('app_login_redirect'));
    }

    public function onAuthenticationFailure(Request $request, AuthenticationException $exception): ?Response
    {
        $message = strtr($exception->getMessageKey(), $exception->getMessageData());

        return new Response($message, Response::HTTP_FORBIDDEN);
    }

    public function start(Request $request, AuthenticationException $authException = null): Response
    {
        return new RedirectResponse(
            $this->router->generate('app_login'),
            Response::HTTP_TEMPORARY_REDIRECT
        );
    }

    /**
     * Configure the Google client to disable SSL verification for development
     * This is only for local development and should be removed in production
     */
    private function configureGoogleClientForDev($googleClient): void
    {
        // Get the underlying provider (League\OAuth2\Client\Provider\Google)
        $provider = $googleClient->getOAuth2Provider();
        
        // Create a new Guzzle client with SSL verification disabled
        $httpClient = new \GuzzleHttp\Client(['verify' => false]);
        
        // Set the HTTP client on the provider
        if ($provider instanceof \League\OAuth2\Client\Provider\Google) {
            $provider->setHttpClient($httpClient);
        }
    }
} 