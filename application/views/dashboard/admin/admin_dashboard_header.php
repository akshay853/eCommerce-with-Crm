<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <title>Sales Dashboard / Universe Admin</title>
    <link rel="shortcut icon" href="img/favicon.png">


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
<body class="js-loading "> <!-- add for rounded corners: form-controls-rounded -->



<div class="page-preloader js-page-preloader">
    <div class="page-preloader__logo">
        <img src="<?php echo DASHBOARD_DESIGN_PATH;?>img/crm logo.png" alt="" class="page-preloader__logo-image">
    </div>
    <div class="page-preloader__desc">Pro Edition</div>
    <div class="page-preloader__loader">
        <div class="page-preloader__loader-heading">System Loading</div>
        <div class="page-preloader__loader-desc">Widgets update</div>
        <div class="progress progress-rounded page-preloader__loader-progress">
            <div id="page-loader-progress-bar" class="progress-bar bg-info" role="progressbar" style="width: 10%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
        </div>
    </div>
    <div class="page-preloader__copyright">ThemesAnytime, 2018</div>
</div>



<div style="background: #455161;" class="navbar navbar-light navbar-expand-lg">

</div>


<div class="page-wrap">

    <div class="sidebar-section">
        <div class="sidebar-user-a">
            <img src="<?php echo DASHBOARD_DESIGN_PATH;?>img/users/user-19.png" alt="" class="sidebar-user-a__avatar rounded-circle">
            <div class="sidebar-user-a__name">Admin Dashboard</div>

            <a href="<?php echo base_url();?>login/admin_logout" class="btn icon-left sidebar-user-a__link">
                Logout<span class="btn-icon ua-icon-user-solid"></span>
            </a>
        </div>

        <div>

            <ul class="sidebar-section-nav">

                <li class="sidebar-section-nav__item">
                    <a class="sidebar-section-nav__link" href="<?php echo base_url();?>admin/feedbacks">
                        <span class="sidebar-section-nav__item-icon iconfont-control-panel"></span>
                        <span class="sidebar-section-nav__item-text">feedback</span>
                    </a>
                </li>
                <li class="sidebar-section-nav__item">
                    <a class="sidebar-section-nav__link" href="<?php echo base_url();?>admin/add_notification">
                        <span class="sidebar-section-nav__item-icon iconfont-control-panel"></span>
                        <span class="sidebar-section-nav__item-text">Notification</span>
                    </a>
                </li>

                <li class="sidebar-section-nav__item">
                    <a class="sidebar-section-nav__link" href="<?php echo base_url();?>admin/staff">
                        <span class="sidebar-section-nav__item-icon iconfont-control-panel"></span>
                        <span class="sidebar-section-nav__item-text">view staff</span>
                    </a>
                </li>

                <li class="sidebar-section-nav__item">
                    <a class="sidebar-section-nav__link" href="<?php echo base_url();?>admin/customer">
                        <span class="sidebar-section-nav__item-icon iconfont-control-panel"></span>
                        <span class="sidebar-section-nav__item-text">view customer</span>
                    </a>
                </li>

                <li class="sidebar-section-nav__item">
                    <a class="sidebar-section-nav__link" href="<?php echo base_url();?>admin/seller">
                        <span class="sidebar-section-nav__item-icon iconfont-control-panel"></span>
                        <span class="sidebar-section-nav__item-text">view seller</span>
                    </a>
                </li>

            </ul>

        </div>


        <!--<div class="sidebar-section-nav__footer">
          <ul class="sidebar-section-nav">
            <li class="sidebar-section-nav__item sidebar-section-nav__item-btn mb-4">
              <a href="#" class="btn btn-info btn-block">Create project</a>
            </li>
          </ul>
          <div class="sidebar__collapse">
            <span class="icon ua-icon-collapse-left-arrows"></span>
          </div>
        </div>
      </div>
      -->
    </div>










