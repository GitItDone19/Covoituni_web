<?php

// This script creates the reponse table manually
// Run it with: php scripts/create_reponse_table.php

// Database connection parameters from .env
$dbConfig = [
    'host' => '127.0.0.1',
    'port' => '3306',
    'dbname' => 'covoituni1',
    'username' => 'root',
    'password' => ''
];

try {
    // Connect to the database
    $dsn = "mysql:host={$dbConfig['host']};port={$dbConfig['port']};dbname={$dbConfig['dbname']}";
    $pdo = new PDO($dsn, $dbConfig['username'], $dbConfig['password']);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    echo "Connected to database successfully.\n";
    
    // Create the reponse table
    $sql = "
    CREATE TABLE IF NOT EXISTS reponse (
        id INT AUTO_INCREMENT NOT NULL,
        content LONGTEXT NOT NULL,
        date DATETIME NOT NULL,
        reclamation_id INT NOT NULL,
        admin_username VARCHAR(50) DEFAULT NULL,
        INDEX IDX_5FB6DEC72D6BA2D9 (reclamation_id),
        PRIMARY KEY(id)
    ) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB;
    ";
    
    $pdo->exec($sql);
    echo "Reponse table created successfully.\n";
    
    // Add foreign key constraint to the reponse table
    $sql = "
    ALTER TABLE reponse ADD CONSTRAINT FK_5FB6DEC72D6BA2D9 
    FOREIGN KEY (reclamation_id) REFERENCES reclamation (id) ON DELETE CASCADE;
    ";
    
    try {
        $pdo->exec($sql);
        echo "Foreign key constraint added successfully.\n";
    } catch (PDOException $e) {
        echo "Warning: Could not add foreign key constraint. This may happen if it already exists or if there's a schema issue: " . $e->getMessage() . "\n";
    }
    
    // Migrate existing reply data from reclamation table
    $sql = "
    INSERT INTO reponse (content, date, reclamation_id, admin_username)
    SELECT reply, date, id, 'system_migration'
    FROM reclamation
    WHERE reply IS NOT NULL AND reply != '';
    ";
    
    try {
        $stmt = $pdo->prepare($sql);
        $stmt->execute();
        $migratedCount = $stmt->rowCount();
        echo "{$migratedCount} responses migrated from reclamation.reply field.\n";
    } catch (PDOException $e) {
        echo "Warning: Could not migrate existing replies: " . $e->getMessage() . "\n";
    }
    
    echo "Migration completed successfully.\n";
    
} catch (PDOException $e) {
    echo "Database error: " . $e->getMessage() . "\n";
    exit(1);
} 