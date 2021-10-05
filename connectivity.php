<?php  
    $con = mysqli_connect("localhost","root","","DatabaseName");

    if(!$db)
    {
        die("Connection / database error " . mysqli_connect_error());
    }
?> 
