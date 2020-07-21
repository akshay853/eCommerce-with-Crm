<section id="content">
    <div class="content-wrap">
        <div class="container clearfix">
            <div class="single-product">
                <div class="product">
                    <div class="col_two_fifth">
                        <div class="product-image">
                            <div class="fslider" data-pagi="false" data-arrows="false" data-thumbs="true">
                                <div class="flexslider">
                                    <div class="slider-wrap" data-lightbox="gallery">
                                        <div class="slide"
                                             data-thumb="<?php echo SHOP_DESIGN_PATH; ?>images/shop/thumbs/dress/3.jpg">
                                            <a href="<?php echo SHOP_DESIGN_PATH; ?>images/shop/dress/3.jpg"
                                               title="Pink Printed Dress - Front View" data-lightbox="gallery-item"><img
                                                        src="<?php echo base_url(); ?>upload/<?php echo $single_product['productimage']; ?>"
                                                        alt="Pink Printed Dress"></a></div>

                                    </div>
                                </div>
                            </div>
                            <div class="sale-flash">sale!</div>
                        </div>
                    </div>
                    <div class="col_two_fifth product-desc">
                        <div class="product-price"><b><?php echo $single_product['productname']; ?></b></div>
                        <br><br><br>
                        <div class="product-price">RS
                            <ins><?php echo $single_product['productcost']; ?></ins>
                        </div>

                        <div class="product-rating">
                            <i class="icon-star3"></i>
                            <i class="icon-star3"></i>
                            <i class="icon-star3"></i>
                            <i class="icon-star-half-full"></i>
                            <i class="icon-star-empty"></i>
                        </div>
                        <div class="clear"></div>
                        <div class="line"></div>

                        <form class="cart nobottommargin clearfix" method="post" enctype='multipart/form-data'
                              action="cart/add_to_cart/<?php echo $single_product['product_id']; ?>">
                            <div class="quantity clearfix">

                            </div>
                            <a href="<?php echo base_url();?>cart/add_to_cart/<?php echo $single_product['product_id']; ?>" class="add-to-cart button nomargin"><i class="icon-shopping-cart"></i><span> Add to Cart</span></a>
                        </form>
                        <div class="clear"></div>
                        <div class="line"></div>


                        <div class="product-price"><b><?php echo $single_product['productbrand']; ?></b></div>
                        <br><br><br>
                        <div class="product-price"
                        <b>Discount&nbsp;&nbsp;&nbsp;</b><?php echo $single_product['discount']; ?>%
                    </div>
                    <br><br><br>

                </div>

                <div class="col_full nobottommargin">
                    <div class="tabs clearfix nobottommargin" id="tab-1">
                        <ul class="tab-nav clearfix">
                            <li><a href="#tabs-1"><i class="icon-align-justify2"></i><span
                                            class="d-none d-md-inline-block"> Description</span></a></li>

                            <li><a href="#tabs-3"><i class="icon-star3"></i><span class="d-none d-md-inline-block"> Reviews (2)</span></a>
                            </li>
                        </ul>
                        <div class="tab-container">
                            <div class="tab-content clearfix" id="tabs-1">
                                <p><?php echo $single_product['productdescription']; ?>
                            </div>

                            <div class="tab-content clearfix" id="tabs-3">
                                <div id="reviews" class="clearfix">
                                    <ol class="commentlist clearfix">
                                        <li class="comment even thread-even depth-1" id="li-comment-1">
                                            <div id="comment-1" class="comment-wrap clearfix">
                                                <div class="comment-meta">
                                                    <div class="comment-author vcard">
