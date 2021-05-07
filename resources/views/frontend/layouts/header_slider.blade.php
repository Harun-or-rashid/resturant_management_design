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
    .zoom {
        padding: 10px;
        background-color: #284d71;
        transition: transform .2s; /* Animation */
        width: 100%;
        height:auto;
        margin: 0 auto;
    }

    .zoom:hover {
        /*transform: scale(1.5); !* (150% zoom - Note: if the zoom is too large, it will go outside of the viewport) *!*/
    }
    .widthFix {
        width: 100%;
    }
    .dropbtn {

        /*padding: 16px;*/
        /*font-size: 16px;*/
        border: none;
    }

    .dropdown {
        position: relative;
        display: inline-block;
        /*position: relative;*/
        background: #449AD4;
        width: 150px;
        border-radius: 20px;
        text-align: center;
        left: 45px;
        margin-top: 5px;

    }

    .dropdown-content {
        display: none;
        position: absolute;
        background-color: #f1f1f1;
        min-width: 160px;
        box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
        z-index: 30;
    }

    .dropdown-content a {
        color: black;
        padding: 12px 16px;
        text-decoration: none;
        display: block;
    }
    .text-si >a{
        font-size: 15px;
        color: #4F98CA;
        font-weight: 400;
    }
    .text-sin >li >a{
        font-size: 15px;
        color: #4F98CA;
        font-weight: 500;
    }

    .dropdown-content a:hover {background-color: #FFFFFF;}

    .dropdown:hover .dropdown-content {display: block;}

    /*.dropdown:hover .dropbtn {background-color: #449AD4;}*/
</style>

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
    @media only screen and (max-width: 600px) {
        body {
        }
        .dis-non{
            display: none;
        }
        .dis-con{
            position: fixed;
            display: contents;

        }
    }
</style>
@section('title','App-Page')
<header class="slider-row" >
    <div class="containera">
        <div class="row " style="background: #449AD4; text-align:center;color:white">
            <div class="col-md-2 " style="border-right: 1px solid white;">
                <p><a href="https://api.whatsapp.com/send?phone=+8801937990932" class="btn btn-transparent text-white " style=" margin-left: -10px;text-align:center;font-size: 14px"><span class="icon icon-font fa fa-whatsapp"></span>WhatsApp:+8801937 990 932</a></p>
            </div>
            <div class="col-md-8 ">
                <div class="row" style="border-right: 1px solid white;">
                    <div class="left dis-non">
                        <p ><a style="font-size: 15px" href="tel:+8801937 990 933" class="btn btn-transparent text-white " ><span class=""></span>Please Call Us At:+(+880)1937 990932 </a></p>
                    </div>
                    <div class="right offset-6 text-white" style="">
                    <span>
            <a href="https://www.facebook.com/khanemajlis" class="btn btn-transparent text-white " >
                <span class=" fa fa-facebook"></span>
            </a>
                </span>
                        <span>

                </span>
                        <span>
                    <a href="https://www.instagram.com/khanemajlis/" class="btn btn-transparent text-white " >
                        <span class=" fa fa-instagram"></span>
                    </a>
                </span>
                    </div>
                </div>
            </div>
            <div class="col-md-2 ">
                <span>
                    <a href="#." class="btn btn-transparent text-white " style="position: relative;top: 7px;">
                        <span style="font-size: 25px" class=" fa fa-user-circle"></span> <span class="" style="position: relative;top: -4px;left: 4px">Login</span>
                    </a>
                </span>

            </div>
        </div>
    </div>
    <div class="row main_nav" style="height: 140px;">
        <div class="col-md-3">
            <div class="logo">
                <a href="{{url('/')}}">
                    <img src="{{asset('assets/front-end')}}/images/logo-khan.png" alt="">
                </a>

            </div>
            <div class="dropdown" style="background:#449AD4;width: 150px;border-radius: 20px;text-align: center " >

                <a  href="{{url('/menus')}}" class="dropbtn nav-link btn btn-transparent text-white fa fa-list" style=" font-size: 21px; margin: 6px 0px 0px;">Our Menus</a>
                <div class="dropdown-content text-si">
                    <a class="fa fa-glass" href="">Hyderabadi Feast</a>
                    <a class="fa fa-snowflake-o" href="#">Signature</a>
                    <a class="fa fa-cutlery" href="#">Kebab & Tikka</a>
                    <a class="fa fa-envira" href="#">Old Dhaka Feast</a>
                    <a class="fa fa-glass" href="#">Desserts</a>
                </div>

            </div>
        </div>
        <div class="col-md-6">
            <nav class="navbar navbar-expand-sm bg-transparent d-flex dis-con">

                <!-- Links -->
                <ul class="navbar-nav text-sin" style="position: relative;left: 115px;top: 50px">
                    <li class="nav-item">
                        <a class="nav-link btn btn-transparent text-info" href="{{'/'}}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link btn btn-transparent text-info" href="{{url('/menus')}}">Menus</a>

                    </li>
                    <li class="nav-item">
                        <a class="nav-link btn btn-transparent text-info" href="{{url('/about')}}">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link btn btn-transparent text-info" href="#">Contact Us</a>
                    </li>
                </ul>

            </nav>
        </div>
        <div class="col-md-3" style="">
            <div class="row"  style="position: relative; top: 35px;">
                <div class="icon col-md-1" style=" font-size: 35px;position: relative;right: 25px;">
                    <span class="icon fa fa-phone"></span>
                </div>
                <div class="contact ">
                    <span class="header-text-1" style="font-size: 15px">(+880) 1937 990 932,(+880) 1937 990 933</span><br>

                    <span class="header-text-2" style="font-size: 15px">Sat-Fri:10:00am-10:00pm;(GMT+6 BD time)</span>
                </div>
            </div>

        </div>
    </div>


    <div class="row">

        <div class="row " style="width: 100%">
            <div id="carouselExampleIndicators" class="carousel slide " style="width: 100%" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    {{--                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>--}}
                    <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>

                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="{{asset('assets/front-end/images')}}/sliders/1.jpg" class="d-block w-100" alt="...">
                    </div>
                    {{--                <div class="carousel-item">--}}
                    {{--                    <img src="{{asset('public/assets/front-end')}}/images/slider/slider2.jpeg" class="d-block w-100 h-500" alt="...">--}}
                    {{--                </div>--}}
                    <div class="carousel-item">
                        <img src="{{asset('assets/front-end/images')}}/sliders/2.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="{{asset('assets/front-end/images')}}/sliders/3.jpg" class="d-block w-100" alt="...">
                    </div>
                </div>
                <a class="carousel-control-prev" id="previous" href="#carouselExampleIndicators" role="button"
                   data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" id="next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>

        </div>

    </div>

</header>

<body>
@yield('main_content')


@include('frontend.layouts.footer')
