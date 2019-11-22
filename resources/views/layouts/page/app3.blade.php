<!doctype html>
@yield('content')







<section class="text-center">
    @include('layouts.page.footer')
</section>


<script src="{{asset("js/app.js")}}"></script>
<script src="{{asset("js/plugins.js")}}"></script>

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
