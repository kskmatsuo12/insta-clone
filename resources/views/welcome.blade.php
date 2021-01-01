<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>インスタクローン！</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fafafa;
                background-color:rgba(var(--b3f,250,250,250),1);
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            a {
                text-decoration: none;
            }

            h1 {
                font-size: 24px;
                font-weight: bold;
            }

            .container {
                margin: 100px auto 0;
                width: 80%;
                display: flex;
            }

            .top_image {
                text-align: center;
                margin: 0 auto;
                height: 400px;
                width: 50%;
            }
            .top_image img{
                height: 600px;
                width: 250px;
                object-fit: cover;
            }

            .top_login_button_wrap {
                text-align: center;
                width: 30%;
                margin: 120px auto 0;
                background: white;
                border: 1px #ddd solid;
                padding: 12px;
                border-radius: 4px;
            }

            .top_login_button_wrap p {
                color: white;
                background-color: #0095f6;
                border-radius: 12px;
                font-weight: bold; 
                margin-top: 48px;
            }

            .top_login_button_wrap p a {
                color: white;   
            }
      
        </style>
    </head>
    <body>
        <div class="container">
            <div class="top_image">
                <img src="{{ asset('images/top_img.jpg') }}"/>
                {{--<img src="/top_img.jpg"/>--}}
            </div>
            <div class="top_login_button_wrap">
                <h1>インスタクローン</h1>
                <p><a href="{{ route('login') }}">ログイン</a></p>
                <p><a href="{{ route('register') }}">新規登録</a></p>
            </div>
        </div>
    </body>
</html>
