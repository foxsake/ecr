<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/
Route::get('login', 'SessionsController@create');
Route::get('logout', 'SessionsController@destroy');
Route::resource('sessions','SessionsController',['only' => ['store','create','destroy']]);
Route::group(array('before' => 'role'), function()
{
	Route::resource('admin','SuperUserController',['only' => ['store','create','destroy','index']]);
	Route::resource('admin/student','StudentController',['only' => ['store','create','destroy','index','update','edit']]);
	Route::resource('admin/faculty','FacultyController',['only' => ['store','create','destroy','index','update','edit']]);
	Route::resource('admin/class','ClassController');
	Route::resource('admin/roster','RosterController');
});
Route::get('/', 'HomeController@index')->before('auth');
Route::get('about', 'HomeController@about');
