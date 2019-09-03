@extends('plantilla')

@section('seccion')
<h1>Notas</h1>
        @if (session('mensaje'))
        <div class="alert-success">
            {{session('mensaje')}}
        </div>
        <br>
        @endif

<br>
    <form action="{{ route('notas.crear') }}" method="POST" >
        @csrf

        @error('nombre')
            <div class="alert alert-danger">El nombre es requerido
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
            </div>
            
        @enderror
        @error('descripcion')
        <div class="alert alert-danger">La descripcion es requerida
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>

        </div>
        
    @enderror

        <input type="text" name="nombre" placeholder="Nombre" value="{{ old('nombre') }}" class="form-control mb-2">
        <input type="text" name="descripcion" placeholder="Descripcion" value="{{ old('descripcion' )}}" class="form-control mb-2">

        <button class="btn btn-primary btn-block" type="submit">Agregar</button>
    </form>
        <br>

<table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Nota</th>
      <th scope="col">Descripcion</th>
      <th scope="col">Acciones</th>
    </tr>
  </thead>
  <tbody>
      @foreach($notas as $item)
    <tr>
      <th scope="row">{{ $item->id}}</th>
      <td>
          <a href="{{ route('notas.detalle', $item )}}">
          {{$item->nombre}}
          </a>
        </td>
      <td>{{$item->descripcion}}</td>
      <td>
          <a href=" {{ route('notas.editar' , $item) }} "  class="btn btn-primary  btn-sm">Editar</a>
      </td>
    </tr>
        @endforeach
  </tbody>
</table>
@endsection

