<?php
    
    setcookie ("username", "", time() -120);
    setcookie ("namalengkap", "", time() -120);
    setcookie ("npm", "", time() -120);
    echo "<h1>Cookie Berhasil dihapus.</h1>";
    echo"<h2>Klik <a href='cookie01.php'>di sini</a> untuk penciptaan cookies</h2>";
    echo"<h2>Klik <a href='cookie02.php'>di sini</a> untuk pemeriksaan cookies</h2>";

?>