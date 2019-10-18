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
<li class="breadcrumb-item active" aria-current="page">Editar</li>
@endsection
@section('content')
<form action="{{ route('admin.destino-grupo.update.path',$oDestino_grupo->id) }}" method="post" enctype="multipart/form-data">
    <div class="card">
        <div class="card-header">
            <h4 class="text-uppercase">
                Editar destino grupo
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
                    <select  class="form-control" id="idioma" name="idioma" onchange="mostrar_destinos($(this).val(),'editar')">
                        <option value="0">Escoja una opcion</option>
                        <option value="es" @if ($oDestino_grupo->idioma=='es') selected @endif>Español</option>
                        <option value="en" @if ($oDestino_grupo->idioma=='en') selected @endif>Ingles</option>
                    </select>
                </div>
                <div class="form-group col-6">
                    <label for="destino">Destino</label>
                    <select  class="form-control" id="destino" name="destino">
                        <option value="0">Escoja una opcion</option>
                        @foreach ($oDestinos->sortBy('nombre') as $destino)
                            <option value="{{ $destino->id }}" @if ($oDestino_grupo->destino_id==$destino->id) selected @endif>{{ $destino->nombre }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group col-12">
                    <label for="titulo">Titulo</label>
                    <input type="text" class="form-control" id="titulo" name="titulo" placeholder="Nombre del titulo" value="{{ $oDestino_grupo->titulo }}" required>
                </div>
                <div class="form-group col-12">
                    <label for="descripcion">Descripcion</label>
                    <textarea class="form-control" id="descripcion" name="descripcion" placeholder="Nombre del descripcion" cols="30" rows="10">{!! $oDestino_grupo->descripcion !!}</textarea>
                </div>
                <div class="form-group col-12">
                    <label for="detalle">Detalle</label>
                    <textarea class="form-control" id="detalle" name="detalle" placeholder="Nombre del detalle" cols="30" rows="10">{!! $oDestino_grupo->detalle !!}</textarea>
                </div>
                <div class="form-group col-12 text-left">
                    <p><b>Imagen</b></p>

                    @foreach ($oDestino_grupo->imagenes->where('estado','0') as $foto)
                        @if (Storage::disk('destino_grupo')->has($foto->imagen))
                            <figure class="figure m-3" id="destino_grupo_banner_imagen_{{ $foto->id }}">
                                <img src="{{ route('admin.destino_grupo.get_imagen.path',$foto->imagen) }}" class="figure-img rounded w-100" alt="{{ $foto->imagen}}">
                                <figcaption class="figure-caption text-right mt-0">
                                    <a href="#!" class="btn btn-danger btn btn-block" onclick="borrar_imagen_destino_inicio('destino_grupo_banner_imagen_{{ $foto->id}}')">
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
                <div class="form-group col-12">
                    <div class="card bg-dark text-white">
                        <div class="card-header">
                            <h4 class="text-uppercase">2: Que y Porque</h4>
                        </div>
                    </div>
                </div>
                <div class="form-group col-12">
                    <label for="que_porque">Que y Porque?</label>
                    <textarea class="form-control" id="que_porque" name="que_porque" placeholder="Nombre del que_porque" cols="30" rows="10">{!! $oDestino_grupo->que_porque !!}</textarea>
                </div>
                <div class="form-group col-12 text-left">
                    <p><b>Imagen</b></p>

                    @foreach ($oDestino_grupo->imagenes->where('estado','2') as $foto)
                        @if (Storage::disk('destino_grupo')->has($foto->imagen))
                            <figure class="figure m-3" id="destino_grupo_que_porque_imagen_{{ $foto->id }}">
                                <img src="{{ route('admin.destino_grupo.get_imagen.path',$foto->imagen) }}" class="figure-img rounded w-100" alt="{{ $foto->imagen}}">
                                <figcaption class="figure-caption text-right mt-0">
                                    <a href="#!" class="btn btn-danger btn btn-block" onclick="borrar_imagen_destino_inicio('destino_grupo_que_porque_imagen_{{ $foto->id}}')">
                                        <i class="fas fa-trash-alt"></i>
                                    </a>
                                </figcaption>
                                <input type="hidden" name="que_porque_imagen_[]" value="{{ $foto->id }}">
                            </figure>
                        @endif
                    @endforeach
                </div>
                <div class="form-group col-12">
                    <label for="imagen">Galeria de imagenes <span class="text-danger">(715x380)px</span></label>
                    <input type="file" class="form-control" id="que_porque_imagen" name="que_porque_imagen[]" placeholder="Nombre del imagen" multiple>
                </div>
            </div>
        </div>
        <div class="card-footer text-right">
            @csrf
            @method('patch')
            <input type="hidden" name="id" value="{{ $oDestino_grupo->id }}">
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
