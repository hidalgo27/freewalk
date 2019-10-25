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
<li class="breadcrumb-item"><a href="{{ route('admin.destino.index.path') }}">Destinos</a></li>
<li class="breadcrumb-item active" aria-current="page">Nuevo</li>
@endsection
@section('content')
<form action="{{ route('admin.destinos.index.idioma.store.path',[$destino->id,$idioma_->codigo,$arreglo]) }}" method="post">
    <div class="card">
        <div class="card-header">
            <h4 class="text-uppercase">
                Nuevo destino
            </h4>
        </div>
        <div class="card-body">
            <div class="form-row">
                <div class="form-group col-6">
                    <label for="idioma">Idioma</label>
                    <select  class="form-control" id="idioma" name="idioma">
                        <option value="{{ $idioma_->codigo }}" selected >{{ $idioma_->nombre }}</option>
                    </select>
                </div>
                <div class="form-group col-6">
                    <label for="destino">Destino</label>
                    <input type="text" class="form-control" id="destino" name="destino" placeholder="Nombre del destino" value="{{ $destino->nombre }}" required>
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
</script>
@endsection
