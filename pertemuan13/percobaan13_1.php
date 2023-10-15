<html>
<head>
    <title>.:: tes koneksi dengan server database ::.</title>
</head>
<body>
<font face=verdana size=2>
<h3>Tes koneksi dg mysql database server...</h3><p>
<form>
    <input type=radio name=tombol Value=1>Sambung
    <input type=radio name=tombol Value=0>Putus
    <br><br>
    <input type=submit Value="OK">
</form>
<?php
if(isset($_GET['tombol'])){
    $tombol=$_GET['tombol'];
} else {
$tombol=2;
}

require("koneksi.php");
$hub=open_connection();
$databasename="mahasiswa_db";
if (isset($_GET))
{ 
    if($tombol==1)
    {
        if($hub) 
        {
        echo 'Koneksi dg Server Database <b><u>SUKSES</b></u><br>';
        } else {
        echo 'Koneksi dg Server Database <b><u>GAGAL</b></u><br>';
        }
    }
    elseif($tombol==0) 
    {
        mysqli_close($hub);
        echo 'Koneksi Server Database <b><u>DIMATIKAN</b></u><br>';
    }
}
?>
</body>
</html>
