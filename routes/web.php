<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\BeforeMiddleware;
use App\Http\Middleware\AfterMiddleware;
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
    return view('welcome');
    //return "Bienvenido a la pagina principal";
});

Route::get('/verAlumno', function(){
    $alumnos = App\Alumno::all();
    foreach ($alumnos as $alumno) {
        echo $alumno->nombre;
    }
});


