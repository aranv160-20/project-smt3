<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas Praktikum</title>
</head>
<body>

<h1>Struktur Kendali Percabangan Switch</h1>

<form action="tugas01_04.php" method="GET">
    <table>
        <tr>
            <td>Masukkan nilai anda</td>
            <td>:</td>
            <td><input type ="text" name="nilaiku"></td>
            <td colspan="2">&nbsp;</td>
            <td><input type="submit" name="oke" value="proses">
            </td>
        </tr>
    </table>
</form>

<?php
    if(isset($_GET['oke'])){
    
    echo "<b>Hasil :</b>";
    echo "<br/>";
    $nilai = $_GET['nilaiku'];
    switch ($nilai){
        case ($nilai >= 80):
            echo "Nilai anda adalah : ".$nilai;
            echo "<br/>";
            echo "Dengan Index : A";
            break;
        case ($nilai >= 60):
            echo "Nilai anda adalah : ".$nilai;
            echo "<br/>";
            echo "Dengan Index : B";
            break;
        case ($nilai >= 30):
            echo "Nilai anda adalah : ".$nilai;
            echo "<br/>";
            echo "Dengan Index : C";
            break;
        case ($nilai >= 10):
            echo "Nilai anda adalah : ".$nilai;
            echo "<br/>";
            echo "Dengan Index : D";
            break;
        case ($nilai < 10):
            echo "Nilai anda adalah : ".$nilai;
            echo "<br/>";
            echo "Dengan Index : E";
            break;
    }
    }
    ?>

</body>
</html>