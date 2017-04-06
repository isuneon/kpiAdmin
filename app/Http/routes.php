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

//Ahora todas las rutas van dentro del grupo 'web', que es donde se encuentra el Middleware para el lenguaje
Route::group(['middleware' => ['web']], function () {

//Esto determina el lenguaje dependiendo de la sesión
Route::get('lang/{lang}', function ($lang) {
      session(['lang' => $lang]);
      return \Redirect::back();
  })->where([
      'lang' => 'en|es'
]);


/* RUTA DE PRUEBA

Route::get('/SHome', function () {
		return view('admin/users/create');
});

*/

Route::get('/', 'LoginController@index');
Route::match(['get', 'post'], 'login', 'LoginController@login');
Route::match(['get', 'post'], 'logout', 'LoginController@logout');

Route::group(['prefix' => 'dashboard'], function () {

    //Dashboard
	Route::get('home', 'DashboardController@index');
	// Route of config
	Route::resource('config', 'admin\GeneralConfigController');
	// Route of email
	Route::resource('email', 'admin\EmailsController');
	// Route of day
	Route::resource('day', 'admin\DayController');
	// Route of scheduleConfig
	Route::resource('scheduleConfig', 'admin\ScheduleConfigController');
	// Route of scheduleDays
	Route::resource('scheduleDays', 'admin\ScheduleDaysController');
	// Route of scheduleHours
	Route::resource('scheduleHours', 'admin\ScheduleHoursController');
	// Route of notification
	Route::resource('notification', 'admin\NotificationController');

	// Route of user
	Route::resource('user', 'admin\UserController');

});
});
