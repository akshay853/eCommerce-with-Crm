<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="author" content="SemiColonWeb" />

    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,400i,700|Raleway:300,400,500,600,700|Crete+Round:400i" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="<?php echo SHOP_DESIGN_PATH;?>css/bootstrap.css" type="text/css" />
    <link rel="stylesheet" href="<?php echo SHOP_DESIGN_PATH;?>style.css" type="text/css" />
    <link rel="stylesheet" href="<?php echo SHOP_DESIGN_PATH;?>css/dark.css" type="text/css" />
    <link rel="stylesheet" href="<?php echo SHOP_DESIGN_PATH;?>css/font-icons.css" type="text/css" />
    <link rel="stylesheet" href="<?php echo SHOP_DESIGN_PATH;?>css/animate.css" type="text/css" />
    <link rel="stylesheet" href="<?php echo SHOP_DESIGN_PATH;?>css/magnific-popup.css" type="text/css" />
    <link rel="stylesheet" href="<?php echo SHOP_DESIGN_PATH;?>css/responsive.css" type="text/css" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <title>Home - Shop Layout 2 | Canvas</title>
</head>
<body class="stretched">

<div id="wrapper" class="clearfix">

    <div id="top-bar">
        <div class="container clearfix">
            
            <div class="col_half col_last fright nobottommargin">

                <div class="top-links">
                    <ul>
                       
                       
                       

                        <li><a href="<?php echo base_url();?>login/seller_login">Seller Login</a></li>
                        <li><a href="<?php echo base_url();?>login/staff_login">Staff Login</a></li>
                          <li><a href="<?php echo base_url();?>login/user_login">user Login</a></li>
                           <li><a href="<?php echo base_url();?>admin/adminlogin">admin</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <header id="header" class="sticky-style-2">
        <div class="container clearfix">

            <div id="logo">
                <a href="index.html" class="standard-logo" data-dark-logo="images/logo-dark.png"><img src="<?php echo SHOP_DESIGN_PATH;?>images/nan.png" alt="NAN"></a>
                <a href="index.html" class="retina-logo" data-dark-logo="images/logo-dark@2x.png"><img src="<?php echo SHOP_DESIGN_PATH;?>images/logo@2x.png" alt="NAN"></a>
            </div>
            <ul class="header-extras">
              
            </ul>
        </div>
        <div id="header-wrap">

            <nav id="primary-menu" class="style-2">
                <div class="container clearfix">
                    <div id="primary-menu-trigger"><i class="icon-reorder"></i></div>
                    <ul>
                        <li class="current"><a href="<?php echo base_url();?>"><div>Home</div><span>Lets Start</span></a>
                        </li>

                        
                        <li><a href="<?php echo base_url();?>"><div>product</div><span>Latest News</span></a></li>
                        <li><a href="<?php echo base_url();?>welcome/contact"><div>Contact</div><span>Get In Touch</span></a></li>
                    </ul>

                    <div id="top-cart">
                        <a href="" id="top-cart-trigger"><i class="icon-shopping-cart"></i></a>
                        <div class="top-cart-content">
                            <div class="top-cart-title">
                                <h4>Shopping Cart</h4>
                            </div>
                              <div class="top-cart-action clearfix">

                                  <a href="<?php echo base_url();?>cart/add_to_cart"><button class="button button-3d button-small nomargin fright">View Cart</button></a>
                            </div>
                        </div>
                    </div>

                    <div id="top-search">
<!--                        <a href="#" id="top-search-trigger"><i class="icon-search3"></i><i class="icon-line-cross"></i></a>-->
<!--                        <form action="search.html" method="get">-->
<!--                            <input type="text" name="q" class="form-control" value="" placeholder="Type &amp; Hit Enter..">-->
<!--                        </form>-->
                    </div>
                </div>
            </nav>
        </div>
    </header>
