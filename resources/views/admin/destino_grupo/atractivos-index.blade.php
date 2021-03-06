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
<li class="breadcrumb-item"><a href="{{ route('admin.destino-grupo.index.path') }}">Destinos Grupo</a></li>
<li class="breadcrumb-item active" aria-current="page">Lista de atractivos</li>
@endsection
@section('content')
    <div class="card">
        <div class="card-header">
            <h4 class="text-primary"><b class="text-dark">Titulo:</b> {{ $destino_grupo->titulo }} <b class="text-dark">| Idioma:</b>{{ $destino_grupo->idioma }} <b class="text-dark">| Destino:</b>{{ $destino_grupo->destino->nombre }}</h4>
        </div>
    </div>
    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col-8">
                    <h4 class="text-uppercase">lista de atractivos por destino grupo</h4>
                </div>
                <div class="col-4 text-right">
                    <a href="{{route('admin.destino-grupo.atractivos.create.path',$destino_grupo->id)}}" class="btn btn-success"><i class="fas fa-plus"></i> Agregar</a>
                </div>
            </div>
        </div>
        <div class="card-body">
            <table class="table table-sm">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Titulo</th>
                        <th>Operaciones</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $i=0;
                    @endphp
                    @foreach ($destinos_grupo_imagen->sortBy('titulo') as $item)
                    @php
                        $i++;
                    @endphp
                    <tr id="lista_{{ $item->id }}">
                        <td>{{ $i }}</td>
                        <td>{{ $item->titulo }}</td>
                        <td>
                            <div class="btn btn-group">
                                <a class="btn btn-warning" href="{{ route('admin.destino-grupo.atractivos.edit.path',[$destino_grupo->id,$item->id]) }}"><i class="fas fa-edit"></i></a>
                                <form id="form_borrar_{{ $item->id }}" action="{{ route('admin.destino-grupo.atractivos.destroy.path',[$destino_grupo->id,$item->id]) }}" method="get">
                                    @csrf
                                    <button class="btn btn-danger" type="button" onclick="borrarDestino_inicio('{{ $item->id }}','{{ $item->titulo }}')">
                                        <i class="fas fa-trash-alt"></i>
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
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
