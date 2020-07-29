<?php
  session_start();
  if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true)
  {
    echo $_SESSION['loggedin'];
    if($_SESSION['login_type'] =='student')
      header("Location: student_home.php");
    else
    header("Location: teacher_home.php");
  }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/style.css" />
    <title id="title">Login</title>
    <link rel = "icon" href ="img/login.png">
  </head>
  <body>
    <div class="container">
      <!--Sign in-->
      <div class="forms-container">
        <div class="signin-signup">
          <form action="register_submit.php" 
          class="sign-in-form" enctype="multipart/form-data" method="POST">
            <h2 class="title">Sign in</h2>
            <div class="input-field">
              <i class="fas fa-envelope"></i>
              <input type="text" placeholder="Email" name="email" autocomplete="off" required />
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" placeholder="Password" name="password" autocomplete="off" required/>
            </div>
            <div class="radio-group">
                <label class="radio">
					<input type="radio" name="type" value="student" required>
					student
					<span></span>
				</label>
            	<label class="radio">
					<input type="radio" name="type" value="teacher">
					Teacher
					<span></span>
            	</label>
			</div>
            <input type="submit" value="Login" class="btn solid" />
			<div class="forgotten-account">
        <a href="forget_password.html" style="text-decoration: none">
          <span class="forgotten-account-style">forgot password?</span>
        </a>
			</div>
            <p class="social-text">Or Sign in with</p>
            <div class="social-media">
              <a href="#" class="social-icon">
                <i class="fab fa-google"></i>
              </a>
            </div>
          </form>

          <!--Sign up-->
          <form action="register_submit.php" class="sign-up-form" enctype="multipart/form-data" method="POST">
            <h2 class="title">Sign up</h2>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" placeholder="Username" name="signname" autocomplete="off" required/>
            </div>
            <div class="input-field">
              <i class="fas fa-mobile"></i>
              <input type="text" placeholder="Phone no." name="signnumber" pattern="[0-9]{10}"
              autocomplete="off" required/>
            </div>
            <div class="input-field">
              <i class="fas fa-envelope"></i>
              <input type="email" placeholder="Email" name="signemail" id="signemail" autocomplete="off" required/>
            </div>
            <div class="user_exist" style="color:red">
              user exists already on this email
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" placeholder="Password" id="password" name="signpassword" autocomplete="off" required/>
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" id="confirmpassword" name="confirmpassword" placeholder="Confirm Password" autocomplete="off" required />
            </div>
            <div class="confirmpassword_dialouge" style="color:red">
              Password and Confirm Password must be same !!
            </div>
            <div class="radio-group">
            <label class="radio">
              <input type="radio" name="signtype" value="student" required>
              student
              <span></span>
            </label>
            <label class="radio">
              <input type="radio" name="signtype" value="teacher">
              Teacher
              <span></span>
            </label>
            </div>
            <input type="submit" class="btn" id="submit-btn" value="Sign up" />
            <p class="social-text">Or Sign up with social platforms</p>
            <div class="social-media">
              <a href="#" class="social-icon">
                <i class="fab fa-google"></i>
              </a>
            </div>
          </form>
        </div>
      </div>
      
      <div class="panels-container">
        <div class="panel left-panel">
          <div class="content">
            <h3>New here ?</h3>
            <p>
              Just Create a New Account!!
            </p>
            <button class="btn transparent" id="sign-up-btn">
              Sign up
            </button>
          </div>
          <img src="img/log.svg" class="image" alt="" />
        </div>
        <div class="panel right-panel">
          <div class="content">
            <h3>One of us ?</h3>
            <p>
              Just Sign in!!
            </p>
            <button class="btn transparent" id="sign-in-btn">
              Sign in
            </button>
          </div>
          <img src="img/register.svg" class="image" alt="" />
        </div>
      </div>
    </div>

    <script
      src="https://kit.fontawesome.com/64d58efce2.js"
      crossorigin="anonymous"
    ></script>
    <script src="js/app.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" 
    integrity="sha256-4+XzXVhsDmqanXGHaHvgh1gMQKX40OUvDEBTu8JcmNs=" 
    crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
    <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
    <script src="js/unique_mail.js"></script>
  </body>
</html>

<script>
  $("#sign-up-btn").click(function() {
    newPageTitle = 'Signup'; 
    document.title = newPageTitle;
  });
  $("#sign-in-btn").click(function() {
    newPageTitle = 'login'; 
    document.title = newPageTitle;
  });
</script>
