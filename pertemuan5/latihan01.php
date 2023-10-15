<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form PHP</title>
</head>
<body>
    <form action="latihan01.php" method="GET">
        <table>
            <tr>
                <td>Nama</td>
                <td>:</td>
                <td><input type="text" name="nm" required></td>
            </tr>
            <tr>
                <td>Jenis Kelamin</td>
                <td>:</td>
                <td><input type="radio" name="jk" value="p">Pria
                    <input type="radio" name="jk" value="w">Wanita</td>
            </tr>
            <tr>
                <td>Hobi</td>
                <td>:</td>
                <td><input type="checkbox" name="hb[]" value="m">Membaca
                    <input type="checkbox" name="hb[]" value="b">Berenang
                    <input type="checkbox" name="hb[]" value="g">Game
                    </td>
            </tr>
            <tr>
                <td>Agama</td>
                <td>:</td>
                <td><Select name="ag">
                    <option value="is">Islam</option>
                    <option value="ke">Kristen</option>
                    <option value="kh">Khatolik</option>
                    <option value="hd">Hindu</option>
                    <option value="bd">Budha</option>
                    <option value="kg">Konghucu</option>
                    </Select></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td>:</td>
                <td><textarea name="al" cols="30" rows="10"></textarea></td>
            </tr>
            <tr>
                <td colspan="2">&nbsp;</td>
                <td><input type="submit" name="oke" value="Kirim">
                    <input type="reset" name="reset" value="Batal"></td>
            </tr>
        </table>
    </form>
    <?php

    if(isset($_GET['oke'])){
        $nama = $_GET['nm'];
        $jeniskelamin = $_GET['jk'];
        $agama = $_GET['ag'];
        $alamat = $_GET['al'];
        
        echo "<h3>Identitas Diri</h3>";
        echo "Nama : $nama <br/>";

        if ($jeniskelamin=="p"){
            echo "Jenis Kelamin : Pria<br/>";
        } else{
            echo "Jenis Kelamin : Wanita<br/>";
        }

        if (empty($_GET['hb'])){
            echo "Hobi belum dipilih ...";
        } else {
            echo "Hobi : ";
            foreach ($_GET['hb'] as $item){
                echo $item . " ";
            }
        }
        echo "<br/>";

        switch($agama) {
        case "is":
        echo "Agama : Islam<br/>";
            break;
        case "kr":
            echo "Agama : Kristen<br/>";
            break;
        case "kh":
            echo "Agama : Khatolik<br/>";
            break;
        case "hd":
            echo "Agama : Hindu<br/>";
            break;
        case "bd":
            echo "Agama : Budha<br/>";
            break;
        case "kg":
            echo "Agama : Konghucu<br/>";
            break;
        default:
            echo "Agama : Atheis<br/>";
        }
        
        echo "Alamat : $alamat";
    }

    ?>
</body>
</html>