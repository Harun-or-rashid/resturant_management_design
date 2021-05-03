@extends('frontend.layouts.header_slider')

@section('main_content')
    <div class="content bg-dark" style="margin-top: -125px">
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
                                    <img class="img-fluid lazy" src="{{asset('assets/front-end/images/')}}/products/1.png" data-src="{{asset('assets/front-end/images/')}}/products/1.png" alt="">
                                    <img class="img-fluid lazy" src="{{asset('assets/front-end/images/')}}/products/1.png" data-src="{{asset('assets/front-end/images/')}}/products/1.png" alt="">
                                </a>
                            </figure>
                            {{--                        <div class="rating"><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star"></i></div>--}}
                            <a href="product-detail-1.html">
                                <h3 class="text-warning">Armor Air Zoom Alpha</h3>
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
                                    <img class="img-fluid lazy" src="{{asset('assets/front-end/images/')}}/products/2.png" data-src="{{asset('assets/front-end/images/')}}/products/2.png" alt="">
                                    <img class="img-fluid lazy" src="{{asset('assets/front-end/images/')}}/products/2.png" data-src="{{asset('assets/front-end/images/')}}/products/2.png" alt="">
                                </a>
                            </figure>
                            {{--                        <div class="rating"><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star"></i></div>--}}
                            <a href="product-detail-1.html">
                                <h3  class="text-warning">Armor Air Zoom Alpha</h3>
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
                                    <img class="img-fluid lazy" src="{{asset('assets/front-end/images/')}}/products/1.png" data-src="{{asset('assets/front-end/images/')}}/products/1.png" alt="">
                                    <img class="img-fluid lazy" src="{{asset('assets/front-end/images/')}}/products/1.png" data-src="{{asset('assets/front-end/images/')}}/products/1.png" alt="">
                                </a>
                            </figure>
                            {{--                        <div class="rating"><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star"></i></div>--}}
                            <a href="product-detail-1.html">
                                <h3  class="text-warning">Armor Air Zoom Alpha</h3>
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
                                    <img class="img-fluid lazy" src="{{asset('assets/front-end/images/')}}/products/3.png" data-src="{{asset('assets/front-end/images/')}}/products/3.png" alt="">
                                    <img class="img-fluid lazy" src="{{asset('assets/front-end/images/')}}/products/3.png" data-src="{{asset('assets/front-end/images/')}}/products/3.png" alt="">
                                </a>
                            </figure>
                            {{--                        <div class="rating"><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star"></i></div>--}}
                            <a href="product-detail-1.html">
                                <h3  class="text-warning">Armor Air Zoom Alpha</h3>
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
                                    <img class="img-fluid lazy" src="{{asset('assets/front-end/images/')}}/products/4.png" data-src="{{asset('assets/front-end/images/')}}/products/4.png" alt="">
                                    <img class="img-fluid lazy" src="{{asset('assets/front-end/images/')}}/products/4.png" data-src="{{asset('assets/front-end/images/')}}/products/4.png" alt="">
                                </a>
                            </figure>
                            {{--                        <div class="rating"><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star"></i></div>--}}
                            <a href="product-detail-1.html">
                                <h3  class="text-warning">Armor Air Zoom Alpha</h3>
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
                                    <img class="img-fluid lazy" src="{{asset('assets/front-end/images/')}}/products/5.png" data-src="{{asset('assets/front-end/images/')}}/products/5.png" alt="">
                                    <img class="img-fluid lazy" src="{{asset('assets/front-end/images/')}}/products/5.png" data-src="{{asset('assets/front-end/images/')}}/products/5.png" alt="">
                                </a>
                            </figure>
                            {{--                        <div class="rating"><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star"></i></div>--}}
                            <a href="product-detail-1.html">
                                <h3  class="text-warning">Armor Air Zoom Alpha</h3>
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
                                    <img class="img-fluid lazy" src="{{asset('assets/front-end/images/')}}/products/6.png" data-src="{{asset('assets/front-end/images/')}}/products/6.png" alt="">
                                    <img class="img-fluid lazy" src="{{asset('assets/front-end/images/')}}/products/6.png" data-src="{{asset('assets/front-end/images/')}}/products/6.png" alt="">
                                </a>
                            </figure>
                            {{--                        <div class="rating"><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star"></i></div>--}}
                            <a href="product-detail-1.html">
                                <h3  class="text-warning">Armor Air Zoom Alpha</h3>
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
                                    <img class="img-fluid lazy" src="{{asset('assets/front-end/images/')}}/products/7.png" data-src="{{asset('assets/front-end/images/')}}/products/7.png" alt="">
                                    <img class="img-fluid lazy" src="{{asset('assets/front-end/images/')}}/products/7.png" data-src="{{asset('assets/front-end/images/')}}/products/7.png" alt="">
                                </a>
                            </figure>
                            {{--                        <div class="rating"><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star"></i></div>--}}
                            <a href="product-detail-1.html">
                                <h3  class="text-warning">Armor Air Zoom Alpha</h3>
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
                                    <img class="img-fluid lazy" src="{{asset('assets/front-end/images/')}}/products/8.png" data-src="{{asset('assets/front-end/images/')}}/products/8.png" alt="">
                                    <img class="img-fluid lazy" src="{{asset('assets/front-end/images/')}}/products/8.png" data-src="{{asset('assets/front-end/images/')}}/products/8.png" alt="">
                                </a>
                            </figure>
                            {{--                        <div class="rating"><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star"></i></div>--}}
                            <a href="product-detail-1.html">
                                <h3  class="text-warning">Armor Air Zoom Alpha</h3>
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
                                    <img class="img-fluid lazy" src="{{asset('assets/front-end/images/')}}/products/13.png" data-src="{{asset('assets/front-end/images/')}}/products/13.png" alt="">
                                    <img class="img-fluid lazy" src="{{asset('assets/front-end/images/')}}/products/13.png" data-src="{{asset('assets/front-end/images/')}}/products/13.png" alt="">
                                </a>
                            </figure>
                            {{--                        <div class="rating"><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star"></i></div>--}}
                            <a href="product-detail-1.html">
                                <h3  class="text-warning">Armor Air Zoom Alpha</h3>
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
                                    <img class="img-fluid lazy" src="{{asset('assets/front-end/images/')}}/products/8.png" data-src="{{asset('assets/front-end/images/')}}/products/8.png" alt="">
                                    <img class="img-fluid lazy" src="{{asset('assets/front-end/images/')}}/products/8.png" data-src="{{asset('assets/front-end/images/')}}/products/8.png" alt="">
                                </a>
                            </figure>
                            {{--                        <div class="rating"><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star"></i></div>--}}
                            <a href="product-detail-1.html">
                                <h3  class="text-warning">Armor Air Zoom Alpha</h3>
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
                                    <img class="img-fluid lazy" src="{{asset('assets/front-end/images/')}}/products/11.png" data-src="{{asset('assets/front-end/images/')}}/products/11.png" alt="">
                                    <img class="img-fluid lazy" src="{{asset('assets/front-end/images/')}}/products/11.png" data-src="{{asset('assets/front-end/images/')}}/products/11.png" alt="">
                                </a>
                            </figure>
                            {{--                        <div class="rating"><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star"></i></div>--}}
                            <a href="product-detail-1.html">
                                <h3  class="text-warning">Armor Air Zoom Alpha</h3>
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
                                    <img class="img-fluid lazy" src="{{asset('assets/front-end/images/')}}/products/3.png" data-src="{{asset('assets/front-end/images/')}}/products/3.png" alt="">
                                    <img class="img-fluid lazy" src="{{asset('assets/front-end/images/')}}/products/3.png" data-src="{{asset('assets/front-end/images/')}}/products/3.png" alt="">
                                </a>
                            </figure>
                            {{--                        <div class="rating"><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star"></i></div>--}}
                            <a href="product-detail-1.html">
                                <h3  class="text-warning">Armor Air Zoom Alpha</h3>
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
                                    <img class="img-fluid lazy" src="{{asset('assets/front-end/images/')}}/products/10.png" data-src="{{asset('assets/front-end/images/')}}/products/10.png" alt="">
                                    <img class="img-fluid lazy" src="{{asset('assets/front-end/images/')}}/products/10.png" data-src="{{asset('assets/front-end/images/')}}/products/10.png" alt="">
                                </a>
                            </figure>
                            {{--                        <div class="rating"><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star"></i></div>--}}
                            <a href="product-detail-1.html">
                                <h3  class="text-warning">Armor Air Zoom Alpha</h3>
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
                                    <img class="img-fluid lazy" src="{{asset('assets/front-end/images/')}}/products/1.png" data-src="{{asset('assets/front-end/images/')}}/products/1.png" alt="">
                                    <img class="img-fluid lazy" src="{{asset('assets/front-end/images/')}}/products/1.png" data-src="{{asset('assets/front-end/images/')}}/products/1.png" alt="">
                                </a>
                            </figure>
                            {{--                        <div class="rating"><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star"></i></div>--}}
                            <a href="product-detail-1.html">
                                <h3  class="text-warning">Armor Air Zoom Alpha</h3>
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
                                    <img class="img-fluid lazy" src="{{asset('assets/front-end/images/')}}/products/14.png" data-src="{{asset('assets/front-end/images/')}}/products/14.png" alt="">
                                    <img class="img-fluid lazy" src="{{asset('assets/front-end/images/')}}/products/14.png" data-src="{{asset('assets/front-end/images/')}}/products/14.png" alt="">
                                </a>
                            </figure>
                            {{--                        <div class="rating"><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star"></i></div>--}}
                            <a href="product-detail-1.html">
                                <h3  class="text-warning">Armor Air Zoom Alpha</h3>
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

@endsection
