<?php

include "pbo02.php";
echo "<html><head><title>Mahasiswa</title></head><body>";
$form = new Form ("", "Input Form");
$form->addField ("txtnim", "Npm :");
$form->addField ("txtnama", "Nama :");
$form->addField ("txttempatlhr", "Tempat Lahir :");
$form->addField ("txttanggallhr", "Tanggal Lahir :");
$form->addField ("txtnik", "Nik :");
$form->addField ("txtjk", "Jenis Kelamin :");
$form->addField ("txtgoldar", "Golongan Darah :");
$form->addField ("txtthmmasuk", "Tahun Masuk :");
$form->addField ("txtnotlp", "Nomor Telepon :");
$form->addField ("txtemail", "Email :");

echo "<h3>Silahkan isi form berikut ini :</h3>";
$form->displayForm();
echo "</body></html>";

?>