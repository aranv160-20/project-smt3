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
    
            $query ='UPDATE tbl_daftar_mahasiswa SET   
                            tanggal_daftar = :tanggal_daftar, 
                            nama_pendaftar = :nama_pendaftar, 
                            jns_kelamin = :jns_kelamin,
                            statuss =  :statuss, 
                            lulusan_sekolah = :lulusan_sekolah, 
                            tahun_ajaran = :tahun_ajaran, 
                            pekerjaan = :pekerjaan,
                            alamat = :alamat, 
                            kelurahan = :kelurahan, 
                            kecamatan = :kecamatan, 
                            kota = :kota,
                            provinsi = :provinsi,
                            telp = :telp 
                    WHERE id_daftar = :id_daftar';

    $statement = $dbh->prepare($query);  
    
                            /*$stmt->bindParam(':id_daftar', $id_daftar);
							$stmt->bindParam(':tanggal_daftar', $tanggal_daftar);
							$stmt->bindParam(':nama_pendaftar', $nama_pendaftar);
							$stmt->bindParam(':jns_kelamin', $jenis_kelamin);
							$stmt->bindParam(':statuss', $statuss);
							$stmt->bindParam(':lulusan_sekolah', $lulusan_sekolah);
							$stmt->bindParam(':tahun_ajaran', $tahun_ajaran);
							$stmt->bindParam(':pekerjaan', $pekerjaan);
							$stmt->bindParam(':alamat', $alamat);
                            $stmt->bindParam(':kelurahan', $kelurahan);
							$stmt->bindParam(':kecamatan', $kecamatan);
							$stmt->bindParam(':kota', $kota);
							$stmt->bindParam(':provinsi', $provinsi);
							$stmt->bindParam(':telp', $telp); */
	

    $statement->execute([':id_daftar'=> $id_daftar, ':tanggal_daftar' => $tanggal_daftar, ':nama_pendaftar' =>$nama_pendaftar, ':jns_kelamin' => $jns_kelamin,
                         ':statuss' =>  $statuss, ':lulusan_sekolah'=>$lulusan_sekolah, ':tahun_ajaran' => $tahun_ajaran, ':pekerjaan' => $pekerjaan, ':alamat'=> $alamat, 
                         ':kelurahan' => $kelurahan, ':kecamatan' => $kecamatan, ':kota' => $kota, ':provinsi' =>  $provinsi, ':telp' => $telp]);

    $publish =$dbh->lastInsertId();
    
    header("location:pdo_1.php?pesan=update");
?>