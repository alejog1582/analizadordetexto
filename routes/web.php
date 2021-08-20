<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TextosController;

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

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware' => 'login'], function () {

    Route::get('/newtexto', [TextosController::class, 'formulario']);
    Route::post('/newtextprocesado', [TextosController::class, 'procesamiento']);
    Route::post('/newtextprocesadosave', [TextosController::class, 'guardar']);
    Route::get('/home/consulta/{id}', [TextosController::class, 'consulta']);
});
