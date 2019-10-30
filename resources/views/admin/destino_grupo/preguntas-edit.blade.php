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
<li class="breadcrumb-item"><a href="{{ route('admin.destino-grupo.preguntas.index.path',$destino_grupo->id) }}">Lista de preguntas</a></li>
<li class="breadcrumb-item active" aria-current="page">Edit</li>
@endsection
@section('content')
<form action="{{ route('admin.destino-grupo.preguntas.update.path',[$destino_grupo->id,$destino_grupo_pregunta->id]) }}" method="post" enctype="multipart/form-data">
    <div class="card">
        <div class="card-header">
            <h4 class="text-primary"><b class="text-dark">Titulo:</b> {{ $destino_grupo->titulo }} <b class="text-dark">| Idioma:</b>{{ $destino_grupo->idioma }} <b class="text-dark">| Destino:</b>{{ $destino_grupo->destino->nombre }}</h4>
        </div>
    </div>
    <div class="card">
        <div class="card-header">
            <h4 class="text-uppercase">
                Editar preguntas
            </h4>
        </div>
        <div class="card-body">
            <div class="form-row">
                <div class="form-group col-12">
                    <label for="pregunta">Pregunta</label>
                    <input type="text" class="form-control" id="pregunta" name="pregunta" placeholder="Ingrese la pregunta" value="{{ $destino_grupo_pregunta->pregunta }}" required>
                </div>
                <div class="form-group col-12">
                    <label for="respuesta">Respuesta</label>
                    <textarea class="form-control" id="respuesta" name="respuesta" placeholder="Ingrese la respuesta" cols="30" rows="10">{!! $destino_grupo_pregunta->respuesta !!}</textarea>
                </div>
            </div>
        </div>
        <div class="card-footer text-right">
            @csrf
            @method('patch')
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
