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
@section('title','App-Page')
  <body>
@include('frontend.layouts.header')
@yield('main_content')


@include('frontend.layouts.footer')


