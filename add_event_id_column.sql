-- Check if the column already exists
SET @columnExists = (
    SELECT COUNT(1) 
    FROM information_schema.COLUMNS 
    WHERE TABLE_SCHEMA = DATABASE() 
    AND TABLE_NAME = 'reservation'
    AND COLUMN_NAME = 'event_id'
);

-- Add the column if it doesn't exist
SET @addColumnSql = IF(@columnExists = 0, 
    'ALTER TABLE reservation ADD event_id INT DEFAULT NULL, ADD INDEX IDX_42C8495571F7E88B (event_id), ADD CONSTRAINT FK_42C8495571F7E88B FOREIGN KEY (event_id) REFERENCES annonce_event(id)',
    'SELECT \'Column already exists\' AS message');

PREPARE stmt FROM @addColumnSql;
EXECUTE stmt;
DEALLOCATE PREPARE stmt; 