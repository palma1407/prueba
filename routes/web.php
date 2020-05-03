<?php

use illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
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

//Route::get('/', function () {
//  return view('welcome');
//});
Route::get('/register',function () {
    return view('auth/register');
});
Route::get('ticket/{placa}/{id}/{valor}','TicketController@generarTicket')->name('ticket');
Route::resource('ticket','TicketController');
Route::resource('ingresoV', 'Ingreso_vehiculoController');

Route::resource('vehiculo', 'VehiculoController');
Auth::routes();
//Route::get('/home', 'HomeController@index')->name('home');

Route::resource('tarifa', 'TarifaController');
Route::get('/', function () {
    return view('auth/login');
});
