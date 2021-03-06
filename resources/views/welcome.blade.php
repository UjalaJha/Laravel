<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Welcome</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #ffffff;
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
                color: #222222;
                padding: 50 50px;
                font-size: 15px;
                font-weight: 1000;
                letter-spacing: .2rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        
        @include('inc.navbar')
        

            <div class="content">
                <div class="container"><span class="bg-warning text-warning ">hellllo</span></div>
                <div class="title m-b-md">
                    Welcome
                </div>
                <p>
                <div class="links">
                    <a href="https://laravel.com/docs" class="btn btn-default btn-lg" role="button">Documentation</a>
                    <a href="https://laracasts.com" class="btn btn-danger btn-lg" ro>Laracasts</a>
                    <a href="https://laravel-news.com" class="btn btn-warning btn-lg" ro>News</a>
                    <a href="https://forge.laravel.com" class="btn btn-primary btn-lg" ro>Forge</a>
                    <a href="https://github.com/laravel/laravel" class="btn btn-success btn-lg" ro>GitHub</a>
                </div>
                </p>
                <p>
                    <div class="container">
                 <button type="button" class="btn btn-primary btn-lg">hey</button>
                 <button type="button" class="btn btn-success btn-lg">heyy</button>
                 <button type="button" class="btn btn-info btn-lg">heyy</button>
                 <button type="button" class="btn btn-warning btn-lg">heyy</button>
             
             </div>
                </p>
            </div>
        </div>
    </body>
</html>
