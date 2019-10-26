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
<li class="breadcrumb-item active" aria-current="page">Destinos Grupo</li>
@endsection
@section('content')
    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col-8"><h4 class="text-uppercase">lista de destinos por grupo</h4></div>
                <div class="col-4 text-right">
                    <a href="{{route('admin.destino-grupo.create.path')}}" class="btn btn-success"><i class="fas fa-plus"></i> Agregar</a>
                </div>
            </div>
        </div>
        <div class="card-body">
            <table class="table table-sm">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Url</th>
                        <th>Titulo</th>
                        <th>Idioma</th>
                        {{-- <th>Estado</th> --}}
                        <th>Operaciones</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $i=0;
                    @endphp
                    @foreach ($destinos_grupo->sortBy('titulo')->sortBy('idioma') as $item)
                    @php
                        $i++;
                        $arreglo=$item->id.'_'.$item->idioma.'-';
                    @endphp
                    <tr id="lista_{{ $item->id }}">
                        <td>{{ $i }}</td>
                        <td>{{ $item->url }}</td>
                        <td>{{ $item->titulo }}</td>
                        <td>
                            <div class="row">
                                @foreach ($idiomas as $idioma_)
                                    <div class="col px-1">
                                        <div class="row">
                                            <div class="col-12">
                                                <a href="@if(strtoupper($item->idioma)==strtoupper($idioma_->codigo)||($item->traducciones->where('idioma',$idioma_->codigo)->count()>0)) {{ route('admin.destinos-grupo.index.idioma.edit.path',[$item->traducciones->where('idioma',$idioma_->codigo)->first()->destino_grupo_relacion_id,$idioma_->codigo,$arreglo]) }} @else {{ route('admin.destinos-grupo.index.idioma.create.path',[$item->id,$idioma_->codigo,$arreglo]) }} @endif" class="btn-block btn @if(strtoupper($item->idioma)==strtoupper($idioma_->codigo)||($item->traducciones->where('idioma',$idioma_->codigo)->count()>0)) btn-primary @else btn-danger @endif"><i class="fas @if(strtoupper($item->idioma)==strtoupper($idioma_->codigo)||($item->traducciones->where('idioma',$idioma_->codigo)->count()>0))) fa-edit @else fa-plus-circle @endif "></i>{{ $idioma_->codigo }}</a>
                                            </div>
                                            <div class="col-12 btn-group">
                                                @php
                                                    $id_=0;
                                                @endphp
                                                @if ($item->traducciones->where('idioma',$idioma_->codigo)->count()>0)
                                                    @php
                                                        $id_=$item->traducciones->where('idioma',$idioma_->codigo)->first()->destino_grupo_relacion_id;
                                                    @endphp
                                                @endif
                                                <a class="btn btn-secondary" href="@if($id_>0){{ route('admin.destino-grupo.lugares-visitar.path',$id_) }} @else  #! @endif"><i class="fas fa-map-marked-alt"></i></a>
                                                <a class="btn btn-secondary" href="@if($id_>0){{ route('admin.destino-grupo.atractivos.index.path',$id_) }} @else  #! @endif"><i class="fas fa-images"></i></a>
                                                <a class="btn btn-secondary" href="@if($id_>0){{ route('admin.destino-grupo.preguntas.index.path',$id_) }} @else  #! @endif"><i class="fas fa-question"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </td>
                        <td class="d-none">
                            <div class="btn-group">
                                @foreach ($idiomas as $idioma_)
                                    <a href="@if(strtoupper($item->idioma)==strtoupper($idioma_->codigo)||($item->traducciones->where('idioma',$idioma_->codigo)->count()>0)) {{ route('admin.destinos-grupo.index.idioma.edit.path',[$item->traducciones->where('idioma',$idioma_->codigo)->first()->destino_grupo_relacion_id,$idioma_->codigo,$arreglo]) }} @else {{ route('admin.destinos-grupo.index.idioma.create.path',[$item->id,$idioma_->codigo,$arreglo]) }} @endif" class="btn @if(strtoupper($item->idioma)==strtoupper($idioma_->codigo)||($item->traducciones->where('idioma',$idioma_->codigo)->count()>0)) btn-primary @else btn-danger @endif"><i class="fas @if(strtoupper($item->idioma)==strtoupper($idioma_->codigo)||($item->traducciones->where('idioma',$idioma_->codigo)->count()>0))) fa-edit @else fa-plus-circle @endif "></i>{{ $idioma_->codigo }}</a>
                                @endforeach
                            </div>
                        </td>
                        {{-- <td>
                            @if ($item->estado==0)
                                <button class="btn btn-dark"><i class="fas fa-times-circle"></i></button>
                            @else
                                <button class="btn btn-success"><i class="fas fa-check-circle"></i></button>
                            @endif
                        <td> --}}
                        <td>
                            <div class="btn btn-group">
                                <a class="d-none btn btn-primary" href="{{ route('admin.destino-grupo.lugares-visitar.path',$item->id) }}"><i class="fas fa-map-marked-alt"></i></a>
                                <a class="d-none btn btn-info" href="{{ route('admin.destino-grupo.atractivos.index.path',$item->id) }}"><i class="fas fa-images"></i></a>
                                <a class="d-none btn btn-success" href="{{ route('admin.destino-grupo.preguntas.index.path',$item->id) }}"><i class="fas fa-question"></i></a>
                                {{-- <a class="btn btn-warning" href="{{ route('admin.destino-grupo.edit.path',$item->id) }}"><i class="fas fa-edit"></i></a> --}}
                                <form id="form_borrar_{{ $item->id }}" action="{{ route('admin.destino-grupo.destroy.path',$item->id) }}" method="get">
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
