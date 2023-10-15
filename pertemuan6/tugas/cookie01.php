<?php
    
    $value = 'Amelia Rahayu';
    $value2 = '21753073';
    
    setcookie("namalengkap", $value,  time()+120);
    setcookie("npm", $value2,  time()+120);
    if(isset($_COOKIE['namalengkap'])){
        echo "<h1>Nama : " .$_COOKIE['namalengkap'];
    }
    if(isset($_COOKIE['npm'])){
        echo "<h1>Npm : " .$_COOKIE['npm'];
    } else {
            echo "<h1>NAMA ANDA TIDAK ADA.</h1>";
            echo "<h1>NPM ANDA TIDAK ADA.</h1>";
    }
?>