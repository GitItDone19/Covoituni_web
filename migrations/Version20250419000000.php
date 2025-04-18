<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Add event_id column to reservation table
 */
final class Version20250419000000 extends AbstractMigration
{
    public function getDescription(): string
    {
        return 'Add event_id column to reservation table';
    }

    public function up(Schema $schema): void
    {
        // Check if the column already exists
        $checkSql = "SELECT 1 
                    FROM information_schema.COLUMNS 
                    WHERE TABLE_SCHEMA = DATABASE() 
                    AND TABLE_NAME = 'reservation'
                    AND COLUMN_NAME = 'event_id'";
        
        $columnExists = (bool) $this->connection->executeQuery($checkSql)->fetchOne();
        
        if (!$columnExists) {
            // Add the event_id column to the reservation table
            $this->addSql('ALTER TABLE reservation ADD event_id INT DEFAULT NULL');
            
            // Add a foreign key constraint if needed
            $this->addSql('ALTER TABLE reservation ADD CONSTRAINT FK_42C8495571F7E88B FOREIGN KEY (event_id) REFERENCES annonce_event (id)');
            
            // Add index for better performance
            $this->addSql('CREATE INDEX IDX_42C8495571F7E88B ON reservation (event_id)');
        }
    }

    public function down(Schema $schema): void
    {
        // Check if the column exists before trying to remove it
        $checkSql = "SELECT 1 
                    FROM information_schema.COLUMNS 
                    WHERE TABLE_SCHEMA = DATABASE() 
                    AND TABLE_NAME = 'reservation'
                    AND COLUMN_NAME = 'event_id'";
        
        $columnExists = (bool) $this->connection->executeQuery($checkSql)->fetchOne();
        
        if ($columnExists) {
            // Drop the foreign key constraint first if it exists
            $this->addSql('ALTER TABLE reservation DROP FOREIGN KEY FK_42C8495571F7E88B');
            
            // Drop the index
            $this->addSql('DROP INDEX IDX_42C8495571F7E88B ON reservation');
            
            // Drop the column
            $this->addSql('ALTER TABLE reservation DROP event_id');
        }
    }
} 