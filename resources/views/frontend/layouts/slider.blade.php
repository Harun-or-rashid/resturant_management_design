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
