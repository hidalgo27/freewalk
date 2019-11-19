@extends('layouts.page.app')
    @section('hreflang')

    @endsection
    @section('content')
@include('layouts.page.nav-home')
        <section>
            <picture>
                @foreach ($inicio->imagenes->where('estado', 2) as $foto2)

                    @if (Storage::disk('inicio')->has($foto2->imagen))
                        <source media="(max-width: 550px)" srcset="{{ route('admin.inicio.get_imagen.path',$foto2->imagen) }}">
                    @endif
                @endforeach
                @foreach ($inicio->imagenes->where('estado', 0) as $foto)
                    @if (Storage::disk('inicio')->has($foto->imagen))
                            <img src="{{ route('admin.inicio.get_imagen.path',$foto->imagen) }}" class="w-100" alt="free walking tours in peru">

                    @endif
                @endforeach

            </picture>
        </section>

        <section class="section01">
            <div class="container">
                <div class="main pt-5 pb-3">
                    <article class="text-justify border shadow p-3 mb-5 bg-light rounded" >
                        <h1 class="text-center">{{$inicio->titulo}}</h1>
                        {!! $inicio->descripcion !!}
                    </article>
                </div>
            </div>
        </section>
        <section class="section02 py-4">
            <div class="container maxw">
                <div class="row">

                    @foreach($destinos_inicio as $destinos_inicios)

                        @foreach($destinos_inicios->destino->destinos_grupo as $destino_grupo)

                        <div class="col-12 my-2">
                            <div class="box-torus">
                                <div class="row">
                                    <div class="col-sm-4">
                                        @if (Storage::disk('destino_inicio')->has($destinos_inicios->imagen))
                                        <img src="{{ route('admin.destino_inicio.get_imagen.path',$destinos_inicios->imagen) }}" class="img-fluid" alt="free walking tour lima">
                                        @endif
                                    </div>
                                    <div class="col-sm-8">
                                        <div class="box-text p-3 bg-white">
                                            <h2 class="h3 text-center" style="font-size: 1.5em">{{$destinos_inicios->titulo}}</h2>
                                            <p class="text-justify">{!! $destinos_inicios->detalle !!}</p>
                                            <span class="text-right d-block">
                                                @php $locale = strtolower($locale) @endphp
                                                <a class="btn btn-warning btn-free btn-lg" href="{{ route('destination_path', [$locale, $destino_grupo->url]) }}" role="button">@lang('home.interested')</a>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    @endforeach
                </div>
            </div>
        </section>

    @endsection
