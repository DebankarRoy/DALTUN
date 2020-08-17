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

  <title>Home</title>
  <link rel = "icon" href ="img/home.png">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>


  <link href="css/simple-sidebar.css" rel="stylesheet">
  <link rel="stylesheet" href="css/home.css">
  <style>
    @media (max-width: 600px){
      .padding-top{
        height: 15vh;
      }
    }
    @media (min-width: 600px){
      .box-child{
        margin-left: 15vh;
        margin-right: 15vh;
      }
    }
  </style>
</head>

<body>

  <div class="d-flex" id="wrapper">

    <!-- Sidebar -->
    <div class="bg-light border-right" id="sidebar-wrapper">
      <div class="sidebar-heading"><?php echo $_SESSION['first_name'];?> </div>
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
                <a class="dropdown-item" href="#">Details</a>
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
          <div class="col box-child">
            <div class="center"><img src="img/exam.png" class="logo-for-home" style="margin-left: 15px;"></div>
            <div class="logo-title">Create Exam</div>
          </div>
          <div class="col box-child">
            <div class="center"><img src="img/research.png" class="logo-for-home"></div>
            <div class="logo-title">Exam Management</div>
          </div>
          
        </div> 
      </div>
    </div>
    <!-- /#page-content-wrapper -->

  </div>
  <!-- /#wrapper -->


  <!-- Menu Toggle Script -->
  <script>
    $("#menu-toggle").click(function(e) {
      e.preventDefault();
      $("#wrapper").toggleClass("toggled");
    });
  </script>

</body>

</html>
