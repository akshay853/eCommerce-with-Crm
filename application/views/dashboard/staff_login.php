<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="keywords" content="">
  <link rel="shortcut icon" href="img/favicon.png">
  <title>Sign In / Universe Admin</title>


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
<body class="p-front">


  <div class="navbar navbar-light navbar-expand-lg p-front__navbar"> <!-- is-dark -->
  <a class="navbar-brand" href="/"><img src="<?php echo DASHBOARD_DESIGN_PATH;?>img/logo.png" alt=""/></a>
  <a class="navbar-brand-sm" href="/"><img src="<?php echo DASHBOARD_DESIGN_PATH;?>img/logo-sm.png" alt=""/></a>

  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-collapse">
    <span class="ua-icon-navbar-open navbar-toggler__open"></span>
    <span class="ua-icon-alert-close navbar-toggler__close"></span>
  </button>

  
</div>




<div class="p-front__content">
  
<div class="p-signin">
    <form class="p-signin__form" method="POST" action="<?php echo base_url();?>login/staff_login_action">
    <h2 class="p-signin__form-heading"> staff Login </h2>
    <div class="p-signin__form-content">
      <div class="row">
        <div class="form-group col-md-12">
          <label for="p-signin-work-email">user name</label>
          <input type="text" required name="username" id="username" class="form-control" id="p-signin-work-email" placeholder="username">
        </div>
      </div>
      <div class="row">
        <div class="form-group col-md-12">
          <label for="p-signin-set-password">Password</label>
          <input type="password"required name="password" id="password" class="form-control" id="p-signin-set-password" placeholder="Password">
        </div>
      </div>
      <div>
        <button type="submit" class="btn btn-info btn-block btn-lg p-signin__form-submit">login!</button>
      </div>
      <div class="p-signin__form-links">
        <div class="p-signin__form-link">
          Don't have an account? <a href="<?php echo base_url();?>register/staff_register" class="link-info">register</a>
          <br><a href="<?php echo base_url();?>password/password_reset/staff" class="link-info">forget password</a>
        </div>
      </div>
    </div>
  </form>
</div>

</div>



<footer class="p-front__footer">
  <ul class="nav">
 
</footer>



  <script src="<?php echo DASHBOARD_DESIGN_PATH;?>vendor/jquery/jquery.min.js"></script>
<script src="<?php echo DASHBOARD_DESIGN_PATH;?>vendor/popper/popper.min.js"></script>
<script src="<?php echo DASHBOARD_DESIGN_PATH;?>vendor/bootstrap/js/bootstrap.min.js"></script>
<script src="<?php echo DASHBOARD_DESIGN_PATH;?>vendor/select2/js/select2.full.min.js"></script>
<script src="<?php echo DASHBOARD_DESIGN_PATH;?>vendor/simplebar/simplebar.js"></script>
<script src="<?php echo DASHBOARD_DESIGN_PATH;?>vendor/text-avatar/jquery.textavatar.js"></script>
<script src="<?php echo DASHBOARD_DESIGN_PATH;?>vendor/tippyjs/tippy.all.min.js"></script>
<script src="<?php echo DASHBOARD_DESIGN_PATH;?>vendor/flatpickr/flatpickr.min.js"></script>
<script src="<?php echo DASHBOARD_DESIGN_PATH;?>vendor/wnumb/wNumb.js"></script>
<script src="<?php echo DASHBOARD_DESIGN_PATH;?>js/main.js"></script>



<div class="sidebar-mobile-overlay"></div>

</body>
</html>
