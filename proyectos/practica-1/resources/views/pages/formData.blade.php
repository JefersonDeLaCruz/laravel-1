@extends('pages.inicio')

@section('tittle', 'Mi perfil')



@section('header')

<h1>mostrando datos (retornando vista)</h1>

@endsection


@section('content')


<x-card-user nombre="{{ $nombre }}" descripcion="el user tiene {{ $edad }} anios de edad">
</x-card-user>



@endsection


