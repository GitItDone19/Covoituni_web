<?php

namespace App\Form;

use App\Entity\Car;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class CarType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('plaqueImatriculation', TextType::class, [
                'label' => 'Plaque d\'immatriculation',
                'attr' => [
                    'placeholder' => 'Format: XX-123-XX ou XX123XX',
                    'class' => 'form-control'
                ],
            ])
            ->add('marque', ChoiceType::class, [
                'label' => 'Marque',
                'choices' => [
                    'Audi' => 'Audi',
                    'BMW' => 'BMW',
                    'Citroën' => 'Citroën',
                    'Dacia' => 'Dacia',
                    'Fiat' => 'Fiat',
                    'Ford' => 'Ford',
                    'Honda' => 'Honda',
                    'Hyundai' => 'Hyundai',
                    'Kia' => 'Kia',
                    'Mercedes' => 'Mercedes',
                    'Nissan' => 'Nissan',
                    'Opel' => 'Opel',
                    'Peugeot' => 'Peugeot',
                    'Renault' => 'Renault',
                    'Seat' => 'Seat',
                    'Skoda' => 'Skoda',
                    'Toyota' => 'Toyota',
                    'Volkswagen' => 'Volkswagen',
                    'Volvo' => 'Volvo',
                ],
                'placeholder' => 'Sélectionnez une marque',
                'attr' => ['class' => 'form-select']
            ])
            ->add('modele', TextType::class, [
                'label' => 'Modèle',
                'attr' => [
                    'placeholder' => 'Entrez le modèle du véhicule',
                    'class' => 'form-control'
                ],
            ])
            ->add('couleur', TextType::class, [
                'label' => 'Couleur',
                'attr' => [
                    'placeholder' => 'Noir, Blanc, Rouge, etc.',
                    'class' => 'form-control'
                ],
            ])
            ->add('dateImatriculation', DateType::class, [
                'label' => 'Date d\'immatriculation',
                'widget' => 'single_text',
                'attr' => [
                    'class' => 'form-control'
                ],
            ])
            ->add('description', TextareaType::class, [
                'label' => 'Description',
                'required' => false,
                'attr' => [
                    'placeholder' => 'Décrivez votre véhicule (options, particularités, etc.)',
                    'rows' => 3,
                    'class' => 'form-control'
                ],
            ])
            // Comfort Features
            ->add('ac', CheckboxType::class, [
                'label' => 'Climatisation',
                'required' => false,
            ])
            ->add('heated_seats', CheckboxType::class, [
                'label' => 'Sièges chauffants',
                'required' => false,
            ])
            ->add('leather_seats', CheckboxType::class, [
                'label' => 'Sièges en cuir',
                'required' => false,
            ])
            ->add('sunroof', CheckboxType::class, [
                'label' => 'Toit ouvrant',
                'required' => false,
            ])
            // Technology Features
            ->add('bluetooth', CheckboxType::class, [
                'label' => 'Bluetooth',
                'required' => false,
            ])
            ->add('aux', CheckboxType::class, [
                'label' => 'Entrée AUX',
                'required' => false,
            ])
            ->add('usb_port', CheckboxType::class, [
                'label' => 'Port USB',
                'required' => false,
            ])
            ->add('gps', CheckboxType::class, [
                'label' => 'GPS',
                'required' => false,
            ])
            // Safety Features
            ->add('parking_sensors', CheckboxType::class, [
                'label' => 'Capteurs de stationnement',
                'required' => false,
            ])
            ->add('rear_camera', CheckboxType::class, [
                'label' => 'Caméra de recul',
                'required' => false,
            ])
            ->add('lane_assist', CheckboxType::class, [
                'label' => 'Aide au maintien de voie',
                'required' => false,
            ])
            ->add('cruise_control', CheckboxType::class, [
                'label' => 'Régulateur de vitesse',
                'required' => false,
            ])
            // Transmission
            ->add('automatic_transmission', CheckboxType::class, [
                'label' => 'Transmission automatique',
                'required' => false,
            ])
            ->add('manual_transmission', CheckboxType::class, [
                'label' => 'Transmission manuelle',
                'required' => false,
            ])
            // Other Features
            ->add('black_windows', CheckboxType::class, [
                'label' => 'Vitres teintées',
                'required' => false,
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Car::class,
            // Exclude the category field from validation
            'validation_groups' => function ($form) {
                $groups = ['Default'];
                return $groups;
            },
        ]);
    }
} 