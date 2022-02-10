<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        @include('layouts.nav')
        <main class="">
            <div class="jumbotron" style=" background-image: linear-gradient(to right, #A770EF,#CF8BF3,#FDB99B); color: #efefef;">
                <div class="container">
                    <div class="mr-5">
                        <h1 class="display-4">Hello,Nisrina
                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-hearts" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M4.931.481c1.627-1.671 5.692 1.254 0 5.015-5.692-3.76-1.626-6.686 0-5.015Zm6.84 1.794c1.084-1.114 3.795.836 0 3.343-3.795-2.507-1.084-4.457 0-3.343ZM7.84 7.642c2.71-2.786 9.486 2.09 0 8.358-9.487-6.268-2.71-11.144 0-8.358Z"/>
                            </svg>
                        </h1>
                        <h4>Selamat Datang kembali dan selamat mengerjakan pekerjaan anda</h4>
                        <div class="row justify-content-end">
                            <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" fill="currentColor" class="bi bi-apple" viewBox="0 0 16 16" style="margin-top: -70px">
                                <path d="M11.182.008C11.148-.03 9.923.023 8.857 1.18c-1.066 1.156-.902 2.482-.878 2.516.024.034 1.52.087 2.475-1.258.955-1.345.762-2.391.728-2.43zm3.314 11.733c-.048-.096-2.325-1.234-2.113-3.422.212-2.189 1.675-2.789 1.698-2.854.023-.065-.597-.79-1.254-1.157a3.692 3.692 0 0 0-1.563-.434c-.108-.003-.483-.095-1.254.116-.508.139-1.653.589-1.968.607-.316.018-1.256-.522-2.267-.665-.647-.125-1.333.131-1.824.328-.49.196-1.422.754-2.074 2.237-.652 1.482-.311 3.83-.067 4.56.244.729.625 1.924 1.273 2.796.576.984 1.34 1.667 1.659 1.899.319.232 1.219.386 1.843.067.502-.308 1.408-.485 1.766-.472.357.013 1.061.154 1.782.539.571.197 1.111.115 1.652-.105.541-.221 1.324-1.059 2.238-2.758.347-.79.505-1.217.473-1.282z"/>
                                <path d="M11.182.008C11.148-.03 9.923.023 8.857 1.18c-1.066 1.156-.902 2.482-.878 2.516.024.034 1.52.087 2.475-1.258.955-1.345.762-2.391.728-2.43zm3.314 11.733c-.048-.096-2.325-1.234-2.113-3.422.212-2.189 1.675-2.789 1.698-2.854.023-.065-.597-.79-1.254-1.157a3.692 3.692 0 0 0-1.563-.434c-.108-.003-.483-.095-1.254.116-.508.139-1.653.589-1.968.607-.316.018-1.256-.522-2.267-.665-.647-.125-1.333.131-1.824.328-.49.196-1.422.754-2.074 2.237-.652 1.482-.311 3.83-.067 4.56.244.729.625 1.924 1.273 2.796.576.984 1.34 1.667 1.659 1.899.319.232 1.219.386 1.843.067.502-.308 1.408-.485 1.766-.472.357.013 1.061.154 1.782.539.571.197 1.111.115 1.652-.105.541-.221 1.324-1.059 2.238-2.758.347-.79.505-1.217.473-1.282z"/>
                            </svg>
                        </div>     
                    </div>
                </div>
                    <nav class="navbar navbar-expand-md navbar-light navbar-light mt-3 border-top ">
                        <div class="container">
                            <!-- Left Side Of Navbar -->
                            <ul class="d-flex justify-content-center" style=" margin-top: 30px; text-transform: uppercase; ">
                                <li class="nav-link mr-5 hover">
                                    <a href="{{route('dashboard.index')}}" class="nav-link text-white">Dashboard</a>
                                </li>
                                <li class="nav-link mr-5 hover">
                                    <a href="{{route('daftarbarang.index')}}" class="nav-link text-white">Daftar Barang</a>
                                </li>
                                <li class="nav-link mr-5 hover">
                                    <a href="{{route('transaksi.index')}}" class="nav-link text-white">Transaksi</a>
                                </li>
                                <li class="nav-link mr-5 hover">
                                    <a href="{{route('pengembalian.index')}}" class="nav-link text-white">Pengembalian</a>
                                </li>
                                <li class="nav-link mr-5 hover">
                                    <a href="" class="nav-link text-white">Laporan</a>
                                </li>
                            </ul>  
                        </div>
                    </nav>
                </div>
            @yield('content')
        </main>
    </div>
</body>
</html>