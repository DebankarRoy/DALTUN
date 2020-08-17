<?php
  session_start();
  if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true)
  {
    echo $_SESSION['loggedin'];
    if($_SESSION['login_type'] =='student')
      header("Location: student_home.php");
    else
    header("Location: teacher_home.php");
  }

  include "conn.php";

  if(isset($_POST['email']))
  {
    $email=mysqli_real_escape_string($conn,$_POST['email']);
    //echo $email; 
    $sql = "SELECT * FROM users WHERE email='$email'";
        $results = mysqli_query($conn, $sql);
        if (mysqli_num_rows($results) > 0) 
        {
            //send mail to user regarding password reset
            $_SESSION['Password_Reset']=1;
            header('Location: login.php');
        }
  }

  if(isset($_POST['password']))
  {
    //set new password
  }
?>