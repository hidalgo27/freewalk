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

<section class="bg-light pt-3">
    <div class="container maxw">
      <div class="row mb-4 mt-0">
        <div class="col-sm-9">
          <p class="h6 text-n text-justify"> Visit the most important parks in Lima city and recreation areas that many locals and tourists explore, we also mention below the prices and the opening hours.</p>
       </div>
       <div class="col-sm-3">
          <div class="text-right">
          <a href="#" class="btn btn-free">Book a Guided Tour</a>         
          </div>
       </div>
      </div>
      <div class="col bg-white py-2 mb-2">
        <div class="row">
          
          <div class="col-sm-6">
            <h3 class="h3">Must-see Parks in Lima</h3>
          </div>
          <div class="col-sm-6">
            <div class="icons">
              
              <div class="row">
                <div class="col-sm-4">
                            <div>
                             <div class="text-sm-right text-center my-1 mt-2"><span class="h6">Share this Gig</span></div>
                            </div>
                </div>
                <div class="col-sm-8 text-sm-right text-center">
                              <div class="text-center my-1 socials "><a target="_blank" href="https://www.facebook.com/limafreewalkingtour/"><i class="fa fa-facebook fa-2x" aria-hidden="true"></i></a></div>
                         
                         
                              <div class="text-center my-1 socials "><a href="https://www.youtube.com/channel/UCdHL6ZDqMvigxpIl5dMf9dQ"><i class="fa fa-whatsapp fa-2x" aria-hidden="true"></i></a></div>
                         
                         
                             <div class="text-center my-1 socials "><a href="https://www.youtube.com/channel/UCdHL6ZDqMvigxpIl5dMf9dQ"><i class="fa fa-twitter fa-2x" aria-hidden="true"></i></a></div>
                         
                         
                             <div class="text-center my-1 socials "><a href="https://www.youtube.com/channel/UCdHL6ZDqMvigxpIl5dMf9dQ"><i class="fa fa-envelope-o fa-2x" aria-hidden="true"></i></a></div>
                         
                         
                              <div class="text-center my-1 socials "><a target="_blank" href="https://www.facebook.com/limafreewalkingtour/"><i class="fa fa-linkedin fa-2x" aria-hidden="true"></i></a></div>
                         
                         
                             <div class="text-center my-1 socials "><a target="_blank" href="https://www.facebook.com/limafreewalkingtour/"><i class="fa fa-instagram fa-2x" aria-hidden="true"></i></a></div>
                             </div> 
                </div>
            </div>
          </div>
      
        </div>
      </div>
      
      <div class="row">
       
        <div class="col-sm-6 col-md-4 my-2">
          <div class="shadow">
          <div class="box">
              <a href="../kennedy-park-miraflores" target="_blank">
                 <img src="../img/lima-travel-guide/lima-parks-kennedy-park-miraflores.jpg" class="img-fluid" alt="parks and recreation areas in Lima, peru">
               </a>
              
           </div>
            <div class="p-3">
              <h3><a href="../kennedy-park-miraflores" target="_blank">Kennedy Park in Miraflores</a></h3>
               <p>This is a must-visit park in the Miraflores Areas where you can find many facilities like dancing areas, cool spots for kids, restaurants, bars and much more!</p>
            </div>
         </div>
        </div>
        <div class="col-sm-6 col-md-4 my-2">
          <div class="shadow">
           <div class="box">
                <a href="#">
                 <img src="../img/lima-travel-guide/lima-parks-magic-water-in-lima-center.jpg" class="img-fluid" alt="parks and recreation areas in Lima, peru">
               </a>
            </div>
             <div class="p-3">
              <h3><a href="#">Magic Park of Water in Lima</a></h3>
               <p>The Park consists of showing you a series of 13 illuminated and interactive fountains, it is probably the most modern park where fun and entertainment are guaranteed! </p>
             </div>
          </div> 
          
        </div>
        <div class="col-sm-6 col-md-4 my-2">
          <div class="shadow">
          <div class="box">
            <a href="#">
           <img src="../img/lima-travel-guide/lima-parks-love-park-miraflores.jpg" class="img-fluid" alt="parks and recreation areas in Lima, peru">
             
           </a>
        
          </div>
             <div class="p-3">
              <h3><a href="#">Love Park in Miraflores</a></h3>
               <p>The Park offers a stunning view over the bay of Lima, it is the best spot for observing the sunrise and sunset and it is artfully decorated with mosaics!</p>
             </div>
        </div>
        </div>
      </div>

      </div>

    </div>

</section>
@endsection

