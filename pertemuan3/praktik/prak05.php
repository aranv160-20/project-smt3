<html> 
<head><title>Hasil</title></head> 
<body> 
<html> 
<head><title>Kondisi (SWITCH)</title> 
</head> 
<body> 
<form action="" method="get"> Masukkan Angka Bulan [1..12] : 
<input type="text" name="bulan" size="2"><p> 
<input type="submit" value="Proses"> 
</form> 
<?php 
echo "<br>"; 
echo "----------------------------------------------------<br>"; 
$bulan = $_GET['bulan']; 
if(isset($bulan)) 
{ 
switch($bulan) 
{ 
case "1": $bln="Januari"; 
break; 
case "2": $bln="Februari"; 
break; 
case "3": $bln="Maret"; 
break; 
case "4": $bln="April"; 
break; 
case "5": $hari="Mei";
break; 
case "6": $bln="Juni"; 
break; 
case "7": $bln="Juli"; 
break; 
case "8": $bln="Agustus"; 
break; 
case "9": $bln="September"; 
break; 
case "10": $bln="Oktober"; 
break; 
case "11": $bln="November"; 
break; 
case "12": $bln="Desember"; 
break; 
default: $bln="Ups…!, Tidak diketahui";
} 
echo "Bulan [“.$bulan.”] adalah <b><u>$bln</u></b>"; 
?>
?>
</body> 
</html>
