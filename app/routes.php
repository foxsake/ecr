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

/*guest group*/
Route::group(array('before' => 'guest'), function(){
	/*csrf protection group*/
	Route::group(array('before' => 'csrf'), function(){
		Route::resource('sessions','SessionsController',['only' => ['store','create','destroy']]);
		/*post*/
		Route::post('signin', array(
			'as' => 'signin',
			'uses' => 'SessionsController@store'
		));
	});	
		Route::get('login', array(
			'as' => 'login',
			'uses' => 'SessionsController@create'
		));
});

Route::group(array('before' => 'auth'), function(){
		Route::get('logout', array(
			'as' => 'logout',
			'uses' => 'SessionsController@destroy'
		));
});

Route::group(array('before' => 'role'), function()
{
	Route::resource('admin','SuperUserController',['only' => ['store','create','destroy','index']]);
	Route::resource('admin/student','StudentController',['only' => ['store','create','destroy','index','update','edit']]);
	Route::resource('admin/faculty','FacultyController',['only' => ['store','create','destroy','index','update','edit']]);
	Route::resource('admin/class','ClassController');
	Route::resource('admin/roster','RosterController');
});

Route::group(array('before' => 'role2'), function()
{
	Route::get('/', array(
		'as' => 'home',
		'uses' => 'HomeController@index'
	));
	Route::resource('requirement','RequirementController');
	Route::resource('category','CategoryController');
	Route::resource('class','FacultyClassController');
	Route::resource('activity','ActivityController');
	Route::resource('grade','GradeController');
	Route::resource('print','PrintController');
	Route::put('grade/update2/{id}', array(
		'uses' => 'GradeController@update2',
		'as' => 'grade.update2'
		));
});
//Route::get('about', 'HomeController@about');
