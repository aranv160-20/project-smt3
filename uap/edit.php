<!DOCTYPE html>
<html>
<head>
	<title>Membuat CRUD Dengan PHP Dan MySQL - Mengupdate data dari database</title>
</head>
<body>
	
	<a href="pdo_1.php">Lihat Semua Data</a>
	<br/>
	<h3>Edit data</h3>
 
	<?php 
	include "koneksi.php";
    
    //$id_daftar = $_GET['id_daftar'];

    $result ='SELECT * FROM tbl_daftar_mahasiswa WHERE id_daftar = :id_daftar';

    //$statement=$dbh->prepare($result);
    
    //while ($select_result = $result->fetch()) 
    if (isset($_GET['id_daftar'])) {
        if(!empty($_POST)){
	?>
	<form action="update.php" method="post">		
    <tr>
            <td>No</td>
            <td>:</td>
            <td><input type ="text" name="id_daftar" value=" <?php echo $_GET['id_daftar'] ?>"></td>
        </tr>
        <tr>
            <td>Tanggal</td>
            <td>:</td>
            <td><input type ="date" name="tanggal_daftar" value=" <?php echo $_GET['tanggal_daftar'] ?>"></td>
        </tr>
        <tr>
            <td>Nama</td>
            <td>:</td>
            <td><input type ="text" name="nama_pendaftar" value=" <?php echo $_GET['nama_pendaftar'] ?>"></td>
        </tr>
        <tr>
            <td>Jenis Kelamin</td>
            <td>:</td>
            <td><input type ="text" name="jns_kelamin" value=" <?php echo $_GET['jns_kelamin'] ?>"></td>
        </tr>
        <tr>
            <td>Status</td>
            <td>:</td>
            <td><input type ="text" name="statuss" value=" <?php echo $_GET['statuss'] ?>"></td>
        </tr>
        <tr>
            <td>Lulusan</td>
            <td>:</td>
            <td><input type ="text" name="lulusan_sekolah" value=" <?php echo $_GET['lulusan_sekolah'] ?>"></td>
        </tr>
        <tr>
            <td>Tahun Ajaran</td>
            <td>:</td>
            <td><input type ="text" name="tahun_ajaran" value=" <?php echo $_GET['tahun_ajaran'] ?>"></td>
        </tr>
        <tr>
            <td>Pekerjaan</td>
            <td>:</td>
            <td><input type ="text" name="pekerjaan" value=" <?php echo $_GET['pekerjaan'] ?>"></td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td>:</td>
            <td><input type ="text" name="alamat" value=" <?php echo $_GET['alamat'] ?>"></td>
        </tr>
        <tr>
            <td>Kelurahan</td>
            <td>:</td>
            <td><input type ="text" name="kelurahan" value=" <?php echo $_GET['kelurahan'] ?>"></td>
        </tr>
        <tr>
            <td>Kecamatan</td>
            <td>:</td>
            <td><input type ="text" name="kecamatan" value=" <?php echo $_GET['kecamatan'] ?>"></td>
        </tr>
        <tr>
            <td>Kota</td>
            <td>:</td>
            <td><input type ="text" name="kota" value=" <?php echo $_GET['kota'] ?>"></td>
        </tr>
        <tr>
            <td>Provinsi</td>
            <td>:</td>
            <td><input type ="text" name="provinsi" value=" <?php echo $_GET['provinsi'] ?>"></td>
        </tr>
        <tr>
            <td>Telepon</td>
            <td>:</td>
            <td><input type ="text" name="telp" value=" <?php echo $_GET['telp'] ?>"></td>
        </tr>	
        <tr>
            <td colspan="2">&nbsp;</td>
            <td><input type="submit" name="oke" value="Kirim">
                <input type="reset" name="batal" value="Batal">
            </td>
        </tr>				
		</table>
	</form>
	<?php }
    }
     ?>
</body>
</html>