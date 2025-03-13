<?php

use App\Http\Controllers\CiudadController;
use App\Http\Controllers\PaisController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::apiResource('users', 'UserController');
Route::get('ciudades-pais/{id}', [CiudadController::class, 'ciudadesPorPais']);
Route::apiResource('paises', 'PaisController');
Route::apiResource('ciudades', 'CiudadController');
Route::apiResource('historial', 'HistorialController');
