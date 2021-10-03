<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\BirouriController;
use App\Http\Controllers\Api\SalariatiController;
use App\Http\Controllers\Api\DepartamenteController;


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




Route::get('/birouris', [BirouriController::class, 'index']);
Route::post('/birouris', [BirouriController::class, 'store']);
Route::delete('/birouris/{birouri}', [BirouriController::class, 'destroy']);

Route::get('/departamentes/birouris', [DepartamenteController::class, 'birouris']);

Route::get('/departamentes', [DepartamenteController::class, 'index']);
Route::post('/departamentes', [DepartamenteController::class, 'store']);
Route::delete('/departamentes/{departamente}', [DepartamenteController::class, 'destroy']);


Route::get('/salariatis/departamentes', [SalariatiController::class, 'departamentes']);
Route::get('/salariatis/birouris', [SalariatiController::class, 'birouris']);


// Route::get('/salariatis', [SalariatiController::class, 'index']);
// Route::post('/salariatis', [SalariatiController::class, 'store']);
// Route::delete('/salariatis/{salariati}', [SalariatiController::class, 'destroy']);

Route::apiResource('birouris', BirouriController::class);
Route::apiResource('departamentes', DepartamenteController::class);
Route::apiResource('salariatis', SalariatiController::class);
