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
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- フォント王サム -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style>
        .header_nav {
            width: 100%;
            height: 44px;
            vertical-align: middle;
            background: white;
            text-align: center;
            line-height: 44px;
            display: flex;
            justify-content: space-around;
        }
        .header_title {
            text-align: center;
            width: 70%;
        }
        .header_camera {
            width: 15%;
        }
        .header_plane {
            width: 15%;
        }

        .header_nav i {
            font-size: 20px;
        }

        footer {
            position: fixed;
            bottom: 0;
            background: white;
            width: 100%;
            height: 44px;
            line-height: 44px;
        }

        footer i {
            font-size: 20px;
        }

        .footer_nav {
            display: flex;
            justify-content: space-around;
        }

        .footer_profile_icon {
            width: 32px;
            height: 32px;
        }

        .footer_profile_icon img{
            width: 32px;
            height: 32px;
            object-fit: cover;
            border-radius: 50%;
        }
        
    </style>
</head>
<body>
    <div id="app">
        <nav class="header_nav">
            <div class="header_camera">
                <a><i class="fas fa-camera"></i></a>
            </div>
            <div class="header_title">
                <a href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
            </div>
            <div class="header_plane">
                <a><i class="far fa-paper-plane"></i></a>
            </div>
        </nav>
        <main class="py-4">
            @yield('content')
        </main>
        <footer>
            <nav class="footer_nav">
                <a><i class="fas fa-home"></i></a>
                <a><i class="fas fa-search"></i></a>
                <a><i class="far fa-plus-square"></i></a>
                <a><i class="far fa-heart"></i></a>
                <a>
                    <div class="footer_profile_icon"><img src="{{asset('images/top_img.jpg')}}"/></div>
                </a>
            </nav>
        </footer>
    </div>
</body>
</html>
