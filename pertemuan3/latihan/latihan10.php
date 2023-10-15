<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EXAMPLE CONTINUE</title>
</head>
<body>
    
<?php

for($x=1; $x<=5 ;$x++){
    if($x == 3){
        continue;
    }
    echo "Nilai x : ".$x."<br/>";
}

?>
</body>
</html>