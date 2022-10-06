<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\api\v1\VehiculoController;
use App\Http\Controllers\api\v1\PlazaController;
use App\Http\Controllers\api\v1\TarifaController;
use App\Http\Controllers\api\v1\TicketIngresoController;
use App\Http\Controllers\api\v1\TicketEgresoController;

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

Route::apiResource('v1/vehiculos', VehiculoController::class);
Route::apiResource('v1/plazas', PlazaController::class);
Route::apiResource('v1/tarifas', TarifaController::class);
Route::apiResource('v1/ticketsIngreso', TicketIngresoController::class);
Route::apiResource('v1/ticketsEgreso', TicketEgresoController::class);
