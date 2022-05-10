@extends('theme.main')

@section('content')
<div class="main_content">

    <!-- START SECTION SHOP -->
    <div class="section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="row align-items-center mb-4 pb-1">
                        <div class="col-12">
                            <div class="row justify-content-end">
                                <div class="my-1">
                                <a class="btn btn-outline-danger" href="tambah-produk">Tambah Produk</a>
                                </div>
                            </div>
                            <div class="product_header">
                                <div class="product_header_left">
                                    <div class="custom_select">
                                        <select class="form-control form-control-sm">
                                            <option value="order">Default sorting</option>
                                            <option value="popularity">Sort by popularity</option>
                                            <option value="date">Sort by newness</option>
                                            <option value="price">Sort by price: low to high</option>
                                            <option value="price-desc">Sort by price: high to low</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="product_header_right">
                                    <div class="products_view">
                                        <a href="javascript:void(0);" class="shorting_icon grid active"><i class="ti-view-grid"></i></a>
                                        <a href="javascript:void(0);" class="shorting_icon list"><i class="ti-layout-list-thumb"></i></a>
                                    </div>
                                    <div class="custom_select">
                                        <select class="form-control form-control-sm">
                                            <option value="">Showing</option>
                                            <option value="9">9</option>
                                            <option value="12">12</option>
                                            <option value="18">18</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> 
                    <div class="row shop_container loadmore" data-item="8" data-item-show="4" data-finish-message="No More Item to Show" data-btn="Load More">
                        <div class="col-lg-3 col-md-4 col-6 grid_item">
                            <div class="product">
                                <div class="product_img">
                                    <a href="produk-detail">
                                        <img src="https://images.tokopedia.net/img/cache/500-square/product-1/2017/9/7/16541619/16541619_6725ad7b-bfcf-44eb-91fe-4ff80fbe9eff_480_480.jpg">
                                    </a>
                                    <div class="product_action_box">
                                        <ul class="list_none pr_action_btn">
                                            <li><a href="#" class="popup-ajax"><i class="icon-magnifier-add"></i></a></li>
                                            <li><a href="#"><i class="icon-heart"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product_info">
                                    <h6 class="product_title"><a href="produk-detail">Pomade Murrays</a></h6>
                                    <div class="product_price">
                                        <span class="price">IDR 50.000</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-6 grid_item">
                            <div class="product">
                                <div class="product_img">
                                    <a href="produk-detail">
                                        <img src="https://images.tokopedia.net/img/cache/500-square/product-1/2017/9/7/16541619/16541619_6725ad7b-bfcf-44eb-91fe-4ff80fbe9eff_480_480.jpg">
                                    </a>
                                    <div class="product_action_box">
                                        <ul class="list_none pr_action_btn">
                                            <li><a href="#" class="popup-ajax"><i class="icon-magnifier-add"></i></a></li>
                                            <li><a href="#"><i class="icon-heart"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product_info">
                                    <h6 class="product_title"><a href="produk-detail">Pomade Murrays</a></h6>
                                    <div class="product_price">
                                        <span class="price">IDR 50.000</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-6 grid_item">
                            <div class="product">
                                <div class="product_img">
                                    <a href="produk-detail">
                                        <img src="https://images.tokopedia.net/img/cache/500-square/product-1/2017/9/7/16541619/16541619_6725ad7b-bfcf-44eb-91fe-4ff80fbe9eff_480_480.jpg">
                                    </a>
                                    <div class="product_action_box">
                                        <ul class="list_none pr_action_btn">
                                            <li><a href="#" class="popup-ajax"><i class="icon-magnifier-add"></i></a></li>
                                            <li><a href="#"><i class="icon-heart"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product_info">
                                    <h6 class="product_title"><a href="produk-detail">Pomade Murrays</a></h6>
                                    <div class="product_price">
                                        <span class="price">IDR 50.000</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-6 grid_item">
                            <div class="product">
                                <div class="product_img">
                                    <a href="produk-detail">
                                        <img src="https://images.tokopedia.net/img/cache/500-square/product-1/2017/9/7/16541619/16541619_6725ad7b-bfcf-44eb-91fe-4ff80fbe9eff_480_480.jpg">
                                    </a>
                                    <div class="product_action_box">
                                        <ul class="list_none pr_action_btn">
                                            <li><a href="#" class="popup-ajax"><i class="icon-magnifier-add"></i></a></li>
                                            <li><a href="#"><i class="icon-heart"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product_info">
                                    <h6 class="product_title"><a href="produk-detail">Pomade Murrays</a></h6>
                                    <div class="product_price">
                                        <span class="price">IDR 50.000</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-6 grid_item">
                            <div class="product">
                                <div class="product_img">
                                    <a href="produk-detail">
                                        <img src="https://images.tokopedia.net/img/cache/500-square/product-1/2017/9/7/16541619/16541619_6725ad7b-bfcf-44eb-91fe-4ff80fbe9eff_480_480.jpg">
                                    </a>
                                    <div class="product_action_box">
                                        <ul class="list_none pr_action_btn">
                                            <li><a href="#" class="popup-ajax"><i class="icon-magnifier-add"></i></a></li>
                                            <li><a href="#"><i class="icon-heart"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product_info">
                                    <h6 class="product_title"><a href="produk-detail">Pomade Murrays</a></h6>
                                    <div class="product_price">
                                        <span class="price">IDR 50.000</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-6 grid_item">
                            <div class="product">
                                <div class="product_img">
                                    <a href="produk-detail">
                                        <img src="https://images.tokopedia.net/img/cache/500-square/product-1/2017/9/7/16541619/16541619_6725ad7b-bfcf-44eb-91fe-4ff80fbe9eff_480_480.jpg">
                                    </a>
                                    <div class="product_action_box">
                                        <ul class="list_none pr_action_btn">
                                            <li><a href="#" class="popup-ajax"><i class="icon-magnifier-add"></i></a></li>
                                            <li><a href="#"><i class="icon-heart"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product_info">
                                    <h6 class="product_title"><a href="produk-detail">Pomade Murrays</a></h6>
                                    <div class="product_price">
                                        <span class="price">IDR 50.000</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-6 grid_item">
                            <div class="product">
                                <div class="product_img">
                                    <a href="produk-detail">
                                        <img src="https://images.tokopedia.net/img/cache/500-square/product-1/2017/9/7/16541619/16541619_6725ad7b-bfcf-44eb-91fe-4ff80fbe9eff_480_480.jpg">
                                    </a>
                                    <div class="product_action_box">
                                        <ul class="list_none pr_action_btn">
                                            <li><a href="#" class="popup-ajax"><i class="icon-magnifier-add"></i></a></li>
                                            <li><a href="#"><i class="icon-heart"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product_info">
                                    <h6 class="product_title"><a href="produk-detail">Pomade Murrays</a></h6>
                                    <div class="product_price">
                                        <span class="price">IDR 50.000</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-6 grid_item">
                            <div class="product">
                                <div class="product_img">
                                    <a href="produk-detail">
                                        <img src="https://images.tokopedia.net/img/cache/500-square/product-1/2017/9/7/16541619/16541619_6725ad7b-bfcf-44eb-91fe-4ff80fbe9eff_480_480.jpg">
                                    </a>
                                    <div class="product_action_box">
                                        <ul class="list_none pr_action_btn">
                                            <li><a href="#" class="popup-ajax"><i class="icon-magnifier-add"></i></a></li>
                                            <li><a href="#"><i class="icon-heart"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product_info">
                                    <h6 class="product_title"><a href="produk-detail">Pomade Murrays</a></h6>
                                    <div class="product_price">
                                        <span class="price">IDR 50.000</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-6 grid_item">
                            <div class="product">
                                <div class="product_img">
                                    <a href="produk-detail">
                                        <img src="https://images.tokopedia.net/img/cache/500-square/product-1/2017/9/7/16541619/16541619_6725ad7b-bfcf-44eb-91fe-4ff80fbe9eff_480_480.jpg">
                                    </a>
                                    <div class="product_action_box">
                                        <ul class="list_none pr_action_btn">
                                            <li><a href="#" class="popup-ajax"><i class="icon-magnifier-add"></i></a></li>
                                            <li><a href="#"><i class="icon-heart"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product_info">
                                    <h6 class="product_title"><a href="produk-detail">Pomade Murrays</a></h6>
                                    <div class="product_price">
                                        <span class="price">IDR 50.000</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-6 grid_item">
                            <div class="product">
                                <div class="product_img">
                                    <a href="produk-detail">
                                        <img src="https://images.tokopedia.net/img/cache/500-square/product-1/2017/9/7/16541619/16541619_6725ad7b-bfcf-44eb-91fe-4ff80fbe9eff_480_480.jpg">
                                    </a>
                                    <div class="product_action_box">
                                        <ul class="list_none pr_action_btn">
                                            <li><a href="#" class="popup-ajax"><i class="icon-magnifier-add"></i></a></li>
                                            <li><a href="#"><i class="icon-heart"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product_info">
                                    <h6 class="product_title"><a href="produk-detail">Pomade Murrays</a></h6>
                                    <div class="product_price">
                                        <span class="price">IDR 50.000</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-6 grid_item">
                            <div class="product">
                                <div class="product_img">
                                    <a href="produk-detail">
                                        <img src="https://images.tokopedia.net/img/cache/500-square/product-1/2017/9/7/16541619/16541619_6725ad7b-bfcf-44eb-91fe-4ff80fbe9eff_480_480.jpg">
                                    </a>
                                    <div class="product_action_box">
                                        <ul class="list_none pr_action_btn">
                                            <li><a href="#" class="popup-ajax"><i class="icon-magnifier-add"></i></a></li>
                                            <li><a href="#"><i class="icon-heart"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product_info">
                                    <h6 class="product_title"><a href="produk-detail">Pomade Murrays</a></h6>
                                    <div class="product_price">
                                        <span class="price">IDR 50.000</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-6 grid_item">
                            <div class="product">
                                <div class="product_img">
                                    <a href="produk-detail">
                                        <img src="https://images.tokopedia.net/img/cache/500-square/product-1/2017/9/7/16541619/16541619_6725ad7b-bfcf-44eb-91fe-4ff80fbe9eff_480_480.jpg">
                                    </a>
                                    <div class="product_action_box">
                                        <ul class="list_none pr_action_btn">
                                            <li><a href="#" class="popup-ajax"><i class="icon-magnifier-add"></i></a></li>
                                            <li><a href="#"><i class="icon-heart"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product_info">
                                    <h6 class="product_title"><a href="produk-detail">Pomade Murrays</a></h6>
                                    <div class="product_price">
                                        <span class="price">IDR 50.000</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-6 grid_item">
                            <div class="product">
                                <div class="product_img">
                                    <a href="produk-detail">
                                        <img src="https://images.tokopedia.net/img/cache/500-square/product-1/2017/9/7/16541619/16541619_6725ad7b-bfcf-44eb-91fe-4ff80fbe9eff_480_480.jpg">
                                    </a>
                                    <div class="product_action_box">
                                        <ul class="list_none pr_action_btn">
                                            <li><a href="#" class="popup-ajax"><i class="icon-magnifier-add"></i></a></li>
                                            <li><a href="#"><i class="icon-heart"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product_info">
                                    <h6 class="product_title"><a href="produk-detail">Pomade Murrays</a></h6>
                                    <div class="product_price">
                                        <span class="price">IDR 50.000</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-6 grid_item">
                            <div class="product">
                                <div class="product_img">
                                    <a href="produk-detail">
                                        <img src="https://images.tokopedia.net/img/cache/500-square/product-1/2017/9/7/16541619/16541619_6725ad7b-bfcf-44eb-91fe-4ff80fbe9eff_480_480.jpg">
                                    </a>
                                    <div class="product_action_box">
                                        <ul class="list_none pr_action_btn">
                                            <li><a href="#" class="popup-ajax"><i class="icon-magnifier-add"></i></a></li>
                                            <li><a href="#"><i class="icon-heart"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product_info">
                                    <h6 class="product_title"><a href="produk-detail">Pomade Murrays</a></h6>
                                    <div class="product_price">
                                        <span class="price">IDR 50.000</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-6 grid_item">
                            <div class="product">
                                <div class="product_img">
                                    <a href="produk-detail">
                                        <img src="https://images.tokopedia.net/img/cache/500-square/product-1/2017/9/7/16541619/16541619_6725ad7b-bfcf-44eb-91fe-4ff80fbe9eff_480_480.jpg">
                                    </a>
                                    <div class="product_action_box">
                                        <ul class="list_none pr_action_btn">
                                            <li><a href="#" class="popup-ajax"><i class="icon-magnifier-add"></i></a></li>
                                            <li><a href="#"><i class="icon-heart"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product_info">
                                    <h6 class="product_title"><a href="produk-detail">Pomade Murrays</a></h6>
                                    <div class="product_price">
                                        <span class="price">IDR 50.000</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-6 grid_item">
                            <div class="product">
                                <div class="product_img">
                                    <a href="produk-detail">
                                        <img src="https://images.tokopedia.net/img/cache/500-square/product-1/2017/9/7/16541619/16541619_6725ad7b-bfcf-44eb-91fe-4ff80fbe9eff_480_480.jpg">
                                    </a>
                                    <div class="product_action_box">
                                        <ul class="list_none pr_action_btn">
                                            <li><a href="#" class="popup-ajax"><i class="icon-magnifier-add"></i></a></li>
                                            <li><a href="#"><i class="icon-heart"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product_info">
                                    <h6 class="product_title"><a href="produk-detail">Pomade Murrays</a></h6>
                                    <div class="product_price">
                                        <span class="price">IDR 50.000</span>
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
@endsection