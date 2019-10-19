<option value="0">Escoja un opcion</option>
@if(!empty($lugar_recojo))
  @foreach($lugar_recojo->sortBy('nombre') as $value)
    <option value="{{ $value->id }}">{{ $value->titulo }}</option>
  @endforeach
@endif
