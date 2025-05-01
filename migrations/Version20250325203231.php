<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250325203231 extends AbstractMigration
{
    public function getDescription(): string
    {
        return 'Add feature columns to categorie table';
    }

    public function up(Schema $schema): void
    {
        $this->addSql('ALTER TABLE categorie ADD ac TINYINT(1) NOT NULL DEFAULT 0');
        $this->addSql('ALTER TABLE categorie ADD aux TINYINT(1) NOT NULL DEFAULT 0');
        $this->addSql('ALTER TABLE categorie ADD bluetooth TINYINT(1) NOT NULL DEFAULT 0');
        $this->addSql('ALTER TABLE categorie ADD black_windows TINYINT(1) NOT NULL DEFAULT 0');
        $this->addSql('ALTER TABLE categorie ADD gps TINYINT(1) NOT NULL DEFAULT 0');
        $this->addSql('ALTER TABLE categorie ADD heated_seats TINYINT(1) NOT NULL DEFAULT 0');
        $this->addSql('ALTER TABLE categorie ADD parking_sensors TINYINT(1) NOT NULL DEFAULT 0');
        $this->addSql('ALTER TABLE categorie ADD rear_camera TINYINT(1) NOT NULL DEFAULT 0');
        $this->addSql('ALTER TABLE categorie ADD sunroof TINYINT(1) NOT NULL DEFAULT 0');
        $this->addSql('ALTER TABLE categorie ADD usb_port TINYINT(1) NOT NULL DEFAULT 0');
        $this->addSql('ALTER TABLE categorie ADD leather_seats TINYINT(1) NOT NULL DEFAULT 0');
        $this->addSql('ALTER TABLE categorie ADD cruise_control TINYINT(1) NOT NULL DEFAULT 0');
        $this->addSql('ALTER TABLE categorie ADD lane_assist TINYINT(1) NOT NULL DEFAULT 0');
        $this->addSql('ALTER TABLE categorie ADD automatic_transmission TINYINT(1) NOT NULL DEFAULT 0');
        $this->addSql('ALTER TABLE categorie ADD manual_transmission TINYINT(1) NOT NULL DEFAULT 0');
    }

    public function down(Schema $schema): void
    {
        $this->addSql('ALTER TABLE categorie DROP ac');
        $this->addSql('ALTER TABLE categorie DROP aux');
        $this->addSql('ALTER TABLE categorie DROP bluetooth');
        $this->addSql('ALTER TABLE categorie DROP black_windows');
        $this->addSql('ALTER TABLE categorie DROP gps');
        $this->addSql('ALTER TABLE categorie DROP heated_seats');
        $this->addSql('ALTER TABLE categorie DROP parking_sensors');
        $this->addSql('ALTER TABLE categorie DROP rear_camera');
        $this->addSql('ALTER TABLE categorie DROP sunroof');
        $this->addSql('ALTER TABLE categorie DROP usb_port');
        $this->addSql('ALTER TABLE categorie DROP leather_seats');
        $this->addSql('ALTER TABLE categorie DROP cruise_control');
        $this->addSql('ALTER TABLE categorie DROP lane_assist');
        $this->addSql('ALTER TABLE categorie DROP automatic_transmission');
        $this->addSql('ALTER TABLE categorie DROP manual_transmission');
    }
}
