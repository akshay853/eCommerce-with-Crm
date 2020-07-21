<section id="content">
    <div class="content-wrap">
        <div class="container clearfix">

            <div class="clear"></div>
            <div class="row clearfix">

                <?php if($login_user){?>
                    <div class="col-lg-6">
                        <h3>Billing Address</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde, vel odio non dicta provident sint ex autem mollitia dolorem illum repellat ipsum aliquid illo similique sapiente fugiat minus ratione.</p>
                        <form id="billing-form" name="billing-form" class="nobottommargin" action="#" method="post">
                            <div class="col_full">
                                <label for="billing-form-name">Name:</label>
                                <input disabled type="text" id="billing-form-name" name="billing-form-name" value="<?php echo $profiledata['firstname'];?>" class="sm-form-control" />
                            </div>
                            <div class="col_full">
                                <label for="billing-form-lname">Last Name:</label>
                                <input disabled type="text" id="billing-form-lname" name="billing-form-lname" value="<?php echo $profiledata['secondname'];?>" class="sm-form-control" />
                            </div>
                            <div class="clear"></div>
                            <div class="col_full">
                                <label for="billing-form-address">Address:</label>
                                <input disabled  type="text" id="billing-form-address" name="billing-form-address" value="<?php echo $profiledata['address'];?>" class="sm-form-control" />
                            </div>
                            <div class="col_full">
                                <input disabled type="text" id="billing-form-address2" name="billing-form-adress" value="<?php echo $profiledata['state'];?>,<?php echo $profiledata['district'];?>" class="sm-form-control" />
                            </div>
                            <div class="col_full">
                                <label for="billing-form-email">Email Address:</label>
                                <input disabled type="email" id="billing-form-email" name="billing-form-email" value="<?php echo $profiledata['email'];?>" class="sm-form-control" />
                            </div>
                            <div class="col_full">
                                <label for="billing-form-phone">Phone:</label>
                                <input disabled type="text" id="billing-form-phone" name="billing-form-phone" value="<?php echo $profiledata['phonenumber'];?>" class="sm-form-control" />
                            </div>
                        </form>
                    </div>
                    <div class="col-lg-6">
                        <h4>Your Orders</h4>
                        <table class="table cart">
                            <thead>
                            <tr>
                                <th class="cart-product-remove">&nbsp;</th>
                                <th class="cart-product-thumbnail">&nbsp;</th>
                                <th class="cart-product-name">Product</th>
                                <th class="cart-product-price">Unit Price</th>
                                <th class="cart-product-quantity">Quantity</th>
                                <th class="cart-product-subtotal">Total</th>
                            </tr>
                            </thead>
                            <tbody>


                            <?php if($cart){ foreach ($cart as $cart_item) {   //print_r($cart_item); //die('if'); ?>
                                <tr class="cart_item">
                                    <td class="cart-product-remove">
                                        <a href="<?php echo base_url();?>cart/remove_item_single/<?php echo $cart_item['product_id']?>" class="remove" title="Remove this item"><i class="icon-trash2"></i></a>
                                    </td>
                                    <td class="cart-product-thumbnail">
                                        <a href="#"><img width="64" height="64" src="<?php echo base_url(); ?>upload/<?php echo $cart_item['productimage'] ?>"
                                                         alt="Pink Printed Dress"></a>
                                    </td>
                                    <td class="cart-product-name">
                                        <a href="#"><?php echo $cart_item['productname'] ?></a>
                                    </td>
                                    <td class="cart-product-price">
                                        <span class="amount"><?php echo $cart_item['productcost'] ?></span>
                                    </td>
                                    <td class="cart-product-quantity">
                                        <div class="quantity clearfix">

                                            <input disabled  type="text" name="quantity" value="<?php echo $cart_item['cart_count'] ?>" class="qty"/>

                                        </div>
                                    </td>
                                    <td class="cart-product-subtotal">
                                        <span class="amount"><?php echo $cart_item['sub_total'] ?></span>
                                    </td>
                                </tr>
                            <?php }} ?>
                            </tbody>
                        </table>
                    </div>
                <?php }else{?>
                    <div class="col_half">
                        <div class="card">
                            <div class="card-body">
                                Returning customer? <a href="<?php echo base_url();?>login/user_login/redirect-place_order">Click here to login</a>
                            </div>
                        </div>
                    </div> <div class="col_half">
                        <div class="card">
                            <div class="card-body">
                                New customer?,Register here <a href="<?php echo base_url();?>register/user_register/redirect-place_order">Click here to login</a>
                            </div>
                        </div>
                    </div>

                <?php } ?>


                <div class="w-100 bottommargin"></div>

                <div class="col-lg-12">
                    <h4>Cart Totals</h4>
                    <div class="table-responsive">
                        <table class="table cart">
                            <tbody>
                            <tr class="cart_item">
                                <td class="notopborder cart-product-name">
                                    <strong>Cart Subtotal</strong>
                                </td>
                                <td class="notopborder cart-product-name">
                                    <span class="amount"><?php echo $cart_item['productcost'] ?></span>
                                </td>
                            </tr>
                            <tr class="cart_item">
                                <td class="cart-product-name">
                                    <strong>Shipping</strong>
                                </td>
                                <td class="cart-product-name">
                                    <span class="amount">Free Delivery</span>
                                </td>
                            </tr>
                            <tr class="cart_item">
                                <td class="cart-product-name">
                                    <strong>Total</strong>
                                </td>
                                <td class="cart-product-name">
                                    <span class="amount color lead"><strong><?php echo $cart_item['sub_total'] ?></strong></span>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>

                    <?php if(!$login_user){?>
                        <div class="accordion clearfix">
                            <div class="acctitle"><i class="acc-closed icon-ok-circle"></i><i class="acc-open icon-remove-circle"></i>Please Login to Place order</div>
                            <div class="acc_content clearfix">You need to login to place order</div>

                        </div>
                        <a href="<?php echo base_url('login/user_login');?>" class="button button-3d fright">Login Now </a>
                    <?php }else{?>
                    <div class="accordion clearfix">
                        <div class="acctitle"><i class="acc-closed icon-ok-circle"></i><i class="acc-open icon-remove-circle"></i>Cash on Delivery</div>
                        <div class="acc_content clearfix">You will be required to pay the amount at the time of delivery, please keep cash.</div>

                    </div>
                    <a href="<?php echo base_url('cart/place_order_action');?>" class="button button-3d fright">Place Order</a>

                    <?php } ?>



                </div>
            </div>
        </div>
    </div>
</section>