<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function users()
    {
        return view('principal');
    }

    public function historial(){
        return view('historial');
    }

    public function index(){
        return view('principal');
    }

    public function registro(){
        return view('auth/register');
    }
}
