<?php
require __DIR__ . '/../includes/auth.php';
$page_title = "Daftar Kamar";
include __DIR__ . '/../includes/header.php';
require __DIR__ . '/../includes/koneksi.php';

$perPage = 5;

$page = max(1, (int) ($_GET['page'] ?? 1));
$offset = ($page - 1) * $perPage;

$keyword = trim($_GET['q'] ?? '');

if ($keyword !== '') {
    $hitung = $pdo->prepare("
        SELECT COUNT(*)
        FROM kamar
        WHERE nomor_kamar ILIKE :kw
    ");
    $hitung->execute([
        'kw' => '%' . $keyword . '%'
    ]);

    $totalRows = $hitung->fetchColumn();

    $stmt = $pdo->prepare("
        SELECT *
        FROM kamar
        WHERE nomor_kamar ILIKE :kw
        ORDER BY id DESC
        LIMIT :limit OFFSET :offset
    ");

    $stmt->bindValue('kw', '%' . $keyword . '%');
} else {
    $totalRows = $pdo->query("
        SELECT COUNT(*)
        FROM kamar
    ")->fetchColumn();

    $stmt = $pdo->prepare("
        SELECT *
        FROM kamar
        ORDER BY id DESC
        LIMIT :limit OFFSET :offset
    ");
}

$stmt->bindValue('limit', $perPage, PDO::PARAM_INT);
$stmt->bindValue('offset', $offset, PDO::PARAM_INT);
$stmt->execute();

$daftarKamar = $stmt->fetchAll(PDO::FETCH_ASSOC);

$totalPages = max(1, (int) ceil($totalRows / $perPage));
?>

<section>
    <h2>Daftar Kamar</h2>

    <div class="search-box">
        <form method="get">
            <label for="search-input">Cari Kamar</label>
            <input
                type="text"
                id="search-input"
                name="q"
                value="<?php echo htmlspecialchars($keyword); ?>"
                placeholder="Ketik nomor kamar..."
            >
            <button type="submit">Cari</button>
        </form>
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
                        <td colspan="4">Data kamar tidak ditemukan.</td>
                    </tr>
                <?php else: ?>

                    <?php foreach ($daftarKamar as $kamar): ?>
                        <tr>
                            <td><?php echo htmlspecialchars($kamar['nomor_kamar']); ?></td>
                            <td><?php echo htmlspecialchars($kamar['harga']); ?></td>
                            <td><?php echo htmlspecialchars($kamar['status']); ?></td>

                            <td>
                                <a
                                    href="edit.php?id=<?php echo $kamar['id']; ?>"
                                    class="btn-edit"
                                >
                                    Edit
                                </a>

                                <form
                                    class="form-hapus"
                                    method="post"
                                    action="hapus.php"
                                >
                                    <input
                                        type="hidden"
                                        name="id"
                                        value="<?php echo $kamar['id']; ?>"
                                    >

                                    <button
                                        type="submit"
                                        class="btn-hapus"
                                    >
                                        Hapus
                                    </button>
                                </form>
                            </td>
                        </tr>
                    <?php endforeach; ?>

                <?php endif; ?>
            </tbody>
        </table>
    </div>

    <?php if ($totalPages > 1): ?>
        <div class="pagination">

            <?php if ($page > 1): ?>
                <a href="?page=<?php echo $page - 1; ?>&q=<?php echo urlencode($keyword); ?>">
                    &laquo; Sebelumnya
                </a>
            <?php endif; ?>

            <?php for ($i = 1; $i <= $totalPages; $i++): ?>
                <a
                    href="?page=<?php echo $i; ?>&q=<?php echo urlencode($keyword); ?>"
                    class="<?php echo $i === $page ? 'active' : ''; ?>"
                >
                    <?php echo $i; ?>
                </a>
            <?php endfor; ?>

            <?php if ($page < $totalPages): ?>
                <a href="?page=<?php echo $page + 1; ?>&q=<?php echo urlencode($keyword); ?>">
                    Berikutnya &raquo;
                </a>
            <?php endif; ?>

        </div>
    <?php endif; ?>

</section>

<?php include __DIR__ . '/../includes/footer.php'; ?>