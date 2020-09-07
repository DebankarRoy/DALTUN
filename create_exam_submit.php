<?php
    include "conn.php";
    session_start();
    if(isset($_POST['paper']) && isset($_POST['code']) && isset($_POST['time']) && isset($_POST['marks']) && isset($_POST['negative']) && isset($_POST['proctoring']))
    {
        $paper=mysqli_real_escape_string($conn,$_POST['paper']);
        $paper_code=mysqli_real_escape_string($conn,$_POST['code']);
        $marks=mysqli_real_escape_string($conn,$_POST['marks']);
        $start_time=$_POST['starttime'];
        $end_time=$_POST['endtime'];
       // $date=$_POST['examdate'];
        $date="13/07/2020";
        $code="46515";
        $negative=$_POST['negative'];
        $proctoring=$_POST['proctoring'];
        $instant_score=$_POST['instantscore'];
        $shuffle=$_POST['shuffle'];
        $_SESSION['paper_code']=$paper;
        $_SESSION['date']=$date;

        $sql ="INSERT INTO papers (paper, paper_code, paper_date, start_time, end_time, access_code, marks, negative, proctoring, instant_score, shuffling )
        VALUES('$paper', '$paper_code','$date', '$start_time', '$end_time', '$code', '$marks','$negative', '$proctoring', '$instant_score', '$shuffle' )";

        $result = mysqli_query($conn,$sql);
        if(!mysqli_query($conn,$sql)){
            die("Error : ".$sql."<br>".mysqli_error($conn));
        }
        

        
        
        
    }

?>