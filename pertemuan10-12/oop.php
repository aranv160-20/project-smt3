<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Amelia Rahayu-21753073</title>
</head>
<body>
    <form action="oop.php">
    <h1>Masukkan Jari-jari</h1>
    <table>
        <tr>
            <td>Masukan jari-jari</td>
            <td>:</td>
            <td><input type="text" name="r"></td>
    
            <td colspan="2">&nbsp;</td>
            <td><input type="submit" name="oke" value="proses">
            </td>
        </tr>
        </table>
    </form>
    <?php
    if(isset($_GET['oke'])){
        $jari = $_GET['r'];
    class lingkaran {
    
        public $jari;
        function setjari ($jari){ 
            $this->jari=$jari;
        }
        function getjari(){
            $jari=$this->jari; 
            return $jari;
        }
        
}
    echo "<br>";
    echo "<b>Hasil perhitungan</b><br>";
    $luas=3.14*($jari*$jari); 
    echo "<b>luas lingkaran</b> = $luas";

    }
    
?>
</body>
</html>