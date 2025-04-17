<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250420000000 extends AbstractMigration
{
    public function getDescription(): string
    {
        return 'Updates the reponse table to match entity structure';
    }

    public function up(Schema $schema): void
    {
        // This will rename the reponse column to content and add the missing columns
        $this->addSql('ALTER TABLE reponse CHANGE reponse content LONGTEXT NOT NULL');
        $this->addSql('ALTER TABLE reponse ADD date DATETIME NOT NULL');
        $this->addSql('ALTER TABLE reponse ADD admin_username VARCHAR(50) DEFAULT NULL');
        
        // Set default value for date field (current datetime)
        $this->addSql('UPDATE reponse SET date = NOW()');
    }

    public function down(Schema $schema): void
    {
        // This will revert the changes
        $this->addSql('ALTER TABLE reponse DROP admin_username');
        $this->addSql('ALTER TABLE reponse DROP date');
        $this->addSql('ALTER TABLE reponse CHANGE content reponse LONGTEXT NOT NULL');
    }
} 