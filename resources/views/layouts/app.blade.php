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
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

</head>
    <body class="img js-fullheight" style="background-image: url(img/bg.jpg);">
        <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" id="mainNav">
            <div class="container">
                <a class="navbar-brand js-scroll-trigger" href="#page-top" style="color: white">Exercise</a>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    @if (Route::has('login'))
                        <ul class="navbar-nav ml-auto my-2 my-lg-0">
                            @auth
                                <li class="nav-item"><a class="nav-link" href="{{ url('/home') }}" style="color: white">Home</a></li>
                            @endauth
                        </ul>
                    @endif
                </div>
            </div>
        </nav>
        <section class="ftco-section">
            <main class="py-4">
                @yield('content')
            </main>
        </section>

    <script src='{{asset("js/jquery.min.js")}}'></script>
    <script src='{{asset("js/popper.js")}}'></script>
    <script src='{{asset("js/bootstrap.min.js")}}'></script>
    <script src='{{asset("js/main.js")}}'></script>
</body>
</html>
