<?php

namespace App\Command;

use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;

#[AsCommand(
    name: 'app:test-mailtrap',
    description: 'Test Mailtrap integration by sending a test email',
)]
class TestMailtrapCommand extends Command
{
    private $mailer;

    public function __construct(MailerInterface $mailer)
    {
        parent::__construct();
        $this->mailer = $mailer;
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $io = new SymfonyStyle($input, $output);
        $io->title('Testing Mailtrap Integration');

        try {
            $email = (new Email())
                ->from('noreply@covoituni.com')
                ->to('test@example.com')
                ->subject('Test Email from CovoitUni')
                ->html('<h1>Test Email</h1><p>This is a test email to verify Mailtrap integration.</p>');

            $this->mailer->send($email);
            
            $io->success('Test email sent successfully! Check your Mailtrap inbox.');
            return Command::SUCCESS;
        } catch (\Exception $e) {
            $io->error('Failed to send test email: ' . $e->getMessage());
            return Command::FAILURE;
        }
    }
} 