<?php
try {
    $dsn = 'mysql:host=127.0.0.1;port=3306;dbname=practic;charset=utf8mb4';
    $db = new PDO($dsn, 'root', '');
    $sql = "CREATE TABLE IF NOT EXISTS `user` (
        `id` INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
        `username` VARCHAR(255) NOT NULL UNIQUE,
        `password` VARCHAR(255) NOT NULL,
        `created_at` TIMESTAMP NULL DEFAULT NULL,
        `updated_at` TIMESTAMP NULL DEFAULT NULL
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;";
    $db->exec($sql);
    echo "TABLE_USER_CREATED";
} catch (Exception $e) {
    echo "ERROR: " . $e->getMessage();
}
