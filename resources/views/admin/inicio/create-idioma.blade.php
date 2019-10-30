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
<li class="breadcrumb-item"><a href="{{ route('admin.inicio.index.path') }}">inicios</a></li>
<li class="breadcrumb-item active" aria-current="page">Nuevo</li>
@endsection
@section('content')
<form action="{{ route('admin.inicio.index.idioma.store.path',[$inicio->id,$idioma_->codigo,$arreglo]) }}" method="post" enctype="multipart/form-data">
    <div class="card">
        <div class="card-header">
            <h4 class="text-uppercase">
                Nuevo inicio
            </h4>
        </div>
        <div class="card-body">
            <div class="form-row">
                <div class="form-group col-2">
                    <label for="idioma">Idioma</label>
                    <select  class="form-control" id="idioma" name="idioma">
                        <option value="{{ $idioma_->codigo }}" selected >{{ $idioma_->nombre }}</option>
                    </select>
                </div>
                <div class="form-group col-6 d-none">
                    <label for="url">Url <span class="text-small">(<span>http://midominio.com/<span><span class="text-primary">mi-url</span>) <span class="text-danger">No caracteres especiales, ni MAYUSCULAS</span></span></label>
                    <input type="text" class="form-control" id="url" name="url" placeholder="Ingrese la url" value="-" required>
                </div>
                <div class="form-group col-10">
                    <label for="titulo">Titulo</label>
                    <input type="text" class="form-control" id="titulo" name="titulo" placeholder="Nombre del titulo" value="{{ old('titulo') }}" required>
                </div>
                <div class="form-group col-12">
                    <label for="descripcion">Descripcion</label>
                    <textarea class="form-control" id="descripcion" name="descripcion" placeholder="Nombre del descripcion" cols="30" rows="10">{!! old('descripcion') !!}</textarea>
                </div>
                <div class="form-group col-12">
                    <label for="imagen">Galeria de banners <span class="text-danger">(1903x652)px</span></label>
                    <input type="file" class="form-control" id="banner_imagen" name="banner_imagen[]" placeholder="Nombre del imagen" multiple>
                </div>
                <div class="form-group col-12">
                    <label for="imagen">Galeria de banners(Mobile) <span class="text-danger">(526x450)px</span></label>
                    <input type="file" class="form-control" id="banner_imagen_mobile" name="banner_imagen_mobile[]" placeholder="Nombre del imagen" multiple>
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
