<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Praktikum 3</title>
</head>
<body>
    <form>
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

    if ($nilai %2 == 0){
        echo "Bilangan $nilai merupakan <b>bilangan Genap</b>";
    }else{
        echo "Bilangan $nilai merupakan <b>bilangan Ganjil</b>";
    }
    }
    ?>
</body>
</html>