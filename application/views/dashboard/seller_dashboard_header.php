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
        <img src="<?php echo DASHBOARD_DESIGN_PATH;?>img/logo-black-lg.png" alt="" class="page-preloader__logo-image">
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



<div class="navbar navbar-light navbar-expand-lg">
    <button class="sidebar-toggler" type="button">
        <span class="ua-icon-sidebar-open sidebar-toggler__open"></span>
        <span class="ua-icon-alert-close sidebar-toggler__close"></span>
    </button>

    <span class="navbar-brand">
    <a href="/"><img src="<?php echo DASHBOARD_DESIGN_PATH;?>img/logo.png" alt="" class="navbar-brand__logo"></a>
    <span class="ua-icon-menu slide-nav-toggle"></span>
  </span>

    <span class="navbar-brand-sm">
    <a href="/"><img src="<?php echo DASHBOARD_DESIGN_PATH;?>img/logo-sm.png" alt="" class="navbar-brand__logo"></a>
    <span class="ua-icon-menu slide-nav-toggle"></span>
  </span>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-collapse">
        <span class="ua-icon-navbar-open navbar-toggler__open"></span>
        <span class="ua-icon-alert-close navbar-toggler__close"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbar-collapse">
        <div class="navbar__menu">
            <ul class="navbar-nav">
                <li class="nav-item dropdown navbar__menu-item">
                    <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">
                        Project
                    </a>
                    <div class="dropdown-menu navbar__menu-dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#"><span class="iconfont-users dropdown-item__icon"></span>Lead</a>
                        <a class="dropdown-item" href="#"><span class="iconfont-user-circle dropdown-item__icon"></span>Contact: Person</a>
                        <a class="dropdown-item" href="#"><span class="iconfont-building-b dropdown-item__icon"></span>Contact: Company</a>
                        <a class="dropdown-item" href="#"><span class="iconfont-deal dropdown-item__icon"></span>Deal</a>
                        <a class="dropdown-item" href="#"><span class="iconfont-arrow-right dropdown-item__icon"></span>Import</a>
                    </div>
                </li>
                <li class="nav-item dropdown dropdown__columns navbar__menu-item">
                    <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">
                        Features
                    </a>
                    <div class="dropdown-menu dropdown__columns-menu navbar__menu-dropdown-menu" aria-labelledby="navbarDropdown">
                        <div class="dropdown__columns-container">
                            <div class="dropdown__columns-column">
                                <a class="dropdown-item dropdown__columns-item" href="#">Range Slider</a>
                                <a class="dropdown-item dropdown__columns-item" href="#">Confirm Alerts</a>
                                <a class="dropdown-item dropdown__columns-item" href="#">Tag Editor</a>
                                <a class="dropdown-item dropdown__columns-item" href="#">Date Picker</a>
                                <a class="dropdown-item dropdown__columns-item" href="#">Date Range Picker</a>
                                <a class="dropdown-item dropdown__columns-item" href="#">File Upload</a>
                                <a class="dropdown-item dropdown__columns-item" href="#">Growl Notifications</a>
                                <a class="dropdown-item dropdown__columns-item" href="#">Wysiwyg Editor</a>
                                <a class="dropdown-item dropdown__columns-item" href="#">Page Tour</a>
                            </div>
                            <div class="dropdown__columns-column">
                                <a class="dropdown-item dropdown__columns-item" href="#">Sweet Alert</a>
                                <a class="dropdown-item dropdown__columns-item" href="#">DataTables</a>
                                <a class="dropdown-item dropdown__columns-item" href="#">Spreadsheet</a>
                                <a class="dropdown-item dropdown__columns-item" href="#">Email Templates</a>
                                <a class="dropdown-item dropdown__columns-item" href="#">Messenger</a>
                                <a class="dropdown-item dropdown__columns-item" href="#">Mail</a>
                                <a class="dropdown-item dropdown__columns-item" href="#">File Storage</a>
                                <a class="dropdown-item dropdown__columns-item" href="#">Kanban Board</a>
                                <a class="dropdown-item dropdown__columns-item" href="#">Social Profile</a>
                            </div>
                            <div class="dropdown__columns-column">
                                <a class="dropdown-item dropdown__columns-item" href="#">Sign In</a>
                                <a class="dropdown-item dropdown__columns-item" href="#">Sign Up</a>
                                <a class="dropdown-item dropdown__columns-item" href="#">Invoices</a>
                                <a class="dropdown-item dropdown__columns-item" href="#">Pricing Table</a>
                                <a class="dropdown-item dropdown__columns-item" href="#">Help Center</a>
                                <a class="dropdown-item dropdown__columns-item" href="#">Settings</a>
                                <a class="dropdown-item dropdown__columns-item" href="#">Scheduler</a>
                                <a class="dropdown-item dropdown__columns-item" href="#">Social Feed</a>
                                <a class="dropdown-item dropdown__columns-item" href="#">Widgets</a>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="nav-item navbar__menu-item">
                    <a class="nav-link" href="#">Settings</a>
                </li>
                <li class="nav-item navbar__menu-item">
                    <a class="nav-link" href="#">Help</a>
                </li>
            </ul>
            <div class="navbar__menu-side">
                <div class="navbar__actions">
                    <a href="https://themeforest.net/item/universeadmin-powerful-responsive-bootstrap-4-admin-template/20926048?ref=themesanytime" class="btn btn-info icon-left subnav__header-side-item">
                        Buy Now <span class="btn-icon mdi mdi-cart"></span>
                    </a>
                </div>
                <div class="navbar-search navbar__menu-search">
                    <div class="input-group input-group-icon iconfont icon-right">
                        <input class="form-control navbar-search__input navbar__menu-search-input" type="text" placeholder="Search"/><span class="input-icon ua-icon-search"></span>
                    </div>
                </div>
            </div>

        </div>
        <div class="dropdown navbar-dropdown no-arrow navbar-notify-dropdown">
            <a class="dropdown-toggle navbar-dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
        <span class="navbar-notify navbar-notify--notifications">
          <span>
            <span class="navbar-notify__icon mdi mdi-bell"></span>
            <span class="navbar-notify__text">Notifications</span>
          </span>
            <!--<span class="navbar-notify__amount">3</span>-->
            <!--<span class="navbar-notify__indicator"></span>-->
        </span>
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown-menu navbar-dropdown-notifications">
                <div class="navbar-dropdown-notifications__header">
                    <span>NOTIFICATIONS</span>
                    <a href="#" class="navbar-dropdown-notifications__mark-read">
                        Mark all as read <span class="navbar-dropdown-notifications__mark-read-icon ua-icon-arrow-circle-down"></span>
                    </a>
                </div>
                <div class="navbar-dropdown-notifications__body js-scrollable">
                    <!--<div class="navbar-dropdown-notifications__body-empty"><img class="navbar-dropdown-notifications__body-empty-image" src="<?php echo DASHBOARD_DESIGN_PATH;?>img/empty-notifications.png" alt=""/>
                      <div class="navbar-dropdown-notifications__body-empty-text">You`re up to date!</div>
                    </div>-->

                    <div class="navbar-dropdown-notification is-new">
                        <div class="navbar-dropdown-notification__user">
                            <img class="navbar-dropdown-notification__avatar rounded-circle" src="<?php echo DASHBOARD_DESIGN_PATH;?>img/users/user-4.png" alt="" width="40" height="40">
                            <div class="ua-icon-circle-check navbar-dropdown-notification__icon color-success"></div>
                        </div>
                        <div class="navbar-dropdown-notification__content">
                            <a href="#" class="navbar-dropdown-notification__action-name">Antonius in Project X </a>
                            <div class="navbar-dropdown-notification__action-desc">Added a <strong>Task</strong> to you in <strong>Designer Candidates</strong></div>
                        </div>
                        <span class="navbar-dropdown-notification__date">9:49 AM</span>
                    </div>
                    <div class="navbar-dropdown-notification">
                        <div class="navbar-dropdown-notification__user">
                            <img class="navbar-dropdown-notification__avatar rounded-circle" src="<?php echo DASHBOARD_DESIGN_PATH;?>img/users/user-5.png" alt="" width="40" height="40">
                            <div class="ua-icon-letter-alt navbar-dropdown-notification__icon color-danger navbar-dropdown-notification__icon--letter"></div>
                        </div>
                        <div class="navbar-dropdown-notification__content">
                            <a href="#" class="navbar-dropdown-notification__action-name">Antonius in Project X </a>
                            <div class="navbar-dropdown-notification__action-desc">Added a <strong>Task</strong> to you in <strong>Designer Candidates</strong></div>
                        </div>
                        <span class="navbar-dropdown-notification__date">9:49 AM</span>
                    </div>
                    <div class="navbar-dropdown-notification">
                        <div class="navbar-dropdown-notification__user">
                            <img class="navbar-dropdown-notification__avatar rounded-circle" src="<?php echo DASHBOARD_DESIGN_PATH;?>img/users/user-6.png" alt="" width="40" height="40">
                            <div class="ua-icon-warning navbar-dropdown-notification__icon color-warning navbar-dropdown-notification__icon--warning"></div>
                        </div>
                        <div class="navbar-dropdown-notification__content">
                            <a href="#" class="navbar-dropdown-notification__action-name">Antonius in Project X </a>
                            <div class="navbar-dropdown-notification__action-desc">Added a <strong>Task</strong> to you in <strong>Designer Candidates</strong></div>
                        </div>
                        <span class="navbar-dropdown-notification__date">9:49 AM</span>
                    </div>
                    <div class="navbar-dropdown-notification">
                        <div class="navbar-dropdown-notification__user">
                            <img class="navbar-dropdown-notification__avatar rounded-circle" src="<?php echo DASHBOARD_DESIGN_PATH;?>img/users/user-7.png" alt="" width="40" height="40">
                            <div class="ua-icon-circle-check navbar-dropdown-notification__icon color-success"></div>
                        </div>
                        <div class="navbar-dropdown-notification__content">
                            <a href="#" class="navbar-dropdown-notification__action-name">Antonius in Project X </a>
                            <div class="navbar-dropdown-notification__action-desc">Added a <strong>Task</strong> to you in <strong>Designer Candidates</strong></div>
                        </div>
                        <span class="navbar-dropdown-notification__date">9:49 AM</span>
                    </div>
                    <div class="navbar-dropdown-notification__date-separator">Yesterday</div>
                    <div class="navbar-dropdown-notification">
                        <div class="navbar-dropdown-notification__user">
                            <img class="navbar-dropdown-notification__avatar rounded-circle" src="<?php echo DASHBOARD_DESIGN_PATH;?>img/users/user-8.png" alt="" width="40" height="40">
                            <div class="ua-icon-letter-alt navbar-dropdown-notification__icon color-danger navbar-dropdown-notification__icon--letter"></div>
                        </div>
                        <div class="navbar-dropdown-notification__content">
                            <a href="#" class="navbar-dropdown-notification__action-name">Antonius in Project X </a>
                            <div class="navbar-dropdown-notification__action-desc">Added a <strong>Task</strong> to you in <strong>Designer Candidates</strong></div>
                        </div>
                        <span class="navbar-dropdown-notification__date">9:49 AM</span>
                    </div>
                    <div class="navbar-dropdown-notification">
                        <div class="navbar-dropdown-notification__user">
                            <img class="navbar-dropdown-notification__avatar rounded-circle" src="<?php echo DASHBOARD_DESIGN_PATH;?>img/users/user-9.png" alt="" width="40" height="40">
                            <div class="ua-icon-warning navbar-dropdown-notification__icon color-warning navbar-dropdown-notification__icon--warning"></div>
                        </div>
                        <div class="navbar-dropdown-notification__content">
                            <a href="#" class="navbar-dropdown-notification__action-name">Antonius in Project X </a>
                            <div class="navbar-dropdown-notification__action-desc">Added a <strong>Task</strong> to you in <strong>Designer Candidates</strong></div>
                        </div>
                        <span class="navbar-dropdown-notification__date">9:49 AM</span>
                    </div>
                    <div class="navbar-dropdown-notification">
                        <div class="navbar-dropdown-notification__user">
                            <img class="navbar-dropdown-notification__avatar rounded-circle" src="<?php echo DASHBOARD_DESIGN_PATH;?>img/users/user-10.png" alt="" width="40" height="40">
                            <div class="ua-icon-circle-check navbar-dropdown-notification__icon color-success"></div>
                        </div>
                        <div class="navbar-dropdown-notification__content">
                            <a href="#" class="navbar-dropdown-notification__action-name">Antonius in Project X </a>
                            <div class="navbar-dropdown-notification__action-desc">Added a <strong>Task</strong> to you in <strong>Designer Candidates</strong></div>
                        </div>
                        <span class="navbar-dropdown-notification__date">9:49 AM</span>
                    </div>
                </div>
                <a class="navbar-dropdown-notifications__view-all" href="#"><span class="icon ua-icon-view-all"></span><span>View all</span></a>
            </div>
        </div>
        <div class="dropdown navbar-dropdown no-arrow navbar-notify-dropdown navbar-notify-dropdown--messages">
            <a class="dropdown-toggle navbar-dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
        <span class="navbar-notify">
          <span>
            <span class="navbar-notify__icon mdi mdi-email"></span>
            <span class="navbar-notify__text">Messages</span>
          </span>
          <span class="navbar-notify__indicator"></span>
            <!--<span class="navbar-notify__amount">5</span>-->
        </span>
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown-menu navbar-dropdown-notifications navbar-dropdown-messages">
                <div class="navbar-dropdown-notifications__header"><span>MESSAGES</span>
                    <a href="#" class="navbar-dropdown-notifications__mark-read">
                        Mark all as read <span class="navbar-dropdown-notifications__mark-read-icon ua-icon-arrow-circle-down"></span>
                    </a>
                </div>
                <div class="navbar-dropdown-notifications__body navbar-dropdown-notifications__body-messages js-scrollable">
                    <div class="navbar-dropdown-notifications__item is-unread">
                        <img class="navbar-dropdown-notifications__item-avatar rounded-circle" src="<?php echo DASHBOARD_DESIGN_PATH;?>img/users/user-4.png" alt="" width="40" height="40"/>
                        <div class="navbar-dropdown-notifications__item-notify">
                            <div>
                                <span class="icon ua-icon-reply-to"></span>
                                <strong>Gabriel Saunders</strong> replied to <strong>your comment</strong> to <strong>The secret weapon of lebound marketing...</strong>
                            </div>
                            <div class="navbar-dropdown-notifications__item-datetime">5 minute ago</div>
                        </div>
                        <div class="navbar-dropdown-notifications__item-actions">
                            <span class="icon ua-icon-circle-check navbar-dropdown-notifications__item-mark-as-read" data-toggle="tooltip" data-placement="top" title="Mark as read"></span>
                            <span class="icon ua-icon-circle-close navbar-dropdown-notifications__item-remove" data-toggle="tooltip" data-placement="top" title="Delete notification"></span>
                        </div>
                    </div>
                    <div class="navbar-dropdown-notifications__item">
                        <img class="navbar-dropdown-notifications__item-avatar rounded-circle" src="<?php echo DASHBOARD_DESIGN_PATH;?>img/users/user-5.png" alt="" width="40" height="40"/>
                        <div class="navbar-dropdown-notifications__item-notify">
                            <div>
                                <span class="icon ua-icon-comments"></span>
                                <strong>Gabriel Saunders</strong> replied to <strong>your comment</strong> to <strong>The secret weapon of lebound marketing...</strong>
                            </div>
                            <div class="navbar-dropdown-notifications__item-datetime">5 minute ago</div>
                        </div>
                        <div class="navbar-dropdown-notifications__item-actions">
                            <span class="icon ua-icon-circle-check navbar-dropdown-notifications__item-mark-as-read" data-toggle="tooltip" data-placement="top" title="Mark as read"></span>
                            <span class="icon ua-icon-circle-close navbar-dropdown-notifications__item-remove" data-toggle="tooltip" data-placement="top" title="Delete notification"></span>
                        </div>
                    </div>
                    <div class="navbar-dropdown-notifications__item is-unread">
                        <img class="navbar-dropdown-notifications__item-avatar rounded-circle" src="<?php echo DASHBOARD_DESIGN_PATH;?>img/users/user-6.png" alt="" width="40" height="40"/>
                        <div class="navbar-dropdown-notifications__item-notify">
                            <div>
                                <span class="icon ua-icon-star"></span>
                                <strong>Shawna Cohen</strong> replied to <strong>your comment</strong> to <strong>The secret weapon of lebound marketing...</strong>
                            </div>
                            <div class="navbar-dropdown-notifications__item-datetime">5 minute ago</div>
                        </div>
                        <div class="navbar-dropdown-notifications__item-actions">
                            <span class="icon ua-icon-circle-check navbar-dropdown-notifications__item-mark-as-read" data-toggle="tooltip" data-placement="top" title="Mark as read"></span>
                            <span class="icon ua-icon-circle-close navbar-dropdown-notifications__item-remove" data-toggle="tooltip" data-placement="top" title="Delete notification"></span>
                        </div>
                    </div>
                    <div class="navbar-dropdown-notifications__item is-unread">
                        <img class="navbar-dropdown-notifications__item-avatar rounded-circle" src="<?php echo DASHBOARD_DESIGN_PATH;?>img/users/user-7.png" alt="" width="40" height="40"/>
                        <div class="navbar-dropdown-notifications__item-notify">
                            <div>
                                <span class="icon ua-icon-download"></span>
                                <strong>Jason Kendall</strong> replied to <strong>your comment</strong> to <strong>The secret weapon of lebound marketing...</strong>
                            </div>
                            <div class="navbar-dropdown-notifications__item-datetime">5 minute ago</div>
                        </div>
                        <div class="navbar-dropdown-notifications__item-actions">
                            <span class="icon ua-icon-circle-check navbar-dropdown-notifications__item-mark-as-read" data-toggle="tooltip" data-placement="top" title="Mark as read"></span>
                            <span class="icon ua-icon-circle-close navbar-dropdown-notifications__item-remove" data-toggle="tooltip" data-placement="top" title="Delete notification"></span>
                        </div>
                    </div>
                </div><a class="navbar-dropdown-notifications__view-all" href="#"><span class="icon ua-icon-view-all"></span><span>View all</span></a>
            </div>
        </div>
        <div class="dropdown navbar-dropdown no-arrow navbar-help-dropdown navbar-notify-dropdown--help">
            <a class="dropdown-toggle navbar-dropdown-toggle" data-toggle="dropdown" href="#">
        <span class="navbar-notify">
          <span>
            <span class="navbar-notify__icon mdi mdi-help-circle"></span>
            <span class="navbar-notify__text">Info</span>
          </span>
        </span>
            </a>
            <div class="dropdown-menu dropdown-menu-center navbar-dropdown-menu">
                <h6 class="navbar-help-dropdown__heading">Need Help?</h6>
                <p class="navbar-help-dropdown__desc">
                    Give us a call 888-898-8302 <br>
                    send a email: <a href="#">info@example.com</a> <br>
                    or
                </p>
                <div>
                    <a href="help-center-submit-ticket.html" class="btn btn-info navbar-help-dropdown__submit">Submit a Ticket</a>
                </div>
            </div>
        </div>
        <div class="dropdown navbar-dropdown">
            <a class="dropdown-toggle navbar-dropdown-toggle navbar-dropdown-toggle__user" data-toggle="dropdown" href="#">
                <img src="<?php echo DASHBOARD_DESIGN_PATH;?>img/users/user-3.png" alt="" class="navbar-dropdown-toggle__user-avatar">
                <span class="navbar-dropdown__user-name">John Smith</span>
            </a>
            <div class="dropdown-menu navbar-dropdown-menu navbar-dropdown-menu__user">
                <div class="navbar-dropdown-user-content">
                    <div class="dropdown-user__avatar"><img src="<?php echo DASHBOARD_DESIGN_PATH;?>img/users/user-3.png" alt=""/></div>
                    <div class="dropdown-info">
                        <div class="dropdown-info__name">John Smith</div>
                        <div class="dropdown-info__job">Manager</div>
                        <div class="dropdown-info-buttons"><a class="dropdown-info__viewprofile" href="#">View Profile</a><a class="dropdown-info__addaccount" href="#">Add account</a></div>
                    </div>
                </div><a class="dropdown-item navbar-dropdown__item" href="#">Upgrade to <span>PRO</span></a><a class="dropdown-item navbar-dropdown__item" href="#">Invite team member</a><a class="dropdown-item navbar-dropdown__item" href="#">Fedback</a><a class="dropdown-item navbar-dropdown__item" href="#">Help</a><a class="dropdown-item navbar-dropdown__item" href="#">Sign Out</a>
            </div>
        </div>
    </div>
</div>




<div class="page-wrap">

    <div class="sidebar-section">
        <div class="sidebar-section__scroll">
            <!--<div class="sidebar-section__user has-background">
              <img src="<?php echo DASHBOARD_DESIGN_PATH;?>img/users/user-19.png" alt="" class="sidebar-section__user-avatar rounded-circle">

              <div class="dropdown sidebar-section__user-dropdown">
                <a class="dropdown-toggle sidebar-section__user-dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Joyce Walsh
                </a>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                  <a class="dropdown-item" href="#">Settings</a>
                  <a class="dropdown-item" href="#">Help</a>
                  <a class="dropdown-item" href="#">Sign Out</a>
                </div>
              </div>
            </div>-->

            <div class="sidebar-user-a">
                <img src="<?php echo DASHBOARD_DESIGN_PATH;?>img/users/user-19.png" alt="" class="sidebar-user-a__avatar rounded-circle">
                <div class="sidebar-user-a__name">Martha Howard</div>
                <div class="sidebar-user-a__desc">Product Manager</div>

                <a href="#" class="btn icon-left sidebar-user-a__link">
                    Personal Account <span class="btn-icon ua-icon-user-solid"></span>
                </a>
            </div>

            <div>
                
                <ul class="sidebar-section-nav">
                  
                    <li class="sidebar-section-nav__item">
                        <a class="sidebar-section-nav__link" href="">
                            <span class="sidebar-section-nav__item-icon iconfont-control-panel"></span>
                            <span class="sidebar-section-nav__item-text">Dashboard</span>
                        </a>
                    </li>
                    <li class="sidebar-section-nav__item">
                        <a class="sidebar-section-nav__link" href="<?php echo base_url();?>seller/view_profile">
                            <span class="sidebar-section-nav__item-icon iconfont-control-panel"></span>
                            <span class="sidebar-section-nav__item-text">Profile</span>
                        </a>
                    </li>
                    
                     <li class="sidebar-section-nav__item">
                        <a class="sidebar-section-nav__link" href="<?php echo base_url();?>product/add_product">
                            <span class="sidebar-section-nav__item-icon iconfont-control-panel"></span>
                            <span class="sidebar-section-nav__item-text">Add product</span>
                        </a>
                    </li>
                    <li class="sidebar-section-nav__item">
                        <a class="sidebar-section-nav__link" href="">
                            <span class="sidebar-section-nav__item-icon iconfont-control-panel"></span>
                            <span class="sidebar-section-nav__item-text">View Product</span>
                        </a>
                    </li>
                    <li class="sidebar-section-nav__item">
                        <a class="sidebar-section-nav__link" href="<?php echo base_url();?>seller/seller_feedback">
                            <span class="sidebar-section-nav__item-icon iconfont-control-panel"></span>
                            <span class="sidebar-section-nav__item-text">Feedback</span>
                        </a>
                    </li>
                    <li class="sidebar-section-nav__item">
                        <a class="sidebar-section-nav__link" href="<?php echo base_url();?>login/seller_logout">
                            <span class="sidebar-section-nav__item-icon iconfont-control-panel"></span>
                            <span class="sidebar-section-nav__item-text">Logout</span>
                        </a>
                    </li>
                </ul>

            </div>

            
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