<?php
    include "conn.php";
    session_start();
    if(isset($_POST['paper']) && isset($_POST['code']) && isset($_POST['time']) && isset($_POST['marks']) && isset($_POST['negative']) && isset($_POST['proctoring']))
    {
        $paper=mysqli_real_escape_string($conn,$_POST['paper']);
        $paper_code=mysqli_real_escape_string($conn,$_POST['code']);
        $marks=mysqli_real_escape_string($conn,$_POST['marks']);
        $time=mysqli_real_escape_string($conn,$_POST['time']);
        //$date=$_POST['date'];
        $date="13/07/2020";
        $code="46515";
        $negative=$_POST['negative'];
        $proctoring=$_POST['proctoring'];
        $instant_score=$_POST['instantscore'];
        $shuffle=$_POST['shuffle'];
        $_SESSION['paper_code']=$paper;
        $_SESSION['date']=$date;

        $sql ="INSERT INTO papers (paper, paper_code, paper_date, fulltime, access_code, marks, negative, proctoring, instatnt_score, shuffling )
        VALUES('$paper', '$paper_code','$date', '$time', '$code', '$marks','$negative', '$proctoring', '$instant_score', '$shuffle' )";

        $result = mysqli_query($conn,$sql);
        

        
        
        
    }

?>