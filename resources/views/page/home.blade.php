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
                        <h1 class="text-center">@lang('home.h1')</h1>
                        <p>@lang('home.p')</p>
                        <p>@lang('home.note')</p>
                    </article>
                </div>
            </div>
        </section>
        <section class="section02 py-4">
            <div class="container maxw">
                <div class="row">
                    @foreach($destinos_inicio as $destinos_inicios)
                        <div class="col-12 my-2">
                            <div class="box-torus">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <img src="{{asset('images/free-walking-tour-lima.jpg')}}" class="img-fluid" alt="free walking tour lima">
                                    </div>
                                    <div class="col-sm-8">
                                        <div class="box-text p-3 bg-white">
                                            <h2 class="h3 text-center" style="font-size: 1.5em">{{$destinos_inicios->titulo}}</h2>
                                            <p class="text-justify">@php echo $destinos_inicios->detalle; @endphp</p>
                                            <span class="text-right d-block">
                                                <a class="btn btn-warning btn-free btn-lg" href="{{ route('destination_path', $destinos_inicios->id) }}"  target="_blank" role="button">I´m interested!</a>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>

    @endsection
