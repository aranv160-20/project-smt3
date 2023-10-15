<?php
        $options = array( 
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, 
        PDO::ATTR_EMULATE_PREPARES => false 
        ); 
        
        $dbh = new PDO('mysql:host=localhost;dbname=mahasiswa_db', 'root', '');

?>