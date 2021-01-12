<?php
  include 'conn.php';
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

  <title>Enrolled Students</title>
  <link rel = "icon" href ="img/home.png">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>


  <link href="css/simple-sidebar.css" rel="stylesheet">
  <link rel="stylesheet" href="css/home.css">
  <style>
    .kebab
    {
      position:relative;
      top: 40px;
      left:-70px
    }
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
                <a class="dropdown-item" href="teacher_home.php">Home</a>
                <a class="dropdown-item" href="#">Details</a>
                <a class="dropdown-item" href="logout.php">Logout</a>
              </div>
            </li>
          </ul>
        </div>
      </nav>

      <div class="container-fluid" style="background-image: linear-gradient(114deg, #F3F7F7, #CBEDED);height:100vh;">
      <?php
      $access_code=$_SESSION['exam_code'];
        $sql = "SELECT email FROM enrolled_exams where paper_code='$access_code'"; 
        $result = mysqli_query($conn,$sql);
        if(mysqli_num_rows($result) > 0){
          while ($row = mysqli_fetch_array($result))
          {
            $email=$row['email'];
            $sql_name = "SELECT name FROM users where email='$email'";
            $result_name = mysqli_query($conn,$sql_name);
            if(mysqli_num_rows($result_name) > 0){
              while ($row_name = mysqli_fetch_array($result_name))
              {
                $name=$row_name['name'];
      ?>
                <div class="container">
                  <div class="row">
                    <div class="col c-4 m-4 pl-5 ml-0 bg-light">
                      <h4><?php echo $name;?></h4>
                      <h4><?php echo $email;?></h4>
                    </div>
                    <div class="kebab">
                        <div class="dropdown">
                            <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img type="button" src="img/kebab.png" width="25px" height="25px">
                            </a>

                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                <a class="dropdown-item" onclick='edit_exam("<?php echo $access_code;?>")'>Remove Candidate</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" onclick='enrolled_students("<?php echo $access_code;?>")'>View Profile</a>
                            </div>
                        </div>
                    
                  </div>
                </div>
                <br>
      <?php
              }
          }
        }
      }
      ?>
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

<script>
    function create()
    {
      window.location.href = "create_exam.php";
    }
    function manage()
    {
      window.location.href = "exam_management.php";
    }
  </script>
</body>
</html>