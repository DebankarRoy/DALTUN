<?php
session_start();
if(isset($_POST['examcode'])){
    $_SESSION['exam_code']=$_POST['examcode'];
}
?>
