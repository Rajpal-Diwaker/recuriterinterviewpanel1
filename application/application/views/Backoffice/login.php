  <body class="be-splash-screen">
    <div class="be-wrapper be-login">
      <div class="be-content">
        <div class="main-content container-fluid">
          <div class="splash-container">
            <form method="POST" action="<?php echo(ADMINURL.'Admin/login'); ?>" class="text-left form-validate">
            <div class="card card-border-color card-border-color-primary">
              <div class="card-header"><img class="logo-img" src="<?php echo(ADMIN.'/img/logo.png'); ?>" alt="logo" width="102" height="27"><span class="splash-description">Please enter your admin information.</span></div>
              <div class="card-body">

                  <div class="form-group">
                    <input class="form-control" id="email" type="email" placeholder="Email" autocomplete="off" name="email" required data-msg="Please enter your email" >
                  </div>
                  <div class="form-group">
                    <input class="form-control" id="password" type="password" name="password" placeholder="Password" required data-msg="Please enter your password">
                  </div>
                  <div class="form-group row login-tools">
                    <div class="col-6 login-remember">
                      <!--
                      <label class="custom-control custom-checkbox">
                        <input class="custom-control-input" type="checkbox"><span class="custom-control-label">Remember Me</span>
                      </label> -->
                    </div>
                    <div class="col-6 login-forgot-password"><a data-toggle="modal" href="#myModal" class="forgot-pass">Forgot Password?</a></div>
                  </div>
                  <div class="form-group login-submit">
                    <input type="submit" value="Sign me in" class="btn btn-primary">
                    <?php if(!empty($msg)){   ?>
                      <div id="login-error" class="is-invalid invalid-feedback" style="display: block;"><?php echo $msg; ?></div>
                    <?php } ?>
                  </div>
              </div>
            </div>
            </form>
          </div>
        </div>
      </div>
    </div>


  <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal" class="modal fade">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
         <h4 class="modal-title">Forgot Password ?</h4>
         <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button> 
        </div>
        <form id="forgotpassword-form" role="form" action="" method="POST">
          <div class="modal-body">
            <p>Enter your e-mail address below to reset your password.</p>
            <input type="text" id="forgotemail" name="forgotemail" placeholder="Email" autocomplete="off" class="form-control placeholder-no-fix" onkeyup="validatePassword('forgotemail')">
            <span class="small" id="forgotemail-error" style="color: red;"></span>

          </div>
          <div class="modal-footer">
          <p class="red" id="error-msg" style="color: red;text-align:center;"></p>
          <p class="green" id="success-msg" style="color: green;text-align:center;"></p>
            <button data-dismiss="modal" class="btn btn-default" type="button">Cancel</button>
            <button id="forgot-password" class="btn btn-primary" type="button">Submit</button>
          </div>
        </form>
      </div>
    </div>
  </div>  

    <script src="<?php echo(ADMIN.'/lib/jquery/jquery.min.js'); ?>" type="text/javascript"></script>
    <script src="<?php echo(ADMIN.'/lib/perfect-scrollbar/js/perfect-scrollbar.min.js'); ?>" type="text/javascript"></script>
    <script src="<?php echo(ADMIN.'/lib/bootstrap/dist/js/bootstrap.bundle.min.js'); ?>" type="text/javascript"></script>
    <script src="<?php echo(ADMIN.'/js/app.js'); ?>" type="text/javascript"></script>
    <script type="text/javascript">
      $(document).ready(function(){
        //-initialize the javascript
        App.init();
      });
      
    </script>
    

  <script type="text/javascript">

      $("#forgot-password").on('click', function(event) {
        var formStatus = true;
        var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
        if ($( "#forgotemail" ).val().trim() === "") {
          formStatus = false;
          $( "#forgotemail-error" ).text( "Please enter email." ).show();
        }
        if (!emailReg.test($( "#forgotemail" ).val())) {
          formStatus = false;
          $( "#forgotemail-error" ).text( "Please enter a valid email." ).show();
        }
        if (!formStatus) {
          event.preventDefault();
        } else {  
          var data = {};
          data.email = $( "#forgotemail" ).val();
          $('#forgotpassword-form')[0].reset();
          $.ajax({
            type: "POST",
            url: "<?php echo(ADMINURL.'Admin/forgotpassword'); ?>",
            data: data,
            cache: false,
            dataType: 'text',
            success: function (res) {  
              console.log(res);
              if (res == 1) {
                $("#success-msg").text('Please check your email.').show();
              }
              else{
                $("#error-msg").text('Email id does not exist.').show();
              }
            }
          });
        }
      });

      function validatePassword(id){
        var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
          if(id === 'forgotemail'){
            if ($( "#forgotemail" ).val() === "") {
                $( "#forgotemail-error" ).text( "Please enter email." ).show();
            }else if (!emailReg.test($( "#forgotemail" ).val())) {
                $( "#forgotemail-error" ).text( "Please enter valid email." ).show();
            }else{
                $( "#forgotemail-error" ).text("");
            }
          }
      }
      
    </script>
  </body>

</html>