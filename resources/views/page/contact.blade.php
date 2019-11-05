@extends('layouts.page.app')
@section('content')
    @include('layouts.page.nav-home')

    <!-- slider -->
    <section>
        <picture>
            <source media="(max-width: 550px)" srcset="../img/free-walking-tours-peru-mobile.jpg">
            <img src="{{asset('images/free-walking-tours-peru.jpg')}}" class="w-100" alt="free walking tours in peru">
        </picture>
    </section>

    <section class="section01">
        <div class="fonc"><h1 class="text-center h2 py-sm-4 fondx text-uppercase">Contact Us</h1></div>
        <div class="container">
            <div class="main pb-3">
                <article class="text" >
                    <div class="row">
                        <div class="col-sm-8 bg-light rounded border shadow">
                            <div class="row">
                                <div class="col-md-7 mx-auto py-3">

                                    <div id="form" class="result">

                                        <form method="post" id="reg-form">
                                            <p style="text-align: justify;">Thank you very much for your interest in experiencing a beautiful tour or trip organized by FreeWalkingTours.com | Please complete the form, or you can also contact us via our corporate email <a href="mailto:info@freewalkingtoursperu.com" target="_blank">info@freewalkingtoursperu.com</a></p>
                                            <div class="form-group top15 padding10">
                                                <label for="">Name:</label>
                                                <i class="fa fa-user" aria-hidden="true"></i>
                                                <input type="text" name="name" class="form-control form-control-sm" >
                                            </div>
                                            <div class="form-group padding10">
                                                <label for="">Email:</label>
                                                <i class="fa fa-envelope-o" aria-hidden="true"></i>
                                                <input type="email" name="email" class="form-control form-control-sm" >
                                            </div>

                                            <div class="form-group padding10">
                                                <label for="">Subject:</label>
                                                <i class="fa fa-tags" aria-hidden="true"></i>
                                                <input type="text" name="subject" class="form-control form-control-sm">
                                            </div>


                                            <div class="form-group padding10">
                                                <label for="">Message:</label>
                                                <textarea class="form-control form-control-sm" name="menssage"  rows="3"></textarea>
                                            </div>
                                            <div class="form-group text-center">
                                                <button type="submit" class="btn btn-send btn-lg px-5 ">Send</button>
                                            </div>
                                        </form>

                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="col-sm-4 rounded border shadow bg-light">
                            <div class="">
                                <div class="information text-center">

                                    <p class="linea-con"></p>
                                    <h2 class="text-center">Phones and WhatsApp</h2>
                                    <p style="text-align: justify;">Contact us at the following numbers; we speak Spanish and English. We also ask you to view the Frequently Asked Questions for Free Walking Tours for each city: <a href="https://www.freewalkingtoursperu.com/cusco/" target="_blank">Cusco</a>, <a href="https://www.freewalkingtoursperu.com/lima/" target="_blank">Lima</a> y <a href="https://www.freewalkingtoursperu.com/arequipa/" target="_blank">Arequipa</a></p>
                                    <p><b>Cusco:</b><br>
                                        <i class="fa fa-mobile" aria-hidden="true"></i> <a href="https://api.whatsapp.com/send?phone=51958745640&text=Hello,%20Can%20you%20help%20me%20pls?" target="_blank">(+51)958 745 640</a><br>
                                        <i class="fa fa-mobile" aria-hidden="true"></i> <a href="https://api.whatsapp.com/send?phone=51984479073&text=Hello,%20Can%20you%20help%20me%20pls?" target="_blank">(+51)984 479 073</a></p>
                                    <p><b>Lima:</b><br>
                                        <i class="fa fa-mobile" aria-hidden="true"></i> <a href="https://api.whatsapp.com/send?phone=51958745640&text=Hello,%20Can%20you%20help%20me%20pls?" target="_blank">(+51)958 745 640</a><br>
                                        <i class="fa fa-mobile" aria-hidden="true"></i> <a href="https://api.whatsapp.com/send?phone=51984479073&text=Hello,%20Can%20you%20help%20me%20pls?" target="_blank">(+51)984 479 073</a></p>
                                    <p><b>Arequipa:</b><br>
                                        <i class="fa fa-mobile" aria-hidden="true"></i> <a href="https://api.whatsapp.com/send?phone=51958745640&text=Hello,%20Can%20you%20help%20me%20pls?" target="_blank">(+51)958 745 640</a><br>
                                        <i class="fa fa-mobile" aria-hidden="true"></i> <a href="https://api.whatsapp.com/send?phone=51984479073&text=Hello,%20Can%20you%20help%20me%20pls?" target="_blank">(+51)984 479 073</a></p>
                                    <p><b>Opening hours to call:</b><br>
                                        Mon thru Sat from 6am to 10am<br>

                                        Mon thru Sat from 1pm to 8pm<br>

                                        On Sundays from 8am to 11:30am</p>
                                    <div class="call"></div>

                                </div>
                            </div>


                        </div>
                    </div>
                </article>
            </div>
        </div>
    </section>
@endsection

@push('scripts')
    <script>
        $(document).ready(function()
        {
            $(document).on('submit', '#reg-form', function()
            {
                var data = $(this).serialize();
                $.ajax({
                    type : 'POST',
                    url  : 'contact.php',
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
@endpush
