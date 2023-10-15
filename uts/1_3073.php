<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>21753073-Amelia Rahayu</title>
</head>
<body>

FORM INPUTAN NILAI

<form action="1_3073.php" method="GET">
    <table>
        <tr>
            <td>NIM</td>
            <td><input type ="text" name="nim"></td>
        </tr>
        <tr>
            <td>UTS</td>
            <td><input type ="text" name="uts"></td>
        </tr>
        <tr>
            <td>TUGAS</td>
            <td><input type ="text" name="tugas"></td>
        </tr>
        <tr>
            <td>UAS</td>
            <td><input type ="text" name="uas"></td>
        </tr>
        <tr>
        <td><input type="submit" name="oke" value="Kirim">
            <td><input type="reset" name="oke" value="Batal">
        </td>
        </tr>
    </table>
</form>

<?php
    if(isset($_GET['oke'])){
    
    echo "-------------------------------------------<br>";
    echo "<br/>";
    $nim = $_GET['nim'];
    $uts = $_GET['uts'];
    $tugas = $_GET['tugas'];
    $uas = $_GET['uas'];
    
    $nilai_akhir = ($uts * 0.3) +  ($tugas * 0.25) + ($uas * 0.45);

    switch($nilai_akhir){
        case ($nilai_akhir >=75):
            $index = "A";
            break;
        case ($nilai_akhir >=50):
            $index = "B";
            break;
        case ($nilai_akhir >=35):
            $index = "C";
            break;
        case ($nilai_akhir >=20):
            $index = "D";
            break;
        case ($nilai_akhir >=0):
            $index = "E";
            break;
        }
    echo "Nilai UTS     : $uts<br>";
    echo "Nilai Tugas   : $tugas<br>";
    echo "Nilai UAS     : $uas<br>";
    echo "Nilai Akhir   : $nilai_akhir<br>";
    echo "Index         : $index<br><br>";
    echo "Nim <b>$nim</b> mempunyai nilai akhir <b>$nilai_akhir</b> dan index <b>$index</b> ";
    }
    
    ?>

</body>
</html>