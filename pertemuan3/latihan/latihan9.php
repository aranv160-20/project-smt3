<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EXAMPLE BREAK</title>
</head>
<body>
    
<?php

$x = 1;
while($x <= 5){
    if ($x==3){
        break;
    }
    echo "Nilai  x :".$x."<br/>";
    $x++;
}

?>

</body>
</html>