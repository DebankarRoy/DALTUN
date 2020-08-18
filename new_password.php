<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/login.css" />
    <link rel = "icon" href ="img/set.png">
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
      top: 75%;
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
        top:300px;
        left:0px;
        color:#444444;
        display: none;
      }
      .mbl-view{
        color:#444444;
        border:2px solid #444444 !important;
      }
    }
    </style>
    <title>New Password</title>
  </head>
  <body>
    <div class="container">
      <!--Sign in-->
      <div class="forms-container">
        <div class="signin-signup">
            <form action="reset_password.php" class="set-password-form" enctype="multipart/form-data" method="POST">
                <h2 class="title">Set Your Password</h2>
                <div class="input-field">
                <i class="fas fa-lock"></i>
                <input type="password" placeholder="Password" id="password" name="newpassword" required/>
                </div>
                <div class="input-field">
                <i class="fas fa-lock"></i>
                <input type="password" id="confirmpassword" name="confirmpassword" placeholder="Confirm Password" required />
                </div>
                <div class="confirmpassword_dialouge" style="color:red">
                Password and Confirm Password must be same !!
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
              <h3 style="padding-bottom: 10px;color:white">Hello User<?php ?></h3>
            </div>
          </div>
        </div>    
    </div>

    <script
      src="https://kit.fontawesome.com/64d58efce2.js"
      crossorigin="anonymous"
    ></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" 
    integrity="sha256-4+XzXVhsDmqanXGHaHvgh1gMQKX40OUvDEBTu8JcmNs=" 
    crossorigin="anonymous">
    </script>
    <script>
        $('.confirmpassword_dialouge').hide();
        $( ".set-password-form" ).submit(function () {
        var pass = $('#password').val();
        var confpass= $('#confirmpassword').val();
        if(pass === confpass)
        {
            $('.confirmpassword_dialouge').hide();
            return true;
        }
        else
        {
            $('.confirmpassword_dialouge').show();
            return false;
        }
    });

    </script>
  </body>
</html>
