@extends('layouts.page.app')
@section('content')

{{--@foreach($tour as $tours)--}}

    @include('layouts.page.nav-home-tours')

<section>
    <!-- 	<img src="../img/free-walking-tours-lima-home.jpg" alt="slider" class="img-fluid"> -->

    <picture>
        @foreach ($tour->imagenes->where('estado','0') as $foto)
            @if (Storage::disk('tours')->has($foto->imagen))
                <source media="(max-width: 550px)" srcset="../img/lima/free-walkings-lima-portrait-mobile.jpg">
                <img src="{{ route('admin.tour.get_imagen.path',$foto->imagen) }}" class="w-100" alt="lima sightseeing tour on foot from miraflores">
            @endif
        @endforeach

    </picture>

</section>

<!-- end slider -->

<!-- contenido -->

<section class="section01" id="book">

    <div class="container">
        <div class="row">
            <div class="col-sm-9">

                <div class="main pt-4 pb-3">
                    <article class="text-justify border shadow p-3 mb-3 bg-white rounded" >
                        <h1 class="text-center">{{$tour->titulo}}</h1>
                        <div class="row">
                            <div class="col">

                                @php echo $tour->descripcion; @endphp

                            </div>

                        </div>


                    </article>
                    <article>
                        <div class="text-center telf my-4">

                            <a target="_blank" href="https://api.whatsapp.com/send?phone=51958745640&text=Hello,%20Can%20you%20help%20me%20pls?" class="d-none d-sm-inline-block  btn btn-free"><i class="fa fa-whatsapp" aria-hidden="true"></i> +51 958745640</a>
                            <a href="https://api.whatsapp.com/send?phone=51958745640&text=Hello,%20Can%20you%20help%20me%20pls?" class="mb-2 d-inline-block d-sm-none  btn btn-free"><i class="fa fa-whatsapp" aria-hidden="true"></i> +51 958745640</a>

                            <a href="#title-aside" class="mb-2 mb-sm-0  btn btn-free px-5"><i class="fa fa-map-marker" aria-hidden="true"></i>Pick up Place</a>

                            <a target="_blank" href="https://api.whatsapp.com/send?phone=51984479073&text=Hello,%20Can%20you%20help%20me%20pls?" class="d-none d-sm-inline-block  btn btn-free"><i class="fa fa-whatsapp" aria-hidden="true"></i> +51 984479073</a>
                            <a href="https://api.whatsapp.com/send?phone=51984479073&text=Hello,%20Can%20you%20help%20me%20pls?" class="mb-2 d-inline-block d-sm-none  btn btn-free"><i class="fa fa-whatsapp" aria-hidden="true"></i> +51 984479073</a>

                            <a href="#title-book" class="mb-2 mb-sm-0  btn btn-free px-5 d-inline-block d-sm-none"><i class="fa fa-calendar" aria-hidden="true"></i> Book Now</a>

                        </div>
                    </article>

                    <article class="text-justify border shadow p-3 mb-3 bg-white rounded inline">
                        @php echo $tour->itinerario; @endphp


                    </article>



                </div>
            </div>



            <div class="col-sm-3">
                <aside class="py-3 px-1 d-sm-block d-none">

<!--                    --><?php //include ('../includes/booking-aside-lima.php') ?>
                        @include('layouts.page.booking-aside-lima')
                </aside>
            </div>
        </div>
    </div>
</section>

