<div class="row same-mt">
    <div class="col-md-4">
        <div class="logo same-mb">
            <a href="">
                <img style="" src="{{asset('assets/front-end')}}/images/logo-khan.png" alt="">
            </a>
        </div>
        <div class="container same-mb question d-flex   ">
            <div class="icon col-md-1" style=" font-size: 35px;">
                <span class="icon fa fa-question-circle"></span>
            </div>
            <div class="contact " style="margin:0 25px">
                <h4>Got Questions ?</h4>
                <span class="header-text-1">(+880) 1937 990 932</span><br>
                <span class="header-text-2">(+880) 1937 990 933</span>
            </div>
        </div>
        <div class="container sign-up same-mb">
            <h4>Sign Up For Special Offer</h4>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Your email here" aria-label="Search">
                <button class="btn btn-outline-info my-2 my-sm-0" type="submit">Sign-Up</button>
            </form>
        </div>

    </div>
    <div class="col-md-2">
        <h4 class="" style="text-align: center">Useful Links</h4>
        <ul class="useful-links ">
            <li class=""><a class="btn btn-transparent text-info" href="{{url('/')}}">Home</a></li>
            <li><a class="btn btn-transparent text-info" href="{{url('/menus')}}">Resturant Menu</a></li>
{{--            <li><a class="btn btn-transparent text-warning" href="">Local Branches</a></li>--}}
{{--            <li><a class="btn btn-transparent text-warning" href="">Franchise</a></li>--}}
{{--            <li><a class="btn btn-transparent text-warning" href="">Our Gallery</a></li>--}}
            <li><a class="btn btn-transparent text-info" href="">Contact Us</a></li>
            <li><a class="btn btn-transparent text-info" href="{{url('/about')}}">About</a></li>
        </ul>
    </div>
    <div class="col-md-2">
        <div class=" same-mb">
            <a href="">
                <img style="" class="footer-img" src="{{asset('assets/front-end/images/img.png')}}" alt="">
            </a>
        </div>
    </div>
    <div class="col-md-4">
        <h4 class="same-mb" style="text-align: center">Corporate Office</h4>
        <div class="location d-flex">
            <div class="icon col-md-1" style=" font-size: 18px;">
                <span class="icon fa fa-home"></span>
            </div>
            <div class="content">
                <p tyle="font-size: 15px;font-weight: 400">HOUSE-47,RD NO:13,BLOCK: E,BANANI 1213,DHAKA</p>
            </div>
        </div>
        <div class="location d-flex">
            <div class="icon col-md-1" style=" font-size: 18px;">
                <span class="icon fa fa-phone"></span>
            </div>
            <div class="content">
                <p style="font-size: 15px;font-weight: 400">(+880) 1937 990 932,(+880) 1937 990 933</p>
            </div>
        </div>
        <div class="location d-flex">
            <div class="icon col-md-1" style=" font-size: 18px;">
                <span class="icon fa fa-clock"></span>
            </div>
            <div class="content">
                <p style="font-size: 15px;font-weight: 400">Sat-Fri: 10:00am-10:00pm; (GMT+6 BD time)</p>
            </div>
        </div>
    </div>
</div>
<div class="foot same-mb">
    <div class="row d-flex">
        <div class="col-md-6">
            <h5>Copyright © Custom Digital. All rights reserved.</h5>
        </div>
        <div class="col-md-6 payment-img">
            <a href="">
                <img style="" src="{{asset('assets/front-end')}}/images/payment/bkash.png" alt="">
            </a>
            <a href="">
                <img style="" src="{{asset('assets/front-end')}}/images/payment/Master.png" alt="">
            </a>
            <a href="">
                <img style="" src="{{asset('assets/front-end')}}/images/payment/Nagad.png" alt="">
            </a>
            <a href="">
                <img style="" src="{{asset('assets/front-end')}}/images/payment/Visa.png" alt="">
            </a>

        </div>
    </div>
</div>

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

<script>
    function onClick(element) {
        document.getElementById("img01").src = element.src;
        document.getElementById("modal01").style.display = "block";
    }
</script>
</body>
</html>
