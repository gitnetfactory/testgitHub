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

Route::get('/about',function(){

	retrun view('about.index');

});

Route::get('home', 'HomeController@index');
Route::get('realy','testController@index');
Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);

Route::get('/customer',function(){
	return view('customer.index');


});


Route::get('about',function(){
	return view('About.index');
});
