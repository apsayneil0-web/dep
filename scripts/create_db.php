<?php
try {
    $db = new PDO('mysql:host=127.0.0.1;port=3306', 'root', '');
    $db->exec("CREATE DATABASE IF NOT EXISTS practic CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci");
    echo "DB_CREATED";
} catch (Exception $e) {
    echo "ERROR: " . $e->getMessage();
}
