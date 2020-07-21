<style type="text/css">
    .quantity .minuser, .quantity .pluser {
        display: block;
        float: left;
        cursor: pointer;
        border: 0 transparent;
        padding: 0;
        width: 36px;
        height: 40px;
        line-height: 40px;
        text-align: center;
        background-color: #eee;
        font-size: 16px;
        font-weight: 700;
        transition: background-color .2s linear;
        -webkit-transition: background-color .2s linear;
        -o-transition: background-color .2s linear;
    }
    </style>

<section id="content">
    <div class="content-wrap">
        <div class="container clearfix">
            <div class="table-responsive">
                <section id="page-title">
                    <div class="container clearfix">
                        <h1>Cart</h1>

                    </div>
                </section>
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
                                <a href="<?php echo base_url();?>cart/decrease_count/<?php echo $cart_item['product_id']?>" class="minuser">-</a>
                                <input disabled  type="text" name="quantity" value="<?php echo $cart_item['cart_count'] ?>" class="qty"/>
                                <a href="<?php echo base_url();?>cart/add_to_cart/<?php echo $cart_item['product_id']?>" class="pluser">+</a>
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
            <div class="row clearfix">

                <div class="col-lg-6 clearfix">
                    <h4>Cart Totals</h4>
                    <div class="table-responsive">
                        <table class="table cart">
                            <tbody>
                            <tr class="cart_item">
                                <td class="cart-product-name">
                                    <strong>Cart Subtotal</strong>
                                </td>
                                <td class="cart-product-name">
                                    <span class="amount"><?php echo $cart_amount; ?></span>
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
                                    <span class="amount color lead"><strong><?php echo $cart_amount; ?></strong></span>
                                </td>
                                <td class="cart-product-name">
                                    <a href="http://localhost/crm/cart/place_order"><button class="button button-3d button-small nomargin fright">Place Order</button></a>
                                </td>
                            </tr>



                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>