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

            .top_image {
                margin: 0 auto;
                height: 200px;
                width: 100px;
            }
            .top_image img{
                height: 200px;
                width: 100px;
                object-fit: cover;
            }
      
        </style>
    </head>
    <body>
        <div class="">
            <div>
                <a href="{{ route('login') }}">Login</a>
                <a href="{{ route('register') }}">Register</a>
            </div>
            <div class="top_image">
                <img src="{{ asset('images/top_img.jpg') }}"/>
                {{--<img src="/top_img.jpg"/>--}}
            </div>
        </div>
    </body>
</html>
