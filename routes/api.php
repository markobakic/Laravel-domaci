<?php

use App\Http\Controllers\CarController;
use App\Http\Controllers\DriverController;
use App\Http\Controllers\SalonController;
use App\Models\Car;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('cars/{id}',[CarController::class,'show']);
Route::get('cars',[CarController::class,'index']);

Route::delete('cars/destroy/{car_id}',[CarController::class, 'destroy']);

Route::post('salon/add',[SalonController::class,'add']);

Route::post('driver/add',[DriverController::class,'add']);
Route::delete('drivers/destroy/{driver_id}',[DriverController::class, 'destroy']);

;

