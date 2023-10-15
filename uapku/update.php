<?php
include 'functions.php';
$pdo = pdo_connect_mysql();
$msg = '';
// Periksa apakah id kontak ada, misalnya update.php?id=1 akan mendapatkan kontak dengan id 1
if (isset($_GET['id'])) {
    if (!empty($_POST)) {
        // Bagian ini mirip dengan create.php, tetapi ini memperbarui catatan dan tidak menyisipkan
        $id = isset($_POST['id']) ? $_POST['id'] : NULL;
        $nama = isset($_POST['nama']) ? $_POST['nama'] : '';
        $tempat_lahir = isset($_POST['tempat_lahir']) ? $_POST['tempat_lahir'] : '';
        $tanggal_lahir = isset($_POST['tanggal_lahir']) ? $_POST['tanggal_lahir'] : date('Y-m-d');
        $jns_kelamin = isset($_POST['jns_kelamin']) ? $_POST['jns_kelamin'] : '';
        $alamat = isset($_POST['alamat']) ? $_POST['alamat'] : '';
        $telp = isset($_POST['telp']) ? $_POST['telp'] : '';
            // Update the record
        $stmt = $pdo->prepare('UPDATE tb SET id = ?, nama = ?, tempat_lahir = ?, tanggal_lahir = ?, jns_kelamin = ?, alamat = ?, telp =? WHERE id = ?');
        $stmt->execute([$id, $nama, $tempat_lahir, $tanggal_lahir, $jns_kelamin, $alamat, $telp, $_GET['id']]);
        $msg = 'Data Berhasil Diupdate!';
    }
    // Mendapatkan kontak dari tabel kontak
    $stmt = $pdo->prepare('SELECT * FROM tb WHERE id = ?');
    $stmt->execute([$_GET['id']]);
    $tbm = $stmt->fetch(PDO::FETCH_ASSOC);
    if (!$tbm) {
        exit('Data doesn\'t exist with that ID!');
    }
} else {
    exit('No ID specified!');
    
}
header("location:read.php");
?>

<?=template_header('Read')?>

<div class="content update">
	<h2>Update Data : <?=$tbm['id']?></h2>
    <form action="update.php?id=<?=$tbm['id']?>" method="post">
        <label for="id">ID</label>
        <label for="nama">Nama</label>
        <input type="text" name="id" value="<?=$tbm['id']?>">
        <input type="text" name="nama" value="<?=$tbm['nama']?>" >
        <label for="tempat_lahir">Tempat Lahir</label>
        <label for="tanggal_lahir">Tanggal Lahir</label>
        <input type="text" name="tempat_lahir" value="<?=$tbm['tempat_lahir']?>" >
        <input type="date-local" name="tanggal_lahir" value="<?=date('Y-m-d', strtotime($tbm['tanggal_lahir']))?>" >
        <label for="jns_kelamin">Jenis Kelamin</label>
        <label for="alamat">Alamat</label>
        <input type="text" name="jns_kelamin" value="<?=$tbm['jns_kelamin']?>" >
        <input type="text" name="alamat" value="<?=$tbm['alamat']?>">
        <label for="telp">No Telepon</label>
        <input type="text" name="telp" value="<?=$tbm['telp']?>" >
        <input type="submit" value="Update">
    </form>
    <?php if ($msg): ?>
    <p><?=$msg?></p>
    <?php endif; ?>
</div>

<?=template_footer()?>