<?php
require __DIR__ . '/../includes/auth.php';
require __DIR__ . '/../includes/koneksi.php';

$id = $_POST['id'] ?? null;
$nama = trim($_POST['nama'] ?? '');
$nomorKamar = trim($_POST['nomor_kamar'] ?? '');
$noHp = trim($_POST['no_hp'] ?? '');

if (!$id) {
    header('Location: list.php');
    exit;
}

$errors = [];
if ($nama === '') {
    $errors[] = "Nama wajib diisi.";
}
if ($nomorKamar === '') {
    $errors[] = "Nomor Kamar wajib diisi.";
}

if (!empty($errors)) {
    $_SESSION['flash'] = ['type' => 'error', 'pesan' => implode(' ', $errors)];
    header('Location: edit.php?id=' . urlencode($id));
    exit;
}

$stmt = $pdo->prepare(
    "UPDATE penghuni SET nama = :nama, nomor_kamar = :nomor_kamar,
     no_hp = :no_hp WHERE id = :id"
);
$stmt->execute([
    'nama' => $nama,
    'nomor_kamar' => $nomorKamar,
    'no_hp' => $noHp,
    'id' => $id,
]);

$_SESSION['flash'] = ['type' => 'success', 'pesan' => 'Penghuni berhasil diperbarui.'];
header('Location: list.php');
exit;
