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
        <div class="container mt-3 position-relative">
            <div class="row justify-content-between align-items-center">
                <div class="col-3">
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
{{--                    <div class="form-group m-0 has-search">--}}
{{--                        <span class="fa fa-search form-control-feedback"></span>--}}
{{--                        <input type="text" class="form-control form-control-search shadow-none border-0 text-white" placeholder="BUSCAR">--}}
{{--                    </div>--}}
                </div>
                <div class="col-auto">
                    <a href="{{route('home_path')}}"><img src="{{asset('images/logo-freewalks-white.png')}}" width="120" alt="logo andesviagens" class="img-fluid"></a>
                </div>
                <div class="col-3 text-right">
                    <a href="" class="btn btn-inquire  ml-3 font-weight-bold px-4 text-white rounded-0">CONTACTO</a>
                    <a href=""><img src="{{asset('images/flag/en.png')}}" alt=""></a>
{{--                    <a href=""><img src="{{asset('images/flag/es.png')}}" alt=""></a>--}}
                </div>
            </div>
        </div>
        <div class="menu mt-3 sticky-top">
            <ul class="nav justify-content-center">
                <li><a href="#">LIMA</a>
                    <ul>
                        <li><a href="">Free Tour Lima 10am</a></li>
                    </ul>
                </li>
                <li><a href="#">MIRAFLORES</a></li>
                <li><a href="#">BARRANCO</a></li>
                <li><a href="">AREQUIPA</a>
                    <ul>
                        <li><a href="#">Free Tour Arequipa 9am</a></li>
                    </ul>
                </li>
                <li><a href="">CUSCO</a>
                    <ul>
                        <li><a href="#">Free Tour <Cusco></Cusco> 9am</a></li>
                    </ul>
                </li>
                <li><a href="#">BLOG</a></li>
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
{{--            <iframe src="https://player.vimeo.com/video/361847703?background=1&autoplay=1&loop=1&title=0&byline=0&portrait=0&muted=1"  frameborder="0" allow="autoplay; fullscreen"></iframe>--}}
            <img src="{{asset('images/free-walking-tours-peru.jpg')}}" alt="" class="w-100">
        </div>
{{--        <div class="container h-100">--}}
{{--            <div class="row d-flex h-100 text-center align-items-center">--}}
{{--                <div class="col w-100 text-white mt-5">--}}
{{--                    <h1 class="font-weight-lighter mt-5">Top en Recomendaciones y Testimonios, sede central en Cusco</h1>--}}
{{--                    <a href="#Inquire" class="btn btn-outline-g-yellow btn-lg h2 font-weight-normal mt-3">Diseña tu Viaje</a>--}}
{{--                    --}}{{--                        <p class="lead mb-0">With HTML5 Video and Bootstrap 4</p>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="position-absolute-bottom p-2">--}}
{{--            <div class="row justify-content-center">--}}
{{--                <div class="col-auto text-center">--}}
{{--                    <a href="" class="mx-2">--}}
{{--                        <i data-feather="facebook" class="text-white" stroke-width="1"></i>--}}
{{--                    </a>--}}
{{--                    <a href="" class="mx-2">--}}
{{--                        <i data-feather="twitter" class="text-white" stroke-width="1"></i>--}}
{{--                    </a>--}}
{{--                    <a href="" class="mx-2">--}}
{{--                        <i data-feather="youtube" class="text-white" stroke-width="1"></i>--}}
{{--                    </a>--}}
{{--                    <a href="" class="mx-2">--}}
{{--                        <i data-feather="instagram" class="text-white" stroke-width="1"></i>--}}
{{--                    </a>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
    </header>


    <section class="my-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col">
                    <h1 class="font-weight-bold text-dark text-center">Free Tours en Perú Full Español, Visitas Guiadas y Excursiones en Perú</h1>
                    <p class="font-weight-normal text-muted">Tenga un cálida bienvenida a Free Walking Tours Perú Full Español, operado por Guías Indígenas, una compañía Local con Guías Calificados & Autorizados por el Estado Peruano, con Carnet de Guía | Ofrecemos los mejores free tours, excursiones turísticas y visitas guiadas con Guías 100% Locales. Nuestras actividades engloban las ciudades de Cusco, Lima y Arequipa(con extensiones en Barranco y Miraflores); Visitamos los centros históricos y alrededores de dichas ciudades a pie y en Bus. Somos Los Campeones en actividades a pie y son Libres de pago Inicial, sino más bien al final del tour Tu puedes dejar tu donación, no nos crees pues te invitamos a ver este sistema creado por Christopher Sandman; También contamos con las mejores excursiones pagadas!</p>
                    <div class="alert alert-primary">
                        Nota: Asegúrate de llegar al Punto de Encuentro Correcto para cada ciudad y ten un Guía Calificado, evita confundirte con personas ajenas a nuestra compañía quienes falsamente aducen formar de la misma compañía, muchos de ellos incluso usando los mismo colores de nuestro uniforme!
                    </div>
                </div>
                <div class="col d-none d-md-inline">
                    <img src="{{asset('images/banners/chaleco.jpg')}}" alt="" class="w-100 rounded">
                </div>
            </div>
        </div>
    </section>


    <section>
        <div class="container">
            <div class="card shadow-sm mb-4">
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col-4">
                            <img src="https://www.freewalkingtoursperu.com/es/img/free-tours-caminando-en-lima-espanol.jpg" alt="" class="w-100 rounded">
                        </div>
                        <div class="col">
                            <h3 class="font-weight-bold">Free Tours Caminando en Lima | en Español</h3>
                            <hr>
                            <p>Reviva la historia de Lima vía free walking tours, los tours más modernos y populares en todo el Mundo! Conoce la capital del Perú caminando por los lugares más emblemáticos del centro histórico donde comentaremos la historia precolombino y virreinal de Lima, haremos un enfoque a la historia por eso te prometemos no llevarte a visitar Bares | Lima es una ciudad milenaria, también fue la capital para el Virreinato del Perú durante la época colonial | En nuestros tours caminado en Lima hacemos un enfoque a la cultura e historia, por eso no te llevaremos a visitar Bares! Si amas un walking tour puro y original con Guía Autorizado, somos tu mejor decisión! mira nuestro Video!</p>
                            <a href="" class="btn btn-primary font-weight-bold text-right">Estoy interesado!</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card shadow-sm mb-4">
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col-4">
                            <img src="https://www.freewalkingtoursperu.com/es/img/free-tours-caminando-en-cusco-espanol.jpg" alt="" class="w-100 rounded">
                        </div>
                        <div class="col">
                            <h3 class="font-weight-bold">Free Tours a pie en Cusco | en Español</h3>
                            <hr>
                            <p>Cusco s Magia, Cusco es cultura, Cusco es diversión, ¿por qué no unirlo todo? ¡Descubre las distintas caras de la ciudad capital del imperio de los Inkas mientras pasas un rato divertido y lleno de historias y curiosidades con FreeWalkingToursPeru y con nuestros simpáticos y profesionales guías 100% Peruanos y profesionales para realizar el mejor free walking tour Cusco en español | Juntos exploraremos las diferentes caras de Cusco durante casi 3 horas a pie, caminando por las calle viejas de Cusco | Te esperamos en nuestro free tour Cusco en castellano!</p>
                            <a href="" class="btn btn-primary font-weight-bold text-right">Estoy interesado!</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="position-relative my-5">
        <div class="offer py-5">
            <div class="container">
                <div class="col text-center">
                    <h2 class="h1 font-weight-bold text-white">Porque escoger Free Walkin Tours</h2>
                </div>
                <div class="row justify-content-center mt-5">
                    <div class="col-6 mb-3 col-sm-4 mb-md-0 col-md-2 text-center">
                        <i data-feather="users" class="text-white d-block mx-auto" width="45" height="45" stroke-width="1"></i>
                        <span class="text-white small mt-3 d-block">Grupos pequeños y personalizados.</span>
                    </div>
                    <div class="col-6 mb-3 col-sm-4 mb-md-0 col-md-2 text-center">
                        <i data-feather="clock" class="text-white d-block mx-auto" width="45" height="45" stroke-width="1"></i>
                        <span class="text-white small mt-3 d-block">Nosotros vivimos aquí, somos locales 100%.</span>
                    </div>
                    <div class="col-6 mb-3 col-sm-4 mb-md-0 col-md-2 text-center">
                        <i data-feather="map-pin" class="text-white d-block mx-auto" width="45" height="45" stroke-width="1"></i>
                        <span class="text-white small mt-3 d-block">Sin intermediarios, sede en Perú.</span>
                    </div>
                    <div class="col-6 mb-3 col-sm-4 mb-md-0 col-md-2 text-center">
                        <i data-feather="thumbs-up" class="text-white d-block mx-auto" width="45" height="45" stroke-width="1"></i>
                        <span class="text-white small mt-3 d-block">Estamos orgullosos de nuestros recomendaciones!</span>
                    </div>
                </div>
                <div class="row mt-5">
                    <div class="col text-white text-white text-center">
                        <a href="#" class="btn btn-lg btn-g-yellow font-weight-bold text-white">Reserve ahora</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="pb-4 d-none">
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

    <section class="position-relative mt-5 d-none">
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

    <section class="py-5 bg-white d-none">
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

    <section class="my-5 d-none">
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
                    <h2 class="font-weight-bold">Destinos</h2>
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
{{--                                <small class="d-block">Lima</small>--}}
                                Lima
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
{{--                                <small class="d-block">Arequipa</small>--}}
                                Arequipa
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
{{--                                <small class="d-block">Arequipa</small>--}}
                                CUSCO
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

    <footer>
        <div class="container">
            <div class="row">
                <div class="col">
                    <img src="{{asset('images/brands/directur.png')}}" alt="" class="w-100 px-5">
                </div>
                <div class="col">
                    <img src="{{asset('images/brands/marca-peru.png')}}" alt="" class="w-100 px-5">
                </div>
                <div class="col">
                    <img src="{{asset('images/brands/mincetur.png')}}" alt="" class="w-100 px-5">
                </div>
                <div class="col">
                    <img src="{{asset('images/brands/paypal.png')}}" alt="" class="w-100 px-5">
                </div>
                <div class="col">
                    <img src="{{asset('images/brands/promperu.png')}}" alt="" class="w-100 px-5">
                </div>
                <div class="col">
                    <img src="{{asset('images/brands/westernunion.png')}}" alt="" class="w-100 px-5">
                </div>
            </div>
        </div>
        <div class="row bg-dark py-4 mt-5">
            <div class="col text-center">
                <a href="" class="btn btn-link text-white font-weight-bold">Reservación</a>
                <a href="" class="btn btn-link text-white font-weight-bold">Términos</a>
                <a href="" class="btn btn-link text-white font-weight-bold">Contáctenos</a>
                <a href="" class="btn btn-link text-white font-weight-bold">Amigos</a>
                <a href="" class="btn btn-link text-white font-weight-bold">Trabajo</a>
            </div>
        </div>
    </footer>

</div>
<!-- Scripts -->
<script src="{{ asset('js/app.js') }}"></script>
<script src="{{ asset('js/plugins.js') }}"></script>
{{--<script src="https://player.vimeo.com/api/player.js"></script>--}}
<script>
    feather.replace();
    $(document).ready(function(){
        $('.venobox').venobox();
    });
</script>
    <script>
        /*global jQuery */
        jQuery(document).ready(function () {

            "use strict";

            jQuery('.menu-container-v-tac .menu > ul > li:has( > ul)').addClass('menu-dropdown-icon');
            //Checks if li has sub (ul) and adds class for toggle icon - just an UI


            jQuery('.menu-container-v-tac .menu > ul > li > ul:not(:has(ul))').addClass('normal-sub');
            //Checks if drodown menu's li elements have anothere level (ul), if not the dropdown is shown as regular dropdown, not a mega menu (thanks Luka Kladaric)

            jQuery(".menu-container-v-tac .menu > ul").before("<a href=\"#\" class=\"menu-mobile\">Navigation</a>");

            //Adds menu-mobile class (for mobile toggle menu) before the normal menu
            //Mobile menu is hidden if width is more then 959px, but normal menu is displayed
            //Normal menu is hidden if width is below 959px, and jquery adds mobile menu
            //Done this way so it can be used with wordpress without any trouble

            jQuery(".menu-container-v-tac .menu > ul > li").children("ul").parent().addClass("show-on-desk-arrow")

            jQuery(".menu-container-v-tac .menu > ul > li").hover(function (e) {
                if (jQuery(window).width() > 943) {
                    jQuery(this).children("ul").stop(true, false).fadeToggle(150);
                    e.preventDefault();
                }
            });
            //If width is more than 943px dropdowns are displayed on hover

            jQuery(".menu-container-v-tac .menu > ul > li").click(function () {
                if (jQuery(window).width() <= 943) {
                    jQuery(this).children("ul").fadeToggle(150);
                }
            });
            //If width is less or equal to 943px dropdowns are displayed on click (thanks Aman Jain from stackoverflow)

            jQuery(".menu-mobile").click(function (e) {
                jQuery(".menu-container-v-tac .menu > ul").toggleClass('show-on-mobile');
                e.preventDefault();
            });
            //when clicked on mobile-menu, normal menu is shown as a list, classic rwd menu story (thanks mwl from stackoverflow)

        });
    </script>
</body>
</html>
