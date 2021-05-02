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



@include('frontend.layouts.footer')
 <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>

