@extends('frontend.app')
@section('main_content')
    <div class="container">
        <main class="bg_gray">
            <div class="container margin_60_35 add_bottom_30">
                <div class="main_title">
                    <h2 class="text-warning">Khan E Majlish</h2>
{{--                    <p class="text-info">Euismod phasellus ac lectus fusce parturient cubilia a nisi blandit sem cras nec tempor adipiscing rcu ullamcorper ligula.</p>--}}
                </div>
                <div class="row justify-content-center align-items-center">
                    <div class="col-lg-5">
                        <div class="box_about">
                            <h2>Spend Ramadan with us</h2>
                            <p class="lead">Whether you are planning an iftar party or have an army full of guests, rest assured that it can be easily fit into any one of the halls. Planning an iftar party is fun and we can join in on the fun by offering the services you need to make your iftar party run as smoothly as possible. We offer great rates and do our best to offer any service advice if need be.</p>
                            <img src="img/arrow_about.png" alt="" class="arrow_1">
                        </div>
                    </div>
                    <div class="col-lg-5 pl-lg-5 text-center d-none d-lg-block">
                        <img src="{{asset('assets/front-end/images')}}/hydrabadibiriyani.png" alt="" class="img-fluid" width="350" height="268">
                    </div>
                </div>
                <!-- /row -->

            </div>
            <!-- /container -->

            <!-- /bg_white -->

            <!-- /container -->
        </main>


    </div>
@endsection
