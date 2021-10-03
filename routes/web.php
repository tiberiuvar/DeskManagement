<?php
use App\Http\Controllers\Backend\UserController;
use App\Http\Controllers\Backend\BirouriController;
use App\Http\Controllers\Backend\DepartamenteController;
use App\Http\Controllers\Backend\SalariatiController;
use App\Http\Controllers\Backend\SalariiController;
use Illuminate\Support\Facades\Route;
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
});



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('users', UserController::class);

Route::resource('salariis', SalariiController::class);

Route::get('{any}', function () {
    return view('birouris.index');
})->where('any', '.*');


Route::get('{any}', function () {
    return view('departamentes.index');
})->where('any', '.*');

Route::get('{any}', function () {
    return view('salariatis.index');
})->where('any', '.*');