<!DOCTYPE html>
<html>
<head>
	<title>Membuat CRUD Dengan PHP Dan MySQL - Menampilkan data dari database</title>
</head>
<body>
 
	<?php 
	if(isset($_GET['pesan'])){
		$pesan = $_GET['pesan'];
		if($pesan == "input"){
			echo "Data berhasil di input.";
		}else if($pesan == "update"){
			echo "Data berhasil di update.";
		}else if($pesan == "hapus"){
			echo "Data berhasil di hapus.";
		}
	}
	?>
	<br/>
 
	<table style="font-size:11px;font-family:'arial';text-align:center;" border='1' align='center' >
    <caption><h1>Daftar Calon Mahasiswa Baru</h1></caption>
    <tr><th>No</th>
    <th>Tanggal</th>
    <th>Nama</th>
    <th>Jenis Kelamin</th>
    <th>Status</th>
    <th>Lulusan</th>
    <th>Tahun</th>
    <th>Pekerjaan</th>
    <th>Alamat</th>
    <th>Kelurahan</th>
    <th>Kecamatan</th>
    <th>Kota</th>
    <th>Provinsi</th>
    <th>Telepon</th>
    <th>Pilihan</th></tr>
		<?php 
		include "koneksi.php";
		$result =$dbh->query('select * from tbl_daftar_mahasiswa order by id_daftar asc');
		$nomor = 1;
		while ($select_result = $result->fetch()) {
		?>
		<tr>
			<td><?php echo $select_result['id_daftar']; ?></td>
			<td><?php echo $select_result['tanggal_daftar']; ?></td>
			<td><?php echo $select_result['nama_pendaftar']; ?></td>
            <td><?php echo $select_result['jns_kelamin']; ?></td>
			<td><?php echo $select_result['statuss']; ?></td>
			<td><?php echo $select_result['lulusan_sekolah']; ?></td>
            <td><?php echo $select_result['tahun_ajaran']; ?></td>
			<td><?php echo $select_result['pekerjaan']; ?></td>
			<td><?php echo $select_result['alamat']; ?></td>
            <td><?php echo $select_result['kelurahan']; ?></td>
			<td><?php echo $select_result['kecamatan']; ?></td>
			<td><?php echo $select_result['kota']; ?></td>
            <td><?php echo $select_result['provinsi']; ?></td>
			<td><?php echo $select_result['telp']; ?></td>
			<td>
				<a class="edit" href="ubah.php?id_daftar=<?php echo $select_result['id_daftar']; ?>">Edit</a> |
				<a class="hapus" href="hapus.php?id_daftar=<?php echo $select_result['id_daftar']; ?>">Hapus</a>					
			</td>
		</tr>
		<?php } ?>
		<tr><td><a class="tombol" href="input.php">+ Tambah Data Baru</a></td></tr>
	</table>
</body>
</html>