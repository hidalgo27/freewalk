@extends('layouts.page.app')
    @section('content')

        <section>
            <picture>
                <source media="(max-width: 550px)" srcset="{{asset('images/free-walking-tours-peru-mobile.png')}}">
                <img src="{{asset('images/free-walking-tours-peru.jpg')}}" class="w-100" alt="free walking tours in peru">
            </picture>
        </section>

        <section class="section01">
            <div class="container">
                <div class="main pt-5 pb-3">
                    <article class="text-justify border shadow p-3 mb-5 bg-light rounded" >
                        <h1 class="text-center">Free Walking Tours Peru, Where? in Lima | Cusco | Arequipa | Barranco | Miraflores ---</h1>
                        <p>Thanks for taking your valuable time to check out our world-famous Original Free Walking Tour concept in Peru in Lima, Cusco, Arequipa and more.  Operated by locally-born & licensed indigenous tour guides by Inkan Milky Way. We have over five years of experience in this business. We are the first stop in each city by many tourists. We deliver the best gratuity-based business model, which puts the power back into the hands of the modern-day travelers. | During our daily Free Tours in Peru, history and culture, not bars, are the main focus, this is what it makes us different from the competitors. Therefore, you can see our excellent reviews on TripAdvisor, Facebook, or Google Maps. We will see you when you participate in our enjoyable, useful, and memorable free walking tours.</p>
                        <p><span class="text-success"><b>Note: </b></span> Please do your best to get to the correct meeting place and look for the right uniform because many scammers claim to work with us; when in reality, those competitors are taking our customers.  </p>
                    </article>
                </div>
            </div>
        </section>
        <section class="section02 py-4">
            <div class="container maxw">
                <div class="row">
                    <div class="col-12 my-2">
                        <div class="box-torus">
                            <div class="row">
                                <div class="col-sm-4">
                                    <img src="{{asset('images/free-walking-tour-lima.jpg')}}" class="img-fluid" alt="free walking tour lima">
                                </div>
                                <div class="col-sm-8">
                                    <div class="box-text p-3 bg-white text-right">
                                        <h2 class="h3 text-center" style="font-size: 1.5em">Free Walking Tour Lima</h2>
                                        <p class="text-justify">Experience the most popular and trendy tours worldwide! Live it up with our original Free Walking Tour Lima, the capital of Peru, and home to 32 million Peruvians. This city was once also the capital of the viceroyalty of Peru during the colonial period. | In our Free Walking Tour Lima, we focus on culture and history. That´s why we don´t take you inside bars; we value your time. We have guided tours conducted by guides who speak English. If you speak only Spanish, we also have trips en Español. | Our Lima free walking tours take place mainly in the Lima historical center (old Colonial Town).  | We will stress the most notable touristy and nontouristy spots while walking during our 2.5 to 3.5-hour tour.  We love visitors who enjoy walking and history, and they love us! <a  href="https://youtu.be/HdYcNrUxnXA" target="_blank">Watch our Video</a>!</p>
                                        <a class="btn btn-warning btn-free btn-lg" href="/lima/"  target="_blank" role="button">I´m interested!</a>

                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 my-2">
                        <div class="box-torus">
                            <div class="row">
                                <div class="col-sm-4">
                                    <img src="{{asset('images/free-walking-tour-cusco.jpg')}}" class="img-fluid" alt=" free walking tour cusco">
                                </div>
                                <div class="col-sm-8">
                                    <div class="box-text p-3 bg-white text-right">
                                        <h2 class="h3 text-center" style="font-size: 1.5em">Free Walking Tour Cusco</h2>
                                        <p class="text-justify">Walk off the beaten path! Explore Cusco’s historical center on foot by joining our Original Free Walking Tour Cusco guided by friendly, cheerful tour guides who will show you the heart of the Inka Empire’s civilization by focusing on the most important historical spots from both the Inka and colonial period. | You do not want to miss this city as seen while on foot. It is a millenary town that is at least 3000 years old, a city which was the capital of the Inca Empire and also played a vital role during the emancipation of many South American countries, this is the place where our country had its first revolution back in 1781 lead by Tupaq Amaru II; Tupaq was the most famous South American indigenous warrior born to the Andes of Cusco. He was the founding ethnic father of Peruvians! </p>
                                        <a class="btn btn-warning btn-free btn-lg" href="/cusco/"  target="_blank" role="button">Let´s do it!</a>

                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 my-2">
                        <div class="box-torus">
                            <div class="row">
                                <div class="col-sm-4">
                                    <img src="{{asset('images/free-walking-tour-arequipa.jpg')}}" class="img-fluid" alt="free walking tour arequipa">
                                </div>
                                <div class="col-sm-8">
                                    <div class="box-text p-3 bg-white text-right">
                                        <h2 class="h3 text-center" style="font-size: 1.5em">Free Walking Tour Arequipa</h2>
                                        <p class="text-justify">Discover the history, culture, gastronomy, and secrets of Arequipa by joining our popular free walking tour run by our expert tour guides. Our Free Walking Tour in Arequipa takes place in this historical center since this is the place of many past events that happened in the city. Arequipa was once the capital of Peru and indeed the second most important city in Peru after Lima. | This city is also the cradle of the most admired thinkers and writers in Peru such as Mario Vargas Llosa, awarded with the Nobel prize in 2010 and Pedro Paulet, the father of modern astronautics. Another famous Peruvian is Everardo Zapata Santillana a Peruvian elementary school teacher and author of Coquito, a best-selling book to teach Spanish-speaking children how to read and write. Arequipa is known as “The Southern Lion” or “Capital of Neoliberalism"</p>
                                        <a class="btn btn-warning btn-free btn-lg" href="/lima/"  target="_blank" role="button">Let´s do it!</a>

                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    @endsection
