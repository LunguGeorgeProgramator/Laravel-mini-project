<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>Laravel</title>

        <!-- Fonts -->
        <script src="{{ asset('public/js/app.js') }}" ></script>
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <script src="{{ asset('public/js/none_exports.js') }}" ></script>
        <script type="module">
            // import { animation } from '{{ asset('public/js/exports.js') }}';
            import { welcomePageJS } from '{{ asset('public/js/exports.js') }}';
            // animation(); // call js content from function
            welcomePageJS.animatieButton(); // apelare doar o function din obiect
        </script>

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">


                <div class="top-right links">
                    <a class="navbar-brand"  href="{{ url('/category') }}">
                        Categories page
                    </a>
                    @auth
                        @if(!empty($userdata))
                            <a href="{{ url('/profile/'.$userdata->id) }}">{{ $userdata->username }} Profile page</a>
                        @endif
                    @else
                        <a href="{{ route('login') }}">Login</a>
                        <a href="{{ route('register') }}">Register</a>
                    @endauth
                </div>
          

            <div class="content">
                <div class="title m-b-md">
                George's Example of store.
                </div>

                 <div class="links">
                    <a id="categoryButton" title='Apasa' href="{{ url('/category') }}">Categories page</a>
                   <!-- <a href="https://laracasts.com">Laracasts</a>
                    <a href="https://laravel-news.com">News</a>
                    <a href="https://forge.laravel.com">Forge</a>
                    <a href="https://github.com/laravel/laravel">GitHub</a> -->
                </div>
            </div>
        </div>
    </body>
</html>
