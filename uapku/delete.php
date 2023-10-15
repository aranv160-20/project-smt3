<?php
include 'functions.php';
$pdo = pdo_connect_mysql();
$msg = '';
// Periksa apakah ID kontak sudah ada
if (isset($_GET['id'])) {
    // Pilih catatan yang akan dihapus
    $stmt = $pdo->prepare('SELECT * FROM tb WHERE id = ?');
    $stmt->execute([$_GET['id']]);
    $tbm = $stmt->fetch(PDO::FETCH_ASSOC);
    if (!$tbm) {
        exit('Contact doesn\'t exist with that ID!');
    }
    // Pastikan pengguna mengonfirmasi sebelum penghapusan 
    if (isset($_GET['confirm'])) {
        if ($_GET['confirm'] == 'yes') {
            // Pengguna mengklik tombol "Ya", hapus catatan
            $stmt = $pdo->prepare('DELETE FROM tb WHERE id = ?');
            $stmt->execute([$_GET['id']]);
            $msg = 'Data Berhasil Dihapus.';
        } else {
            // Pengguna mengklik tombol "Tidak", mengarahkan mereka kembali ke halaman yang sudah dibaca
            header('Location: read.php');
            exit;
        }
    }
} else {
    exit('No ID specified!');
}

?>

<?=template_header('Delete')?>

<div class="content delete">
	<h2>Hapus Data : <?=$tbm['id']?></h2>
    <?php if ($msg): ?>
    <p><?=$msg?></p>
    <?php else: ?>
	<p>Apakah anda yakin untuk menghapus : <?=$tbm['id']?>?</p>
    <div class="yesno">
        <a href="delete.php?id=<?=$tbm['id']?>&confirm=yes">Yes</a>
        <a href="delete.php?id=<?=$tbm['id']?>&confirm=no">No</a>
    </div>
    <?php endif; ?>
</div>

<?=template_footer()?>