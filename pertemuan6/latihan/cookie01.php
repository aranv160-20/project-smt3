<?php
    $value = 'ara';
    $value2 = 'Amelia Rahayu';
    $value3 = '21753073';
    setcookie("username", $value);
    setcookie("namalengkap", $value2,  time()+120);
    setcookie("npm", $value3,  time()+120);
    echo "<h1>Ini halaman pengesetan cookie</h1>";
    echo"<h2>Klik <a href='cookie02.php'>di sini</a> untuk pemeriksaan cookies</h2>";
?>