<article class="bg-white">
    <div class="container">
        <section class="carrousel container pb-4">
            <div class="row testimonial">
                <div class="owl-carousel owl-theme">


                    <div class="item  pt-2 rounded pb-0 bg-white">
                        <div class="tit-carrusel" align="center">
                            <p class="mb-1">Save 50 soles by using The Transportation System</p>
                        </div>
                        <img src="../img/lima/lima-sightseeing-tour-on-foot-from-miraflores-at-10am-by-local-metropolitano-bus.jpg" alt="Lima sightseeing tour on Local Transportation System, metropolitano">
                    </div>
                    <div class="item  pt-2 rounded pb-0 bg-white">
                        <div class="tit-carrusel" align="center">
                            <p class="mb-1">Experience the Change of Guard</p>
                        </div>
                        <img src="../img/lima/lima-sightseeing-tour-on-foot-from-miraflores-at-10am-change-of-guard.jpg" alt="Lima sightseeing tour at the Change of Guard of Lima city">
                    </div>
                    <div class="item  pt-2 rounded pb-0 bg-white">
                        <div class="tit-carrusel" align="center">
                            <p class="mb-1">Municipality of Lima</p>
                        </div>
                        <img src="../img/lima/lima-sightseeing-tour-on-foot-from-miraflores-at-10am-city-hall.jpg" alt="Lima sightseeing tour at the municipality of Lima">
                    </div>
                    <div class="item  pt-2 rounded pb-0 bg-white">
                        <div class="tit-carrusel" align="center">
                            <p class="mb-1">Exploring the Atrium of San Francisco Church</p>
                        </div>
                        <img src="../img/lima/lima-sightseeing-tour-on-foot-from-miraflores-at-10am-exploring-san-francisco-church.jpg" alt="lima sightseeing tour at san francisco church">
                    </div>
                    <div class="item  pt-2 rounded pb-0 bg-white">
                        <div class="tit-carrusel" align="center">
                            <p class="mb-1">House of Peruvian Literature</p>
                        </div>
                        <img src="../img/lima/lima-sightseeing-tour-on-foot-from-miraflores-at-10am-house-of-peruvian-literature.jpg" alt="lima sightseeing tour at the house of peruvian literature">
                    </div>
                    <div class="item  pt-2 rounded pb-0 bg-white">
                        <div class="tit-carrusel" align="center">
                            <p class="mb-1">Local Experience</p>
                        </div>
                        <img src="../img/lima/lima-sightseeing-tour-on-foot-from-miraflores-at-10am-local-folkloric-experience.jpg" alt="lima sightseeing tour at local experience">
                    </div>
                    <div class="item  pt-2 rounded pb-0 bg-white">
                        <div class="tit-carrusel" align="center">
                            <p class="mb-1">Meet other Travelers</p>
                        </div>
                        <img src="../img/lima/lima-sightseeing-tour-on-foot-from-miraflores-at-10am-meet-other-travellers.jpg" alt="lima sightseeing tour meeting other travelers">
                    </div>
                    <div class="item  pt-2 rounded pb-0 bg-white">
                        <div class="tit-carrusel" align="center">
                            <p class="mb-1">Torre Tagle Palace</p>
                        </div>
                        <img src="../img/lima/lima-sightseeing-tour-on-foot-from-miraflores-at-10am-palace-of-torre-tagle.jpg" alt="lima sightseeing tour at torre tagle palace of Lima">
                    </div>
                    <div class="item  pt-2 rounded pb-0 bg-white">
                        <div class="tit-carrusel" align="center">
                            <p class="mb-1">Plaza de Armas of Lima</p>
                        </div>
                        <img src="../img/lima/lima-sightseeing-tour-on-foot-from-miraflores-at-10am-plaza-de-armas.jpg" alt="lima sightseeing tour at plaza de armas of Lima">
                    </div>
                    <div class="item  pt-2 rounded pb-0 bg-white">
                        <div class="tit-carrusel" align="center">
                            <p class="mb-1">Our Walkers at Lima Main Square</p>
                        </div>
                        <img src="../img/lima/lima-sightseeing-tour-on-foot-from-miraflores-at-10am-main-square-plaza-mayor.jpg" alt="lima sightseeing tour at the main square">
                    </div>
                    <div class="item  pt-2 rounded pb-0 bg-white">
                        <div class="tit-carrusel" align="center">
                            <p class="mb-1">Presidential Palace of Peru</p>
                        </div>
                        <img src="../img/lima/lima-sightseeing-tour-on-foot-from-miraflores-at-10am-presidential-palace.jpg" alt="lima sightseeing tour at presidential palace of Lima">
                    </div>
                    <div class="item  pt-2 rounded pb-0 bg-white">
                        <div class="tit-carrusel" align="center">
                            <p class="mb-1">Rimac River </p>
                        </div>
                        <img src="../img/lima/lima-sightseeing-tour-on-foot-from-miraflores-at-10am-rimac-river.jpg" alt="lima sightseeing tour at Rimac River">
                    </div>
                    <div class="item  pt-2 rounded pb-0 bg-white">
                        <div class="tit-carrusel" align="center">
                            <p class="mb-1">Unveil San Francisco Church</p>
                        </div>
                        <img src="../img/lima/lima-sightseeing-tour-on-foot-from-miraflores-at-10am-san-francisco-church.jpg" alt="lima sightseeing tour at san francisco church">
                    </div>
                    <div class="item  pt-2 rounded pb-0 bg-white">
                        <div class="tit-carrusel" align="center">
                            <p class="mb-1">Santo Domingo Church</p>
                        </div>
                        <img src="../img/lima/lima-sightseeing-tour-on-foot-from-miraflores-at-10am-santo-domingo-church.jpg" alt="lima sightseeing tour at santo domingo church">
                    </div>

                </div>
            </div>
        </section>
    </div>
