@extends('layouts.nav')
@section('content')

    <body>




        <section id="banner" class="banner2" style="background-image: url('/image/banner/banner_service.png')">


            <!-- <div class=" img-fluid d-block">
                                <img src="/image/poster.png" alt="" style="height: 900px ;width: 100%;">
                            </div> -->

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


                <div class="container">


                    <div class="row justify-content-between align-items-center d-flex"
                        style="padding-top: 140px; padding-bottom: 180px;">
                        <div class="col-12 col-lg-4">
                            <h5 style="color: #FFB800; font-size: 16px;"><b>{{ __('message.SERVICES') }}</b></h5>
                            <h1 style="color: #fff; font-size: 56px;">{{ __('message.Our Services') }}</h1>
                        </div>

                        <div class="col-12 col-lg-6 d-flex justify-content-end">
                            <h5 style="color: #FFF;">
                                <i class="fa-solid fa-house" style="font-size: 15px;"></i>
                                <span class="pr-2"> {{ __('message.HOME') }} </span>
                                <span class="pr-2"> > </span>
                                <span class="pr-5"> {{ __('message.Our Services') }}</span>
                            </h5>
                        </div>
                    </div>
                </div>
            </div>

        </section>


        <section class="next pt-5 mt-5 ">
            <div class="container">
                <div class=" align-items-center ">
                    <div class="text-center ">
                        <p class="text-primary-2"><b> {{ __('message.SERVICES') }} </b></p>
                        <h1>{{ __('message.Our Bike Services') }}</h1>
                        <p style="font-weight: 400; font-size: 16px; color: #888897;">
                            {{ __('message.orem') }}
                        </p>
                    </div>
                </div>

                <div class="row my-5 justify-content-center align-items-center   ">
                    <div class="col-6 col-lg-6">
                        <img src="/image/service//image (7) 2.png" class="w-100 img-fluid" alt="">

                    </div>
                    <div class="col-6 col-lg-6">
                        <h2>{{ __('message.Bike Repair') }}</h2>
                        <p>{{ __('message.Bike1') }}</p>

                        <button class="btn-warning-2 text-dark radius mt-3 "  style="height: 50px;">
                            <a href="{{ route('contact.show') }}" style="color: #0e0c0c">
                            <span class="mx-4 py-4">
                              <b> {{ __('message.Contact Us') }} </b>
                            </span>
                            </a>
                        </button>
                    </div>

                </div>


                <div class="row my-5 justify-content-center align-items-center flex-row-reverse py-5 ">
                    <div class="col-6 col-lg-6">
                        <img src="/image/service//image (7) 3.png" class="w-100 img-fluid" alt="">

                    </div>
                    <div class="col-6 col-lg-6">
                        <h2>{{ __('message.Bike Fitting') }} </h2>
                        <p>{{ __('message.Bike2') }}</p>
                        <button class="btn-warning-2 text-dark radius mt-3 "  style="height: 50px;">
                            <a href="{{ route('contact.show') }}" style="color: #0e0c0c">
                            <span class="mx-4 py-4">
                              <b> {{ __('message.Contact Us') }} </b>
                            </span>
                            </a>
                        </button>
                    </div>

                </div>

                <div class="row my-5 justify-content-center align-items-center   ">
                    <div class="col-6 col-lg-6">
                        <img src="/image/service//image (7) 2 (1).png" class="w-100 img-fluid" alt="">

                    </div>
                    <div class="col-6 col-lg-6">
                        <h2>{{ __('message.Bike Rental') }}</h2>
                        <p></p>
                        <p>{{ __('message.Bike3') }}</p>

                        <button class="btn-warning-2 text-dark radius mt-3 "  style="height: 50px;">
                            <a href="{{ route('contact.show') }}" style="color: #0e0c0c">
                            <span class="mx-4 py-4">
                              <b> {{ __('message.Contact Us') }} </b>
                            </span>
                            </a>
                        </button>
                    </div>

                </div>


            </div>
        </section>

        <section id="form-moi" class="form-moi py-5 my-5">
            <div class="d-flex">
                <div class="yellow form">
                    <div class=" pt-5" style="padding-left: 200px;">
                        <h5>{{ __('message.CALL US') }}</h5>
                        <h1>{{ __('message.Want To Service The') }} </br> {{ __("message.Bike But Can't Get Here?") }}
                        </h1>
                        <h1 class="mt-2">{{ __('message.We Will Be There') }}</h1>

                        <p class="py-3">{{ __('message.bike4') }} <br> {{ __('message.bike5') }} </p>
                        <img src="/image/service/bike 1.png" class="pb-5 " alt="">
                    </div>
                </div>

                <div class=" py-5 form-service">
                    <div class="bg-dark-2 py-5 my-5 px-5">
                        <h2 class="text-warning">{{ __('message.Get Started Now') }}</h2>
                        <p class="mb-5 text-light">{{ __('message.Bike6') }}</p>
                        <form action="{{ route('contact.sendEnquiry') }}" method="POST">
                            @csrf
                            <div class="form-group ">
                                <input type="text" name="name" class="form-control w-100" id="form22"
                                    placeholder="{{ __('message.Name') }}">
                            </div>
                            <div class="form-group">
                                <input type="text" name="email" class="form-control w-100" id="form25"
                                    placeholder="Email">
                            </div>
                            <div class="form-group">
                                <input type="text" name="phone" class="form-control w-100"
                                    placeholder="{{ __('message.Phone') }}">
                            </div>
                            <div class="form-group">
                                <textarea class="form-control w-100" name="message" rows="" placeholder="{{ __('message.Write message') }}"></textarea>
                            </div>
                            <div class="mb-0">
                                <button type="submit" class="btn btn-warning-2 w-100">Send</button>
                            </div>

                        </form>
                    </div>
                </div>

            </div>

            </div>

        </section>




    </body>
@endsection
