<div class="page-content">

    <div class="container-fluid m-tasks">
        <div class="page-content__header">

        </div>
        <div class="main-container m-tasks__container container-heading-bordered">


            <div class="container-body m-tasks__columns">


                        <div class="main-container table-container">
                            <table class="table table__actions">
                                <thead>
                                <tr>
                                    <th>Product Name</th>
                                    <th>Category</th>
                                    <th>Total Sale</th>
                                    <th>Total Earnings</th>
                                    <th>Next Sale Probability</th>

                                    <th>&nbsp;</th>
                                </tr>
                                </thead>
                                <tbody>

                                <?php if($all_ratings){foreach ($all_ratings as $rating){?>
                                    <tr>
                                        <td>
                                            <div class="table__cell-widget">
                                                <a href="#" class="table__cell-widget-name"><?php echo $rating['productname'];?></a>

                                            </div>
                                        </td>
                                        <td>
                                            <div class="table__cell-widget">
                                                <span class="table__cell-widget-name"><?php echo $rating['productcategory'];?></span>

                                            </div>
                                        </td>
                                        <td>
                                            <div class="table__cell-user">
                                                <img src="img/users/user-10.png" alt="" class="table__cell-user-avatar rounded-circle">
                                                <div class="table__cell-user-wrap">
                                                    <a href="#" class="table__cell-widget-name"><?php echo $rating['cart_count'];?></a>

                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="table__cell-user">
                                                <img src="img/users/user-10.png" alt="" class="table__cell-user-avatar rounded-circle">
                                                <div class="table__cell-user-wrap">
                                                    <a href="#" class="table__cell-widget-name"><?php echo $rating['sub_total'];?></a>

                                                </div>
                                            </div>
                                        </td>

                                        <td class="table__label">
                                            <div class="progress" style="height: 20px;">
                                                <?php $prob =  $rating['cart_count']*100/$total_count;?>
                                                <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" style="width:<?php echo $prob;?>%;" aria-valuenow="<?php echo $prob;?>" aria-valuemax="100">
                                              <?php echo $prob ?>
                                              </div>
                                            </div>
                                        </td>

                                        <td class="table__label">
                                            <a class="btn btn-primary"href="<?php echo base_url();?>staff/add_to_recommended/<?php echo $rating["product_id"];?>">Add this to Recommended </a>
                                        </td>

                                    </tr>
                                <?php }}else{?>
                                    <tr>
                                        <td>
                                            <div class="table__cell-widget">

                                                <span class="table__cell-widget-description">No Product Purchased yet</span>
                                            </div>
                                        </td>

                                    </tr>
                                <?php } ?>



                                </tbody>
                            </table>
                        </div>

            </div>
        </div>
    </div>

</div>