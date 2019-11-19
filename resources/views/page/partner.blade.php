
@extends('layouts.page.app')
@section('content')
    @include('layouts.page.nav-home')

<script type="text/javascript" src="{{ URL::asset('js/blocksit.min.js') }}"></script>

<script>
$(document).ready(function() {
    //vendor script
    $('#header')
    .css({ 'top':-50 })
    .delay(1000)
    .animate({'top': 0}, 800);
    
    $('#footer')
    .css({ 'bottom':-15 })
    .delay(1000)
    .animate({'bottom': 0}, 800);
    
    //blocksit define
    $(window).load( function() {
        $('#container').BlocksIt({
            numOfCol: 5,
            offsetX: 8,
            offsetY: 8
        });
    });
    
    //window resize
    var currentWidth = 1500;
    $(window).resize(function() {
        var winWidth = $(window).width();
        var conWidth;
        if(winWidth < 660) {
            conWidth = 440;
            col = 2
        } else if(winWidth < 880) {
            conWidth = 660;
            col = 3
        } else if(winWidth < 1500) {
            conWidth = 880;
            col = 4;
        } else {
            conWidth = 1500;
            col = 5;
        }
        
        if(conWidth != currentWidth) {
            currentWidth = conWidth;
            $('#container').width(conWidth);
            $('#container').BlocksIt({
                numOfCol: col,
                offsetX: 8,
                offsetY: 8
            });
        }
    });
});
</script>
    <!-- slider -->
    <section>
        <picture>
            <source media="(max-width: 550px)" srcset="../img/free-walking-tours-peru-mobile.jpg">
            <img src="{{asset('images/free-walking-tours-peru.jpg')}}" class="w-100" alt="free walking tours in peru">
        </picture>
    </section>

    <section>
        <div class="fonc"><h1 class="text-center h2 py-sm-4 fondx text-uppercase">AWESOME WALKING TOURS WORLDWIDE</h1></div>
    </section>
    <section class="maxw">
        <div class="container px-5 pt-4">

            <div class="row">
                <p style="text-align: justify;"> Are you ready to explore the world on foot? Then don´t wait anymore to join the best free walking tours worldwide with 100% local guides, who are knowledgeable and super happy about their job. Explore the world with our friends, who will be looking forward to showing you their city, history, culture and even their local cuisine.</p>
                <p style="text-align: justify;">As it is in Peru, Germany, or the United States, our friends' walking tours also operate through generous donations; please remember to inquire how much the average recommended tip  according to the city. Click below on any of our recommended free tours and have an enjoyable experience.</p>
            </div>

    </section>
    <!-- Content -->
    <section id="wrapper">

        <div id="container">
            <div class="grid">
                <div class="imgholder">
                    <img src="{{asset('images/partners/free-walks-salta.png')}}" alt="recommended free tour in argentina: free tour salta" />
                </div>
                <p>Enjoy a walk while you hear the background sounds of the old colonial town of Salta. We will visit the city’s highlights, including the old town hall, the cathedral, and the magnificent Franciscan convent and learn about the heroes and stories of the most beautiful town in the north of Argentina.</p>
                <a href="http://saltafreewalks.com/" target="_blank" rel="nofollow"><div class="meta">Book with Salta Free Walks</div></a>
            </div>

            <div class="grid">
                <div class="imgholder">
                    <img src="{{asset('images/partners/free-tour-san-fermin.png')}}" alt="recommended free tour in in spain: free walking tour san fermin" />
                </div>
                <p>You will get to know the most amazing places of Pamplona, their history and relationship with the festivals, make the best of your journey in San Fermín by joining the pioneering free walking tour company, San Fermin Free Tour, Spain.</p>
                <a href="https://freetoursanfermin.com/" target="_blank" rel="nofollow"><div class="meta">Book with Free Tour San Fermin</div></a>
            </div>

            <div class="grid">
                <div class="imgholder">
                    <img src="{{asset('images/partners/nomad-walking-tours.png')}}" alt="free walking tour nomad" />
                </div>
                <p>Nomad Walking Tours LLC is happy to offer the first and only Free Las Vegas Walking Tour of the world-famous Las Vegas Strip, unveil our city with our professional tour guides.</p>
                <a href="http://www.nomadwalkingtours.com/" target="_blank" rel="nofollow"><div class="meta">Book with Nomad Walking Tours</div></a>
            </div>

            <div class="grid">
                <div class="imgholder">
                    <img src="{{asset('images/partners/nomad-walking-tours.png')}}" alt="recommended free tour in Italy: free walking tour naples" />
                </div>
                <p>During our free walking tours, you will be able to discover what is not included in the traditional visit and classic itineraries. The excursions will let you feel and experience  authentical insight into Naples, by successfully mixing a tour to less well-known places with genuine moments of the local people’s daily living.</p>
                <a href="http://www.freetournaples.com/" target="_blank"><div class="meta">Book with Free Tour Naples</div></a>
            </div>

            <div class="grid">
                <div class="imgholder">
                    <img src="{{asset('images/partners/free-walks-buenos-aires.jpg')}}" alt="recommended free tour in Argentina: free walking tour buenos aires" />
                </div>
                <p>In this free tour, you get a historical and political perspective of our city, starting from the National Congress and walking the grand boulevard of Avenida de Mayo, with its architecture and sites, revealing the most glorious and terrible periods of our history.</p>
                <a href="http://www.buenosairesfreewalks.com/" target="_blank"><div class="meta">Book with Free Walks Bs As</div></a>
            </div>

            <div class="grid">
                <div class="imgholder">
                    <img src="{{asset('images/partners/freedam-tours-free-walking.jpg')}}" alt="recommended free tour in the Netherlands: freedam free walking tours amnterdam" />
                </div>
                <p>Join us on a fantastic journey through the infamous streets of Amsterdam. Discover how freedom and tolerance transformed a simple fisherman’s village into the center of a vast trading empire and understand how these values continue to shape its liberal attitudes today.</p>
                <a href="https://www.freedamtours.com/" target="_blank"><div class="meta">Book with FreeDam Tours</div></a>
            </div>

            <div class="grid">
                <div class="imgholder">
                    <img src="{{asset('images/partners/wayoudo-free-walking-tours.jpg')}}" alt="recommended free tour in in Croatia: wayoudo free walking tours" />
                </div>
                <p>Free walking tour explicitly tailored for the young and everybody who feels that way! Take a 2-hour walk with a local guide and visit all the must-see places, find out where to eat, drink or go out and a great deal of  other fun activities.</p>
                <a href="http://wayoudo.net/" target="_blank"><div class="meta">Book with Wayoudo Walking Tours</div></a>
            </div>

            <div class="grid">
                <div class="imgholder">
                    <img src="{{asset('images/partners/free-walking-tour-prague.jpg')}}" alt="recommended free tour in Czech Republic: free walking tour prague" />
                </div>
                <p>Discover the most famous sights and hidden gems of Prague in four unique tours at no cost conducted in English. Free Walking Tour Prague is the only free tour operating in the Czech capital providing a complete tour of Prague totally on a complimentary contribution basis.</p>
                <a href="https://freewalkingtourprague.eu" target="_blank"><div class="meta">Book with Free Walking Tour Prague</div></a>
            </div>

            <div class="grid">
                <div class="imgholder">
                    <img src="{{asset('images/partners/free-walking-tour-valencia.jpg')}}" alt="recommended free tour in Spain: free walking tour valencia" />
                </div>
                <p>At Valencia Explorers, we do the best Free Walking Tour in Valencia! During 2 hours and a half to 3 hours, we will take you through the best monuments and sites in the old town of this beautiful city, and we’ll tell you the stories behind them.</p>
                <a href="http://www.freewalkingtourvalencia.com" target="_blank"><div class="meta">Book with Free Walking Tour Valencia</div></a>
            </div>

            <div class="grid">
                <div class="imgholder">
                    <img src="{{asset('images/partners/hk-hong-kong-free-walking-tour.jpg')}}" alt="recommended free tour in in China: HK tour hong kong" />
                </div>
                <p>The First free walking tour in Hong Kong, we are Local young people who are passionate about promoting local culture and showing you genuine Hong Kong.</p>
                <a href="http://hkfreewalk.com/" target="_blank"><div class="meta">Book with HK Free Walk</div></a>
            </div>


            <div class="grid">
                <div class="imgholder">
                    <img src="{{asset('images/partners/good-tours-free-walking.jpg')}}" alt="recommended free tour in Poland: good cracow free walking tours" />
                </div>
                <p>At Good Cracow Tours, we know travelers and we know how to run free walking tours! We have stood in your shoes and learned how to make them more comfortable. We keep our costs low, but our expectations high so you don’t have to choose between the quality of the tour and one more delicious Polish vodka for dinner.</p>
                <a href="https://www.goodcracowtours.eu/" target="_blank"><div class="meta">Book with Good Cracow Free Tours</div></a>
            </div>


            <div class="grid">
                <div class="imgholder">
                    <img src="{{asset('images/partners/hong-kong-free-tours.jpg')}}" alt="recommended free tour in on china: hong kong free tours" />
                </div>
                <p>There is a story behind each place we set foot on, each person we meet, and each culture we experience. We are the locals in Hong Kong who want to share our Hong Kong stories with you. The idea of Hong Kong Free Tours is to bring you the best Hong Kong tour experience without the financial support of any business or governmental involvement.</p>
                <a href="https://hongkongfreetours.com/" target="_blank"><div class="meta">Book with Hong Kong Free Tours</div></a>
            </div>

            <!--    <div class="grid">
                <div class="imgholder">
                  <img src="img/partners/marseille-free-walking-tours.jpg" alt="recommended free tour in in France: marseille free walking tour" />
                </div>
                <p>Join us to explore this beautiful 2,600 year-old city on a three hour walking tour through which we will go on an exciting journey. Starting with the beautiful old port, a natural cove and the birthplace of the city, this is where it all began! Then we will enter the oldest neighborhood in France, “Le Panier” We will be waiting for you.</p>
                <a href="https://marseillefreewalkingtour.com/" target="_blank" rel="nofollow"><div class="meta">Book with Marseille Free Walking Tours</div></a>
              </div> -->

            <div class="grid">
                <div class="imgholder">
                    <img src="{{asset('images/partners/free-tour-stockhom.jpg')}}" alt="recommended free tour in Sweden: free tour stockholm" />
                </div>
                <p>Our excellent walking tours in Stockholm, Sweden, are free to take so that everybody can enjoy them, Free Tour Stockholm guides will show you this fantastic city history. The walk takes 1.5 to 2 hours. Tip your guide in proportion as to how much you love the tour.</p>
                <a href="http://freetourstockholm.com/" target="_blank"><div class="meta">Book with Free Tours Stockholm</div></a>
            </div>

            <div class="grid">
                <div class="imgholder">
                    <img src="{{asset('images/partners/free-walking-tour-stockholm.jpg')}}" alt="recommended free tour in sweden: free walking tour stockholm" />
                </div>
                <p>The Free Tour Stockholm City start at Old Town. This free walking tour goes beyond introducing the sites. We will guide you through the city’s fascinating history from its darkest hours to its brightest moments.</p>
                <a href="http://www.stockholmfreetour.com/" target="_blank"><div class="meta">Book with Free Walking Tour Stockholm</div></a>
            </div>

            <div class="grid">
                <div class="imgholder">
                    <img src="{{asset('images/partners/athens-free-walking-tour.jpg')}}" alt="recommended free tour in greece: athens free walking tour" />
                </div>
                <p>Get an inside look at the Cradle of Western Civilization on foot. You will discover many of the city's hidden gems that tourist buses can’t reach. To join one of our walks merely contact us with the date that you would like to participate. We will reserve a place for you and send you the exact details as soon as possible.</p>
                <a href="https://www.athensfreewalkingtour.com/en/" target="_blank"><div class="meta">Book with Athens Free Walking Tour</div></a>
            </div>

            <div class="grid">
                <div class="imgholder">
                    <img src="{{asset('images/partners/happy-strasbourg-tours-free-tour.jpg')}}" alt="recommended free tour in france: happy strasnourg tours" />
                </div>
                <p>In the Happy Strasbourg team, we are all native and passionate guides. Our goal is that during the visit, you feel like you are walking with a friend who is always happy, engaging, and ready to give you all the bits of advice you need, so no more hesitation book a tour now.</p>
                <a href="http://happy-strasbourg.eu" target="_blank"><div class="meta">Book with Happy Strasbourg Free Tours</div></a>
            </div>

            <div class="grid">
                <div class="imgholder">
                    <img src="{{asset('images/partners/belgrade-free-tours.png')}}" alt="recommended free tour in serbia: belgrade free tour" />
                </div>
                <p>We are an independent team of local tour guides, who are genuinely passionate about Belgrade and its life-style, in our walks we intend to present you to the lifestyles, customs, and character of the locals by giving you a more in-depth insight into everything the city has to offer.</p>
                <a href="http://belgradefreetour.com/" target="_blank"><div class="meta">Book with Free Tour Belgrade</div></a>
            </div>

            <div class="grid">
                <div class="imgholder">
                    <img src="{{asset('images/partners/monster-day-tours-walking-tours.png')}}" alt="recommended free tour in singapore: monster day tours" />
                </div>
                <p>Monster Day Tours is the No.1 Free Walking Tour Operator in Singapore. We focus on authentic local experiences, hidden gems and exploring off-the-beaten paths in Singapore.
                </p>
                <a href="https://www.monsterdaytours.com" target="_blank"><div class="meta">Book with Monster Day Free Tours</div></a>
            </div>
            <div class="grid">
                <div class="imgholder">
                    <img src="{{asset('images/partners/free-tours-sydney.jpg')}}" alt="recommended free tour in Australia: free tour sydney" />
                </div>
                <p>Take our walking tour first to explore The City and The Rocks, then the bus tour to discover areas further away from the town that are not accessible by foot. Those areas are a must-see in Sydney. You will find our city to be the most beautiful in the world</p>
                <a href="http://www.freetourssydney.com.au" target="_blank"><div class="meta">Book with Sydney Free Tours</div></a>
            </div>

            <div class="grid">
                <div class="imgholder">
                    <img src="{{asset('images/partners/spicy-chile-free-walking-tours.jpg')}}" alt="recommended free tour in Chile: spicy chile" />
                </div>
                <p>We are an independent com­pany, founded by backpackers that after traveling in more than 50 countries realized that tourists in Chile were not getting what they deserved. That was the genesis of Spicy Chile, where we believe that every traveler has the right to take full advan­tage of touring the city.</p>
                <a href="http://www.spicychile.cl/" target="_blank"><div class="meta">Book with Spicy Chile Free Tours</div></a>
            </div>

            <!-- <div class="grid">
              <div class="imgholder">
                <img src="img/partners/monster-day-tours-walking-tours.jpg" alt="recommended free tour in Sigapore. monster day walks" />
              </div>
              <p>Monster Day Tours is the No.1 Free Walking Tour Operator in Singapore. We focus on authentic local experiences, hidden gems and exploring off-the-beaten paths in Singapore.</p>
                <a href="https://www.monsterdaytours.net/" target="_blank"><div class="meta">Book with Monster Day Walks</div></a>
            </div> -->

            <div class="grid">
                <div class="imgholder">
                    <img src="{{asset('images/partners/free-london-walking-tours.png')}}" alt="recommended free tour in england: london free walking tours" />
                </div>
                <p>Welcome to Free London Walking Tours! We offer seven different free walking tours, more than any other company in London! We are a small, independent company; this means our tour groups are much smaller than other free tour operators (usually less than 15 people).</p>
                <a href="http://freelondonwalkingtours.com/" target="_blank"><div class="meta">Book with Free London Walkng Tours</div></a>
            </div>

            <div class="grid">
                <div class="imgholder">
                    <img src="{{asset('images/partners/like-it-famosa-free-walking-tours.png')}}" alt="recommended free tour in Taipei: like it formosa" />
                </div>
                <p>Get Started, See Taipei from a local’s perspective with friendly and knowledgeable tour guides travelers from all over the world.</p>
                <a href="https://www.likeitformosa.com" target="_blank"><div class="meta">Book with Like it Formosa Taipei Walking Tours</div></a>
            </div>

            <div class="grid">
                <div class="imgholder">
                    <img src="{{asset('images/partners/hereos-tour-free-tour-colombia.PNG')}}" alt="recommended free tour in colombia: heroes colombia" />
                </div>
                <p>Heroes Tour is a premium walking tour, which enables tourists to discover Bogota's center, taste eight delicious local flavors and come to understand all the recent history of the country, beyond the clichés and taboos, Most importantly, you will learn about Colombian heroes.</p>
                <a href="https://heroestourbogota.com/" target="_blank"><div class="meta">Book with Heroes Colombia Free Tours</div></a>
            </div>

            <div class="grid">
                <div class="imgholder">
                    <img src="{{asset('images/partners/free-walker-tours-paraty-free-tour.PNG')}}" alt="recommended free tour in brasil: free walker tours paraty" />
                </div>
                <p>It is impossible to ignore the history of Paraty! Our Paraty Free Walking Tour will show you all the secrets and hidden gems of the charming historical center. You will feel as if you went back 250 years in time.</p>
                <a href="http://www.freewalkertours.com/paraty/" target="_blank"><div class="meta">Book with Free Walking Tour Paraty</div></a>
            </div>
            <div class="grid">
                <div class="imgholder">
                    <img src="{{asset('images/partners/tours-4-tips-chile.png')}}" alt="recommended free tour in chile: tours 4 tips" />
                </div>
                <p>Four tours in Valparaiso + Santiago + Viña del Mar + San Pedro de Atacama. The morning tours will take you to the undiscovered, and the afternoon tours will bring you to the highlights giving insight on why they are so unique to their cities.</p>
                <a href="https://tours4tips.com/" target="_blank"><div class="meta">Book with Tour 4 Tips Walking Tours</div></a>
            </div>

            <div class="grid">
                <div class="imgholder">
                    <img src="{{asset('images/partners/mallorca-free-tour.png')}}" alt="recommended free tour in spain: mallorca free tour" />
                </div>
                <p>Mallorca Free Tour is for the general public and is made up of small groups. Discover the history and emblematic buildings of the old city of Palma! Furthermore, you will learn about secret places, corners, and Majorcan lifestyle. Ask to your guide for the best places to enjoy the island.</p>
                <a href="https://www.mallorcafreetour.com/en/" target="_blank"><div class="meta">Book with Mallorca Free Tour</div></a>
            </div>

            <div class="grid">
                <div class="imgholder">
                    <img src="{{asset('images/partners/les-pepites-du-monde.PNG')}}" alt="les petites du monde" />
                </div>
                <p>Passionnée de voyage depuis bien longtemps, j’ai d’abord voyagé en famille entre l’Europe et l’Afrique. Puis aux USA pendant mes études.</p>
                <a href="https://lespepitesdumonde.com/" target="_blank"><div class="meta">Book with Les Pepites du Monde</div></a>
            </div>

            <div class="grid">
                <div class="imgholder">
                    <img src="{{asset('images/partners/vilnius-with-locals-free-walking-tours.png')}}" alt="recommended free tour in Lithuania: vilnius free walking tour" />
                </div>
                <p>We are a team of friendly, motivated and qualified local tour guides in Vilnius, Lithuania, our team consists of historians, economists, journalists, lawyers, and linguists, we hope to seeing you soon! </p>
                <a href="https://www.vilniuswithlocals.com" target="_blank"><div class="meta">Book with Vilnius Free Walking Tour</div></a>
            </div>

            <div class="grid">
                <div class="imgholder">
                    <img src="{{asset('images/partners/free-walking-tour-italia.png')}}" alt="recommended free tour in italia: free walking tour italia" />
                </div>
                <p>Join the biggest Italian network for Free Walking Tours and Experiences in Italy, choose our next destination and discover the city with us! Bergamo, Pisa, Bologna, Modena, Venice, Torino, Bari, Verona, Florence, Rome, Naples, Milan, Palermo, Catania, Lecce, Barletta, Cagliari, Lucca and many more. </p>
                <a href="https://freewalkingtouritalia.com" target="_blank"><div class="meta">Book with Free Walking Tour Italia</div></a>
            </div>

            <div class="grid">
                <div class="imgholder">
                    <img src="{{asset('images/partners/brussels-by-foot-walking-tours.PNG')}}" alt="recommended free tour in belgium: free walking tour brussels" />
                </div>
                <p>Away from "GrandPlace-MannekenPis-Atomium", Brussels By Foot wants to help you discover a whole new side of Brussels. Join our original and tailor-made walking tours, following a passionate guide into real places, meeting real people! See, feel, taste, smell and experience Brussels like a real Brusseleir!</p>
                <a href="https://www.brusselsbyfoot.com" target="_blank"><div class="meta">Book with Brussels by Foot</div></a>
            </div>

            <div class="grid">
                <div class="imgholder">
                    <img src="{{asset('images/partners/nola-tour-guy-free-walking-tour.jpg')}}" alt="recommended free tour in united states: free walking tour new orleans" />
                </div>
                <p>Nola Tour Guy, a worker-owned, New Orleans based, tour company offers the only “pay-what-you-feel” tour of both St. Louis Cemetery #1 and the French Quarter, as well as “pay-what-you-feel” Garden District walking tour.</p>
                <a href="https://www.nolatourguy.com" target="_blank"><div class="meta">Book with Nola Tour Guy</div></a>
            </div>

            <div class="grid">
                <div class="imgholder">
                    <img src="{{asset('images/partners/cape-town-free-walking-tours.jpg')}}" alt="recommended free tour in africa: free walking tour capetown" />
                </div>
                <p>Our Free Walking Tours are educative while fun and light and run on tips alone. We like to call it “infotainment”. We think everyone looking for things to do in Cape Town, and regardless of their budget, should experience our tours on foot!</p>
                <a href="http://freewalkingtourscapetown.co.za/" target="_blank"><div class="meta">Book with Cape Towsn Walking Tours</div></a>
            </div>

            <div class="grid">
                <div class="imgholder">
                    <img src="{{asset('images/partners/free-walking-tours-australia.png')}}" alt="recommended free walking tours in australia" />
                </div>
                <p>Join a Free Walking Tour in Australia whether you are looking for best historic atractions, awesome tour guides, top class dining, bars or cafes, art galleries, museums, fashion, shopping or sports events, Australia is unlikely to disappoint.</p>
                <a href="https://www.buddyfreewalkingtours.com.au/" target="_blank"><div class="meta">Book with Free Walking Tours Australia</div></a>
            </div>

        </div>
    </section>


@endsection

