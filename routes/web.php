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
Route::get('/','PropertiesController@index');
Route::get('/residentials/add', 'PropertiesController@Residentialscreate');
Route::get('/commercials/add', 'PropertiesController@Commercialscreate');
Route::get('/landplots/add', 'PropertiesController@Landplotscreate');
Route::post('/residentials', 'PropertiesController@resistore');
Route::post('/landplots', 'PropertiesController@landstore');
Route::delete('/{id}','PropertiesController@destroy');

// Route::post('/commercials', 'PropertiesController@commstore');
// Route::get('/{id}/residentialsedit', 'PropertiesController@resiedit');
// Route::get('/{id}/commercialsedit', 'PropertiesController@commedit');
// Route::get('/{id}/landplotsedit', 'PropertiesController@update');
// Route::patch('/{id}', 'PropertiesController@landedit');



