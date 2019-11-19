<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
{{--    <title>🥇Free Walking Tour Peru | Lima | Cusco| Arequipa | Miraflores </title>--}}
{{--    <meta content="Get your Original Free Walking Tour in Lima, Cusco and Arequipa, more than 3000 reviews on TripAdvisor, Best Free Tours in Peru" name="description" />--}}
    <!--     <meta content="Free Walking Tour Lima, Arequipa, Cusco, Miraflores, Barranco, free tour, historical centre tours" name="keywords" /> -->
    {!! SEOMeta::generate() !!}
    {!! OpenGraph::generate() !!}

    @yield('hreflang')
{{--    {!! Twitter::generate() !!}--}}
{{--    {!! JsonLd::generate() !!}--}}
    <!-- OR -->
{{--    {!! SEO::generate() !!}--}}

{{--    <link rel="alternate" hreflang="es" href="https://www.freewalkingtoursperu.com/es/" />--}}
{{--    <link rel="alternate" hreflang="en" href="https://www.freewalkingtoursperu.com">--}}

{{--    <meta name="author" content="Free Walking Tours" />--}}

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
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<body>


@yield('content')

<section class="text-center">
    @include('layouts.page.footer')
</section>


<!-- end contenido -->


<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="{{asset("js/app.js")}}"></script>
<script src="{{asset("js/plugins.js")}}"></script>
{{--<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>--}}
{{--<script src="js/script.js"></script>--}}
@stack('scripts')
<script>




    // jQuery
    $(document).ready(function(){
        $('.alternar-respuesta').on('click',function(e){
            $(this).parent().next().toggle('slow');
            e.preventDefault();
        });
        $('#alternar-todo').on('click',function(e){
            $('.respuesta').toggle('slow');
            e.preventDefault();
        });
    });


    (function($){$.fn.menumaker=function(options){var cssmenu=$(this),settings=$.extend({title:"Menu",format:"dropdown",sticky:false},options);return this.each(function(){cssmenu.prepend('<div id="menu-button">'+settings.title+'</div>');$(this).find("#menu-button").on('click',function(){$(this).toggleClass('menu-opened');var mainmenu=$(this).next('ul');if(mainmenu.hasClass('open')){mainmenu.hide().removeClass('open');}else{mainmenu.show().addClass('open');if(settings.format==="dropdown"){mainmenu.find('ul').show();}}});cssmenu.find('li ul').parent().addClass('has-sub');multiTg=function(){cssmenu.find(".has-sub").prepend('<span class="submenu-button"></span>');cssmenu.find('.submenu-button').on('click',function(){$(this).toggleClass('submenu-opened');if($(this).siblings('ul').hasClass('open')){$(this).siblings('ul').removeClass('open').hide();}else{$(this).siblings('ul').addClass('open').show();}});};if(settings.format==='multitoggle')multiTg();else cssmenu.addClass('dropdown');if(settings.sticky===true)cssmenu.css('position','fixed');resizeFix=function(){if($(window).width()>768){cssmenu.find('ul').show();}if($(window).width()<=768){cssmenu.find('ul').hide().removeClass('open');}};resizeFix();return $(window).on('resize',resizeFix);});};})(jQuery);(function($){$(document).ready(function(){$(document).ready(function(){$("#cssmenu").menumaker({title:"",format:"multitoggle"});$("#cssmenu").prepend("<div id='menu-line'></div>");var foundActive=false,activeElement,linePosition=0,menuLine=$("#cssmenu #menu-line"),lineWidth,defaultPosition,defaultWidth;$("#cssmenu > ul > li").each(function(){if($(this).hasClass('active')){activeElement=$(this);foundActive=true;}});if(foundActive===false){activeElement=$("#cssmenu > ul > li").first();}defaultWidth=lineWidth=activeElement.width();defaultPosition=linePosition=activeElement.position().left;menuLine.css("width",lineWidth);menuLine.css("left",linePosition);$("#cssmenu > ul > li").hover(function(){activeElement=$(this);lineWidth=activeElement.width();linePosition=activeElement.position().left;menuLine.css("width",lineWidth);menuLine.css("left",linePosition);},function(){menuLine.css("left",defaultPosition);menuLine.css("width",defaultWidth);});});});})(jQuery);

    $(window).on('scroll', function(){
        if ( $(window).scrollTop() > 100 ){
            $('.navbar').addClass('shadows');
        } else {
            $('.navbar').removeClass('shadows');
        }
    });



   $(function() {
        $("#datepicker2").datepicker({ dateFormat: "dd/mm/yy" }).val();
    });


    $(function() {
        $('#datepicker3').datepicker({
            onSelect: function(dateText) {
                $('#datepicker4').datepicker("setDate", $(this).datepicker("getDate"));
            }
        });
    });

    $(function() {
        $("#datepicker4").datepicker({ dateFormat: "dd/mm/yy" }).val();
    });

   





    // Select all links with hashes
    $('a[href*="#"]')
    // Remove links that don't actually link to anything
        .not('[href="#"]')
        .not('[href="#0"]')
        .click(function(event) {
            // On-page links
            if (
                location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '')
                &&
                location.hostname == this.hostname
            ) {
                // Figure out element to scroll to
                var target = $(this.hash);
                target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
                // Does a scroll target exist?
                if (target.length) {
                    // Only prevent default if animation is actually gonna happen
                    event.preventDefault();
                    $('html, body').animate({
                        scrollTop: target.offset().top
                    }, 1000, function() {
                        // Callback after animation
                        // Must change focus!
                        var $target = $(target);
                        $target.focus();
                        if ($target.is(":focus")) { // Checking if the target was focused
                            return false;
                        } else {
                            $target.attr('tabindex','-1'); // Adding tabindex for elements not focusable
                            $target.focus(); // Set focus again
                        };
                    });
                }
            }
        });
</script>
</body>
</html>
