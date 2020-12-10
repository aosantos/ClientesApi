<?php

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

//Route::resource('clientes', 'ClientesController');

Route::get('/', 'ClientesController@index')->name('home');
Route::post('store', 'ClientesController@store')->name('store');
Route::get('editar/{id}/editar', 'ClientesController@update');
Route::get('/excluir/{id}','ClientesController@destroy');


/*Route::get('/home', 'HomeController@index')->name('home');
Route::get('editar/{id}/editar', 'HomeController@editar');
Route::get('/excluir/{id}','HomeController@excluir');*/
