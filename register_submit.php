<?php
include "dbconn.php";
//Log-in
if(isset($_POST['email']) && isset($_POST['password']) && isset($_POST['type']))
    {
        $email = $_POST['email'];
        $password = $_POST['password'];
        $type=$_POST['type'];

        //$password=mysqli_real_escape_string($conn,$_POST['password']);
        //$email=mysqli_real_escape_string($conn,$_POST['email']);

        $pass=password_hash($password, PASSWORD_BCRYPT);

        $token=bin2hex(random_bytes(18));

        echo $email;
        echo("password= ".$pass."\n");
        echo($type);


        /*$sql = "INSERT INTO users (name, email, password, token, status)
                VALUES('$name', '$email', '$pass', '$token', 'active')";
        $result=mysqli_query($conn,$sql);
        if(!$result){
            die("Error : ".$sql."<br>".mysqli_error($conn));
        }

        while ($row=mysqli_fetch_array($result)) {
            session_start();
            $_SESSION['loggedin']=true;    
            $_SESSION['id'] = $row['id'];
            $_SESSION['name'] = $row['name'];
            header('Location: home.php');
            exit;
        }   */
    }

    //Sign-up
    if(isset($_GET['signname']) && isset($_GET['signemail']) && isset($_GET['signpassword']) && isset($_GET['signnumber']) && isset($_GET['signtype']))
    {
        //echo $_GET['signtype'];
        $name = $_GET['signname'];
        $email = $_GET['signemail'];
        $password = $_GET['signpassword'];
        $number= $_GET['signnumber'];
        $type=$_GET['signtype'];

        echo "coming";
        echo $name;
        echo $email;
        echo $password;
        echo $number;
        echo $type;

        /*$name=mysqli_real_escape_string($conn,$_GET['name']);
        $password=mysqli_real_escape_string($conn,$_GET['password']);
        $email=mysqli_real_escape_string($conn,$_GET['email']);*/

        $pass=password_hash($password, PASSWORD_BCRYPT);

        $token=bin2hex(random_bytes(15));

        /*$sql = "INSERT INTO users (name, email, password, token, status)
                VALUES('$name', '$email', '$pass', '$token', 'active')";
        $result=mysqli_query($conn,$sql);
        if(!$result){
            die("Error : ".$sql."<br>".mysqli_error($conn));
        }

        while ($row=mysqli_fetch_array($result)) {
            session_start();
            $_SESSION['loggedin']=true;    
            $_SESSION['id'] = $row['id'];
            $_SESSION['name'] = $row['name'];
            header('Location: home.php');
            exit;
        }  */ 
    }
?>