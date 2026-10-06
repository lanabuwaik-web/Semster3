<?php
require __DIR__ . '/../includes/auth.php';
require __DIR__ . '/../includes/koneksi.php';

$id = $_POST['id'] ?? null;
$nomor_kamar = trim($_POST['nomor_kamar'] ?? '');
$harga = $_POST['harga'] ?? '';
$status = trim($_POST['status'] ?? '');

if (!$id) {
    header('Location: list.php');
    exit;
}

$errors = [];

if ($nomor_kamar === '') {
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
    header('Location: edit.php?id=' . urlencode($id));
    exit;
}

$stmt = $pdo->prepare(
    "UPDATE kamar SET nomor_kamar = :nomor_kamar, harga = :harga,
     status = :status WHERE id = :id"
);

$stmt->execute([
    'nomor_kamar' => $nomor_kamar,
    'harga' => (int) $harga,
    'status' => $status,
    'id' => $id,
]);

$_SESSION['flash'] = ['type' => 'success', 'pesan' => 'Kamar berhasil diperbarui.'];

header('Location: list.php');
exit;