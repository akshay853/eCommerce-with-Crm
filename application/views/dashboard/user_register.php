<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="keywords" content="">
  <link rel="shortcut icon" href="<?php echo DASHBOARD_DESIGN_PATH;?>img/favicon.png">
  <title>Sign Up / Universe Admin</title>

  
    <link rel="stylesheet" href="<?php echo DASHBOARD_DESIGN_PATH;?>fonts/open-sans/style.min.css"> <!-- common font  styles  -->
<link rel="stylesheet" href="<?php echo DASHBOARD_DESIGN_PATH;?>fonts/universe-admin/style.css"> <!-- universeadmin icon font styles -->
<link rel="stylesheet" href="<?php echo DASHBOARD_DESIGN_PATH;?>fonts/mdi/css/materialdesignicons.min.css"> <!-- meterialdesignicons -->
<link rel="stylesheet" href="<?php echo DASHBOARD_DESIGN_PATH;?>fonts/iconfont/style.css"> <!-- DEPRECATED iconmonstr -->
<link rel="stylesheet" href="<?php echo DASHBOARD_DESIGN_PATH;?>vendor/flatpickr/flatpickr.min.css"> <!-- original flatpickr plugin (datepicker) styles -->
<link rel="stylesheet" href="<?php echo DASHBOARD_DESIGN_PATH;?>vendor/simplebar/simplebar.css"> <!-- original simplebar plugin (scrollbar) styles  -->
<link rel="stylesheet" href="<?php echo DASHBOARD_DESIGN_PATH;?>vendor/tagify/tagify.css"> <!-- styles for tags -->
<link rel="stylesheet" href="<?php echo DASHBOARD_DESIGN_PATH;?>vendor/tippyjs/tippy.css"> <!-- original tippy plugin (tooltip) styles -->
<link rel="stylesheet" href="<?php echo DASHBOARD_DESIGN_PATH;?>vendor/select2/css/select2.min.css"> <!-- original select2 plugin styles -->
<link rel="stylesheet" href="<?php echo DASHBOARD_DESIGN_PATH;?>vendor/bootstrap/css/bootstrap.min.css"> <!-- original bootstrap styles -->
<link rel="stylesheet" href="<?php echo DASHBOARD_DESIGN_PATH;?>css/style.min.css" id="stylesheet"> <!-- universeadmin styles -->

  

  <script src="<?php echo DASHBOARD_DESIGN_PATH;?>js/ie.assign.fix.min.js"></script>
</head>
<body class="p-front p-signup-helper">


  <div class="navbar navbar-light navbar-expand-lg p-front__navbar"> <!-- is-dark -->
  <a class="navbar-brand" href="/"><img src="<?php echo DASHBOARD_DESIGN_PATH;?>img/logo.png" alt=""/></a>
  <a class="navbar-brand-sm" href="/"><img src="<?php echo DASHBOARD_DESIGN_PATH;?>img/logo-sm.png" alt=""/></a>

  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-collapse">
    <span class="ua-icon-navbar-open navbar-toggler__open"></span>
    <span class="ua-icon-alert-close navbar-toggler__close"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbar-collapse">
    
  </div>
</div>




<div class="p-front__content">
  
