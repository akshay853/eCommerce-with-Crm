

<section id="content">
    <div class="content-wrap">
        
        
        <div class="container clearfix">



<div class="clearfix"></div>




<div id="shop" class="shop product-3 grid-container clearfix" data-layout="fitRows">
      
  <?php foreach($all_product as $single_products){ ?>   
<div class="product clearfix">
<div class="product-image">
 <a href="product/single_product_view/<?php echo $single_products['product_id']; ?>"><img src="http://localhost/crm/upload/<?php echo $single_products['productimage'];?>" alt="Image"></a>

<div class="sale-flash"><?php echo $single_products['discount'];?>%&nbsp;off</div>
<div class="product-overlay">
<a href="cart/add_to_cart/<?php echo $single_products['product_id']; ?>" class="add-to-cart"><i class="icon-shopping-cart"></i><span> Add to Cart</span></a>
<a href="include/ajax/shop-item.html" class="item-quick-view" data-lightbox="ajax"><i class="icon-zoom-in2"></i><span> Quick View</span></a>
</div>
</div>
<div class="product-desc center">
<div class="product-title"><h3><a href="#"><?php echo $single_products['productname'];?></a></h3></div>
<div class="product-price"><?php echo $single_products['productcost'];?></div>
<div class="product-rating">
<i class="icon-star3"></i>
<i class="icon-star3"></i>
<i class="icon-star3"></i>
<i class="icon-star3"></i>
<i class="icon-star-half-full"></i>
 </div>
</div>
</div>
 <?php } ?>
</div>


            <?php if($recommended){?>
            <div class="container clearfix">

                <div class="fancy-title title-center title-dotted-border topmargin" style="background-color: cyan">
                    <h3 style="background-color: greenyellow">Recommended Products For You</h3>
                </div>
                 <div id="oc-product" class="owl-carousel product-carousel carousel-widget" data-margin="30"
                 data-pagi="false" data-autoplay="5000" data-items-xs="1" data-items-md="2" data-items-lg="3"
                 data-items-xl="4">
                
                <?php foreach($recommended as $products){ ?> 
                
                 
                     
                     <a href="product/single_product_view/<?php echo $products['product_id']; ?>"><img src="http://localhost/crm/upload/<?php echo $products['productimage'];?>" alt="Image">
                     <h3><?php echo $products['productname']; ?></h3>
                     </a>

                     
                     
                    
                <?php }?>
                
                        </div>
            </div>
            <?php } ?>

</div>
        
       
        
        
          
       <!-- <div>
            <div id="oc-clients-full" class="owl-carousel image-carousel carousel-widget" data-margin="30" data-nav="false" data-autoplay="5000" data-pagi="false" data-items-xs="2" data-items-sm="3" data-items-md="4" data-items-lg="5" data-items-xl="7">
                <div class="oc-item"><a href="#"><img src="<?php echo SHOP_DESIGN_PATH;?>images/clients/logo/1.png" alt="Clients"></a></div>
                <div class="oc-item"><a href="#"><img src="<?php echo SHOP_DESIGN_PATH;?>images/clients/logo/2.png" alt="Clients"></a></div>
                <div class="oc-item"><a href="#"><img src="<?php echo SHOP_DESIGN_PATH;?>images/clients/logo/3.png" alt="Clients"></a></div>
                <div class="oc-item"><a href="#"><img src="<?php echo SHOP_DESIGN_PATH;?>images/clients/logo/4.png" alt="Clients"></a></div>
                <div class="oc-item"><a href="#"><img src="<?php echo SHOP_DESIGN_PATH;?>images/clients/logo/5.png" alt="Clients"></a></div>
                <div class="oc-item"><a href="#"><img src="<?php echo SHOP_DESIGN_PATH;?>images/clients/logo/6.png" alt="Clients"></a></div>
                <div class="oc-item"><a href="#"><img src="<?php echo SHOP_DESIGN_PATH;?>images/clients/logo/7.png" alt="Clients"></a></div>
                <div class="oc-item"><a href="#"><img src="<?php echo SHOP_DESIGN_PATH;?>images/clients/logo/8.png" alt="Clients"></a></div>
                <div class="oc-item"><a href="#"><img src="<?php echo SHOP_DESIGN_PATH;?>images/clients/logo/9.png" alt="Clients"></a></div>
                <div class="oc-item"><a href="#"><img src="<?php echo SHOP_DESIGN_PATH;?>images/clients/logo/10.png" alt="Clients"></a></div>
                <div class="oc-item"><a href="#"><img src="<?php echo SHOP_DESIGN_PATH;?>images/clients/logo/11.png" alt="Clients"></a></div>
                <div class="oc-item"><a href="#"><img src="<?php echo SHOP_DESIGN_PATH;?>images/clients/logo/12.png" alt="Clients"></a></div>
                <div class="oc-item"><a href="#"><img src="<?php echo SHOP_DESIGN_PATH;?>images/clients/logo/13.png" alt="Clients"></a></div>
                <div class="oc-item"><a href="#"><img src="<?php echo SHOP_DESIGN_PATH;?>images/clients/logo/14.png" alt="Clients"></a></div>
                <div class="oc-item"><a href="#"><img src="<?php echo SHOP_DESIGN_PATH;?>images/clients/logo/15.png" alt="Clients"></a></div>
                <div class="oc-item"><a href="#"><img src="<?php echo SHOP_DESIGN_PATH;?>images/clients/logo/18.png" alt="Clients"></a></div>
            </div>
        </div>-->
       
    </div>
</section>
