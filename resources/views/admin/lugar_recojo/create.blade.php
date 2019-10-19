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
<li class="breadcrumb-item"><a href="{{ route('admin.lugar_recojo.index.path') }}">Lugar de recojo</a></li>
<li class="breadcrumb-item active" aria-current="page">Nuevo</li>
@endsection
@section('content')
<form action="{{ route('admin.lugar_recojo.store.path') }}" method="post" enctype="multipart/form-data">
    <div class="card">
        <div class="card-header">
            <h4 class="text-uppercase">
                Nuevo lugar de recojo
            </h4>
        </div>
        <div class="card-body">
            <div class="form-row">
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
                    <label for="frame">Frame</label>
                    <textarea class="form-control" id="detalle" name="frame" placeholder="Ingrese el frame de GoogleMaps" cols="30" rows="10">{!! old('frame') !!}</textarea>
                </div>
                <div class="form-group col-12">
                    <label for="referencia">Referencia</label>
                    <input type="text" class="form-control" id="referencia" name="referencia" placeholder="Ingrese la referencia" value="{{ old('referencia') }}" required>
                </div>
                <div class="form-group col-12">
                    <label for="imagen">Imagen de la referencia<span class="text-danger">(412x348)px</span></label>
                    <input type="file" class="form-control" id="referencia_imagen" name="referencia_imagen" placeholder="Nombre del imagen" >
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
</script>
@endsection
