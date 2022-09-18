<!doctype html>
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
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@300;400;500;600&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">    

    <!-- Fullcalendar - Styles -->
    <link rel="stylesheet" href="{{ asset('css/fullcalendar/main.css') }}">
    <!-- <link rel="stylesheet" href="{{ asset('css/fullcalendar/main.min.css') }}"> -->
    
    <style>
        .title {
            font-size: 1.5rem;
        }

        .box {
            box-shadow: 0px 0px 16px rgba(146, 166, 237, 0.25);
            border-radius: 1.5rem
        }        

        .slide-in {
            animation: slide-in 0.5s ease-in-out forwards;
            animation-delay: 0.2s;
        }

        @keyframes slide-in {
            from {
                transform: translateX(50%);
                opacity: 0;
            }
            to {
                transform: translateX(0);
                opacity: 1;
            }
        }
    </style>

    @yield('styles')

    </head>
        <body class="bg-primary overflow-hidden">
            <div id="app" class="d-flex">
                <nav class="d-flex flex-column align-items-center h-100" style="width: 100px">
                    <div class="nav-wrapper d-flex flex-column align-items-center px-2 py-5 h-100 position-fixed">

                        <div class="nav-header">
                            <a href="#" class="d-block" id="user-settings-link"><img src="{{ asset('imgs/user.svg') }}" /></a>
                        </div>
                        
                        <div class="nav-content d-flex align-items-center flex-column justify-content-center mb-5" style="flex: 1; gap: 2rem;">
                            <a href="/adm" class="d-block">
                                <img src="{{ asset('imgs/home.svg') }}" />
                            </a>
                            <a href="/adm/usuario" class="d-block">
                                <img src="{{ asset('imgs/people.svg') }}" />
                            </a>
                            <a href="/adm/procedimentos" class="d-block">
                                <img src="{{ asset('imgs/medical.svg') }}" />
                            </a>
                            <a href="/adm/agenda" class="d-block">
                                <img src="{{ asset('imgs/calendar.svg') }}" />
                            </a>
                    </div>
                </div>
                </nav>
                <div class="content bg-body p-5 slide-in overflow-auto" style="border-radius: 2rem 0 0 2rem; flex: 1; height: 100vh;">
                    @yield('content')
                </div>
                @yield('modal')
            </div>
            <script src="https://kit.fontawesome.com/b3bd8a9144.js" crossorigin="anonymous"></script>
            <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
            <script src="{{ asset('js/fullcalendar/main.js') }}"></script>
            <script src="{{ asset('js/fullcalendar/locales-all.js') }}"></script>
            @yield('scripts')
        </body>
</html>
