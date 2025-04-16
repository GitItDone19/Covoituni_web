<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Migration to create the Reponse table and set up relationships with Reclamation
 */
final class Version20250415000000 extends AbstractMigration
{
    public function getDescription(): string
    {
        return 'Creates the Reponse table for storing replies to reclamations';
    }

    public function up(Schema $schema): void
    {
        // Create the reponse table
        $this->addSql('CREATE TABLE reponse (
            id INT AUTO_INCREMENT NOT NULL,
            content LONGTEXT NOT NULL,
            date DATETIME NOT NULL,
            reclamation_id INT NOT NULL,
            admin_username VARCHAR(50) DEFAULT NULL,
            INDEX IDX_5FB6DEC72D6BA2D9 (reclamation_id),
            PRIMARY KEY(id)
        ) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        
        // Add foreign key constraint to reclamation table
        $this->addSql('ALTER TABLE reponse ADD CONSTRAINT FK_5FB6DEC72D6BA2D9 FOREIGN KEY (reclamation_id) REFERENCES reclamation (id) ON DELETE CASCADE');
        
        // Migrate existing reply data from reclamation table
        $this->addSql('INSERT INTO reponse (content, date, reclamation_id, admin_username)
        SELECT reply, date, id, "system_migration"
        FROM reclamation
        WHERE reply IS NOT NULL AND reply != ""');
    }

    public function down(Schema $schema): void
    {
        // Drop the reponse table
        $this->addSql('DROP TABLE reponse');
    }
} 