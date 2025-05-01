<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

final class Version20240320000000 extends AbstractMigration
{
    public function getDescription(): string
    {
        return 'Add CO2 emissions table';
    }

    public function up(Schema $schema): void
    {
        $this->addSql('CREATE TABLE co2_emissions (
            id INT AUTO_INCREMENT NOT NULL,
            voiture_id INT NOT NULL,
            emissions DOUBLE PRECISION NOT NULL,
            kilometrage INT NOT NULL,
            year INT NOT NULL,
            created_at DATETIME NOT NULL,
            updated_at DATETIME NOT NULL,
            INDEX IDX_CO2_EMISSIONS_VOITURE (voiture_id),
            PRIMARY KEY(id)
        ) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        
        $this->addSql('ALTER TABLE co2_emissions ADD CONSTRAINT FK_CO2_EMISSIONS_VOITURE FOREIGN KEY (voiture_id) REFERENCES voiture (id)');
    }

    public function down(Schema $schema): void
    {
        $this->addSql('DROP TABLE co2_emissions');
    }
} 