@extends('plantilla')

@section('seccion')

<h1>Editar nota  {{ $nota->id}}</h1>

@if (session('mensaje'))
<div class="alert-success">
    {{session('mensaje')}}
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
</div>
<br>
@endif



<form action="{{ route('notas.update' , $nota->id) }}" method="POST" >
    @csrf
    @method('PUT')

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

    <input type="text" name="nombre" placeholder="Nombre" value="{{ $nota->nombre}}" class="form-control mb-2">
    <input type="text" name="descripcion" placeholder="Descripcion" value="{{ $nota->descripcion}}" class="form-control mb-2">

    <button class="btn btn-primary btn-block" type="submit">Editar</button>
</form>

@endsection