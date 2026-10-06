<?php
$host = getenv('PGHOST');
$port = getenv('PGPORT') ?: '5432';
$db   = getenv('PGDATABASE');
$user = getenv('PGUSER');
$pass = getenv('PGPASSWORD');

try {
    $pdo = new PDO(
        "pgsql:host=$host;port=$port;dbname=$db",
        $user,
        $pass
    );

    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Koneksi database gagal: " . $e->getMessage());
}