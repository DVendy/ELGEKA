<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'WelcomeController@index');

Route::get('home', 'HomeController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);

Route::get('dashboard', 'AdminController@dashboard');

//ADMIN
Route::get('admin', 'AdminController@main');
Route::post('admin/create', 'AdminController@create');
Route::post('admin/update', 'AdminController@update');
Route::get('admin/delete-{id}', 'AdminController@delete');
Route::get('admin/getAjax/{id}', 'AdminController@getAjax');

//PASIEN
Route::get('pasien', 'PasienController@main');
Route::post('pasien/create', 'PasienController@create');
Route::post('pasien/update', 'PasienController@update');
Route::get('pasien/delete-{id}', 'PasienController@delete');
Route::get('pasien/getAjax/{id}', 'PasienController@getAjax');