<?php
include "conn.php";

//Log-in
if(isset($_POST['email']) && isset($_POST['password']) && isset($_POST['type']))
    {
        $type=$_POST['type'];

        $password=mysqli_real_escape_string($conn,$_POST['password']);
        $email=mysqli_real_escape_string($conn,$_POST['email']);

        $sql = "select * from users where email='$email'"; 
        
        $result = mysqli_query($conn, $sql);
        $row=mysqli_fetch_array($result);

        if ($row['email']!="" && $row['type']==$type) 
        {
            $db_pass=$row['password'];
            $verify=password_verify($password, $db_pass);
            if($verify)
            {
                session_start();
                $_SESSION['loggedin']=true;    
                $_SESSION['id'] = $row['id'];
                $_SESSION['name'] = $row['name'];
                //header('Location: home.php');
                echo "coming home";
                exit;
            }
            else
            {
                echo "wrong password";
                //header('Location: login.php');
                exit;
            }
        }
        else
        {
            echo "Check details properly";
            //header('Location: login.php');
            exit;
        }
        
    }

    //Sign-up
    if(isset($_POST['signname']) && isset($_POST['signemail']) && isset($_POST['signpassword']) && isset($_POST['signnumber']) && isset($_POST['signtype']))
    {
        $type=$_POST['signtype'];
        $name=mysqli_real_escape_string($conn,$_POST['signname']);
        $password=mysqli_real_escape_string($conn,$_POST['signpassword']);
        $email=mysqli_real_escape_string($conn,$_POST['signemail']);
        $number=mysqli_real_escape_string($conn,$_POST['signnumber']);
        $pass=password_hash($password, PASSWORD_BCRYPT);
        $token=bin2hex(random_bytes(18));

        $sql = "INSERT INTO users (name, email, number, password, type, status, token )
                VALUES('$name', '$email', '$number', '$pass','$type' , 'active', '$token')";
        $result=mysqli_query($conn,$sql);
        if(!$result){
            die("Error : ".$sql."<br>".mysqli_error($conn));
        }

        $sql = "select * from users where email='$email'"; 
        $result = mysqli_query($conn, $sql);
        if(!$result){
            die("Error : ".$sql."<br>".mysqli_error($conn));
        }
        while ($row=mysqli_fetch_array($result)) {
            session_start();
            $_SESSION['loggedin']=true;    
            $_SESSION['id'] = $row['id'];
            $_SESSION['name'] = $row['name'];
            //header('Location: home.php');
            echo "Resgistration successful";
            exit;
        } 
         
    }
?>