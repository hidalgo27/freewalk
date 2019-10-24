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
<li class="breadcrumb-item"><a href="#!">Base de datos</a></li>
<li class="breadcrumb-item active" aria-current="page">Idiomas</li>
@endsection
@section('content')
    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col-8"><h4 class="text-uppercase">lista de idiomas</h4></div>
                <div class="col-4 text-right">
                    <a href="{{route('admin.idioma.create.path')}}" class="btn btn-success"><i class="fas fa-plus"></i> Agregar idiomas</a>
                </div>
            </div>
        </div>
        <div class="card-body">
            <table class="table table-sm">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Codigo</th>
                        <th>Idioma</th>
                        <th>El idioma es</th>
                        <th>Operaciones</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $i=0;
                    @endphp
                    @foreach ($idiomas->sortBy('nombre')->sortBy('idioma') as $item)
                    @php
                        $i++;
                    @endphp
                    <tr id="lista_{{ $item->id }}">
                        <td>{{ $i }}</td>
                        <td>{{ $item->codigo }}</td>
                        <td>{{ $item->nombre }}</td>
                        <td>@if ($item->estado==0) Secundario @else Principal @endif</td>
                        <td>
                            <div class="btn btn-group">
                                <a class="btn btn-warning" href="{{ route('admin.idioma.edit.path',$item->id) }}"><i class="fas fa-edit"></i></a>
                                <form id="form_borrar_{{ $item->id }}" action="{{ route('admin.idioma.destroy.path',$item->id) }}" method="get">
                                    @csrf
                                    <button class="btn btn-danger" type="button" onclick="borrarDestino('{{ $item->id }}','{{ $item->nombre }}')">
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
@endsection
