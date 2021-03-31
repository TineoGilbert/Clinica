<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OpcionController extends Controller
{
    public function opciones(){
        return view('opciones');
    }
}
