<?php
  // Panggil koneksi database
  include 'koneksi.php';

  if (isset($_GET['id_daftar'])) {
    try {
      // sql statement untuk menampilkan data dari tabel mahasiswa berdasarkan NOMOR DAFTAR
      $query = "SELECT * FROM tbl_daftar_mahasiswa WHERE id_daftar=:id_daftar";
      // membuat prepared statements
      $stmt = $dbh->prepare($query);

      //mengikat parameter 
      $stmt->bindparam(':id_daftar', $_GET['id_daftar']);

      // eksekusi query
      $stmt->execute();

      // mengambil data mahasiswa
      $select_result = $stmt->fetch(PDO::FETCH_ASSOC);

      // nilai untuk mengisi form
      $id_daftar          = $select_result['id_daftar'];
      $tanggal_daftar     = $select_result['tanggal_daftar'];
      $nama_pendaftar     = $select_result['nama_pendaftar'];
      $jns_kelamin        = $select_result['jns_kelamin'];
      $statuss            = $select_result['statuss'];
      $lulusan_sekolah    = $select_result['lulusan_sekolah'];
      $tahun_ajaran       = $select_result['tahun_ajaran'];
      $pekerjaan          = $select_result['pekerjaan'];
      $alamat             = $select_result['alamat'];
      $kelurahan          = $select_result['kelurahan'];
      $kecamatan          = $select_result['kecamatan'];
      $kota               = $select_result['kota'];
      $provinsi           = $select_result['provinsi'];
      $telp               = $select_result['telp'];

    } catch (PDOException $e) {
      // tampilkan pesan kesalahan
      echo "ada kesalahan pada query : ".$e->getMessage();
    }
  }
  ?>
          <a href="pdo_1.php">Lihat Semua Data</a>
	        <br/>
	        <h3>Edit data</h3>

      <form action="ubah-aksi.php" methode = "post">
        <table>		
    <tr>
            <td>No</td>
            <td>:</td>
            <td><input type ="text" name="id_daftar" value=" <?php echo $id_daftar; ?>"></td>
        </tr>
        <tr>
            <td>Tanggal</td>
            <td>:</td>
            <td><input type ="date" name="tanggal_daftar" value=" <?php echo $tanggal_daftar; ?>"></td>
        </tr>
        <tr>
            <td>Nama</td>
            <td>:</td>
            <td><input type ="text" name="nama_pendaftar" value=" <?php echo $nama_pendaftar; ?>"></td>
        </tr>
        <tr>
            <td>Jenis Kelamin</td>
            <td>:</td>
            <td><input type ="text" name="jns_kelamin" value=" <?php echo $jns_kelamin; ?>"></td>
        </tr>
        <tr>
            <td>Status</td>
            <td>:</td>
            <td><input type ="text" name="statuss" value=" <?php echo $statuss; ?>"></td>
        </tr>
        <tr>
            <td>Lulusan</td>
            <td>:</td>
            <td><input type ="text" name="lulusan_sekolah" value=" <?php echo $lulusan_sekolah; ?>"></td>
        </tr>
        <tr>
            <td>Tahun Ajaran</td>
            <td>:</td>
            <td><input type ="text" name="tahun_ajaran" value=" <?php echo $tahun_ajaran; ?>"></td>
        </tr>
        <tr>
            <td>Pekerjaan</td>
            <td>:</td>
            <td><input type ="text" name="pekerjaan" value=" <?php echo $pekerjaan; ?>"></td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td>:</td>
            <td><input type ="text" name="alamat" value=" <?php echo $alamat; ?>"></td>
        </tr>
        <tr>
            <td>Kelurahan</td>
            <td>:</td>
            <td><input type ="text" name="kelurahan" value=" <?php echo $kelurahan; ?>"></td>
        </tr>
        <tr>
            <td>Kecamatan</td>
            <td>:</td>
            <td><input type ="text" name="kecamatan" value=" <?php echo $kecamatan; ?>"></td>
        </tr>
        <tr>
            <td>Kota</td>
            <td>:</td>
            <td><input type ="text" name="kota" value=" <?php echo $kota ?>"></td>
        </tr>
        <tr>
            <td>Provinsi</td>
            <td>:</td>
            <td><input type ="text" name="provinsi" value=" <?php echo $provinsi; ?>"></td>
        </tr>
        <tr>
            <td>Telepon</td>
            <td>:</td>
            <td><input type ="text" name="telp" value=" <?php echo $telp; ?>"></td>
        </tr>	
        <tr>
            <td colspan="2">&nbsp;</td>
            <td><input type="submit" name="oke" value="Kirim">
                <input type="reset" name="batal" value="Batal">
            </td>
        </tr>				
		</table>
	</form>