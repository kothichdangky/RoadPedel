<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.72.0">
    <title>RoadPedal</title>
    <link rel="icon" href="/image/2.png" type="image/x-icon">
    <link rel="stylesheet" href="/css/bootstrap-4.4.1.css">
    <link rel="stylesheet" href="/css/main-style.css">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">

    <!-- jQuery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

    <!-- Owl Carousel JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">

</head>

<body>
    <section id="top" class="top">
        <div class="bg-secondary-2">
            <div class="container">
                <div class="row align-items-center justify-content-between">
                    <div class="col-12 col-lg-6 d-flex justify-content-start">
                        <p class="text-light">{{ __('message.covid') }}</p>
                        <button class="btn-0 text-warning-2 ml-3">
                            {{ __('message.Read More') }}
                            <i class="fa-solid fa-right-long"></i>
                        </button>
                    </div>
                    <div class="col-12 col-lg-6 d-flex align-items-center justify-content-end">
                        <p class="text-light">{{ __('message.Free Shipping For All Product') }}</p>
                        <p>
                            <button class="btn-0 border text-light ml-4">
                                {{ __('message.Shop now') }}
                            </button>
                        </p>
                        <div>
                            <select class="form-control changeLang text-light ">
                                <option value="{{ route('lang', ['en']) }}" class=" text-center"
                                    {{ Session::get('language', config('app.locale')) === 'en' ? 'selected' : '' }}>
                                    English
                                </option>
                                <option value="{{ route('lang', ['vn']) }}" class=" text-center"
                                    {{ Session::get('language', config('app.locale')) === 'vn' ? 'selected' : '' }}>
                                    VietNam
                                </option>
                            </select>
                            <script>
                                document.querySelector('.changeLang').addEventListener('change', function() {
                                    // Lấy URL từ value của option được chọn
                                    const url = this.value;
                                    // Chuyển hướng đến URL đó
                                    window.location.href = url;
                                });
                            </script>

                            {{-- <a value="en" href="{{ route('lang', ['en']) }}">EN</a>
                            <a value="vn" href="{{ route('lang', ['vn']) }}">VN</a> --}}
                            {{-- <script>
                                $(document).ready(function() {
                                    // Đảm bảo dropdown hoạt động chính xác trong Bootstrap 4
                                    $('.dropdown-toggle').dropdown();

                                    // Thêm sự kiện để điều chỉnh z-index khi mở dropdown
                                    $('.dropdown').on('show.bs.dropdown', function() {
                                        $(this).find('.dropdown-menu').css('z-index', '1050');
                                    });
                                });
                            </script> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="navbar" class="navbar2">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark-2 shadow ">
            <div class="container">
                <a class="navbar-brand" href="{{ route('road.home') }}">
                    <img src="/image/1.png" class="d-block img-fluid w-100" alt="">
                </a>
                <button class="navbar-toggler navbar-toggler-right border-0 " type="button" data-toggle="collapse"
                    data-target="#navbar10">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbar10">
                    <ul class="navbar-nav ml-auto">


                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('road.home') }}">
                                <p class="oxa">{{ __('message.HOME') }}</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('road.service') }}">
                                <p class="oxa">{{ __('message.SERVICE') }}</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('road.shop') }}">
                                <p class="oxa">{{ __('message.SHOP') }}</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('road.newhome') }}">
                                <p class="oxa">{{ __('message.NEWS') }}</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('contact.show') }}">
                                <p class="oxa">{{ __('message.CONTACT') }}</p>
                            </a>
                        </li>
                    </ul>
                    {{-- <i class="fa-solid fa-user text-warning-2"></i> --}}

                    @guest
                        <ul class="navbar-nav ">
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" style="font-weight: 200"
                                        href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link " style="font-weight: 200"
                                        href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                        </ul>
                        @endif
                    @else
                        <div class="dropdown">
                            <a type="button" class="btn text-warning dropdown-toggle" data-toggle="dropdown">
                                {{ Auth::user()->name }}
                            </a>
                            <div class="dropdown-menu text-warning-2">
                                <a class="dropdown-item text-warning-2" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                                        document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>
                                <a class="dropdown-item text-warning-2" href="{{ route('road.mybills') }}">
                                    <p class="">{{ __('My order') }}</p>
                                </a>
                                @can('crud-customer')
                                    <a class="dropdown-item text-warning-2" href="{{ route('road.admin') }}">
                                        <p class="">{{ __('message.Admin') }}</p>
                                    </a>
                                @endcan
                            </div>
                        </div>
                    </div>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>

                @endguest

                <div class="icon-container">
                    <form method="GET" action="{{ route('road.searchhome') }}">
                        <i class="fa-solid fa-magnifying-glass text-warning-2" id="toggleInputBtn"></i>
                        <div class="input-container" id="inputContainer">
                            <input type="text" name="keyword" placeholder="Nhập nội dung...">

                        </div>
                    </form>
                </div>

                <script>
                    document.getElementById('toggleInputBtn').addEventListener('click', function() {
                        const inputContainer = document.getElementById('inputContainer');
                        // Chuyển đổi hiển thị giữa ẩn và hiện
                        if (inputContainer.style.display === 'none' || inputContainer.style.display === '') {
                            inputContainer.style.display = 'block';
                        } else {
                            inputContainer.style.display = 'none';
                        }
                    });
                </script>

                <a href="{{ route('road.cart') }}" target="_blank" class="cart-icon">
                    <i class="fa-solid fa-cart-shopping text-warning-2"></i>
                    @if (session('cart') && session('cart')->totalQty > 0)
                        <span id="cart-count" class="cart-badge">{{ session('cart')->totalQty }}</span>
                    @endif
                </a>
            </div>
            </div>
        </nav>

    </section>

    <div>
        @yield('content')
    </div>

    <footer>
        <div class="container">
            <div class="bg-warning-2 form" style="z-index: 1;">
                <div class="row py-5 px-5 mx-4 justify-content-between align-items-center">
                    <div class="col-12 col-lg-7">
                        <div class="text-left">
                            <p class="text-primary-2"><b>{{ __('message.NEWSLETTER') }}</b></p>
                            <h1>{{ __('message.Join Our Newsletter') }}</h1>
                            <p style="font-weight: 400; font-size: 16px;" class="text-light">
                                {{ __('message.Lorem orci elementum dictum viverra sed lobortis vitae purus Vitae eget cursus dictum ac tellus faucibus Porta aliquet') }}
                            </p>
                        </div>
                    </div>

                    <div class="col-12 col-lg-4 mr-3">
                        @session('success')
                        <script>
                            window.addEventListener('DOMContentLoaded', function () {
                                alert("{{ session('success') }}");
                            });
                        </script>
                    @endsession
                        <form action="{{ route('contact.sendNew') }}" method="POST">
                            @csrf
                            <input type="email" name="email" class="form-control mb-3 w-100" style="height: 50px;"
                                id="exampleInputEmail1" aria-describedby="emailHelp"
                                placeholder="{{ __('message.Enter your email address') }}">
                            <button class="bg-dark-2 text-light radius w-100 mt-3" type="submit" style="height: 50px;">
                                <span class="mx-4 py-4">
                                    <b>{{ __('message.Contact Us') }}</b>
                                </span>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="form-footer">
            <div class="bg-dark-2 padding-180">
                <div class="container">
                    <div class="row py-5 justify-content-between">
                        <div class="col-6 col-lg-6">
                            <img src="image/1.png" alt="">
                            <p class="text-light" style="font-weight: 400;">
                                {{ __('message.Lorem orci elementum dictum viverra sed lobortis vitae purus. Vitae eget cursus dictum ac tellus faucibus. Porta aliquet neque morbi interdum sem enim. Nunc porttitor.') }}
                            </p>
                            <h3 class="text-warning-2 mt-5 py-2">{{ __('message.CONTACT') }}</h3>
                            <p class="text-light py-2"><i class="fa-solid fa-paper-plane"></i>
                                4200 Hamill Avenue, San
                                Diego, California 92109</p>
                            <p class="text-light py-2"><i class="fa-solid fa-phone"></i> 021 3456 789
                            </p>
                            <p class="text-light py-2"><i class="fa-solid fa-envelope"></i> 4200 Hamill Avenue, San
                                Diego, California 92109
                            </p>
                        </div>
                        <div class="col-6 col-lg-2">
                            <h3 class="text-warning-2">{{ __('message.CONTACT') }}</h3>

                            <a href="#" class="my-4 d-block"><strong>{{ __('message.HOME') }}</strong></a>
                            <a href="#" class="my-4 d-block"><strong>{{ __('message.SERVICE') }}</strong></a>
                            <a href="#" class="my-4 d-block"><strong>{{ __('message.SHOP') }}</strong></a>
                            <a href="#" class="my-4 d-block"><strong>{{ __('message.NEWS') }}</strong></a>
                            <a href="#" class="my-4 d-block"><strong>{{ __('message.CONTACT') }}</strong></a>
                            <a href="#" class="my-4 d-block"><strong>{{ __('message.Location') }}</strong></a>
                        </div>
                        <div class="col-6 col-lg-2">
                            <h3 class="text-warning-2">{{ __('message.Services') }}</h3>
                            <a href="#"
                                class="my-4 d-block"><strong>{{ __('message.Bike Repair') }}</strong></a>
                            <a href="#"
                                class="my-4 d-block"><strong>{{ __('message.Bike Fitting') }}</strong></a>
                            <a href="#"
                                class="my-4 d-block"><strong>{{ __('message.Custom Service') }}</strong></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </footer>

    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js"></script>

    <script>
        if (window.location.search.includes('keyword')) {
            const nextSection = document.getElementById('next');
            if (nextSection) {
                // Cuộn đến section có ID "next"
                nextSection.scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });
            }
        }

        $(document).ready(function() {
            $('.owl-carousel').owlCarousel({
                loop: true,
                margin: 10,
                nav: true,
                dots: true,
                dotsEach: true, // Hiển thị dots ngay cả khi có nhiều item
                autoplay: true,
                autoplayTimeout: 3000,
                autoplaySpeed: 1000,
                responsive: {
                    0: {
                        items: 1
                    },
                    600: {
                        items: 2
                    },
                    1000: {
                        items: 3
                    }
                }
            });
        });
    </script>

</body>



</html>
