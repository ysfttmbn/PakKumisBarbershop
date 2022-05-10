@extends('theme.main')

@section('content')
<!-- START MAIN CONTENT -->
<div class="main_content">

    <!-- START SECTION SHOP -->
    <div class="section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 mb-4 mb-md-0">
                    <div class="product-image">
                        <div class="product_img_box">
                            <img id="product_img" src="https://images.tokopedia.net/img/cache/500-square/product-1/2017/9/7/16541619/16541619_6725ad7b-bfcf-44eb-91fe-4ff80fbe9eff_480_480.jpg" data-zoom-image="https://images.tokopedia.net/img/cache/500-square/product-1/2017/9/7/16541619/16541619_6725ad7b-bfcf-44eb-91fe-4ff80fbe9eff_480_480.jpg">
                                <span class="linearicons-zoom-in"></span>
                            </a>
                        </div>
                        <div id="pr_item_gallery" class="product_gallery_item slick_slider" data-slides-to-show="4" data-slides-to-scroll="1" data-infinite="false">
                            <div class="item">
                                <a href="#" class="product_gallery_item active" data-image="https://images.tokopedia.net/img/cache/500-square/product-1/2017/9/7/16541619/16541619_6725ad7b-bfcf-44eb-91fe-4ff80fbe9eff_480_480.jpg" data-zoom-image="https://images.tokopedia.net/img/cache/500-square/product-1/2017/9/7/16541619/16541619_6725ad7b-bfcf-44eb-91fe-4ff80fbe9eff_480_480.jpg">
                                    <img src="https://images.tokopedia.net/img/cache/500-square/product-1/2017/9/7/16541619/16541619_6725ad7b-bfcf-44eb-91fe-4ff80fbe9eff_480_480.jpg" alt="product_small_img1" />
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="pr_detail">
                        <div class="product_description">
                            <h4 class="product_title"><a href="#">Pomade Murrays Beeswax</a></h4>
                            <div class="product_price">
                                <span class="price"I>IDR 45.000</span>
                                <del>IDR 50.000</del>
                                <div class="on_sale">
                                    <span>10% Off</span>
                                </div>
                            </div>
                            <div class="rating_wrap">
                                    <div class="rating">
                                        <div class="product_rate" style="width:80%"></div>
                                    </div>
                                    <span class="rating_num">(21)</span>
                                </div>
                            <div class="pr_desc">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus blandit massa enim. Nullam id varius nunc id varius nunc.</p>
                            </div>
                            <div class="product_sort_info">
                                <ul>
                                    <li><i class="linearicons-shield-check"></i> 1 Year Brand Warranty</li>
                                    <li><i class="linearicons-sync"></i> 30 Day Return Policy</li>
                                    <li><i class="linearicons-bag-dollar"></i> Cash on Delivery available</li>
                                </ul>
                            </div>
                        </div>
                        <hr />
                        <div class="cart_extra">
                            <div class="cart-product-quantity">
                                <div class="quantity">
                                    <input type="button" value="-" class="minus">
                                    <input type="text" name="quantity" value="1" title="Qty" class="qty" size="4">
                                    <input type="button" value="+" class="plus">
                                </div>
                            </div>
                            <div class="cart_btn">
                                <button class="btn btn-fill-out btn-addtocart" type="button"><i class="icon-basket-loaded"></i> Add to cart</button>
                                <a class="add_compare" href="#"><i class="icon-shuffle"></i></a>
                                <a class="add_wishlist" href="#"><i class="icon-heart"></i></a>
                            </div>
                        </div>
                        <hr />
                        <ul class="product-meta">
                            <li>SKU: <a href="#">BE45VGRT</a></li>
                            <li>Category: <a href="#">Pomade</a></li>
                            <li>Tags: <a href="#" rel="tag">Pomade</a>, <a href="#" rel="tag">printed</a> </li>
                        </ul>
                        
                        <div class="product_share">
                            <span>Share:</span>
                            <ul class="social_icons">
                                <li><a href="#"><i class="ion-social-facebook"></i></a></li>
                                <li><a href="#"><i class="ion-social-twitter"></i></a></li>
                                <li><a href="#"><i class="ion-social-googleplus"></i></a></li>
                                <li><a href="#"><i class="ion-social-youtube-outline"></i></a></li>
                                <li><a href="#"><i class="ion-social-instagram-outline"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="large_divider clearfix"></div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="tab-style3">
                        <ul class="nav nav-tabs" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="Description-tab" data-toggle="tab" href="#Description" role="tab" aria-controls="Description" aria-selected="true">Description</a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link" id="Additional-info-tab" data-toggle="tab" href="#Additional-info" role="tab" aria-controls="Additional-info" aria-selected="false">Additional info</a>
                              </li>
                        </ul>
                        <div class="tab-content shop_info_tab">
                              <div class="tab-pane fade show active" id="Description" role="tabpanel" aria-labelledby="Description-tab">
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam dapibus consequat tortor, nec gravida massa. Aliquam imperdiet interdum enim vitae efficitur. Suspendisse imperdiet libero posuere sem pretium convallis. Praesent bibendum nulla eget neque viverra, eu vehicula neque dignissim. Aliquam erat volutpat. Maecenas at sem facilisis, iaculis nibh id, semper nisi. Etiam a pulvinar sapien. Pellentesque aliquet massa nec pretium eleifend. Vestibulum feugiat semper suscipit. In sit amet sapien dui. Sed in metus quam.
                                </p>
                              </div>
                              <div class="tab-pane fade" id="Additional-info" role="tabpanel" aria-labelledby="Additional-info-tab">
                                <table class="table table-bordered">
                                    <tr>
                                        <td>Capacity</td>
                                        <td>114 g</td>
                                    </tr>
                                    <tr>
                                        <td>Color</td>
                                        <td>White</td>
                                    </tr>
                                    <tr>
                                        <td>Water Resistant</td>
                                        <td>No</td>
                                    </tr>
                                    <tr>
                                        <td>Material</td>
                                        <td>-</td>
                                    </tr>
                                </table>
                              </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="small_divider"></div>
                    <div class="divider"></div>
                    <div class="medium_divider"></div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="heading_s1">
                        <h3>Releted Products</h3>
                    </div>
                    <div class="releted_product_slider carousel_slider owl-carousel owl-theme" data-margin="20" data-responsive='{"0":{"items": "1"}, "481":{"items": "2"}, "768":{"items": "3"}, "1199":{"items": "4"}}'>
                        <div class="item">
                            <div class="product">
                                <div class="product_img">
                                    <a href="#">
                                        <img src="https://lzd-img-global.slatic.net/g/p/731e64d9ced91a5ee0eb4d11f95f0040.jpg_720x720q80.jpg_.webp" alt="product_img1">
                                    </a>
                                    <div class="product_action_box">
                                        <ul class="list_none pr_action_btn">
                                            <li class="add-to-cart"><a href="#"><i class="icon-basket-loaded"></i> Add To Cart</a></li>
                                            <li><a href="#"><i class="icon-shuffle"></i></a></li>
                                            <li><a href="#" class="popup-ajax"><i class="icon-magnifier-add"></i></a></li>
                                            <li><a href="#"><i class="icon-heart"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product_info">
                                    <h6 class="product_title"><a href="#">Pomade Murrays</a></h6>
                                    <div class="product_price">
                                        <span class="price">$45.00</span>
                                        <del>$55.25</del>
                                        <div class="on_sale">
                                            <span>35% Off</span>
                                        </div>
                                    </div>
                                    <div class="rating_wrap">
                                        <div class="rating">
                                            <div class="product_rate" style="width:80%"></div>
                                        </div>
                                        <span class="rating_num">(21)</span>
                                    </div>
                                    <div class="pr_desc">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus blandit massa enim. Nullam id varius nunc id varius nunc.</p>
                                    </div>
                                    <div class="pr_switch_wrap">
                                        <div class="product_color_switch">
                                            <span class="active" data-color="#87554B"></span>
                                            <span data-color="#333333"></span>
                                            <span data-color="#DA323F"></span>
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
    <!-- END SECTION SHOP -->
    
    
    </div>
    <!-- END MAIN CONTENT -->
@endsection