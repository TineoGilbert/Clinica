<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CerrarController extends Controller
{
    public function cerrar(){
        return view('cerrarseccion');
    }
}
