<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script
      src="https://kit.fontawesome.com/64d58efce2.js"
      crossorigin="anonymous"
    ></script>
    <link rel="stylesheet" href="css/style.css" />
    <title>Login</title>
  </head>
  <body>
    <div class="container">
      <!--Sign in-->
      <div class="forms-container">
        <div class="signin-signup">
          <form action="register_submit.php" class="sign-in-form" enctype="multipart/form-data" method="POST">
            <h2 class="title">Sign in</h2>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" placeholder="Email" name="email" required/>
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" placeholder="Password" name="password" required/>
            </div>
            <div class="radio-group">
                  <label class="radio">
              <input type="radio" name="type" value="student" required>
              student
              <span></span>
                  </label>
            <label class="radio">
              <input type="radio" name="type" value="Teacher">
              Teacher
              <span></span>
                  </label>
              </div>
            <input type="submit" value="Login" class="btn solid" />
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
              <input type="text" placeholder="Username" name="signname" required/>
            </div>
            <div class="input-field">
              <i class="fas fa-mobile"></i>
              <input type="text" placeholder="Phone no." name="signnumber" pattern="[0-9]{10}"
               required/>
            </div>
            <div class="input-field">
              <i class="fas fa-envelope"></i>
              <input type="email" placeholder="Email" name="signemail" required/>
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" placeholder="Password" name="signpassword" required/>
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" placeholder="Confirm Password" required />
            </div>
            <div class="radio-group">
            <label class="radio">
              <input type="radio" name="signtype" value="student" required>
              student
              <span></span>
            </label>
            <label class="radio">
              <input type="radio" name="signtype" value="Teacher">
              Teacher
              <span></span>
            </label>
            </div>
            <input type="submit" class="btn" value="Sign up" />
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

    <script src="js/app.js"></script>
  </body>
</html>
