<option value="0">Escoja un opcion</option>
@if(!empty($destinos))
  @foreach($destinos->sortBy('nombre') as $value)
    <option value="{{ $value->id }}">{{ $value->nombre }}</option>
  @endforeach
@endif