</article>


<section class="col">
    <div class="d-sm-none d-block" id="title-book">
<!--        --><?php //include ('../includes/booking-aside-lima-sm.php') ?>
            @include('layouts.page.booking-aside-lima-sm')
    </div>

</section>
<section class="section01 py-4">
    <article>
        <div class="container maxw2 p-3" id="title-aside">
            <div class="row">

                <div class="col-sm-4">
                    <div class="box-green text-center">
                        <div class="bg-success p-1 text-center text-white"><span class="">Look for our Operator Logo</span></div>
                        <img src="{{asset('images/lima/logo-lima.jpg')}}" class="img-fluid" alt="free tour lima logo">
                    </div>

                </div>

                    <div class="col-sm-8">
                        <div class="box-green text-center">
                            <div class="bg-success p-1 text-center text-white"><span class="">{{$tour->lugar_recojo->titulo}}</span></div>
                            @php echo $tour->lugar_recojo->iframe @endphp
                        </div>
                    </div>

            </div>

        </div>
    </article>
</section>

<section class="section04 maxw2">
    <article>
        <div class="container-fluid">

            <div class="row py-4">
                <div class="col-sm-5 d-flex">
                    <div class="box-map mb-2">
                        @if (Storage::disk('lugar_recojo')->has($tour->lugar_recojo->referencia_imagen))
                            <img src="{{ route('admin.lugar_recojo.get_imagen.path',$tour->lugar_recojo->referencia_imagen) }}" alt="our meeting place for lima city free walking tours leaving from miraflores" class="img-fluid">
                        @endif
                    </div>
                </div>
                <div class="col-sm-7 d-flex">
                    <div class="box-faqs w-100 bg-white p-3">
                        <h3 class="text-center h3 " style="font-size: 1.5em;">Faqs</h3>

                        <ul class="pl-2 pl-sm-4 ml-2 ml-sm-0">

                            @foreach($tour->destino->destinos_grupo as $destino_grupo)
                                @foreach($destino_grupo->preguntas as $preguntas)
                                    <li>{{$preguntas->pregunta}}(<a href="#" class="alternar-respuesta">View</a>)</li>
                                    <div class="respuesta" style="display:none">
                                        @php echo $preguntas->respuesta @endphp
                                    </div>
                                @endforeach
                            @endforeach

                        </ul>


                    </div>
                </div>

            </div>

        </div>
    </article>
</section>

<section class="section01">
    <article>
        <div class="container">
            <div class="bot py-3 text-center  d-none d-sm-block">
                <a role="button" href="#book" class="btn btn-lg px-5">Book Now</a>
            </div>
            <div class="bot py-3 text-center  d-sm-none d-block">
                <a role="button" href="#title-book" class="btn btn-lg px-5">Book Now</a>
            </div>
        </div>
    </article>
</section>

{{--    @endforeach--}}

@endsection
