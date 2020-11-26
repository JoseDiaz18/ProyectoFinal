<?php

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


Route::resource('restaurants', App\Http\Controllers\API\restaurantsAPIController::class);

Route::resource('menus', App\Http\Controllers\API\menuAPIController::class);

Route::resource('favoritos', App\Http\Controllers\API\favoritosAPIController::class);

Route::resource('especialidads', App\Http\Controllers\API\especialidadAPIController::class);

Route::resource('promociones', App\Http\Controllers\API\promocionesAPIController::class);

Route::resource('reseñas', App\Http\Controllers\API\reseñasAPIController::class);

Route::resource('ventas', App\Http\Controllers\API\ventasAPIController::class);