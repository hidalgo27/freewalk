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
<li class="breadcrumb-item active" aria-current="page">Nuevo</li>
@endsection
@section('content')
<form action="{{ route('admin.destino-grupo.preguntas.store.path',$destino_grupo->id) }}" method="post" enctype="multipart/form-data">
    <div class="card">
        <div class="card-header">
            <h4 class="text-primary"><b class="text-dark">pregunta:</b> {{ $destino_grupo->titulo }} <b class="text-dark">| Idioma:</b>{{ $destino_grupo->idioma }} <b class="text-dark">| Destino:</b>{{ $destino_grupo->destino->nombre }}</h4>
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
                    <label for="pregunta">Pregunta</label>
                    <input type="text" class="form-control" id="pregunta" name="pregunta" placeholder="Nombre del pregunta" value="{{ old('pregunta') }}" required>
                </div>
                <div class="form-group col-12">
                    <label for="respuesta">Respuesta</label>
                    <textarea class="form-control" id="respuesta" name="respuesta" placeholder="Nombre del repuesta" cols="30" rows="10">{!! old('respuesta') !!}</textarea>
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
    selector: 'textarea',
    height: 500,
    menubar: true,
    plugins: [
        'advlist autolink lists link image charmap print preview anchor textcolor',
        'searchreplace visualblocks code fullscreen',
        'insertdatetime media table contextmenu paste code help wordcount'
    ],
    toolbar: 'insert | undo redo |  formatselect | bold italic backcolor  | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | removeformat | help',
    content_css: [
        '//fonts.googleapis.com/css?family=Lato:300,300i,400,400i',
        '//www.tinymce.com/css/codepen.min.css']
    });
</script>
@endsection
