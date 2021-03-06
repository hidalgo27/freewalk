@extends('layouts.page.app')
@section('hreflang')
    @foreach($destino_grupo_idioma as $destino_grupo_idiomas_ref)

        @if(strtolower($destino_grupo_idiomas_ref->idioma) !== strtolower($locale))
            <link rel="alternate" hreflang="{{strtolower($destino_grupo_idiomas_ref->idioma)}}" href="{{route('lang_agrupados_path', [$destino_grupo_idiomas_ref->destino_grupo_relacion_id, strtolower($destino_grupo_idiomas_ref->idioma)])}}" />
        @endif

    @endforeach
@endsection
    @section('content')

        @include('layouts.page.nav-home-agrupados')

<section>
    <picture>
        @foreach ($destino_grupos->imagenes->where('estado', 5)->take(1) as $foto2)
            @if (Storage::disk('destino_grupo')->has($foto2->imagen))
                <source media="(max-width: 550px)" srcset="{{ route('admin.destino_grupo.get_imagen.path', $foto2->imagen) }}">
            @endif
        @endforeach
        @foreach ($destino_grupos->imagenes->where('estado', 0)->take(1) as $foto)
            @if (Storage::disk('destino_grupo')->has($foto->imagen))
                <img src="{{ route('admin.destino_grupo.get_imagen.path',$foto->imagen) }}" class="w-100" alt="free walking tours in peru">
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
                                <h1 class="text-center">{{$destino_grupos->titulo}}</h1>
                                <div class="row">
                                    <div class="col-sm-8">@php echo $destino_grupos->descripcion; @endphp</div>
                                    <div class="col-sm-4">
                                        <div class="bg-white shadow my-2 rounded">
                                            <h6 class="text-center pt-2">
                                               @lang('home.why_reserve')
                                            </h6>
                                            <hr class="my-2">
                                            <div class="row">
                                                <div class="col-7">
                                                    <ul class="liswhy pl-3 list-unstyled">
                                                        @lang('home.text_why')


                                                    </ul>
                                                </div>
                                                <div class="col-4">
                                                    <span class="flag-icon flag-icon-pe"></span>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>


                            </article>

                            <article class="text-justify border shadow p-3 mb-3 bg-white rounded inline">
{{--                                <h2 class="text-center" style="font-size: 1.5em;">Details about our Free Free Walking Tour Lima</h2>--}}
{{--                                <p class="text-success text-center mb-1 d-blok">We have three free tour Lima meet up times and two meeting places for the same outing! Please read each one of them, so you do not get lost!</p>--}}

{{--                                <div class="my-2"><h3 class="d-inline ">Times & Meeting Places: </h3> <p class="d-inline"> Mon thru Sat | <a href="https://www.freewalkingtoursperu.com/lima/sunday-walks-in-lima" target="_blank"> You MUST click here</a>	<ins datetime="2019-08-21">for Sunday free tour in Lima.</ins></p></div>--}}
{{--                                <ul>--}}
{{--                                    <li><b>10 am Meeting Place(Pickup):</b> Meet us in <a href="https://www.google.com/maps/place/Calle+Schell+178,+Miraflores+15074/@-12.1226709,-77.0307918,21z/data=!4m5!3m4!1s0x9105c818e2e9d1dd:0xdd4b052cbe084319!8m2!3d-12.1226729!4d-77.0306609?authuser=1" target="_blank">Calle Schell N° 178  outside Oechsle Mall</a>. You can only join us here if you are very close to Calle Schell or Kennedy park. (max 10min away by foot). Please bring 2.50 soles pp for a local bus ticket. Seriously a Bus? Yes, we do not tour in Miraflores, this is only a pickup place. | <span class="text-success">If you are not close to this spot or you don´t like to travel via a crowded local bus, go on your own to the 11 am or 3 pm Meeting Place (starting point).</span></li>--}}
{{--                                    <li><b>11 am Meeting Place:</b> Join us <a href="https://www.google.com/maps/place/Iglesia+de+La+Merced/@-12.0481554,-77.0333688,19z/data=!4m12!1m6!3m5!1s0x9105c8b624bb8ded:0xd81ebfed4d7031cb!2sIglesia+de+La+Merced!8m2!3d-12.048218!4d-77.0328404!3m4!1s0x9105c8b624bb8ded:0xd81ebfed4d7031cb!8m2!3d-12.048218!4d-77.0328404" target="_blank">in front of La Merced Church on the Jirón de La Union Street</a> (Lima center) | <span class="text-success">This is where the tour starts!</span></li>--}}
{{--                                    <li><b>3 pm Meeting Place:</b> For our Lima Free Walking Tour in the afternoon, you must also come to <a href="https://www.google.com/maps/place/Iglesia+de+La+Merced/@-12.0481554,-77.0333688,19z/data=!4m12!1m6!3m5!1s0x9105c8b624bb8ded:0xd81ebfed4d7031cb!2sIglesia+de+La+Merced!8m2!3d-12.048218!4d-77.0328404!3m4!1s0x9105c8b624bb8ded:0xd81ebfed4d7031cb!8m2!3d-12.048218!4d-77.0328404" target="_blank">La Merced Church</a> from all over Lima! We do not pick up anyone from Miraflores.</li>--}}
{{--                                    <li><b>If you stay in Barranco:</b> Then click <a href="/lima/free-walking-tour-lima-barranco" target="_blank">here.</a></li>--}}
{{--                                    <li><b>If you are cruising in Callao Port, </b> please go to <a href="https://www.google.com/maps/place/Iglesia+de+La+Merced/@-12.0481554,-77.0333688,19z/data=!4m12!1m6!3m5!1s0x9105c8b624bb8ded:0xd81ebfed4d7031cb!2sIglesia+de+La+Merced!8m2!3d-12.048218!4d-77.0328404!3m4!1s0x9105c8b624bb8ded:0xd81ebfed4d7031cb!8m2!3d-12.048218!4d-77.0328404" target="_blank">La Merced Church</a> at 11 am or 3 pm.</li>--}}
{{--                                    <li><b>If you do not know where to go,</b> please come to <a href="https://www.google.com/maps/place/Iglesia+de+La+Merced/@-12.0481554,-77.0333688,19z/data=!4m12!1m6!3m5!1s0x9105c8b624bb8ded:0xd81ebfed4d7031cb!2sIglesia+de+La+Merced!8m2!3d-12.048218!4d-77.0328404!3m4!1s0x9105c8b624bb8ded:0xd81ebfed4d7031cb!8m2!3d-12.048218!4d-77.0328404" target="_blank">La Merced Church</a> at 11 am or 3 pm.</li>--}}

{{--                                </ul>--}}

