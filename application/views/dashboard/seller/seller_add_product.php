<div class="page-content">

    <div class="container-fluid container-fh">
        <div class="page-content__header">
            <div>
                <h2 class="page-content__header-heading">Float Labels</h2>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="index.html">Home</a>
                    </li>
                    <li class="breadcrumb-item">
                        <a href="#">Form</a>
                    </li>
                    <li class="breadcrumb-item active">
                        Add Product
                    </li>
                </ol>
            </div>
        </div>
        <div class="container-fh__content">
            <div class="row">
                <div class="col-lg-10">
                    <form class="main-container" action="<?php echo base_url();?>seller/add_product_action" method="POST"enctype="multipart/form-data">
                        <div class="row">

                            <div class="col-lg-4">
                              <div class="form-group">
                                  <label><?php if(isset($upload_error)){echo($upload_error);}?>
                              </div>

                                <div class="form-group">
                                    <label for="pattern-phone">Product name</label>
                                    <input required id="pattern-phone" type="text"name="productname"id="productname" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="number-mask">product cost </label>
                                    <input required id="number-mask" type="number"name="productcost"id="productcost" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="date-mask">product category </label>
                                    <input required id="date-mask" type="text" name="productcategory" id="productcategory"class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="dynamic-mask">product description </label>
                                    <input required id="dynamic-mask" type="text" name="productdescription" id="productdescription"class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="time-mask">product brand </label>
                                    <input required id="time-mask" type="text"name="productbrand"id="productbrand" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="credit-card-mask">product discount</label>
                                    <input required id="credit-card-mask" type="number" name="discount"id="discount"class="form-control">
                                </div>
                                <div>
                                    upload picture<input type="file"name="image">

                                </div>

                                <button type="submit"  class="btn btn-info m-social-profile__info-user-action">ADD</button>

                            </div>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>

</div>

