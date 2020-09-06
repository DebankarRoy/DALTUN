<?php
  session_start();
  if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true)
    {
      $flag=1;
      if ($_SESSION['login_type'] =='student')
        header("Location: student_home.php");
    }
  else
    header("Location: login.php");
    
?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <title>Create Exams</title>

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

  
  <link href="css/exams.css" rel="stylesheet">
  <link href="css/simple-sidebar.css" rel="stylesheet">
</head>

<body>

  <div class="d-flex" id="wrapper">

    <!-- Sidebar -->
    <div class="bg-light border-right" id="sidebar-wrapper">
      <div class="sidebar-heading"><?php echo $_SESSION['first_name'];?></div>
      <div class="list-group list-group-flush">
        <a href="teacher_home.php" class="list-group-item list-group-item-action bg-light">Home</a>
        <a href="#" class="list-group-item list-group-item-action bg-light">Profile</a>
        <a href="logout.php" class="list-group-item list-group-item-action bg-light">Logout</a>
        <a href="#" class="list-group-item list-group-item-action bg-light">Extra</a>
        <a href="#" class="list-group-item list-group-item-action bg-light">Extra</a>
        <a href="#" class="list-group-item list-group-item-action bg-light">Extra</a>
      </div>
    </div>
    <!-- /#sidebar-wrapper -->

    <!-- Page Content -->
    <div id="page-content-wrapper">

      <nav class="navbar navbar-expand-lg nav-clr border-bottom p-0">
        
        <img src="img/menu.png" id="menu-toggle" style="height:25px;padding-left:5px;top:0px;">
        <div class="logo ml-5">
          <div class="logo">D A L T U N</div>
        </div>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle profile_name mr-5"  id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <span class="profile_name"><?php echo $_SESSION['first_name'];?></span>
              </a>
              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="teacher_home.php">Home</a>
                <a class="dropdown-item" href="#">Profile</a>
                <a class="dropdown-item" href="logout.php">Logout</a>
              </div>
            </li>
          </ul>
        </div>
      </nav>

      <div class="container-fluid" style="background-image: linear-gradient(114deg, #F3F7F7, #CBEDED);display:flex;">
        <div class="add_ques p-3">
          <h4>Add Question</h4>
          <form id = "add_question" action="" method="post">
            <textarea id="question" name="question" placeholder="Enter you question" rows="4" cols="60" style="resize: none;" required></textarea>
            <br><br>
            <span class="ml-1 mr-5">correct ans</span> <span class="ml-5">answers</span> <br>
            <input type="radio" name="radiooption" value="option1" class="ml-3 mr-5"/>
            <input type="text" name="option1" placeholder="option1" class="m-1" value="" autocomplete="off" required/><br><br>
            <input type="radio" name="radiooption" value="option2" class="ml-3 mr-5"/>
            <input type="text" name="option2" placeholder="option2" class="m-1" value="" autocomplete="off" required/><br><br>
            <input type="radio" name="radiooption" value="option3" class="ml-3 mr-5"/>
            <input type="text" name="option3" placeholder="option3" class="m-1" value=""   autocomplete="off" required/><br><br>
            <input type="radio" name="radiooption" value="option4" class="ml-3 mr-5"/>
            <input type="text" name="option4" placeholder="option4" class="m-1" value="" autocomplete="off" required/><br><br>
            <button class="btn btn-primary ml-3" onclick="addQuestion()">Submit</button>
          </form>
        </div>
        <div class="question_viewer p-4">
        </div>
      </div>
    </div>
    <!-- /#page-content-wrapper -->

  </div>
  <!-- /#wrapper -->


  <!-- Menu Toggle Script -->
  
  <script src="js/jQueryValidation.js"></script>
  <script src="js/questions.js"></script>
  <script>
    $("#menu-toggle").click(function(e) {
      e.preventDefault();
      $("#wrapper").toggleClass("toggled");
    });
  readRecordQuestion();
  </script>

</body>

</html>
