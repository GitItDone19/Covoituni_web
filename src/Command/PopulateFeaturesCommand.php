<?php

namespace App\Command;

use App\Repository\FeatureRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;

#[AsCommand(
    name: 'app:populate-features',
    description: 'Populates the database with default vehicle features'
)]
class PopulateFeaturesCommand extends Command
{
    private FeatureRepository $featureRepository;
    private EntityManagerInterface $entityManager;

    public function __construct(
        FeatureRepository $featureRepository,
        EntityManagerInterface $entityManager
    ) {
        parent::__construct();
        $this->featureRepository = $featureRepository;
        $this->entityManager = $entityManager;
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $io = new SymfonyStyle($input, $output);
        
        // Check if features already exist
        $existingFeatures = $this->featureRepository->findAll();
        if (!empty($existingFeatures)) {
            $io->warning('Features already exist in the database. Skipping population.');
            return Command::SUCCESS;
        }

        $defaultFeatures = $this->featureRepository->findDefaultFeatures();
        $io->progressStart(count($defaultFeatures));

        foreach ($defaultFeatures as $featureData) {
            $feature = new \App\Entity\Feature();
            $feature->setName($featureData['name']);
            $feature->setDescription($featureData['description']);
            
            $this->entityManager->persist($feature);
            $io->progressAdvance();
        }

        $this->entityManager->flush();
        $io->progressFinish();

        $io->success('Default features have been populated successfully!');

        return Command::SUCCESS;
    }
} 