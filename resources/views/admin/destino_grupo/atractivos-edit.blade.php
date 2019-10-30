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
<li class="breadcrumb-item"><a href="{{ route('admin.destino-grupo.index.path') }}">Destinos grupo</a></li>
<li class="breadcrumb-item"><a href="{{ route('admin.destino-grupo.atractivos.index.path',$destino_grupo->id) }}">Lista de atractivos</a></li>
<li class="breadcrumb-item active" aria-current="page">Edit</li>
@endsection
@section('content')
<form action="{{ route('admin.destino-grupo.atractivos.update.path',[$destino_grupo->id,$destino_grupo_imagen->id]) }}" method="post" enctype="multipart/form-data">
    <div class="card">
        <div class="card-header">
            <h4 class="text-primary"><b class="text-dark">Titulo:</b> {{ $destino_grupo->titulo }} <b class="text-dark">| Idioma:</b>{{ $destino_grupo->idioma }} <b class="text-dark">| Destino:</b>{{ $destino_grupo->destino->nombre }}</h4>
        </div>
    </div>
    <div class="card">
        <div class="card-header">
            <h4 class="text-uppercase">
                Nuevo atractivo
            </h4>
        </div>
        <div class="card-body">
            <div class="form-row">
                <div class="form-group col-12">
                    <label for="titulo">Titulo</label>
                    <input type="text" class="form-control" id="atractivo_titulo" name="atractivo_titulo" placeholder="Nombre del titulo" value="{{ $destino_grupo_imagen->titulo}}" required>
                </div>
                <div class="form-group col-12">
                    <label for="descripcion">Descripcion</label>
                    <textarea class="form-control" id="atractivo_descripcion" name="atractivo_descripcion" placeholder="Nombre del descripcion" cols="30" rows="10">{!! $destino_grupo_imagen->descripcion !!}</textarea>
                </div>
                {{-- <div class="form-group col-12">
                    <label for="imagen">Imagen <span class="text-danger">(468x400)px</span></label>
                    <input type="file" class="form-control" id="atractivo_imagen" name="atractivo_imagen" placeholder="Nombre del imagen" >
                </div> --}}
                <div class="form-group col-12 text-left">
                    <p><b>Imagen</b></p>
                    @if (Storage::disk('destino_grupo')->has($destino_grupo_imagen->imagen))
                        <figure class="figure m-3" id="destino_inicio_imagen_{{ $destino_grupo_imagen->id }}">
                            <img src="{{ route('admin.destino_grupo.get_imagen.path',$destino_grupo_imagen->imagen) }}" class="figure-img rounded" alt="{{ $destino_grupo_imagen->imagen}}" width="468px" height="400px">
                            <figcaption class="figure-caption text-right mt-0">
                                <a href="#!" class="btn btn-danger btn btn-block" onclick="borrar_imagen_destino_inicio('destino_inicio_imagen_{{ $destino_grupo_imagen->id}}')">
                                    <i class="fas fa-trash-alt"></i>
                                </a>
                            </figcaption>
                            <input type="hidden" name="atractivo_imagen_" value="{{ $destino_grupo_imagen->imagen }}">
                        </figure>
                    @endif
                </div>
                <div class="form-group col-12">
                    <label for="imagen">Imagen <span class="text-danger">(468x400)px</span></label>
                    <input type="file" class="form-control" id="atractivo_imagen" name="atractivo_imagen" placeholder="Nombre del imagen" >
                </div>
            </div>
        </div>
        <div class="card-footer text-right">
            @csrf
            @method('patch')
            <input type="hidden" name="id" value="{{ $destino_grupo_imagen->id }}">
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
