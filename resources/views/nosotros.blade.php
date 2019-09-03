@extends('plantilla')

@section('seccion')
<h1>Welcome to Nosotros</h1>
@foreach($equipo as $item)
    <a href="{{ route ('nosotros',$item)}}" class="h4 text-danger">{{$item}}</a><br>

@endforeach

@if(!empty($nombre))


    @switch($nombre)
        @case($nombre == 'Juan')

        <h2>El nombre es {{ $nombre }}:</h2>
        <p>{{ $nombre }} Lorem ipsum dolor, 
            sit amet consectetur adipisicing elit. Quis atque dolores, 
            excepturi consequatur in accusantium iure.
            Voluptatem distinctio doloribus animi earum dolor illum sed ullam repellat necessitatibus eaque? Sequi, 
            molestias.</p>
        
        @break

        @case($nombre == 'Pedro')

        <h2>El nombre es {{ $nombre }}:</h2>
        <p>{{ $nombre }} Lorem ipsum dolor, 
            sit amet consectetur adipisicing elit. Quis atque dolores, 
            excepturi consequatur in accusantium iure.
            Voluptatem distinctio doloribus animi earum dolor illum sed ullam repellat necessitatibus eaque? Sequi, 
            molestias.</p>

        @break

        @case($nombre == 'Luis')

        <h2>El nombre es {{ $nombre }}:</h2>
        <p>{{ $nombre }} Lorem ipsum dolor, 
            sit amet consectetur adipisicing elit. Quis atque dolores, 
            excepturi consequatur in accusantium iure.
            Voluptatem distinctio doloribus animi earum dolor illum sed ullam repellat necessitatibus eaque? Sequi, 
            molestias.</p>

       @break

        


    @endswitch


@endif
@endsection