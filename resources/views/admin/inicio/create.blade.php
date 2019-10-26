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
<li class="breadcrumb-item"><a href="{{ route('admin.inicio.index.path') }}">inicio</a></li>
<li class="breadcrumb-item active" aria-current="page">Nuevo</li>
@endsection
@section('content')
<form action="{{ route('admin.inicio.store.path') }}" method="post" enctype="multipart/form-data">
    <div class="card">
        <div class="card-header">
            <h4 class="text-uppercase">
                Nuevo inicio
            </h4>
        </div>
        <div class="card-body">
            <div class="form-row">
                <div class="form-group col-12">
                    <div class="card bg-dark text-white">
                        <div class="card-header">
                            <h4 class="text-uppercase">1: Generales</h4>
                        </div>
                    </div>
                </div>
                <div class="form-group col-2">
                    <label for="idioma">Idioma</label>
                    <select  class="form-control" id="idioma" name="idioma">
                        @foreach ($idiomas as $item)
                            <option value="{{ $item->codigo }}" @if (old('idioma')==$item->codigo) selected @endif>{{ $item->nombre }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group col-6">
                    <label for="url">Url <span class="text-small">(<span>http://midominio.com/<span><span class="text-primary">mi-url</span>) <span class="text-danger">No caracteres especiales, ni MAYUSCULAS</span></span></label>
                    <input type="text" class="form-control" id="url" name="url" placeholder="Ingrese la url" value="{{ old('url') }}" required>
                </div>
                <div class="form-group col-4">
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
                {{-- <div class="form-group col-12">
                    <div class="card bg-dark text-white">
                        <div class="card-header">
                            <h4 class="text-uppercase">2: Seo</h4>
                        </div>
                    </div>
                </div>
                <div class="form-group col-12">
                    <div class="row">
                        <div class="form-group col-6">
                            <div class="row">
                                <div class="form-group col-12">
                                    <label for="seo_titulo">Titulo</label>
                                    <input type="text" class="form-control" id="seo_titulo" name="seo_titulo" placeholder="Nombre del titulo" value="{{ old('seo_titulo') }}" required>
                                </div>
                                <div class="form-group col-12">
                                    <label for="seo_canonical">Canonical(url)</label>
                                    <input type="text" class="form-control" id="seo_canonical" name="seo_canonical" placeholder="Nombre la url canonical" value="{{ old('seo_canonical') }}" required>
                                </div>
                                <div class="form-group col-12">
                                    <label for="seo_imagen">Imagen</label>
                                    <input type="file" class="form-control" id="seo_imagen" name="seo_imagen" placeholder="Nombre del titulo" value="{{ old('seo_imagen') }}" required>
                                </div>
                            </div>
                        </div>
                        <div class="form-group col-6">
                            <div class="row">
                                <div class="form-group col">
                                    <label for="seo_descripcion">Descripcion</label>
                                    <textarea class="form-control" id="seo_descripcion" name="seo_descripcion" placeholder="Nombre del Descripcion" cols="30" rows="10">{!! old('seo_descripcion') !!}</textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> --}}
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
