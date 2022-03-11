<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InicioController;

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


//Route::resource('Dueno', 'DuenoController@store');
/* En laravel 9 hay que agregar el controlador que vamos a utilizar, ya que a diferencia de laravel 8 nos marca un error 
de que no existe este Controller. linea#4 . Se invoca el controlador y después la función que vamos a utilizar.*/
Route::get('/', [InicioController::class, 'Inicio']);



