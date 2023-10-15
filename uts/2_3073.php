<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>21753073-Amelia Rahayu</title>
</head>
<body>
    <h1>Perulangan Do...While</h1>
<form action="2_3073.php" method = "GET">
    <table>
        <tr>
            <td>Masukan Bilangan</td>
            <td>:</td>
            <td><input type="text" name="nilaiku"></td>
    
            <td colspan="2">&nbsp;</td>
            <td><input type="submit" name="oke" value="proses">
            </td>
        </tr>
        </table>
</form>
<?php
if(isset($_GET['oke'])){
    $nilai = $_GET['nilaiku'];

    echo "<h2>Hasil : </h2>";
    
    do{
        if ($nilai %2 == 0){
            echo "<b>$nilai = <font color='red'>Bilangan Genap<font color='red'></b><br>"; 
        }else{
            echo "<b>$nilai = <font color='green'>Bilangan Ganjil<font color='green'></b><br>"; 
        }
        $nilai--;
    }while ($nilai>=1);

    }
    ?>
</body>
</html>