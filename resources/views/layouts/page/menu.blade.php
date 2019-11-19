
			<ul class="navbar-nav ml-auto">
	             <li><a href='/{{strtolower($locale)}}'>Home</a></li>
                @foreach($destino->where('estado', 1)->sortBy('orden') as $destinos)
                    @foreach($destinos->destinos_grupo as $destinos_inicios)
                    @if ($destinos->tours->count() > 0)
                        @if(strtolower($destinos->idioma) == strtolower($locale))
                        <li class="has-sub"><a href='{{route('destination_path', [strtolower($locale), $destinos_inicios->url])}}/'>{{ucwords(strtolower($destinos->nombre))}}</a>
                            <ul class='lista-submenu-nav'>
                                <li><a href='{{route('destination_path', [strtolower($locale), $destinos_inicios->url])}}'><strong>Details of Free Tour {{ucwords(strtolower($destinos->nombre))}} here!</strong></a></li>
                                @foreach($destinos->tours as $tours)
                                    <li><a href='{{route('destination_tour_path', [strtolower($locale), $destinos_inicios->url, strtolower(str_replace(' ','-', $tours->url ))])}}'>{{$tours->titulo}}</a></li>
                                @endforeach
{{--                                @if ($destinos_inicios->url == 'lima')--}}

{{--                                    <li><a href="{{route('parks_lima_path', strtolower($locale))}}"><b>Parks in Lima</b></a></li>--}}
{{--                                @endif--}}
                            </ul>
                        </li>

                        @endif
                    @else
                        @if(strtolower($destinos->idioma) == strtolower($locale))
                            <li><a href='{{route('destination_path', [strtolower($locale), $destinos_inicios->url])}}/'>{{ucwords(strtolower($destinos->nombre))}}</a></li>
                        @endif
                    @endif
                    @endforeach
                @endforeach
{{--	             <li><a href='{{route('destination_show_path')}}'>Miraflores</a>--}}
{{--					<!-- <ul class='lista-submenu-nav'>--}}
{{--					<li><a href='#'>Free Walking Tour at 4:15pm</a></li>--}}
{{--				   </ul> -->--}}
{{--	             </li>--}}
{{--	             <li><a href='{{route('destination_show_path')}}'>Barranco</a>--}}
{{--				 </li>--}}
{{--	             <li class="has-sub"><a href='{{route('destination_path', 1)}}'>Arequipa</a>--}}
{{--					<ul class='lista-submenu-nav'>--}}
{{--					<li><a href="{{route('destination_path', 1)}}"><strong>Details of Free Tour Aqp here!</strong></a></li>--}}
{{--					<li><a href='{{route('destination_show_path')}}'>Free Tour Aqp at 10am</a></li>--}}
{{--					<li><a href='{{route('destination_show_path')}}'>Free Tour Aqp at 3pm</a></li>--}}
{{--					<li><a href='{{route('destination_show_path')}}'>Arequipa Private Tours & Walks</a></li>--}}
{{--				   </ul>--}}
{{--	             </li>--}}
{{--	             <li class="has-sub"><a href='{{route('destination_path', 1)}}'>Cusco</a>--}}
{{--					<ul class='lista-submenu-nav'>--}}
{{--					<li><a href="{{route('destination_path', 1)}}"><strong>Details of Free Tour Cusco here!</strong></a></li>--}}
{{--					<li><a href='{{route('destination_show_path')}}'>Free Tour Cusco at 10am</a></li>--}}
{{--					<li><a href='{{route('destination_show_path')}}'>Free Tour Cusco at 1pm</a></li>--}}
{{--					<li><a href='{{route('destination_show_path')}}'>Free Tour Cusco at 3:30pm</a></li>--}}
{{--					<li><a href='{{route('destination_show_path')}}'>Cusco Sunday Free Tour</a></li>--}}
{{--					<li><a href='{{route('destination_show_path')}}'>Cusco Private Tours & Walks</a></li>--}}
{{--				   </ul>--}}
{{--	             </li>--}}
	             <li><a href='http://blog.freewalkingtoursperu.com/'>Blog</a></li>
	           <!--   <li><a href='/contact-us'>Contact us</a></li> -->
	            <!--  <li><a href='/booking/'>Booking</a></li> -->
		    </ul>
