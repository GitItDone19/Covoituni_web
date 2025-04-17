-- Script to create the reponse table
CREATE TABLE IF NOT EXISTS reponse (
    id INT AUTO_INCREMENT NOT NULL, 
    reclamation_id INT NOT NULL, 
    content LONGTEXT NOT NULL, 
    date DATETIME NOT NULL, 
    admin_username VARCHAR(50) DEFAULT NULL, 
    INDEX IDX_5FB6DEC72D6BA2D9 (reclamation_id), 
    PRIMARY KEY(id)
) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB;

-- Add foreign key constraint
ALTER TABLE reponse 
ADD CONSTRAINT FK_5FB6DEC72D6BA2D9 
FOREIGN KEY (reclamation_id) REFERENCES reclamation (id); 