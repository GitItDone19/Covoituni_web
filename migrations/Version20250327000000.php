<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250327000000 extends AbstractMigration
{
    public function getDescription(): string
    {
        return 'Add feature tables and relationships';
    }

    public function up(Schema $schema): void
    {
        // Create features table
        $this->addSql('CREATE TABLE feature (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(100) NOT NULL, description LONGTEXT DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');

        // Create many-to-many relationship tables
        $this->addSql('CREATE TABLE categorie_features (categorie_id INT NOT NULL, feature_id INT NOT NULL, INDEX IDX_1234567890 (categorie_id), INDEX IDX_0987654321 (feature_id), PRIMARY KEY(categorie_id, feature_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE car_features (car_id INT NOT NULL, feature_id INT NOT NULL, INDEX IDX_ABCDEFGHIJ (car_id), INDEX IDX_JIHGFEDCBA (feature_id), PRIMARY KEY(car_id, feature_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');

        // Add foreign key constraints
        $this->addSql('ALTER TABLE categorie_features ADD CONSTRAINT FK_1234567890 FOREIGN KEY (categorie_id) REFERENCES categorie (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE categorie_features ADD CONSTRAINT FK_0987654321 FOREIGN KEY (feature_id) REFERENCES feature (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE car_features ADD CONSTRAINT FK_ABCDEFGHIJ FOREIGN KEY (car_id) REFERENCES car (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE car_features ADD CONSTRAINT FK_JIHGFEDCBA FOREIGN KEY (feature_id) REFERENCES feature (id) ON DELETE CASCADE');
    }

    public function down(Schema $schema): void
    {
        // Drop foreign key constraints first
        $this->addSql('ALTER TABLE categorie_features DROP FOREIGN KEY FK_1234567890');
        $this->addSql('ALTER TABLE categorie_features DROP FOREIGN KEY FK_0987654321');
        $this->addSql('ALTER TABLE car_features DROP FOREIGN KEY FK_ABCDEFGHIJ');
        $this->addSql('ALTER TABLE car_features DROP FOREIGN KEY FK_JIHGFEDCBA');

        // Drop tables
        $this->addSql('DROP TABLE car_features');
        $this->addSql('DROP TABLE categorie_features');
        $this->addSql('DROP TABLE feature');
    }
} 