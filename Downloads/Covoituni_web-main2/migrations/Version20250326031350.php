<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250326031350 extends AbstractMigration
{
    public function getDescription(): string
    {
        return 'Add feature columns to car table';
    }

    public function up(Schema $schema): void
    {
        $this->addSql('ALTER TABLE car ADD ac TINYINT(1) NOT NULL DEFAULT 0');
        $this->addSql('ALTER TABLE car ADD aux TINYINT(1) NOT NULL DEFAULT 0');
        $this->addSql('ALTER TABLE car ADD bluetooth TINYINT(1) NOT NULL DEFAULT 0');
        $this->addSql('ALTER TABLE car ADD black_windows TINYINT(1) NOT NULL DEFAULT 0');
        $this->addSql('ALTER TABLE car ADD gps TINYINT(1) NOT NULL DEFAULT 0');
        $this->addSql('ALTER TABLE car ADD heated_seats TINYINT(1) NOT NULL DEFAULT 0');
        $this->addSql('ALTER TABLE car ADD parking_sensors TINYINT(1) NOT NULL DEFAULT 0');
        $this->addSql('ALTER TABLE car ADD rear_camera TINYINT(1) NOT NULL DEFAULT 0');
        $this->addSql('ALTER TABLE car ADD sunroof TINYINT(1) NOT NULL DEFAULT 0');
        $this->addSql('ALTER TABLE car ADD usb_port TINYINT(1) NOT NULL DEFAULT 0');
        $this->addSql('ALTER TABLE car ADD leather_seats TINYINT(1) NOT NULL DEFAULT 0');
        $this->addSql('ALTER TABLE car ADD cruise_control TINYINT(1) NOT NULL DEFAULT 0');
        $this->addSql('ALTER TABLE car ADD lane_assist TINYINT(1) NOT NULL DEFAULT 0');
        $this->addSql('ALTER TABLE car ADD automatic_transmission TINYINT(1) NOT NULL DEFAULT 0');
        $this->addSql('ALTER TABLE car ADD manual_transmission TINYINT(1) NOT NULL DEFAULT 0');
    }

    public function down(Schema $schema): void
    {
        $this->addSql('ALTER TABLE car DROP ac');
        $this->addSql('ALTER TABLE car DROP aux');
        $this->addSql('ALTER TABLE car DROP bluetooth');
        $this->addSql('ALTER TABLE car DROP black_windows');
        $this->addSql('ALTER TABLE car DROP gps');
        $this->addSql('ALTER TABLE car DROP heated_seats');
        $this->addSql('ALTER TABLE car DROP parking_sensors');
        $this->addSql('ALTER TABLE car DROP rear_camera');
        $this->addSql('ALTER TABLE car DROP sunroof');
        $this->addSql('ALTER TABLE car DROP usb_port');
        $this->addSql('ALTER TABLE car DROP leather_seats');
        $this->addSql('ALTER TABLE car DROP cruise_control');
        $this->addSql('ALTER TABLE car DROP lane_assist');
        $this->addSql('ALTER TABLE car DROP automatic_transmission');
        $this->addSql('ALTER TABLE car DROP manual_transmission');
    }
}
