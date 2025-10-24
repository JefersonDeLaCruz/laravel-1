<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //


    public function home(){
        return view('pages.inicio');
    }


    public function mensaje($nombre){

        return view('pages.saludo', ['nombre'=> "$nombre"]);
    }

    public function mostrarForm(){
        return view('pages.form');
    }


    public function recibirForm(Request $request){
        // return "Nombre $request->nombre, Edad $request->edad";

        return view('pages.formData', [
            'nombre'=> $request->nombre,
            'edad'=> $request->edad
        ]);
    }
}
