<?php

namespace App\Controller;

use App\Entity\Utilisateur;
use App\Entity\Role;
use App\Repository\UtilisateurRepository;
use App\Repository\RoleRepository;
use Doctrine\ORM\EntityManagerInterface;
use GuzzleHttp\Client;
use KnpU\OAuth2ClientBundle\Client\ClientRegistry;
use KnpU\OAuth2ClientBundle\Client\Provider\GoogleClient;
use League\OAuth2\Client\Provider\Google;
use League\OAuth2\Client\Provider\GoogleUser;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Authentication\UserAuthenticatorInterface;
use Symfony\Component\Security\Http\Authenticator\FormLoginAuthenticator;

#[Route('/oauth')]
class OAuthController extends AbstractController
{
    private $clientRegistry;
    private $em;
    private $userRepository;
    private $roleRepository;
    private $passwordHasher;
    
    public function __construct(
        ClientRegistry $clientRegistry,
        EntityManagerInterface $em,
        UtilisateurRepository $userRepository,
        RoleRepository $roleRepository,
        UserPasswordHasherInterface $passwordHasher
    ) {
        $this->clientRegistry = $clientRegistry;
        $this->em = $em;
        $this->userRepository = $userRepository;
        $this->roleRepository = $roleRepository;
        $this->passwordHasher = $passwordHasher;
    }
    
    #[Route('/connect/google', name: 'connect_google')]
    public function connectGoogle(): Response
    {
        // For development only - disable SSL verification
        $this->configureGoogleClientForDev();
        
        // Redirect to Google for authentication
        return $this->clientRegistry
            ->getClient('google')
            ->redirect([
                'email', 'profile'
            ]);
    }
    
    #[Route('/check/google', name: 'connect_google_check')]
    public function connectGoogleCheck(Request $request, UserAuthenticatorInterface $userAuthenticator, FormLoginAuthenticator $formLoginAuthenticator): Response
    {
        // For development only - disable SSL verification
        $this->configureGoogleClientForDev();
        
        /** @var GoogleClient $client */
        $client = $this->clientRegistry->getClient('google');
        
        try {
            /** @var GoogleUser $googleUser */
            $googleUser = $client->fetchUserFromToken($client->getAccessToken());
            
            // Check if the user already exists by email
            $user = $this->userRepository->findOneBy(['email' => $googleUser->getEmail()]);
            
            if (!$user) {
                // Get the PASSAGER role from the repository
                $role = $this->roleRepository->find('PASSAGER');
                
                if (!$role) {
                    // If the role doesn't exist, create it (this should normally be in your fixtures)
                    $role = new Role();
                    $role->setCode('PASSAGER');
                    $role->setLibelle('Passenger Role');
                    $this->em->persist($role);
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
                $user->setRole($role);
                
                $this->em->persist($user);
                $this->em->flush();
                
                // Set a session flag to indicate this is a new user needing setup
                $request->getSession()->set('needs_setup', true);
                
                $this->addFlash('success', 'Your account has been created with Google. Please complete your profile setup.');
            }
            
            // Authenticate the user
            $userAuthenticator->authenticateUser($user, $formLoginAuthenticator, $request);
            
            // If this is a new user, redirect to setup wizard
            if ($request->getSession()->get('needs_setup', false)) {
                return $this->redirectToRoute('app_setup_profile');
            }
            
            // Otherwise redirect to login redirect handler
            return $this->redirectToRoute('app_login_redirect');
            
        } catch (\Exception $e) {
            $this->addFlash('error', 'Authentication with Google failed: ' . $e->getMessage());
            return $this->redirectToRoute('app_login');
        }
    }
    
    /**
     * Configure the Google client to disable SSL verification for development
     * This is only for local development and should be removed in production
     */
    private function configureGoogleClientForDev(): void
    {
        // Get the Google client
        $googleClient = $this->clientRegistry->getClient('google');
        
        // Get the underlying provider (League\OAuth2\Client\Provider\Google)
        $provider = $googleClient->getOAuth2Provider();
        
        // Create a new Guzzle client with SSL verification disabled
        $httpClient = new Client(['verify' => false]);
        
        // Set the HTTP client on the provider
        if ($provider instanceof Google) {
            $provider->setHttpClient($httpClient);
        }
    }
} 