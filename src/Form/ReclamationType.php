<?php

namespace App\Form;

use App\Entity\Reclamation;
use App\Entity\Utilisateur;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\NotBlank;

class ReclamationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('subject', TextType::class, [
                'label' => 'Subject',
                'required' => true,
                'attr' => [
                    'class' => 'form-control reclamation-form-control',
                    'placeholder' => 'Enter a subject (5-255 characters)',
                    'minlength' => 5,
                    'maxlength' => 255
                ],
                'help' => 'Minimum 5 characters required'
            ])
            ->add('description', TextareaType::class, [
                'label' => 'Description',
                'required' => true,
                'attr' => [
                    'class' => 'form-control reclamation-form-control reclamation-textarea',
                    'placeholder' => 'Describe your reclamation in detail (minimum 10 characters)',
                    'rows' => 5,
                    'minlength' => 10
                ],
                'help' => 'Please provide enough details (minimum 10 characters)'
            ])
        ;
        
        // Only add these fields in full mode (not simplified)
        if (!$options['simplified'] && !$options['simplified_edit']) {
            $builder
                ->add('user', EntityType::class, [
                    'class' => Utilisateur::class,
                    'choice_label' => function (Utilisateur $user) {
                        return $user->getEmail();
                    },
                    'label' => 'User',
                    'attr' => ['class' => 'form-control reclamation-form-control'],
                    'required' => true
                ])
                ->add('state', ChoiceType::class, [
                    'choices' => [
                        'Pending' => 'pending',
                        'In Progress' => 'in_progress',
                        'Resolved' => 'resolved',
                        'Rejected' => 'rejected'
                    ],
                    'label' => 'Status',
                    'attr' => ['class' => 'form-control reclamation-form-control'],
                    'required' => true
                ])
                ->add('date', DateType::class, [
                    'widget' => 'single_text',
                    'label' => 'Date',
                    'attr' => ['class' => 'form-control reclamation-form-control'],
                    'data' => new \DateTime(),
                    'required' => true
                ])
                ->add('reply', TextareaType::class, [
                    'label' => 'Reply',
                    'required' => false,
                    'attr' => [
                        'class' => 'form-control reclamation-form-control reclamation-textarea',
                        'rows' => 5,
                        'maxlength' => 1000
                    ],
                    'help' => 'Maximum 1000 characters'
                ])
            ;
        }
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Reclamation::class,
            'simplified' => false,
            'simplified_edit' => false,
            'attr' => [
                'novalidate' => 'novalidate', // Lets the server-side validation run
            ],
        ]);
    }
} 