<?php
$host = 'localhost';
$dbUserName = 'root';
$dbPassword = 'root';
$dbName = 'device_logger';

try {
    $db = new PDO(
        sprintf('mysql:host=%s;dbname=%s;charset=utf8mb4', $host, $dbName),
        $dbUserName,
        $dbPassword,
        [
            PDO::ATTR_EMULATE_PREPARES => false,
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        ]
    );
} catch (Exception $e) {
    print_r($e);
}
