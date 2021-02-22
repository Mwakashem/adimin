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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();
Route::get('/','ResidentialsController@index');
Route::get('/residentials/add', 'ResidentialsController@create');
Route::post('/residentials', 'ResidentialsController@store');
Route::get('/residentials/{id}', 'ResidentialsController@show');
Route::delete('/residentials/{id}','ResidentialsController@destroy');


Route::get('/commercials','CommercialsController@index');
Route::get('/commercials/add', 'CommercialsController@create');
Route::post('/commercials', 'CommercialsController@store');
Route::get('/commercials/{id}', 'CommercialsController@show');
Route::delete('/commercials/{id}','CommercialsController@destroy');

Route::get('/landplots','LandplotsController@index');
Route::get('/landplots/add', 'LandplotsController@create');
Route::post('/landplots', 'LandplotsController@store');
Route::get('/landplots/{id}', 'LandplotsController@show');
Route::delete('/landplots/{id}','LandplotsController@destroy');
Route::get('/clients','ClientsController@index');

// Route::post('/commercials', 'PropertiesController@commstore');
// Route::get('/{id}/residentialsedit', 'PropertiesController@resiedit');
// Route::get('/{id}/commercialsedit', 'PropertiesController@commedit');
// Route::get('/{id}/landplotsedit', 'PropertiesController@update');
// Route::patch('/{id}', 'PropertiesController@landedit');



