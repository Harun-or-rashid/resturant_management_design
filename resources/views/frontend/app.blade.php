<!doctype html>
<html lang="en">
@include('frontend.layouts.head')
<style>
    .slider-row{
        overflow: hidden;
        height: 1020px;
        margin-bottom: 15px;
    }
    .same-mb{
        margin-bottom: 15px;
    }
    .same-mt{
        margin-top: 25px;
    }
    .useful-links>li{
        list-style: none;
    }
    .footer-img{
        height: 100px;
        width: 180px;
        border-radius: 25px;
        position: relative;
        top: 85px;
    }
    .foot{
        border-top:1px solid #718096;
    }
    .payment-img img{
        height: 52px;
    }
</style>
@section('title','App-Page')
  <body>
@include('frontend.layouts.header')

<div class="content bg-dark">
    <div class="container margin_60_35" id="vue-app">
        <div>
            <h1 class="text-center" style="color: #c98429"> Make an Order Now!</h1>
        </div>
        <div class="wrapper-restaurant" v-for="restaurant in active_products.data">
            <div class="main_title  same-mt">
                <h2 class="text-white">Featured Dishes</h2>
{{--                <h2><span>Order From Khan e Majlish</span></h2>--}}
            </div>
            <div class="row small-gutters">
                <div class="col-6 col-md-4 col-xl-3">
                    <div class="grid_item">
                        {{--                        <span class="ribbon new">New</span>--}}
                        <figure>
                            <a href="product-detail-1.html">
                                <img class="img-fluid lazy" src="{{asset('assets/frontend/img/')}}/products/product_placeholder_square_medium.jpg" data-src="{{asset('assets/frontend/img/')}}/products/shoes/5.jpg" alt="">
                                <img class="img-fluid lazy" src="{{asset('assets/frontend/img/')}}/products/product_placeholder_square_medium.jpg" data-src="{{asset('assets/frontend/img/')}}/products/shoes/5_b.jpg" alt="">
                            </a>
                        </figure>
                        {{--                        <div class="rating"><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star"></i></div>--}}
                        <a href="product-detail-1.html">
                            <h3>Armor Air Zoom Alpha</h3>
                        </a>
                        <div class="price_box">
                            <span class="new_price">$140.00</span>
                        </div>
                        <ul>
                            <li><a href="#0" class="tooltip-1" data-toggle="tooltip" data-placement="left" title="Add to favorites"><i class="ti-heart"></i><span>Add to favorites</span></a></li>
                            <li><a href="#0" class="tooltip-1" data-toggle="tooltip" data-placement="left" title="Add to cart"><i class="ti-shopping-cart"></i><span>Add to cart</span></a></li>
                        </ul>
                    </div>
                    <!-- /grid_item -->
                </div>
                <!-- /col -->
                <div class="col-6 col-md-4 col-xl-3">
                    <div class="grid_item">
                        {{--                        <span class="ribbon new">New</span>--}}
                        <figure>
                            <a href="product-detail-1.html">
                                <img class="img-fluid lazy" src="{{asset('assets/frontend/img/')}}/products/product_placeholder_square_medium.jpg" data-src="{{asset('assets/frontend/img/')}}/products/shoes/5.jpg" alt="">
                                <img class="img-fluid lazy" src="{{asset('assets/frontend/img/')}}/products/product_placeholder_square_medium.jpg" data-src="{{asset('assets/frontend/img/')}}/products/shoes/5_b.jpg" alt="">
                            </a>
                        </figure>
                        {{--                        <div class="rating"><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star"></i></div>--}}
                        <a href="product-detail-1.html">
                            <h3>Armor Air Zoom Alpha</h3>
                        </a>
                        <div class="price_box">
                            <span class="new_price">$140.00</span>
                        </div>
                        <ul>
                            <li><a href="#0" class="tooltip-1" data-toggle="tooltip" data-placement="left" title="Add to favorites"><i class="ti-heart"></i><span>Add to favorites</span></a></li>
                            <li><a href="#0" class="tooltip-1" data-toggle="tooltip" data-placement="left" title="Add to cart"><i class="ti-shopping-cart"></i><span>Add to cart</span></a></li>
                        </ul>
                    </div>
                    <!-- /grid_item -->
                </div>
                <!-- /col -->
                <div class="col-6 col-md-4 col-xl-3">
                    <div class="grid_item">
                        {{--                        <span class="ribbon new">New</span>--}}
                        <figure>
                            <a href="product-detail-1.html">
                                <img class="img-fluid lazy" src="{{asset('assets/frontend/img/')}}/products/product_placeholder_square_medium.jpg" data-src="{{asset('assets/frontend/img/')}}/products/shoes/5.jpg" alt="">
                                <img class="img-fluid lazy" src="{{asset('assets/frontend/img/')}}/products/product_placeholder_square_medium.jpg" data-src="{{asset('assets/frontend/img/')}}/products/shoes/5_b.jpg" alt="">
                            </a>
                        </figure>
                        {{--                        <div class="rating"><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star"></i></div>--}}
                        <a href="product-detail-1.html">
                            <h3>Armor Air Zoom Alpha</h3>
                        </a>
                        <div class="price_box">
                            <span class="new_price">$140.00</span>
                        </div>
                        <ul>
                            <li><a href="#0" class="tooltip-1" data-toggle="tooltip" data-placement="left" title="Add to favorites"><i class="ti-heart"></i><span>Add to favorites</span></a></li>
                            <li><a href="#0" class="tooltip-1" data-toggle="tooltip" data-placement="left" title="Add to cart"><i class="ti-shopping-cart"></i><span>Add to cart</span></a></li>
                        </ul>
                    </div>
                    <!-- /grid_item -->
                </div>
                <!-- /col -->
                <div class="col-6 col-md-4 col-xl-3">
                    <div class="grid_item">
                        {{--                        <span class="ribbon new">New</span>--}}
                        <figure>
                            <a href="product-detail-1.html">
                                <img class="img-fluid lazy" src="{{asset('assets/frontend/img/')}}/products/product_placeholder_square_medium.jpg" data-src="{{asset('assets/frontend/img/')}}/products/shoes/5.jpg" alt="">
                                <img class="img-fluid lazy" src="{{asset('assets/frontend/img/')}}/products/product_placeholder_square_medium.jpg" data-src="{{asset('assets/frontend/img/')}}/products/shoes/5_b.jpg" alt="">
                            </a>
                        </figure>
                        {{--                        <div class="rating"><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star"></i></div>--}}
                        <a href="product-detail-1.html">
                            <h3>Armor Air Zoom Alpha</h3>
                        </a>
                        <div class="price_box">
                            <span class="new_price">$140.00</span>
                        </div>
                        <ul>
                            <li><a href="#0" class="tooltip-1" data-toggle="tooltip" data-placement="left" title="Add to favorites"><i class="ti-heart"></i><span>Add to favorites</span></a></li>
                            <li><a href="#0" class="tooltip-1" data-toggle="tooltip" data-placement="left" title="Add to cart"><i class="ti-shopping-cart"></i><span>Add to cart</span></a></li>
                        </ul>
                    </div>
                    <!-- /grid_item -->
                </div>
                <!-- /col -->
                <div class="col-6 col-md-4 col-xl-3">
                    <div class="grid_item">
{{--                        <span class="ribbon new">New</span>--}}
                        <figure>
                            <a href="product-detail-1.html">
                                <img class="img-fluid lazy" src="{{asset('assets/frontend/img/')}}/products/product_placeholder_square_medium.jpg" data-src="{{asset('assets/frontend/img/')}}/products/shoes/5.jpg" alt="">
                                <img class="img-fluid lazy" src="{{asset('assets/frontend/img/')}}/products/product_placeholder_square_medium.jpg" data-src="{{asset('assets/frontend/img/')}}/products/shoes/5_b.jpg" alt="">
                            </a>
                        </figure>
{{--                        <div class="rating"><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star"></i></div>--}}
                        <a href="product-detail-1.html">
                            <h3>Armor Air Zoom Alpha</h3>
                        </a>
                        <div class="price_box">
                            <span class="new_price">$140.00</span>
                        </div>
                        <ul>
                            <li><a href="#0" class="tooltip-1" data-toggle="tooltip" data-placement="left" title="Add to favorites"><i class="ti-heart"></i><span>Add to favorites</span></a></li>
                            <li><a href="#0" class="tooltip-1" data-toggle="tooltip" data-placement="left" title="Add to cart"><i class="ti-shopping-cart"></i><span>Add to cart</span></a></li>
                        </ul>
                    </div>
                    <!-- /grid_item -->
                </div>
                <!-- /col -->
                <div class="col-6 col-md-4 col-xl-3">
                    <div class="grid_item">
                        {{--                        <span class="ribbon new">New</span>--}}
                        <figure>
                            <a href="product-detail-1.html">
                                <img class="img-fluid lazy" src="{{asset('assets/frontend/img/')}}/products/product_placeholder_square_medium.jpg" data-src="{{asset('assets/frontend/img/')}}/products/shoes/5.jpg" alt="">
                                <img class="img-fluid lazy" src="{{asset('assets/frontend/img/')}}/products/product_placeholder_square_medium.jpg" data-src="{{asset('assets/frontend/img/')}}/products/shoes/5_b.jpg" alt="">
                            </a>
                        </figure>
                        {{--                        <div class="rating"><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star"></i></div>--}}
                        <a href="product-detail-1.html">
                            <h3>Armor Air Zoom Alpha</h3>
                        </a>
                        <div class="price_box">
                            <span class="new_price">$140.00</span>
                        </div>
                        <ul>
                            <li><a href="#0" class="tooltip-1" data-toggle="tooltip" data-placement="left" title="Add to favorites"><i class="ti-heart"></i><span>Add to favorites</span></a></li>
                            <li><a href="#0" class="tooltip-1" data-toggle="tooltip" data-placement="left" title="Add to cart"><i class="ti-shopping-cart"></i><span>Add to cart</span></a></li>
                        </ul>
                    </div>
                    <!-- /grid_item -->
                </div>
                <!-- /col -->
                <div class="col-6 col-md-4 col-xl-3">
                    <div class="grid_item">
                        {{--                        <span class="ribbon new">New</span>--}}
                        <figure>
                            <a href="product-detail-1.html">
                                <img class="img-fluid lazy" src="{{asset('assets/frontend/img/')}}/products/product_placeholder_square_medium.jpg" data-src="{{asset('assets/frontend/img/')}}/products/shoes/5.jpg" alt="">
                                <img class="img-fluid lazy" src="{{asset('assets/frontend/img/')}}/products/product_placeholder_square_medium.jpg" data-src="{{asset('assets/frontend/img/')}}/products/shoes/5_b.jpg" alt="">
                            </a>
                        </figure>
                        {{--                        <div class="rating"><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star"></i></div>--}}
                        <a href="product-detail-1.html">
                            <h3>Armor Air Zoom Alpha</h3>
                        </a>
                        <div class="price_box">
                            <span class="new_price">$140.00</span>
                        </div>
                        <ul>
                            <li><a href="#0" class="tooltip-1" data-toggle="tooltip" data-placement="left" title="Add to favorites"><i class="ti-heart"></i><span>Add to favorites</span></a></li>
                            <li><a href="#0" class="tooltip-1" data-toggle="tooltip" data-placement="left" title="Add to cart"><i class="ti-shopping-cart"></i><span>Add to cart</span></a></li>
                        </ul>
                    </div>
                    <!-- /grid_item -->
                </div>
                <!-- /col -->
                <div class="col-6 col-md-4 col-xl-3">
                    <div class="grid_item">
                        {{--                        <span class="ribbon new">New</span>--}}
                        <figure>
                            <a href="product-detail-1.html">
                                <img class="img-fluid lazy" src="{{asset('assets/frontend/img/')}}/products/product_placeholder_square_medium.jpg" data-src="{{asset('assets/frontend/img/')}}/products/shoes/5.jpg" alt="">
                                <img class="img-fluid lazy" src="{{asset('assets/frontend/img/')}}/products/product_placeholder_square_medium.jpg" data-src="{{asset('assets/frontend/img/')}}/products/shoes/5_b.jpg" alt="">
                            </a>
                        </figure>
                        {{--                        <div class="rating"><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star"></i></div>--}}
                        <a href="product-detail-1.html">
                            <h3>Armor Air Zoom Alpha</h3>
                        </a>
                        <div class="price_box">
                            <span class="new_price">$140.00</span>
                        </div>
                        <ul>
                            <li><a href="#0" class="tooltip-1" data-toggle="tooltip" data-placement="left" title="Add to favorites"><i class="ti-heart"></i><span>Add to favorites</span></a></li>
                            <li><a href="#0" class="tooltip-1" data-toggle="tooltip" data-placement="left" title="Add to cart"><i class="ti-shopping-cart"></i><span>Add to cart</span></a></li>
                        </ul>
                    </div>
                    <!-- /grid_item -->
                </div>
                <!-- /col -->
            </div>
            <!-- /row -->
        </div>
        <div class="container">
            <div class="middle-banner">
                <img class="w-100" style="width:100%" src="{{asset('assets/front-end/images/Bannermiddle.jpg')}}" alt="">
            </div>
        </div>
        <div class="wrapper-restaurant" v-for="restaurant in active_products.data">
            <div class="main_title  same-mt">
                <h2 class="text-white">Our Popular Dishes</h2>
                {{--                <h2><span>Order From Khan e Majlish</span></h2>--}}
            </div>
            <div class="row small-gutters">
                <div class="col-6 col-md-4 col-xl-3">
                    <div class="grid_item">
                        {{--                        <span class="ribbon new">New</span>--}}
                        <figure>
                            <a href="product-detail-1.html">
                                <img class="img-fluid lazy" src="{{asset('assets/frontend/img/')}}/products/product_placeholder_square_medium.jpg" data-src="{{asset('assets/frontend/img/')}}/products/shoes/5.jpg" alt="">
                                <img class="img-fluid lazy" src="{{asset('assets/frontend/img/')}}/products/product_placeholder_square_medium.jpg" data-src="{{asset('assets/frontend/img/')}}/products/shoes/5_b.jpg" alt="">
                            </a>
                        </figure>
                        {{--                        <div class="rating"><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star"></i></div>--}}
                        <a href="product-detail-1.html">
                            <h3>Armor Air Zoom Alpha</h3>
                        </a>
                        <div class="price_box">
                            <span class="new_price">$140.00</span>
                        </div>
                        <ul>
                            <li><a href="#0" class="tooltip-1" data-toggle="tooltip" data-placement="left" title="Add to favorites"><i class="ti-heart"></i><span>Add to favorites</span></a></li>
                            <li><a href="#0" class="tooltip-1" data-toggle="tooltip" data-placement="left" title="Add to cart"><i class="ti-shopping-cart"></i><span>Add to cart</span></a></li>
                        </ul>
                    </div>
                    <!-- /grid_item -->
                </div>
                <!-- /col -->
                <div class="col-6 col-md-4 col-xl-3">
                    <div class="grid_item">
                        {{--                        <span class="ribbon new">New</span>--}}
                        <figure>
                            <a href="product-detail-1.html">
                                <img class="img-fluid lazy" src="{{asset('assets/frontend/img/')}}/products/product_placeholder_square_medium.jpg" data-src="{{asset('assets/frontend/img/')}}/products/shoes/5.jpg" alt="">
                                <img class="img-fluid lazy" src="{{asset('assets/frontend/img/')}}/products/product_placeholder_square_medium.jpg" data-src="{{asset('assets/frontend/img/')}}/products/shoes/5_b.jpg" alt="">
                            </a>
                        </figure>
                        {{--                        <div class="rating"><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star"></i></div>--}}
                        <a href="product-detail-1.html">
                            <h3>Armor Air Zoom Alpha</h3>
                        </a>
                        <div class="price_box">
                            <span class="new_price">$140.00</span>
                        </div>
                        <ul>
                            <li><a href="#0" class="tooltip-1" data-toggle="tooltip" data-placement="left" title="Add to favorites"><i class="ti-heart"></i><span>Add to favorites</span></a></li>
                            <li><a href="#0" class="tooltip-1" data-toggle="tooltip" data-placement="left" title="Add to cart"><i class="ti-shopping-cart"></i><span>Add to cart</span></a></li>
                        </ul>
                    </div>
                    <!-- /grid_item -->
                </div>
                <!-- /col -->
                <div class="col-6 col-md-4 col-xl-3">
                    <div class="grid_item">
                        {{--                        <span class="ribbon new">New</span>--}}
                        <figure>
                            <a href="product-detail-1.html">
                                <img class="img-fluid lazy" src="{{asset('assets/frontend/img/')}}/products/product_placeholder_square_medium.jpg" data-src="{{asset('assets/frontend/img/')}}/products/shoes/5.jpg" alt="">
                                <img class="img-fluid lazy" src="{{asset('assets/frontend/img/')}}/products/product_placeholder_square_medium.jpg" data-src="{{asset('assets/frontend/img/')}}/products/shoes/5_b.jpg" alt="">
                            </a>
                        </figure>
                        {{--                        <div class="rating"><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star"></i></div>--}}
                        <a href="product-detail-1.html">
                            <h3>Armor Air Zoom Alpha</h3>
                        </a>
                        <div class="price_box">
                            <span class="new_price">$140.00</span>
                        </div>
                        <ul>
                            <li><a href="#0" class="tooltip-1" data-toggle="tooltip" data-placement="left" title="Add to favorites"><i class="ti-heart"></i><span>Add to favorites</span></a></li>
                            <li><a href="#0" class="tooltip-1" data-toggle="tooltip" data-placement="left" title="Add to cart"><i class="ti-shopping-cart"></i><span>Add to cart</span></a></li>
                        </ul>
                    </div>
                    <!-- /grid_item -->
                </div>
                <!-- /col -->
                <div class="col-6 col-md-4 col-xl-3">
                    <div class="grid_item">
                        {{--                        <span class="ribbon new">New</span>--}}
                        <figure>
                            <a href="product-detail-1.html">
                                <img class="img-fluid lazy" src="{{asset('assets/frontend/img/')}}/products/product_placeholder_square_medium.jpg" data-src="{{asset('assets/frontend/img/')}}/products/shoes/5.jpg" alt="">
                                <img class="img-fluid lazy" src="{{asset('assets/frontend/img/')}}/products/product_placeholder_square_medium.jpg" data-src="{{asset('assets/frontend/img/')}}/products/shoes/5_b.jpg" alt="">
                            </a>
                        </figure>
                        {{--                        <div class="rating"><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star"></i></div>--}}
                        <a href="product-detail-1.html">
                            <h3>Armor Air Zoom Alpha</h3>
                        </a>
                        <div class="price_box">
                            <span class="new_price">$140.00</span>
                        </div>
                        <ul>
                            <li><a href="#0" class="tooltip-1" data-toggle="tooltip" data-placement="left" title="Add to favorites"><i class="ti-heart"></i><span>Add to favorites</span></a></li>
                            <li><a href="#0" class="tooltip-1" data-toggle="tooltip" data-placement="left" title="Add to cart"><i class="ti-shopping-cart"></i><span>Add to cart</span></a></li>
                        </ul>
                    </div>
                    <!-- /grid_item -->
                </div>
                <!-- /col -->
                <div class="col-6 col-md-4 col-xl-3">
                    <div class="grid_item">
                        {{--                        <span class="ribbon new">New</span>--}}
                        <figure>
                            <a href="product-detail-1.html">
                                <img class="img-fluid lazy" src="{{asset('assets/frontend/img/')}}/products/product_placeholder_square_medium.jpg" data-src="{{asset('assets/frontend/img/')}}/products/shoes/5.jpg" alt="">
                                <img class="img-fluid lazy" src="{{asset('assets/frontend/img/')}}/products/product_placeholder_square_medium.jpg" data-src="{{asset('assets/frontend/img/')}}/products/shoes/5_b.jpg" alt="">
                            </a>
                        </figure>
                        {{--                        <div class="rating"><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star"></i></div>--}}
                        <a href="product-detail-1.html">
                            <h3>Armor Air Zoom Alpha</h3>
                        </a>
                        <div class="price_box">
                            <span class="new_price">$140.00</span>
                        </div>
                        <ul>
                            <li><a href="#0" class="tooltip-1" data-toggle="tooltip" data-placement="left" title="Add to favorites"><i class="ti-heart"></i><span>Add to favorites</span></a></li>
                            <li><a href="#0" class="tooltip-1" data-toggle="tooltip" data-placement="left" title="Add to cart"><i class="ti-shopping-cart"></i><span>Add to cart</span></a></li>
                        </ul>
                    </div>
                    <!-- /grid_item -->
                </div>
                <!-- /col -->
                <div class="col-6 col-md-4 col-xl-3">
                    <div class="grid_item">
                        {{--                        <span class="ribbon new">New</span>--}}
                        <figure>
                            <a href="product-detail-1.html">
                                <img class="img-fluid lazy" src="{{asset('assets/frontend/img/')}}/products/product_placeholder_square_medium.jpg" data-src="{{asset('assets/frontend/img/')}}/products/shoes/5.jpg" alt="">
                                <img class="img-fluid lazy" src="{{asset('assets/frontend/img/')}}/products/product_placeholder_square_medium.jpg" data-src="{{asset('assets/frontend/img/')}}/products/shoes/5_b.jpg" alt="">
                            </a>
                        </figure>
                        {{--                        <div class="rating"><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star"></i></div>--}}
                        <a href="product-detail-1.html">
                            <h3>Armor Air Zoom Alpha</h3>
                        </a>
                        <div class="price_box">
                            <span class="new_price">$140.00</span>
                        </div>
                        <ul>
                            <li><a href="#0" class="tooltip-1" data-toggle="tooltip" data-placement="left" title="Add to favorites"><i class="ti-heart"></i><span>Add to favorites</span></a></li>
                            <li><a href="#0" class="tooltip-1" data-toggle="tooltip" data-placement="left" title="Add to cart"><i class="ti-shopping-cart"></i><span>Add to cart</span></a></li>
                        </ul>
                    </div>
                    <!-- /grid_item -->
                </div>
                <!-- /col -->
                <div class="col-6 col-md-4 col-xl-3">
                    <div class="grid_item">
                        {{--                        <span class="ribbon new">New</span>--}}
                        <figure>
                            <a href="product-detail-1.html">
                                <img class="img-fluid lazy" src="{{asset('assets/frontend/img/')}}/products/product_placeholder_square_medium.jpg" data-src="{{asset('assets/frontend/img/')}}/products/shoes/5.jpg" alt="">
                                <img class="img-fluid lazy" src="{{asset('assets/frontend/img/')}}/products/product_placeholder_square_medium.jpg" data-src="{{asset('assets/frontend/img/')}}/products/shoes/5_b.jpg" alt="">
                            </a>
                        </figure>
                        {{--                        <div class="rating"><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star"></i></div>--}}
                        <a href="product-detail-1.html">
                            <h3>Armor Air Zoom Alpha</h3>
                        </a>
                        <div class="price_box">
                            <span class="new_price">$140.00</span>
                        </div>
                        <ul>
                            <li><a href="#0" class="tooltip-1" data-toggle="tooltip" data-placement="left" title="Add to favorites"><i class="ti-heart"></i><span>Add to favorites</span></a></li>
                            <li><a href="#0" class="tooltip-1" data-toggle="tooltip" data-placement="left" title="Add to cart"><i class="ti-shopping-cart"></i><span>Add to cart</span></a></li>
                        </ul>
                    </div>
                    <!-- /grid_item -->
                </div>
                <!-- /col -->
                <div class="col-6 col-md-4 col-xl-3">
                    <div class="grid_item">
                        {{--                        <span class="ribbon new">New</span>--}}
                        <figure>
                            <a href="product-detail-1.html">
                                <img class="img-fluid lazy" src="{{asset('assets/frontend/img/')}}/products/product_placeholder_square_medium.jpg" data-src="{{asset('assets/frontend/img/')}}/products/shoes/5.jpg" alt="">
                                <img class="img-fluid lazy" src="{{asset('assets/frontend/img/')}}/products/product_placeholder_square_medium.jpg" data-src="{{asset('assets/frontend/img/')}}/products/shoes/5_b.jpg" alt="">
                            </a>
                        </figure>
                        {{--                        <div class="rating"><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star"></i></div>--}}
                        <a href="product-detail-1.html">
                            <h3>Armor Air Zoom Alpha</h3>
                        </a>
                        <div class="price_box">
                            <span class="new_price">$140.00</span>
                        </div>
                        <ul>
                            <li><a href="#0" class="tooltip-1" data-toggle="tooltip" data-placement="left" title="Add to favorites"><i class="ti-heart"></i><span>Add to favorites</span></a></li>
                            <li><a href="#0" class="tooltip-1" data-toggle="tooltip" data-placement="left" title="Add to cart"><i class="ti-shopping-cart"></i><span>Add to cart</span></a></li>
                        </ul>
                    </div>
                    <!-- /grid_item -->
                </div>
                <!-- /col -->
            </div>
            <!-- /row -->
        </div>

    </div>

</div>

@include('frontend.layouts.footer')
 <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
{{--allaila JS start--}}

<!-- COMMON SCRIPTS -->
{{--<script src="{!! asset('assets/frontend/js/jquery-3.5.1.min.js') !!}"></script>--}}
<!--

&lt;!&ndash; Toastr SCRIPTS &ndash;&gt;
<script src="{!! asset('assets/frontend/plugins/toastr/toastr.min.js') !!}"></script>


-->
<script src="{!! asset('assets/frontend/js/common_scripts.min.js') !!}"></script>
<script src="{!! asset('assets/frontend/js/main.js') !!}"></script>
  </body>
</html>

