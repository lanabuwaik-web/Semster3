<?php
$page_title = "Daftar Penghuni";
include __DIR__ . '/../includes/header.php';
require __DIR__ . '/../includes/koneksi.php';

$flash = $_SESSION['flash'] ?? null;
unset($_SESSION['flash']);

$daftarPenghuni = $pdo->query("SELECT * FROM penghuni ORDER BY id DESC")->fetchAll(PDO::FETCH_ASSOC);
?>
        <section>
            <h2>Daftar Penghuni</h2>

            <?php if ($flash): ?>
                <p class="flash flash-<?php echo $flash['type']; ?>"><?php echo $flash['pesan']; ?></p>
            <?php endif; ?>

            <div class="search-box">
                <label for="search-input">Cari Nama Penghuni</label>
                <input type="text" id="search-input" placeholder="Ketik nama penghuni...">
            </div>

            <div class="table-responsive">
            <table>
                <thead>
                    <tr>
                        <th>Nama</th>
                        <th>Nomor Kamar</th>
                        <th>No. HP</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if (empty($daftarPenghuni)): ?>
                    <tr>
                        <td colspan="4">Belum ada data penghuni. Silakan tambah lewat menu "Tambah Penghuni".</td>
                    </tr>
                    <?php else: ?>
                        <?php foreach ($daftarPenghuni as $penghuni): ?>
                        <tr>
                            <td><?php echo $penghuni['nama']; ?></td>
                            <td><?php echo $penghuni['nomor_kamar']; ?></td>
                            <td><?php echo $penghuni['no_hp']; ?></td>
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