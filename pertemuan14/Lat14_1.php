<?php
        include "koneksi1.php"; 

        $q = mysqli_query ($koneksi, "SELECT * FROM user"); 
        echo "<form action=\"Lat14_2.php\" method=\"POST\"> 
        <input type=\"submit\" value=\"tambah user\"/></form>"; 

        echo "<table border=\"1\"> 
            <th>Username</th> 
            <th>Password</th> 
            <th>level</th> 
            <th>aksi</th>"; 
 
           while ($hasil = mysqli_fetch_array($q)) 
            echo "<tr> 
                <td>$hasil[username]</td> 
                <td>$hasil[password]</td> 
                <td>$hasil[level]</td> 
                <td><a href=\"Lat14_2.php?username=$hasil[username]&e=1\">Edit</a></td> 
            </tr>"; 
            echo "</table>"
 ?>
 