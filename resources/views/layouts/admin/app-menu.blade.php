<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/plugins-admin.js') }}"></script>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ mix('css/admin/admin.css') }}" rel="stylesheet">
    <script src="https://cdn.tiny.cloud/1/2in59l47avr2rksvixcixveum59rnsl7d7544tjss4643cr3/tinymce/5/tinymce.min.js"></script>
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-0">
            {{-- @yield('content') --}}

            <div class="wrapper">
                <!-- Sidebar  -->
                <nav id="sidebar" class="">
                    {{-- <div class="sidebar-header">
                        <h3>Freewalk</h3>
                    </div> --}}
                    <ul class="list-unstyled components">
                        {{-- <p><b><i class="fas fa-user text-success"></i> {{__('Freddy silva')}}</b><br>
                        <a class="text-primary" href="#!">Editar</a> <a class="text-primary" href="#!">Salir</a></p> --}}
                        <li class="active">
                            <a href="#base_datos" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Base de datos</a>
                            <ul class="collapse list-unstyled show" id="base_datos">
                                <li class="active">
                                    <a href="{{route('admin.idioma.index.path')}}">Idiomas</a>
                                </li>
                                <li class="active">
                                    <a href="{{route('admin.destino.index.path')}}">Destinos</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="{{route('admin.destino-inicio.index.path')}}">Destinos Inicio</a>
                        </li>
                        <li>
                            <a href="{{route('admin.destino-grupo.index.path')}}">Destinos agrupados</a>
                        </li>
                        <li>
                            <a href="{{route('admin.lugar_recojo.index.path')}}">Lugar de recojo</a>
                        </li>
                        <li>
                            <a href="{{route('admin.tour.index.path')}}">Tours</a>
                        </li>
                    </ul>
                </nav>
                <!-- Page Content  -->
                <div id="content" class="hijo">
                        <div class="container-fluid">
                            <div class="card mb-1">
                                <div class="card-body py-0 mb-0 pl-0">
                                    <div class="row">                                
                                        <div class="col-1">
                                            <nav class="navbar navbar-expand-lg navbar-light bg-light pb-0 mb-0">
                                                <button type="button" id="sidebarCollapse" class="btn btn-dark">
                                                    <i class="fas fa-align-left"></i>
                                                    <span class="d-none">Toggle Sidebar</span>
                                                </button>
                                            </nav>
                                        </div>
                                        <div class="col-11 pl-0">
                                            <nav aria-label="breadcrumb">
                                                <ol class="breadcrumb mt-2">
                                                    @yield('breadcrumb')
                                                </ol>
                                            </nav>
                                        </div>
                                    </div>
                                

                                </div>
                            </div>
                        </div>
                   
                    <div class="container-fluid">
                        @yield('content')
                    </div>
                </div>
            </div>
        </main>
    </div>
    @yield('scripts')
</body>
</html>


