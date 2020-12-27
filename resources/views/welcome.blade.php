<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .container {
                display: flex;
                width: 95%;
                max-width: 1140px;
                margin: 0 auto;
            }

            .top_image {
                margin: 0 auto;
                width: 200px;
                height: 300px;
            }

            .top_image img {
                width: 200px;
                height: 300px;
                object-fit: cover;
            }
        </style>
    </head>
    <body>
        <div class="">
            @if (Route::has('login'))       
            @endif
            <div class="container">
                <div class="top_image">
                    <img src="{{ asset('top_img.jpg') }}"/>
                </div>
            <div>
                <div>
                <div class="">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
                </div>
            </div>
        </div>
        </div>
    </body>
</html>
