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
                         <li><a href="<?php echo base_url();?>user/my_purchases">My Purchases</a></li>
                         <li><a href="<?php echo base_url();?>user/view_profile">profile</a></li>
                         <li><a href="<?php echo base_url();?>login/logout">logout</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <header id="header" class="sticky-style-2">
        <div class="container clearfix">

            <div id="logo">
                <a href="index.html" class="standard-logo" data-dark-logo="images/logo-dark.png"><img src="<?php echo SHOP_DESIGN_PATH;?>images/nan.png" alt="Canvas Logo"></a>
                <a href="index.html" class="retina-logo" data-dark-logo="images/logo-dark@2x.png"><img src="<?php echo SHOP_DESIGN_PATH;?>images/logo@2x.png" alt="Canvas Logo"></a>
            </div>
           
        </div>
        <div id="header-wrap">

            <nav id="primary-menu" class="style-2">
                <div class="container clearfix">
                    <div id="primary-menu-trigger"><i class="icon-reorder"></i></div>
                    <ul>
                      
                        <li><a href="<?php echo base_url();?>"><div>Home</div><span>Awesome Works</span></a></li>
                        <li><a href="<?php echo base_url();?>"><div>Products</div><span>Awesome Works</span></a></li>
                        
                        <li><a href="<?php echo base_url();?>welcome/contact"><div>Contact</div><span>Get In Touch</span></a></li>
                    </ul>

                    <div id="top-cart">
                        <a href="#" id="top-cart-trigger">
                            <?php if(isset($_SESSION['cart_data'])){?>
                            <i class="icon-shopping-cart"></i><span>1</span></a>
                            <?php }else{?>
                                 <i class="icon-shopping-cart"></i><span>0</span></a>
                            <?php }?>
                            
                        <div class="top-cart-content">
                            <div class="top-cart-title">
                                <h4>Shopping Cart</h4>
                            </div>
                         <!--   <div class="top-cart-items">
                                <div class="top-cart-item clearfix">
                                    <div class="top-cart-item-image">
                                        <a href="#"><img src="<?php echo SHOP_DESIGN_PATH;?>images/shop/small/1.jpg" alt="Blue Round-Neck Tshirt" /></a>
                                    </div>
                                    <div class="top-cart-item-desc">
                                        <a href="#">Blue Round-Neck Tshirt</a>
                                        <span class="top-cart-item-price">$19.99</span>
                                        <span class="top-cart-item-quantity">x 2</span>
                                    </div>
                                </div>
                                <div class="top-cart-item clearfix">
                                    <div class="top-cart-item-image">
                                        <a href="#"><img src="<?php echo SHOP_DESIGN_PATH;?>images/shop/small/6.jpg" alt="Light Blue Denim Dress" /></a>
                                    </div>
                                    <div class="top-cart-item-desc">
                                        <a href="#">Light Blue Denim Dress</a>
                                        <span class="top-cart-item-price">$24.99</span>
                                        <span class="top-cart-item-quantity">x 3</span>
                                    </div>
                                </div>
                            </div>
                            <div class="top-cart-action clearfix">
                                <span class="fleft top-checkout-price">$114.95</span>
                                <a href="<?php echo base_url();?>cart/add_to_cart"> <button type="submit" class="button button-3d button-small nomargin fright">View Cart</button></a>
                            </div>
                       !-->
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
