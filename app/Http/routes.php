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
	retrun "about page";
});

Route::get('home', 'HomeController@index');
Route::get('test','testController@index');
Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);

Route::get('/customer',function(){
	return "Making customer data for the customers";
});

Route::get('/dashboard',function(){
	return "the dashboard for the all user";
});

Route::get('/admin',function(){
	return "the dashboard for the all admin";
});