<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    {{-- <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet"> --}}
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed&display=swap" rel="stylesheet">


    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/saget-on.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('blog.index')}}"> Blog</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('course.index')}}"> Kelas</a>
                        </li>
                        {{-- <li class="nav-item">
                            <a class="nav-link" href=""> Kegiatan</a>
                        </li> --}}
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('home') }}">
                                        Dashboard
                                    </a>
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="" style="min-height:100vh">
            @yield('content')
        </main>

        <footer class="bg-dark text-white">
            <div class="container">
                <div class="row py-4 justify-content-center">
                    <div class="col-sm-6 mb-4 text-white">
                        <h1>Saget Education</h1>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam nisi modi consequuntur, distinctio culpa pariatur, quisquam unde fugit iusto accusamus numquam. Sit error illo omnis illum consequuntur, non magnam ratione. <br/>

                    </div>
                    <div class="col-sm-3 mb-4">
                        <h3>La  innya</h3>      
                        <a href="">Tentang Kami</a> <br>
                        <a href="">Karir</a> <br>
                        <a href="">Bantuan</a> <br>
                        <a href="">Kontak Kami</a>
                    </div>
                    
                    <div class="col-sm-3 mb-4">
                        <h3>Follow Us</h3>
                        <a href=""><i class="fab fa-facebook"></i></a> 
                        <a href=""><i class="fab fa-twitter-square"></i></a>
                        <a href=""><i class="fab fa-instagram"></i></a>
                    </div>
                    <div class="col-sm-12">
                        Karya anak bangsa <br/>
                        Made with <i class="fas fa-heart"></i> in yogyakarta
                    </div>
                </div>
            </div>
        </footer>
    </div>
</body>
</html>
