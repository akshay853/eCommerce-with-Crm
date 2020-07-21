<section id="content">
    <div class="content-wrap">
        <div class="container clearfix">
            <div class="row clearfix">
                <div class="col-md-9">

                    <div class="heading-block noborder">
                          <span>Your Purchase History</span>
                    </div>
                    <div class="clear"></div>
                    <table id="new-orders-table" class="table table-hover table-xl mb-0">
                        <thead>
                        <tr>
                            <th class="border-top-0">Order ID</th>
                            <th class="border-top-0">Cart Items</th>
                            <th class="border-top-0">Status</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php if($all_orders){?>
                            <?php foreach ($all_orders as $product) { ?>
                                <tr>
                                    <td class="text-truncate"><?php echo $product['order_id']; ?></td>
                                    <td class="text-truncate p-1">
                                        <ul class="list-unstyled users-list m-0">

                                            <?php foreach ($product['order_items']['cart'] as $items) { ?>
                                                <li data-toggle="tooltip" data-popup="tooltip-custom" data-original-title="<?php echo $items['productname'];?>"  style="width:90px;"class="avatar avatar-sm pull-up">
                                                    <img class="media-object rounded-circle" src="<?php echo base_url(); ?>upload/<?php echo $items['productimage'];?>" alt="Avatar">
                                                </li>

                                            <?php } ?>

                                        </ul>
                                    </td>
                                    <td class="text-truncate"><?php echo $product['status'];?></td>
                                </tr>

                            <?php } ?>

                        <?php }else{?>
                            <tr>
                                <td class="text-truncate">No Orders Yet! Click on Products to start purchasing.</td>
                            </tr>
                        <?php }?>

                        </tbody>
                    </table>
                </div>
                <div class="w-100 line d-block d-md-none"></div>
                <div class="col-md-3 clearfix">


                </div>
            </div>
        </div>
    </div>
</section>