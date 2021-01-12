<?php
include 'conn.php';
session_start();
if(isset($_POST['examcode'])){
    $_SESSION['exam_code']=$_POST['examcode'];
}
if(isset($_POST['deletecode'])){
    $exam_code=$_POST['deletecode'];
    
    $sql = "delete FROM papers where access_code = '$exam_code'"; 
    if(!mysqli_query($conn,$sql)){
        die("Error : ".$sql."<br>".mysqli_error($conn));
    }
    echo "Paper Successfully Deleted";
    $sql = "delete FROM questions where paper_code = '$exam_code'"; 
    if(!mysqli_query($conn,$sql)){
        die("Error : ".$sql."<br>".mysqli_error($conn));
    }
    echo "Questions Successfully Deleted";
}

?>
