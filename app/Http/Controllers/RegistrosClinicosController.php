<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegistrosClinicosController extends Controller
{
    public function registrosclinicos(){
        return view('registrosclinicos');
    }
}
