<?php
    $namahost = "localhost"; 
    $username = "root"; 
    $password = ""; 
    $database = "mahasiswa_db"; 
    $koneksi = mysqli_connect($namahost,$username,$password) or die("Failed"); 
    mysqli_select_db($koneksi, $database) or die("Database not exist"); 
?>