{{--                                <div class="my-2"><h3 class="d-inline ">How to Identify Your Tour Guide? </h3> <p class="d-inline">Look for your Official Operator at the correct meeting place; <span style="background-color:  #fc0">We wear the Inkan Milky Way Logo-Sign!</span></p></div>--}}
{{--                                <div class="my-2"><h3 class="d-inline ">Duration: </h3> <p class="d-inline">If you start your walk in Lima center, the tour lasts for 2.5 hours. | If you begin the trip at Miraflores, the tour lasts 3.5 hours! </p></div>--}}
{{--                                <div class="my-2"><h3 class="d-inline ">Price: </h3> <p class="d-inline">Free – Based on your donation | Neither our tour guides or team members have set salaries!</p></div>--}}
{{--                                <div class="my-2"><h3 class="d-inline ">Language: </h3> <p class="d-inline">English & Spanish | Separate Groups, based on language | We have 2 Tour Guides! For more info about <a  href="https://www.freewalkingtoursperu.com/es/lima/" target="_blank" rel="alternate" hreflang="es">spanish free tour in Lima click here!</a> </p></div>--}}
{{--                                <div class="my-2"><h3 class="d-inline ">Tour Type: </h3> <p class="d-inline">It´s a free group tour, it is not private, | sometimes groups can be sizable; therefore, our guides use speakers!</p></div>--}}
{{--                                <div class="my-2"><h3 class="d-inline ">Please Bring: </h3> <p class="d-inline">If you join us at 10 am, bring 2.50 soles pp or 5 soles per couple for the bus ticket.</p></div>--}}
{{--                                <div class="my-2"><h3 class="d-inline ">Tour Ending Place: </h3> <p class="d-inline">Near the Main Square. | We will not take the group to bars for commissions; <span class="text-success">we do focus on history!</span></p></div>--}}
{{--                                <div class="my-2"><h3 class="d-inline ">Reviews: </h3> <p class="d-inline">50+ trusted testimonials at: <a  href="https://www.facebook.com/limafreewalkingtour/" target="_blank">Facebook!</a> Also, <a href="https://www.tripadvisor.com.pe/Attraction_Review-g294316-d14918493-Reviews-Inkan_Milky_Way_Tours_Lima-Lima_Lima_Region.html" target="_blank">800+ reviews for Free Walking Tour Lima on TripAdvisor</a>, See Google Maps <a  href="https://goo.gl/maps/Vm1kGXKJARpRULXA7" target="_blank">Lima free tour reviews</a>! <a  href="https://youtu.be/HdYcNrUxnXA" target="_blank">Watch our Video</a>!</p></div>--}}
{{--                                <div class="my-2"><h3 class="d-inline ">Itinerary: </h3> <p class="d-inline">Walking Historic Center tour, please scroll down and click on tour! | The route can always change if there are strikes, festivities or holidays!</p></div>--}}

                                @php echo $destino_grupos->detalle; @endphp
                                <div class="text-center telf my-4">


                                    <a target="_blank" href="https://api.whatsapp.com/send?phone=51958745640&text=Hello,%20Can%20you%20help%20me%20pls?" class="d-none d-sm-inline-block  btn btn-free"><i class="fab fa-whatsapp" aria-hidden="true"></i> +51 958745640</a>
                                    <a href="https://api.whatsapp.com/send?phone=51958745640&text=Hello,%20Can%20you%20help%20me%20pls?" class="mb-2 d-inline-block d-sm-none  btn btn-free"><i class="fab fa-whatsapp" aria-hidden="true"></i> +51 958745640</a>
                                    <a href="https://api.whatsapp.com/send?phone=51984479073&text=Hello,%20Can%20you%20help%20me%20pls?" class="mb-2 d-inline-block d-sm-none  btn btn-free"><i class="fab fa-whatsapp" aria-hidden="true"></i> +51 984479073</a>
                                    <a target="_blank" href="https://api.whatsapp.com/send?phone=51984479073&text=Hello,%20Can%20you%20help%20me%20pls?" class="d-none d-sm-inline-block  btn btn-free"><i class="fab fa-whatsapp" aria-hidden="true"></i> +51 984479073</a>
                                    <a href="#title-tour" class="mb-2 mb-sm-0  btn btn-free px-5"><i class="fa fa-list-ul" aria-hidden="true"></i> Itinerary</a>


                                    <a href="#title-aside" class="mb-2 mb-sm-0  btn btn-free px-5 d-inline-block d-sm-none"><i class="fab fa-calendar" aria-hidden="true"></i> @lang('home.book_now')</a>
                                    <a target="_blank" href="#faqs" class="mb-2 mb-sm-0  btn btn-free px-5 "><i class="far fa-question-circle"></i> FAQs</a>


                                </div>
                            </article>

                        </div>
                    </div>
                    <div class="col-sm-3">
                        <aside class="py-3 px-1 d-sm-block d-none">
                            <!-- 	<div class="faqs mx-3 mt-2 pb-3">
                                    <div class="row">
                                        <div class="col-4 px-1">
                                            <div class="faqs-box pt-2 bg-white border p-0">
                                                <i class="fa fa-id-card-o" aria-hidden="true"></i>
                                                <p>Licensed Guides</p>
                                            </div>
                                        </div>
                                        <div class="col-4 px-1">
                                            <div class="faqs-box pt-2 bg-white border p-0">
                                                <i class="fa fa-lock" aria-hidden="true"></i>
                                                <p>Terms & Conditions</p>
                                            </div>
                                        </div>
                                        <div class="col-4 px-1">
                                            <div class="faqs-box pt-2 bg-white border p-0">
                                                <i class="fa fa-question-circle" aria-hidden="true"></i>
                                                <p>Frequent Questions</p>
                                            </div>
                                        </div>
                                    </div>
                                </div> -->
                            <div class="container bg-dark2 rounded px-3 mt-2 py-1">
                                <div class="social">
                                    <div class="row">
                                        <div class="col">
                                            <div class="text-center my-1"><a target="_blank" href="https://www.facebook.com/limafreewalkingtour/"><i class="fab fa-facebook-square fa-2x text-white"></i></a></div>
                                        </div>
                                        <div class="col">
                                            <div class="text-center my-1"><a href="https://www.youtube.com/channel/UCdHL6ZDqMvigxpIl5dMf9dQ"><i class="fab fa-youtube-square fa-2x text-white" aria-hidden="true"></i></a></div>
                                        </div>
                                        <div class="col">
                                            <div class="text-center my-1"><a target="_blank" href="https://www.facebook.com/limafreewalkingtour/"><i class="fab fa-tripadvisor fa-2x text-white" aria-hidden="true"></i></a></div>
                                        </div>
                                        <div class="col">
                                            <div class="text-center my-1"><a target="_blank" href="https://www.facebook.com/limafreewalkingtour/"><i class="fab fa-instagram fa-2x text-white" aria-hidden="true"></i></a></div>
                                        </div>
                                    </div>

                                </div>
                            </div>
<!--                            --><?php //include ('../includes/booking-aside-lima.blade.php') ?>
                            @include('layouts.page.booking-aside-lima')

                        </aside>
                    </div>
                </div>
            </div>
            </div>
        </section>


@php $count_images = 0  @endphp
@foreach($destino_grupos->imagenes->where('estado', 3) as $imagenes)
    @php $count_images++  @endphp
@endforeach

@if ($count_images == 0 )


    <div class="bg-white">
        <div class="container">
            <h4 class="text-center h6 bg-title text-white py-2 mb-0">Places we will explore</h4>
            <div class="carrousel container pb-4">
                <div class="row testimonial">
                    <div class="col owl-carousel owl-theme">
                        @foreach($destino_grupos->imagenes->where('estado', 1) as $imagenes1)
{{--                            @if ($imagenes1->id > 0)--}}
{{--                                <img src="{{asset('images/lima/logo-lima.jpg')}}" alt="">--}}
{{--                            @endif--}}
                            @if (Storage::disk('destino_grupo')->has($imagenes1->imagen) )
                                <div class="item rounded pb-0 bg-white pt-0">
                                    <div class="tit-carrusel2" align="center">
                                        <p class="mb-1">{{$imagenes1->titulo}}</p>
                                    </div>
                                    <img src="{{ route('admin.destino_grupo.get_imagen.path',$imagenes1->imagen) }}" alt="free walking tour barranco, plaza de armas of barranco">
                                </div>
                            @endif
                        @endforeach
                    </div>
            </div>
        </div>
    </div>



