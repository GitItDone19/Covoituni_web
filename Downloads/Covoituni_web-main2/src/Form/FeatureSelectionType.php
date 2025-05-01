<?php

namespace App\Form;

use App\Entity\Feature;
use App\Repository\FeatureRepository;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class FeatureSelectionType extends AbstractType
{
    private FeatureRepository $featureRepository;

    public function __construct(FeatureRepository $featureRepository)
    {
        $this->featureRepository = $featureRepository;
    }

    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('features', EntityType::class, [
                'class' => Feature::class,
                'choice_label' => 'name',
                'choice_attr' => function(Feature $feature) {
                    return [
                        'data-description' => $feature->getDescription(),
                        'data-mandatory' => $feature->isMandatory() ? '1' : '0',
                    ];
                },
                'multiple' => true,
                'expanded' => true,
                'by_reference' => false,
                'query_builder' => function (FeatureRepository $er) {
                    return $er->createQueryBuilder('f')
                        ->orderBy('f.name', 'ASC');
                },
                'attr' => [
                    'class' => 'feature-checkboxes',
                ],
                'label' => 'Available Features',
                'help' => 'Select all features available in your vehicle',
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => null,
        ]);
    }
} 