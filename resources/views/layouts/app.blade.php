<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
<!--passport-clients>pass client</passport-clients>
<passport-authorized-clients>auth client</passport-authorized-clients>
<passport-personal-access-tokens>access token</passport-personal-access-tokens-->
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light navbar-laravel bg-info sticky-top" >
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    Die Urbane: Sepa tool
                </a>

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li><a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a></li>
                            <li><a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a></li>
                        @else
                            <li class="nav-item">
                                <a class="navbar-brand" href="{{ url('/') }}">
                                   Admin
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="navbar-brand" href="{{ url('/') }}">
                                    Statistics
                                </a>
                            </li>
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>


                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
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
        @yield('control_menu')

        <div class="container-fluid">
            <div class="row flex-xl-nowrap">
                <div class="col-12 col-md-3 col-xl-2 bd-sidebar nav" role="contentinfo">
                    <div class="card-body container-fluid">
                    @yield('left')
                    </div>
                </div>
                <main class="col-12 col-md-9 col-xl-8 py-md-3 pl-md-5 bd-content" role="main">
                    @yield('content')
                </main>

                <div class="d-none d-xl-block col-xl-2 bd-toc" role="contentinfo">
                    <div class="card-body container-fluid">
                    @yield('right')
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
