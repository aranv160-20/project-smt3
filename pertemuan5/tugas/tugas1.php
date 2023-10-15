<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas Satu</title>
</head>
<body>
    <?php
    $no = array (1, 2, 3, 4, 5);
    $nama = array ("Rozi","Reza","Aan","Siska","Juna");
    $jabatan = array ("Staf","Direktur","Manager","Sekretaris","Humas");
        
    $totalArray = count($no);
    echo "<table border='0px' bgcolor='#0099FF'>";
        echo "<tr bgcolor=' #E1E1E1' style='text-align:center'>";
        echo "<td style='color:red' width='35px'  ><b>NO</b></td>";
        echo "<td style='color:red'width='150px' ><b>NAMA</b></td>";
        echo "<td style='color:red' width='150px' ><b>JABATAN</b></td>";
        echo "</tr>";
    
    for($i = 0; $i < count($no); $i++){
        if($i % 2 == 0){
            echo "<tr bgcolor=' #FCF4E7'>";
                echo "<td style='text-align:center'>$no[$i]</td>";
                echo "<td>$nama[$i]</td>";
                echo "<td>$jabatan[$i]</td>";
            echo "</tr>";
        } else {
            echo "<tr bgcolor=' #F8E9CB'>";
                echo "<td style='text-align:center'>$no[$i]</td>";
                echo "<td>$nama[$i]</td>";
                echo "<td>$jabatan[$i]</td>";
            echo "</tr>";
    }
    
    }    
    echo "</table>";
    ?>
    
</body>
</html>