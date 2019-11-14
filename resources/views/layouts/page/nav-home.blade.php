<nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light pb-0 bg-free">
    <div class="container">
        <a class="navbar-brand" href="/{{strtolower($locale)}}"><img src="{{asset('images/logo-freewalks.png')}}" alt="peru"></a>
        <div class="collapse navbar-collapse" id="cssmenu">
            @include('layouts.page.menu')
        </div>
        <ul class="navbar-nav p-2">
            @foreach($destino_inicio_idiomas as $destinos_inicio_idiomas)
                @if(strtolower($destinos_inicio_idiomas->idioma) !== strtolower($locale))
                    <li><a class="flag" href="{{ route('lang_path', $destinos_inicio_idiomas->idioma) }}"><img src="{{asset('images/'.strtolower($destinos_inicio_idiomas->idioma).'.png')}}" class="mx-2" alt="flag spanish"></a></li>
                @endif
            @endforeach
{{--            @if ($locale == 'en')--}}
{{--                <li><a class="flag" href="{{ route('lang_path', 'es') }}"><img src="{{asset('images/es.png')}}" alt="flag spanish"></a></li>--}}
{{--                --}}{{--                    <li><a class="flag" href="{{ route('lang_path', 'pt') }}"><img src="{{asset('images/logo-freewalkss.png')}}" alt="flag spanish"></a></li>--}}
{{--            @endif--}}
{{--            @if ($locale == 'es')--}}
{{--                <li><a class="flag" href="{{ route('lang_path', 'en') }}"><img src="{{asset('images/en.png')}}" alt="flag spanish"></a></li>--}}
{{--                --}}{{--                    <li><a class="flag" href="{{ route('lang_path', 'pt') }}"><img src="{{asset('images/logo-freewalkss.png')}}" alt="flag spanish"></a></li>--}}
{{--            @endif--}}
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
