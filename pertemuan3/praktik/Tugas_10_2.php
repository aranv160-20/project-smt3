<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas Praktikum</title>
</head>
<body>


<form action="Tugas_10_2.php" method="GET">
    <table>
        <tr>
            <td>Masukkan nilai anda</td>
            <td>:</td>
            <td><input type ="text" name="nilaiku"></td>
        </tr>
        <tr>
            <td colspan="2">&nbsp;</td>
            <td><input type="submit" name="oke" value="Kirim">
                <input type="reset" name="batal" value="Batal">
            </td>
        </tr>
    </table>
</form>

<?php
    if(isset($_GET['oke'])){
    $nilai = $_GET['nilaiku'];

    if(($nilai >= 71)&&($nilai <=100)){
        $index = "A";
    } elseif (($nilai >= 61)&&($nilai <= 70)){
        $index = "B";
    } elseif (($nilai >= 51)&&($nilai <= 60)){
        $index = "C";
    } elseif (($nilai >= 41)&&($nilai <= 50)){
        $index = "D";
    } elseif (($nilai >= 0)&&($nilai <= 40)){
        $index = "E";
    } else {
        $index = "Tidak ada";
    }
    
    echo "Nilai anda adalah : ".$nilai;
    echo "<br />";
    echo "Dengan index : ".$index;
    }
    ?>
</body>
</html>