<span class="comment-avatar clearfix">
<img alt='' src='http://0.gravatar.com/avatar/ad516503a11cd5ca435acc9bb6523536?s=60' height='60' width='60'/></span>
                                                    </div>
                                                </div>
                                                <div class="comment-content clearfix">
                                                    <div class="comment-author">John Doe<span><a href="#"
                                                                                                 title="Permalink to this comment">April 24, 2014 at 10:46AM</a></span>
                                                    </div>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quo
                                                        perferendis aliquid tenetur. Aliquid, tempora, sit aliquam
                                                        officiis nihil autem eum at repellendus facilis quaerat
                                                        consequatur commodi laborum saepe non nemo nam maxime quis error
                                                        tempore possimus est quasi reprehenderit fuga!</p>
                                                    <div class="review-comment-ratings">
                                                        <i class="icon-star3"></i>
                                                        <i class="icon-star3"></i>
                                                        <i class="icon-star3"></i>
                                                        <i class="icon-star3"></i>
                                                        <i class="icon-star-half-full"></i>
                                                    </div>
                                                </div>
                                                <div class="clear"></div>
                                            </div>
                                        </li>
                                        <li class="comment even thread-even depth-1" id="li-comment-1">
                                            <div id="comment-1" class="comment-wrap clearfix">
                                                <div class="comment-meta">
                                                    <div class="comment-author vcard">
