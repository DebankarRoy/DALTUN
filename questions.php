<?php
    include 'conn.php';
    session_start();
    if(isset($_POST['option1']) && isset($_POST['option2']) && isset($_POST['option3']) && isset($_POST['option4']))
    {
        $opt1=mysqli_real_escape_string($conn,$_POST['option1']);
        $opt2=mysqli_real_escape_string($conn,$_POST['option2']);
        $opt3=mysqli_real_escape_string($conn,$_POST['option3']);
        $opt4=mysqli_real_escape_string($conn,$_POST['option4']);
        $qstn=mysqli_real_escape_string($conn,$_POST['question']);
        $ans=mysqli_real_escape_string($conn,$_POST['radiooption']);
        $paper_code=$_SESSION['exam_code'];
        $paper_date=$_SESSION['date'];
        $sql = "INSERT INTO questions (question,option1,option2,option3,option4,answer,paper_code,paper_date)
            VALUES('$qstn','$opt1','$opt2','$opt3','$opt4','$ans', '$paper_code', '$paper_date')";
            
        if(!mysqli_query($conn,$sql)){
            die("Error : ".$sql."<br>".mysqli_error($conn));
        }
        echo "Question Successfully Added";
    
    exit;
    mysqli_close($conn);
    }

    if(isset($_POST['readRecordQuestion']))
    {
        $access_code=$_SESSION['exam_code'];
        $sql = "SELECT * FROM questions where paper_code='$access_code'"; 
        $result = mysqli_query($conn,$sql);

        if(mysqli_num_rows($result) >0){
            ?>
            <h4>Questions</h4>
            <?php
            while ($row = mysqli_fetch_array($result)) {
                $id=$row['id'];
                $opt1=$row['option1'];
                $opt2=$row['option2'];
                $opt3=$row['option3'];
                $opt4=$row['option4'];
                $qstn=$row['question'];
                $ans=$row['answer'];
                
        ?>
        <div class="row p-3 d-block" style="background-color: white;-webkit-box-shadow: 0px 0px 15px 5px rgba(0,0,0,0.14);
-moz-box-shadow: 0px 0px 15px 5px rgba(0,0,0,0.14);
box-shadow: 0px 0px 15px 5px rgba(0,0,0,0.14); border-radius: 10px 10px 10px 10px;">
            <h5><?php echo "Q.".$qstn;?></h5>
            <span><?php echo "1.".$opt1;?></span>
            <span class="pl-5"><?php echo "2.".$opt2;?></span>
            <br>
            <span><?php echo "3.".$opt3;?></span>
            <span class="pl-5"><?php echo "4.".$opt4;?></span>
            <br>
            <span>ans:<?php echo $ans;?></span>
            <br>
            <img src="img/bin.png" onclick="deleteQuestion(<?php echo $id;?>)">
        </div>
        <br>
        <?php
            }
        }
    }

    if(isset($_POST['deleteid'])){

        $question_id = $_POST['deleteid']; 
        $deletequery = " delete from questions where id ='$question_id' ";
        if (!mysqli_query($conn,$deletequery)) {
            die("Error : ".$sql."<br>".mysqli_error($conn));
        }
        echo("deletion sucessful");
    }
?>