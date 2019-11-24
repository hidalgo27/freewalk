@extends('layouts.page.app3')
@section('content')

<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>PARKS in lima </title>
    <meta content="Get your Original Free Walking Tour in Lima, Cusco and Arequipa, more than 3000 reviews on TripAdvisor, Best Free Tours in Peru" name="description" />
    <meta content="Free Walking Tour Lima, Arequipa, Cusco, Miraflores, Barranco, free tour, historical centre tours" name="keywords" />

    @yield('hreflang')

    <link rel="icon" type="image/ico" href="/img/favicon.ico" />

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
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<body>

<section>
        <nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light pb-0 bg-free">
            <div class="container">
              <a class="navbar-brand" href="/"><img src="{{asset('images/logo-freewalks.png')}}" alt="peru"></a>
              <div class="collapse navbar-collapse" id="cssmenu">
                    @include('layouts.page.nav-home-others')
              </div>
              <ul class="navbar-nav p-2">
                    <li><a class="flag" href="#" rel="alternate" hreflang="es"><img src="{{asset('images/es.png')}}" alt="flag spanish"></a></li>
                </ul>
            </div>
        </nav>    
</section>
    <!-- slider -->
    <section>
        <picture>
            <source media="(max-width: 550px)" srcset="../img/free-walking-tours-peru-mobile.jpg">
            <img src="{{asset('images/free-walking-tours-peru.jpg')}}" class="w-100" alt="free walking tours in peru">
        </picture>
    </section>

<section class="bg-light pt-3">
    <div class="container maxw">
      <div class="row mb-4 mt-0">
        <div class="col-sm-9">
          <p class="h6 text-n text-justify"> Visit the most important parks in Lima city and recreation areas that many locals and tourists explore, we also mention below the prices and the opening hours.</p>
       </div>
       <div class="col-sm-3">
          <div class="text-right">
          <a href="#" class="btn btn-free">Book a Guided Tour</a>         
          </div>
       </div>
      </div>
      <div class="col bg-white py-2 mb-2">
        <div class="row">
          
          <div class="col-sm-6">
            <h3 class="h3">Must-see Parks in Lima</h3>
          </div>
          <div class="col-sm-6">
            <div class="icons">
              
              <div class="row">
                <div class="col-sm-4">
                            <div>
                             <div class="text-sm-right text-center my-1 mt-2"><span class="h6">Share this Gig</span></div>
                            </div>
                </div>
                <div class="col-sm-8 text-sm-right text-center">
                              <div class="text-center my-1 socials "><a target="_blank" href="https://www.facebook.com/limafreewalkingtour/"><i class="fab fa-facebook-f"></i></a></div>
                         
                         
                              <div class="text-center my-1 socials "><a href="https://www.youtube.com/channel/UCdHL6ZDqMvigxpIl5dMf9dQ"><i class="fab fa-whatsapp"></i></a></div>
                         
                         
                             <div class="text-center my-1 socials "><a href="https://www.youtube.com/channel/UCdHL6ZDqMvigxpIl5dMf9dQ"><i class="fab fa-twitter"></i></a></div>
                         
                         
                             <div class="text-center my-1 socials "><a href="https://www.youtube.com/channel/UCdHL6ZDqMvigxpIl5dMf9dQ"><i class="far fa-envelope"></i></a></div>
                         
                         
                              <div class="text-center my-1 socials "><a target="_blank" href="https://www.facebook.com/limafreewalkingtour/"><i class="fab fa-linkedin-in"></i></a></div>
                         
                         
                             <div class="text-center my-1 socials "><a target="_blank" href="https://www.facebook.com/limafreewalkingtour/"><i class="fab fa-instagram"></i></a></div>
                             </div> 
                </div>
            </div>
          </div>
      
        </div>
      </div>
      
      <div class="row">
       
        <div class="col-sm-6 col-md-4 my-2">
          <div class="shadow">
          <div class="box">
              <a href="../kennedy-park-miraflores" target="_blank">
                 <img src="{{asset('images/lima-travel-guide/lima-parks-kennedy-park-miraflores.jpg')}}" class="img-fluid" alt="parks and recreation areas in Lima, peru">
               </a>
              
           </div>
            <div class="p-3">
              <h3><a href="../kennedy-park-miraflores" target="_blank">Kennedy Park in Miraflores</a></h3>
               <p>This is a must-visit park in the Miraflores Areas where you can find many facilities like dancing areas, cool spots for kids, restaurants, bars and much more!</p>
            </div>
         </div>
        </div>
        <div class="col-sm-6 col-md-4 my-2">
          <div class="shadow">
           <div class="box">
                <a href="#">
                 <img src="{{asset('images/lima-travel-guide/lima-parks-magic-water-in-lima-center.jpg')}}" class="img-fluid" alt="parks and recreation areas in Lima, peru">
               </a>
            </div>
             <div class="p-3">
              <h3><a href="#">Magic Park of Water in Lima</a></h3>
               <p>The Park consists of showing you a series of 13 illuminated and interactive fountains, it is probably the most modern park where fun and entertainment are guaranteed! </p>
             </div>
          </div> 
          
        </div>
        <div class="col-sm-6 col-md-4 my-2">
          <div class="shadow">
          <div class="box">
            <a href="#">
           <img src="{{asset('images/lima-travel-guide/lima-parks-love-park-miraflores.jpg')}}" class="img-fluid" alt="parks and recreation areas in Lima, peru">
             
           </a>
        
          </div>
             <div class="p-3">
              <h3><a href="#">Love Park in Miraflores</a></h3>
               <p>The Park offers a stunning view over the bay of Lima, it is the best spot for observing the sunrise and sunset and it is artfully decorated with mosaics!</p>
             </div>
        </div>
        </div>
      </div>

      </div>

    </div>

</section>
@endsection

