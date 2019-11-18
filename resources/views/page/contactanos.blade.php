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
        <div class="fonc"><h1 class="text-center h2 py-sm-4 fondx text-uppercase">Contáctanos</h1></div>
        <div class="container">
            <div class="main pb-3">
                <article class="text" >
                    <div class="row">
                        <div class="col-sm-8 bg-light rounded border shadow">
                            <div class="row">
                                <div class="col-md-7 mx-auto py-3">

                                    <div id="form" class="result">

                                        <form method="post" id="reg-form">
                                          <p style="text-align: justify;">Muchas Gracias por tu interés en tener un hermoso tour y/o viaje organizado por FreeWalkingToursPeru.com | Por favor completa el formulario o también puedes escribirnos a nuestro correo corporativo <a href="mailto:info@freewalkingtoursperu.com" target="_blank">info@freewalkingtoursperu.com</a></p>
                                       <div class="form-group top15 padding10">
                                        <label for="">Nombre:</label>
                                          <i class="fa fa-user" aria-hidden="true"></i>
                                           <input type="text" name="name" class="form-control form-control-sm" >
                                        </div>
                                        <div class="form-group padding10">
                                          <label for="">Correo:</label>
                                               <i class="fa fa-envelope-o" aria-hidden="true"></i>
                                        <input type="email" name="email" class="form-control form-control-sm" >
                                        </div>

                                        <div class="form-group padding10">
                                           <label for="">Asunto:</label>
                                           <i class="fa fa-tags" aria-hidden="true"></i>                           
                                            <input type="text" name="subject" class="form-control form-control-sm">
                                        </div>
                      

                                          <div class="form-group padding10">
                                            <label for="">Mensaje:</label>
                                            <textarea class="form-control form-control-sm" name="menssage"  rows="3"></textarea>
                                          </div> 
                                              <div class="form-group text-center">
                                                  <button type="submit" class="btn btn-send btn-lg px-5 ">Enviar</button>
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
                          <h2 class="text-center">Teléfonos y WhatsApp</h2>
                          <p style="text-align: justify;">Contáctanos a los siguientes números, hablamos Español e Inglés, También te pedimos que veas <b>Las Preguntas Frecuentes</b> para los Tours a Pie libres para cada ciudad: <a href="https://www.freewalkingtoursperu.com/es/cusco/" target="_blank">Cusco</a>, <a href="https://www.freewalkingtoursperu.com/es/lima/" target="_blank">Lima</a> y <a href="https://www.freewalkingtoursperu.com/es/arequipa/" target="_blank">Arequipa</a></p>
                          <p><b>Cusco:</b><br> 
                            <i class="fas fa-mobile-alt"></i> <a href="https://api.whatsapp.com/send?phone=51958745640&text=Hola,%20puedes%20ayudarme?" target="_blank">(+51)958 745 640</a><br>
                            <i class="fas fa-mobile-alt"></i> <a href="https://api.whatsapp.com/send?phone=51984479073&text=Hola,%20puedes%20ayudarme?" target="_blank">(+51)984 479 073</a></p>
                          <p><b>Lima:</b><br>
                            <i class="fas fa-mobile-alt"></i> <a href="https://api.whatsapp.com/send?phone=51958745640&text=Hola,%20puedes%20ayudarme?" target="_blank">(+51)958 745 640</a><br>
                            <i class="fas fa-mobile-alt"></i> <a href="https://api.whatsapp.com/send?phone=51984479073&text=Hola,%20puedes%20ayudarme?" target="_blank">(+51)984 479 073</a></p>
                          <p><b>Arequipa:</b><br>
                            <i class="fas fa-mobile-alt"></i> <a href="https://api.whatsapp.com/send?phone=51958745640&text=Hola,%20puedes%20ayudarme?" target="_blank">(+51)958 745 640</a><br>
                            <i class="fas fa-mobile-alt"></i> <a href="https://api.whatsapp.com/send?phone=51984479073&text=Hola,%20puedes%20ayudarme?" target="_blank">(+51)984 479 073</a></p>
                          <p><b>Horarios para Llamar:</b><br>
                            Lunes a Sábado desde 6am a 10am<br>

                            Lunes a Sábado desde 1pm a 8pm<br>

                            Domingos desde 8am a 11:30am</p>
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
