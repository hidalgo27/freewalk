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
<li class="breadcrumb-item"><a href="{{ route('admin.destino-inicio.index.path') }}">Destinos inicio</a></li>
<li class="breadcrumb-item active" aria-current="page">Editar</li>
@endsection
@section('content')
<form action="{{ route('admin.destino-inicio.update.path',$oDestino_inicio->id) }}" method="post" enctype="multipart/form-data">
    <div class="card">
        <div class="card-header">
            <h4 class="text-uppercase">
                Editar destino inicio
            </h4>
        </div>
        <div class="card-body">
            <div class="form-row">
                <div class="form-group col-6">
                    <label for="idioma">Idioma</label>
                    <select  class="form-control" id="idioma" name="idioma" onchange="mostrar_destinos($(this).val(),'editar')">
                        <option value="0">Escoja una opcion</option>
                        @foreach ($idiomas as $item)
                            <option value="{{ $item->codigo }}" @if ($oDestino_inicio->idioma==$item->codigo) selected @endif>{{ $item->nombre }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group col-6">
                    <label for="destino">Destino</label>
                    <select  class="form-control" id="destino" name="destino" >
                        <option value="0">Escoja una opcion</option>
                        @foreach ($oDestinos->sortBy('nombre') as $destino)
                            <option value="{{ $destino->id }}" @if ($oDestino_inicio->destino_id==$destino->id) selected @endif>{{ $destino->nombre }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group col-12">
                    <label for="titulo">Titulo</label>
                    <input type="text" class="form-control" id="titulo" name="titulo" placeholder="Nombre del titulo" value="{{ $oDestino_inicio->titulo }}" required>
                </div>
                <div class="form-group col-12">
                    <label for="detalle">Detalle</label>
                    <textarea class="form-control" id="detalle" name="detalle" placeholder="Nombre del detalle" cols="30" rows="10">{!! $oDestino_inicio->detalle !!}</textarea>
                </div>
                <div class="form-group col-12 text-left">
                    <p><b>Imagen</b></p>
                    @if (Storage::disk('destino_inicio')->has($oDestino_inicio->imagen))
                        <figure class="figure m-3" id="destino_inicio_imagen_{{ $oDestino_inicio->id }}">
                            <img src="{{ route('admin.destino_inicio.get_imagen.path',$oDestino_inicio->imagen) }}" class="figure-img rounded" alt="{{ $oDestino_inicio->imagen}}" width="468px" height="400px">
                            <figcaption class="figure-caption text-right mt-0">
                                <a href="#!" class="btn btn-danger btn btn-block" onclick="borrar_imagen_destino_inicio('destino_inicio_imagen_{{ $oDestino_inicio->id}}')">
                                    <i class="fas fa-trash-alt"></i>
                                </a>
                            </figcaption>
                            <input type="hidden" name="imagen_" value="{{ $oDestino_inicio->imagen }}">
                        </figure>
                    @endif
                </div>
                <div class="form-group col-12">
                    <label for="imagen">Imagen <span class="text-danger">(468x400)px</span></label>
                    <input type="file" class="form-control" id="imagen" name="imagen" placeholder="Nombre del imagen" >
                </div>
            </div>
        </div>
        <div class="card-footer text-right">
            @csrf
            @method('patch')
            <input type="hidden" name="id" value="{{ $oDestino_inicio->id }}">
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
