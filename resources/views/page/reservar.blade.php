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
                    <li><a class="flag" href="/en/booking" rel="alternate" hreflang="es"><img src="{{asset('images/en.png')}}" alt="flag spanish"></a></li>
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

    <!-- end slider -->

    <!-- contenido -->

    <div>
        <div class="fonc"><h1 class="text-center h2 py-sm-4 py-2 fondx text-uppercase"> ¡Reserva Ya!</h1></div>

    </div>

    <section class="container">
        <div class="row p-1 p-sm-3 p-md-3">
            <div class="col-sm-7 px-1 px-sm-5">
                <main>
                    <article class="text-justify">
                            <p>Reservar con nosotros es muy fácil, una vez que hagas tu pedido de reserva te enviaremos una respuesta <b>Instantánea con los Detalles de tu Confirmación</b> y estarás listo para atender a nuestros tours a pie.
                            </p>
                            <p><span class="text-danger">Si el calendario no funciona, escribe la fecha de tu free tour en la casilla de mensaje o envíenos un mensaje via whatsapp o llámenos! Vea los números abajo!</span></p>

                        </article>
                    <article>
                       <h2 class="text-success" style="text-align: center;">Selecciona Tu Ciudad por favor!</h2>
                    </article>
                </main>

                <!-- <div class="col-sm-5 mx-auto border border-secondary rounded my-4 peru">
                    <h3 class="h4 text-center my-1"><span class="flag-icon flag-icon-pe"></span> Why to reserve with us? <span class="flag-icon flag-icon-pe"></span> </h3>

                        <ul class="liswhy">
                            <li>100% Indigenous Organization.</li>
                            <li>It is completely FREE to book.</li>
                            <li>It takes less than 1 min.</li>
                            <li>Instant Confirmation.</li>
                        </ul>

                </div> -->

                <section class="book-form">
            <div id="horizontalTab">
            <ul class="resp-tabs-list horz">
            <li class="text-uppercase">Cusco</li>
            <li class="text-uppercase">Lima</li>
            <li class="text-uppercase">Arequipa</li>
            </ul>
            <div class="resp-tabs-container">
            <div>
                <div class="form-cusco mx-1 mx-sm-5 px-1 px-sm-5">
                  <div class="result">  
                    <form method="post" id="reg-form">
                        <div class="form-group">
                            <label for="yourname">Nombre:</label>
                            <input type="text" id="name" name="fname2" class="form-control" placeholder="Escribe tu nombre"  required data-error="Escribe tu nombre">
                         </div>
                         <div class="form-group">
                            <label for="youremail">Correo:</label>
                            <input type="email" class="form-control" id="email" name="email2" placeholder="Escribe bien tu correo por favor"  required data-error="Por favor ingrese su correo">
                         </div>
                         <div class="form-group">
                            <label for="sizegroup">Tamaño de grupo:</label>
                              <select class="form-control" id="size" name="lname2"  required data-error="Tamaño de grupo" >
                                <option value="" disabled selected>Tamaño de grupo</option>
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                                <option>6</option>
                                <option>7</option>
                                <option>8</option>
                                <option>9</option>
                                <option>10</option>
                               </select>
                         </div>
                         <div class="form-group">
                            <label for="starting">Horario de inicio de free tour</label>
                              <select class="form-control" name="nombretour2" id="ciudad"> 
                                 <option value="" disabled selected>Elije el Horario de tu Free Tour</option>
                                 <option value="cusco-10am">Free Tour Cusco 10am </option>
                                 <option value="cusco-1pm">Free Tour Cusco 1pm </option>
                                 <option value="cusco-3-30pm">Free Tour Cusco 3:30pm </option>
                                 <option value="cusco-10am-domingo">Free Tour Cusco Domingo 10am </option>
                               </select>
                         </div>
                         <div class="form-group">
                            <label for="date">Fecha:</label>
                            <input  class="form-control" type="text" id="datepicker" name="date2" placeholder="Escribe tu fecha">
                            
                         </div>
                         <div class="form-group">
                            <label for="message">Mensaje:</label>
                            <textarea id="message" name="phno2" rows="3" placeholder="IMPORTANTE para CUSCO: Todos los Domingos tenemos solamente free tour a las 10AM." class="form-control place-are" ></textarea>
                         </div>
                         <div class="text-center">
                            <button type="submit" class="btn btn-send btn-lg px-5 ">Enviar mi Reserva</button>
                         </div>
                         <div id="msgSubmit" class="h3 text-center hidden"></div> 
                        

                    </form>
                </div>
                </div>
            </div>
            <div>
                
                <div class="form-lima mx-1 mx-sm-5 px-1 px-sm-5">
                    <div class="result1">
                    <form method="post" id="reg-form1">
                        <div class="form-group">
                            <label for="yourname">Nombre:</label>
                            <input type="text" id="name1" name="fname1" class="form-control" placeholder="Escribe tu nombre"  required data-error="Escribe tu nombre">
                         </div>
                         <div class="form-group">
                            <label for="youremail">Correo:</label>
                            <input type="email" class="form-control" id="email2" name="email1" placeholder="Escribe bien tu correo por favor"  required data-error="Por favor ingrese su correo">
                         </div>
                         <div class="form-group">
                            <label for="sizegroup">Tamaño de grupo:</label>
                              <select class="form-control" id="size1" name="lname1"  required data-error="Tamaño de grupo" >
                                <option value="" disabled selected>Tamaño de grupo</option>
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                                <option>6</option>
                                <option>7</option>
                                <option>8</option>
                                <option>9</option>
                                <option>10</option>
                               </select>
                         </div>
                         <div class="form-group">
                            <label for="starting">Horario de inicio de free tour</label>
                              <select class="form-control" name="nombretour1" id="ciudad1"> 
                                <option value="" disabled selected>Elije el Horario de tu Free Tour</option>
                                <option value="lima-10am">Free Tour Lima Centro 10am(Recogida en Mrflrs)</option>
                                <option value="lima-11am">Free Tour Lima Centro 11am </option>
                                <option value="lima-3pm">Free Tour Lima Centro 3pm</option>
                               </select>
                         </div>
                         <div class="form-group">
                            <label for="date">Fecha:</label>
                            <input  class="form-control" type="text" id="datepicker1" name="date1" placeholder="Escribe tu fecha">
                         </div>
                         <!-- <div class="form-group">
                            <label for="message">Mensaje:</label>
                            <textarea id="message1" name="phno1" rows="7" placeholder="Nota Importante para Lima: Los Domingos NO operamos Free Tours." class="form-control" ></textarea>
                         </div> -->
                         <div class="form-group">
                            <label for="message">Mensaje:</label>
                            <textarea id="message" name="phno2" rows="7" placeholder="NOTA para LIMA 2019: Estaremos operando todos los Domingos en las sgtes fechas: Septiembre 29, | Octubre 06, 13, 20, 27, | Noviembre 03, 10 y 17 a las 10am y 11am(NO 3pm), No reserves ninguna otra fecha que sea Domingo, a no ser que quieras tu free tour Lima de Lunes a Sábado!" class="form-control place-are" ></textarea>
                         </div>
                         <div class="text-center">
                            <button type="submit" class="btn btn-send btn-lg px-5 ">Enviar mi Reserva</button>
                         </div>
                         <div id="msgSubmit" class="h3 text-center hidden"></div> 
                        
                    </form>
                </div>
                </div>
            
            </div>
            <div>
                
                <div class="form-cusco mx-1 mx-sm-5 px-1 px-sm-5">
                    <div class="result2">
                    <form method="post" id="reg-form2">
                        <div class="form-group">
                            <label for="yourname">Nombre:</label>
                            <input type="text" id="name2" name="fname3" class="form-control" placeholder="Escribe tu nombre"  required data-error="Escribe tu nombre">
                         </div>
                         <div class="form-group">
                            <label for="youremail">Correo:</label>
                            <input type="email" class="form-control" id="email4" name="email3" placeholder="Escribe bien tu correo por favor"  required data-error="Por favor ingrese su correo">
                         </div>
                         <div class="form-group">
                            <label for="sizegroup">Tamaño de grupo:</label>
                              <select class="form-control" id="size2" name="lname3"  required data-error="Tamaño de grupo" >
                                <option value="" disabled selected>Tamaño de grupo</option>
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                                <option>6</option>
                                <option>7</option>
                                <option>8</option>
                                <option>9</option>
                                <option>10</option>
                               </select>
                         </div>
                         <div class="form-group">
                            <label for="starting">Horario de inicio de free tour</label>
                                <select class="form-control" name="nombretour3" id="ciudad2"> 
                                    <option value="" disabled selected>Elije el Horario de tu Free Tour</option>
                                    <option value="arequipa-10am">Free Tour Arequipa 10am </option>
                                    <option value="arequipa-3pm">Free Tour Arequipa 3pm </option>
                                 </select>
                         </div>
                         <div class="form-group">
                            <label for="date">Fecha:</label>
                            <input  class="form-control" type="text" id="datepicker2" name="date3" placeholder="Escribe tu fecha">
                         </div>
                         <div class="form-group">
                            <label for="message">Mensaje:</label>
                            <textarea id="message" name="phno2" rows="3" placeholder="IMPORTANTE para AREQUIPA: Todos los free tours los Domingos son solamente en Inglés." class="form-control place-are" ></textarea>
                         </div>

                         <div class="text-center">
                            <button type="submit" class="btn btn-send btn-lg px-5 ">Enviar mi Reserva</button>
                         </div>

                         <div id="msgSubmit" class="h3 text-center hidden"></div> 
                        

                    </form>
                </div>
                </div>
            
            </div>
            </div>
            </div>
        </section>

            </div>
            <div class="col-sm-5">
                    <aside class="px-3">
                        <h4 class="text-center"><span class="h4"><i class="fas fa-mobile-alt" aria-hidden="true"></i></span> Contato -  No para Reservar </h4>
                            <div style="text-align: center;">
                             <p><b>Cusco:</b><br> 
                            <i class="fas fa-mobile-alt" aria-hidden="true"></i> <a href="https://api.whatsapp.com/send?phone=51958745640&text=Hola,%20puedes%20ayudarme?" target="_blank">(+51)958 745 640</a><br>
                            <i class="fas fa-mobile-alt" aria-hidden="true"></i> <a href="https://api.whatsapp.com/send?phone=51984479073&text=Hola,%20puedes%20ayudarme?" target="_blank">(+51)984 479 073</a></p>
                          <p><b>Lima:</b><br>
                            <i class="fas fa-mobile-alt" aria-hidden="true"></i> <a href="https://api.whatsapp.com/send?phone=51958745640&text=Hola,%20puedes%20ayudarme?" target="_blank">(+51)958 745 640</a><br>
                            <i class="fas fa-mobile-alt" aria-hidden="true"></i> <a href="https://api.whatsapp.com/send?phone=51984479073&text=Hola,%20puedes%20ayudarme?" target="_blank">(+51)984 479 073</a></p>
                          <p><b>Arequipa:</b><br>
                            <i class="fas fa-mobile-alt" aria-hidden="true"></i> <a href="https://api.whatsapp.com/send?phone=51958745640&text=Hola,%20puedes%20ayudarme?" target="_blank">(+51)958 745 640</a><br>
                            <i class="fas fa-mobile-alt" aria-hidden="true"></i> <a href="https://api.whatsapp.com/send?phone=51984479073&text=Hola,%20puedes%20ayudarme?" target="_blank">(+51)984 479 073</a></p>
                         </div>
                        <h4 class="text-center"><span class="h4"><i class="fas fa-map-marker-alt" aria-hidden="true"></i></span> Revisa bien tu Punto de Encuentro de acuerdo a la Ciudad por favor!</h4>
                        <div class="row">
                            <div class="col-sm-6">
                                <h6 class="text-center my-1"><b>Lima 10am | Recogida</b></h6>
                                <a data-fancybox="gallery" href="{{asset('images/lima/tours-gratis-lima-parte-desde-miraflores.jpg')}}">
                                    <img src="{{asset('images/lima/tours-gratis-lima-parte-desde-miraflores.jpg')}}" class="img-thumbnail">
                                </a>
                            </div>
                            <div class="col-sm-6">
                                <h6 class="text-center my-1"><b>Lima 11 am & 3pm</b></h6>
                                <a data-fancybox="gallery" href="{{asset('images/lima/city-tours-lima-alternativo-espanol-punto-de-encuentro.jpg')}}">
                                    <img src="{{asset('images/lima/city-tours-lima-alternativo-espanol-punto-de-encuentro.jpg')}}" class="img-thumbnail">
                                </a>
                            </div>
                            <div class="col-sm-6">
                                <h6 class="text-center my-1"><b>Arequipa</b></h6>
                                <a data-fancybox="gallery" href="{{asset('images/arequipa/free-walking-tour-arequipa-punto-de-encuentro-espanol.jpg')}}">
                                    <img src="{{asset('images/arequipa/free-walking-tour-arequipa-punto-de-encuentro-espanol.jpg')}}" class="img-thumbnail">
                                </a>
                            </div>
                            <div class="col-sm-6">
                                <h6 class="text-center my-1"><b>Cusco</b></h6>
                                <a data-fancybox="gallery" href="{{asset('images/cusco/punto-de-encuentro-free-walking-tour-cusco-espanol.jpg')}}">
                                    <img src="{{asset('images/cusco/punto-de-encuentro-free-walking-tour-cusco-espanol.jpg')}}" class="img-thumbnail">
                                </a>
                            </div>
                        </div>


                    </aside>
                </div>

        </div>
    </section>
