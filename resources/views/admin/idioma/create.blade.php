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
<li class="breadcrumb-item"><a href="{{ route('admin.idioma.index.path') }}">Idiomas</a></li>
<li class="breadcrumb-item active" aria-current="page">Nuevo</li>
@endsection
@section('content')
<form action="{{ route('admin.idioma.store.path') }}" method="post">
    <div class="card">
        <div class="card-header">
            <h4 class="text-uppercase">
                Nuevo idioma
            </h4>
        </div>
        <div class="card-body">
            <div class="form-row">
                <div class="form-group col-4">
                    <label for="codigo">Codigo</label>
                    <input type="text" class="form-control" id="codigo" name="codigo" placeholder="Nombre del codigo" value="{{ old('codigo') }}" required>
                </div>
                <div class="form-group col-4">
                    <label for="nombre">Idioma</label>
                    <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre del nombre" value="{{ old('nombre') }}" required>
                </div>
                <div class="form-group col-4">
                    <label for="estado">El idioma es</label>
                    <select name="principal" id="principal" class="form-control">
                        <option value="0">Secundario</option>
                        <option value="1">Principal</option>
                    </select>
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
