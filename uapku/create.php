<?php
include 'functions.php';
$pdo = pdo_connect_mysql();
$msg = '';
// cek POST kosong atau tidak
if (!empty($_POST)) {
    // Memposting data tidak kosong menyisipkan catatan baru
    //Set-up variabel yang akan dimasukkan, kita harus memeriksa apakah variabel POST ada jika tidak kita dapat default mereka ke kosong
    $id = isset($_POST['id']) && !empty($_POST['id']) && $_POST['id'] != 'auto' ? $_POST['id'] : NULL;
    // Periksa apakah "nama" variabel POST ada, jika tidak default nilainya kosong, pada dasarnya sama untuk semua variabel
    $nama = isset($_POST['nama']) ? $_POST['nama'] : '';
    $tempat_lahir = isset($_POST['tempat_lahir']) ? $_POST['tempat_lahir'] : '';
    $tanggal_lahir = isset($_POST['tanggal_lahir']) ? $_POST['tanggal_lahir'] : date('Y-m-d');
    $jns_kelamin = isset($_POST['jns_kelamin']) ? $_POST['jns_kelamin'] : '';
    $alamat = isset($_POST['alamat']) ? $_POST['alamat'] : '';
    $telp = isset($_POST['telp']) ? $_POST['telp'] : '';
    // Menyisipkan catatan baru ke dalam tabel kontak
    $stmt = $pdo->prepare('INSERT INTO tb VALUES (?, ?, ?, ?, ?, ?, ?)');
    $stmt->execute([$id, $nama, $tempat_lahir, $tanggal_lahir, $jns_kelamin, $alamat, $telp]);
    // output
    $msg = 'Data Berhasil Ditambahkan!';
    header("location:read.php");
}
?>

<?=template_header('Create')?>

<div class="content update">
	<h2>Input Data Mahasiswa</h2>
    <form action="create.php" method="post">
        <label for="id">ID</label>
        <label for="nama">Nama</label>
        <input type="text" name="id">
        <input type="text" name="nama">
        <label for="tempat_lahir">Tempat Lahir</label>
        <label for="tanggal_lahir">Tanggal Lahir</label>
        <input type="text" name="tempat_lahir" >
        <input type="date" name="tanggal_lahir" >
        <label for="jns_kelamin">Jenis Kelamin</label>
        <label for="alamat">Alamat</label>
        <input type="text" name="jns_kelamin" >
        <input type="text" name="alamat" >
        <label for="telp">No Telepon</label>
        <input type="text" name="telp" >
        <input type="submit" value="Submit">
    </form>
    <?php if ($msg): ?>
    <p><?=$msg?></p>
    <?php endif; ?>
</div>

<?=template_footer()?>