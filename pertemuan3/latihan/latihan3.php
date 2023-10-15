<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EXAMPLE IF ELSE IFs</title>
</head>
<body>
   
<form action="Latihan3.php" method="GET">
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

$nilai = $_GET['nilaiku'];
if($nilai >= 80) {
    $index = "A";
} elseif (($nilai >= 60) && ($nilai < 80)){
    $index = "B";
}elseif (($nilai >= 30) && ($nilai < 60)){
    $index = "C";
}elseif (($nilai >= 10) && ($nilai < 30)){
    $index = "D";
}else {
    $index = "E";
}

echo "Nilai anda adalah : ".$nilai;
echo "<br />";
echo "Dengan index : ".$index;
?>
</body>
</html>