@extends('layouts.page.app')
@section('content')

    
    <section>
        <nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light pb-0 bg-free">
            <div class="container">
              <a class="navbar-brand" href="/"><img src="{{asset('images/logo-freewalks.png')}}" alt="peru"></a>
              <div class="collapse navbar-collapse" id="cssmenu">
                    @include('layouts.page.nav-home-others-es')
              </div>
              <ul class="navbar-nav p-2">
                    <li><a class="flag" href="{{route('employment_path_es', 'es')}}" rel="alternate" hreflang="es"><img src="{{asset('images/es.png')}}" alt="flag spanish"></a></li>
                </ul>
            </div>
        </nav>    
   </section>

    <section>
        <div class="fonc"><h1 class="text-center h2 py-sm-4 py-2 fondx text-uppercase">Guide, Work and Market with us!</h1></div>

        <div class="container px-5 pt-4 maxw">

            <div class="text-center">
                <img class="img-fluid work float-left px-3" src="{{asset('images/work-peru-tourism-industry.png')}}" alt="job peru tourism industry"><p class="h5 text-center py-2 "> If you work as a tourist guide with us, you will work outdoors, showing your city and  its surroundings, sharing history, culture, and adventure, and adrenaline with people coming from all over the world, How do you expect to dazzle them?</p>
            </div>

            <div class="clearfix my-2 my-sm-5"></div>

            <div class="text-center">
                <img class="img-fluid work float-right px-3" src="{{asset('images/work-peru-tour-guide.png')}}" alt="job peru tour guide freelance"><p class="h5 text-center py-2 ">Would you like to work as a tour guide, but you don´t know where to start? Do you think you have an outstanding personality and passion for succeeding? Are you looking for a fun and rewarding way to earn money? If you already have the full license to operate as a guide, then sign up with us!</p>
            </div>
            <div class="clearfix my-2 my-sm-5"></div>
            <div class="text-center">
                <img class="img-fluid work float-left px-3" src="{{asset('images/expert-digital-marketing-peru.png')}}" alt="expert digital marketing tourism industry"><p class="h5 text-center py-2 ">Are you an expert in digital marketing, an expert photographer, a creative designer, an expert in video editing, then work with Free Walking Tours Peru! Are you an expert in sales and promotion of touristic products, and you speak several languages, then this is your great opportunity to grow professionally!</p>
            </div>

            <div class="clearfix my-2 my-sm-5"></div>

            <hr>
            <h2 class="h4 text-center cellh">Free Walking Tours Peru only works with guides who are legally allowed to operate in their chosen location</h2>
            <ul class="ckeckok list-unstyled pl-sm-5" >
                <li>Guides must comply with local regulations; this means that you must have the authorization to serve as a tour guide.</li>
                <li>In Peru, the license to become a tour guide can only be obtained by studying this career at an Institute (for 3 years) or at a University (for 5 years), once you finish your career and graduate The Ministry of Foreign Affairs and Tourism will issue you a Carnet (License) to work as a Tour Guide. </li>
                <li>Guides should be able to speak perfect Spanish or English to lead our tours.</li>
            </ul>
            <h3 class="h4 text-center cellh">Free Walking Tours Peru only works with Digital Marketing Experts</h3>
            <ul class="ckeckok list-unstyled pl-sm-5">
                <li>If you want to work with us in the area of online marketing, it is essential to have experience in the tourism sector for at least five years.</li>
                <li>If you apply for off-page marketing, it is necessary to know English at an intermediate level to edit or create.</li>
                <li>If you speak several languages, it is a huge plus, but we still need you to have experience in marketing.</li>
                <li>If you are an expert salesman, you need to speak fluently Spanish or English.</li>
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
                                <label for="">Name:</label>
                                <i class="fa fa-user" aria-hidden="true"></i>
                                <input id="name" type="text" class="form-control form-control-sm" name="Name" required maxlength="50">
                            </div>
                            <div class="form-group">
                                <label for="">Email:</label>
                                <i class="fa fa-envelope-o" aria-hidden="true"></i>
                                <input id="email" type="email" name="Email" class="form-control form-control-sm" required maxlength="50">
                            </div>

                            <div class="form-group">
                                <label for="">Message:</label>
                                <textarea class="form-control form-control-sm" id="message" name="Message" rows="5" maxlength="6000" required></textarea>
                            </div>
                            <div class="form-group">
                                <label for="name">Upload your CV :</label>
                                <input type="file" class="form-control form-control-sm" id="image" name="image" >
                            </div>

                            <div class="form-group text-center">
                                <button type="submit" class="btn btn-send btn-lg px-5 ">Send</button>
                            </div>
                        </form>
                        <div id="success_message" style="display:none">
                            <p class="text-success">Thank you so much for showing your interest to work and have fun with us, your message has been sent successfully, we will contact you very soon. Cheers!</p>
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

