@extends('layouts.page.app')
    @section('content')

        @foreach($destino_grupo as $destino_grupos)

            @include('layouts.page.nav-home-agrupados')

            @foreach ($destino_grupos->imagenes->where('estado','0') as $foto)
                @if (Storage::disk('destino_grupo')->has($foto->imagen))
                    <section>
                        <picture>
                            <source media="(max-width: 550px)" srcset="{{asset('images/lima/free-walking-tours-lima-central-mobile.jpg')}}">
                            <img src="{{route('admin.destino_grupo.get_imagen.path',$foto->imagen) }}" class="w-100" alt="free walking tour lima, full english">
                        </picture>
                    </section>

                @endif
            @endforeach

{{$locale}}
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
                                                Why to reserve with us?
                                            </h6>
                                            <hr class="my-2">
                                            <div class="row">
                                                <div class="col-7">
                                                    <ul class="liswhy pl-3 list-unstyled">
                                                        <li>100% Indigenous Team</li>
                                                        <li>It´s Free to Book!</li>
                                                        <li>You help Local People!</li>
                                                        <li>Instant Confirmation!</li>
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


                                    <a target="_blank" href="https://api.whatsapp.com/send?phone=51958745640&text=Hello,%20Can%20you%20help%20me%20pls?" class="d-none d-sm-inline-block  btn btn-free"><i class="fa fa-whatsapp" aria-hidden="true"></i> +51 958745640</a>
                                    <a href="https://api.whatsapp.com/send?phone=51958745640&text=Hello,%20Can%20you%20help%20me%20pls?" class="mb-2 d-inline-block d-sm-none  btn btn-free"><i class="fa fa-whatsapp" aria-hidden="true"></i> +51 958745640</a>
                                    <a href="https://api.whatsapp.com/send?phone=51984479073&text=Hello,%20Can%20you%20help%20me%20pls?" class="mb-2 d-inline-block d-sm-none  btn btn-free"><i class="fa fa-whatsapp" aria-hidden="true"></i> +51 984479073</a>
                                    <a target="_blank" href="https://api.whatsapp.com/send?phone=51984479073&text=Hello,%20Can%20you%20help%20me%20pls?" class="d-none d-sm-inline-block  btn btn-free"><i class="fa fa-whatsapp" aria-hidden="true"></i> +51 984479073</a>
                                    <a href="#title-tour" class="mb-2 mb-sm-0  btn btn-free px-5"><i class="fa fa-list-ul" aria-hidden="true"></i> Itinerary</a>


                                    <a href="#title-aside" class="mb-2 mb-sm-0  btn btn-free px-5 d-inline-block d-sm-none"><i class="fa fa-calendar" aria-hidden="true"></i> Book Now</a>
                                    <a target="_blank" href="#faqs" class="mb-2 mb-sm-0  btn btn-free px-5 "><i class="fa fa-question-circle-o" aria-hidden="true"></i> FAQs</a>


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
<!--                            --><?php //include ('../includes/booking-aside-lima.php') ?>
                            @include('layouts.page.booking-aside-lima')

                        </aside>
                    </div>
                </div>
            </div>
            </div>
        </section>
        <section class="section03 maxw2" id="title-tour">
            <article>
                <div class="container py-4">
                    <h2 class="text-center" style="font-size: 1.5em;">Read Detailed Itinerary of each tour:</h2>
                    <p class="text-success text-center">(btw you can only book one, the routes are similar for all of them)</p>
                    <div class="row">

                        @foreach ($destino_grupos->destino->tours as $tours)
                        <div class="col-sm-4 mb-3 mb-sm-0">
                            <div class="box-tours my-sm-2 my-1">
                                <a href="{{route('destination_tour_path', [strtolower(str_replace(' ','-', $destino_grupos->destino->nombre )), strtolower(str_replace(' ','-', $tours->url ))])}}" target="_blank">
                                    @foreach ($tours->imagenes->where('estado','0') as $foto)
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
                                    <a target="_blank" href="{{route('destination_tour_path', [strtolower(str_replace(' ','-', $destino_grupos->destino->nombre )), strtolower(str_replace(' ','-', $tours->url ))])}}" target="_blank" class="btn btn-free">Info & Booking</a>

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
<!--                --><?php //include ('../includes/booking-aside-lima-sm.php') ?>
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
                                <img src="{{asset('images/lima/logo-lima.jpg')}}" class="img-fluid" alt="free walking tour lima logo uniform">
                            </div>

                        </div>
                        @foreach ($destino_grupos->destino->lugares_recojo as $lugares_recojos)
{{--                            @foreach($destino->lugares_recojo as $lugares_recojos)--}}
{{--                                {{$lugares_recojo}}--}}
                        <div class="col-sm-4">
                            <div class="box-green text-center">
                                <div class="bg-success p-1 text-center text-white"><span class="">10am | Pick Up - Meeting Place in Miraflores district is at Calle Schell 178!</span></div>
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

        <section class="section04">
            <article>
                <div class="container">
                    <h3 class="text-center h3 text-white pt-4 mb-0" style="font-size: 1.5em;">Check our 100% Real Reviews for our Lima Free Tours</h3>
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
                                                    <span class="star5 py-2 d-block">My rating: <i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i> </span>
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
                                                    <span class="star5 py-2 d-block">My rating: <i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i> </span>
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
                                                    <span class="star5 py-2 d-block">My rating: <i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i> </span>
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
                                                            <p class="mb-1">On <a href="https://www.facebook.com/pg/limafreewalkingtour/reviews/?ref=page_internal" target="_blank"><i class="fa fa-facebook-official fa-lg" aria-hidden="true"></i></a> </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-9">
                                                    <span class="star5 py-2 d-block">My rating: <i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i> </span>
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
                                                    <span class="star5 py-2 d-block">My rating: <i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i> </span>
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
                                                    <span class="star5 py-2 d-block">My rating: <i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i> </span>
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
                                                    <span class="star5 py-2 d-block">My rating: <i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i> </span>
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
                                                    <span class="star5 py-2 d-block">My rating: <i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i> </span>
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
                                    <h5 class="text-center" style="font-size: 1.2em;">Pictures of our Walkers & Guides on Action!</h5>
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
                            <a role="button" href="#book" class="btn btn-lg px-5">Book Now</a>
                        </div>
                        <div class="bot py-3 text-center  d-sm-none d-block">
                            <a role="button" href="#title-aside" class="btn btn-lg px-5">Book Now</a>
                        </div>
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
                                <p class="respuesta" style="display:none">
                                    @php echo $preguntas->respuesta @endphp
                                </p>
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
                            <a role="button" href="#book" class="btn btn-lg px-5">Book Now</a>
                        </div>
                        <div class="bot py-3 text-center  d-sm-none d-block">
                            <a role="button" href="#title-aside" class="btn btn-lg px-5">Book Now</a>
                        </div>
                    </div>

                </div>
            </article>
        </section>
    @endforeach
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
                var data = $(this).serialize();
                $.ajax({
                    type : 'POST',
                    url  : '../submitlima.php',
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
