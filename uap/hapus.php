<?php 
        include 'koneksi.php';

        //$id_daftar = $_GET['id_daftar'];

        if(isset($_GET['$id_daftar'])){
                try{
                        $query = 'DELETE FROM tbl_daftar_mahasiswa WHERE id_daftar= :id_daftar';

                        $statement = $dbh->prepare($query); 
                        $statement->execute([':id_daftar'=> $id_daftar, ':tanggal_daftar' => $tanggal_daftar, ':nama_pendaftar' =>$nama_pendaftar, ':jns_kelamin' => $jns_kelamin,
                        ':statuss' =>  $statuss, ':lulusan_sekolah'=>$lulusan_sekolah, ':tahun_ajaran' => $tahun_ajaran, ':pekerjaan' => $pekerjaan, ':alamat'=> $alamat, 
                        ':kelurahan' => $kelurahan, ':kecamatan' => $kecamatan, ':kota' => $kota, ':provinsi' =>  $provinsi, ':telp' => $telp]);

                        $publish =$dbh->lastInsertId();

                }catch (PDOException $e) {
                        // tampilkan pesan kesalahan
                echo "ada kesalahan : ".$e->getMessage();
                }
        }
        header("location:pdo_1.php?pesan=hapus");
?>