<span class="comment-avatar clearfix">
<img alt='' src='http://0.gravatar.com/avatar/ad516503a11cd5ca435acc9bb6523536?s=60' height='60' width='60'/></span>
                                                    </div>
                                                </div>
                                                <div class="comment-content clearfix">
                                                    <div class="comment-author">Mary Jane<span><a href="#"
                                                                                                  title="Permalink to this comment">June 16, 2014 at 6:00PM</a></span>
                                                    </div>
                                                    <p>Quasi, blanditiis, neque ipsum numquam odit asperiores hic dolor
                                                        necessitatibus libero sequi amet voluptatibus ipsam velit qui
                                                        harum temporibus cum nemo iste aperiam explicabo fuga odio
                                                        ratione sint fugiat consequuntur vitae adipisci delectus eum
                                                        incidunt possimus tenetur excepturi at accusantium quod
                                                        doloremque reprehenderit aut expedita labore error atque?</p>
                                                    <div class="review-comment-ratings">
                                                        <i class="icon-star3"></i>
                                                        <i class="icon-star3"></i>
                                                        <i class="icon-star3"></i>
                                                        <i class="icon-star-empty"></i>
                                                        <i class="icon-star-empty"></i>
                                                    </div>
                                                </div>
                                                <div class="clear"></div>
                                            </div>
                                        </li>
                                    </ol>

                                    <a href="#" data-toggle="modal" data-target="#reviewFormModal"
                                       class="button button-3d nomargin fright">Add a Review</a>
                                    <div class="modal fade" id="reviewFormModal" tabindex="-1" role="dialog"
                                         aria-labelledby="reviewFormModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h4 class="modal-title" id="reviewFormModalLabel">Submit a
                                                        Review</h4>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                            aria-hidden="true">&times;
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <form class="nobottommargin" id="template-reviewform"
                                                          name="template-reviewform" action="#" method="post">
                                                        <div class="col_half">
                                                            <label for="template-reviewform-name">Name
                                                                <small>*</small>
                                                            </label>
                                                            <div class="input-group">
                                                                <div class="input-group-prepend">
                                                                    <div class="input-group-text"><i
                                                                                class="icon-user"></i></div>
                                                                </div>
                                                                <input type="text" id="template-reviewform-name"
                                                                       name="template-reviewform-name" value=""
                                                                       class="form-control required"/>
                                                            </div>
                                                        </div>
                                                        <div class="col_half col_last">
                                                            <label for="template-reviewform-email">Email
                                                                <small>*</small>
                                                            </label>
                                                            <div class="input-group">
                                                                <div class="input-group-prepend">
                                                                    <div class="input-group-text">@</div>
                                                                </div>
                                                                <input type="email" id="template-reviewform-email"
                                                                       name="template-reviewform-email" value=""
                                                                       class="required email form-control"/>
                                                            </div>
                                                        </div>
                                                        <div class="clear"></div>
                                                        <div class="col_full col_last">
                                                            <label for="template-reviewform-rating">Rating</label>
                                                            <select id="template-reviewform-rating"
                                                                    name="template-reviewform-rating"
                                                                    class="form-control">
                                                                <option value="">-- Select One --</option>
                                                                <option value="1">1</option>
                                                                <option value="2">2</option>
                                                                <option value="3">3</option>
                                                                <option value="4">4</option>
                                                                <option value="5">5</option>
                                                            </select>
                                                        </div>
                                                        <div class="clear"></div>
                                                        <div class="col_full">
                                                            <label for="template-reviewform-comment">Comment
                                                                <small>*</small>
                                                            </label>
                                                            <textarea class="required form-control"
                                                                      id="template-reviewform-comment"
                                                                      name="template-reviewform-comment" rows="6"
                                                                      cols="30"></textarea>
                                                        </div>
                                                        <div class="col_full nobottommargin">
                                                            <button class="button button-3d nomargin" type="submit"
                                                                    id="template-reviewform-submit"
                                                                    name="template-reviewform-submit" value="submit">
                                                                Submit Review
                                                            </button>
                                                        </div>
                                                    </form>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary"
                                                            data-dismiss="modal">Close
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="clear"></div>
        <div class="line"></div>
        <div class="col_full nobottommargin">
            <div>
            <h4>Upcomming Products</h4>
            <div id="oc-product" class="owl-carousel product-carousel carousel-widget" data-margin="30"
                 data-pagi="false" data-autoplay="5000" data-items-xs="1" data-items-md="2" data-items-lg="3"
                 data-items-xl="4">
                <div class="oc-item">
                    <div class="product iproduct clearfix">
                        <div class="product-image">
                            <a href="#"><img src="<?php echo SHOP_DESIGN_PATH; ?>images/dress1.jpg"
                                             alt="Checked Short Dress"></a>
                            <a href="#"><img src="<?php echo SHOP_DESIGN_PATH; ?>images/forg.jpg"
                                             alt="Checked Short Dress"></a>
                            <div class="sale-flash">50% Off*></div>
                            <div class="product-overlay">
                                <i class="icon-shopping-cart"></i><span> Add to Cart</span>
                                <a href="include/ajax/shop-item.html" class="item-quick-view" data-lightbox="ajax"><i
                                            class="icon-zoom-in2"></i><span> Quick View</span></a>
                            </div>
                        </div>
                        <div class="product-desc center">
                            <div class="product-title"><h3><a href="#">Formal Women Wear</a></h3></div>
                            <div class="product-price">$20.67
                                <del>$24.99</del>
                                <ins></ins>
                            </div>
                            <div class="product-rating">
                                <i class="icon-star3"></i>
                                <i class="icon-star3"></i>
                                <i class="icon-star3"></i>
                                <i class="icon-star3"></i>
                                <i class="icon-star-half-full"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="oc-item">
                    <div class="product iproduct clearfix">
                        <div class="product-image">
                            <a href="#"><img src="<?php echo SHOP_DESIGN_PATH; ?>images/jeans2.jpg"
                                             alt="Slim Fit Chinos"></a>
                            <a href="#"><img src="<?php echo SHOP_DESIGN_PATH; ?>images/pant2.jpg"
                                             alt="Slim Fit Chinos"></a>
                            <div class="product-overlay">
                                <i
                                            class="icon-shopping-cart"></i><span> Add to Cart</span></a>
                                <a href="include/ajax/shop-item.html" class="item-quick-view" data-lightbox="ajax"><i
                                            class="icon-zoom-in2"></i><span> Quick View</span></a>
                            </div>
                        </div>
                        <div class="product-desc center">
                            <div class="product-title"><h3><a href="#">Formal Pant</a></h3></div>
                            <div class="product-price">$17.89</div>
                            <div class="product-rating">
                                <i class="icon-star3"></i>
                                <i class="icon-star3"></i>
                                <i class="icon-star3"></i>
                                <i class="icon-star-half-full"></i>
                                <i class="icon-star-empty"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="oc-item">
                    <div class="product iproduct clearfix">
                        <div class="product-image">
                            <a href="#"><img src="<?php echo SHOP_DESIGN_PATH; ?>images/pant.jpg"
                                             alt="Dark Brown Boots"></a>
                            <a href="#"><img src="<?php echo SHOP_DESIGN_PATH; ?>images/pant1.jpg"
                                             alt="Dark Brown Boots"></a>
                            <div class="product-overlay">
                                <i
                                            class="icon-shopping-cart"></i><span> Add to Cart</span></a>
                                <a href="include/ajax/shop-item.html" class="item-quick-view" data-lightbox="ajax"><i
                                            class="icon-zoom-in2"></i><span> Quick View</span></a>
                            </div>
                        </div>
                        <div class="product-desc center">
                            <div class="product-title"><h3><a href="#">Dark Brown Boots</a></h3></div>
                            <div class="product-price">$49</div>
                            <div class="product-rating">
                                <i class="icon-star3"></i>
                                <i class="icon-star3"></i>
                                <i class="icon-star3"></i>
                                <i class="icon-star-empty"></i>
                                <i class="icon-star-empty"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="oc-item">
                    <div class="product iproduct clearfix">
                        <div class="product-image">
                            <a href="#"><img src="<?php echo SHOP_DESIGN_PATH; ?>images/girltshirt.jpg"
                                             alt="Light Blue Denim Dress"></a>
                            <a href="#"><img src="<?php echo SHOP_DESIGN_PATH; ?>images/girltshirt1.jpg"
                                             alt="Light Blue Denim Dress"></a>
                            <div class="product-overlay">
                                <i
                                            class="icon-shopping-cart"></i><span> Add to Cart</span>
                                <a href="include/ajax/shop-item.html" class="item-quick-view" data-lightbox="ajax"><i
                                            class="icon-zoom-in2"></i><span> Quick View</span></a>
                            </div>
                        </div>
                        <div class="product-desc center">
                            <div class="product-title"><h3><a href="#">Light Blue Denim Dress</a></h3></div>
                            <div class="product-price">$19.95</div>
                            <div class="product-rating">
                                <i class="icon-star3"></i>
                                <i class="icon-star3"></i>
                                <i class="icon-star3"></i>
                                <i class="icon-star3"></i>
                                <i class="icon-star-empty"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="oc-item">
                    <div class="product iproduct clearfix">
                        <div class="product-image">
                            <a href="#"><img src="<?php echo SHOP_DESIGN_PATH; ?>images/shorts.jpg"
                                             alt=""></a>
                            <a href="#"><img src="<?php echo SHOP_DESIGN_PATH; ?>images/short1.jpg"
                                             alt=""></a>
                            <div class="sale-flash">Sale!</div>
                            <div class="product-overlay">
                                <i
                                            class="icon-shopping-cart"></i><span> Add to Cart</span>
                                <a href="include/ajax/shop-item.html" class="item-quick-view" data-lightbox="ajax"><i
                                            class="icon-zoom-in2"></i><span> Quick View</span></a>
                            </div>
                        </div>
                        <div class="product-desc center">
                            <div class="product-title"><h3><a href="#">Unisex Sunglasses</a></h3></div>
                            <div class="product-price">
                                <del>$19.99</del>
                                <ins>$11.99</ins>
                            </div>
                            <div class="product-rating">
                                <i class="icon-star3"></i>
                                <i class="icon-star3"></i>
                                <i class="icon-star3"></i>
                                <i class="icon-star-empty"></i>
                                <i class="icon-star-empty"></i>
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</section>
