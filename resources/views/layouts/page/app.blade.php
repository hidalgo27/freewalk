<!doctype html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>🥇Free Walking Tour Peru | Lima | Cusco| Arequipa | Miraflores </title>
    <meta content="Get your Original Free Walking Tour in Lima, Cusco and Arequipa, more than 3000 reviews on TripAdvisor, Best Free Tours in Peru" name="description" />
    <!--     <meta content="Free Walking Tour Lima, Arequipa, Cusco, Miraflores, Barranco, free tour, historical centre tours" name="keywords" /> -->


    <link rel="alternate" hreflang="es" href="https://www.freewalkingtoursperu.com/es/" />
    <link rel="alternate" hreflang="en" href="https://www.freewalkingtoursperu.com">

    <meta name="author" content="Free Walking Tours" />

    <!-- Bootstrap -->
    <link rel="icon" type="image/ico" href="/img/favicon.ico" />
    {{--    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"  crossorigin="anonymous">--}}
    {{--    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"  crossorigin="anonymous">--}}
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">

    <link rel="apple-touch-icon" sizes="57x57" href="{{asset('favicons/apple-icon-57x57.png')}}">
    <link rel="apple-touch-icon" sizes="60x60" href="{{asset('favicons/apple-icon-60x60.png')}}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{asset('favicons/apple-icon-72x72.png')}}">
    <link rel="apple-touch-icon" sizes="76x76" href="{{asset('favicons/apple-icon-76x76.png')}}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{asset('favicons/apple-icon-114x114.png')}}">
    <link rel="apple-touch-icon" sizes="120x120" href="{{asset('favicons/apple-icon-120x120.png')}}">
    <link rel="apple-touch-icon" sizes="144x144" href="{{asset('favicons/apple-icon-144x144.png')}}">
    <link rel="apple-touch-icon" sizes="152x152" href="{{asset('favicons/apple-icon-152x152.png')}}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{asset('favicons/apple-icon-180x180.png')}}">
    <link rel="icon" type="image/png" sizes="192x192"  href="{{asset('favicons/android-icon-192x192.png')}}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{asset('favicons/favicon-32x32.png')}}">
    <link rel="icon" type="image/png" sizes="96x96" href="{{asset('favicons/favicon-96x96.png')}}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('favicons/favicon-16x16.png')}}">
    <link rel="manifest" href="{{asset('favicons/manifest.json')}}">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="{{asset('favicons/ms-icon-144x144.png')}}">
    <meta name="theme-color" content="#ffffff">

</head>
<body>

<section>
    <nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light pb-0 bg-free">
        <div class="container">
            <a class="navbar-brand" href="/"><img src="{{asset('images/logo-freewalks.png')}}" alt="peru"></a>
            <div class="collapse navbar-collapse" id="cssmenu">
                @include('layouts.page.menu')
            </div>
            <ul class="navbar-nav p-2">
                <li><a class="flag" href="/es/"><img src="{{asset('images/es.png')}}" alt="flag spanish"></a></li>
            </ul>
        </div>
    </nav>

</section>

@yield('content')

<section class="text-center">
    @include('layouts.page.footer')
</section>


<!-- end contenido -->


<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<script src="js/script.js"></script>
</body>
</html>