@endsection
@push('scripts')
    <script type="text/javascript">
        $(document).ready(function()
        {

            $(document).on('submit', '#reg-form', function()
            {

                var data = $(this).serialize();

                $.ajax({

                    type : 'POST',
                    url  : '../submitcusco.php',
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
    </script>

    <script type="text/javascript">
        $(document).ready(function()
        {

            $(document).on('submit', '#reg-form1', function()
            {

                var data = $(this).serialize();

                $.ajax({

                    type : 'POST',
                    url  : '../submitlima.php',
                    data : data,
                    success :  function(data)
                    {
                        $("#reg-form1").fadeOut(500).hide(function()
                        {
                            $(".result1").fadeIn(500).show(function()
                            {
                                $(".result1").html(data);
                            });
                        });

                    }
                });
                return false;
            });
        });
    </script>

    <script type="text/javascript">
        $(document).ready(function()
        {

            $(document).on('submit', '#reg-form2', function()
            {

                var data = $(this).serialize();

                $.ajax({

                    type : 'POST',
                    url  : '../submitarequipa.php',
                    data : data,
                    success :  function(data)
                    {
                        $("#reg-form2").fadeOut(500).hide(function()
                        {
                            $(".result2").fadeIn(500).show(function()
                            {
                                $(".result2").html(data);
                            });
                        });

                    }
                });
                return false;
            });
        });
    </script>

    <script>
        // Easy Responsive Tabs Plugin
        (function ($) {
            $.fn.extend({
                easyResponsiveTabs: function (options) {
                    //Set the default values, use comma to separate the settings, example:
                    var defaults = {
                        type: 'default', //default, vertical, accordion;
                        width: 'auto',
                        fit: true,
                        closed: false,
                        activate: function(){}
                    }
                    //Variables
                    var options = $.extend(defaults, options);
                    var opt = options, jtype = opt.type, jfit = opt.fit, jwidth = opt.width, vtabs = 'vertical', accord = 'accordion';

                    //Events
                    $(this).bind('tabactivate', function(e, currentTab) {
                        if(typeof options.activate === 'function') {
                            options.activate.call(currentTab, e)
                        }
                    });

                    //Main function
                    this.each(function () {
                        var $respTabs = $(this);
                        var $respTabsList = $respTabs.find('ul.resp-tabs-list');
                        $respTabs.find('ul.resp-tabs-list li').addClass('resp-tab-item');
                        $respTabs.css({
                            'display': 'block',
                            'width': jwidth
                        });

                        $respTabs.find('.resp-tabs-container > div').addClass('resp-tab-content');
                        jtab_options();
                        //Properties Function
                        function jtab_options() {
                            if (jtype == vtabs) {
                                $respTabs.addClass('resp-vtabs');
                            }
                            if (jfit == true) {
                                $respTabs.css({ width: '100%', margin: '0px' });
                            }
                            if (jtype == accord) {
                                $respTabs.addClass('resp-easy-accordion');
                                $respTabs.find('.resp-tabs-list').css('display', 'none');
                            }
                        }

                        //Assigning the h2 markup to accordion title
                        var $tabItemh2;
                        $respTabs.find('.resp-tab-content').before("<h2 class='resp-accordion' role='tab'><span class='resp-arrow'></span></h2>");

                        var itemCount = 0;
                        $respTabs.find('.resp-accordion').each(function () {
                            $tabItemh2 = $(this);
                            var innertext = $respTabs.find('.resp-tab-item:eq(' + itemCount + ')').html();
                            $respTabs.find('.resp-accordion:eq(' + itemCount + ')').append(innertext);
                            $tabItemh2.attr('aria-controls', 'tab_item-' + (itemCount));
                            itemCount++;
                        });

                        //Assigning the 'aria-controls' to Tab items
                        var count = 0,
                            $tabContent;
                        $respTabs.find('.resp-tab-item').each(function () {
                            $tabItem = $(this);
                            $tabItem.attr('aria-controls', 'tab_item-' + (count));
                            $tabItem.attr('role', 'tab');

                            //First active tab, keep closed if option = 'closed' or option is 'accordion' and the element is in accordion mode
                            if (screen.width >= 600) {



                                if(options.closed !== true && !(options.closed === 'accordion' && !$respTabsList.is(':visible')) && !(options.closed === 'tabs' && $respTabsList.is(':visible'))) {
                                    $respTabs.find('.resp-tab-item').first().addClass('resp-tab-active');
                                    $respTabs.find('.resp-accordion').first().addClass('resp-tab-active');
                                    $respTabs.find('.resp-tab-content').first().addClass('resp-tab-content-active').attr('style', 'display:block');
                                }


                            }

                            else
                            {

                                if(options.closed !== false && !(options.closed === 'accordion' && !$respTabsList.is(':visible')) && !(options.closed === 'tabs' && $respTabsList.is(':visible'))) {
                                    $respTabs.find('.resp-tab-item').first().addClass('resp-tab-active');
                                    $respTabs.find('.resp-accordion').first().addClass('resp-tab-active');
                                    $respTabs.find('.resp-tab-content').first().addClass('resp-tab-content-active').attr('style', 'display:block');
                                }


                            }

                            //Assigning the 'aria-labelledby' attr to tab-content
                            var tabcount = 0;
                            $respTabs.find('.resp-tab-content').each(function () {
                                $tabContent = $(this);
                                $tabContent.attr('aria-labelledby', 'tab_item-' + (tabcount));
                                tabcount++;
                            });
                            count++;
                        });

                        //Tab Click action function
                        $respTabs.find("[role=tab]").each(function () {
                            var $currentTab = $(this);
                            $currentTab.click(function () {

                                var $tabAria = $currentTab.attr('aria-controls');

                                if ($currentTab.hasClass('resp-accordion') && $currentTab.hasClass('resp-tab-active')) {
                                    $respTabs.find('.resp-tab-content-active').slideUp('', function () { $(this).addClass('resp-accordion-closed'); });
                                    $currentTab.removeClass('resp-tab-active');
                                    return false;
                                }
                                if (!$currentTab.hasClass('resp-tab-active') && $currentTab.hasClass('resp-accordion')) {
                                    $respTabs.find('.resp-tab-active').removeClass('resp-tab-active');
                                    $respTabs.find('.resp-tab-content-active').slideUp().removeClass('resp-tab-content-active resp-accordion-closed');
                                    $respTabs.find("[aria-controls=" + $tabAria + "]").addClass('resp-tab-active');

                                    $respTabs.find('.resp-tab-content[aria-labelledby = ' + $tabAria + ']').slideDown().addClass('resp-tab-content-active');
                                } else {
                                    $respTabs.find('.resp-tab-active').removeClass('resp-tab-active');
                                    $respTabs.find('.resp-tab-content-active').removeAttr('style').removeClass('resp-tab-content-active').removeClass('resp-accordion-closed');
                                    $respTabs.find("[aria-controls=" + $tabAria + "]").addClass('resp-tab-active');
                                    $respTabs.find('.resp-tab-content[aria-labelledby = ' + $tabAria + ']').addClass('resp-tab-content-active').attr('style', 'display:block');
                                }
                                //Trigger tab activation event
                                $currentTab.trigger('tabactivate', $currentTab);
                            });
                            //Window resize function
                            $(window).resize(function () {
                                $respTabs.find('.resp-accordion-closed').removeAttr('style');
                            });
                        });
                    });
                }
            });
        })(jQuery);

        $(document).ready(function () {
            $('#horizontalTab').easyResponsiveTabs({
                type: 'default', //Types: default, vertical, accordion
                width: 'auto', //auto or any width like 600px
                fit: true,   // 100% fit in a container
                closed: 'accordion', // Start closed if in accordion view
                activate: function(event) { // Callback function if tab is switched
                    var $tab = $(this);
                    var $info = $('#tabInfo');
                    var $name = $('span', $info);
                    $name.text($tab.text());
                    $info.show();
                }
            });
        });
        $(function() {
            $("#datepicker").datepicker({ dateFormat: "dd/mm/yy" }).val()
        });

        $(function() {
            $("#datepicker1").datepicker({ dateFormat: "dd/mm/yy" }).val()
        });

        $(function() {
            $("#datepicker2").datepicker({ dateFormat: "dd/mm/yy" }).val()
        });

    </script>
@endpush
