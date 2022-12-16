<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\AlumnoController;
use App\Http\Controllers\Middleware;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('/alumno', [AlumnoController::class, 'alumno']);
Route::get('/alumno/{id}', [AlumnoController::class, 'alumnoId'])->middleware('CheckearId');
Route::delete('/alumno/{id}', [AlumnoController::class, 'alumnoDelete'])->middleware('CheckearId');
Route::post('/alumno', [AlumnoController::class, 'alumnoCrear']);
Route::put('/alumno/{id}', [AlumnoController::class, 'alumnoEdit']);
