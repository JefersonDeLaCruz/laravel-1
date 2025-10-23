<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});



Route::get('/inicio', function () {
    return view('pages.inicio'); //definicion de una nueva ruta
});


Route::get('/perfil', function () {
    return view('pages.mi_perfil'); //definicion de una nueva ruta
});

