<html> 
<head><title>Kondisi (IF)</title> 
</head> 
<body> 
<form action="" method="get"> Masukkan Angka : 
<input type="text" name="nilai" size="2"><p> 
<input type="submit" value="Proses"> 
</form> 
<?php 
$umur = 30; 
if($umur > 30) 
{ 
if ($nilai>50) 
{ echo "Variabel umur berisi nilai: $umur"; } 
} 
?>

</body> 
</html>