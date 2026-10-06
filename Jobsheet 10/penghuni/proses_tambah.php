<?php
require __DIR__ . '/../includes/auth.php';
require __DIR__ . '/../includes/koneksi.php';

$nama = trim($_POST['nama'] ?? '');
$nomorKamar = trim($_POST['nomor_kamar'] ?? '');
$noHp = trim($_POST['no_hp'] ?? '');

$errors = [];
if ($nama === '') {
    $errors[] = "Nama wajib diisi.";
}
if ($nomorKamar === '') {
    $errors[] = "Nomor Kamar wajib diisi.";
}

if (!empty($errors)) {
    $_SESSION['flash'] = ['type' => 'error', 'pesan' => implode(' ', $errors)];
    header('Location: tambah.php');
    exit;
}

$stmt = $pdo->prepare(
    "INSERT INTO penghuni (nama, nomor_kamar, no_hp)
     VALUES (:nama, :nomor_kamar, :no_hp)
     RETURNING id"
);
$stmt->execute([
    'nama' => $nama,
    'nomor_kamar' => $nomorKamar,
    'no_hp' => $noHp,
]);

$_SESSION['flash'] = ['type' => 'success', 'pesan' => 'Penghuni berhasil ditambahkan.'];
header('Location: list.php');
exit;
