@extends('pages.inicio')

@section('tittle', 'Mi perfil')



@section('header')

<h1>form </h1>

@endsection


@section('content')


<x-card-user nombre="Suag" descripcion="avla q jopa">
</x-card-user>


<form action="{{ route('form-recibe') }}" method="post">
    
    @csrf

    <div class="form-group">
        <label for="">Inserte el nombre</label>
        <input type="text" class="form-control" name="nombre">
    </div>

    <div class="form-group">
        <label for="">Inserte la edad</label>
        <input type="number" min="1" max="100" step="1" class="form-control" name="edad">
    </div>


    <div class="form-group">
        <input type="submit" class="btn-primary" value="registrar">
    </div>

    
</form>
@endsection


