@extends('layouts.nav')
@section('content')
    <section id="banner" class="banner w-100 img-fluid" style="background-image: url('/image/Banner.png');">

        <div class="container">
            <div class="row nowrap justify-content-center ">

                <div class="col-5 col-lg-3 d-flex align-items-center justify-content-center box-left">
                    <div class="row nowrap align-items-center">
                        <div class="col-2 col-lg-2 mx-3">
                            <img src="/image/box.png" alt="">
                        </div>
                        <div class="col-10 col-lg-10 text-left mr-3">
                            <h5><b>{{ __('message.FREE SHIPPING') }}</b></h5>
                            <p>{{ __('message.100% free shipping') }}</p>
                        </div>
                    </div>
                </div>

                <div class="col-5 col-lg-3 d-flex align-items-center justify-content-center box-middle">
                    <div class="row nowrap align-items-center">
                        <div class="col-2 col-lg-2 mx-3">
                            <img src="/image/car.png" alt="">
                        </div>
                        <div class="col-10 col-lg-10 text-left mr-3">
                            <h5><b>{{ __('message.FREE DELIVERY') }}</b></h5>
                            <p>{{ __('message.100% free delivery') }}</p>
                        </div>
                    </div>
                </div>

                <div class="col-5 col-lg-3 d-flex align-items-center justify-content-center box-middle">
                    <div class="row nowrap align-items-center">
                        <div class="col-2 col-lg-2 mx-3">
                            <img src="/image/coin.png" alt="">
                        </div>
                        <div class="col-10 col-lg-10 text-left mr-3">
                            <h5><b>{{ __('message.PRICE GUARANTEE') }}</b></h5>
                            <p>{{ __('message.Transparent pricing') }}</p>
                        </div>
                    </div>
                </div>

                <div class="col-5 col-lg-3 d-flex align-items-center justify-content-center box-right">
                    <div class="row nowrap align-items-center">
                        <div class="col-2 col-lg-2 mx-3">
                            <img src="/image/shop.png" alt="">
                        </div>
                        <div class="col-10 col-lg-10 text-left mr-3">
                            <h5><b>{{ __('message.FREE STORE PICKUP') }}</b></h5>
                            <p>{{ __('message.100% free when ordering at the store') }}</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row" style="padding-top: 180px; padding-bottom: 250px;">
                <div class="col-12 col-lg-6">
                    <h5 style="color: #FFB800;"> <b>{{ __('message.WELCOME') }}</b></h5>
                    <h2 class="text-light mt-3" style="font-size: 56px;">
                        {{ __('message.Full Suspension Mountain Bikes') }} <br>
                        {{ __('message.Full Suspension Mountain Bikes2') }}
                    </h2>
                    <p class="text-light mt-2 mb-1" style="font-size: 18px; font-weight: 400;">
                        {{ __('message.Varius') }}
                    </p>

                    <button class="btn-warning-2 text-dark my-2" style="height: 50px;">
                        <span class="mx-4 py-4"> {{ __('message.Shop now') }} </span>
                        <i class="fa-solid fa-right-long"></i>
                    </button>
                </div>
            </div>
        </div>

    </section>




    <section id="gioithieu" class="gioithieu pb-0 mb-0">
        <div class="container">
            <div class="row form">
                <div class="col-12 col-lg-6 pt-5 mt-5">
                    <p style="color: #46878F; font-weight: 400;">
                        <b>{{ __('message.ABOUT US') }}</b>
                    </p>
                    <h1 style="color: #222222;">
                        {{ __('message.Welcome To RoadPedal') }}
                    </h1>
                    <p style="font-size: 16px;">
                        {{ __('message.Lorem orci elementum dictum viverra sed lobortis vitae purus. Vitae eget cursus dictum ac tellus faucibus. Porta aliquet neque morbi interdum sem enim. Nunc porttitor.') }}</br>
                        {{ __('message.Rhoncus nec malesuada Quis fusce molestie maecenas turpis sociis congue elementum libero. Urna nisl tellus pharetra libero risus. Pellentesque risus sem') }}
                    </p>

                    <button class="btn-light text-dark border-dark radius my-3" style="height: 50px;">
                        <span class="mx-4 py-4">
                            <b>{{ __('message.Shop now') }}</b>
                        </span>
                        <i class="fa-solid fa-right-long"></i>
                    </button>
                </div>
                <div class="col-12 col-lg-6">
                    <img src="/image/index/banner-top 1.png" class="img-fluid d-block w-100" alt="">
                </div>
            </div>
        </div>
    </section>

    <section id="box" style="height: 100px;">
        <div class="bg-light-2 form-container box">
            <div class="container py-5">
                <div class="row nowrap justify-content-center">

                    <div class="col-5 col-lg-3 d-flex align-items-center justify-content-center box-left2">
                        <div class="row nowrap align-items-center">
                            <div class="col-2 col-lg-2 ml-3 mr-4">
                                <img src="/image/index/icon banner 5 1.png" alt="">
                            </div>
                            <div class="col-8 col-lg-6 text-left mx-0">
                                <h5><b>{{ __('message.Special Items') }}</b></h5>
                                <p><b>{{ __('message.Browse items now.') }}</b></p>
                            </div>
                            <div class="col-2 col-lg-4 text-left mr-2">
                                <i class="fa-solid fa-right-long fa-2" style="color: #FFB800;"></i>
                            </div>
                        </div>
                    </div>

                    <div class="col-5 col-lg-3 d-flex align-items-center justify-content-center box-middle2">
                        <div class="row nowrap align-items-center">
                            <div class="col-2 col-lg-2 ml-3 mr-4">
                                <img src="/image/index/icon banner 6 1.png" alt="">
                            </div>
                            <div class="col-8 col-lg-6 text-left mx-0">
                                <h5><b>{{ __('message.Just Arrived') }}</b></h5>
                                <p><b>{{ __('message.Browse items now.') }}</b></p>
                            </div>
                            <div class="col-2 col-lg-4 text-left mr-2">
                                <i class="fa-solid fa-right-long fa-2" style="color: #FFB800;"></i>
                            </div>
                        </div>
                    </div>

                    <div class="col-5 col-lg-3 d-flex align-items-center justify-content-center box-right2">
                        <div class="row nowrap align-items-center">
                            <div class="col-2 col-lg-2 ml-3 mr-4">
                                <img src="/image/index/icon banner 7 1.png" alt="">
                            </div>
                            <div class="col-8 col-lg-6 text-left mr-0">
                                <h5><b>{{ __('message.Top Selling') }}</b></h5>
                                <p><b>{{ __('message.Browse items now.') }}</b></p>
                            </div>
                            <div class="col-2 col-lg-4 text-left">
                                <i class="fa-solid fa-right-long fa-2" style="color: #FFB800;"></i>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>


    <section class="next mnho">
        <div class="text-center">
            <p class="text-primary-2"><b>{{ __('message.Featured Bicycles') }}</b></p>
            <h1>{{ __('message.Find Your Next Bike') }}</h1>
            <p style="font-weight: 400; font-size: 16px; color: #888897;">
                {{ __('message.Lorem orci elementum dictum viverra sed lobortis vitae purus Vitae eget cursus dictum ac tellus faucibus Porta aliquet') }}<br>
            </p>
        </div>
        <div class="product mt-5">
            <div class="box2">
                <div class="container py-5 align-content-center align-items-center justify-content-center">

                    <div class="row nowrap justify-content-between">
                        @foreach ($featuredProducts as $product)
                            <div class="col-6 col-lg-3 align-items-center justify-content-center" >
                                <a href="{{ route('road.product_detail', $product->id) }}">
                                    <div class="box-left3 text-center">
                                        <img src="{{ asset('storage/' . $product->image) }}" class="w-100 img-fluid"
                                            alt="" >
                                        <a href="{{ route('road.product_detail', $product->id) }}" class="text-center oxa text-muted">{{ $product->name }}</a>
                                        <div class="d-flex justify-content-center mb-3" style="color: #FFB800;">
                                            <i class="fa-solid fa-star mr-0"></i>
                                            <i class="fa-solid fa-star mx-0"></i>
                                            <i class="fa-solid fa-star mx-0"></i>
                                            <i class="fa-solid fa-star mx-0"></i>
                                            <i class="fa-solid fa-star mx-0"></i>
                                        </div>
                                        <div class="d-flex justify-content-center">

                                            @if ($product->price_sale)
                                            <p class="mr-2" style="font-weight: 700; font-size: 16px;color: #888897;">
                                                <b><del>${{ $product->price }}</del></b>
                                            </p>
                                            <p class="ml-2" style="font-weight: 700; font-size: 16px;color: #006D77; text-decoration: underline;">
                                                ${{ $product->price_sale }}
                                            </p>
                                        @else
                                            <p class="text-center" style="font-weight: 700; font-size: 16px; color: #006D77;">
                                                ${{ $product->price }}
                                            </p>
                                        @endif
                                        </div>
                                </a>

                                <div class="">
                                    <button
                                        class="btn btn-warning text-dark add-to-cart"
                                        data-id="{{ $product->id }}"
                                        style="height: 50px; padding: 100 15px; display: inline-block; line-height: normal;">
                                        <b>{{ __('message.Add to cart') }}</b>
                                    </button>
                                </div>

                            </div>
                    </div>
                    @endforeach
                </div>

                <div class="text-center my-4">
                    <button style="height: 50px;" class="btn-light text-dark border-dark radius">
                        <span class="mx-4 py-4"><a href="{{ route('road.shop') }}" class="text-dark"><b>{{ __('message.View more') }}</b></a></span>
                    </button>
                </div>
            </div>
        </div>
        </div>
    </section>
    <section id="bike" class="my-5 ">

        <div class="container">
            <div class="row nowrap justify-content-between ml--130">
                @foreach ($bikeSectionProducts as $product)
                    <div class="col-12 col-lg-6" >
                        <img  style="height: 350px; width:795px" src="{{ asset('storage/' . $product->image) }}" class="img-fluid" alt="">
                    </div>
                    <div class="col-12 col-lg-4 border  ">
                        <div class="">
                            <p class="text-primary-2"><b>new arrival</b></p>
                            <h3>{{ $product->name }}</h3>
                            <h3>${{ $product->price }}</h3>
                            <p style="color:#FFB800"><strong>SPECS</strong></p>
                            <p style="font-weight: 400; font-size: 16px;">
                                Quick CX, SmartForm C2 Alloy, SAVE, 1-1/2 to 1-1/8-inch tapered head tube
                            </p>
                            <button class="btn-warning-2 text-dark radius " style="height: 50px;">
                                <span class="mx-4 py-4">
                                    <b>{{ __('message.Shop now') }}</b>
                                </span>
                                <i class="fa-solid fa-right-long"></i>
                            </button>
                        </div>

                    </div>
                    <div class="col-12 col-lg-2 d-flex-2">
                        <img src="/image/index/bike 5 2.png" class="img-fluid w-100-2 " style=""
                            alt="">
                        <img src="/image/index/bike 5 2 (1).png" class="img-fluid w-100-2" alt="">
                    </div>
                @endforeach
            </div>

    </section>

    <section class="next pt-5 mt-5 ">
        <div class="text-center ">
            <p class="text-primary-2"><b>{{ __('message.SHOP') }}</b></p>
            <h1>{{ __('message.Shop by Category') }}</h1>
        </div>
        <div class="container">
            <div class="row my-5 justify-content-center">
                <div class="col-6 col-lg-4 my-3 text-center">
                    <img src="/image/index//image (2) 1.png" class="w-100 img-fluid d-block form" alt="">
                    <div class="form-img" style="height: 0; ">
                        <h3 style="color: #FFFFFB;">{{ __('message.Apparel') }}</h3>
                        <button class="btn-warning-2 text-dark radius my-2 " style="height: 40px;">
                            <span class="mx-4 py-2">
                                <b>{{ __('message.Shop now') }}</b>
                            </span>
                        </button>
                    </div>
                </div>
                <div class="col-6 col-lg-4 my-3 text-center">
                    <img src="/image/index//image (1) 1.png" class="w-100 img-fluid form" alt="">
                    <div class="form-img">
                        <h3 style="color: #FFFFFB;">{{ __('message.Accessories') }}</h3>
                        <button class="btn-warning-2 text-dark radius my-2 " style="height: 40px;">
                            <span class="mx-4 py-2">
                                <b>{{ __('message.Shop now') }}</b>
                            </span>
                        </button>
                    </div>
                </div>
                <div class="col-6 col-lg-4 my-3 text-center">
                    <img src="/image/index//image (1) 1 (2).png" class="w-100 img-fluid form" alt="">
                    <div class="form-img">
                        <h3 style="color: #FFFFFB;">{{ __('message.Component') }}</h3>
                        <button class="btn-warning-2 text-dark radius my-2 " style="height: 40px;">
                            <span class="mx-4 py-2">
                                <b>{{ __('message.Shop now') }}</b>
                            </span>
                        </button>
                    </div>
                </div>
                <div class="col-6 col-lg-4 my-3 text-center">
                    <img src="/image/index//image (1) 1 (3).png" class="w-100 img-fluid form" alt="">
                    <div class="form-img">
                        <h3 style="color: #FFFFFB;">{{ __('message.Bicycle Bag') }}</h3>
                        <button class="btn-warning-2 text-dark radius my-2 " style="height: 40px;">
                            <span class="mx-4 py-2">
                                <b>{{ __('message.Shop now') }}</b>
                            </span>
                        </button>
                    </div>
                </div>
                <div class="col-6 col-lg-4 my-3 text-center">
                    <img src="/image/index//image (1) 1 (4).png" class="w-100 img-fluid form" alt="">
                    <div class="form-img">
                        <h3 style="color: #FFFFFB;">{{ __('message.Custom Cycling Kit') }}</h3>
                        <button class="btn-warning-2 text-dark radius my-2 " style="height: 40px;">
                            <span class="mx-4 py-2">
                                <b>{{ __('message.Shop now') }}</b>
                            </span>
                        </button>
                    </div>
                </div>
                <div class="col-6 col-lg-4 my-3  text-center">
                    <img src="/image/index//image (1) 1 (5).png" class="w-100 img-fluid form" alt="">
                    <div class="form-img">
                        <h3 style="color: #FFFFFB;">{{ __('message.Shoes') }}</h3>
                        <button class="btn-warning-2 text-dark radius my-2 " style="height: 40px;">
                            <span class="mx-4 py-2">
                                <b>{{ __('message.Shop now') }}</b>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="next pt-5 mt-5 ">
        <div class="container">
            <div class="d-flex align-items-center justify-content-between">
                <div class="text-left ">
                    <p class="text-primary-2"><b>{{ __('message.SERVICES') }}</b></p>
                    <h1>{{ __('message.Our Bike Services') }}</h1>
                </div>
                <div class="">
                    <button class="btn-light text-dark border-dark radius" style="height: 50px;">
                        <span class="mx-4 py-4">
                            <b>{{ __('message.Shop now') }}</b>
                        </span>
                    </button>
                </div>
            </div>
            <div class="row my-5 justify-content-center">
                <div class="col-6 col-lg-4 my-4 text-left ">
                    <div class="bg-secondary-3">
                        <img src="/image/index//image (7) 1.png" class="w-100 img-fluid " alt="">
                        <div class="my-3 mx-4">
                            <h3>{{ __('message.Bike Repair') }}</h3>
                            <p style="color: #888897; font-size: 14px; font-weight: 400;">{{ __('message.Lorem2') }}</p>
                            <button class="btn-0 text-primary-2 py-3 "> {{ __('message.Read More') }} <i
                                    class="fa-solid fa-right-long"></i>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-lg-4 my-4 text-left">
                    <div class="bg-secondary-3">
                        <img src="/image/index//image (7) 1 (1).png" class="w-100 img-fluid " alt="">
                        <div class="my-3 mx-4">
                            <h3>{{ __('message.Bike Repair') }}</h3>
                            <p style="color: #888897; font-size: 14px; font-weight: 400;">{{ __('message.Lorem2') }}</p>
                            <button class="btn-0 text-primary-2 py-3 "> {{ __('message.Read More') }} <i
                                    class="fa-solid fa-right-long"></i>
                            </button>
                        </div>
                    </div>
                </div>


                <div class="col-6 col-lg-4 my-4 text-left ">
                    <div class="bg-secondary-3">
                        <img src="/image/index//image (7) 1 (2).png" class="w-100 img-fluid " alt="">
                        <div class="my-3 mx-4">
                            <h3>{{ __('message.Bike Repair') }}</h3>
                            <p style="color: #888897; font-size: 14px; font-weight: 400;">{{ __('message.Lorem2') }}</p>
                            <button class="btn-0 text-primary-2 py-3 "> {{ __('message.Read More') }} <i
                                    class="fa-solid fa-right-long"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section id="gioi-thieu2">
        <div class="container">
            <div class="row justify-content-center ">
                <div class="col-12 col-lg-6 mx-0">
                    <p style="color: #46878F; font-weight: 400;"><b>{{ __('message.UPGRADE') }}</b></p>
                    <h1 style="color: #222222;">{{ __('message.Looking To Upgrade?') }}</h1>
                    <p style="font-size: 24px;  font-family: Oxanium;">
                        {{ __('message.lets discuss so that the upgrade is according to your wishes') }}</p>
                    <p class="text-secondary-2">
                        {{ __('message.Lorem orci elementum dictum viverra sed lobortis vitae purus. Vitae eget cursus dictum ac tellus faucibus. Porta aliquet neque morbi interdum sem enim. Nunc porttitor.') }}
                    </p>
                    <button class="btn-light text-dark border-dark radius my-3 " style="height: 50px;">
                        <span class="mx-4 py-4">
                            <b>{{ __('message.Contact Us') }}</b>
                        </span>
                    </button>
                </div>
                <div class="col-12 col-lg-6">
                    <img src="/image/index/slider-2 1.png" class="w-700px" alt="">
                </div>
            </div>

            <div class="row justify-content-center my-3">
                <div class="col-12 col-lg-6 ">
                    <img src="/image/index/image (10) 1.png" class="img-fluid w-100 d-block" alt="">
                </div>

                <div class="col-12 col-lg-6 ">
                    <div>
                        <div class="h-310px" style="background-image: url(/image/index/image\ \(11\)\ 1.png);">
                            <div class="py-5 px-5 ">
                                <h3 class="text-light">
                                    {{ __('message.Vitae tellus aenean et aliquam nibh Feugiat suspendisse proin pulvinar.') }}
                                </h3>
                                <p class="text-light">
                                    {{ __('message.Lorem orci elementum dictum viverra sed lobortis vitae purus. Vitae eget cursus dictum ac tellus faucibus. Porta aliquet neque morbi interdum sem enim. Nunc porttitor.') }}
                                </p>
                            </div>
                        </div>
                    </div>
                    <div>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <section id="comment" class="py-5 my-5">
        <div class="container">
            <div class="text-center ">
                <p class="text-primary-2"><b>{{ __('message.TESTIMONIALS') }}</b></p>
                <h1>{{ __('message.Why Our Customer Love RoadPedal') }}</h1>
                <p style="font-weight: 400; font-size: 16px; color: #888897;">{{ __('message.Lorem3') }}</p>
            </div>

            <div class="owl-carousel py-5">
                <div class="mx-3">
                    <div class="bg-dark-2 form text-light radius mb-0 pb-0">
                        <div class="pl-6 py-4 pr-5" style="font-size: 21px;">
                            Lorem orci elementum dictum viverra sed lobortis vitae purusae eget cursus dictum
                            tellusaucibus porta aliquet neque eleme.
                        </div>
                    </div>
                    <div class="form-icon mx-5-2" style="height: 0;">
                        <i class="fa-solid fa-caret-up fa-2x fa-rotate-180"></i>
                    </div>
                    <div class="row py-3 justify-content-center ">
                        <div class="col-3 col-lg-3 ">
                            <img src="/image/index//image (12) 3.png" class="img-fluid w-100" alt="">
                        </div>

                        <div class="col-8 col-lg-7 px-0">
                            <p class="my-0" style="font-size: 24px;"> <b> Hayden Read </b></p>
                            <p class="my-0" style=" font-size: 12px; color: #888897;">
                                <strong>SALES MANAGER</strong>
                            </p>
                        </div>

                    </div>
                </div>

                <div class="mx-3">
                    <div class="bg-dark-2 form text-light radius mb-0 pb-0">
                        <div class="pl-6 py-4 pr-5" style="font-size: 21px;">
                            Lorem orci elementum dictum viverra sed lobortis vitae purusae eget cursus dictum
                            tellusaucibus porta aliquet neque eleme.
                        </div>
                    </div>
                    <div class="form-icon mx-5-2" style="height: 0;">
                        <i class="fa-solid fa-caret-up fa-2x fa-rotate-180"></i>
                    </div>
                    <div class="row py-3 justify-content-center ">
                        <div class="col-3 col-lg-3 ">
                            <img src="/image/index//image (13) 3.png" class="img-fluid w-100" alt="">
                        </div>

                        <div class="col-8 col-lg-7 px-0">
                            <p class="my-0" style="font-size: 24px;"> <b> Quinn Nolan </b></p>
                            <p class="my-0" style=" font-size: 12px; color: #888897;">
                                <strong>{{ __('SALES MANAGER') }}</strong>
                            </p>
                        </div>

                    </div>
                </div>

                <div class="mx-3">
                    <div class="bg-dark-2 form text-light radius mb-0 pb-0">
                        <div class="pl-6 py-4 pr-5" style="font-size: 21px;">
                            Lorem orci elementum dictum viverra sed lobortis vitae purusae eget cursus dictum
                            tellusaucibus porta aliquet neque eleme.
                        </div>
                    </div>
                    <div class="form-icon mx-5-2" style="height: 0;">
                        <i class="fa-solid fa-caret-up fa-2x fa-rotate-180"></i>
                    </div>
                    <div class="row py-3 justify-content-center ">
                        <div class="col-3 col-lg-3 ">
                            <img src="/image/index//image (14) 3.png" class="img-fluid w-100" alt="">
                        </div>

                        <div class="col-8 col-lg-7 px-0">
                            <p class="my-0" style="font-size: 24px;"> <b> Sammy Peters </b></p>
                            <p class="my-0" style=" font-size: 12px; color: #888897;">
                                <strong>SALES MANAGER</strong>
                            </p>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="news" class="pt-4">
        <div class="container">
            <div class="text-center ">
                <p class="text-primary-2"><b>{{ __('message.TESTIMONIALS') }}</b></p>
                <h1>{{ __('message.Why Our Customer Love RoadPedal') }}</h1>
                <p style="font-weight: 400; font-size: 16px; color: #888897;">{{ __('message.Lorem3') }}</p>
            </div>


            <div class="row my-5 justify-content-center">
                @foreach ($NewsPosts as $NewsPost)
                <div class="col-6 col-lg-4  my-4 text-left ">
                    <div class="pb-3">
                        <img src="{{ asset('storage/' . $NewsPost->image) }}" class="w-100 img-fluid " alt="">
                        <div class="my-3 mx-4" style=" ">
                            <h3 class="" style="font-size: 20px;">{{ $NewsPost->heading }}
                            </h3>
                            <p style="color: #888897; font-size: 14px; font-weight: 400;"> {{ $NewsPost->created_at->format('d/m/Y H:i') }}
                            </p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>

        </div>
    </section>


    <script>
        $(document).ready(function() {
            $('.add-to-cart').on('click', function() {
                const productId = $(this).data('id');

                $.ajax({
                    url: `/RoadPedal/add-to-cart/${productId}`,
                    method: 'POST',
                    data: {
                        _token: '{{ csrf_token() }}'
                    },
                    success: function(response) {
                        if (response.success) {
                            const cartCount = response.cartCount;

                            // Cập nhật hoặc ẩn cart badge
                            if (cartCount > 0) {
                                if ($('#cart-count').length) {
                                    $('#cart-count').text(cartCount);
                                } else {
                                    $('.cart-icon').append(`<span id="cart-count" class="cart-badge">${cartCount}</span>`);
                                }
                            } else {
                                $('#cart-count').remove();
                            }
                        }
                    },
                    error: function(xhr) {
                        console.error(xhr.responseText); // Log lỗi chi tiết
                    }
                });
            });
        });
    </script>


@endsection
