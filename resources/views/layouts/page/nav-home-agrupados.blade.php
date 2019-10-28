<nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light pb-0 bg-free">
    <div class="container">
        <a class="navbar-brand" href="/"><img src="{{asset('images/logo-freewalks.png')}}" alt="peru"></a>
        <div class="collapse navbar-collapse" id="cssmenu">
            @include('layouts.page.menu')
        </div>
        <ul class="navbar-nav p-2">
            @if ($locale == 'en')
                <li><a class="flag" href="{{route('lang_agrupados_path', [session('id_'.$destino_grupos->id), 'es'])}}"><img src="{{asset('images/es.png')}}" alt="flag spanish"></a></li>
                {{--                    <li><a class="flag" href="{{ route('lang_path', 'pt') }}"><img src="{{asset('images/logo-freewalkss.png')}}" alt="flag spanish"></a></li>--}}
            @endif
            @if ($locale == 'es')
                <li><a class="flag" href="{{route('lang_agrupados_path', [session('id_'.$destino_grupos->id), 'en'])}}"><img src="{{asset('images/en.png')}}" alt="flag spanish"></a></li>
                {{--                    <li><a class="flag" href="{{ route('lang_path', 'pt') }}"><img src="{{asset('images/logo-freewalkss.png')}}" alt="flag spanish"></a></li>--}}
            @endif
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