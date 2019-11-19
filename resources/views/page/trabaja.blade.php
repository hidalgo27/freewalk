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
                    <li><a class="flag" href="/en/job-tour-guide-marketing-tourism-industry" rel="alternate" hreflang="es"><img src="{{asset('images/es.png')}}" alt="flag spanish"></a></li>
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

<section>
    
      <div class="fonc"><h1 class="text-center h2 py-sm-4 py-2 fondx text-uppercase">Guia, Trabaja o Mercadea con Nosotros</h1></div>
    
        <div class="container px-5 pt-4 maxw">
                    
      
       <div class="text-center">
         <img class="img-fluid work float-left px-3" src="{{asset('images/trabajo-peru-industria-turismo.png')}}" alt="trabajo peru industria turismo"><p class="h5 text-center py-2 "> Si trabajas como Guía Turístico con nosotros, laborarás al aire libre, mostrando tu ciudad y alrededores, compartiendo historia, cultura, aventura, adrenalina con gente que viene de todo el mundo, ¡qué esperas para deslumbrarlos!</p>   
       </div>

       <div class="clearfix my-2 my-sm-5"></div>

       <div class="text-center">
            <img class="img-fluid work float-right px-3" src="{{asset('images/trabajo-peru-guia-turistas.png')}}" alt="trabajo peru guia de turistas"><p class="h5 text-center py-2 ">¿Te gustaría trabajar de guía de turistas, pero no sabes por dónde empezar? ¿Crees que tienes la personalidad y la pasión necesarias para tener éxito? ¿Estás buscando una manera divertida y gratificante de ganar dinero? ¡Ya cuentas con toda la licencia para operar como Guía, pues apúntate con nosotros!</p>
       </div>
        <div class="clearfix my-2 my-sm-5"></div>
       <div class="text-center">
             <img class="img-fluid work float-left px-3" src="{{asset('images/experto-marketing-digital-peru.png')}}" alt="trabajo peru marketing industria del turismo"><p class="h5 text-center py-2 ">Eres experto en mercadeo digital, un fotógrafo experto, un diseñador creativo, un experto en edición de videos, pues ¡trabaja con FreeWalkingToursPeru! Eres experto en venta y promoción de productos turísticos, hablas varios idiomas, entonces esta es tu gran oportunidad para desarrollarte profesionalmente!</p>
       </div>

        <div class="clearfix my-2 my-sm-5"></div>

        <hr>
        <h2 class="h4 text-center cellh">FreeWalkingToursPeru solamente trabaja con Guías Legalmente Autorizados para operar en la ciudad de su elección</h2>
        <ul class="ckeckok list-unstyled pl-sm-5" >
            <li>Los Guías deben cumplir con las normativas locales relacionadas con ser autónomo/a y su registro. Es necesario tener el visado que permite este tipo de trabajo.</li>
            <li>En Perú La Licencia para ser Guía de Turistas solamente se puede obtener estudiando la carrera profesional de guía de turistas en un instituto(3 años) o estudiando la carrera de turismo y hotelería en una universidad(5 años), al finalizar la carrera y graduarse, El Ministerio de Comercio Exterior y Turismo le emitirá un Carnet de Guía de Turistas | Si estudiaste en una Universidad, después de haberte graduado el Colegio de Licenciados de Turismo de tu ciudad te emitirá un Carnet como Licenciado en Turismo, el cual te permitirá guiar legalmente a nivel nacional. </li>
            <li>Los guías deben ser capaces de hablar el idioma con el que quieren impartir los tours (inglés y español) a nivel hablado y/o nativo.</li>
        </ul>
        <h3 class="h4 text-center cellh">FreeWalkingToursPeru solamente trabaja con Expertos en Mercadeo Digital</h3>
        <ul class="ckeckok list-unstyled pl-sm-5">
            <li>Si deseas laborar con nosotros en el área de mercadeo online es sumamente importante que tengas experiencia en tu área de al menos 5 años.</li>
            <li>Si aplicas para mercadeo off-page es indispensable que sepas ingles a nivel intermedio para editar o crear. </li>
            <li>Si hablas varios idiomas es un plus inmenso, pero aun asi necesitamos que tengas experiencia en mercadeo.</li>
            <li>Si eres un experto vendedor necesitas hablar fluidamente al menos español e inglés.</li>
        </ul>

       </div>
              

</section>

    <section>
    <hr>
    <div class="container maxw">
         <div class="col-md-7 mx-auto py-3">
            <div class="border shadow p-3">
             <div id="form" class="result">

                            <form method="post" id="reused_form" enctype=&quot;multipart/form-data&quot;>
                                
                               <div class="form-group top15">
                                <label for="">Nombre:</label>
                                  <i class="fa fa-user" aria-hidden="true"></i>
                                    <input id="name" type="text" class="form-control form-control-sm" name="Name" required maxlength="50">
                                </div>
                                <div class="form-group">
                                  <label for="">Correo:</label>
                                       <i class="fa fa-envelope-o" aria-hidden="true"></i>
                                      <input id="email" type="email" name="Email" class="form-control form-control-sm" required maxlength="50">
                                </div>
                               
                                  <div class="form-group">
                                    <label for="">Mensaje:</label>
                                    <textarea class="form-control form-control-sm" id="message" name="Message" rows="5" maxlength="6000" required></textarea>
                                  </div> 
                                  <div class="form-group">
                                      <label for="name">Subir Documento (CV):</label>
                                       <input type="file" class="form-control form-control-sm" id="image" name="image" >
                                 </div>
                                  
                                  <div class="form-group text-center">
                                          <button type="submit" class="btn btn-send btn-lg px-5 ">Enviar</button>
                                   </div>
                            </form>
                              <div id="success_message" style="display:none">
                                    <p class="text-success">¡Gracias por el interés en querer ser parte de nuestro equipo, tu mensaje se ha enviado exitosamente, te contactaremos muy pronto!</p>
                                </div>
                                <div id="error_message" style="width:100%; height:100%; display:none; "> <h3>Error</h3> Sorry there was an error sending your form. </div>

                        </div>
            </div>
        </div>
    </div>
</section>

    <section class="my-sm-5">
        <div class="container maxw">
            <img src="{{asset('images/work-as-tour-guide-marketing-tourism.png')}}" class="img-fluid" alt="tour guide peru work, tourism isdustry">
        </div>
    </section>
@endsection

