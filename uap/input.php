<!DOCTYPE html>
<html>
<head>
	<title>Membuat CRUD Dengan PHP Dan MySQL - Menginputkan data dari database</title>
</head>
<body>
 
	<a href="pdo_1.php">Lihat Semua Data</a>
 
	<br/>
	<h3>Input data baru</h3>
	<form action="input-aksi.php" method="post">		
    <table>
    <tr>
            <td>No</td>
            <td>:</td>
            <td><input type ="text" name="id_daftar"></td>
        </tr>
        <tr>
            <td>Tanggal</td>
            <td>:</td>
            <td><input type ="date" name="tanggal_daftar"></td>
        </tr>
        <tr>
            <td>Nama</td>
            <td>:</td>
            <td><input type ="text" name="nama_pendaftar"></td>
        </tr>
        <tr>
            <td>Jenis Kelamin</td>
            <td>:</td>
            <td><input type ="text" name="jns_kelamin"></td>
        </tr>
        <tr>
            <td>Status</td>
            <td>:</td>
            <td><input type ="text" name="statuss"></td>
        </tr>
        <tr>
            <td>Lulusan</td>
            <td>:</td>
            <td><input type ="text" name="lulusan_sekolah"></td>
        </tr>
        <tr>
            <td>Tahun Ajaran</td>
            <td>:</td>
            <td><input type ="text" name="tahun_ajaran"></td>
        </tr>
        <tr>
            <td>Pekerjaan</td>
            <td>:</td>
            <td><input type ="text" name="pekerjaan"></td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td>:</td>
            <td><input type ="text" name="alamat"></td>
        </tr>
        <tr>
            <td>Kelurahan</td>
            <td>:</td>
            <td><input type ="text" name="kelurahan"></td>
        </tr>
        <tr>
            <td>Kecamatan</td>
            <td>:</td>
            <td><input type ="text" name="kecamatan"></td>
        </tr>
        <tr>
            <td>Kota</td>
            <td>:</td>
            <td><input type ="text" name="kota"></td>
        </tr>
        <tr>
            <td>Provinsi</td>
            <td>:</td>
            <td><input type ="text" name="provinsi"></td>
        </tr>
        <tr>
            <td>Telepon</td>
            <td>:</td>
            <td><input type ="text" name="telp"></td>
        </tr>	
        <tr>
            <td colspan="2">&nbsp;</td>
            <td><input type="submit" name="oke" value="Kirim">
                <input type="reset" name="batal" value="Batal">
            </td>
        </tr>				
		</table>
	</form>
</body>
</html>


