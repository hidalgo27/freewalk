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
<li class="breadcrumb-item active" aria-current="page">Editar</li>
@endsection
@section('content')
<form action="{{ route('admin.lugar-recojo.index.idioma.update.path',[$oLugar_recojo->id,$idioma_->codigo,$arreglo]) }}" method="post" enctype="multipart/form-data">
    <div class="card">
        <div class="card-header">
            <h4 class="text-uppercase">
                Editar lugar de recojo
            </h4>
        </div>
        <div class="card-body">
            <div class="form-row">
                <div class="form-group col-6">
                    <label for="idioma">Idioma</label>
                    <select  class="form-control" id="idioma" name="idioma" onchange="mostrar_destinos($(this).val(),'editar')">
                        <option value="0">Escoja una opcion</option>
                        <option value="{{ $oLugar_recojo->idioma }}" selected >{{ $oLugar_recojo->idioma }}</option>
                    </select>
                </div>
                <div class="form-group col-6">
                    <label for="destino">Destino</label>
                    <select  class="form-control" id="destino" name="destino" >
                        <option value="0">Escoja una opcion</option>
                        <option value="{{ $destino->id }}" selected >{{ $destino->nombre }}</option>
                    </select>
                </div>
                <div class="form-group col-12">
                    <label for="titulo">Titulo</label>
                    <input type="text" class="form-control" id="titulo" name="titulo" placeholder="Nombre del titulo" value="{{ $oLugar_recojo->titulo }}" required>
                </div>
                <div class="form-group col-12">
                    <label for="frame">Frame</label>
                    <textarea class="form-control" id="frame" name="frame" placeholder="Ingrese el frame de GoogleMaps" cols="30" rows="10">{!! $oLugar_recojo->iframe !!}</textarea>
                </div>
                <div class="form-group col-12">
                    <label for="referencia">Referencia</label>
                    <input type="text" class="form-control" id="referencia" name="referencia" placeholder="Nombre del referencia" value="{{ $oLugar_recojo->referencia }}" required>
                </div>
                <div class="form-group col-12 text-left">
                    <p><b> Imagen de la referencia</b></p>
                    @if (Storage::disk('lugar_recojo')->has($oLugar_recojo->referencia_imagen))
                        <figure class="figure m-3" id="destino_inicio_imagen_{{ $oLugar_recojo->id }}">
                            <img src="{{ route('admin.lugar_recojo.get_imagen.path',$oLugar_recojo->referencia_imagen) }}" class="figure-img rounded" alt="{{ $oLugar_recojo->imagen}}" width="468px" height="400px">
                            <figcaption class="figure-caption text-right mt-0">
                                <a href="#!" class="btn btn-danger btn btn-block" onclick="borrar_imagen_destino_inicio('destino_inicio_imagen_{{ $oLugar_recojo->id}}')">
                                    <i class="fas fa-trash-alt"></i>
                                </a>
                            </figcaption>
                            <input type="hidden" name="referencia_imagen_" value="{{ $oLugar_recojo->id }}">
                        </figure>
                    @endif
                </div>
                <div class="form-group col-12">
                    <label for="imagen">Imagen <span class="text-danger">(412x348)px</span></label>
                    <input type="file" class="form-control" id="referencia_imagen" name="referencia_imagen" placeholder="Nombre del imagen" >
                </div>
            </div>
        </div>
        <div class="card-footer text-right">
            @csrf
            @method('patch')
            <input type="hidden" name="id" value="{{ $oLugar_recojo->id }}">
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
