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
                    <li><a class="flag" href="{{route('booking_path_es', 'es')}}" rel="alternate" hreflang="es"><img src="{{asset('images/es.png')}}" alt="flag spanish"></a></li>
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
        <div class="fonc"><h1 class="text-center h2 py-sm-4 py-2 fondx text-uppercase">Reserve Now!</h1></div>

    </div>

    <section class="container">
        <div class="row p-1 p-sm-3 p-md-3">
            <div class="col-sm-7 px-1 px-sm-5">
                <main>
                    <article class="text-justify">
                        <p>Booking with us is very easy, once you make your reservation request, we will send you an <b>Instant response with the Details of your Confirmation</b>, and you will be ready to attend our walking tours.
                        </p>
                        <p><span class="text-danger">If the calendar form does not work, write the date of your free tour in the message box or send us a message via WhatsApp or call us! See the numbers below!</span></p>

                    </article>
                    <article>
                        <h2 class="text-success" style="text-align: center;">Please Select Your City!</h2>
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
                            <li>Cusco</li>
                            <li>Lima</li>
                            <li>Arequipa</li>
                        </ul>
                        <div class="resp-tabs-container">
                            <div>
                                <div class="form-cusco mx-1 mx-sm-5 px-1 px-sm-5">
                                    <div class="result">
                                        <form method="post" id="reg-form">
                                            <div class="form-group">
                                                <label for="yourname">Your Name:</label>
                                                <input type="text" id="name" name="nombre2" class="form-control" placeholder="Please enter your name"  required data-error="Please enter your name">
                                            </div>
                                            <div class="form-group">
                                                <label for="youremail">Your Email:</label>
                                                <input type="email" class="form-control" id="email" name="email2" placeholder="write well your email"  required data-error="Please enter your email">
                                            </div>
                                            <div class="form-group">
                                                <label for="sizegroup">Size of your Group:</label>
                                                <select class="form-control" id="size" name="npasajeros2"  required data-error="Please enter Size of your Group" >
                                                    <option value="" disabled selected>Size of Group</option>
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
                                                <label for="starting">Walking Tour Starting Time:</label>
                                                <select class="form-control" name="nombretour2" id="nombretour">
                                                    <option value="cusco_10:00_am">Free Tour Cusco 10am</option>
                                                    <option value="cusco_1:00_pm">Free Tour Cusco 1pm</option>
                                                    <option value="cusco_3:30_pm">Free Tour Cusco 3.30pm</option>
                                                    <option value="cusco_10:00_am">Sunday Free Tour Cusco 10am</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="date">Date:</label>
                                                <input  class="form-control" type="text" id="datepicker" name="date2">
                                            </div>
                                            <div class="form-group">
                                                <label for="message">Message:</label>
                                                <textarea id="message" name="mensaje2" rows="3" placeholder="NOTICE for CUSCO: Every sunday we only have ONE free tour departure at 10am." class="form-control place-are" ></textarea>
                                            </div>
                                            <div class="text-center">
                                                <button type="submit" class="btn btn-send btn-lg px-5 ">Sign me up now</button>
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
                                                <label for="yourname">Your Name:</label>
                                                <input type="text" id="name1" name="fname1" class="form-control" placeholder="Please enter your name"  required data-error="Please enter your name">
                                            </div>
                                            <div class="form-group">
                                                <label for="youremail">Your Email:</label>
                                                <input type="email" class="form-control" id="email2" name="email1" placeholder="write well your email"  required data-error="Please enter your email">
                                            </div>
                                            <div class="form-group">
                                                <label for="sizegroup">Size of your Group:</label>
                                                <select class="form-control" id="size1" name="lname1"  required data-error="Please enter Size of your Group" >
                                                    <option value="" disabled selected>Size of Group</option>
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
                                                <label for="starting">Walking Tour Starting Time:</label>
                                                <select class="form-control" name="nombretour1" id="ciudad1">
                                                    <option value="Lima_10am">Free Tour Lima Centre 10am (pick-up in Mrflres)</option>
                                                    <option value="Lima_11am">Free Tour Lima Centre 11am</option>
                                                    <option value="Lima_3pm">Free Tour Lima Centre 3pm</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="date">Date:</label>
                                                <input  class="form-control" type="text" id="datepicker1" name="date1">
                                            </div>
                                            <!-- <div class="form-group">
                                                <label for="message">Message:</label>
                                                <textarea id="message1" name="phno1" rows="7" placeholder="NOTICE for Lima: We don't operate free tours on sundays." class="form-control" ></textarea>
                                            </div> -->
                                            <div class="form-group">
                                                <label for="message">Message:</label>
                                                <textarea id="message" name="mensaje2" rows="5" placeholder="NOTICE for LIMA: We will be operating all Sundays in Sept at 10am and 11am(NO 3pm) Do not book no other Sunday date unless you want your free tour Lima from mon to sat!" class="form-control place-are" ></textarea>
                                            </div>
                                            <div class="text-center">
                                                <button type="submit" class="btn btn-send btn-lg px-5 ">Sign me up now</button>
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
                                                <label for="yourname">Your Name:</label>
                                                <input type="text" id="name2" name="fname3" class="form-control" placeholder="Please enter your name"  required data-error="Please enter your name">
                                            </div>
                                            <div class="form-group">
                                                <label for="youremail">Your Email:</label>
                                                <input type="email" class="form-control" id="email3" name="email3" placeholder="write well your email"  required data-error="Please enter your email">
                                            </div>
                                            <div class="form-group">
                                                <label for="sizegroup">Size of your Group:</label>
                                                <select class="form-control" id="size2" name="lname3"  required data-error="Please enter Size of your Group" >
                                                    <option value="" disabled selected>Size of Group</option>
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
                                                <label for="starting">Walking Tour Starting Time:</label>
                                                <select class="form-control" name="nombretour3" id="ciudad2">
                                                    <option value="arequipa_10:00_am">Free Tour Arequipa 10am</option>
                                                    <option value="arequipa_3:00_pm">Free Tour Arequipa 3pm</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="date">Date:</label>
                                                <input  class="form-control" type="text" id="datepicker2" name="date3">
                                            </div>
                                            <div class="form-group">
                                                <label for="message">Message:</label>
                                                <textarea id="message" name="phno3" rows="3" placeholder="" class="form-control" ></textarea>
                                            </div>
                                            <div class="text-center">
                                                <button type="submit" class="btn btn-send btn-lg px-5 ">Sign me up now</button>
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
                    <h4 class="text-center"><span class="h4"><i class="c"></i></span>  Contact Numbers - Not for Booking! </h4>
                    <div style="text-align: center;">
                        <p><b>Cusco:</b><br>
                            <i class="fas fa-mobile-alt"></i> <a href="https://api.whatsapp.com/send?phone=51958745640&text=Hello,%20Can%20you%20help%20me%20pls?" target="_blank">(+51)958 745 640</a><br>
                            <i class="fas fa-mobile-alt"></i> <a href="https://api.whatsapp.com/send?phone=51984479073&text=Hello,%20Can%20you%20help%20me%20pls?" target="_blank">(+51)984 479 073</a></p>
                        <p><b>Lima:</b><br>
                            <i class="fas fa-mobile-alt"></i> <a href="https://api.whatsapp.com/send?phone=51958745640&text=Hello,%20Can%20you%20help%20me%20pls?" target="_blank">(+51)958 745 640</a><br>
                            <i class="fas fa-mobile-alt"></i> <a href="https://api.whatsapp.com/send?phone=51984479073&text=Hello,%20Can%20you%20help%20me%20pls?" target="_blank">(+51)984 479 073</a></p>
                        <p><b>Arequipa:</b><br>
                            <i class="fas fa-mobile-alt"></i> <a href="https://api.whatsapp.com/send?phone=51958745640&text=Hello,%20Can%20you%20help%20me%20pls?" target="_blank">(+51)958 745 640</a><br>
                            <i class="fas fa-mobile-alt"></i> <a href="https://api.whatsapp.com/send?phone=51984479073&text=Hello,%20Can%20you%20help%20me%20pls?" target="_blank">(+51)984 479 073</a></p>
                    </div>
                    <h4 class="text-center"><span class="h4"><i class="fas fa-map-marker-alt"></i></span> Double Check your Meeting Places below for each city</h4>

            
                    <div class="row">
                        <div class="col-sm-6">
                            <h6 class="text-center my-1"><b>Lima 10am | Pick-up Place</b></h6>
                            <a data-fancybox="gallery" href="{{asset('images/lima/free-walking-tour-lima-english-meeting-point-leaves-from-miraflores.jpg')}}">
                                <img src="{{asset('images/lima/free-walking-tour-lima-english-meeting-point-leaves-from-miraflores.jpg')}}" class="img-thumbnail">
                            </a>
                        </div>
                        <div class="col-sm-6">
                            <h6 class="text-center my-1"><b>Lima 11 am & 3pm</b></h6>
                            <a data-fancybox="gallery" href="{{asset('images/lima/free-walking-tour-lima-english-meeting-pint-starts-in-lima-centre.jpg')}}">
                                <img src="{{asset('images/lima/free-walking-tour-lima-english-meeting-pint-starts-in-lima-centre.jpg')}}" class="img-thumbnail">
                            </a>
                        </div>
                        <div class="col-sm-6">
                            <h6 class="text-center my-1"><b>Arequipa</b></h6>
                            <a data-fancybox="gallery" href="{{asset('images/arequipa/free-walking-tour-arequipa-meeting-point.jpg')}}">
                                <img src="{{asset('images/arequipa/free-walking-tour-arequipa-meeting-point.jpg')}}" class="img-thumbnail">
                            </a>
                        </div>
                        <div class="col-sm-6">
                            <h6 class="text-center my-1"><b>Cusco</b></h6>
                            <a data-fancybox="gallery" href="{{asset('images/cusco/meeting-point-map-free-walking-tour-cusco.jpg')}}">
                                <img src="{{asset('images/cusco/meeting-point-map-free-walking-tour-cusco.jpg')}}" class="img-thumbnail">
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
