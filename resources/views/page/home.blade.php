<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    {{--    <link href="{{ asset('css/ionicons.min.css') }}" rel="stylesheet">--}}
    <link href="{{ asset('themify-icons/themify-icons.css') }}" rel="stylesheet">

</head>
<body>
<div id="app">

    <div class="menu-container">
        <div class="container mt-3">
            <div class="row justify-content-between align-items-center">
                <div class="col-3">
                    <div class="form-group m-0 has-search">
                        <span class="fa fa-search form-control-feedback"></span>
                        <input type="text" class="form-control form-control-search shadow-none border-0 text-white" placeholder="BUSCAR">
                    </div>
                </div>
                <div class="col-auto">
                    <a href="{{route('home_path')}}"><img src="{{asset('images/logo-andes-h.png')}}" width="250" alt="logo andesviagens" class="img-fluid"></a>
                </div>
                <div class="col-3 text-right">
                    <a href="" class="btn btn-inquire float-right ml-3 font-weight-bold px-4 text-white rounded-0">COTIZAR VIAJE</a>
                </div>
            </div>
        </div>
        <div class="menu mt-4">
            <ul class="nav justify-content-center">
                <li class="nav-item"><a href="#">PERU PASSEIOS</a></li>
                <li><a href="http://marioloncarek.com">PACOTES DE VIAGENS</a>
                    <ul>
                        <li><a href="http://marioloncarek.com">School</a>
                            <ul>
                                <li><a href="http://marioloncarek.com">Lidership</a></li>
                                <li><a href="#">History</a></li>
                                <li><a href="#">Locations</a></li>
                                <li><a href="#">Careers</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Study</a>
                            <ul>
                                <li><a href="#">Undergraduate</a></li>
                                <li><a href="#">Masters</a></li>
                                <li><a href="#">International</a></li>
                                <li><a href="#">Online</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Research</a>
                            <ul>
                                <li><a href="#">Undergraduate research</a></li>
                                <li><a href="#">Masters research</a></li>
                                <li><a href="#">Funding</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Something</a>
                            <ul>
                                <li><a href="#">Sub something</a></li>
                                <li><a href="#">Sub something</a></li>
                                <li><a href="#">Sub something</a></li>
                                <li><a href="#">Sub something</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li><a href="http://marioloncarek.com">DESTINOS</a>
                    <ul>
                        <li><a href="http://marioloncarek.com">Today</a></li>
                        <li><a href="#">Calendar</a></li>
                        <li><a href="#">Sport</a></li>
                    </ul>
                </li>
                <li><a href="http://marioloncarek.com">SOBRE NÓS</a>
                    <ul>
                        <li><a href="#">School</a>
                            <ul>
                                <li><a href="#">Lidership</a></li>
                                <li><a href="#">History</a></li>
                                <li><a href="#">Locations</a></li>
                                <li><a href="#">Careers</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Study</a>
                            <ul>
                                <li><a href="#">Undergraduate</a></li>
                                <li><a href="#">Masters</a></li>
                                <li><a href="#">International</a></li>
                                <li><a href="#">Online</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Study</a>
                            <ul>
                                <li><a href="#">Undergraduate</a></li>
                                <li><a href="#">Masters</a></li>
                                <li><a href="#">International</a></li>
                                <li><a href="#">Online</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Empty sub</a></li>
                    </ul>
                </li>
            </ul>
        </div>

    </div>

    <header>
        <div class="overlay"></div>
        {{--            <video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">--}}
        {{--                <source src="{{asset('media/Secuencia 06.mp4')}}" type="video/mp4">--}}
        {{--            </video>--}}
        <div class="homepage-video">
            {{--                <iframe title="GotoPeru background video" src="https://player.vimeo.com/video/361847703?background=1" width="100%" height="100" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>--}}
            <iframe src="https://player.vimeo.com/video/361847703?background=1&autoplay=1&loop=1&title=0&byline=0&portrait=0&muted=1"  frameborder="0" allow="autoplay; fullscreen"></iframe>
        </div>
        <div class="container h-100">
            <div class="row d-flex h-100 text-center align-items-center">
                <div class="col w-100 text-white mt-5">
                    <h1 class="font-weight-lighter mt-5">Top en Recomendaciones y Testimonios, sede central en Cusco</h1>
                    <a href="#Inquire" class="btn btn-outline-g-yellow btn-lg h2 font-weight-normal mt-3">Diseña tu Viaje</a>
                    {{--                        <p class="lead mb-0">With HTML5 Video and Bootstrap 4</p>--}}
                </div>
            </div>
        </div>
        <div class="position-absolute-bottom p-2">
            <div class="row justify-content-center">
                <div class="col-auto text-center">
                    <a href="" class="mx-2">
                        <i data-feather="facebook" class="text-white" stroke-width="1"></i>
                    </a>
                    <a href="" class="mx-2">
                        <i data-feather="twitter" class="text-white" stroke-width="1"></i>
                    </a>
                    <a href="" class="mx-2">
                        <i data-feather="youtube" class="text-white" stroke-width="1"></i>
                    </a>
                    <a href="" class="mx-2">
                        <i data-feather="instagram" class="text-white" stroke-width="1"></i>
                    </a>
                </div>
            </div>
        </div>
    </header>


    <section class="my-5">
        <div class="container">
            <div class="row align-items-center">
                {{--                    <div class="col d-none d-md-inline">--}}
                {{--                        <img src="{{asset('images/about.jpg')}}" alt="" class="w-100 rounded img-lazy">--}}
                {{--                    </div>--}}
                <div class="col text-center">
                    <h1 class="font-weight-bold display-4 text-g-yellow">Paquetes de <strong class="text-g-green">viajes en Perú</strong></h1>
                    <p class="lead font-weight-normal text-muted">Somos <b>ANDESVIAGENS</b>, especialistas em viagens locais! Nossos guias, motoristas e representantes locais terão o prazer em compartilhar o melhor do nosso país em nossos mais de 12 anos de experiência criando viagens inesquecíveis para a terra dos Incas! Temos uma grande reputação, incluindo parceiros globais como Expedia, Travelocity e Tripadvisor, que também reconheceram nossos esforços citando-nos como os melhores especialistas locais.</p>
                    <div class="row align-items-center">
                        <div class="col-12 text-center">
                            <h6 class="text-secondary">
                                <img src="{{asset('images/logo-andes-bc.png')}}" alt="" width="120">
                                <span class="mt-1">é a divisão de</span>
                                <img src="{{asset('images/logo-gotoperu.png')}}" alt="" width="100">
                            </h6>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <search-package></search-package>

    <section class="position-relative my-5">
        <div class="offer py-5">
            <div class="container">
                <div class="col text-center">
                    <h2 class="h1 font-weight-bold text-white">Porque escoger Gotoperu</h2>
                </div>
                <div class="row mt-5">
                    <div class="col-6 mb-3 col-sm-4 mb-md-0 col-md-2 text-center">
                        <i data-feather="users" class="text-white d-block mx-auto" width="45" height="45" stroke-width="1"></i>
                        <span class="text-white small mt-3 d-block">Grupos pequeños y personalizados.</span>
                    </div>
                    <div class="col-6 mb-3 col-sm-4 mb-md-0 col-md-2 text-center">
                        <i data-feather="clock" class="text-white d-block mx-auto" width="45" height="45" stroke-width="1"></i>
                        <span class="text-white small mt-3 d-block">Nosotros vivimos aquí, somos locales 100%.</span>
                    </div>
                    <div class="col-6 mb-3 col-sm-4 mb-md-0 col-md-2 text-center">
                        <i data-feather="pen-tool" class="text-white d-block mx-auto" width="45" height="45" stroke-width="1"></i>
                        <span class="text-white small mt-3 d-block">Reserve ahora o Diseña tu Viaje!</span>
                    </div>
                    <div class="col-6 mb-3 col-sm-4 mb-md-0 col-md-2 text-center">
                        <i data-feather="map-pin" class="text-white d-block mx-auto" width="45" height="45" stroke-width="1"></i>
                        <span class="text-white small mt-3 d-block">Sin intermediarios, sede en Perú.</span>
                    </div>
                    <div class="col-6 mb-3 col-sm-4 mb-md-0 col-md-2 text-center">
                        <i data-feather="thumbs-up" class="text-white d-block mx-auto" width="45" height="45" stroke-width="1"></i>
                        <span class="text-white small mt-3 d-block">Estamos orgullosos de nuestros recomendaciones!</span>
                    </div>
                    <div class="col-6 mb-3 col-sm-4 mb-md-0 col-md-2 text-center">
                        <i data-feather="calendar" class="text-white d-block mx-auto" width="45" height="45" stroke-width="1"></i>
                        <span class="text-white small mt-3 d-block">Nos adaptamos a cualquier hora de llegada.</span>
                    </div>
                </div>
                <div class="row mt-5">
                    <div class="col text-white text-white text-center">
                        <p class="font-weight-light">Desde 2009</p>
                    </div>
                </div>
                <div class="row mt-5">
                    <div class="col text-white text-white text-center">
                        <a href="#" class="btn btn-lg btn-g-yellow font-weight-bold text-white">Consulte ahora</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="pb-4">
        <div class="container">
            <div class="row">
                <div class="col text-center">
                    <h2 class="font-weight-bold">Conoce a nuestros epecialiastas en viajes</h2>
                    <p class="lead font-weight-normal">Nuestro equipo está integrado por expertos profesionales en cada área, desde un experto team de consejeros de viajes hasta los mejores guías locales en cada destino que operamos, lo que garantiza un conocimiento total de los destinos que conforman nuestra programación; deseando transmitir esos conocimientos a todos aquellos posibles viajeros, que confían en nosotros esos importantes momentos de sus vidas: como son sus viajes. ¡Bienvenidos al mágico e histórico Perú!</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-sm-6">
                    <div class="box16">
                        <img src="{{asset('images/team/franklin.jpg')}}">
                        <div class="box-content">
                            <h3 class="title">Franklin</h3>
                            <span class="post">Guia Senior</span>
                            <ul class="social">
                                <li><a href="#"><i class="fas fa-play"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="box16">
                        <img src="{{asset('images/team/katy.jpg')}}">
                        <div class="box-content">
                            <h3 class="title">Katy</h3>
                            <span class="post">Guia</span>
                            <ul class="social">
                                <li><a href="#"><i class="fas fa-play"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="box16">
                        <img src="{{asset('images/team/mariana.jpg')}}">
                        <div class="box-content">
                            <h3 class="title">Maria</h3>
                            <span class="post">Travel Advisor</span>
                            <ul class="social">
                                <li><a href="#"><i class="fas fa-play"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>
            {{--                <div class="row mt-4">--}}
            {{--                    <div class="col text-center">--}}
            {{--                        <a href="" class="btn font-weight-bold btn-lg btn-info">Vea más sonbre nuestro equipo</a>--}}
            {{--                    </div>--}}
            {{--                </div>--}}
        </div>
    </section>

    <section class="position-relative mt-5">
        <div class="offer-banner">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col">
                        <h2 class="h5">NOSOTROS SOMOS</h2>
                        <h4 class="font-weight-bold h1">GOTOPERU</h4>
                        <p>El compromiso de GOTOPERU es ofrecer una experiencia personalizada y de calidad que cumpla las expectativas de nuestros clientes . El modelo de Gestión de GOTOPERU está basado en la mejora continua y sus principales actuaciones son: Difundir las riquezas de nuestro país el Peru, sus costumbres, gastronomía, su patrimonio natural y cultural, ayudando a fomentar un turismo sostenible.</p>
                        <ul class="pl-3">
                            <li>Cede Central: Cusco, Perú</li>
                            <li>Company: 25 miembros</li>
                            <li>Fundado: 2009</li>
                            <li>Oficinas: Lima, Perú / New York, Usa</li>
                        </ul>
                        <div class="row mt-4">
                            <div class="col text-center">
                                <a href="" class="btn font-weight-bold btn-dark">Vea más sonbre nuestro equipo</a>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <img src="{{asset('images/gotoperu-banner-rgba.png')}}" alt="" class="w-100">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-5 bg-white">
        <div class="container">
            <div class="row py-4">
                <div class="col text-center">
                    <h2 class="font-weight-bold display-5 text-g-green">Testimonios de nuestros pasajeros</h2>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <a class="venobox" data-gall="myGallery" data-autoplay="true" data-vbtype="video" href="https://youtu.be/I0PUQOoboPE">
                        <div class="position-relative">
                            <img src="{{asset('images/video-testimonial/1.jpg')}}" alt="" class="w-100">
                            <div class="position-absolute-bottom text-white p-3 icon-play">
                                <i class="fas fa-play fa-2x"></i>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col">
                    <a class="venobox" data-gall="myGallery" data-autoplay="true" data-vbtype="video" href="https://youtu.be/I0PUQOoboPE">
                        <div class="position-relative">
                            <img src="{{asset('images/video-testimonial/2.jpg')}}" alt="" class="w-100">
                            <div class="position-absolute-bottom text-white p-3 icon-play">
                                <i class="fas fa-play fa-2x"></i>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col">
                    <a class="venobox" data-gall="myGallery" data-autoplay="true" data-vbtype="video" href="https://youtu.be/I0PUQOoboPE">
                        <div class="position-relative">
                            <img src="{{asset('images/video-testimonial/3.jpg')}}" alt="" class="w-100">
                            <div class="position-absolute-bottom text-white p-3 icon-play">
                                <i class="fas fa-play fa-2x"></i>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="row my-5">
                <div class="col text-center">
                    <p class="lead font-weight-bold text-muted">Nuestra mejor satisfacción son los cientos de clientes satisfechos compartiendo sus experiencias con nosotros. Debajo encontrara algunos de ellos! te gustaría ser el siguiente. Luces, cámara, acción!</p>
                </div>
            </div>

            <div class="row">
                <div class="col-6 mb-3 col-sm-4 mb-md-0 col-md-4 text-center">
                    <div class="row justify-content-center">
                        <div class="col-6">
                            <a href="https://www.tripadvisor.com.pe/Attraction_Review-g294314-d15202262-Reviews-Gotoperu-Cusco_Cusco_Region.html" target="_blank">
                                <img src="{{asset('images/icons/tripadvisor.png')}}" alt="" class="w-100">
                            </a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col text-truncate">
                            <i class="fa fa-quote-left"></i>
                            <span class="small">Nuestro Guía Franklin fue un experto no pudimos pedir un guía mejor, pudimos aprender mucho de la cultura e historia Inca!</span>
                            <i class="fa fa-quote-right"></i>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col text-center">
                            <small class="text-g-yellow font-weight-bold">Jhon X2 feb 2019, USA</small>
                        </div>
                    </div>
                </div>
                <div class="col-6 mb-3 col-sm-4 mb-md-0 col-md-4 text-center">
                    <div class="row justify-content-center">
                        <div class="col-6">
                            <a href="https://www.yelp.com/biz/gotoperu-washington?osq=gotoperu.com" target="_blank">
                                <img src="{{asset('images/icons/yelp.png')}}" alt="" class="w-100">
                            </a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col text-truncate">
                            <i class="fa fa-quote-left"></i>
                            <span class="small">Mi experiencia con la Agencia fue perfecta, yo la recomendaría para cualquier.</span>
                            <i class="fa fa-quote-right"></i>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col text-center">
                            <small class="text-g-yellow font-weight-bold">Boon C. Jan 2019 Tampa, FL</small>
                        </div>
                    </div>
                </div>
                <div class="col-6 mb-3 col-sm-4 mb-md-0 col-md-4 text-center">
                    <div class="row justify-content-center">
                        <div class="col-6">
                            <a href="https://www.trustpilot.com/review/gotoperu.com" target="_blank">
                                <img src="{{asset('images/icons/trust.png')}}" alt="" class="w-100">
                            </a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col text-truncate">
                            <i class="fa fa-quote-left"></i>
                            <span class="small">No dude en recomendar GoToPeru para ayudar a diseñar su viaje. Martin como representante de primera línea</span>
                            <i class="fa fa-quote-right"></i>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col text-center">
                            <small class="text-g-yellow font-weight-bold">jeanette Pan feb 2019, USA</small>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col text-center">
                    <a href="https://www.tripadvisor.com/ShowTopic-g294311-i818-k5867868-Has_anyone_booked_a_tour_with_GOTOPERU_www_gotoperu_org-Peru.html" target="_blank" class="btn btn-outline-g-green font-weight-bold btn-sm">TripAdvisor 1</a>
                    <a href="https://www.tripadvisor.com/ShowTopic-g294311-i818-k6509104-Gotoperu_Travel_Agency-Peru.html" target="_blank" class="btn btn-outline-g-green font-weight-bold btn-sm">TripAdvisor 2</a>
                    <a href="https://www.tripadvisor.com/ShowTopic-g294311-i818-k5657518-GOTOPERU_online_tour_operator-Peru.html" target="_blank" class="btn btn-outline-g-green font-weight-bold btn-sm">TripAdvisor 3</a>
                    <a href="https://www.tripadvisor.com/ShowTopic-g294311-i818-k6934201-Trip_Report_Two_glorious_weeks_in_Peru_with_GOTOPERU_ORG-Peru.html" target="_blank" class="btn btn-outline-g-green font-weight-bold btn-sm">TripAdvisor 4</a>
                    <a href="https://www.tripadvisor.co.za/ShowTopic-g294311-i818-k7362487-o10-GotoPeru_or_David_Expeditions-Peru.html" target="_blank" class="btn btn-outline-g-green font-weight-bold btn-sm">TripAdvisor 5</a>
                </div>
            </div>

            <div class="row mt-5">
                <div class="col text-center">
                    <button type="button" class="btn-lg btn btn-primary text-white font-weight-bold">Más de nuestros testimonios</button>
                </div>
            </div>

        </div>
    </section>

    <section class="my-5">
        <div class="container">
            <div class="row pb-4">
                <div class="col text-center">
                    <h2 class="font-weight-bold">¿Buscas un estilo de viaje?</h2>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="transperent_block">
                        <img src="{{asset('images/category/family.jpg')}}" class="img-responsive" alt="">
                        <div class="black_hover_block">
                            <div class="blur"></div>
                            <div class="black_hover_block_text">
                                <ul class="text-center bg_black m-0 p-0">
                                    <li>Familiares</li>
                                    <div class="clearfix"></div>
                                </ul>
                                <h5 class="titl-h5">Familia</h5>
                                <p>Para grupo o familia</p>
                                <a class="btn btn-g-yellow btn-sm" href="#">Ver viajes familiares o grupos</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="transperent_block ">
                        <img src="{{asset('images/category/recommended.jpg')}}" class="img-responsive" alt="">
                        <div class="black_hover_block">
                            <div class="blur"></div>
                            <div class="black_hover_block_text">
                                <ul class="text-center bg_black m-0 p-0">
                                    <li> Recomendados</li>
                                    <div class="clearfix"></div>
                                </ul>
                                <h5 class="titl-h5">Recomendados</h5>
                                <p>Recomendados por nuestros viajeros</p>
                                <a class="btn btn-g-yellow btn-sm" href="#">Ver viajes recomendados</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="transperent_block">
                        <img src="{{asset('images/category/cultural.jpg')}}" class="img-responsive" alt="">
                        <div class="black_hover_block">
                            <div class="blur"></div>
                            <div class="black_hover_block_text">
                                <ul class="text-center bg_black m-0 p-0">
                                    <li>Cultural</li>
                                    <div class="clearfix"></div>
                                </ul>
                                <h5 class="titl-h5">Cultural</h5>
                                <p>Explore la diversidad de culturas peruanas</p>
                                <a class="btn btn-g-yellow btn-sm" href="#">Ver viajes culturales</a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="row mt-5">
                <div class="col text-center">
                    <p class="lead font-weight-bold text-muted">No importa el tipo de aventura que estés buscando, GOTOPERU tiene un viaje para ti. ¿Esperamos su llama? ¿Quieres un viaje de senderismo por el Camino Inca? ¡Llámenos!, ¿Qué tal un ceviche en Lima? ¡Llámenos!, ¿Qué tal un viaje para usted, sus hijos, la abuela y el abuelo? ¡Llámenos!</p>
                </div>
            </div>
        </div>
    </section>

    <section class="my-5 py-5 bg-white">
        <div class="container">
            <div class="row pb-4">
                <div class="col text-center">
                    <h2 class="font-weight-bold">Destinos recomendados</h2>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="home-banner-destinations">
                        <figure class="cc-imagewrapper">
                            <a href="/" class="text-center">
                                <img src="{{asset('images/destinations/machu-picchu.jpg')}}" alt="" class="w-100">
                            </a>
                            <figcaption>
                                <small class="d-block">Cusco</small>
                                Machu Picchu
                            </figcaption>
                        </figure>
                    </div>
                </div>
                <div class="col">
                    <div class="home-banner-destinations">
                        <figure class="cc-imagewrapper">
                            <a href="/" class="text-center">
                                <img src="{{asset('images/destinations/titicaca.jpg')}}" alt="" class="w-100">
                            </a>
                            <figcaption>
                                <small class="d-block">Puno</small>
                                Lago titicaca
                            </figcaption>
                        </figure>
                    </div>
                </div>
                <div class="col">
                    <div class="home-banner-destinations">
                        <figure class="cc-imagewrapper">
                            <a href="/" class="text-center">
                                <img src="{{asset('images/destinations/colca.jpg')}}" alt="" class="w-100">
                            </a>
                            <figcaption>
                                <small class="d-block">Arequipa</small>
                                Cañon del colca
                            </figcaption>
                        </figure>
                    </div>
                </div>

            </div>

            <div class="row">
                <div class="col text-center">
                    <a href="" class="btn btn-lg btn-g-yellow font-weight-bold text-white my-4">Ver todos nuestros destinos en Perú</a>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container-fluid">
            <div class="row justify-content-center my-4">
                <div class="col-2">
                    <img src="{{asset('images/logo-andes-y.png')}}" alt="" class="w-100">
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-7">
                    <h5 class="font-weight-bold text-center">CONSULTA DE VIAJES</h5>
                    <form-inquire></form-inquire>
                </div>
            </div>
        </div>
    </section>

    <footer>
        <img src="{{asset('images/footer.jpg')}}" alt="" class="w-100">
    </footer>

</div>
<!-- Scripts -->
<script src="{{ asset('js/app.js') }}"></script>
<script src="{{ asset('js/plugins.js') }}"></script>
{{--<script src="https://player.vimeo.com/api/player.js"></script>--}}
<script>

    $(document).ready(function(){
        $('.venobox').venobox();
    });
</script>
{{--    <script>--}}
{{--        /*global $ */--}}
{{--        $(document).ready(function() {--}}

{{--            "use strict";--}}

{{--            $('.menu > ul > li:has( > ul)').addClass('menu-dropdown-icon');--}}
{{--            //Checks if li has sub (ul) and adds class for toggle icon - just an UI--}}

{{--            $('.menu > ul > li > ul:not(:has(ul))').addClass('normal-sub');--}}
{{--            //Checks if drodown menu's li elements have anothere level (ul), if not the dropdown is shown as regular dropdown, not a mega menu (thanks Luka Kladaric)--}}

{{--            $(".menu > ul").before("<a href=\"#\" class=\"menu-mobile\">Navigation</a>");--}}

{{--            //Adds menu-mobile class (for mobile toggle menu) before the normal menu--}}
{{--            //Mobile menu is hidden if width is more then 959px, but normal menu is displayed--}}
{{--            //Normal menu is hidden if width is below 959px, and jquery adds mobile menu--}}
{{--            //Done this way so it can be used with wordpress without any trouble--}}

{{--            $(".menu > ul > li").hover(function(e) {--}}
{{--                if ($(window).width() > 943) {--}}
{{--                    $(this).children("ul").stop(true, false).fadeToggle(150);--}}
{{--                    e.preventDefault();--}}
{{--                }--}}
{{--            });--}}
{{--            //If width is more than 943px dropdowns are displayed on hover--}}

{{--            $(".menu > ul > li").click(function() {--}}
{{--                if ($(window).width() <= 943) {--}}
{{--                    $(this).children("ul").fadeToggle(150);--}}
{{--                }--}}
{{--            });--}}
{{--            //If width is less or equal to 943px dropdowns are displayed on click (thanks Aman Jain from stackoverflow)--}}

{{--            $(".menu-mobile").click(function(e) {--}}
{{--                $(".menu > ul").toggleClass('show-on-mobile');--}}
{{--                e.preventDefault();--}}
{{--            });--}}
{{--            //when clicked on mobile-menu, normal menu is shown as a list, classic rwd menu story (thanks mwl from stackoverflow)--}}

{{--        });--}}
{{--    </script>--}}
</body>
</html>
