<?php
    $hostname = "localhost";
    $username = "root";
    $db_password = "";
    $db_name = "daltun";
    
    $conn = mysqli_connect($hostname, $username, $db_password, $db_name);
    if(!$conn){
        die("connection failed : ".mysqli_connect_error());
    }
?>