<!doctype html>
<html lang="en">

<head>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.72.0">
    <title>RoadPedal Admin</title>
    <link rel="icon" href="/image/2.png" type="image/x-icon">
    <link rel="stylesheet" href="/css/bootstrap-4.4.1.css">
    <link rel="stylesheet" href="/css/main-style.css">
    <!-- Choirce -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/choices.js/public/assets/styles/choices.min.css">
    <!-- Font-awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <!-- jQuery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>


</head>

<body>


    <section id="navbar" class="navbar2">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark-2 shadow ">
            <div class="container">
                <a class="navbar-brand" href="http://localhost:8000/RoadPedal/home">
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
                            <a class="nav-link" href="{{ route('road.admin') }}">
                                <p class="oxa">{{ __('Trang list') }}</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('admin.productSections') }}">
                                <p class="oxa">{{ __('Quản lý home') }}</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('road.new') }}">
                                <p class="oxa">{{ __('News') }}</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('road.users') }}">
                                <p class="oxa">{{ __('Users') }}</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('road.orders') }}">
                                <p class="oxa">{{ __('bill') }}</p>
                            </a>
                        </li>

                    </ul>
                    {{-- <i class="fa-solid fa-user text-warning-2"></i> --}}
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle pb-4" href="#" id="navbarDropdown" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            {{ Auth::user()->name }}
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                                    document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>

                        </div>
                    </li>


                    </li>
                </div>

                <select class="form-control changeLang text-light " style="width:120px">
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
            </div>
            </div>
        </nav>

    </section>

    <div>
        @yield('content')
    </div>




    <!-- Popper.js -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>

    <!-- Bootstrap 4 JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js"></script>


</body>



</html>
