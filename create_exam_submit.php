<?php
    include "conn.php";
    session_start();
    if(isset($_POST['paper']) && isset($_POST['code']) && isset($_POST['eachmarks']) && isset($_POST['negative']) && isset($_POST['proctoring']))
    {
        $negative=$_POST['negative'];
        if($negative=="No")
            $negative_marks=0;
        else
            $negative_marks=$_POST['negative'];

        $c1=bin2hex(random_bytes(2));
        $c2=bin2hex(random_bytes(2));
        $c3=bin2hex(random_bytes(2));
        $code = $c1."-".$c2."-".$c3;
        $paper=mysqli_real_escape_string($conn,$_POST['paper']);
        $paper_code=mysqli_real_escape_string($conn,$_POST['code']);
        $marks=mysqli_real_escape_string($conn,$_POST['eachmarks']);
        $start_time=$_POST['starttime'];
        $end_time=$_POST['endtime'];
        $start_date=date('Y/m/d',strtotime($_POST['examdate']));
        $proctoring=$_POST['proctoring'];
        $instant_score=$_POST['instantscore'];
        $shuffle=$_POST['shuffle'];
        $email=$_SESSION['email'];

        $sql ="INSERT INTO papers (teacher_email,paper, paper_code, paper_date, start_time, end_time, access_code, each_marks, negative, negative_marks, proctoring, instant_score, shuffling )
        VALUES('$email', '$paper', '$paper_code','$start_date', '$start_time', '$end_time', '$code', '$marks','$negative', '$negative_marks', '$proctoring', '$instant_score', '$shuffle' )";

        //$result = mysqli_query($conn,$sql);
        if(!mysqli_query($conn,$sql)){
            die("Error : ".$sql."<br>".mysqli_error($conn));
        }
        else{
        $_SESSION['paper_code']=$paper_code;
        $_SESSION['date']=$start_date;
        $_SESSION['exam_code']=$code;
        header("Location: add_questions.php");
        exit();
        }
    }

?>