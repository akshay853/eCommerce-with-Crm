 <div class="page-content">
    
<div class="container-fluid">
    
  <div class="page-content__header">
    <div>
      <h2 class="page-content__header-heading">PRODUCTS</h2>
    </div>
  </div>
    
 <?php foreach($all_product as $product){?>   

    <div class="col-lg-3" style="float:left;display: inline;">
      <div class="card-widget card-widget-b">
        <div class="card-widget-b__user" style="background-image: url(<?php echo base_url();?>/upload/<?php echo $product['productimage']?>)">
          <div class="card-widget-b__controls">
            <span class="ua-icon-edit-pencil card-widget-b__control"></span>
            <div class="dropdown show">
              <span data-toggle="dropdown">
                <span class="ua-icon-dots-h-alt card-widget-b__control"></span>
              </span>
              <div class="dropdown-menu dropdown-menu-right">
                <a class="dropdown-item" href="#">Action</a>
                <a class="dropdown-item" href="#">Another action</a>
                <a class="dropdown-item" href="#">Something else here</a>
              </div>
            </div>
          </div>
          <a href="#" class="card-widget-b__user-name"><?php echo $product['productname'];?></a>
         
        </div>
        <div class="card-widget-b__stats">
          <div class="card-widget-b__stats-item">
            <span class="ua-icon-phone card-widget-b__stats-item-icon"></span>
            <div class="card-widget-b__stats-item-content">
                <div class="card-widget-b__stats-item-value">cost&nbsp;<?php echo $product['productcost'];?><br></div>
                <div class="card-widget-b__stats-item-desc">discount&nbsp;<?php echo $product['discount'];?>%</div>
                <br> <a href="<?php echo base_url();?>seller/seller_product_edit/<?php echo $product['product_id'];?>"><button class="btn btn-success m-social-profile__info-user-action">EDIT</button></a>
            </div>
          </div>
       
            
        </div>
      </div>
     </div>
   
 <?php } ?>
    </form>
</div>

  </div>