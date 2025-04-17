<?php

namespace App\Form;

use App\Entity\Avis;
use App\Entity\Utilisateur;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class AvisType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
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