<nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light pb-0 bg-free">
    <div class="container">
        <a class="navbar-brand" href="/{{strtolower($locale)}}"><img src="{{asset('images/logo-freewalks.png')}}" alt="peru"></a>
        <div class="collapse navbar-collapse" id="cssmenu">
            @include('layouts.page.menu')
        </div>
        <ul class="navbar-nav p-2">

            @foreach($tour_tr as $tours_tr)
{{--                                {{$locale}} - {{$tours_tr->idioma}}--}}

                {{--                {{$destino_grupo_idiomas->id}} - {{$destino_grupo_idiomas->idioma}}--}}
                @if(strtolower($tours_tr->idioma) !== strtolower($locale))
                    <li><a class="flag" href="{{route('lang_tours_path', [$tours_tr->url, $tours_tr->idioma, $destino_url])}}"><img src="{{asset('images/'.strtolower($tours_tr->idioma).'.png')}}" alt="flag spanish"></a></li>
                @endif

                {{--                @if ($destino_grupo_idiomas->idioma == 'en')--}}
                {{--                    <li><a class="flag" href="{{route('lang_agrupados_path', ['2', 'es', 'en'])}}"><img src="{{asset('images/es.png')}}" alt="flag spanish"></a></li>--}}
                {{--                    --}}{{--                    <li><a class="flag" href="{{ route('lang_path', 'pt') }}"><img src="{{asset('images/logo-freewalkss.png')}}" alt="flag spanish"></a></li>--}}
                {{--                @endif--}}
                {{--                @if ($locale == 'es')--}}
                {{--                    <li><a class="flag" href="{{route('lang_agrupados_path', ['1', 'en', 'es'])}}"><img src="{{asset('images/en.png')}}" alt="flag spanish"></a></li>--}}
                {{--                    --}}{{--                    <li><a class="flag" href="{{ route('lang_path', 'pt') }}"><img src="{{asset('images/logo-freewalkss.png')}}" alt="flag spanish"></a></li>--}}
                {{--                @endif--}}
            @endforeach

            {{--                @if ($locale == 'pt')--}}
            {{--                    <li><a class="flag" href="{{ route('lang_path', 'en') }}"><img src="{{asset('images/en.png')}}" alt="flag spanish"></a></li>--}}
            {{--                    <li><a class="flag" href="{{ route('lang_path', 'es') }}"><img src="{{asset('images/es.png')}}" alt="flag spanish"></a></li>--}}
            {{--                @endif--}}
            {{--                @if ($locale == 'pt')--}}
            {{--                    <li><a class="flag" href="{{ route('lang_path', 'pt') }}"><img src="{{asset('favicon.ico')}}" alt="flag spanish"></a></li>--}}
            {{--                @endif--}}

        </ul>
    </div>
</nav>
