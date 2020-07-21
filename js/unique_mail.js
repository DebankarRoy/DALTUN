$('document').ready(function(){
    $('.user_exist').hide();
    $('.confirmpassword_dialouge').hide();
    $('#signemail').on('blur', function(){
    var email = $('#signemail').val(); 
    console.log(email);
    $.ajax({
        url: 'email_check.php',
        type: 'get',
        data: {
          'email' : email,
        },
        success: function(response){
            if (response == 'taken' ) 
            {
                $('#submit-btn').hide();
                //$('#signemail').val('');
                $('.user_exist').show();
                //alert("You already have an account on this email");
            }
            else
            {
                $('.user_exist').hide();
                $('#submit-btn').show();
            }
        }
    });
   });

   $( ".sign-up-form" ).submit(function () {
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

  });
