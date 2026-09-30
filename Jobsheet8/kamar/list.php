<?php
$page_title = "Daftar Kamar";
include __DIR__ . '/../includes/header.php';
require __DIR__ . '/../includes/koneksi.php';

$flash = $_SESSION['flash'] ?? null;
unset($_SESSION['flash']);

$daftarKamar = $pdo->query("SELECT * FROM kamar ORDER BY id DESC")->fetchAll(PDO::FETCH_ASSOC);
?>
        <section>
            <h2>Daftar Kamar</h2>

            <?php if ($flash): ?>
                <p class="flash flash-<?php echo $flash['type']; ?>"><?php echo $flash['pesan']; ?></p>
            <?php endif; ?>

            <div class="search-box">
                <label for="search-input">Cari Nomor Kamar</label>
                <input type="text" id="search-input" placeholder="Ketik nomor kamar...">
            </div>

            <div class="table-responsive">
            <table>
                <thead>
                    <tr>
                        <th>Nomor Kamar</th>
                        <th>Harga</th>
                        <th>Status</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if (empty($daftarKamar)): ?>
                    <tr>
                        <td colspan="4">Belum ada data kamar. Silakan tambah lewat menu "Tambah Kamar".</td>
                    </tr>
                    <?php else: ?>
                        <?php foreach ($daftarKamar as $kamar): ?>
                        <tr>
                            <td><?php echo $kamar['nomor_kamar']; ?></td>
                            <td><?php echo $kamar['harga']; ?></td>
                            <td><?php echo $kamar['status']; ?></td>
                            <td>
                                <button type="button">Edit</button>
                                <button type="button" class="btn-hapus">Hapus</button>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </tbody>
            </table>
            </div>
        </section>
<?php include __DIR__ . '/../includes/footer.php'; ?>