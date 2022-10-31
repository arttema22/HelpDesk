<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-100">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/parallax.min.js') }}"></script>
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body>
    <style>
        .scene {
            position: relative;
            overflow: hidden;
        }

        .layer {
            position: absolute;
        }

        .scene,
        .layer {
            display: block;
            height: 100%;
            width: 100%;
            padding: 0;
            margin: 0;
        }

        ul {
            list-style: none;
            display: block;
            padding: 0;
            margin: 0;
        }

        .background {
            background: url(img/bg_login.jpg) no-repeat center center;
            background-size: cover;
            position: absolute;
            width: 110%;
            height: 110%;
            left: -5%;
            top: -5%;
        }

        .layer img {
            width: 25%;
        }
    </style>
    <div class="container-fluid">
        <div class="row vh-100">
            <div class="col-md-6 d-flex flex-column justify-content-between align-items-center">
                <h2 class="mt-4">@yield('header')</h2>
                @yield('content')
                @yield('footer')
            </div>
            <div class="col-md-6">
                <ul id="scene" class="scene">
                    <li class="layer" data-depth="0.4">
                        <div class="background"></div>
                    </li>
                    <li class="layer d-flex flex-column justify-content-center align-items-center" data-depth="0.1">
                        <img src="img/icon-pochta.png">
                    </li>

                </ul>
            </div>
        </div>
    </div>
</body>
<script>
    var scene = document.getElementById('scene');
var parallaxInstance = new Parallax(scene);
</script>

</html>