<div class="p-signup">
    <form class="p-signup__form" method="post" action="<?php echo base_url();?>register/user_registration">
    <h2 class="p-signup__form-heading"> CUSTOMER REGISTER</h2>
    <div class="p-signup__form-content">
      <div class="row">
        <div class="form-group col-md-6">
          <label for="p-signup-first-name">First Name</label>
          <input type="text"name="firstname" id="firstname" class="form-control" id="p-signup-first-name" placeholder="First Name">
        </div>
        <div class="form-group col-md-6">
          <label for="p-signup-last-name">Last Name</label>
          <input type="text" name="secondname" id="secondname" class="form-control" id="p-signup-last-name" placeholder="Last Name">
        </div>
      </div>
        <div class="row">
            <div class="form-group col-md-3">
                <label>Gender&nbsp;&nbsp;</label></div>
           <div class="form-group col-md-3">
               <label>Male&nbsp;&nbsp;</label><input type="radio" name="gender" id="gender"value="male"></div>
           <div class="form-group col-md-3">
               <label>Female&nbsp;&nbsp;</label><input  type="radio" name="gender" id="gender"value="female"></div>
           <div class="form-group col-md-3">
           <label>Other</label><input type="radio" name="gender" id="gender"value="others">
            </div>
      </div>
        <div class="row">
           <div class="form-group col-md-12"> 
            
            <label>Address</label><textarea class="form-control" name="address" id="address"></textarea>
           </div>
        </div>
        
        <div class="row">
        <div class="form-group col-md-6">
            <select class="form-control" name="state">
                <option>kerala</option>
                <option>karnataka</option>
                <option>maharastra</option>
                <option>andhra pradesh</option>
                <option>jammu kashmir</option>
            </select></div>
             <div class="form-group col-md-6">
            <select class="form-control" name="district">
                <option>kannur</option>
                <option>bangalore</option>
                <option>bhopal</option>
                <option>hyderbad</option>
                <option>sreenaghar</option>
            </select>
        </div>
        </div>
            <div class="row">
        <div class="form-group col-md-12">
            <label>Phone Number</label><input class="form-control" type="phonenumber" name="phonenumber"id="phonenumber"placeholder="phone number">
        </div>
        </div>
      <div class="row">
        <div class="form-group col-md-12">
          <label for="p-signup-work-email">Email</label>
          <input type="email" class="form-control"name="email" id="email" placeholder="you@yourcompany.com">
        </div>
      </div>
           <div class="row">
               <div class="form-group col-md-12">
                   <label>User Name</label><input class="form-control" type="text" name="username" id="username" placeholder="username">
               </div>
           </div>
        <div class="row">
            <div class="form-group col-md-12">
                <label>Password</label><input class="form-control"  type="password" name="password" id="password" placeholder="password">
            </div>   
        </div>
        <div class="row">
            <div class="form-group col-md-12">
                 <label  for="p-signup-set-password">Conform Password</label>
                 <input class="form-control" type="password" name="conform_password" id="conform_password" placeholder="conform password">
            </div>
     <!--<div class="row">
        <div class="form-group col-md-12">
          <label for="p-signup-set-password">Set Password</label>
          <input type="email" class="form-control" id="p-signup-set-password" placeholder="Password (min 8 characters)">
        </div>
      </div>-->
           
      <!--<div class="row">
        <div class="form-group col-md-12">
          <label for="p-signup-repeat-password" class="col-form-label">Repeat Password</label>
          <input type="email" class="form-control" id="p-signup-repeat-password" placeholder="Repeat Password (min 8 characters)">
        </div>
      </div>-->

    <!-- <ul class="form-group p-signup__form-password-hints">
        <li>One lowercase character</li>
        <li>One number</li>
        <li>One uppercase character</li>
        <li>8 characters minimum</li>
      </ul>-->

    <div class="row">
             <div class="form-group col-md-12">
        <button type="submit" class="btn btn-info btn-block btn-lg p-signup__form-submit">Register</button>
      </div>
    </div>
    
      <div class="p-signup__form-links">
       
        <div class="p-signup__form-link">
          Already have an account? <a href="<?php echo base_url();?>login/user_login" class="link-info">Sign In</a>
        </div>
      </div>
    </div>
        </div>
        
  </form>
</div>

</div>



<footer class="p-front__footer">
 
</footer>



  <script src="<?php echo DASHBOARD_DESIGN_PATH;?>vendor/jquery/jquery.min.js"></script>

  <script src="<?php echo DASHBOARD_DESIGN_PATH;?>vendor/bootstrap/js/bootstrap.min.js"></script>



  <div class="sidebar-mobile-overlay"></div>
  <input type="hidden" name="mail_url" id="mail_url" value="<?php echo base_url();?>password/checkEmailExists">
  <script type="text/javascript">
      $(document).ready(function(){

          //alert($("#mail_url").val());
          $("#email").focusout(function(){
              $.post($("#mail_url").val(),
                  {
                      email: $("#email").val()

                  },
                  function(data,status){

                      if(data === "YES")
                      {
                          alert("Sorry That Email is taken!")
                          $("#email").val('');
                      }



                  });
          });
      });

  </script>



  <div class="sidebar-mobile-overlay"></div>

</body>
</html>
