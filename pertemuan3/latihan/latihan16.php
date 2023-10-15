<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>latihan 16</title>
</head>
<body>


<form action="latihan16.php" method="GET">
    <table>
        <tr>
            <td>Nama</td>
            <td>:</td>
            <td><input type ="text" name="namaku"></td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td>:</td>
            <td><input type ="text" name="alamatku"></td>
        </tr>
        <tr>
            <td>Masukkan nilai anda</td>
            <td>:</td>
            <td><input type ="text" name="nilaiku"></td>
        </tr>
        <tr>
            <td colspan="2">&nbsp;</td>
            <td><input type="submit" name="oke" value="kirim">
                <input type="reset" name="batal" value="batal">
            </td>
        </tr>
    </table>
</form>

<?php
    if(isset($_GET['oke'])){
        $nama = $_GET['namaku'];
        $alamat = $_GET['alamatku'];
        $nilai = $_GET['nilaiku'];
        
    if($nilai >= 80){
        $index = "A";
    } elseif(($nilai >= 60)&&($nilai < 80)){
        $index = "B";
    } elseif(($nilai >= 30)&&($nilai < 60)){
        $index = "C";
    } elseif(($nilai >= 10)&&($nilai < 30)){
        $index = "D";
    } else {
        $index = "E";
    }
    
    echo "Selamat datang <b>  $nama </b> </br>";
    echo "Alamat saya di <b> $alamat </b> </br>";
    echo "Nilai anda <b> $nilai </b> </br>";
    echo "Dengan index <b> $index </b> </br>";
    }
    ?>
</body>
</html>