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
<li class="breadcrumb-item"><a href="{{ route('admin.inicio.index.path') }}">Inicio</a></li>
<li class="breadcrumb-item active" aria-current="page">Editar</li>
@endsection
@section('content')
<form action="{{ route('admin.inicio.index.idioma.update.path',[$inicio->id,$idioma_->codigo,$arreglo]) }}" method="post" enctype="multipart/form-data">
    <div class="card">
        <div class="card-header">
            <h4 class="text-uppercase">
                Editar inicio
            </h4>
        </div>
        <div class="card-body">
            <div class="form-row">
                <div class="form-group col-2">
                    <label for="idioma">Idioma</label>
                    <select  class="form-control" id="idioma" name="idioma">
                        <option value="{{ $inicio->idioma }}" selected >{{ $inicio->idioma }}</option>
                    </select>
                </div>
                <div class="form-group col-6">
                    <label for="url">Url <span class="text-small">(<span>http://midominio.com/<span><span class="text-primary">mi-url</span>) <span class="text-danger">No caracteres especiales, ni MAYUSCULAS</span></span></label>
                    <input type="text" class="form-control" id="url" name="url" placeholder="Ingrese la url" value="{{ $inicio->url }}" required>
                </div>
                <div class="form-group col-4">
                    <label for="titulo">Titulo</label>
                    <input type="text" class="form-control" id="titulo" name="titulo" placeholder="Nombre del titulo" value="{{ $inicio->titulo }}">
                </div>
                <div class="form-group col-12">
                    <label for="descripcion">Descripcion</label>
                    <textarea class="form-control" id="descripcion" name="descripcion" placeholder="Nombre del descripcion" cols="30" rows="10">{!! $inicio->descripcion !!}</textarea>
                </div>
                <div class="form-group col-12 text-left">
                    <p><b>Banner</b></p>
                    @foreach ($inicio->imagenes->where('estado','0') as $foto)
                        @if (Storage::disk('inicio')->has($foto->imagen))
                            <figure class="figure m-3" id="inicio_banner_imagen_{{ $foto->id }}">
                                <img src="{{ route('admin.inicio.get_imagen.path',$foto->imagen) }}" class="figure-img rounded w-100" alt="{{ $foto->imagen}}">
                                <figcaption class="figure-caption text-right mt-0">
                                    <a href="#!" class="btn btn-danger btn btn-block" onclick="borrar_imagen_destino_inicio('inicio_banner_imagen_{{ $foto->id}}')">
                                        <i class="fas fa-trash-alt"></i>
                                    </a>
                                </figcaption>
                                <input type="hidden" name="banner_imagen_[]" value="{{ $foto->id }}">
                            </figure>
                        @endif
                    @endforeach
                </div>
                <div class="form-group col-12">
                    <label for="imagen">Galeria de banners <span class="text-danger">(1903x652)px</span></label>
                    <input type="file" class="form-control" id="banner_imagen" name="banner_imagen[]" placeholder="Nombre del imagen" multiple>
                </div>
            </div>
        </div>
        <div class="card-footer text-right">
            @csrf
            @method('patch')
            <input type="hidden" name="id" value="{{ $inicio->id }}">
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
