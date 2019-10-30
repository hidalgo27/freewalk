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
<li class="breadcrumb-item"><a href="{{ route('admin.tour.index.path') }}">Tours</a></li>
<li class="breadcrumb-item active" aria-current="page">Nuevo</li>
@endsection
@section('content')
<form action="{{ route('admin.tour.index.idioma.store.path',[$tour->id,$idioma_->codigo,$arreglo]) }}" method="post" enctype="multipart/form-data">
    <div class="card">
        <div class="card-header">
            <h4 class="text-uppercase">
                Nuevo tour
            </h4>
        </div>
        <div class="card-body">
            <div class="form-row">
                <div class="form-group col-12">
                    <div class="card bg-dark text-white">
                        <div class="card-header">
                            <h4 class="text-uppercase">1: Generales</h4>
                        </div>
                    </div>
                </div>
                <div class="form-group col-3">
                    <label for="idioma">Idioma</label>
                    <select  class="form-control" id="idioma" name="idioma" >
                        <option value="0">Escoja una opcion</option>
                        {{-- @foreach ($idiomas as $item) --}}
                            <option value="{{ $idioma_->codigo }}" selected >{{ $idioma_->nombre }}</option>
                        {{-- @endforeach --}}
                    </select>
                </div>
                <div class="form-group col-3">
                    <label for="destino">Destino</label>
                    <select  class="form-control" id="destino" name="destino" >
                        <option value="0">Escoja una opcion</option>
                        <option value="{{ $destino->id }}" selected >{{ $destino->nombre }}</option>
                    </select>
                </div>

                <div class="form-group col-6">
                    <label for="lugar_recojo">Lugar de recojo</label>
                    <select  class="form-control" id="lugar_recojo" name="lugar_recojo" >
                        <option value="0">Escoja una opcion</option>
                        <option value="{{ $lugar_recojo->id }}" selected >{{ $lugar_recojo->titulo }}</option>
                    </select>
                </div>
                <div class="form-group col-6">
                    <label for="url">Url <span class="text-small">(<span>http://midominio.com/<span><span class="text-primary">mi-url</span>) <span class="text-danger">No caracteres especiales, ni MAYUSCULAS</span></span></label>
                    <input type="text" class="form-control" id="url" name="url" placeholder="Nombre del url" value="{{ old('url') }}" required>
                </div>
                <div class="form-group col-6">
                    <label for="titulo">Titulo</label>
                    <input type="text" class="form-control" id="titulo" name="titulo" placeholder="Nombre del titulo" value="{{ old('titulo') }}" required>
                </div>
                <div class="form-group col-12">
                    <label for="descripcion">Descripcion</label>
                    <textarea class="form-control" id="descripcion" name="descripcion" placeholder="Nombre del descripcion" cols="30" rows="10">{!! old('descripcion') !!}</textarea>
                </div>
                <div class="form-group col-12">
                    <label for="itinerario">Itinerario</label>
                    <textarea class="form-control" id="itinerario" name="itinerario" placeholder="Nombre del itinerario" cols="30" rows="10">{!! old('itinerario') !!}</textarea>
                </div>
                <div class="form-group col-12">
                    <label for="imagen">Galeria de banners <span class="text-danger">(1903x652)px</span></label>
                    <input type="file" class="form-control" id="banner_imagen" name="banner_imagen[]" placeholder="Nombre del imagen" multiple>
                </div>
                <div class="form-group col-12">
                    <label for="imagen">Galeria de banners(Mobile) <span class="text-danger">(500x428)px</span></label>
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
