<?php
    include "conn.php";
    session_start();
    $code=mysqli_real_escape_string($conn,$_GET['codeenroll']);
    
    $sql = "SELECT * FROM papers WHERE access_code='$code'";
        $results = mysqli_query($conn, $sql);
        if (mysqli_num_rows($results) > 0) 
        {
            while ($row=mysqli_fetch_array($results))
            {
                $paper=$row['paper'];
                $paper_code=$row['paper_code'];
                $start_time=$row['start_time'];
                $end_time=$row['end_time'];
                $start_date=$row['paper_date'];
                $email=$_SESSION['email'];

                $sql ="INSERT INTO enrolled_exams (email, enrolled_paper, paper_code, paper_date, start_time, end_time, score )
                VALUES('$email', '$paper', '$paper_code','$start_date', '$start_time', '$end_time', 'yet to give' )";

                if(!mysqli_query($conn,$sql)){
                    die("Error : ".$sql."<br>".mysqli_error($conn));
                }
                else
                    echo "correct";	
            }
        }
        else
        {
            echo 'incorrect';
        }
?>