@else
            <section class="section03 maxw2" id="title-tour">
                <article>
                    <div class="container py-4">
                        <h2 class="text-center" style="font-size: 1.5em;">@lang('home.read_detailed'):</h2>
                        <p class="text-success text-center">@lang('home.read_detailed_p')</p>
                        <div class="row">

                            @foreach ($destino_grupos->destino->tours as $tours)
                                <div class="col-sm-4 mb-3 mb-sm-0">
                                    <div class="box-tours my-sm-2 my-1">
                                        <a href="{{route('destination_tour_path', [strtolower($locale), $destino_grupos->destino->url, strtolower(str_replace(' ','-', $tours->url ))])}}" target="_blank">
                                            @foreach ($tours->imagenes->where('estado','5') as $foto)
                                                @if (Storage::disk('tours')->has($foto->imagen))
                                                    <img src="{{ route('admin.tour.get_imagen.path',$foto->imagen) }}" class="img-fluid rounded-lg" alt="free walking tour lima, leaves from miraflores">
                                                @endif
                                            @endforeach
                                            <div class="tour_title"><span>{{$tours->titulo}}</span></div>
                                        </a>
                                    </div>
                                    <div class="float-right">
                                        <div class="book-tour d-flex align-items-center">
                                            <i class="fa fa-bullhorn fa-2x mx-1" aria-hidden="true"></i>
                                            <span class="flag-icon flag-icon-es"></span>
                                            <span class="flag-icon flag-icon-gb mx-1"></span>
                                            <a target="_blank" href="{{route('destination_tour_path', [strtolower($locale), $destino_grupos->destino->url, strtolower(str_replace(' ','-', $tours->url ))])}}" target="_blank" class="btn btn-free">Info & Booking</a>
                                        </div>
                                    </div>
                                </div>
                            @endforeach

                        </div>
                    </div>
                </article>
            </section>

                    <section class="col" id="title-aside">
                        <div class="d-sm-none d-block">
                            @include('layouts.page.booking-aside-lima-sm')
                        </div>
                    </section>
            <section class="section01 py-4">
                <article>
                    <div class="container maxw2 p-3">
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="box-green text-center">
                                    <div class="bg-success p-1 text-center text-white"><span class="">Look for our Operator Logo</span></div>
                                    @if(strtolower($destino_grupos->destino->nombre) == 'arequipa')
                                      <img src="{{asset('images/arequipa/arequipa-meeting-point-at-chaqchao-choco-museo-for-free-walking-tours.jpg')}}" class="img-fluid" alt="free walking tour lima logo uniform">
                                    @else
                                    <img src="{{asset('images/lima/logo-lima.jpg')}}" class="img-fluid" alt="free walking tour lima logo uniform">
                                    @endif
                                </div>

                            </div>
                            @foreach ($destino_grupos->destino->lugares_recojo as $lugares_recojos)
                                {{--                            @foreach($destino->lugares_recojo as $lugares_recojos)--}}
                                {{--                                {{$lugares_recojo}}--}}
                                <div class="col-sm-4">
                                    <div class="box-green text-center">
                                        <div class="bg-success p-1 text-center text-white"><span class="">{{$lugares_recojos->titulo}}</span></div>
                                        {{--                                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7801.692421398545!2d-77.030661!3d-12.122673!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9105c818e2e9d1dd%3A0xdd4b052cbe084319!2sCalle+Schell+178%2C+Miraflores+15074!5e0!3m2!1ses!2spe!4v1560033129564!5m2!1ses!2spe" width="100%" height="330" frameborder="0" style="border:0" allowfullscreen></iframe>--}}
                                        @php echo $lugares_recojos->iframe;@endphp
                                    </div>
                                </div>
                                {{--                            @endforeach--}}
                            @endforeach

                        </div>
                    </div>
                </article>
            </section>

                                   @if(strtolower($destino_grupos->destino->nombre) == 'lima')

                                         <section class="section04">
                <article>
                    <div class="container">
                        <h3 class="text-center h3 text-white pt-4 mb-0" style="font-size: 1.5em;">@lang('home.check_lima_free_tours')</h3>
                        <div class="row">
                    <section class="carrousel container pb-4">
                        <div class="row testimonial">
                            <div class="owl-carousel owl-theme">

                                <div class="item px-4 pt-2 m-3 rounded pb-0 bg-white">
                                    <div class="block-test pb-1">
                                        <h4 class="text-center" style="font-size: 1.2em;"><a href="https://www.tripadvisor.com.pe/ShowUserReviews-g294316-d14918493-r681129768-Inkan_Milky_Way_Tours_Lima-Lima_Lima_Region.html" target="_blank">Great way to spend a morning!</a></h4>
                                        <div class="row">
                                            <div class="col-3 pr-1">
                                                <div class="mt-4">
                                                    <img src="{{asset('images/lima/tripadvisor-review-1-about-free-walking-tour-lima.jpg')}}" alt="review for Lima free tour from tripadvisor" class="img-thumbnail">
                                                    <div class="p-2">
                                                        <p class="mb-1">Gooner </p>
                                                        <p class="mb-1">England</p>
                                                        <p class="mb-1">On <a href="https://www.tripadvisor.com.pe/ShowUserReviews-g294316-d14918493-r681129768-Inkan_Milky_Way_Tours_Lima-Lima_Lima_Region.html" target="_blank"><i class="fab fa-tripadvisor fa-lg" aria-hidden="true"></i></a> </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-9">
                                                <span class="star5 py-2 d-block">My rating: </span>
                                                <p>Pepe Lucho was well informed and hilarious. He knew how to keep the crowd's attention. The tour covers the historical city centre (Lima downtown) and even visits one of the Churches and shows the changing of guard. Thoroughly recommended.May be easier to get an uber downtown from Baranco/Miraflores - shouldn't be more than S/20.Pepe Lucho usually ends with a recommendation for lunch, which is fantastic value for money. Would strongly recommend the tour.</p>
                                            </div>
                                        </div>

                                    </div>

                                </div>
                                <div class="item px-4 pt-2 m-3 rounded pb-0 bg-white">
                                    <div class="block-test pb-1">
                                        <h4 class="text-center" style="font-size: 1.2em;"><a href="https://www.tripadvisor.com.pe/ShowUserReviews-g294316-d14918493-r676233962-Inkan_Milky_Way_Tours_Lima-Lima_Lima_Region.html" target="_blank">Do it - choose Pepe Luchaas guide, if you can!</a></h4>
                                        <div class="row">
                                            <div class="col-3 pr-1">
                                                <div class="mt-4">
                                                    <img src="{{asset('images/lima/tripadvisor-review-2-about-free-walking-tour-lima.jpg')}}" alt="review for Lima free tour from tripadvisor" class="img-thumbnail">
                                                    <div class="p-2">
                                                        <p class="mb-1">Christina </p>
                                                        <p class="mb-1">United States</p>
                                                        <p class="mb-1">On <a href="https://www.tripadvisor.com.pe/ShowUserReviews-g294316-d14918493-r676233962-Inkan_Milky_Way_Tours_Lima-Lima_Lima_Region.html" target="_blank"><i class="fab fa-tripadvisor fa-lg" aria-hidden="true"></i></a> </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-9">
                                                <span class="star5 py-2 d-block">My rating: </span>
                                                <p>A very wel organized tour, with the most important sights covered, Pepe Lucha is a funny, up-beat and super-nice guide who knows a lot, is akways fun and happy and still knows how to keep a big group in thisustling city together. An ansolute recommandation: the restaurant he recommended at the end of the tour to have lunch. Many locals, very good price abd excellent quality - try the ceviche! Ps: at the restaurant he made personally sure, every guest that was with him had wifi access and got the password. HIGHLY RECOMMENDED! Try to book with Pepe Lucha!</p>
                                            </div>
                                        </div>

                                    </div>

                                </div>
                                <div class="item px-4 pt-2 m-3 rounded pb-0 bg-white">
                                    <div class="block-test pb-1">
                                        <h4 class="text-center" style="font-size: 1.2em;"><a href="https://www.tripadvisor.com.pe/ShowUserReviews-g294316-d14918493-r675528027-Inkan_Milky_Way_Tours_Lima-Lima_Lima_Region.html" target="_blank">Amazing way to see and learn about Lima!</a></h4>
                                        <div class="row">
                                            <div class="col-3 pr-1">
                                                <div class="mt-4">
                                                    <img src="{{asset('images/lima/tripadvisor-review-3-about-free-walking-tour-lima.jpg')}}" alt="review for Lima free tour from tripadvisor" class="img-thumbnail">
                                                    <div class="p-2">
                                                        <p class="mb-1">Traveeline </p>
                                                        <p class="mb-1">Australia</p>
                                                        <p class="mb-1">On <a href="https://www.tripadvisor.com.pe/ShowUserReviews-g294316-d14918493-r675528027-Inkan_Milky_Way_Tours_Lima-Lima_Lima_Region.html" target="_blank"><i class="fab fa-tripadvisor fa-lg" aria-hidden="true"></i></a> </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-9">
                                                <span class="star5 py-2 d-block">My rating: </span>
                                                <p>We only have one day to see Lima and this is the best way to do it. We met our guide, Pepe Lucho at Miraflores and he guided us with the local bus ride to the city centre. It was a good local experience (try it if you can!). Pepe is a funny guy and knows the history and facts about the city really well. He also guided us to what to eat for lunch after the tour. Really enjoyed and recommend the tour!</p>
                                            </div>
                                        </div>

                                    </div>

                                </div>
                                <div class="item px-4 pt-2 m-3 rounded pb-0 bg-white">
                                    <div class="block-test pb-1">
                                        <h4 class="text-center" style="font-size: 1.2em;"><a href="https://www.facebook.com/pg/limafreewalkingtour/reviews/?ref=page_internal" target="_blank">Perfect tour with nice guide in Lima!</a></h4>
                                        <div class="row">
                                            <div class="col-3 pr-1">
                                                <div class="mt-4">
                                                    <img src="{{asset('images/lima/facebook-review-1-about-free-walking-tour-lima.jpg')}}" alt="review for Lima free tour from facebook" class="img-thumbnail">
                                                    <div class="p-2">
                                                        <p class="mb-1">David Nath </p>
                                                        <p class="mb-1">Germany</p>
                                                        <p class="mb-1">On <a href="https://www.facebook.com/pg/limafreewalkingtour/reviews/?ref=page_internal" target="_blank"><i class="fab fa-facebook-square 3x" aria-hidden="true"></i></a> </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-9">
                                                <span class="star5 py-2 d-block">My rating: </span>
                                                <p>Perfect tour with nice guide! Great and interesting tour with Richard, who could speak fluently English and Spanish as well! He explained every place and the history of Lima in a good way :)) I was happy with him and recommend his tour to anyone who wants to explore the city! Cheers!</p>
                                            </div>
                                        </div>

                                    </div>

                                </div>
                                <div class="item px-4 pt-2 m-3 rounded pb-0 bg-white">
                                    <div class="block-test pb-1">
                                        <h4 class="text-center" style="font-size: 1.2em;"><a href="https://www.tripadvisor.com.pe/ShowUserReviews-g294316-d14918493-r665543838-Inkan_Milky_Way_Tours_Lima-Lima_Lima_Region.html" target="_blank">Great free tour in Lima!</a></h4>
                                        <div class="row">
                                            <div class="col-3 pr-1">
                                                <div class="mt-4">
                                                    <img src="{{asset('images/lima/tripadvisor-review-4-about-free-walking-tour-lima.jpg')}}" alt="review for Lima free tour from tripadvisor" class="img-thumbnail">
                                                    <div class="p-2">
                                                        <p class="mb-1">Granadindia </p>
                                                        <p class="mb-1">India</p>
                                                        <p class="mb-1">On <a href="https://www.tripadvisor.com.pe/ShowUserReviews-g294316-d14918493-r665543838-Inkan_Milky_Way_Tours_Lima-Lima_Lima_Region.html" target="_blank"><i class="fab fa-tripadvisor fa-lg" aria-hidden="true"></i></a> </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-9">
                                                <span class="star5 py-2 d-block">My rating: </span>
                                                <p>Had Elvis as our tour guide and had a speaker with easy to understand English. He gave an excellent overview of Lima city center along with historical and political context. He gave us recommendations on what to see next. Remember that this is not a private or paid tour, so you won’t see specifics but for what it is, it’s a great overview! If you are looking for something more customized this may not be the tour for you!</p>
                                            </div>
                                        </div>

                                    </div>

                                </div>
                                <div class="item px-4 pt-2 m-3 rounded pb-0 bg-white">
                                    <div class="block-test pb-1">
                                        <h4 class="text-center" style="font-size: 1.2em;"><a href="https://www.tripadvisor.com.pe/ShowUserReviews-g294316-d14918493-r665543838-Inkan_Milky_Way_Tours_Lima-Lima_Lima_Region.html" target="_blank">Explore Lima with a great guide!</a></h4>
                                        <div class="row">
                                            <div class="col-3 pr-1">
                                                <div class="mt-4">
                                                    <img src="{{asset('images/lima/tripadvisor-review-5-about-free-walking-tour-lima.jpg')}}" alt="review for Lima free tour from tripadvisor" class="img-thumbnail">
                                                    <div class="p-2">
                                                        <p class="mb-1">Stussycdn </p>
                                                        <p class="mb-1">Canada</p>
                                                        <p class="mb-1">On <a href="https://www.tripadvisor.com.pe/ShowUserReviews-g294316-d14918493-r665543838-Inkan_Milky_Way_Tours_Lima-Lima_Lima_Region.html" target="_blank"><i class="fab fa-tripadvisor fa-lg" aria-hidden="true"></i></a> </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-9">
                                                <span class="star5 py-2 d-block">My rating: </span>
                                                <p>Today we chose to do the free walking tour of Lima. We met our guide (Elvis) in Miraflores near our hotel, he showed us how to use the public bus system and he then showed us the historic part of Lima. Lots of interesting background information. And he finished the tour by showing us a great (and very cheap - S 12) lunch spot (Cordon Blue). A great way to get a quick introduction to Lima and Peru!</p>
                                            </div>
                                        </div>

                                    </div>

                                </div>
                                <div class="item px-4 pt-2 m-3 rounded pb-0 bg-white">
                                    <div class="block-test pb-1">
                                        <h4 class="text-center" style="font-size: 1.2em;"><a href="https://www.tripadvisor.com.pe/ShowUserReviews-g294316-d14918493-r661892647-Inkan_Milky_Way_Tours_Lima-Lima_Lima_Region.html" target="_blank">Free walking tour- Lima!</a></h4>
                                        <div class="row">
                                            <div class="col-3 pr-1">
                                                <div class="mt-4">
                                                    <img src="{{asset('images/lima/tripadvisor-review-6-about-free-walking-tour-lima.jpg')}}" alt="review for Lima free tour from tripadvisor" class="img-thumbnail">
                                                    <div class="p-2">
                                                        <p class="mb-1">Sheneka H </p>
                                                        <p class="mb-1">New Zeland</p>
                                                        <p class="mb-1">On <a href="https://www.tripadvisor.com.pe/ShowUserReviews-g294316-d14918493-r661892647-Inkan_Milky_Way_Tours_Lima-Lima_Lima_Region.html" target="_blank"><i class="fab fa-tripadvisor fa-lg" aria-hidden="true"></i></a> </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-9">
                                                <span class="star5 py-2 d-block">My rating: </span>
                                                <p>I stumbled on to this walking tour through a google search. It was well organized. Elvis, the tour guide was knowledgeable and funny. He gave us an extensive city tour with so many historical points. The tour was well paced with short breaks. Couldn’t have found a tour that would have been better than this!</p>
                                            </div>
                                        </div>

                                    </div>

                                </div>
                                <div class="item px-4 pt-2 m-3 rounded pb-0 bg-white">
                                    <div class="block-test pb-1">
                                        <h4 class="text-center" style="font-size: 1.2em;"><a href="https://www.tripadvisor.com.pe/ShowUserReviews-g294316-d14918493-r661892647-Inkan_Milky_Way_Tours_Lima-Lima_Lima_Region.html" target="_blank">Easy way to see the city!</a></h4>
                                        <div class="row">
                                            <div class="col-3 pr-1">
                                                <div class="mt-4">
                                                    <img src="{{asset('images/lima/tripadvisor-review-7-about-free-walking-tour-lima.jpg')}}" alt="review for Lima free tour from tripadvisor" class="img-thumbnail">
                                                    <div class="p-2">
                                                        <p class="mb-1">Monet R </p>
                                                        <p class="mb-1">Sweden</p>
                                                        <p class="mb-1">On <a href="https://www.tripadvisor.com.pe/ShowUserReviews-g294316-d14918493-r661892647-Inkan_Milky_Way_Tours_Lima-Lima_Lima_Region.html" target="_blank"><i class="fab fa-tripadvisor fa-lg" aria-hidden="true"></i></a> </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-9">
                                                <span class="star5 py-2 d-block">My rating: </span>
                                                <p>Our guide Pepe Lucho was fantastic! Elvis helped us get from Miraflores on the Metropolitan Bus (super efficient and cheap) to the centre where we met Pepe Lucho, who took the English tour. He was very knowledgeable and answered all tricky questions. He made the tour fun and interesting, and dropped us off at a decent, cheap restaurant at the end. He gave us instructions on how to get back to Miraflores on our own. Very good way to see the centre and learn a bit about the history of Lima and Peru!</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                            </div>
                        </div>
                    </section>
                </div>
                    </div>
                </article>
            </section>

                                    @endif
                                    @if(strtolower($destino_grupos->destino->nombre) == 'cusco')
                                              <section class="section04">
                <article>
                    <div class="container">
                        <h3 class="text-center h3 text-white pt-4 mb-0" style="font-size: 1.5em;">@lang('home.check_cusco_free_tours')</h3>
                        <div class="row">
                        <section class="carrousel container pb-4">
                            <div class="row testimonial">
                              <div class="owl-carousel owl-theme">

                               <div class="item px-4 pt-2 m-3 rounded pb-0 bg-white">
                                    <div class="block-test pb-1">
                                        <h4 class="text-center" style="font-size: 1.2em;"><a href="https://www.facebook.com/pg/freewalkingtourscusco/reviews/?ref=page_internal" target="_blank">Great Free Walking Tour in Cusco!</a></h4>
                                        <div class="row">
                                            <div class="col-3 pr-1">
                                                        <div class="mt-4">
                                                            <img src="{{asset('images/cusco/facebook-review-1-about-free-walking-tour-cusco.jpg')}}" alt="review for Cusco free tour from facebook" class="img-thumbnail">
                                                             <div class="p-2">
                                                                <p class="mb-1">Megan Adam</p>
                                                                <p class="mb-1">United States</p>
                                                                <p class="mb-1">On <a href="https://www.facebook.com/pg/freewalkingtourscusco/reviews/?ref=page_internal" target="_blank"><i class="fab fa-facebook-square 3x" aria-hidden="true"></i></a> </p>
                                                             </div>
                                                        </div>
                                            </div>
                                            <div class="col-9">
                                                <span class="star5 py-2 d-block">My rating:  </span>
                                                <p>Great walking tour. Easy to find. Our guide Elvis was very knowledgeable. Even though our group was not too big, he had a microphone so it was easy to hear him. At the end he brought us to a shop where we tried local fruit. Highly recommended for those visiting Cusco!!</p>
                                            </div>
                                        </div>

                                    </div>

                                </div>

                                <div class="item px-4 pt-2 m-3 rounded pb-0 bg-white">
                                    <div class="block-test pb-1">
                                        <h4 class="text-center" style="font-size: 1.2em;"><a href="https://www.facebook.com/pg/freewalkingtourscusco/reviews/?ref=page_internal" target="_blank">Educational and Fascinating free walking tour!</a></h4>
                                        <div class="row">
                                            <div class="col-3 pr-1">
                                                        <div class="mt-4">
                                                            <img src="{{asset('images/cusco/facebook-review-2-about-free-walking-tour-cusco.jpg')}}" alt="review for Cusco free tour from facebook" class="img-thumbnail">
                                                             <div class="p-2">
                                                                <p class="mb-1">Lisa Holden</p>
                                                                <p class="mb-1">New Zeland</p>
                                                                <p class="mb-1">On <a href="https://www.facebook.com/pg/freewalkingtourscusco/reviews/?ref=page_internal" target="_blank" ><i class="fab fa-facebook-square 3x" aria-hidden="true"></i></a> </p>
                                                             </div>
                                                        </div>
                                            </div>
                                            <div class="col-9">
                                                <span class="star5 py-2 d-block">My rating:  </span>
                                                <p>We enjoyed an educational and fascinating walking tour today with Roger who was very knowledgeable and interested in his town of Cusco, he answered all the questions professionally, he also recommended the best hings to do at the end of the tour, Notde that this tour won´t take you to bars!</p>
                                            </div>
                                        </div>

                                    </div>

                                </div>

                                <div class="item px-4 pt-2 m-3 rounded pb-0 bg-white">
                                    <div class="block-test pb-1">
                                        <h4 class="text-center" style="font-size: 1.2em;"><a href="https://www.tripadvisor.com.pe/ShowUserReviews-g294314-d7238744-r681945295-Inkan_Milky_Way_Tours_Cusco-Cusco_Cusco_Region.html" target="_blank">Historical - cultural Tour of Cusco!</a></h4>
                                        <div class="row">
                                            <div class="col-3 pr-1">
                                                        <div class="mt-4">
                                                            <img src="{{asset('images/cusco/tripadvisor-review-1-about-free-walking-tour-cusco.jpg')}}" alt="review for Cusco free tour from tripadvisor" class="img-thumbnail">
                                                             <div class="p-2">
                                                                <p class="mb-1">AndyTsoi</p>
                                                                <p class="mb-1">United Kingdom</p>
                                                                <p class="mb-1">On <a href="https://www.tripadvisor.com.pe/ShowUserReviews-g294314-d7238744-r681945295-Inkan_Milky_Way_Tours_Cusco-Cusco_Cusco_Region.html" target="_blank"><i class="fab fa-tripadvisor fa-lg" aria-hidden="true"></i></a> </p>
                                                             </div>
                                                        </div>
                                            </div>
                                            <div class="col-9">
                                                <span class="star5 py-2 d-block">My rating:  </span>
                                                <p>A really informative and personable guide Angie, Cusco native , took us for really amazing tour of the city! The market where we learned about the traditions and local food ,tried local fruit , learned all we needed to know about coca leaves for attitude sickness, botanical garden with colorful explanation of SanPedro ceremony!</p>
                                            </div>
                                        </div>

                                    </div>

                                </div>


                                <div class="item px-4 pt-2 m-3 rounded pb-0 bg-white">
                                    <div class="block-test pb-1">
                                        <h4 class="text-center" style="font-size: 1.2em;"><a href="https://www.facebook.com/pg/freewalkingtourscusco/reviews/?ref=page_internal" target="_blank">Free Cusco Walking Tour with Real Tour Guides!</a></h4>
                                        <div class="row">
                                            <div class="col-3 pr-1">
                                                        <div class="mt-4">
                                                            <img src="{{asset('images/cusco/facebook-review-3-about-free-walking-tour-cusco.jpg')}}" alt="review for Cusco free tour from facebook" class="img-thumbnail">
                                                             <div class="p-2">
                                                                <p class="mb-1">Franziska Klever </p>
                                                                <p class="mb-1">Germany</p>
                                                                <p class="mb-1">On <a href="https://www.facebook.com/pg/freewalkingtourscusco/reviews/?ref=page_internal" target="_blank" ><i class="fab fa-facebook-square 3x" aria-hidden="true"></i></a> </p>
                                                             </div>
                                                        </div>
                                            </div>
                                            <div class="col-9">
                                                <span class="star5 py-2 d-block">My rating:  </span>
                                                <p>We did our free walking tour with Richard, who was very keen to show us the history of the city, it was so interesting and we got to know a lot about the Inkas and Cusco itself. I would highly recommended to go with Richard and his crew! Thanks again!!! Cheers from Germany!</p>
                                            </div>
                                        </div>

                                    </div>

                                </div>

                                <div class="item px-4 pt-2 m-3 rounded pb-0 bg-white">
                                    <div class="block-test pb-1">
                                        <h4 class="text-center" style="font-size: 1.2em;"><a href="https://www.facebook.com/pg/freewalkingtourscusco/reviews/?ref=page_internal" target="_blank">Good Experience in Cusco!</a></h4>
                                        <div class="row">
                                            <div class="col-3 pr-1">
                                                        <div class="mt-4">
                                                            <img src="{{asset('images/cusco/facebook-review-4-about-free-walking-tour-cusco.jpg')}}" alt="review for Cusco free tour from facebook" class="img-thumbnail">
                                                             <div class="p-2">
                                                                <p class="mb-1">Léa-Tuc Menager </p>
                                                                <p class="mb-1">France</p>
                                                                <p class="mb-1">On <a href="https://www.facebook.com/pg/freewalkingtourscusco/reviews/?ref=page_internal" target="_blank" ><i class="fab fa-facebook-square 3x" aria-hidden="true"></i></a> </p>
                                                             </div>
                                                        </div>
                                            </div>
                                            <div class="col-9">
                                                <span class="star5 py-2 d-block">My rating:  </span>
                                                <p>We took the afternoon free historical tour, our guide was really friendly, spoke good english and knew à lot about the city ! I highly recommended, especiallay to all those visitors trying to experience this city by the first time, definetely a great orientation tour in Cuzco centre!</p>
                                            </div>
                                        </div>

                                    </div>

                                </div>

                               <div class="item px-4 pt-2 m-3 rounded pb-0 bg-white">
                                    <div class="block-test pb-1">
                                        <h4 class="text-center" style="font-size: 1.2em;"><a href="https://www.tripadvisor.com.pe/ShowUserReviews-g294314-d7238744-r680576006-Inkan_Milky_Way_Tours_Cusco-Cusco_Cusco_Region.html" target="_blank">Fantastic free tour!</a></h4>
                                        <div class="row">
                                            <div class="col-3 pr-1">
                                                        <div class="mt-4">
                                                            <img src="{{asset('images/cusco/tripadvisor-review-2-about-free-walking-tour-cusco.jpg')}}" alt="review for Cusco free tour from tripadvisor" class="img-thumbnail">
                                                             <div class="p-2">
                                                                <p class="mb-1">DepartureF </p>
                                                                <p class="mb-1">England</p>
                                                                <p class="mb-1">On <a href="https://www.tripadvisor.com.pe/ShowUserReviews-g294314-d7238744-r680576006-Inkan_Milky_Way_Tours_Cusco-Cusco_Cusco_Region.html" target="_blank" ><i class="fab fa-tripadvisor fa-lg" aria-hidden="true"></i></a> </p>
                                                             </div>
                                                        </div>
                                            </div>
                                            <div class="col-9">
                                                <span class="star5 py-2 d-block">My rating:  </span>
                                                <p>The tour guide was excellent, very knowledgeable. Tour was very interesting highly recommend. The highlight was certainly the very interesting facts about Peruvian history, including the fact that there was 15 Incas, 40 Vice-Royce, and 61 Peruvian Presidents!</p>
                                            </div>
                                        </div>

                                    </div>

                                </div>

                                <div class="item px-4 pt-2 m-3 rounded pb-0 bg-white">
                                    <div class="block-test pb-1">
                                        <h4 class="text-center" style="font-size: 1.2em;"><a href="https://www.tripadvisor.com.pe/ShowUserReviews-g294314-d7238744-r680227705-Inkan_Milky_Way_Tours_Cusco-Cusco_Cusco_Region.html" target="_blank">Amazing first day activity!</a></h4>
                                        <div class="row">
                                            <div class="col-3 pr-1">
                                                        <div class="mt-4">
                                                            <img src="{{asset('images/cusco/tripadvisor-review-3-about-free-walking-tour-cusco.jpg')}}" alt="review for Cusco free tour from tripadvisor" class="img-thumbnail">
                                                             <div class="p-2">
                                                                <p class="mb-1">Jamie C </p>
                                                                <p class="mb-1">Australia</p>
                                                                <p class="mb-1">On <a href="https://www.tripadvisor.com.pe/ShowUserReviews-g294314-d7238744-r680227705-Inkan_Milky_Way_Tours_Cusco-Cusco_Cusco_Region.html" target="_blank" ><i class="fab fa-tripadvisor fa-lg" aria-hidden="true"></i></a> </p>
                                                             </div>
                                                        </div>
                                            </div>
                                            <div class="col-9">
                                                <span class="star5 py-2 d-block">My rating:  </span>
                                                <p>We went on a free walking tour with Richard. We just landed Cusco 3 hours prior and the tour not only freshened us up, but also gave us an informative and great impression of the city. Richard is very attentive and chill, I certainly recommend everyone to do this on their first day!</p>
                                            </div>
                                        </div>

                                    </div>

                                </div>
                                <div class="item px-4 pt-2 m-3 rounded pb-0 bg-white">
                                    <div class="block-test pb-1">
                                        <h4 class="text-center" style="font-size: 1.2em;"><a href="https://www.tripadvisor.com.pe/ShowUserReviews-g294314-d7238744-r679988444-Inkan_Milky_Way_Tours_Cusco-Cusco_Cusco_Region.html" target="_blank">Great walking tour!</a></h4>
                                        <div class="row">
                                            <div class="col-3 pr-1">
                                                        <div class="mt-4">
                                                            <img src="{{asset('images/cusco/tripadvisor-review-4-about-free-walking-tour-cusco.jpg')}}" alt="review for Cusco free tour from tripadvisor" class="img-thumbnail">
                                                             <div class="p-2">
                                                                <p class="mb-1">Dipal S </p>
                                                                <p class="mb-1">India</p>
                                                                <p class="mb-1">On <a href="https://www.tripadvisor.com.pe/ShowUserReviews-g294314-d7238744-r679988444-Inkan_Milky_Way_Tours_Cusco-Cusco_Cusco_Region.html" target="_blank" ><i class="fab fa-tripadvisor fa-lg" aria-hidden="true"></i></a> </p>
                                                             </div>
                                                        </div>
                                            </div>
                                            <div class="col-9">
                                                <span class="star5 py-2 d-block">My rating:  </span>
                                                <p>We did the 10am walking tour around cusco with Cesar (guide). It was a great tour explaining the sites around cusco as well as inca culture. The tour lasted nearly 3hrs. In addition our guide has lots of advise about cusco (restaurants, other sites) which was very helpful. Would highly recommend!</p>
                                            </div>
                                        </div>

                                    </div>

                                </div>
                                <div class="item px-4 pt-2 m-3 rounded pb-0 bg-white">
                                    <div class="block-test pb-1">
                                        <h4 class="text-center" style="font-size: 1.2em;"><a href="https://www.tripadvisor.com.pe/ShowUserReviews-g294314-d7238744-r679522662-Inkan_Milky_Way_Tours_Cusco-Cusco_Cusco_Region.html" target="_blank">Perfect intro to Cusco!</a></h4>
                                        <div class="row">
                                            <div class="col-3 pr-1">
                                                        <div class="mt-4">
                                                            <img src="{{asset('images/cusco/tripadvisor-review-5-about-free-walking-tour-cusco.jpg')}}" alt="review for Cusco free tour from tripadvisor" class="img-thumbnail">
                                                             <div class="p-2">
                                                                <p class="mb-1">Conor G </p>
                                                                <p class="mb-1">Canada</p>
                                                                <p class="mb-1">On <a href="https://www.tripadvisor.com.pe/ShowUserReviews-g294314-d7238744-r679522662-Inkan_Milky_Way_Tours_Cusco-Cusco_Cusco_Region.html" target="_blank" ><i class="fab fa-tripadvisor fa-lg" aria-hidden="true"></i></a> </p>
                                                             </div>
                                                        </div>
                                            </div>
                                            <div class="col-9">
                                                <span class="star5 py-2 d-block">My rating:  </span>
                                                <p>Our guide Cesar, was very informative and spoke excellent English. This tour was a great intro to Cusco, Incan history and Cusco recommendations. We have some great tips for the rest of our trip in the Cusco area (Old historical city centre) Thanks!</p>
                                            </div>
                                        </div>

                                    </div>

                                </div>



                              </div>
                            </div>
            </section>
            </div>
                    </div>
                </article>
            </section>
               @endif
                  @if(strtolower($destino_grupos->destino->nombre) == 'arequipa')
                                             <section class="section04">
                <article>
                    <div class="container">
                        <h3 class="text-center h3 text-white pt-4 mb-0" style="font-size: 1.5em;">@lang('home.check_arequipa_free_tours')</h3>
                        <div class="row">
                <section class="carrousel container pb-4">
                    <div class="row testimonial">
                        <div class="owl-carousel owl-theme">

                            <div class="item px-4 pt-2 m-3 rounded pb-0 bg-white">
                                <div class="block-test pb-1">
                                    <h4 class="text-center" style="font-size: 1.2em;"><a href="https://www.facebook.com/pg/arequipafreewalkingtour/reviews/?ref=page_internal" target="_blank">Excellent Arequipa tour with Angela today!</a></h4>
                                    <div class="row">
                                        <div class="col-3 pr-1">
                                            <div class="mt-4">
                                                <img src="{{asset('images/arequipa/facebook-review-1-about-free-walking-tour-arequipa.jpg')}}" alt="review for Arequipa free tour from tripadvisor" class="img-thumbnail">
                                                <div class="p-2">
                                                    <p class="mb-1">Backtomars </p>
                                                    <p class="mb-1">France</p>
                                                    <p class="mb-1">On <a href="https://www.facebook.com/pg/arequipafreewalkingtour/reviews/?ref=page_internal" target="_blank"><i class="fab fa-facebook-square 3x" aria-hidden="true"></i></a> </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-9">
                                            <span class="star5 py-2 d-block">My rating:  </span>
                                            <p>Thank you so much! I first started another tour but the guide got there late, I didn't like his energy & they let me out of the church because I was wearing short pants... (Well, let know before the tour or just skip it) So I escape & joined Angela's. She took us straight to some very nice & quiet areas. The tour was neither too long nor too short, very interesting mixing cultural, historical, architectural, artistic as well as cultural infos. It was great to listen to her count detailled storie, I just had an absolutely lovely time. I don't usually do tours but that one was really really good!</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item px-4 pt-2 m-3 rounded pb-0 bg-white">
                                <div class="block-test pb-1">
                                    <h4 class="text-center" style="font-size: 1.2em;"><a href="https://www.tripadvisor.com.pe/ShowUserReviews-g294313-d6023591-r670012970-Free_Tour_Downtown_Arequipa-Arequipa_Arequipa_Region.html" target="_blank">A Nice Well Tour!</a></h4>
                                    <div class="row">
                                        <div class="col-3 pr-1">
                                            <div class="mt-4">
                                                <img src="{{asset('images/arequipa/tripadvisor-review-1-about-free-walking-tour-arequipa.jpg')}}" alt="review for arequipa free tour from tripadvisor" class="img-thumbnail">
                                                <div class="p-2">
                                                    <p class="mb-1">Andrei </p>
                                                    <p class="mb-1">Brazil</p>
                                                    <p class="mb-1">On <a href="https://www.tripadvisor.com.pe/ShowUserReviews-g294313-d6023591-r670012970-Free_Tour_Downtown_Arequipa-Arequipa_Arequipa_Region.html" target="_blank"><i class="fab fa-tripadvisor fa-lg" aria-hidden="true"></i></a> </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-9">
                                            <span class="star5 py-2 d-block">My rating:  </span>
                                            <p>I  did the spanish tour with Edgar, and it was about two hours walking around downtown Arequipa. We visited a couple of casonas and churchs, where Edgar explained about the architecture style and history of Arequipa. He also explained about Arequipa's cuisine, the volcanos and clothes stores which sells Alpacas!</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item px-4 pt-2 m-3 rounded pb-0 bg-white">
                                <div class="block-test pb-1">
                                    <h4 class="text-center" style="font-size: 1.2em;"><a href="https://www.tripadvisor.com.pe/ShowUserReviews-g294313-d6023591-r623361317-Free_Tour_Downtown_Arequipa-Arequipa_Arequipa_Region.html" target="_blank">Interesting tour!</a></h4>
                                    <div class="row">
                                        <div class="col-3 pr-1">
                                            <div class="mt-4">
                                                <img src="{{asset('images/arequipa/tripadvisor-review-2-about-free-walking-tour-arequipa.jpg')}}" alt="review for arequipa free tour from tripadvisor" class="img-thumbnail">
                                                <div class="p-2">
                                                    <p class="mb-1">Beatriz </p>
                                                    <p class="mb-1">Gibraltar</p>
                                                    <p class="mb-1">On <a href="https://www.tripadvisor.com.pe/ShowUserReviews-g294313-d6023591-r623361317-Free_Tour_Downtown_Arequipa-Arequipa_Arequipa_Region.html" target="_blank"><i class="fab fa-tripadvisor fa-lg" aria-hidden="true"></i></a> </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-9">
                                            <span class="star5 py-2 d-block">My rating:  </span>
                                            <p>We went on this tour on our last day in arequipa. Our tour guide was Angela, a very nice girl who introduced us to the history and facts about Arequipa. The tour was very interesting and not boring at all. We really enjoyed the two hours! Not only we could discover some spots in the city we would not have found out otherwise but we could also receive information about places we had already been.The guide suggested places and gave us tips about the city. Totally recommend it if you have some time!</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item px-4 pt-2 m-3 rounded pb-0 bg-white">
                                <div class="block-test pb-1">
                                    <h4 class="text-center" style="font-size: 1.2em;"><a href="https://www.tripadvisor.com.pe/ShowUserReviews-g294313-d6023591-r618664626-Free_Tour_Downtown_Arequipa-Arequipa_Arequipa_Region.html" target="_blank">Interesting & informative!</a></h4>
                                    <div class="row">
                                        <div class="col-3 pr-1">
                                            <div class="mt-4">
                                                <img src="{{asset('images/arequipa/tripadvisor-review-3-about-free-walking-tour-arequipa.jpg')}}" alt="review for arequipa free tour from tripadvisor" class="img-thumbnail">
                                                <div class="p-2">
                                                    <p class="mb-1">Anupriya </p>
                                                    <p class="mb-1">India</p>
                                                    <p class="mb-1">On <a href="https://www.tripadvisor.com.pe/ShowUserReviews-g294313-d6023591-r618664626-Free_Tour_Downtown_Arequipa-Arequipa_Arequipa_Region.html" target="_blank"><i class="fab fa-tripadvisor fa-lg" aria-hidden="true"></i></a> </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-9">
                                            <span class="star5 py-2 d-block">My rating:  </span>
                                            <p>My biggest mistake on this tour was that I did it on my last day in Arequipa & hence I couldnt really make the most of it Our guide was super entertaining & funny and well versed with the history & politics of the place. He gave us lots & lots of tips. I was short on time so I couldnt really make use of his tips well. I think the only thing to improve is eating tips - he didnt tell us any particular place we should definitely try.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item px-4 pt-2 m-3 rounded pb-0 bg-white">
                                <div class="block-test pb-1">
                                    <h4 class="text-center" style="font-size: 1.2em;"><a href="https://www.tripadvisor.com.pe/ShowUserReviews-g294313-d6023591-r616055537-Free_Tour_Downtown_Arequipa-Arequipa_Arequipa_Region.html" target="_blank">Funny guide & great way to see Arequipa!</a></h4>
                                    <div class="row">
                                        <div class="col-3 pr-1">
                                            <div class="mt-4">
                                                <img src="{{asset('images/arequipa/tripadvisor-review-4-about-free-walking-tour-arequipa.jpg')}}" alt="review for arequipa free tour from tripadvisor" class="img-thumbnail">
                                                <div class="p-2">
                                                    <p class="mb-1">Christie </p>
                                                    <p class="mb-1">United States</p>
                                                    <p class="mb-1">On <a href="https://www.tripadvisor.com.pe/ShowUserReviews-g294313-d6023591-r616055537-Free_Tour_Downtown_Arequipa-Arequipa_Arequipa_Region.html" target="_blank"><i class="fab fa-tripadvisor fa-lg" aria-hidden="true"></i></a> </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-9">
                                            <span class="star5 py-2 d-block">My rating:  </span>
                                            <p>Had a really great tour guide, he spoke great English and was very funny! We learnt heaps about Arequipa and got to see lots of things that we definitely would not have seen without the tour. He was super helpful and gave loads of recommendations throughout the tour. Would definitely recommend!</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item px-4 pt-2 m-3 rounded pb-0 bg-white">
                                <div class="block-test pb-1">
                                    <h4 class="text-center" style="font-size: 1.2em;"><a href="https://www.tripadvisor.com.pe/ShowUserReviews-g294313-d6023591-r600932110-Free_Tour_Downtown_Arequipa-Arequipa_Arequipa_Region.html" target="_blank">Arequipa Free downtown walking tour!</a></h4>
                                    <div class="row">
                                        <div class="col-3 pr-1">
                                            <div class="mt-4">
                                                <img src="{{asset('images/arequipa/tripadvisor-review-5-about-free-walking-tour-arequipa.jpg')}}" alt="review for arequipa free tour from tripadvisor" class="img-thumbnail">
                                                <div class="p-2">
                                                    <p class="mb-1">Celine </p>
                                                    <p class="mb-1">France</p>
                                                    <p class="mb-1">On <a href="https://www.tripadvisor.com.pe/ShowUserReviews-g294313-d6023591-r600932110-Free_Tour_Downtown_Arequipa-Arequipa_Arequipa_Region.html" target="_blank"><i class="fab fa-tripadvisor fa-lg" aria-hidden="true"></i></a> </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-9">
                                            <span class="star5 py-2 d-block">My rating:  </span>
                                            <p>Excellent tour, very interesting with a very passionate and funny guide. All in English. Do it as soon as you arrive to get a lot of information about the city culture, history, food, places to visit. Thank you to the guides who do an amazing job! Don't hesitate to tip generously, it's worth any professional visit!</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item px-4 pt-2 m-3 rounded pb-0 bg-white">
                                <div class="block-test pb-1">
                                    <h4 class="text-center" style="font-size: 1.2em;"><a href="https://www.tripadvisor.com.pe/ShowUserReviews-g294313-d6023591-r586151485-Free_Tour_Downtown_Arequipa-Arequipa_Arequipa_Region.html" target="_blank">Fun for our Teenagers!</a></h4>
                                    <div class="row">
                                        <div class="col-3 pr-1">
                                            <div class="mt-4">
                                                <img src="{{asset('images/arequipa/tripadvisor-review-6-about-free-walking-tour-arequipa.jpg')}}" alt="review for arequipa free tour from tripadvisor" class="img-thumbnail">
                                                <div class="p-2">
                                                    <p class="mb-1">Christymmd </p>
                                                    <p class="mb-1">Scotland</p>
                                                    <p class="mb-1">On <a href="https://www.tripadvisor.com.pe/ShowUserReviews-g294313-d6023591-r586151485-Free_Tour_Downtown_Arequipa-Arequipa_Arequipa_Region.html" target="_blank"><i class="fab fa-tripadvisor fa-lg" aria-hidden="true"></i></a> </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-9">
                                            <span class="star5 py-2 d-block">My rating:  </span>
                                            <p>We took the 3 pm tour and had a great time visiting interesting places in Arequipa and learning about the culture and history. Our guide was energetic, passionate, and obviously loves his country. We ended up returning for dinner to the restaurant where the tour began- Gringo Wasi, which was a lot of fun. We wished we'd had more time in Arequipa to revisit some of the other recommended places.!</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </section>
            </div>
                    </div>
                </article>
            </section>
                                    @endif

            <section class="section01">
                <article>
                    <div class="container p-4">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="bg-white p-4">
                                    <div class="row">
                                        <div class="col-12">
                                            {{--                                        <h2 class="text-center" style="font-size: 1.2em;" >What is a free walking tour in Lima?</h2>--}}
                                            {{--                                        <p align="justify">Many tourists traveling in Lima wonder whether the free walking tours are really free of charge? The answer is the same all over the world: except for bus fares, it is without cost to take; however, at the end of the excursion, tips are very much appreciated. However, you may wonder how much to tip? Reward your excellent tour guide in direct proportion to the tour quality; you can tip in the local currency, USA dollars or Euros! | Some tourists also ask whether our free tours in Lima are as good as the paid ones? We think our tours are first-rate because our guide does their best to earn your appreciation and gratitude. Therefore, free tours are the most popularatours all over the world. </p>--}}
                                            @php echo $destino_grupos->que_porque; @endphp
                                        </div>
                                        {{--                                    <div class="col-12">--}}
                                        {{--                                        <h2 class="text-center" style="font-size: 1.2em;">Why free walking tours in Lima?</h2>--}}
                                        {{--                                        <p align="justify">Back in 2014, we decided to open the first alternative way of touring: Free walking tours! Since then, we have done well. This experience started in Cusco city. We are not the owners of the Free Tour Concept. That recognition goes to Christopher Sandman, who was the person to open The Free Walking tour Concept in Berlin, Germany, back in 2003. Since then, this idea has raced nonstop all around the world. | We are Peruvians who worked abroad because of the crisis in our country at the beginning of the 21st century; this means we have been to many parts of Europe and America working and traveling. Luckily we joined Free Walking Tours in many countries. One day, back in 2014, we decided to settle down in Cusco and introduce this tour idea. | Back in 2017, because of customer demands, we decided to extend this excellent tip based free tour idea in Lima city. So far, so good! Please help us to increase the history and the prestige of these innovative tours by joining us!</p>--}}
                                        {{--                                    </div>--}}

                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="boxtext bg-white">
                                    <div class="container pt-2">
                                        <h5 class="text-center" style="font-size: 1.2em;">@lang('home.pictures_of')</h5>
                                        <div class="row">
                                            <div class="" id="slider">
                                                <div id="myCarousel" class="carousel slide">
                                                    <!-- main slider carousel items -->

                                                    <div class="carousel-inner">
                                                        @php $active_c = 0;  @endphp
                                                        @foreach ($destino_grupos->imagenes->where('estado','2') as $foto)
                                                            @if (Storage::disk('destino_grupo')->has($foto->imagen))

                                                                <div class="carousel-item {{ $active_c === 0 ? "active" : " " }}" data-slide-number="{{$active_c}}">
                                                                    <div class="carrusell px-2">
                                                                        <img  src="{{route('admin.destino_grupo.get_imagen.path',$foto->imagen) }}" class="img-fluid rounded" alt="Customers and tour Guides from free walking tour lima on action">
                                                                    </div>
                                                                </div>
                                                                @php $active_c++;  @endphp
                                                            @endif
                                                        @endforeach


                                                        {{--                                                    <div class="carousel-item" data-slide-number="1">--}}
                                                        {{--                                                        <div class="carrusell px-2">--}}
                                                        {{--                                                            <img  src="{{asset('images/lima/customers-and-tour-guides-from-free-walking-tour-lima-on-action-in-the-city-center.jpg')}}" class="img-fluid rounded" alt="Customers and tour Guides from free tour lima city on action">--}}
                                                        {{--                                                        </div>--}}
                                                        {{--                                                    </div>--}}

                                                        <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
                                                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                            <span class="sr-only">Previous</span>
                                                        </a>
                                                        <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
                                                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                            <span class="sr-only">Next</span>
                                                        </a>

                                                    </div>
                                                    <!-- main slider carousel nav controls -->
                                                    <ul class="carousel-indicators list-inline mx-auto  mb-0 px-2">
                                                        @php $active_s = 0;  @endphp
                                                        @foreach ($destino_grupos->imagenes->where('estado','2') as $foto)
                                                            @if (Storage::disk('destino_grupo')->has($foto->imagen))

                                                                <li class="list-inline-item {{ $active_s === 0 ? "active" : " " }}">
                                                                    <a id="carousel-selector-0" class="selected" data-slide-to="{{$active_s}}" data-target="#myCarousel">
                                                                        <img src="{{route('admin.destino_grupo.get_imagen.path',$foto->imagen) }}" alt="Customers and tour Guides from free tour lima on action" class="img-fluid rounded">
                                                                    </a>
                                                                </li>

                                                                @php $active_s++;  @endphp
                                                            @endif
                                                        @endforeach


                                                    </ul>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </article>
            </section>

            <section class="section01 py-3">
                <article class="maxw3">
                    <div class="container px-1">
                        <div class="bg-dark1">
                            <div class="bot py-3 text-center  d-none d-sm-block">
                                <a role="button" href="#book" class="btn btn-lg px-5">@lang('home.book_now')</a>
                            </div>
                            <div class="bot py-3 text-center  d-sm-none d-block">
                                <a role="button" href="#title-aside" class="btn btn-lg px-5">@lang('home.book_now')</a>
                            </div>
                        </div>

                    </div>
                </article>
            </section>
    <section class="mp-3 section01 pt-3">
        <article class="maxw3">
            <h5 class="text-center h5 bg-white p-2 shadow mb-0 mx-1" style="font-size: 1.2em;">@lang('home.a_detailed_description')</h5>
            <div class="container">
                <div class="row">

                    @foreach($destino_grupos->imagenes->where('estado', 3) as $imagenes)
                        @if (Storage::disk('destino_grupo')->has($imagenes->imagen))
                            <div class="col-sm-6 my-1 px-1">
                                <div class="box-foot p-3  bg-white shadow-sm">
                                    <h6 class="text-center h6">{{$imagenes->titulo}}</h6>
                                    <img src="{{ route('admin.destino_grupo.get_imagen.path',$imagenes->imagen) }}" class="img-fluid rounded" alt="jiron de la union colonial street lima peru by free tour lima">
                                    {{--                        <div class="p-2 text-justify"><p>If there is something that genuinely stands out in the historic center of Lima, that is the Jirón de la Unión, a street of the Damero de Pizarro (Damero means checkerboard-like designed city). This street already existed in the colonial era called Calle de Los Mercaderes (The Merchant Street) and was an extremely commercial place but at the beginning of the Republican era it was renamed  as Jiron de La Unión because it joins the old colonial city with the Republican City —whatever was built after 1821—and remains very commercial although lost its aristocratic feature. <br>--}}
                                    {{--                                Jirón de la Unión is a broad street, where there is much to see, this starts from the Rimac River ( Puente Piedra or Puente Trujillo), while in the second block, there is the Government Palace of Peru on the western side, but on the eastern side you will find the Post Office of Lima. The Flag Park is also located nearby. There are the Plaza Mayor of Lima and the Municipal and Union Palaces in the third block. In the fourth and fifth block, you can find the exclusive pedestrian path along with shops selling clothes and shoes, and in the sixth, you will see the Church and Convent of La Merced. This street ends at San Martin Plaza.</p>--}}
                                    {{--                        </div>--}}
                                    {!! $imagenes->descripcion !!}
                                </div>
                            </div>
                        @endif
                    @endforeach

                </div>
            </div>
        </article>
    </section>
            <section class="bg-dark1 py-2 py-sm-4" id="faqs">
                <div class="container maxw3">
                    <div class="box-faqs bg-white p-3">
                        <h3 class="text-center h3" style="font-size: 1.5em;">Faqs</h3>

                        <ul class="list-unstyled pl-2 pl-sm-4 ml-2 ml-sm-0">


                            @foreach($destino_grupos->preguntas as $preguntas)
                                <li>{{$preguntas->pregunta}}(<a href="#" class="alternar-respuesta">View</a>)</li>
                                <div class="respuesta" style="display:none">
                                    @php echo $preguntas->respuesta @endphp
                                </div>
                            @endforeach

                        </ul>


                    </div>
                </div>
            </section>
            <section class="section01 py-3">
                <article class="maxw3">
                    <div class="container px-1">
                        <div class="bg-dark1">
                            <div class="bot py-3 text-center  d-none d-sm-block">
                                <a role="button" href="#book" class="btn btn-lg px-5">@lang('home.book_now')</a>
                            </div>
                            <div class="bot py-3 text-center  d-sm-none d-block">
                                <a role="button" href="#title-aside" class="btn btn-lg px-5">@lang('home.book_now')</a>
                            </div>
                        </div>

                    </div>
                </article>
            </section>
