@extends('pages.inicio')

@section('tittle', 'Saludo')



@section('header')

<h1>saludo page</h1>

@endsection


@section('content')


<x-card-user nombre="Suag" descripcion="avla q jopa">
</x-card-user>

<h1>saludo a {{ $nombre }}</h1>

@endsection


