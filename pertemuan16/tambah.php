<?php
        require("koneksi_pdo.php");

        if(isset($_POST['id_daftar'])){

    
        $id_daftar = $_POST['id_daftar'];
        $tanggal_daftar = $_POST['tanggal_daftar'];
        $nama_pendaftar = $_POST['nama_pendaftar'];
        $jns_kelamin = $_POST['jns_kelamin'];
        $status = $_POST['status'];
        $lulusan_sekolah= $_POST['lulusan_sekolah'];
        $tahun_ajaran = $_POST['tahun_ajaran'];
        $alamat = $_POST['alamat'];
        $pekerjaan = $_POST['pekerjaan'];
        $kelurahan= $_POST['kelurahan'];
        $kecamatan = $_POST['kecamatan'];
        $kota = $_POST['kota'];
        $provinsi = $_POST['provinsi'];
        $no_telp = $_POST['no_telp'];

        $query="INSERT INTO tbl_daftar_mahasiswa VALUES('$id_daftar', '$tanggal_daftar', '$nama_pendaftar', '$jns_kelamin'
        '$status', '$lulusan_sekolah', '$tahun_ajaran', '$alamat', '$pekerjaan', '$kelurahan', '$kecamatan', '$kota',
        '$provinsi', '$no_telp')";
        }
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Register</title>
</head>
<body>


<form action="pdo_1.php" method="GET">
    <table>
    <tr>
            <td>No</td>
            <td>:</td>
            <td><input type ="text" name="id_daftar"></td>
        </tr>
        <tr>
            <td>Tanggal</td>
            <td>:</td>
            <td><input type ="text" name="tanggal_daftar"></td>
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
            <td><input type ="text" name="status"></td>
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
            <td>Alamat</td>
            <td>:</td>
            <td><input type ="text" name="alamat"></td>
        </tr>
        <tr>
            <td>Pekerjaan</td>
            <td>:</td>
            <td><input type ="text" name="pekerjaan"></td>
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
            <td><input type ="text" name="no_telp"></td>
        </tr>
        <tr>
            <td colspan="2">&nbsp;</td>
            <td><input type="submit" name="oke" value="kirim">
                <input type="reset" name="batal" value="batal">
            </td>
        </tr>
    </table>
</form>
</body>
</html>