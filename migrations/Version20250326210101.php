<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250326210101 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE annonce CHANGE departure_date departure_date DATETIME NOT NULL');
        $this->addSql('ALTER TABLE reclamation ADD status VARCHAR(20) DEFAULT \'pending\' NOT NULL, DROP state, CHANGE date date DATETIME NOT NULL');
        $this->addSql('ALTER TABLE utilisateur CHANGE id id INT AUTO_INCREMENT NOT NULL, CHANGE rating rating NUMERIC(3, 2) DEFAULT \'5\' NOT NULL');
        $this->addSql('ALTER TABLE utilisateur ADD CONSTRAINT FK_1D1C63B3C9AA420C FOREIGN KEY (role_code) REFERENCES role (code)');
        $this->addSql('ALTER TABLE messenger_messages CHANGE id id BIGINT AUTO_INCREMENT NOT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE annonce CHANGE departure_date departure_date DATETIME DEFAULT NULL');
        $this->addSql('ALTER TABLE messenger_messages CHANGE id id BIGINT NOT NULL');
        $this->addSql('ALTER TABLE reclamation ADD state VARCHAR(50) DEFAULT \'pending\' NOT NULL, DROP status, CHANGE date date DATE NOT NULL');
        $this->addSql('ALTER TABLE utilisateur DROP FOREIGN KEY FK_1D1C63B3C9AA420C');
        $this->addSql('ALTER TABLE utilisateur CHANGE id id INT NOT NULL, CHANGE rating rating NUMERIC(3, 2) DEFAULT \'5.00\' NOT NULL');
    }
}
