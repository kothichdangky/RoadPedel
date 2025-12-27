@extends('layouts.nav')
@section('content')
    <div>
        <section id="banner" class="banner3" style="background-image: url('/image/banner/banner2\ 1\ \(2\).png')">


            <!-- <div class=" img-fluid d-block">
            <img src="/image/new/poster.png" alt="" style="height: 900px ;width: 100%;">
        </div> -->

            <div class="container">
                <div class="row nowrap justify-content-center ">

                    <div class="col-5 col-lg-3 d-flex align-items-center justify-content-center box-left">
                        <div class="row nowrap align-items-center">
                            <div class="col-2 col-lg-2 mx-3">
                                <img src="/image/box.png" alt="">
                            </div>
                            <div class="col-10 col-lg-10 text-left mr-3">
                                <h5><b>FREE SHIPPING</b></h5>
                                <p>Rhoncus nec malesuada</p>
                            </div>
                        </div>
                    </div>


                    <div class="col-5 col-lg-3 d-flex align-items-center justify-content-center box-middle">
                        <div class="row nowrap align-items-center">
                            <div class="col-2 col-lg-2 mx-3">
                                <img src="/image/car.png" alt="">
                            </div>
                            <div class="col-10 col-lg-10 text-left mr-3">
                                <h5><b>FREE DELIVERY</b></h5>
                                <p>Rhoncus nec malesuada</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-5 col-lg-3 d-flex align-items-center justify-content-center box-middle">
                        <div class="row nowrap align-items-center">
                            <div class="col-2 col-lg-2 mx-3">
                                <img src="/image/coin.png" alt="">
                            </div>
                            <div class="col-10 col-lg-10 text-left mr-3">
                                <h5><b>PRICE GUARANTEE</b></h5>
                                <p>Rhoncus nec malesuada</p>
                            </div>
                        </div>
                    </div>


                    <div class="col-5 col-lg-3 d-flex align-items-center justify-content-center box-right">
                        <div class="row nowrap align-items-center">
                            <div class="col-2 col-lg-2 mx-3">
                                <img src="/image/shop.png" alt="">
                            </div>
                            <div class="col-10 col-lg-10 text-left mr-3">
                                <h5><b>FREE STORE PICKUP</b></h5>
                                <p>Rhoncus nec malesuada</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="container">


                    <div class="row justify-content-between align-items-center d-flex"
                        style="padding-top: 140px; padding-bottom: 180px;">
                        <div class="col-12 col-lg-4">
                            <h5 style="color: #FFB800; font-size: 16px;"><b>News</b></h5>
                            <h1 style="color: #fff; font-size: 56px;">News</h1>
                        </div>

                        <div class="col-12 col-lg-6 d-flex justify-content-end">
                            <h5 style="color: #FFF;">
                                <i class="fa-solid fa-house" style="font-size: 15px;"></i>
                                <span class="pr-2"> Home </span>
                                <span class="pr-2"> > </span>
                                <span class="pr-5"> News</span>
                            </h5>
                        </div>
                    </div>
                </div>
            </div>

        </section>


        <section id="new" class="py-5">
            <div class="container">
                <div class="row text-center">
                    <div class="col-md-10 mx-auto">
                        <h2 class="" style="color: #46878F;">News</h2>
                        <h1><big>Latest News</big></h1>
                        <p>Lorem orci elementum dictum viverra sed lobortis vitae purus Vitae eget cursus dictum ac
                            tellus faucibus Porta aliquet</p>
                    </div>
                </div>
            </div>
        </section>

        <div class="py-5">
            <div class="container">
                <div class="row align-items-center ">
                    <div class="col-lg-6 order-2 order-lg-1 p-2">
                        <img class="img-fluid d-block w-100" src="/image/new/bike 2.jpg">
                    </div>
                    <div
                        class="px-5 col-lg-6 d-flex flex-column align-items-start justify-content-center order-1 order-lg-2">
                        <p class="font-weight-bolder "><big>Ut pharetra sed velit et <br>sapien eros scelerisque.</big>
                        </p>
                        <h3 class="text-dark-2 font-weight-bolder mb-3"><big>August 19, 2021 No Comments</big></h3>
                        <p class="mt-4">Bibendum sit pharetra vitae pellentesque <br> sodales neque mollis orci, purus.
                            Feugiat <br>
                            volutpat eu velit purus enim cum. Eu <br>ipsum viverra sudisse placerat leo. Libero <br>vel
                            mi porttitor luctus viverra a</p>
                        <p class="text-warning mb-3">Read More<img src="/image/new/__.png" alt=""></p>
                    </div>
                </div>
            </div>
        </div>

        <div class="py-3" style="">
            <div class="container ">
                <div class="row ">
                    @foreach ($NewsPosts as $NewsPost)
                        <div class="col-md-4 position-relative  pb-2">
                            <div class="bg-secondary-3">
                                <img class="img-fluid d-block w-100" src="{{ asset('storage/' . $NewsPost->image) }}">
                                <p class="font-weight-bolder mt-4">{{ $NewsPost->heading }}</p>
                                <h3 class="mt-2 mb-0 text-dark-2 font-weight-bolder">
                                    {{ $NewsPost->created_at->format('d/m/Y H:i') }}</h3>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>

    </div>
@endsection
