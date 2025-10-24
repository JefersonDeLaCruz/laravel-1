@extends('pages.inicio')

@section('tittle', 'Mi perfil')



@section('header')

<h1>titulo de la pagina perfil</h1>

@endsection


@section('content')


<x-card-user nombre="Suag" descripcion="avla q jopa">
</x-card-user>



<x-alert tipoAlerta="alert-danger">    
    <h1>alert de error</h1>
</x-alert>

<x-alert tipoAlerta="alert-success">    
    <strong>Exito,</strong> la operacion se completo correctamente
</x-alert>

<x-alert tipoAlerta="alert-warning">    
    <strong>Atencion,</strong> revisa los datos antes de continuar
</x-alert>

<x-alert tipoAlerta="alert-info">    
    <strong>Informacion,</strong> este es un mensaje informativo
</x-alert>

<x-alert tipoAlerta="alert-primary">    
    Alerta con estilo primario de bootstrap
</x-alert>

@endsection


