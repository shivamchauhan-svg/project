<?php
         $dbhost = 'localhost:3306';
         $dbuser = 'root';
         $dbpass = '';
         $conn = mysql_connect($dbhost, $dbuser, $dbpass);
         
         if(! $conn ) {
            die('Could not connect: ' . mysql_error());
         }
         echo 'Connected successfully';
         mysql_close($conn);
      ?>