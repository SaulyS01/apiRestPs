<?php

use App\Http\Controllers\Api\EquipoController;
use App\Http\Controllers\Api\MiembroController;
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

Route::apiResource('miembros', MiembroController::class);
Route::apiResource('equipos', EquipoController::class);

Route::get('/', function () {
    return 'hola';
});