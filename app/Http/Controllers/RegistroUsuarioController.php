<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegistroUsuarioController extends Controller
{
    public function registrousuario(){
        return view('auth/register');
    }
}
