<?php

use Illuminate\Support\Facades\Route;
use App\Models\perro;
use App\Models\gato;
use App\Models\persona;
use App\Models\Portafolio;
use Illuminate\Support\Facades\Mail;
use App\Mail\portafolioKevin;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
| me voy a seguir con lo de POO que no funciona como lo tenemos XD
*/

Route::get('/', function () {
    return view('index');
})->name('index');

Route::get('/portafolio-emmanuel', function () {
    $persona = new Persona();
    $persona->nombre = 'Emmanuel';
    $persona->apellidoPaterno = 'Santoyo';
    $persona->apellidoMaterno = 'Chagolla';
    return view('portafolio-emmanuel',['persona'=>$persona]);
})->name('portafolio-emmanuel');

Route::get('/poo', function () {
    $perro = new Perro();
    $datos = $perro -> mostrarDatos();
    $gato = new Gato();
    $datos2 = $gato -> mostrarDatos();
    return view('poo', ['datos' => $datos, 'datos2' => $datos2]);
})->name('poo');

Route::get('/portafolio-kevin', function () {
    return view('portafolio-kevin');
})->name('portafolio-kevin');

Route::get('/estudios', function () {
    return view('estudios');
})->name('estudios');

Route::get('/proyectos', function () {
    $info = new Portafolio();

    return view('proyectos' , ['info' => $info]);
})->name('proyectos');

Route::get('/publicaciones', function () {
    return view('publicaciones');
})->name('publicaciones');

Route::get('/contacto', function () {
    
    Mail::to('kevinhalo005@gmail.com')->send(new portafolioKevin());
    return view('portafolio-kevin');
})->name('contacto');