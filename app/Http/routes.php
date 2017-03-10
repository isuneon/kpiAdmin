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



Route::get('/', 'LoginController@index');
Route::match(['get', 'post'], 'login', 'LoginController@login');
Route::match(['get', 'post'], 'logout', 'LoginController@logout');

Route::group(['prefix' => 'dashboard'], function () {
    
    //Dashboard
	Route::get('home', 'DashboardController@index');

	Route::get('/usuarios', function () {
	    return view('ListaUsuarios');
	});

	// Route of notification
	Route::resource('notification', 'admin\NotificationController');
	// Route of config
	Route::resource('config', 'admin\GeneralConfigController');
	// Route of email
	Route::resource('email', 'admin\EmailsController');
});

