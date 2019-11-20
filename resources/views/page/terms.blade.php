@extends('layouts.page.app')
@section('content')
    
    <section>
        <nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light pb-0 bg-free">
            <div class="container">
              <a class="navbar-brand" href="/"><img src="{{asset('images/logo-freewalks.png')}}" alt="peru"></a>
              <div class="collapse navbar-collapse" id="cssmenu">
                    @include('layouts.page.nav-home-others')
              </div>
              <ul class="navbar-nav p-2">
                    <li><a class="flag" href="{{route('terms_conditions_es_path', 'es')}}" rel="alternate" hreflang="es"><img src="{{asset('images/es.png')}}" alt="flag spanish"></a></li>
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
        <div class="fonc"><h1 class="text-center h2 py-sm-4 py-2 fondx text-uppercase">Terms & Conditions</h1></div>
        <div class="container">
            <div class="main pb-3">
                <article class="text-justify p-3 mb-sm-5" >
                    <div class="row">
                        <div class="col-sm-7 ">
                            <div class="bg-light rounded border shadow px-3">
                                <h3 class="px-3 my-2 text-center">FREE TOURS</h3>
                                <ul class="pl-3 ckeckok list-unstyled pl-sm-5">
                                    <li>FreeWalkingToursPeru.com reserves the right of admission to any tourist to participate in our free walking tours if deemed necessary to safeguard the safety of our attendees and the quality of our tours.</li>
                                    <li>We can always cancel the free tour, if we don´t have enough attendees, weather issues, protests, and festivities; On the other hand, you don't have to worry about this because 95% of the time we have the minimum number of attendees required.</li>
                                    <li>FreeWalkingToursPeru.com, does not take any responsibility for any damage or loss of belongings of the attendees during the free tour.</li>
                                    <li>All our free tours are operated thanks to the economic contribution of attendees as it is worldwide, generous donations are appreciated and valued as long as the tour is enjoyable, therefore nowhere on this website do we advertise our walks as if they were 100% free, instead we clearly mention that our walks are based on tips.</li>
                                    <li>The itineraries of our free tours are referential or flexible, which means that they can change because of weather conditions, strikes, festivities, and tour guide preferences.</li>
                                    <li>If you are taking part in our free tour you should enjoy the tipping culture otherwise we recommend you to book any paid tour.</li>
                                    <li>All tourists who usually are partial to leaving free tours without giving any donation are kindly asked to join other companies.</li>
                                    <li>Our free tours are enjoyable, historical, cultural, informative and even educational, but at no time do we want them to be taken as “entertainment tours”, because we have guides (we don´t have an entertainment staff).</li>
                                    <li>Wheelchair or users of crutches and parents with children, check FAQs according to the city where you will tour: Cusco, Lima or Arequipa</li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-sm-5 mt-3 mt-sm-1">
                            <div class="bg-light rounded border shadow px-3">
                                <h3 class="px-3 my-2 text-center">PAID TOURS</h3>
                                <ul class="pl-3 ckeckok list-unstyled pl-sm-5">
                                    <li>If you book paid tours, we will do our best to follow the tour route, However, Peru is very unstable politically; that is why most strikes are not announced beforehand and occur very suddenly, these events can also change our paid tour itineraries.</li>
                                    <li>As in the free tours, also in the paid tours, the company does not take any responsibility for loss or damage to your belongings, especially lost luggage in hotels or when taking national or international flights.</li>
                                    <li>For 100% tour booking confirmation, a 50% payment is required before taking the tour, and the rest will be paid once the tourist arrives in the city where the tour will take place.</li>
                                    <li>If you contact us for a tour a few hours in advance, we do not guarantee to provide you with our Official Guides because most of them are assigned with a program many weeks in advance. Nonetheless, we will always do our best to help you, please do your best to contact us in advance.</li>
                                    <li>Wheelchair users should contact us beforehand so that we can also assign you someone to help you.</li>
                                    <li>Parents with children, please kindly let us know you have kids so that we can organize for you the correct child friendly tour and hire the proper tour guide.</li>

                                </ul>
                            </div>
                        </div>


                    </div>
                </article>
            </div>
        </div>
    </section>
@endsection

