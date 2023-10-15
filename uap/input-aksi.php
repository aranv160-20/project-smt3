<?php 
    include 'koneksi.php';

            $id_daftar = $_POST['id_daftar'];
            $tanggal_daftar = $_POST['tanggal_daftar'];
            $nama_pendaftar = $_POST['nama_pendaftar'];
            $jns_kelamin = $_POST['jns_kelamin'];
            $statuss = $_POST['statuss'];
            $lulusan_sekolah= $_POST['lulusan_sekolah'];
            $tahun_ajaran = $_POST['tahun_ajaran'];
            $pekerjaan = $_POST['pekerjaan'];
            $alamat = $_POST['alamat'];
            $kelurahan= $_POST['kelurahan'];
            $kecamatan = $_POST['kecamatan'];
            $kota = $_POST['kota'];
            $provinsi = $_POST['provinsi'];
            $telp = $_POST['telp'];
    
    $query ='INSERT INTO tbl_daftar_mahasiswa VALUES(:id_daftar, :tanggal_daftar, :nama_pendaftar, :jns_kelamin, :statuss,
                :lulusan_sekolah, :tahun_ajaran, :pekerjaan, :alamat, :kelurahan, :kecamatan, :kota,
                :provinsi, :telp)';

    $statement = $dbh->prepare($query);    

    $statement->execute([':id_daftar'=> $id_daftar, ':tanggal_daftar' => $tanggal_daftar, ':nama_pendaftar' =>$nama_pendaftar, ':jns_kelamin' => $jns_kelamin,
                         ':statuss' =>  $statuss, ':lulusan_sekolah'=>$lulusan_sekolah, ':tahun_ajaran' => $tahun_ajaran, ':pekerjaan' => $pekerjaan, ':alamat'=> $alamat, 
                         ':kelurahan' => $kelurahan, ':kecamatan' => $kecamatan, ':kota' => $kota, ':provinsi' =>  $provinsi, ':telp' => $telp]);

    $publish =$dbh->lastInsertId();
    
    header("location:pdo_1.php?pesan=input");
?>