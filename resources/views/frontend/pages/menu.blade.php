@extends('frontend.app')
@section('main_content')
    <div class="container">
        <div class="demo">
            <div class="container">

                <div class="row">
                    <div class="col-md-12 " style="text-align: center">
                        <div class="product_header ">
                            <div class="section_title join_us_title align-middle">
                                <h2 class="text-info" style="font-weight: 400">Our Menus</h2>
                                <p class="text-danger" style="font-weight: 200">Let us know about your choice</p>
                            </div>
                        </div>
                    </div>


                    <div class="row">
                        {{--                        <div class="row">--}}
                        <div class="col-md-6 mb-4 ">
                            <div class=" w3-row-padding">
                                <div class="w3-container w3-third widthFix">
                                    <img src="{{asset('assets/front-end')}}/images/Menu.jpg" style="cursor:zoom-in; "
                                         onclick="onClick(this)" class="zoom w3-hover-opacity">
                                </div>
                                {{--                            <div class="w3-container w3-third">--}}
                                {{--                                <img  class="zoom" style="height:300px;border-radius: 20px 0px 0px 0px" src="{{asset('public/assets/front-end')}}/images/menus/menuthree.jpeg" alt="">--}}

                                {{--                            </div>--}}
                            </div>
                        </div>
                        <div class="col-md-6 mb-4">
                            <div class=" w3-row-padding">
                                <div class="w3-container w3-third widthFix">
                                    <img src="{{asset('assets/front-end')}}/images/Menu2.jpg" style="cursor:zoom-in; "
                                         onclick="onClick(this)" class="zoom w3-hover-opacity">
                                </div>
                                {{--                            <div class="w3-container w3-third">--}}
                                {{--                                <img  class="zoom" style="height:300px;border-radius: 20px 0px 0px 0px" src="{{asset('public/assets/front-end')}}/images/menus/menuthree.jpeg" alt="">--}}

                                {{--                            </div>--}}
                            </div>

                        </div>
                        {{--                        </div>--}}
                        {{--                        <div class="row">--}}

                        {{--                        </div>--}}


                    </div>
                    <div id="modal01" class="w3-modal" onclick="this.style.display='none'">
                        <span class="w3-button w3-hover-red w3-xlarge w3-display-topright">&times;</span>
                        <div class="w3-modal-content w3-animate-zoom">
                            <img id="img01" style="width:100%">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
