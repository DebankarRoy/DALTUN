<?php 
  include "conn.php";
  if(!$conn){
    die("connection failed : ".mysqli_connect_error());
  }

  if ($_GET['email']!="")
  {
        $email = $_GET['email'];
        $email=mysqli_real_escape_string($conn,$_GET['email']);
    
        $sql = "SELECT * FROM users WHERE email='$email'";
        $results = mysqli_query($conn, $sql);
        if (mysqli_num_rows($results) > 0) 
        {
            echo "taken";	
        }
        else
        {
            echo 'not_taken';
        }
    }
	exit(); 
?>