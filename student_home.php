<?php
  session_start();
  if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true)
    {
      $flag=1;
      if ($_SESSION['login_type'] =='teacher')
        header("Location: teacher_home.php");
    }
  else
    header("Location: login.php");

?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <title>Home</title>
  <link rel = "icon" href ="img/home.png">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>


  <link href="css/simple-sidebar.css" rel="stylesheet">
  <link rel="stylesheet" href="css/home.css">
</head>

<body>

  <div class="d-flex" id="wrapper">

    <!-- Sidebar -->
    <div class="bg-light border-right" id="sidebar-wrapper">
      <div class="sidebar-heading"><?php echo $_SESSION['first_name'];?></div>
      <div class="list-group list-group-flush">
        <a href="#" class="list-group-item list-group-item-action bg-light">Home</a>
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
        
        <img src="img/menu.png" id="menu-toggle" style="height:25px;padding-left:5px;">
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
                <a class="dropdown-item" href="#">Home</a>
                <a class="dropdown-item" href="#">Profile</a>
                <a class="dropdown-item" href="logout.php">Logout</a>
              </div>
            </li>
          </ul>
        </div>
      </nav>

      <div class="container-fluid" style="background-image: linear-gradient(114deg, #F3F7F7, #CBEDED);height:100vh;">
        <div class="triangle-left"></div>
        <div class="triangle-right"></div>
        <div class="triangle-left-up"></div>
        <div class="triangle-right-up"></div>
        <div class="padding-top"></div>
        <div class="row box">
          <div class="col box-child" data-toggle="modal" data-target="#exampleModalCenter">
            <img src="img/registration.png" class="logo-for-home">
            <div class="logo-title">Enroll</div>
          </div>
          <div class="col box-child">
            <img src="img/upcoming.png" class="logo-for-home">
            <div class="logo-title">Upcoming Exams</div>
          </div>
          <div class="col box-child">
            <img src="img/result.png" class="logo-for-home">
            <div class="logo-title">Results</div>
          </div>
        </div> 
      </div>
    </div>
    <!-- /#page-content-wrapper -->

  </div>
  <!-- /#wrapper -->


  <!--modal for add code -->

<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header enrollHeader">
        <div class="modal-title" id="enrollExam"><h5>Enroll Exam</h5></div>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <h5 class="p-1">Enter the code:</h5>
        <form>
          <input type="text" name="code" id="code_for_exam" autocomplete="off">
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>


  <!-- Menu Toggle Script -->
  <script>
    $("#menu-toggle").click(function(e) {
      e.preventDefault();
      $("#wrapper").toggleClass("toggled");
    });
  </script>

</body>

</html>
