@extends('layouts.admin.app-menu')
@section('scripts')
<script type="text/javascript">
//my code here
$(document).ready(function () {
    $('#sidebarCollapse').on('click', function () {
        $('#sidebar').toggleClass('active');
    });
});
</script>
@endsection
@section('breadcrumb')
<li class="breadcrumb-item"><a href="{{ route('admin.home.path')}}">Inicio</a></li>
<li class="breadcrumb-item"><a href="{{ route('admin.destino-inicio.index.path') }}">Destinos grupo</a></li>
<li class="breadcrumb-item active" aria-current="page">Nuevo</li>
@endsection
@section('content')
<form action="{{ route('admin.destino-grupo.store.path') }}" method="post" enctype="multipart/form-data">
    <div class="card">
        <div class="card-header">
            <h4 class="text-uppercase">
                Nuevo destino por grupo
            </h4>
        </div>
        <div class="card-body">
            {{-- @if (Session::has('success'))
                <div class="alert alert-success">
                    <ul>
                        <li>{!! Session::get('success') !!}</li>
                    </ul>
                </div>
            @endif --}}
            <div class="form-row">
                <div class="form-group col-12">
                    <div class="card bg-dark text-white">
                        <div class="card-header">
                            <h4 class="text-uppercase">1: Generales</h4>
                        </div>
                    </div>
                </div>
                <div class="form-group col-6">
                    <label for="idioma">Idioma</label>
                    <select  class="form-control" id="idioma" name="idioma" onchange="mostrar_destinos($(this).val(),'nuevo')">
                        <option value="0">Escoja una opcion</option>
                        @foreach ($idiomas as $item)
                            <option value="{{ $item->codigo }}" @if (old('idioma')==$item->codigo) selected @endif>{{ $item->nombre }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group col-6">
                    <label for="destino">Destino</label>
                    <select  class="form-control" id="destino" name="destino" >
                        <option value="0">Escoja una opcion</option>
                    </select>
                </div>
                <div class="form-group col-12">
                    <label for="titulo">Titulo</label>
                    <input type="text" class="form-control" id="titulo" name="titulo" placeholder="Nombre del titulo" value="{{ old('titulo') }}" required>
                </div>
                <div class="form-group col-12">
                    <label for="descripcion">Descripcion</label>
                    <textarea class="form-control" id="descripcion" name="descripcion" placeholder="Nombre del descripcion" cols="30" rows="10">{!! old('descripcion') !!}</textarea>
                </div>
                <div class="form-group col-12">
                    <label for="detalle">Detalle</label>
                    <textarea class="form-control" id="detalle" name="detalle" placeholder="Nombre del detalle" cols="30" rows="10">{!! old('detalle') !!}</textarea>
                </div>
                <div class="form-group col-12">
                    <label for="imagen">Galeria de banners <span class="text-danger">(1903x652)px</span></label>
                    <input type="file" class="form-control" id="banner_imagen" name="banner_imagen[]" placeholder="Nombre del imagen" multiple>
                </div>
                <div class="form-group col-12">
                    <div class="card bg-dark text-white">
                        <div class="card-header">
                            <h4 class="text-uppercase">2: Que y Porque</h4>
                        </div>
                    </div>
                </div>
                <div class="form-group col-12">
                    <label for="que_porque">Que y Porque?</label>
                    <textarea class="form-control" id="que_porque" name="que_porque" placeholder="Nombre del que_porque" cols="30" rows="10">{!! old('que_porque') !!}</textarea>
                </div>
                <div class="form-group col-12">
                    <label for="imagen">Galeria de imagenes <span class="text-danger">(715x380)px</span></label>
                    <input type="file" class="form-control" id="que_porque_imagen" name="que_porque_imagen[]" placeholder="Nombre del imagen" multiple>
                </div>
            </div>
        </div>
        <div class="card-footer text-right">
            @csrf
            <button type="submit" class="btn btn-primary text-center">Guardar</button>
        </div>
    </div>
</form>
<script>
    @if (Session::has('success'))
        toastr.success('{!! Session::get('success') !!}','MENSAJE DEL SISTEMA',{"progressBar":true,"closeButton":true})
    @elseif (Session::has('info'))
        toastr.info('{!! Session::get('info') !!}','MENSAJE DEL SISTEMA',{"progressBar":true,"closeButton":true})
    @elseif (Session::has('warning'))
        toastr.warning('{!! Session::get('warning') !!}','MENSAJE DEL SISTEMA',{"progressBar":true,"closeButton":true})
    @elseif (Session::has('error'))
        toastr.error('{!! Session::get('error') !!}','MENSAJE DEL SISTEMA',{"progressBar":true,"closeButton":true})
    @endif

    tinymce.init({
        selector: 'textarea',  // change this value according to your HTML
        plugin: 'a_tinymce_plugin',
        a_plugin_option: true,
        a_configuration_option: 400
        });
</script>
@endsection