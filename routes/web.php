<?php

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

Route::view('/', 'welcome');
Route::view('/nos-gammes-de-conteneur', 'nos-gammes-de-conteneur');
Route::view('/a-propos-de-fast-delivery-containers', 'a-propos-de-fast-delivery-containers');

// Route::get('clients', 'ClientsController@index');
// Route::get('clients/create', 'ClientsController@create');
// Route::post('clients','ClientsController@store');
// Route::get('clients/{client}', 'ClientsController@show');
// Route::get('clients/{client}/edit', 'ClientsController@edit');
// Route::patch('clients/{client}', 'ClientsController@update');
// Route::delete('clients/{client}', 'ClientsController@destroy');

Route::resource('clients', 'ClientsController')->middleware('auth');

// contact routes

Route::get('contact', 'ContactController@create');
Route::post('contact', 'ContactController@store');

// Route::get('tracking', 'TrackingController@track');
Route::post('tracking', 'TrackingController@track');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
// localisation
Route::get('lang/{locale}', 'LocalizationController@index');
