<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>latihan 15</title>
</head>
<body>


<form action="latihan15.php" method="GET">
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

        echo "Selamat datang <b>$nama</b> <br/>";
        echo "Alamat saya di <b>$alamat</b> <br/>";
     }
     ?>
</body>
</html>