<?php

namespace App\Form;

use App\Entity\Categorie;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\NotBlank;

class CategorieType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nom', TextType::class, [
                'constraints' => [
                    new NotBlank([
                        'message' => 'Le nom de la catégorie est obligatoire',
                    ]),
                ],
            ])
            ->add('description', TextareaType::class, [
                'required' => false,
            ])
            ->add('ac', CheckboxType::class, [
                'label' => 'Climatisation',
                'required' => false,
            ])
            ->add('aux', CheckboxType::class, [
                'label' => 'Entrée AUX',
                'required' => false,
            ])
            ->add('bluetooth', CheckboxType::class, [
                'label' => 'Bluetooth',
                'required' => false,
            ])
            ->add('black_windows', CheckboxType::class, [
                'label' => 'Vitres teintées',
                'required' => false,
            ])
            ->add('gps', CheckboxType::class, [
                'label' => 'GPS',
                'required' => false,
            ])
            ->add('heated_seats', CheckboxType::class, [
                'label' => 'Sièges chauffants',
                'required' => false,
            ])
            ->add('parking_sensors', CheckboxType::class, [
                'label' => 'Capteurs de stationnement',
                'required' => false,
            ])
            ->add('rear_camera', CheckboxType::class, [
                'label' => 'Caméra de recul',
                'required' => false,
            ])
            ->add('sunroof', CheckboxType::class, [
                'label' => 'Toit ouvrant',
                'required' => false,
            ])
            ->add('usb_port', CheckboxType::class, [
                'label' => 'Port USB',
                'required' => false,
            ])
            ->add('leather_seats', CheckboxType::class, [
                'label' => 'Sièges en cuir',
                'required' => false,
            ])
            ->add('cruise_control', CheckboxType::class, [
                'label' => 'Régulateur de vitesse',
                'required' => false,
            ])
            ->add('lane_assist', CheckboxType::class, [
                'label' => 'Aide au maintien de voie',
                'required' => false,
            ])
            ->add('automatic_transmission', CheckboxType::class, [
                'label' => 'Transmission automatique',
                'required' => false,
            ])
            ->add('manual_transmission', CheckboxType::class, [
                'label' => 'Transmission manuelle',
                'required' => false,
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Categorie::class,
        ]);
    }
} 