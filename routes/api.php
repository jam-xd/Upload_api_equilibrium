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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('/situaciones','App\Http\Controllers\SituacionesController@index'); //mostrar todos los registros
Route::post('/situaciones','App\Http\Controllers\SituacionesController@store'); //crear un registro
Route::put('/situaciones/{id}','App\Http\Controllers\SituacionesController@update'); //actualizar un registro
Route::delete('/situaciones/{id}','App\Http\Controllers\SituacionesController@destroy');//eliminar un registro
Route::get('/situaciones/{id}','App\Http\Controllers\SituacionesController@show'); //mostrar un registro en específico