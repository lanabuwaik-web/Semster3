<?php
require __DIR__ . '/../includes/auth.php';
$page_title = "Edit Kamar";
include __DIR__ . '/../includes/header.php';
require __DIR__ . '/../includes/koneksi.php';

$flash = $_SESSION['flash'] ?? null;
unset($_SESSION['flash']);

$id = $_GET['id'] ?? null;
if (!$id) {
    header('Location: list.php');
    exit;
}

$stmt = $pdo->prepare("SELECT * FROM kamar WHERE id = :id");
$stmt->execute(['id' => $id]);
$kamar = $stmt->fetch(PDO::FETCH_ASSOC);

if (!$kamar) {
    header('Location: list.php');
    exit;
}
?>
        <section>
            <h2>Edit Kamar</h2>

            <?php if ($flash): ?>
                <p class="flash flash-<?php echo $flash['type']; ?>"><?php echo $flash['pesan']; ?></p>
            <?php endif; ?>

            <form id="form-tambah" method="post" action="proses_edit.php">
                <input type="hidden" name="id" value="<?php echo $kamar['id']; ?>">

                <p>
                    <label for="nomor_kamar">Nomor Kamar</label><br>
                    <input type="text" id="nomor_kamar" name="nomor_kamar" value="<?php echo $kamar['nomor_kamar']; ?>" required>
                </p>

                <p>
                    <label for="harga">Harga</label><br>
                    <input type="number" id="harga" name="harga" min="0" value="<?php echo $kamar['harga']; ?>" required>
                </p>

                <p>
                    <label for="status">Status</label><br>
                    <select id="status" name="status" required>
                        <?php foreach (['tersedia' => 'Tersedia', 'terisi' => 'Terisi'] as $value => $label): ?>
                        <option value="<?php echo $value; ?>" <?php echo $kamar['status'] === $value ? 'selected' : ''; ?>>
                            <?php echo $label; ?>
                        </option>
                        <?php endforeach; ?>
                    </select>
                </p>

                <p>
                    <button type="submit">Update</button>
                </p>
            </form>
        </section>

<?php include __DIR__ . '/../includes/footer.php'; ?>