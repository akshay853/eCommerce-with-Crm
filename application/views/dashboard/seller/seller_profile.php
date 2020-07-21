 <div class="page-content">
             <form action="<?php echo base_url();?>seller/edit_profile" method="POST">
<div class="container-fluid container-fh">
  <div class="main-container container-fh__content m-social-profile">
    <div class="m-social-profile__cover" style="background-image: url('<?php echo DASHBOARD_DESIGN_PATH;?>img/social-profile/8.png');">
      <div class="m-social-profile__profile-image">
        <img src="http://localhost/crm/upload/<?php echo $seller_profile_data['sellerimage'];?>" alt="Image"alt="" class=" rounded-circle">
      </div>
    </div>
    <div class="m-social-profile__content" aligin="center">

      <div class="m-social-profile__info" aligin="center">
        <div class="m-social-profile__info-user">
          <div class="m-social-profile__info-username"aligin="center"><?php echo $seller_profile_data['firstname']?></div>
          <div class="m-social-profile__info-user-actions">

            <div> 
                
             <div class="postcontent nobottommargin clearfix">
                 <div class="form-group col-md-12">
              <table class="table">
                  <tr><td>Company Name</td><td><?php echo $seller_profile_data['companyname']?></td></tr>
                  <tr><td>Phone Number</td><td><?php echo $seller_profile_data['phonenumber']?></td></tr>
                  <tr><td>E-mail</td><td><?php echo $seller_profile_data['email']?></td></tr>
              </table>
            
                 <br><button type="submit"  class="btn btn-info m-social-profile__info-user-action">edit</button><br><br>
                 </div>
            </div>
           
          </div>
        </div>
        
        
        
      </div>
         
    </div>
        <div class="m-social-profile__info" aligin="center">
            <div class="m-social-profile__info-user">
                <div class="m-social-profile__info-username"aligin="center">All Orders</div>
                <div class="m-social-profile__info-user-actions">

                    <div>

                        <div class="clearfix">
                            <div class="col-md-12">
                                <table class="table">
                                    <thead class="">
                                    <tr>
                                        <th>Customer Name</th>
                                        <th >Cart Items</th>
                                        <th>Date</th>
                                        <th>Status</th>
                                    </tr>
                                    </thead>
                                    <tbody>

                                    <?php foreach ($all_orders as $product) { ?>
                                        <tr>
                                            <td><?php echo $product['customer_name'] ?></td>
                                            <td>
                                                <table class="table">
                                                    <?php foreach ($product['order_items']['cart'] as $items) { ?>
                                                        <tr>
                                                            <td><?php echo $items['productname']; ?></td>
                                                            <td><?php echo $items['productcost']; ?></td>
                                                            <td>*</td>
                                                            <td><?php echo $items['cart_count']; ?></td>
                                                            <td><?php echo $items['sub_total']; ?></td><br>
                                                        </tr>

                                                    <?php } ?>
                                                </table>
                                            </td>

                                            <td><?php echo $product['date']; ?></td>

                                            <td><a href="<?php echo base_url();?>seller/change_order_status/<?php echo $product['order_id'];?>/<?php echo $product['status']; ?>" class="btn btn-info"><?php echo $product['status']; ?></td>


                                        </tr>
                                    <?php } ?>
                                    </tbody>
                                </table>


                            </div>
                        </div>

                    </div>
                </div>



            </div>

        </div>
  </div>

</div>
</form>
  </div>