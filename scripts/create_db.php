<?php
$host = '127.0.0.1';
$port = 3306;
$user = 'root';
$pass = 'rootroot';
$db = 'nanny_guard';
$dsn = "mysql:host=$host;port=$port;charset=utf8mb4";

try {
    $pdo = new PDO($dsn, $user, $pass, [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
    $pdo->exec("CREATE DATABASE IF NOT EXISTS `$db` CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci");
    echo "Database '$db' created or already exists.\n";
} catch (PDOException $e) {
    echo "ERROR: " . $e->getMessage() . "\n";
    exit(1);
}
