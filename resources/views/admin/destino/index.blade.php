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
<li class="breadcrumb-item active" aria-current="page">Destinos</li>
@endsection
@section('content')
    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col-8"><h4 class="text-uppercase">lista de destinos</h4></div>
                <div class="col-4 text-right">
                    <a href="{{route('admin.destino.create.path')}}" class="btn btn-success"><i class="fas fa-plus"></i> Agregar destinos</a>
                </div>
            </div>
        </div>
        <div class="card-body">
            <table class="table table-sm">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Destino</th>
                        <th>Idioma</th>
                        {{-- <th>Estado</th> --}}
                        <th>Operaciones</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $i=0;
                    @endphp
                    @foreach ($destinos->sortBy('nombre')->sortBy('idioma') as $item)
                    @php
                        $i++;
                    @endphp
                    <tr id="lista_{{ $item->id }}">
                        <td>{{ $i }}</td>
                        <td>{{ $item->nombre }}</td>
                        <td>{{ $item->idioma }}</td>
                        {{-- <td>
                            @if ($item->estado==0)
                                <button class="btn btn-dark"><i class="fas fa-times-circle"></i></button>
                            @else
                                <button class="btn btn-success"><i class="fas fa-check-circle"></i></button>
                            @endif
                        </td> --}}
                        <td>
                            <div class="btn btn-group">
                                <a class="btn btn-warning" href="{{ route('admin.destino.edit.path',$item->id) }}"><i class="fas fa-edit"></i></a>
                                <form id="form_borrar_{{ $item->id }}" action="{{ route('admin.destino.destroy.path',$item->id) }}" method="get">
                                    @csrf
                                    {{-- @method('delete') --}}
                                    <button class="btn btn-danger" type="button" onclick="borrarDestino('{{ $item->id }}','{{ $item->nombre }}')">
                                        <i class="fas fa-trash-alt"></i>
                                    </button>
                                </form>
                                {{-- <a class="btn btn-danger" href="{{ route('admin.destino.edit.path',$item->id) }}"><i class="fas fa-trash-alt"></i></a> --}}
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
