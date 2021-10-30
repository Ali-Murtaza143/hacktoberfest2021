<?php  
    $con = mysqli_connect("localhost","root","","DatabaseName");

        // Check connection
    if ($con->connect_error) {
      die("Connection failed: " . $con->connect_error);
    }
    echo "Connected successfully";
?> 
