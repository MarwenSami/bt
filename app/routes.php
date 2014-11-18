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

Route::get('/', function()
{
	return View::make('hello');
});
Route::get('admin', 'AdminController@showLogin');
Route::post('admin', 'AdminController@postLogin');
App::missing(function(){
	return 'erreur 404 page non trouvé !';
});
?>