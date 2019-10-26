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
<li class="breadcrumb-item active" aria-current="page">Inicio</li>
@endsection
@section('content')
    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col-8"><h4 class="text-uppercase">Pagina para inicio</h4></div>
                <div class="col-4 text-right">
                    <a href="{{route('admin.inicio.create.path')}}" class="btn btn-success"><i class="fas fa-plus"></i> Agregar pagina de inicio</a>
                </div>
            </div>
        </div>
        <div class="card-body">
            <table class="table table-sm">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>inicio</th>
                        <th>Url</th>
                        <th>Idioma</th>
                        {{-- <th>Estado</th> --}}
                        <th>Operaciones</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $i=0;
                    @endphp
                    @foreach ($inicio->sortBy('titulo')->sortBy('idioma') as $item)
                    @php
                        $i++;
                        $arreglo=$item->id.'_'.$item->idioma.'-';
                    @endphp
                    <tr id="lista_{{ $item->id }}">
                        <td>{{ $i }}</td>
                        <td>{{ $item->titulo }}</td>
                        <td>{{ $item->url }}</td>
                        <td>
                            <div class="btn-group">
                                @foreach ($idiomas as $idioma_)
                                    <a href="@if(strtoupper($item->idioma)==strtoupper($idioma_->codigo)||($item->traducciones->where('idioma',$idioma_->codigo)->count()>0)) {{ route('admin.inicio.index.idioma.edit.path',[$item->traducciones->where('idioma',$idioma_->codigo)->first()->inicio_relacion_id,$idioma_->codigo,$arreglo]) }} @else {{ route('admin.inicio.index.idioma.create.path',[$item->id,$idioma_->codigo,$arreglo]) }} @endif" class="btn @if(strtoupper($item->idioma)==strtoupper($idioma_->codigo)||($item->traducciones->where('idioma',$idioma_->codigo)->count()>0)) btn-primary @else btn-danger @endif"><i class="fas @if(strtoupper($item->idioma)==strtoupper($idioma_->codigo)||($item->traducciones->where('idioma',$idioma_->codigo)->count()>0))) fa-edit @else fa-plus-circle @endif "></i>{{ $idioma_->codigo }}</a>
                                @endforeach
                            </div>
                        </td>
                        <td>
                            <div class="btn btn-group">
                                {{-- <a class="btn btn-warning" href="{{ route('admin.inicio.edit.path',$item->id) }}"><i class="fas fa-edit"></i></a> --}}
                                <form id="form_borrar_{{ $item->id }}" action="{{ route('admin.inicio.destroy.path',$item->id) }}" method="get">
                                    @csrf
                                    {{-- @method('delete') --}}
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
