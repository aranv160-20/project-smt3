<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas Dua</title>
</head>
<body>
    <?php
    $no = array (1, 2, 3, 4, 5);
    $nama = array ("Rozi","Reza","Aan","Siska","Juna");
    $jabatan = array ("Staf","Direktur","Manager","Sekretaris","Humas");
     
    $totalArray = count($no);
    echo "<table border='0px' bgcolor='red'>";
        echo "<tr bgcolor='#555555' style='text-align:center'>";
            echo "<td style='color:white' width='35px' ><b>NO</b></td>";
            echo "<td style='color:white'width='150px' ><b>NAMA</b></td>";
            echo "<td style='color:white' width='150px' ><b>JABATAN</b></td>";
        echo "</tr>";

    $i=0;
    while($i<$totalArray){
        if($i % 2 == 0){
            echo "<tr bgcolor='#CDE9FE'>";
                echo "<td style='text-align:center'>$no[$i]</td>";
                echo "<td>$nama[$i]</td>";
                echo "<td>$jabatan[$i]</td>";
            echo "</tr>";
        } else {
            echo "<tr bgcolor='#FFFF9B'>";
                echo "<td style='text-align:center'>$no[$i]</td>";
                echo "<td>$nama[$i]</td>";
                echo "<td>$jabatan[$i]</td>";
            echo "</tr>";
    }
        $i++;
    }    
    echo "</table>";
    ?>
    
</body>
</html>
