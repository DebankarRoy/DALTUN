<?php
    include 'conn.php';
    if(isset($_POST['option1']) && isset($_POST['option2']) && isset($_POST['option3']) && isset($_POST['option4']))
    {
        $opt1=mysqli_real_escape_string($conn,$_POST['option1']);
        $opt2=mysqli_real_escape_string($conn,$_POST['option2']);
        $opt3=mysqli_real_escape_string($conn,$_POST['option3']);
        $opt4=mysqli_real_escape_string($conn,$_POST['option4']);
        $qstn=mysqli_real_escape_string($conn,$_POST['question']);
        $ans=mysqli_real_escape_string($conn,$_POST['radiooption']);
        $exam_name="ds";
        $sql = "INSERT INTO $exam_name (question,option1,option2,option3,option4,answer)
            VALUES('$qstn','$opt1','$opt2','$opt3','$opt4','$ans')";
            
        if(!mysqli_query($conn,$sql)){
            die("Error : ".$sql."<br>".mysqli_error($conn));
        }
        echo "Question Successfully Added";
    
    exit;
    mysqli_close($conn);
    }

    if(isset($_POST['readRecordQuestion']))
    {
        $exam_name="ds";
        $sql = "SELECT * FROM $exam_name "; 
        $result = mysqli_query($conn,$sql);

        if(mysqli_num_rows($result) > 0){
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
        <div class="row p-3 d-block" style="background-color: white;">
            <h5><?php echo "Q.".$qstn;?></h5>
            <span><?php echo "1.".$opt1;?></span>
            <span class="pl-5"><?php echo "2.".$opt2;?></span>
            <br>
            <span><?php echo "3.".$opt3;?></span>
            <span class="pl-5"><?php echo "4.".$opt4;?></span>
            <br><br>
            <img src="img/bin.png" onclick="">
        </div>
        <br>
        <?php
            }
        }
    }
?>