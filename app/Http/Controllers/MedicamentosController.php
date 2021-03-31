<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MedicamentosController extends Controller
{
    public function medicamentos(){
        return view('listamedicamentos');
    }
}
