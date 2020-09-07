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

  <title>Create Exam</title>

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

  <link href="css/simple-sidebar.css" rel="stylesheet">
  <link rel="stylesheet" href="css/datetheme.css" type="text/css">
  <link rel="stylesheet" href="css/clockpicker.css" type="text/css">
  <style>
    html,body{
      overflow-y: visible !important;
      overflow-x: visible !important;
    }
  </style>
</head>

<body>

  <div class="d-flex" id="wrapper">

    <!-- Sidebar -->
    <div class="bg-light border-right" id="sidebar-wrapper">
      <div class="sidebar-heading"><?php echo $_SESSION['first_name'];?></div>
      <div class="list-group list-group-flush">
        <a href="#" class="list-group-item list-group-item-action bg-light">Home</a>
        <a href="#" class="list-group-item list-group-item-action bg-light">Profile</a>
        <a href="#" class="list-group-item list-group-item-action bg-light">Logout</a>
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
                <a class="dropdown-item" href="#">Logout</a>
              </div>
            </li>
          </ul>
        </div>
      </nav>

        <div class="container-fluid">
            <div class="row m-5 border">
                <div class="row col-12 m-0 p-2 border-bottom">
                    <h4>EXAM MANAGEMENT</h4>
                </div>
                <div class="inner row col-12">
                    <div class="col-3 p-4 border">
                        Basics  
                    </div>
                    <div class="col-9 p-4 border">
                      <form action="create_exam_submit.php" method="POST">
                        <div class="form-row">
                          <div class="col p-3 ">
                            Paper Name
                            <input type="text" class="form-control" name="paper" placeholder="Ex: Data Structure" required>
                          </div>
                          <div class="col p-3">
                            Paper Code
                            <input type="text" class="form-control" name="code" placeholder="Ex: CS 201" required>
                          </div>
                        </div>
                        <div class="form-row">
                          <div class="col p-3">
                            Full Marks
                            <input type="text" class="form-control" name="marks" placeholder="100" required>
                          </div>
                          <div class="col p-3">
                            Date
                            <input type="text" id="date-input" class="form-control" name="examdate" placeholder="DD/MM/YYYY" required>
                          </div>
                        </div>
                        <div class="form-row">
                          <div class="col p-3">
                            Start Time
                            <input type="text" id="start_time-input"  class="form-control" name="starttime" placeholder="09.30" value="" autocomplete="off" required>
                          </div>
                          <div class="col p-3">
                            End Time
                            <input type="text" id="end_time-input"  class="form-control" name="endtime" placeholder="12.30" value="" autocomplete="off" required>
                          </div>
                        </div>
                    </div>
                    <div class="col-3 p-4 border">
                        Advance  
                    </div>
                    <div class="col-9 p-4 border">
                    <div class="form-row">
                          <div class="col p-3">
                            <h6>Allow instant Score view*</h6>
                            <div class="radio-group">
                                <label class="radio p-2">
                                    <input type="radio" name="instantscore" value="Yes" required>
                                    Yes
                                    <span></span>
                                </label>
                                <label class="radio p-2">
                                    <input type="radio" name="instantscore" value="No">
                                    No
                                    <span></span>
                                </label>
                            </div>
                          </div>
                          <div class="col p-3">
                            <h6>Negative marking*</h6>
                            <div class="radio-group">
                                <label class="radio p-2">
                                    <input type="radio" name="negative" value="Yes" required>
                                    Yes
                                    <span></span>
                                </label>
                                <label class="radio p-2">
                                    <input type="radio" name="negative" value="No" >
                                    No
                                    <span></span>
                                </label>
                            </div>
                          </div>
                        </div>
                      <div class="form-row">
                            <div class="col p-3">
                            Online Proctoring* :
                            <div class="radio-group">
                                  <label class="radio p-2">
                                      <input type="radio" name="proctoring" value="Yes" required>
                                      Yes
                                      <span></span>
                                  </label>
                                  <label class="radio p-2">
                                      <input type="radio" name="proctoring" value="No">
                                      No
                                      <span></span>
                                  </label>
                              </div>
                            </div>
                            <div class="col p-3">
                            Question shuffling* :
                            <div class="radio-group">
                                  <label class="radio p-2">
                                      <input type="radio" name="shuffle" value="Yes" required>
                                      Yes
                                      <span></span>
                                  </label>
                                  <label class="radio p-2">
                                      <input type="radio" name="shuffle" value="No">
                                      No
                                      <span></span>
                                  </label>
                              </div>
                            </div>
                      </div>
                    </div>
                </div>
            </div>
            <div class="form-row ml-5 mb-2 justify-content-center">
              <input type="submit" class="btn btn-primary mr-2">
              <button type="button" class="btn btn-danger ml-2">Danger</button>
            </div>
            </form>
        </div>
    </div>
    <!-- /#page-content-wrapper -->

  </div>
  <!-- /#wrapper -->

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous"></script>
    <script src="js/datedropper.pro.min.js"></script>
    <script src="js/clockpicker.js"></script>
    <script>
        $('#date-input').dateDropper({
      large:true,
      theme:'datetheme'
    });
    $('#start_time-input').clockpicker();
    $('#end_time-input').clockpicker();
  </script>

  <!-- Menu Toggle Script -->
  <script>
    $("#menu-toggle").click(function(e) {
      e.preventDefault();
      $("#wrapper").toggleClass("toggled");
    });
  </script>

</body>

</html>
