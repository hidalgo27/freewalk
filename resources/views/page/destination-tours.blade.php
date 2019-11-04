@extends('layouts.page.app')
@section('content')

{{--@foreach($tour as $tours)--}}

    @include('layouts.page.nav-home-tours')

{{--<section>--}}
{{--    <!-- 	<img src="../img/free-walking-tours-lima-home.jpg" alt="slider" class="img-fluid"> -->--}}

{{--    <picture>--}}
{{--        @foreach ($tour->imagenes->where('estado','0') as $foto)--}}
{{--            @if (Storage::disk('tours')->has($foto->imagen))--}}
{{--                <source media="(max-width: 550px)" srcset="../img/lima/free-walkings-lima-portrait-mobile.jpg">--}}
{{--                <img src="{{ route('admin.tour.get_imagen.path',$foto->imagen) }}" class="w-100" alt="lima sightseeing tour on foot from miraflores">--}}
{{--            @endif--}}
{{--        @endforeach--}}

{{--    </picture>--}}

{{--</section>--}}

<section>
    <picture>
        @foreach ($tour->imagenes->where('estado','5') as $foto2)
            @if (Storage::disk('tours')->has($foto2->imagen))
                <source media="(max-width: 550px)" srcset="{{ route('admin.tour.get_imagen.path', $foto2->imagen) }}">
            @endif
        @endforeach
            @foreach ($tour->imagenes->where('estado','0') as $foto)
            @if (Storage::disk('tours')->has($foto->imagen))
                <img src="{{ route('admin.tour.get_imagen.path',$foto->imagen) }}" class="w-100" alt="free walking tours in peru">
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

<!--                    --><?php //include ('../includes/booking-aside-lima.blade.php') ?>
                        @include('layouts.page.booking-aside-tours')

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

                    @foreach ($tour->imagenes->where('estado','1') as $foto)
                        @if (Storage::disk('tours')->has($foto->imagen))

                        <div class="item  pt-2 rounded pb-0 bg-white">
                            <div class="tit-carrusel" align="center">
                                <p class="mb-1">{{$foto->titulo}}</p>
                            </div>
                            <img src="{{ route('admin.tour.get_imagen.path',$foto->imagen) }}" alt="Lima sightseeing tour on Local Transportation System, metropolitano">
                        </div>

                        @endif
                    @endforeach


                </div>
            </div>
        </section>
    </div>
</article>


<section class="col">
    <div class="d-sm-none d-block" id="title-book">
<!--        --><?php //include ('../includes/booking-aside-lima-sm.php') ?>
        @include('layouts.page.booking-aside-tours')
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
                            @foreach ($tour->lugar_recojo->traducciones->where('idioma', $locale) as $lugar_recojo_idioma)
                                @foreach ($lugar_recojo->where('id', $lugar_recojo_idioma->lugar_recojo_relacion_id) as $l_recojo)
                                    <div class="bg-success p-1 text-center text-white"><span class="">{{$l_recojo->titulo}}</span></div>
                                    @php echo $l_recojo->iframe @endphp
                                @endforeach
                            @endforeach
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
