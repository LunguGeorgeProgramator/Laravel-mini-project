<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>

<!-- This is a mother fucker test!!! !!! !!! trala hg -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('public/js/app.js') }}" ></script>
    <script type="module" src="{{ asset('public/js/exports.js') }}" ></script> <!-- keep all the pages js -->
    <script src="{{ asset('public/js/none_exports.js') }}" ></script>
    <script src="{{ asset('public/js/dataTable.js') }}" ></script>
    <script src="{{ asset('public/js/bootstrat4.dataTable.js') }}" ></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('public/css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('public/css/custom.css') }}" rel="stylesheet">
    <link href="{{ asset('public/css/bootstraps.dataTable.css') }}" rel="stylesheet">
    <!-- <script>
        jQuery(document).ready(function(){ // testez forma de apelare jquery in laravel
            console.log(jQuery( ".list-group" ).text());
            console.log($( ".list-group" ).text());
        });
    </script> -->
</head>
<body>
   <!-- {{ '<p>test1</p>' }} --> <!-- {{ 'nu interpreteaza continut httml il face unicode si nu il vede browser-ul, ex: &lt;p&gt;test1&lt;/p&gt;' }} -->
   <!-- {!! '<p>test2</p>' !!} --> <!-- {!! 'intrepreteaza si proceseaza din string in html' !!} -->
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <a class="navbar-brand"  href="{{ url('/category') }}">
                    Categories page
                </a>
                <a class="navbar-brand"  href="{{ url('/posts') }}">
                    Posts page
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
                            {{ Form::open(['route' => ['search'], 'method' => 'GET']) }}
                                @include('layouts.serchForm')
                            {{ Form::close() }}
                        </li>
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
                                    <a class="dropdown-item" href="{{ url('/profile/'.Auth::user()->id) }}" >{{ Auth::user()->username }}, profile page.</a>

                                    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
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

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
