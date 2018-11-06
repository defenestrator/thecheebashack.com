<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Heisenbeans</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Great+Vibes" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                color: #1a1a1a;
                background:#fafafa;
                font-family: 'Great Vibes', Helvetica, serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }
            body {
                background-image: radial-gradient(circle, rgba(255,255,255,1.0) 50%, rgba(220,220,220,0.8));
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
                height:100%;
                width:100%;
            }

            .title {
                font-size: 64px;
                font-weight:100;
                margin-top:1.0em;
                text-shadow: #000 2px -2px 5px, #94ffa5 3px -3px 3px;
            }

            .links {
                font-family: 'Open Sans', sans-serif;
                color: black;
            }
            .links > a {
                color: #3f844e;
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
                <div class="title m-b-md" style="background-image: ">
                    <img src="/i/heisenhead.png">
                    <div>Heisenbeans</div>
                </div>

                <div class="links">
                    <a href="/testers">Testers</a>
                    <a href="/breeders">Breeders</a>
                    <a href="/strains">Strains</a>
                </div>
            </div>
        </div>
    </body>
</html>