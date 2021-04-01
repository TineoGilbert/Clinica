<?php

namespace App\Models\User;



use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('panel');
});

Auth::routes(['verify' => true]);

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');  /*->middleware('verified') */

Route::get('/home', 'App\Http\Controllers\HomeController@index')->name('home');

Route::get('users', 'App\Http\Controllers\HomeController@users');

//Route::get('historial', 'App\Http\Controllers\HomeController@historial');

Route::get('principal', 'App\Http\Controllers\PrincipalController@sistema')->name('principal.sistema')->middleware('auth');

Route::get('historial', 'App\Http\Controllers\HistorialController@historial')->name('historial.historial');

Route::get('doctores', 'App\Http\Controllers\DoctorController@doctores')->name('doctores.doctores');

Route::get('medicamentos', 'App\Http\Controllers\MedicamentosController@medicamentos')->name('medicamentos.medicamentos');

Route::get('registrosclinicos', 'App\Http\Controllers\RegistrosClinicosController@registrosclinicos')->name('registrosclinicos.registrosclinicos');

Route::get('log', 'App\Http\Controllers\LoginController@log')->name('log.log');

Route::get('opciones', 'App\Http\Controllers\OpcionController@opciones')->name('opciones.opciones');

Route::get('registrousuario', 'App\Http\Controllers\RegistroUsuarioController@registrousuario')->name('registrousuario.registrousuario');

Route::get('cerrar', 'App\Http\Controllers\CerrarController@cerrar')->name('cerrar.cerrar');