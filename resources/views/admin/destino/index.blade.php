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
                    <a href="{{route('admin.destino.create.path')}}" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal"><i class="fas fa-sort-alpha-up"></i> Ordenar</a>
                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <form action="{{ route('admin.destino.ordenar.path') }}" method="post">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Ordernar destinos</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <table class="table table-striped table-bordered table-responsive">
                                            <thead class="bg-dark text-white">
                                                <tr>
                                                    <th class="w-75 text-left">Destino</th>
                                                    <th class="w-25">Orden</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($destinos->sortBy('orden')->sortBy('idioma') as $item)
                                                <tr>
                                                    <td class="w-75 text-left">{{ $item->nombre }}</td>
                                                    <td class="w-25">
                                                        <input type="hidden" class="form-control" name="orden_id[]" value="{{ $item->id }}">
                                                        <input type="number" class="form-control" name="orden[]" value="{{ $item->orden }}" required>
                                                    </td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="modal-footer">
                                        @csrf
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                                        <button type="submit" class="btn btn-primary">Guardar cambios</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card-body">
            <table class="table table-sm">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Destino</th>
                        <th>Url</th>
                        <th>Idioma</th>
                        <th>Mostrar en menu</th>
                        <th>Operaciones</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $i=0;
                    @endphp
                    @foreach ($destinos->sortBy('orden')->sortBy('idioma') as $item)
                    @php
                        $i++;
                        $arreglo=$item->id.'_'.$item->idioma.'-';
                    @endphp
                    <tr id="lista_{{ $item->id }}">
                        <td>{{ $i }}</td>
                        <td>{{ $item->nombre }}</td>
                        <td>{{ $item->url }}</td>
                        <td>
                            <div class="btn-group">
                                @foreach ($idiomas as $idioma_)
                                    <a href="@if(strtoupper($item->idioma)==strtoupper($idioma_->codigo)||($item->traducciones->where('idioma',$idioma_->codigo)->count()>0)) {{ route('admin.destinos.index.idioma.edit.path',[$item->traducciones->where('idioma',$idioma_->codigo)->first()->destino_relacion_id,$idioma_->codigo,$arreglo]) }} @else {{ route('admin.destinos.index.idioma.create.path',[$item->id,$idioma_->codigo,$arreglo]) }} @endif" class="btn @if(strtoupper($item->idioma)==strtoupper($idioma_->codigo)||($item->traducciones->where('idioma',$idioma_->codigo)->count()>0)) btn-primary @else btn-danger @endif"><i class="fas @if(strtoupper($item->idioma)==strtoupper($idioma_->codigo)||($item->traducciones->where('idioma',$idioma_->codigo)->count()>0))) fa-edit @else fa-plus-circle @endif "></i>{{ $idioma_->codigo }}</a>
                                @endforeach
                            </div>
                        </td>
                        {{-- <td>
                            @if ($item->estado==0)
                                <button class="btn btn-dark"><i class="fas fa-times-circle"></i></button>
                            @else
                                <button class="btn btn-success"><i class="fas fa-check-circle"></i></button>
                            @endif
                        </td> --}}
                        <td>
                            <div class="custom-control custom-switch">
                                <input type="checkbox" class="custom-control-input" id="customSwitch_{{ $item->id }}" onclick="activar_evento('{{ $item->id }}')" value="{{ $item->id }}" @if($item->estado==1) checked @endif>
                                <label class="custom-control-label" for="customSwitch_{{ $item->id }}"></label>
                            </div>
                        </td>
                        <td>
                            <div class="btn btn-group">
                                {{-- <a class="btn btn-warning" href="{{ route('admin.destino.edit.path',$item->id) }}"><i class="fas fa-edit"></i></a> --}}
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
