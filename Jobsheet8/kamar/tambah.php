<?php
$page_title = "Tambah Kamar";
include __DIR__ . '/../includes/header.php';

$flash = $_SESSION['flash'] ?? null;
unset($_SESSION['flash']);
?>
        <section>
            <h2>Tambah Kamar</h2>

            <?php if ($flash): ?>
                <p class="flash flash-<?php echo $flash['type']; ?>"><?php echo $flash['pesan']; ?></p>
            <?php endif; ?>

            <form id="form-tambah" method="post" action="proses_tambah.php">
                <p>
                    <label for="nomor_kamar">Nomor Kamar</label><br>
                    <input type="text" id="nomor_kamar" name="nomor_kamar" required>
                </p>
                <p>
                    <label for="harga">Harga</label><br>
                    <input type="number" id="harga" name="harga" min="0" required>
                </p>
                <p>
                    <label for="status">Status</label><br>
                    <select id="status" name="status" required>
                        <option value="tersedia">Tersedia</option>
                        <option value="terisi">Terisi</option>
                    </select>
                </p>
                <p>
                    <button type="submit">Simpan</button>
                </p>
            </form>
        </section>
<?php include __DIR__ . '/../includes/footer.php'; ?>