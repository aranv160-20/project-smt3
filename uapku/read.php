<?php
include 'functions.php';
// koneksi database
$pdo = pdo_connect_mysql();
// dapatkan halaman melalui permintaan GET (parameter URL: halaman), jika tidak ada default halaman ke 1
$page = isset($_GET['page']) && is_numeric($_GET['page']) ? (int)$_GET['page'] : 1;
// Jumlah catatan untuk diperlihatkan di setiap halaman
$records_per_page = 5;

// Siapkan pernyataan SQL dan dapatkan catatan dari tabel kontak kita, LIMIT akan menentukan halaman
$stmt = $pdo->prepare('SELECT * FROM tb ORDER BY id LIMIT :current_page, :record_per_page');
$stmt->bindValue(':current_page', ($page-1)*$records_per_page, PDO::PARAM_INT);
$stmt->bindValue(':record_per_page', $records_per_page, PDO::PARAM_INT);
$stmt->execute();
// menampilkan record fetch
$tb = $stmt->fetchAll(PDO::FETCH_ASSOC);

// Dapatkan jumlah total data, ini agar kita dapat menentukan apakah harus ada tombol berikutnya dan sebelumnya
$num_contacts = $pdo->query('SELECT COUNT(*) FROM tb')->fetchColumn();
?>

<?=template_header('Read')?>

<div class="content read">
	<h2>Data Mahasiswa</h2>
	<a href="create.php" class="create-contact">+Tambah Data Baru</a>
	<table>
        <thead>
            <tr>
                <td>ID</td>
                <td>Nama</td>
                <td>Tempat Lahir</td>
                <td>Tanggal Lahir</td>
                <td>Jenis Kelamin</td>
                <td>Alamat</td>
                <td>No Telpon</td>
                <td></td>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($tb as $tb): ?>
            <tr>
                <td><?=$tb['id']?></td>
                <td><?=$tb['nama']?></td>
                <td><?=$tb['tempat_lahir']?></td>
                <td><?=$tb['tanggal_lahir']?></td>
                <td><?=$tb['jns_kelamin']?></td>
                <td><?=$tb['alamat']?></td>
                <td><?=$tb['telp']?></td>
                <td class="actions">
                    <a href="update.php?id=<?=$tb['id']?>" class="edit"><i class="fas fa-pen fa-xs"></i></a>
                    <a href="delete.php?id=<?=$tb['id']?>" class="trash"><i class="fas fa-trash fa-xs"></i></a>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
	<div class="pagination">
		<?php if ($page > 1): ?>
		<a href="read.php?page=<?=$page-1?>"><i class="fas fa-angle-double-left fa-sm"></i></a>
		<?php endif; ?>
		<?php if ($page*$records_per_page < $num_contacts): ?>
		<a href="read.php?page=<?=$page+1?>"><i class="fas fa-angle-double-right fa-sm"></i></a>
		<?php endif; ?>
	</div>
</div>

<?=template_footer()?>