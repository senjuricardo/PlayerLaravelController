<?php

use Illuminate\Support\Facades\Route;
use App\Exports\PlayersExport;

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
    return redirect('/players');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/players','PlayerController@index');
Route::get('/players/create','PlayerController@create');
Route::get('/players/{player}/edit','PlayerController@edit');
Route::post('/players/','PlayerController@store');
Route::delete('/players/destall','PlayerController@destall');

Route::put('/players/{player}', 'PlayerController@update');
Route::delete('/players/{player}', 'PlayerController@destroy');

Route::get('players/export/', 'PlayerController@export');
Route::post('players/import', 'PlayerController@import');
Route::get('/players/{player}','PlayerController@show');
