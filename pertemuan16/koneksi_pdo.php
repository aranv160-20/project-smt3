<?php
    try{

        //KONEKSI
        $dbh = new PDO('mysql:host=localhost;dbname=mahasiswa_db', 'root', ''); 

        //SETERROR
        $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        //HAPUSKONEKSI
        //$dbh=;

    }catch(PDOException $e){
       echo "Koneksi gagal.". $e->getMessage()."br/>";
       die();
    }
?>