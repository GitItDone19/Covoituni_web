<?php

namespace App\Form;

use App\Entity\Avis;
use App\Entity\Utilisateur;
<<<<<<< Updated upstream
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
=======
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\Range;
>>>>>>> Stashed changes

class AvisType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
<<<<<<< Updated upstream
            ->add('rating', ChoiceType::class, [
                'label' => 'Rating',
                'required' => true,
                'placeholder' => 'Select a rating',
                'choices' => [
                    '1 Star' => 1,
                    '2 Stars' => 2,
                    '3 Stars' => 3,
                    '4 Stars' => 4,
                    '5 Stars' => 5,
                ],
                'attr' => [
                    'class' => 'hidden-rating-input'
                ],
            ])
            ->add('commentaire', TextareaType::class, [
                'label' => 'Comment',
                'required' => false,
                'attr' => [
                    'rows' => 5,
                    'placeholder' => 'Write your review about the driver...'
                ]
            ])
            ->add('conducteur', EntityType::class, [
                'class' => Utilisateur::class,
                'choice_label' => function (Utilisateur $utilisateur) {
                    return $utilisateur->getId() . ' - ' . ($utilisateur->getNom() ?? 'Unknown');
                },
                'required' => true,
                'label' => 'Driver',
                'placeholder' => 'Select a driver to review',
=======
            ->add('conducteur', EntityType::class, [
                'class' => Utilisateur::class,
                'choice_label' => function ($conducteur) {
                    return $conducteur->getPrenom() . ' ' . $conducteur->getNom();
                },
                'placeholder' => 'Sélectionnez un conducteur',
                'label' => 'Conducteur',
                'constraints' => [
                    new NotBlank(['message' => 'Veuillez sélectionner un conducteur']),
                ],
                'attr' => [
                    'class' => 'form-control'
                ]
            ])
            ->add('rating', ChoiceType::class, [
                'choices' => [
                    '1 étoile' => 1,
                    '2 étoiles' => 2,
                    '3 étoiles' => 3,
                    '4 étoiles' => 4,
                    '5 étoiles' => 5,
                ],
                'placeholder' => 'Attribuez une note',
                'label' => 'Note',
                'constraints' => [
                    new NotBlank(['message' => 'Veuillez attribuer une note']),
                    new Range([
                        'min' => 1,
                        'max' => 5,
                        'minMessage' => 'La note minimum est {{ limit }}',
                        'maxMessage' => 'La note maximum est {{ limit }}',
                    ]),
                ],
                'attr' => [
                    'class' => 'form-control'
                ]
            ])
            ->add('commentaire', TextareaType::class, [
                'label' => 'Commentaire',
                'required' => true,
                'attr' => [
                    'placeholder' => 'Partagez votre expérience avec ce conducteur...',
                    'class' => 'form-control',
                    'rows' => 5,
                    'minlength' => 10,
                    'maxlength' => 255,
                ],
                'constraints' => [
                    new NotBlank(['message' => 'Le commentaire est obligatoire']),
                    new Length([
                        'min' => 10,
                        'max' => 255,
                        'minMessage' => 'Le commentaire doit contenir au moins {{ limit }} caractères',
                        'maxMessage' => 'Le commentaire ne peut pas dépasser {{ limit }} caractères',
                    ]),
                ],
>>>>>>> Stashed changes
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Avis::class,
        ]);
    }
} 