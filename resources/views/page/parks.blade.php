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

    <section>
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium autem delectus dolore, ea est id incidunt inventore iste, iure laudantium libero neque non numquam quod rem sapiente soluta velit voluptas!
    </section>
@endsection

