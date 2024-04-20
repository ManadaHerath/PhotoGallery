<?php
     $servername = "localhost";
     $username = "root";
     $password = "";
     $dbname = "photography";

     // Create connection
     $conn ="";
     try{
          $conn = mysqli_connect($servername, $username, $password, $dbname);
     }catch(mysqli_sql_exception $e){
          echo "Connection failed: " . $e->getMessage();
        
    }

?>