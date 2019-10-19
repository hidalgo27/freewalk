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
<li class="breadcrumb-item active" aria-current="page">Lugares a visitar</li>
@endsection
@section('content')
<form action="{{ route('admin.destino-grupo.lugares-visitar.store.path') }}" method="post" enctype="multipart/form-data">
    <div class="card">
        <div class="card-header">
            <h4 class="text-uppercase">
                lugares a visitar
            </h4>
        </div>
        <div class="card-body">
            <div class="form-row">
                <div class="form-group col-12">
                    <label for="titulo">Titulo</label>
                    <input type="text" class="form-control" id="titulo" name="titulo" placeholder="Nombre del titulo"  required>
                </div>
                <div class="form-group col-12">
                    <label for="imagen">Galeria de banners <span class="text-danger">(320x200)px</span></label>
                    <input type="file" class="form-control" id="atractivo_imagen" name="atractivo_imagen" placeholder="Nombre del imagen" required>
                </div>
            </div>
        </div>
        <div class="card-footer text-right">
            @csrf
            <input type="hidden" name="id" value="{{ $oDestino_grupo_id }}">
            <button type="submit" class="btn btn-primary text-center">Guardar</button>
        </div>
    </div>
</form>
<div class="card mt-2">
        <div class="card-header">
            <h4 class="text-uppercase">
                    Lista de lugares a visitar
            </h4>
        </div>
        <div class="card-body">
            @foreach ($oAtractivos->where('estado','1') as $foto)
                @if (Storage::disk('destino_grupo')->has($foto->imagen))
                    <figure class="figure m-3 col-4" id="lista_{{ $foto->id }}">
                        <span>{{ $foto->titulo }}</span>
                        <img src="{{ route('admin.destino_grupo.get_imagen.path',$foto->imagen) }}" class="figure-img rounded w-100 mb-0" alt="{{ $foto->imagen}}">
                        <figcaption class="figure-caption text-right mt-0">
                            <form id="form_borrar_{{ $foto->id }}" action="{{ route('admin.destino-grupo.lugares-visitar.destroy.path',$foto->id) }}" method="get">
                                @csrf
                                <button class="btn btn-danger btn-block" type="button" onclick="borrarDestino_inicio('{{ $foto->id }}','{{ $foto->titulo }}')">
                                    <i class="fas fa-trash-alt"></i>
                                </button>
                            </form>
                        </figcaption>
                    </figure>
                @endif
            @endforeach
        </div>
    </div>
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
