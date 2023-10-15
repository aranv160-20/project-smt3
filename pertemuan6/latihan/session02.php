<?php
    session_start();
    if (isset ($_SESSION['login'])){
        echo "<h1> Selamat Datang ". $_SESSION['login'] ."</h1>";
        echo "<h2> Halaman ini hanya bisa diakses jika Anda sudah login </h2>";
        echo "<h2> Klik <a href='session03.php'>di sini(session03.php)</a> untuk LOGOUT"; 
        }else {
            ("Anda belum login! Anda tidak berhak masuk ke halaman ini. 
            Silahkan Login <a href='session01.php'di sini</a>"); 
        }
?>