<?php
function open_connection()
{
$host="localhost";
$username="root";
$password="";
$databasename="mahasiswa_db";
$koneksi=@mysqli_connect($host,$username,$password,$databasename);
if ($koneksi) 
return $koneksi;
}
?>