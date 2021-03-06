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
<li class="breadcrumb-item"><a href="{{ route('admin.destino-inicio.index.path') }}">Destinos inicio</a></li>
<li class="breadcrumb-item active" aria-current="page">Editar</li>
@endsection
@section('content')
<form action="{{ route('admin.destinos-inicio.index.idioma.update.path',[$oDestino_inicio->id,$idioma_->codigo,$arreglo]) }}" method="post" enctype="multipart/form-data">
    <div class="card">
        <div class="card-header">
            <h4 class="text-uppercase">
                Editar destino inicio
            </h4>
        </div>
        <div class="card-body">
            <div class="form-row">
                <div class="form-group col-6">
                    <label for="idioma">Idioma</label>
                    <select  class="form-control" id="idioma" name="idioma" onchange="mostrar_destinos($(this).val(),'editar')">
                        <option value="0">Escoja una opcion</option>
                        <option value="{{ $oDestino_inicio->idioma }}" selected >{{ $oDestino_inicio->idioma }}</option>
                    </select>
                </div>
                <div class="form-group col-6">
                    <label for="destino">Destino</label>
                    <select  class="form-control" id="destino" name="destino" >
                        <option value="0">Escoja una opcion</option>
                        <option value="{{ $destino->id }}" selected >{{ $destino->nombre }}</option>
                    </select>
                </div>
                <div class="form-group col-6">
                    <label for="url">Url <span class="text-small">(<span>http://midominio.com/<span><span class="text-primary">mi-url</span>) <span class="text-danger">No caracteres especiales, ni MAYUSCULAS</span></span></label>
                    <input type="text" class="form-control" id="url" name="url" placeholder="Ingrese la url" value="{{ $oDestino_inicio->url }}" required>
                </div>
                <div class="form-group col-6">
                    <label for="titulo">Titulo</label>
                    <input type="text" class="form-control" id="titulo" name="titulo" placeholder="Nombre del titulo" value="{{ $oDestino_inicio->titulo }}" required>
                </div>
                <div class="form-group col-12">
                    <label for="detalle">Detalle</label>
                    <textarea class="form-control" id="detalle" name="detalle" placeholder="Nombre del detalle" cols="30" rows="10">{!! $oDestino_inicio->detalle !!}</textarea>
                </div>
                <div class="form-group col-12 text-left">
                    <p><b>Imagen</b></p>
                    @if (Storage::disk('destino_inicio')->has($oDestino_inicio->imagen))
                        <figure class="figure m-3" id="destino_inicio_imagen_{{ $oDestino_inicio->id }}">
                            <img src="{{ route('admin.destino_inicio.get_imagen.path',$oDestino_inicio->imagen) }}" class="figure-img rounded" alt="{{ $oDestino_inicio->imagen}}" width="370px" height="316px">
                            <figcaption class="figure-caption text-right mt-0">
                                <a href="#!" class="btn btn-danger btn btn-block" onclick="borrar_imagen_destino_inicio('destino_inicio_imagen_{{ $oDestino_inicio->id}}')">
                                    <i class="fas fa-trash-alt"></i>
                                </a>
                            </figcaption>
                            <input type="hidden" name="imagen_" value="{{ $oDestino_inicio->imagen }}">
                        </figure>
                    @endif
                </div>
                <div class="form-group col-12">
                    <label for="imagen">Imagen <span class="text-danger">(370x316)px</span></label>
                    <input type="file" class="form-control" id="imagen" name="imagen" placeholder="Nombre del imagen" >
                </div>
                <div class="form-group col-12 text-left">
                    <p><b>Imagen(Mobile)</b></p>
                    @if (Storage::disk('destino_inicio')->has($oDestino_inicio->imagen_mobile))
                        <figure class="figure m-3" id="destino_inicio_imagen_m_{{ $oDestino_inicio->id }}">
                            <img src="{{ route('admin.destino_inicio.get_imagen.path',$oDestino_inicio->imagen_mobile) }}" class="figure-img rounded" alt="{{ $oDestino_inicio->imagen_mobile}}" width="468px" height="400px">
                            <figcaption class="figure-caption text-right mt-0">
                                <a href="#!" class="btn btn-danger btn btn-block" onclick="borrar_imagen_destino_inicio('destino_inicio_imagen_m_{{ $oDestino_inicio->id}}')">
                                    <i class="fas fa-trash-alt"></i>
                                </a>
                            </figcaption>
                            <input type="hidden" name="imagen_mobile_" value="{{ $oDestino_inicio->imagen_mobile }}">
                        </figure>
                    @endif
                </div>
                <div class="form-group col-12">
                    <label for="imagen">Imagen(Mobile) <span class="text-danger">(468x400)px</span></label>
                    <input type="file" class="form-control" id="imagen_mobile" name="imagen_mobile">
                </div>
            </div>
        </div>
        <div class="card-footer text-right">
            @csrf
            @method('patch')
            <input type="hidden" name="id" value="{{ $oDestino_inicio->id }}">
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