@endif




    @endsection

@push('scripts')
    <script>
        function change_idioma($id, $idioma) {

            var datos = {
                "id" : $id,
                "idioma" : $idioma,
            };
            $.ajax({
                data:  datos,
{{--                url:   "{{route('lang_agrupados_path')}}",--}}
                type:  'get',
                success:  function (response) {
                    location.reload();
                }
            });
        }
    </script>
    <script>
        $(document).ready(function()
        {
            $(document).on('submit', '#reg-form', function()
            {
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });

                var data = $(this).serialize();
                $.ajax({
                    type : 'POST',
                    url  : '{{route('send_email_path')}}',
                    data : data,
                    success :  function(data)
                    {
                        $("#reg-form").fadeOut(500).hide(function()
                        {
                            $(".result").fadeIn(500).show(function()
                            {
                                $(".result").html(data);
                            });
                        });

                    }
                });
                return false;
            });
        });

        $('#datepicker').datepicker({
            onSelect: function(dateText) {
                $('#datepicker2').datepicker("setDate", $(this).datepicker("getDate"));
            }
        });

        $(document).ready(function() {
            var owl = $('.owl-carousel');
            owl.owlCarousel({
                items:4,
                loop:true,
                margin:10,
                autoplay:true,
                autoplayTimeout:3000,
                autoplayHoverPause:true,
                responsiveClass:true,
                responsive:{
                    0:{
                        items:1,
                        nav:false
                    },
                    600:{
                        items:2,
                        nav:false
                    },
                    1000:{
                        items:3,
                        nav:false,
                        loop:true
                    }
                }
            });

        });
    </script>
@endpush
