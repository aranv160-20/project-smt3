<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EXAMPLE SWITCH</title>
</head>
<body>
    
<?php

$jurusan = "TI";
    switch($jurusan) {
    case "MI":
        echo "Manajemen Informatika";
        break;
    case "SI":
        echo "Sistem Informatika";
        break;
    case "TI":
        echo "Teknik Informatika";
        break;
    default:
        echo "Jurusan tidak terdaftar";
}

?>

</body>
</html>