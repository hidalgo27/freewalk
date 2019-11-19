@extends('layouts.page.app')
@section('content')

    <section>
        <nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light pb-0 bg-free">
            <div class="container">
              <a class="navbar-brand" href="/"><img src="{{asset('images/logo-freewalks.png')}}" alt="peru"></a>
              <div class="collapse navbar-collapse" id="cssmenu">
                    @include('layouts.page.nav-home-others-es')
              </div>
              <ul class="navbar-nav p-2">
                    <li><a class="flag" href="/es/reservar" rel="alternate" hreflang="es"><img src="{{asset('images/es.png')}}" alt="flag spanish"></a></li>
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

    <section class="section01">
        <div class="fonc"><h1 class="text-center h2 py-sm-4 py-2 fondx text-uppercase">TERMINOS Y CONDICIONES</h1></div>
        <div class="container">
            <div class="main pb-3">
                <article class="text-justify p-3 mb-sm-5" >
                    <div class="row">
                        <div class="col-sm-7 ">
                            <div class="bg-light rounded border shadow px-3">
                                <h3 class="px-3 my-2 text-center">FREE TOURS</h3>
                                <ul class="pl-3 ckeckok list-unstyled pl-sm-5">
                          <li>FreeWalkingToursPeru.com se reserva el derecho de admisión de cualquier turista a participar en nuestros free tours a pie si se considera necesario para salvaguardar la seguridad y la calidad del servicio.</li>
                          <li>Siempre podemos hacer la cancelación del free tour, sino tenemos suficientes participantes, cuestiones climáticas, protestas o festividades, pero al 95% siempre tenemos asistentes!</li>
                          <li>FreeWalkingToursPeru.com, no acepta ninguna responsabilidad por cualquier daño o perdida de pertenecías de los asistentes durante el desarrollo del free tour.</li>
                          <li>Todos nuestros free tours a nivel nacional se operan gracias al aporte económico de cada turista como lo es a nivel mundial, se aprecia y valora aportes económicos decentes siempre y cuando que el servicio sea de buena calidad, razón por la cual en ninguna parte de esta web decimos que tu Free Tour será 100% Gratis, sino más bien tiene un costo al final del tour.</li>
                          <li>Los Itinerarios de nuestros tours libres son referenciales y/o flexibles de acuerdo a condiciones climáticas, huelgas, festividades y preferencias del Guía.</li>
                          <li>Cualquier asistente que participe de nuestro free tour tiene que tener una cultura de dejar donación, caso contrario no están permitidos.</li>
                          <li>Todos los turistas que están acostumbrados a escaparse de los free tours sin dejar ninguna Donación, No están permitidos a participar de nuestros free tours.</li>
                          <li>Nuestros free tours son participativos, amenos, históricos, culturales, informativos e incluso educativos, pero por ningún momento queremos que se tomen como “tours de entretenimiento”, porque contamos con Guías (No con personas especializadas en entretenimiento).</li>
                          <li>No tomamos ninguna responsabilidad por la experiencia de los Niños, porque nuestros free tours están diseñados para adultos, sin embargo siempre puedes asistir con tus hijos a nuestros tours, tu Guía hará los mejor realizar un buen servicio. Tienes nuestra palabra!</li>
                        </ul>
                            </div>
                        </div>
                        <div class="col-sm-5 mt-3 mt-sm-1">
                            <div class="bg-light rounded border shadow px-3">
                                <h3 class="px-3 my-2 text-center">TOURS PAGADOS</h3>
                                <ul class="pl-3 ckeckok list-unstyled pl-sm-5">
                          <li>Si reservas tours pagados, haremos lo mejor para realizar la ruta del producto, sin embargo El Perú, es un País muy inestable políticamente por eso hay muchas huelgas que No son anunciadas y ocurren muy repentinamente, estos eventos pueden hacer que también cambien los itinerarios de los tours pagados.</li>
                          <li>Asi como en los free tours, también en los tours pagados la compañía no toma ninguna responsabilidad por perdida o daños a tus pertenencias, sobre todo perdida de equipajes en hoteles o al momento de tomar vuelos nacionales o internacionales.</li>
                          <li>Para que la reserva este 100% confirmada se requiere de un pago del 50% y el resto se pagara una vez que el turista llegue a la ciudad donde el tour se realizará.</li>
                          <li>Si nos contactas para un tour con unas horas de anticipación, no garantizamos ayudarlo porque nuestros Guías oficiales ya tienen un programa con mucha anticipación y por eso en muchos casos no se puede contratar un Guía calificado a la última hora.</li>
                          <li>Si usas sillas de rueda, contáctanos con anticipación para que podamos incluso asignarte una persona para que te ayude.</li>
                          <li>Si tienes niños comunícate con anticipación para poder organizarle un tour amigable incluso para sus hijos menores y también asignarles el guía correcto.</li>

                        </ul>
                            </div>
                        </div>


                    </div>
                </article>
            </div>
        </div>
    </section>
@endsection

