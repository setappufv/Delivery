<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="author" content="Alberto Elias Do Amaral Júnior">
        <meta name="description" content="Informações sobre Delivery na sua cidade!">
        <meta name="keywords" content="Delivery, Covid-19, Informações, Coronavírus, COVID-19, Setapp-UFV">
        <meta http-equiv="content-language" content="pt-br" />
        <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
        <meta name="copyright" content="© 2020 SetApp UFV" />
        <meta http-equiv="pragma" content="no-cache" />
        <meta http-equiv="cache-control"   content="no-cache" />
        <meta name="revisit-after" content="1 day" />
        <meta name="rating" content="general" />
        <meta name="robots" content= "index, follow">
        <meta itemprop="image" content="https://www.setappufv.com.br/imagens/setapp-350x350.png">
        <link rel="icon" 
            type="image/png" 
            href="https://www.setappufv.com.br/imagens/favicon.png">

        <title>Delivery - Informações sobre a sua cidade!</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

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
                font-size: 2.5rem;
            }

            @media only screen and (min-width: 600px)  {
                .title {
                    font-size: 3.5rem;
                    width: 70vw;
                }
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
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
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif  

            <div class="content">
                <div class="title m-b-md">
                    Em breve informações sobre <strong>Delivery</strong> na sua cidade!
                </div>

                <div class="links">
                    <a href="https://setappufv.com.br/">SetApp UFV</a>
                </div>
            </div>
        </div>
    </body>
</html>
