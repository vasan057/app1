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

/*Route::get('/', function () {
    return view('welcome');
});
*/

/*Login Page*/
Route::any('/',[
	'as' 	=> 'login',
	'uses'  => 'AdminLoginController@admin_login'
]);

/*Auth login post*/
Route::post('login',[
	'as' 	=> 'authenticate',
	'uses'  => 'AdminLoginController@authenticate'
]);
/*Auth Logout*/
Route::get('getlogout',[
	'as' 	=> 'getlogout',
	'uses'  => 'AdminLoginController@getlogout'
]);
	Route::get('showaccount',[
		'as' 	=> 'edit_account',
		'uses'  => 'GuestController@view_edit_account'
	]);
	Route::post('showaccount',[
		'as' 	=> 'postprofile',
		'uses'  => 'GuestController@postprofile'
	]);

	Route::any('create-instructor',[
		'as' 	=> 'createInstructor',
		'uses'  => 'InstructorController@createInstructor'
	]);

	/*create user*/
	Route::any('create-User',[
		'as' 	=> 'createUser',
		'uses'  => 'InstructorController@createUser'
	]);

	Route::any('edit-instructor/{id}',[
		'as' 	=> 'editInstructor',
		'uses'  => 'InstructorController@showInstructor'
	]);

	/*Create Instructor*/
	Route::post('save-instructor',[
		'as' 	=> 'saveInstructor',
		'uses'  => 'InstructorController@postInstructor'
	]);

	

	Route::get('/home', 'HomeController@index')->name('home');


/*view Instructor*/
	Route::get('view-instructor',[
		'as' 	=> 'viewInstructor',
		'uses'  => 'InstructorController@viewInstructor'
	]);

/*post*/
	/*
	 * Reset Password
	 */
	/*Route::get('login/reset-password/{token}', [
	    'as'   => 'showResetPassword',
	    'uses' => 'RemindersController@getReset',
	]);

	Route::post('login/reset-password', [
	    'as'   => 'postResetPassword',
	    'uses' => 'RemindersController@postReset',
	]);*/