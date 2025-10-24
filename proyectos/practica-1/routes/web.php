<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});



// Route::get('/inicio', [HomeController::class, 'home']);


Route::get('/perfil', function () {
    return view('pages.mi_perfil'); //definicion de una nueva ruta
});

Route::controller(HomeController::class) ->group(function() {
    Route::get('/inicio', 'home')->name('home');
    Route::get('/mensaje/{nombre}', 'mensaje')->name('mensaje');
    Route::get('/form', 'mostrarForm')->name('form');
    Route::post('/form-recibe', 'recibirForm')->name('form-recibe');
    //el param name sirve para referenciar esa ruta en otros lados del code, es mas como un alias interno de la ruta
    //se puede usar por ejemplo para hacer redirects y forms
});