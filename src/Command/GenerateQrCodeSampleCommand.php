<?php

namespace App\Command;

use Endroid\QrCode\Builder\Builder;
use Endroid\QrCode\Encoding\Encoding;
use Endroid\QrCode\ErrorCorrectionLevel\ErrorCorrectionLevelHigh;
use Endroid\QrCode\Label\Alignment\LabelAlignmentCenter;
use Endroid\QrCode\Label\Font\NotoSans;
use Endroid\QrCode\RoundBlockSizeMode\RoundBlockSizeModeMargin;
use Endroid\QrCode\Writer\PngWriter;
use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;

#[AsCommand(
    name: 'app:generate-qrcode-sample',
    description: 'Génère un exemple de QR code pour la démonstration'
)]
class GenerateQrCodeSampleCommand extends Command
{
    protected function configure(): void
    {
        $this
            ->setHelp('Cette commande génère un QR code exemple pour la démonstration')
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $io = new SymfonyStyle($input, $output);

        $io->title('Génération d\'un QR code exemple');

        // Créer un QR code exemple
        $result = Builder::create()
            ->writer(new PngWriter())
            ->writerOptions([])
            ->data('https://example.com/verify/participation/123?token=sample-token-for-demonstration')
            ->encoding(new Encoding('UTF-8'))
            ->errorCorrectionLevel(new ErrorCorrectionLevelHigh())
            ->size(300)
            ->margin(10)
            ->roundBlockSizeMode(new RoundBlockSizeModeMargin())
            ->labelText('CovoitUni Event Participation')
            ->labelFont(new NotoSans(12))
            ->labelAlignment(new LabelAlignmentCenter())
            ->validateResult(false)
            ->build();

        // Chemin du fichier de sortie
        $outputFile = __DIR__ . '/../../public/images/qrcode-sample.png';

        // Enregistrer l'image QR code
        $result->saveToFile($outputFile);

        $io->success(sprintf('QR code exemple généré avec succès dans %s', $outputFile));

        return Command::SUCCESS;
    }
} 