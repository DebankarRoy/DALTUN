<?php
    include "conn.php";
    session_start();
    //enrolled exams for students
    if(isset($_POST['readEnrolledExams'])) {
        $student_email=$_SESSION['email'];
        $sql = "SELECT * FROM enrolled_exams where email = '$student_email'"; 
        $result = mysqli_query($conn,$sql);
        if(mysqli_num_rows($result) > 0){
            while ($row = mysqli_fetch_array($result)) {
                $paper=$row['enrolled_paper'];
                $paper_code=$row['paper_code'];
                $date=$row['paper_date'];
                $start_time=date("H:i",strtotime($row['start_time']));
                $end_time=date("H:i",strtotime($row['end_time']));
                //$date=date('d/m/Y',strtotime($date));
                 ?>
                <div class="card">
                    <div class="card-body m-3">
                        <h4 class="card-title"><?php echo $paper."(".$paper_code.")"; ?></h4>
                        <p class="card-text">Date:<?php echo $date;?><br>Time:<?php echo $start_time;?>-<?php echo $end_time;?></p>
                        <a href="#" class="btn btn-primary">Start Exam</a>
                        <a href="#" class="btn btn-outline-danger">Un-register</a>
                    </div>
                </div>
                 <?php
            }
        } 
    }

    // Results

    if(isset($_POST['readExamsResults'])) {
        $student_email=$_SESSION['email'];
        $sql = "SELECT * FROM enrolled_exams where email = '$student_email'"; 
        $result = mysqli_query($conn,$sql);
        if(mysqli_num_rows($result) > 0){
            while ($row = mysqli_fetch_array($result)) {
                $paper=$row['enrolled_paper'];
                $paper_code=$row['paper_code'];
                $date=$row['paper_date'];
                $start_time=date("H:i",strtotime($row['start_time']));
                $end_time=date("H:i",strtotime($row['end_time']));
                $score=$row['score'];
                 ?>
                <div class="card">
                    <div class="card-body m-3">
                        <h4 class="card-title"><?php echo $paper."(".$paper_code.")"; ?></h4>
                        <p class="card-text">Date:<?php echo $date;?><br>Time:<?php echo $start_time;?>-<?php echo $end_time;?></p>
                        <p class="card-text">FM:</p>
                        <p class="card-text">Score:<?php echo $score;?><br></p>
                    </div>
                </div>
                 <?php
            }
        } 
    }

    //enrolled exams for teachers

    if(isset($_POST['readEnrolledExamsTeacher'])) {
        $teacher_email=$_SESSION['email'];
        $sql = "SELECT * FROM papers where teacher_email = '$teacher_email'"; 
        $result = mysqli_query($conn,$sql);
        if(mysqli_num_rows($result)>0){
            while ($row = mysqli_fetch_array($result)) {
                $paper=$row['paper'];
                $paper_code=$row['paper_code'];
                $date=$row['paper_date'];
                $start_time=date("H:i",strtotime($row['start_time']));
                $end_time=date("H:i",strtotime($row['end_time']));
                //$date=date('d/m/Y',strtotime($date));
                 ?>
                <div class="card">
                    <div class="card-body col-10 ">
                        <h4 class="card-title"><?php echo $paper."(".$paper_code.")"; ?></h4>
                        <p class="card-text">Date:<?php echo $date;?><br>Time:<?php echo $start_time;?>-<?php echo $end_time;?></p>
                    </div>
                    <div class="col-2 kebab">
                        <div class="dropdown">
                            <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img type="button" src="img/kebab.png" width="25px" height="25px">
                            </a>

                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                <a class="dropdown-item" href="#">edit exam</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">enrolled students</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">remove exam</a>
                            </div>
                        </div>
                    </div>

                </div>
                 <?php
            }
        } 
    }
?>