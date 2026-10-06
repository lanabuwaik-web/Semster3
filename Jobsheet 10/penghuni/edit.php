<?php
require __DIR__ . '/../includes/auth.php';
$page_title = "Edit Penghuni";
include __DIR__ . '/../includes/header.php';
require __DIR__ . '/../includes/koneksi.php';

$flash = $_SESSION['flash'] ?? null;
unset($_SESSION['flash']);

$id = $_GET['id'] ?? null;
if (!$id) {
    header('Location: list.php');
    exit;
}

$stmt = $pdo->prepare("SELECT * FROM penghuni WHERE id = :id");
$stmt->execute(['id' => $id]);
$penghuni = $stmt->fetch(PDO::FETCH_ASSOC);

if (!$penghuni) {
    header('Location: list.php');
    exit;
}
?>
        <section>
            <h2>Edit Penghuni</h2>

            <?php if ($flash): ?>
                <p class="flash flash-<?php echo $flash['type']; ?>"><?php echo $flash['pesan']; ?></p>
            <?php endif; ?>

            <form id="form-tambah" method="post" action="proses_edit.php">
                <input type="hidden" name="id" value="<?php echo $penghuni['id']; ?>">

                <p>
                    <label for="nama">Nama</label><br>
                    <input type="text" id="nama" name="nama" value="<?php echo $penghuni['nama']; ?>" required>
                </p>

                <p>
                    <label for="nomor_kamar">Nomor Kamar</label><br>
                    <input type="text" id="nomor_kamar" name="nomor_kamar" value="<?php echo $penghuni['nomor_kamar']; ?>" required>
                </p>

                <p>
                    <label for="no_hp">No. HP</label><br>
                    <input type="text" id="no_hp" name="no_hp" value="<?php echo $penghuni['no_hp']; ?>">
                </p>

                <p>
                    <button type="submit">Update</button>
                </p>
            </form>
        </section>

<?php include __DIR__ . '/../includes/footer.php'; ?>
