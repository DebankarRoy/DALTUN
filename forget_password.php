<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/login.css" />
    <link rel = "icon" href ="img/reset.png">
    <style>
    .daltun_logo{
      width:max-content;
      font-size: 50px;
      font-weight: 800;
      /*margin: 15px;*/
      position:relative;
      top: -350px !important;
      left: 150px !important;
    }

    .log-in{
        position:relative;
        top:-200px;
        left:120px;
        color:#444444;
      }

    .container:before{
      z-index:4;
    }
    .left-panel{
      position:relative;
      left:-100px;
    }
    
    @media (max-width: 700px) {
      form.sign-in-form {
      position: relative;
      top: -300px;
      }
      .signin-signup {
      width: 100%;
      top: 95%;
      }
      .daltun_logo{
      position:relative;
      top: 0px !important;
      left: 0px !important;
    }
      
      .left-panel{
      position:unset;
    }
      .log-in{
        position:relative;
        top:360px;
        left:0px;
        color:#444444;
      }
      .mbl-view{
        color:#444444;
        border:2px solid #444444 !important;
      }
    }
    </style>
    <title>Forgot Password</title>
  </head>
  <body>
    <div class="container">
      <!--Sign in-->
      <div class="forms-container">
        <div class="signin-signup">
          <form action="reset_password.php" class="sign-in-form" enctype="multipart/form-data" method="POST">
              <h2 class="title">Forgot Password?</h2>
              <div class="input-field">
                <i class="fas fa-user"></i>
                <input type="email" placeholder="Enter Your Email" name="email" required/>
              </div>
              <input type="submit" value="Submit" class="btn solid" />
          </form>
        </div>
      </div>
    </div>

      
    <div class="panels-container">
        <div class="panel left-panel">
          <div class="content">
            <div class="daltun_logo">
              D A L T U N
            </div>
            <div class="log-in">
              <h3 style="padding-bottom: 10px;">Log in ?</h3>
              <button class="btn transparent mbl-view" id="sign-up-btn" 
              onclick="window.location.href='login.php';">
                Sign in
              </button>
            </div>
          </div>
        </div>    
    </div>

    <script
      src="https://kit.fontawesome.com/64d58efce2.js"
      crossorigin="anonymous"
    ></script>
    
  </body>
</html>
