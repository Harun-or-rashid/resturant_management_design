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

</style>
@section('title','App-Page')
  <body>
@include('frontend.layouts.header')
@yield('main_content')


@include('frontend.layouts.footer')


