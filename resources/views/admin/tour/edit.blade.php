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
<li class="breadcrumb-item"><a href="{{ route('admin.tour.index.path') }}">Tours</a></li>
<li class="breadcrumb-item active" aria-current="page">Editar</li>
@endsection
@section('content')
<form action="{{ route('admin.tour.update.path',$oTour->id) }}" method="post" enctype="multipart/form-data">
    <div class="card">
        <div class="card-header">
            <h4 class="text-uppercase">
                Editar Tour
            </h4>
        </div>
        <div class="card-body">
            <div class="form-row">
                <div class="form-group col-3">
                    <label for="idioma">Idioma</label>
                    <select  class="form-control" id="idioma" name="idioma" onchange="mostrar_destinos($(this).val(),'editar')">
                        <option value="0">Escoja una opcion</option>
                        @foreach ($idiomas as $item)
                            <option value="{{ $item->codigo }}" @if ($oTour->idioma==$item->codigo) selected @endif>{{ $item->nombre }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group col-3">
                    <label for="destino">Destino</label>
                    <select  class="form-control" id="destino" name="destino" onchange="mostrar_destinos_lugar_recojo($('#idioma').val(),$(this).val(),'editar')">
                        <option value="0">Escoja una opcion</option>
                        @foreach ($oDestinos->sortBy('nombre') as $destino)
                            <option value="{{ $destino->id }}" @if ($oTour->destino_id==$destino->id) selected @endif>{{ $destino->nombre }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group col-6">
                    <label for="lugar_recojo">Lugar de recojo</label>
                    <select  class="form-control" id="lugar_recojo" name="lugar_recojo">
                        <option value="0">Escoja una opcion</option>
                        @foreach ($oLugaresRecojo->sortBy('titulo') as $lugar_recojo)
                            <option value="{{ $lugar_recojo->id }}" @if ($oTour->lugar_recojo_id==$lugar_recojo->id) selected @endif>{{ $lugar_recojo->titulo }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group col-6">
                    <label for="url">Url <span class="text-small">(<span>http://midominio.com/<span><span class="text-primary">mi-url</span>) <span class="text-danger">No caracteres especiales, ni MAYUSCULAS</span></span></label>
                    <input type="text" class="form-control" id="url" name="url" placeholder="Nombre del url" value="{{ $oTour->url }}" required>
                </div>
                <div class="form-group col-6">
                    <label for="titulo">Titulo</label>
                    <input type="text" class="form-control" id="titulo" name="titulo" placeholder="Nombre del titulo" value="{{ $oTour->titulo }}" required>
                </div>
                <div class="form-group col-12">
                    <label for="descripcion">Descripcion</label>
                    <textarea class="form-control" id="descripcion" name="descripcion" placeholder="Nombre del descripcion" cols="30" rows="10">{!! $oTour->descripcion !!}</textarea>
                </div>
                <div class="form-group col-12">
                    <label for="itinerario">Itinerario</label>
                    <textarea class="form-control" id="itinerario" name="itinerario" placeholder="Nombre del itinerario" cols="30" rows="10">{!! $oTour->itinerario !!}</textarea>
                </div>
                <div class="form-group col-12 text-left">
                    <p><b>Banner</b></p>

                    @foreach ($oTour->imagenes->where('estado','0') as $foto)
                        @if (Storage::disk('tours')->has($foto->imagen))
                            <figure class="figure m-3" id="destino_tour_banner_imagen_{{ $foto->id }}">
                                <img src="{{ route('admin.tour.get_imagen.path',$foto->imagen) }}" class="figure-img rounded w-100" alt="{{ $foto->imagen}}">
                                <figcaption class="figure-caption text-right mt-0">
                                    <a href="#!" class="btn btn-danger btn btn-block" onclick="borrar_imagen_destino_inicio('destino_tour_banner_imagen_{{ $foto->id}}')">
                                        <i class="fas fa-trash-alt"></i>
                                    </a>
                                </figcaption>
                                <input type="hidden" name="banner_imagen_[]" value="{{ $foto->id }}">
                            </figure>
                        @endif
                    @endforeach
                </div>
                <div class="form-group col-12">
                    <label for="imagen">Galeria de banners <span class="text-danger">(1903x652)px</span></label>
                    <input type="file" class="form-control" id="banner_imagen" name="banner_imagen[]" placeholder="Nombre del imagen" multiple>
                </div>
            </div>
        </div>
        <div class="card-footer text-right">
            @csrf
            @method('patch')
            <input type="hidden" name="id" value="{{ $oTour->id }}">
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
