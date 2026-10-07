<?php
require __DIR__ . '/../includes/auth.php';
require __DIR__ . '/../includes/csrf.php';
require __DIR__ . '/../includes/koneksi.php';

csrf_verify();

$nomorKamar = trim($_POST['nomor_kamar'] ?? '');
$harga = $_POST['harga'] ?? '';
$status = trim($_POST['status'] ?? '');

// Validasi server-side — wajib ada meski sudah divalidasi JS di Jobsheet 5,
// karena validasi client bisa dilewati (nonaktifkan JS / kirim request manual).
$errors = [];
if ($nomorKamar === '') {
    $errors[] = "Nomor kamar wajib diisi.";
}
if (!is_numeric($harga) || $harga < 0) {
    $errors[] = "Harga tidak boleh negatif.";
}
if ($status === '') {
    $errors[] = "Status wajib dipilih.";
}

if (!empty($errors)) {
    $_SESSION['flash'] = ['type' => 'error', 'pesan' => implode(' ', $errors)];
    header('Location: tambah.php');
    exit;
}

$stmt = $pdo->prepare(
    "INSERT INTO kamar (nomor_kamar, harga, status)
     VALUES (:nomor_kamar, :harga, :status)
     RETURNING id"
);
$stmt->execute([
    'nomor_kamar' => $nomorKamar,
    'harga' => (int) $harga,
    'status' => $status,
]);

$_SESSION['flash'] = ['type' => 'success', 'pesan' => 'Kamar berhasil ditambahkan.'];
header('Location: list.php');
exit;