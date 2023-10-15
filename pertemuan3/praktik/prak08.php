<html> 
<head><title>Perulangan (WHILE)</title></head> 
<body> 
<form action="" method="get"> Teks "HALLO" akan ditampilkan sebanyak : 
<input type="text" name="nilai" size="2"><p> 
<input type="submit" value="Proses"> 
</form> 
<?php
$nilai = $_GET['nilai']; 
echo "<br>Jumlah perulangan yang anda minta : $nilai <br>"; 
echo "----------------------------------------------------<br>"; 
if(isset($nilai)) 
{ 
$i = 0; 
do { 
 echo ($i+1). ". HALLO<br>"; 
 $i++; 
} while ($i < $nilai); 
} 
?>
</body> 
</html>