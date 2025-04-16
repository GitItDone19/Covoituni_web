<?php

// Set up autoloading
require __DIR__ . '/../vendor/autoload.php';

use Symfony\Component\Dotenv\Dotenv;

// Load .env file
(new Dotenv())->bootEnv(__DIR__ . '/../.env');

// Create the kernel with the same configuration as the web app
$kernel = new \App\Kernel($_SERVER['APP_ENV'], (bool) $_SERVER['APP_DEBUG']);
$kernel->boot();

// Get the entity manager
$entityManager = $kernel->getContainer()->get('doctrine')->getManager();
$connection = $entityManager->getConnection();

echo "Checking for orphaned references to missing Annonce entities...\n";

// Get the structure of the annonce table to ensure we set all required fields
$structureSql = "DESCRIBE annonce";
$structure = $connection->executeQuery($structureSql)->fetchAllAssociative();
$requiredFields = [];
foreach ($structure as $field) {
    if ($field['Null'] === 'NO' && $field['Default'] === null && $field['Extra'] !== 'auto_increment') {
        $requiredFields[] = $field['Field'];
    }
}

echo "Required fields in annonce table: " . implode(', ', $requiredFields) . "\n";

// Function to fix a missing Annonce with a specific ID
function fixMissingAnnonce($id, $connection) {
    // Check if the Annonce exists
    $checkSql = "SELECT * FROM annonce WHERE id = :id";
    $annonce = $connection->executeQuery($checkSql, ['id' => $id])->fetchAssociative();

    if (!$annonce) {
        echo "Annonce with ID {$id} does not exist. Creating a placeholder...\n";
        
        try {
            // Create a placeholder Annonce
            $now = new \DateTime();
            $nowStr = $now->format('Y-m-d H:i:s');
            
            // Make sure auto increment is higher than this ID
            $alterSql = "ALTER TABLE annonce AUTO_INCREMENT = " . ($id + 1);
            $connection->executeStatement($alterSql);
            
            // Create the missing Annonce
            $insertSql = "INSERT INTO annonce (id, titre, description, departure_date, date_publication, driver_id, car_id, status, available_seats, event_id) 
                         VALUES (:id, 'Placeholder - Fixed Annonce', 'This is a placeholder for a previously missing Annonce', 
                         :departureDate, :publicationDate, 1, 1, 'annulé', 1, 0)";
            
            $connection->executeStatement($insertSql, [
                'id' => $id,
                'departureDate' => $nowStr,
                'publicationDate' => $nowStr
            ]);
            
            echo "Created placeholder Annonce with ID {$id}.\n";
            return true;
        } catch (\Exception $e) {
            echo "Error creating placeholder: " . $e->getMessage() . "\n";
            return false;
        }
    } else {
        echo "Annonce with ID {$id} already exists.\n";
        return true;
    }
}

// Check for reservations with problematic annonce IDs
$problematicIds = [30, 53]; // Add any new IDs here
$problemsFixed = 0;

foreach ($problematicIds as $id) {
    echo "\nChecking Annonce ID {$id}...\n";
    
    if (fixMissingAnnonce($id, $connection)) {
        $problemsFixed++;
        
        // Check if there are reservations for this ID
        $sql = "SELECT * FROM reservation WHERE annonce_id = :id";
        $reservations = $connection->executeQuery($sql, ['id' => $id])->fetchAllAssociative();
        
        if (count($reservations) > 0) {
            echo "Found " . count($reservations) . " reservations with Annonce ID {$id}\n";
            echo "Reservations are now valid since the Annonce exists.\n";
        } else {
            echo "No reservations with Annonce ID {$id} found.\n";
        }
    }
}

// Clear Doctrine cache
echo "\nClearing Doctrine metadata cache...\n";
$cacheDriver = $entityManager->getConfiguration()->getMetadataCache();
if ($cacheDriver) {
    $cacheDriver->clear();
}

echo "\nOperation completed successfully. Fixed {$problemsFixed} issues.\n";
echo "Please run 'php bin/console cache:clear' manually to clear the Symfony cache.\n"; 