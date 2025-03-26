<?php

namespace App\Form;

use App\Entity\Reclamation;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Bundle\SecurityBundle\Security;

class ReclamationResponseType extends AbstractType
{
    private $security;

    public function __construct(Security $security)
    {
        $this->security = $security;
    }

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        // Vérifier si l'utilisateur est un admin
        $isAdmin = $this->security->isGranted('ROLE_ADMIN');
        
        // Si c'est un admin, il peut modifier la réponse et le statut
        if ($isAdmin) {
            // Add the status field that's referenced in the template
            $builder
                ->add('status', \Symfony\Component\Form\Extension\Core\Type\ChoiceType::class, [
                    'required' => true,
                    'choices' => [
                        'En attente' => 'pending',
                        'En cours de traitement' => 'processing',
                        'Résolu' => 'resolved',
                        'Rejeté' => 'rejected'
                    ],
                    'label' => 'Statut',
                    'attr' => [
                        'class' => 'form-select'
                    ]
                ])
                ->add('reply', TextareaType::class, [
                    'required' => false,
                    'label' => false,
                    'attr' => [
                        'rows' => 6,
                        'placeholder' => 'Votre réponse...',
                        'maxlength' => 1000,
                    ],
                    'help' => 'Maximum 1000 caractères'
                ]);
        } else {
            // Pour les passagers, afficher uniquement la réponse en lecture seule
            $builder
                ->add('reply', TextareaType::class, [
                    'required' => false,
                    'label' => false,
                    'attr' => [
                        'rows' => 6,
                        'readonly' => true,
                        'class' => 'bg-gray-100'
                    ],
                    'help' => 'Réponse de l\'administration'
                ]);
        }
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Reclamation::class,
            'admin_response_only' => false,
        ]);
        
        $resolver->setAllowedTypes('admin_response_only', 'bool');
    }
} 