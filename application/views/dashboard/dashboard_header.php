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
                <div class="sidebar-section__separator">Main</div>
                <ul class="sidebar-section-nav">
                    <li class="sidebar-section-nav__item">
                        <a class="sidebar-section-nav__link sidebar-section-nav__link-dropdown" href="#">
                            <span class="sidebar-section-nav__item-icon ua-icon-home"></span>
                            <span class="sidebar-section-nav__item-text">Dashboard</span>
                            <span class="badge sidebar-section-nav__badge">2</span>
                        </a>
                        <ul class="sidebar-section-subnav">
                            <li class="sidebar-section-subnav__item"><a class="sidebar-section-subnav__link" href="index.html">Default Dashboard</a></li>
                            <li class="sidebar-section-subnav__item"><a class="sidebar-section-subnav__link" href="booking-dashboard.html">Booking Dashboard</a></li>
                            <li class="sidebar-section-subnav__item"><a class="sidebar-section-subnav__link" href="medical-dashboard.html">Medical Dashboard</a></li>
                            <li class="sidebar-section-subnav__item"><a class="sidebar-section-subnav__link" href="sales-dashboard.html">Sales Dashboard</a></li>
                            <li class="sidebar-section-subnav__item"><a class="sidebar-section-subnav__link" href="payment-dashboard.html">Payment Dashboard</a></li>
                        </ul>
                    </li>
                    <li class="sidebar-section-nav__item">
                        <a class="sidebar-section-nav__link" href="draggable-panels.html">
                            <span class="sidebar-section-nav__item-icon iconfont-control-panel"></span>
                            <span class="sidebar-section-nav__item-text">Draggable Panels</span>
                        </a>
                    </li>
                    <li class="sidebar-section-nav__item">
                        <a class="sidebar-section-nav__link sidebar-section-nav__link-dropdown" href="#">
                            <span class="sidebar-section-nav__item-icon iconfont-layout"></span>
                            <span class="sidebar-section-nav__item-text">Custom Layouts</span>
                        </a>
                        <ul class="sidebar-section-subnav">
                            <li class="sidebar-section-subnav__item"><a class="sidebar-section-subnav__link" href="../custom-layouts/simple/index.html" target="_blank">Simple</a></li>
                        </ul>
                    </li>
                    <li class="sidebar-section-nav__item">
                        <a class="sidebar-section-nav__link sidebar-section-nav__link-dropdown" href="#">
                            <span class="sidebar-section-nav__item-icon iconfont-layout"></span>
                            <span class="sidebar-section-nav__item-text">Page Layouts</span>
                        </a>
                        <ul class="sidebar-section-subnav">
                            <li class="sidebar-section-subnav__item"><a class="sidebar-section-subnav__link" href="sidebar-md.html">Medium Sidebar</a></li>
                            <li class="sidebar-section-subnav__item"><a class="sidebar-section-subnav__link" href="container-md.html">Medium Container</a></li>
                            <li class="sidebar-section-subnav__item"><a class="sidebar-section-subnav__link" href="boxed-layout.html">Boxed Layout</a></li>
                            <li class="sidebar-section-subnav__item"><a class="sidebar-section-subnav__link" href="full-height-content.html">Full Height Content</a></li>
                            <li class="sidebar-section-subnav__item"><a class="sidebar-section-subnav__link" href="menu-and-content.html">Menu and Content</a></li>
                            <li class="sidebar-section-subnav__item"><a class="sidebar-section-subnav__link" href="sidebar-a.html">Sidebar (a)</a></li>
                            <li class="sidebar-section-subnav__item"><a class="sidebar-section-subnav__link" href="sidebar-b.html">Sidebar (b)</a></li>
                            <li class="sidebar-section-subnav__item"><a class="sidebar-section-subnav__link" href="ecommerce-navbar.html">E-commerce Navbar</a></li>
                            <li class="sidebar-section-subnav__item"><a class="sidebar-section-subnav__link" href="simple-navbar.html">Simple Navbar</a></li>
                        </ul>
                    </li>
                    <li class="sidebar-section-nav__item">
                        <a class="sidebar-section-nav__link sidebar-section-nav__link-dropdown" href="#">
                            <span class="sidebar-section-nav__item-icon ua-icon-ui"></span>
                            <span class="sidebar-section-nav__item-text">UI Features</span>
                        </a>
                        <ul class="sidebar-section-subnav">
                            <li class="sidebar-section-subnav__item"><a class="sidebar-section-subnav__link" href="alerts.html">Alerts</a></li>
                            <li class="sidebar-section-subnav__item"><a class="sidebar-section-subnav__link" href="breadcrumbs.html">Breadcrumbs</a></li>
                            <li class="sidebar-section-subnav__item"><a class="sidebar-section-subnav__link" href="badges.html">Badges</a></li>
                            <li class="sidebar-section-subnav__item"><a class="sidebar-section-subnav__link" href="collapse.html">Collapse</a></li>
                            <li class="sidebar-section-subnav__item"><a class="sidebar-section-subnav__link" href="colors.html">Colors</a></li>
                            <li class="sidebar-section-subnav__item"><a class="sidebar-section-subnav__link" href="pagination.html">Pagination</a></li>
                            <li class="sidebar-section-subnav__item"><a class="sidebar-section-subnav__link" href="progress.html">Progress</a></li>
                            <li class="sidebar-section-subnav__item"><a class="sidebar-section-subnav__link" href="modal.html">Modal</a></li>
                            <li class="sidebar-section-subnav__item"><a class="sidebar-section-subnav__link" href="tables.html">Tables</a></li>
                            <li class="sidebar-section-subnav__item"><a class="sidebar-section-subnav__link" href="tabs.html">Tabs</a></li>
                            <li class="sidebar-section-subnav__item"><a class="sidebar-section-subnav__link" href="tooltips-and-popovers.html">Tooltips &amp; Popovers</a></li>
                            <li class="sidebar-section-subnav__item"><a class="sidebar-section-subnav__link" href="typography.html">Typography</a></li>
                        </ul>
                    </li>
                    <li class="sidebar-section-nav__item">
                        <a class="sidebar-section-nav__link sidebar-section-nav__link-dropdown" href="#">
                            <span class="sidebar-section-nav__item-icon ua-icon-grid"></span>
                            <span class="sidebar-section-nav__item-text">Widgets</span>
                        </a>
                        <ul class="sidebar-section-subnav">
                            <li class="sidebar-section-subnav__item"><a class="sidebar-section-subnav__link" href="widgets-cards.html">Card Widgets</a></li>
                            <li class="sidebar-section-subnav__item"><a class="sidebar-section-subnav__link" href="widgets-social.html">Social Widgets</a></li>
                            <li class="sidebar-section-subnav__item"><a class="sidebar-section-subnav__link" href="widgets-ecommerce.html">E-commerce Widgets</a></li>
                            <li class="sidebar-section-subnav__item"><a class="sidebar-section-subnav__link" href="widgets-statistic.html">Statistic Widgets</a></li>
                        </ul>
                    </li>
                </ul>

                <div class="sidebar-section__separator">Apps</div>

                <ul class="sidebar-section-nav">
                    <li class="sidebar-section-nav__item">
                        <a class="sidebar-section-nav__link" href="../apps/prototype/index.html" target="_blank">
                            <span class="sidebar-section-nav__item-icon ua-icon-navbar-open"></span>
                            <span class="sidebar-section-nav__item-text">Prototype</span>
                        </a>
                    </li>
                    <li class="sidebar-section-nav__item">
                        <a class="sidebar-section-nav__link sidebar-section-nav__link-dropdown" href="#">
                            <span class="sidebar-section-nav__item-icon iconfont-cloud-storage"></span>
                            <span class="sidebar-section-nav__item-text">File Storage</span>
                        </a>
                        <ul class="sidebar-section-subnav">
                            <li class="sidebar-section-subnav__item"><a class="sidebar-section-subnav__link" href="../apps/file-storage/list.html" target="_blank">Files List</a></li>
                            <li class="sidebar-section-subnav__item"><a class="sidebar-section-subnav__link" href="../apps/file-storage/index.html" target="_blank">Empty Files List</a></li>
                            <li class="sidebar-section-subnav__item"><a class="sidebar-section-subnav__link" href="../apps/file-storage/list-selected.html" target="_blank">Selected File</a></li>
                            <li class="sidebar-section-subnav__item"><a class="sidebar-section-subnav__link" href="../apps/file-storage/trash-empty.html" target="_blank">Empty Trash</a></li>
                            <li class="sidebar-section-subnav__item"><a class="sidebar-section-subnav__link" href="../apps/file-storage/albums.html" target="_blank">Albums</a></li>
                            <li class="sidebar-section-subnav__item"><a class="sidebar-section-subnav__link" href="../apps/file-storage/album-empty.html" target="_blank">Empty Album</a></li>
                            <li class="sidebar-section-subnav__item"><a class="sidebar-section-subnav__link" href="../apps/file-storage/photos.html" target="_blank">Photos</a></li>
                            <li class="sidebar-section-subnav__item"><a class="sidebar-section-subnav__link" href="../apps/file-storage/photos-selected.html" target="_blank">Selected Photos</a></li>
                            <li class="sidebar-section-subnav__item"><a class="sidebar-section-subnav__link" href="../apps/file-storage/photos-empty.html" target="_blank">Empty Photos</a></li>
                            <li class="sidebar-section-subnav__item"><a class="sidebar-section-subnav__link" href="../apps/file-storage/file-upload.html" target="_blank">File Upload</a></li>
                            <li class="sidebar-section-subnav__item"><a class="sidebar-section-subnav__link" href="../apps/file-storage/share-file-modal.html" target="_blank">Share File Modal</a></li>
                        </ul>
                    </li>
                    <li class="sidebar-section-nav__item">
                        <a class="sidebar-section-nav__link sidebar-section-nav__link-dropdown" href="#">
                            <span class="mdi mdi-account-multiple sidebar-section-nav__item-icon"></span>
                            <span class="sidebar-section-nav__item-text">CRM</span>
                        </a>
                        <ul class="sidebar-section-subnav">
                            <li class="sidebar-section-subnav__item"><a class="sidebar-section-subnav__link" href="../apps/crm/index.html" target="_blank">Empty State</a></li>
                            <li class="sidebar-section-subnav__item"><a class="sidebar-section-subnav__link" href="../apps/crm/dataset.html" target="_blank">Dataset</a></li>
                        </ul>
                    </li>
                </ul>

                <div class="sidebar-section__separator">Form</div>

                <ul class="sidebar-section-nav">
                    <li class="sidebar-section-nav__item">
                        <a class="sidebar-section-nav__link sidebar-section-nav__link-dropdown" href="#">
                            <span class="mdi mdi-radiobox-marked sidebar-section-nav__item-icon"></span>
                            <span class="sidebar-section-nav__item-text">Basic Elements</span>
                        </a>
                        <ul class="sidebar-section-subnav">
                            <li class="sidebar-section-subnav__item"><a class="sidebar-section-subnav__link" href="inputs.html">Inputs</a></li>
                            <li class="sidebar-section-subnav__item"><a class="sidebar-section-subnav__link" href="input-group.html">Input Group</a></li>
                            <li class="sidebar-section-subnav__item"><a class="sidebar-section-subnav__link" href="buttons.html">Buttons</a></li>
                            <li class="sidebar-section-subnav__item"><a class="sidebar-section-subnav__link" href="checkbox-radio.html">Checkbox &amp; Radio</a></li>
                            <li class="sidebar-section-subnav__item"><a class="sidebar-section-subnav__link" href="select.html">Select</a></li>
                            <li class="sidebar-section-subnav__item"><a class="sidebar-section-subnav__link" href="form-mask-input.html">Mask Input</a></li>
                            <li class="sidebar-section-subnav__item"><a class="sidebar-section-subnav__link" href="form-float-labels.html">Float Labels</a></li>
                        </ul>
                    </li>
                    <li class="sidebar-section-nav__item">
                        <a class="sidebar-section-nav__link" href="form-validation.html">
                            <span class="mdi mdi-format-pilcrow sidebar-section-nav__item-icon"></span>
                            <span class="sidebar-section-nav__item-text">Form Validation</span>
                        </a>
                    </li>
                    <li class="sidebar-section-nav__item">
                        <a class="sidebar-section-nav__link sidebar-section-nav__link-dropdown" href="#">
                            <span class="mdi mdi-step-forward sidebar-section-nav__item-icon"></span>
                            <span class="sidebar-section-nav__item-text">Form Wizard</span>
                        </a>
                        <ul class="sidebar-section-subnav">
                            <li class="sidebar-section-subnav__item"><a class="sidebar-section-subnav__link" href="form-wizard.html">Form Wizard</a></li>
                            <li class="sidebar-section-subnav__item"><a class="sidebar-section-subnav__link" href="form-wizard-a.html">Form Wizard (a)</a></li>
                            <li class="sidebar-section-subnav__item"><a class="sidebar-section-subnav__link" href="form-wizard-b.html">Form Wizard (b)</a></li>
                            <li class="sidebar-section-subnav__item"><a class="sidebar-section-subnav__link" href="form-wizard-c.html">Form Wizard (c)</a></li>
                            <li class="sidebar-section-subnav__item"><a class="sidebar-section-subnav__link" href="form-wizard-d.html">Form Wizard (d)</a></li>
                            <li class="sidebar-section-subnav__item"><a class="sidebar-section-subnav__link" href="form-wizard-e.html">Form Wizard (e)</a></li>
                        </ul>
                    </li>
                </ul>

                <div class="sidebar-section__separator">Tables</div>

                <ul class="sidebar-section-nav">
                    <li class="sidebar-section-nav__item">
                        <a class="sidebar-section-nav__link sidebar-section-nav__link-dropdown" href="#">
                            <span class="mdi mdi-grid-large sidebar-section-nav__item-icon"></span>
                            <span class="sidebar-section-nav__item-text">Dataset</span>
                        </a>
                        <ul class="sidebar-section-subnav">
                            <li class="sidebar-section-subnav__item"><a class="sidebar-section-subnav__link" href="dataset-table.html">Table</a></li>
                            <li class="sidebar-section-subnav__item"><a class="sidebar-section-subnav__link" href="dataset-grid.html">Grid</a></li>
                        </ul>
                    </li>
                    <li class="sidebar-section-nav__item">
                        <a class="sidebar-section-nav__link" href="tables.html">
                            <span class="mdi mdi-view-grid sidebar-section-nav__item-icon"></span>
                            <span class="sidebar-section-nav__item-text">Static Tables</span>
                        </a>
                    </li>
                    <li class="sidebar-section-nav__item">
                        <a class="sidebar-section-nav__link" href="datatables.html">
                            <span class="mdi mdi-view-grid sidebar-section-nav__item-icon"></span>
                            <span class="sidebar-section-nav__item-text">DataTables</span>
                        </a>
                    </li>
                    <li class="sidebar-section-nav__item">
                        <a class="sidebar-section-nav__link" href="spreadsheet.html">
                            <span class="mdi mdi-view-grid sidebar-section-nav__item-icon"></span>
                            <span class="sidebar-section-nav__item-text">Spreadsheet</span>
                        </a>
                    </li>
                </ul>

                <div class="sidebar-section__separator">Features</div>

                <ul class="sidebar-section-nav">
                    <li class="sidebar-section-nav__item">
                        <a class="sidebar-section-nav__link sidebar-section-nav__link-dropdown" href="#">
                            <span class="sidebar-section-nav__item-icon ua-icon-component"></span>
                            <span class="sidebar-section-nav__item-text">Components</span>
                        </a>
                        <ul class="sidebar-section-subnav">
                            <li class="sidebar-section-subnav__item"><a class="sidebar-section-subnav__link" href="colorpicker.html">Color Picker</a></li>
                            <li class="sidebar-section-subnav__item"><a class="sidebar-section-subnav__link" href="growl-notifications.html">Growl Notifications</a></li>
                            <li class="sidebar-section-subnav__item"><a class="sidebar-section-subnav__link" href="range-slider.html">Range Slider</a></li>
                            <li class="sidebar-section-subnav__item"><a class="sidebar-section-subnav__link" href="confirm-alerts.html">Confirm Alerts</a></li>
                            <li class="sidebar-section-subnav__item"><a class="sidebar-section-subnav__link" href="tag-editor.html">Tag Editor</a></li>
                            <li class="sidebar-section-subnav__item"><a class="sidebar-section-subnav__link" href="datepicker.html">Date Picker</a></li>
                            <li class="sidebar-section-subnav__item"><a class="sidebar-section-subnav__link" href="date-range-picker.html">Date Range Picker</a></li>
                            <li class="sidebar-section-subnav__item"><a class="sidebar-section-subnav__link" href="file-upload.html">File Upload</a></li>
                            <li class="sidebar-section-subnav__item"><a class="sidebar-section-subnav__link" href="wysiwyg-jodit-editor.html">Wysiwyg Editor</a></li>
                            <li class="sidebar-section-subnav__item"><a class="sidebar-section-subnav__link" href="page-tour.html">Page Tour</a></li>
                            <li class="sidebar-section-subnav__item"><a class="sidebar-section-subnav__link" href="sweet-alert.html">Sweet Alert</a></li>
                        </ul>
                    </li>
                    <li class="sidebar-section-nav__item">
                        <a class="sidebar-section-nav__link sidebar-section-nav__link-dropdown" href="#">
                            <span class="sidebar-section-nav__item-icon ua-icon-charts"></span>
                            <span class="sidebar-section-nav__item-text">Charts</span>
                        </a>
                        <ul class="sidebar-section-subnav">
                            <li class="sidebar-section-subnav__item"><a class="sidebar-section-subnav__link" href="frappe-charts.html">Frappe Charts</a></li>
                            <li class="sidebar-section-subnav__item"><a class="sidebar-section-subnav__link" href="tui-charts.html">Tui Charts</a></li>
                        </ul>
                    </li>
                    <li class="sidebar-section-nav__item">
                        <a class="sidebar-section-nav__link sidebar-section-nav__link-dropdown" href="#">
                            <span class="sidebar-section-nav__item-icon ua-icon-pages"></span>
                            <span class="sidebar-section-nav__item-text">Pages</span>
                        </a>
                        <ul class="sidebar-section-subnav">
                            <li class="sidebar-section-subnav__item"><a class="sidebar-section-subnav__link" href="signin.html">Sign In</a></li>
                            <li class="sidebar-section-subnav__item"><a class="sidebar-section-subnav__link" href="signin-a.html">Sign In (a)</a></li>
                            <li class="sidebar-section-subnav__item"><a class="sidebar-section-subnav__link" href="signup.html">Sign Up</a></li>
                            <li class="sidebar-section-subnav__item"><a class="sidebar-section-subnav__link" href="signup-a.html">Sign Up (a)</a></li>
                            <li class="sidebar-section-subnav__item"><a class="sidebar-section-subnav__link" href="thanks.html">Thanks</a></li>
                            <li class="sidebar-section-subnav__item"><a class="sidebar-section-subnav__link" href="invoices.html">Invoices</a></li>
                            <li class="sidebar-section-subnav__item"><a class="sidebar-section-subnav__link" href="pricing.html">Pricing</a></li>
                            <li class="sidebar-section-subnav__item"><a class="sidebar-section-subnav__link" href="subscribe-plans.html">Subscribe Plans</a></li>
                            <li class="sidebar-section-subnav__item"><a class="sidebar-section-subnav__link" href="pricing-and-plans.html">Pricing and Plans</a></li>
                            <li class="sidebar-section-subnav__item"><a class="sidebar-section-subnav__link" href="documents.html">Documents</a></li>
                            <li class="sidebar-section-subnav__item"><a class="sidebar-section-subnav__link" href="trial-period-expired.html">Trial Expired</a></li>
                        </ul>
                    </li>
                    <li class="sidebar-section-nav__item">
                        <a class="sidebar-section-nav__link sidebar-section-nav__link-dropdown" href="#">
                            <span class="sidebar-section-nav__item-icon ua-icon-pages"></span>
                            <span class="sidebar-section-nav__item-text">Extra Pages</span>
                        </a>
                        <ul class="sidebar-section-subnav">
                            <li class="sidebar-section-subnav__item"><a class="sidebar-section-subnav__link" href="contact.html">Contact</a></li>
                            <li class="sidebar-section-subnav__item"><a class="sidebar-section-subnav__link" href="users-grid.html">Users Grid</a></li>
                            <li class="sidebar-section-subnav__item"><a class="sidebar-section-subnav__link" href="users-contacts.html">Users Contacts</a></li>
                            <li class="sidebar-section-subnav__item"><a class="sidebar-section-subnav__link" href="activity.html">Activity</a></li>
                            <li class="sidebar-section-subnav__item"><a class="sidebar-section-subnav__link" href="invoices-datagrid.html">Invoices (DataTable)</a></li>
                            <li class="sidebar-section-subnav__item"><a class="sidebar-section-subnav__link" href="invoice-overview.html">Invoice Overview</a></li>
                            <li class="sidebar-section-subnav__item"><a class="sidebar-section-subnav__link" href="tree-view.html">Tree View</a></li>
                            <li class="sidebar-section-subnav__item"><a class="sidebar-section-subnav__link" href="timeline.html">Timeline</a></li>
                            <li class="sidebar-section-subnav__item"><a class="sidebar-section-subnav__link" href="listings-travel.html">Travel Listing</a></li>
                        </ul>
                    </li>
                    <li class="sidebar-section-nav__item">
                        <a class="sidebar-section-nav__link sidebar-section-nav__link-dropdown" href="#">
                            <span class="sidebar-section-nav__item-icon ua-icon-pages"></span>
                            <span class="sidebar-section-nav__item-text">Error Pages</span>
                        </a>
                        <ul class="sidebar-section-subnav">
                            <li class="sidebar-section-subnav__item"><a class="sidebar-section-subnav__link" href="403.html">Page 403</a></li>
                            <li class="sidebar-section-subnav__item"><a class="sidebar-section-subnav__link" href="404.html">Page 404</a></li>
                            <li class="sidebar-section-subnav__item"><a class="sidebar-section-subnav__link" href="404-a.html">Page 404 (a)</a></li>
                            <li class="sidebar-section-subnav__item"><a class="sidebar-section-subnav__link" href="404-b.html">Page 404 (b)</a></li>
                            <li class="sidebar-section-subnav__item"><a class="sidebar-section-subnav__link" href="404-c.html">Page 404 (c)</a></li>
                            <li class="sidebar-section-subnav__item"><a class="sidebar-section-subnav__link" href="500.html">Page 500</a></li>
                            <li class="sidebar-section-subnav__item"><a class="sidebar-section-subnav__link" href="wrong.html">Wrong Page</a></li>
                        </ul>
                    </li>
                    <li class="sidebar-section-nav__item">
                        <a class="sidebar-section-nav__link sidebar-section-nav__link-dropdown" href="#">
                            <span class="sidebar-section-nav__item-icon ua-icon-help-circle"></span>
                            <span class="sidebar-section-nav__item-text">Help Center</span>
                        </a>
                        <ul class="sidebar-section-subnav">
                            <li class="sidebar-section-subnav__item"><a class="sidebar-section-subnav__link" href="help-center.html">Browse Help Desk</a></li>
                            <li class="sidebar-section-subnav__item"><a class="sidebar-section-subnav__link" href="help-center-submit-ticket.html">Submit Ticket</a></li>
                        </ul>
                    </li>
                    <li class="sidebar-section-nav__item">
                        <a class="sidebar-section-nav__link sidebar-section-nav__link-dropdown" href="#">
                            <span class="sidebar-section-nav__item-icon ua-icon-settings"></span>
                            <span class="sidebar-section-nav__item-text">Settings</span>
                        </a>
                        <ul class="sidebar-section-subnav">
                            <li class="sidebar-section-subnav__item"><a class="sidebar-section-subnav__link" href="app-settings.html">App Settings</a></li>
                            <li class="sidebar-section-subnav__item"><a class="sidebar-section-subnav__link" href="global-settings.html">Global Settings</a></li>
                            <li class="sidebar-section-subnav__item"><a class="sidebar-section-subnav__link" href="account-settings.html">Account Settings</a></li>
                        </ul>
                    </li>
                    <li class="sidebar-section-nav__item">
                        <a class="sidebar-section-nav__link" href="email-templates.html">
                            <span class="mdi mdi-email sidebar-section-nav__item-icon"></span>
                            <span class="sidebar-section-nav__item-text">Email Templates</span>
                        </a>
                    </li>
                </ul>

                <div class="sidebar-section__separator">Modules</div>

                <ul class="sidebar-section-nav">
                    <li class="sidebar-section-nav__item">
                        <a class="sidebar-section-nav__link sidebar-section-nav__link-dropdown" href="#">
                            <span class="mdi mdi-currency-usd sidebar-section-nav__item-icon"></span>
                            <span class="sidebar-section-nav__item-text">E-commerce</span>
                        </a>
                        <ul class="sidebar-section-subnav">
                            <li class="sidebar-section-subnav__item"><a class="sidebar-section-subnav__link" href="ecommerce-products.html">Products</a></li>
                        </ul>
                    </li>
                    <li class="sidebar-section-nav__item">
                        <a class="sidebar-section-nav__link" href="mail.html">
                            <span class="mdi mdi-at sidebar-section-nav__item-icon"></span>
                            <span class="sidebar-section-nav__item-text">Mail</span>
                        </a>
                    </li>
                    <li class="sidebar-section-nav__item">
                        <a class="sidebar-section-nav__link" href="messenger.html">
                            <span class="mdi mdi-message-processing sidebar-section-nav__item-icon"></span>
                            <span class="sidebar-section-nav__item-text">Messenger</span>
                        </a>
                    </li>
                    <li class="sidebar-section-nav__item">
                        <a class="sidebar-section-nav__link" href="file-manager.html">
                            <span class="mdi mdi-file sidebar-section-nav__item-icon"></span>
                            <span class="sidebar-section-nav__item-text">File Manager</span>
                        </a>
                    </li>
                    <li class="sidebar-section-nav__item">
                        <a class="sidebar-section-nav__link" href="scheduler.html">
                            <span class="mdi mdi-calendar-clock sidebar-section-nav__item-icon"></span>
                            <span class="sidebar-section-nav__item-text">Scheduler</span>
                        </a>
                    </li>
                    <li class="sidebar-section-nav__item">
                        <a class="sidebar-section-nav__link" href="kanban-board.html">
                            <span class="mdi mdi-clipboard-text sidebar-section-nav__item-icon"></span>
                            <span class="sidebar-section-nav__item-text">Kanban Board</span>
                        </a>
                    </li>
                    <li class="sidebar-section-nav__item">
                        <a class="sidebar-section-nav__link sidebar-section-nav__link-dropdown" href="#">
                            <span class="mdi mdi-clipboard-check sidebar-section-nav__item-icon"></span>
                            <span class="sidebar-section-nav__item-text">Tasks</span>
                        </a>
                        <ul class="sidebar-section-subnav">
                            <li class="sidebar-section-subnav__item"><a class="sidebar-section-subnav__link" href="tasks.html">Tasks List</a></li>
                            <li class="sidebar-section-subnav__item"><a class="sidebar-section-subnav__link" href="task-overview.html">Task Overview</a></li>
                        </ul>
                    </li>
                </ul>
            </div>

            <div class="sidebar-section__separator">Social Toolkit</div>

            <ul class="sidebar-section-nav">
                <li class="sidebar-section-nav__item">
                    <a class="sidebar-section-nav__link" href="social-feed.html">
                        <span class="sidebar-section-nav__item-icon iconfont-activity"></span>
                        <span class="sidebar-section-nav__item-text">Social Feed</span>
                    </a>
                </li>
                <li class="sidebar-section-nav__item">
                    <a class="sidebar-section-nav__link" href="social-profile.html">
                        <span class="sidebar-section-nav__item-icon iconfont-user-circle"></span>
                        <span class="sidebar-section-nav__item-text">Social Profile</span>
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