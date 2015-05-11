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
Route::get('/', function() {
    return View::make('auth.login');
});

Route::get('home', function() {
    return View::make('pages.home');
});

Route::get('about', function() {
    return View::make('pages.about');
});

Route::get('projects', function() {
    return View::make('pages.projects');
});

Route::get('contact', function() {
    return View::make('pages.contact');
});

Route::get('inici', function() {
    return View::make('pages.home');
});

Route::get('creartreballador', function() {
    return View::make('treballadors.creartreballador');
});

Route::get('llistartreballador', function() {
    return View::make('treballadors.llistartreballador');
});

Route::get('esborrartreballador', function() {
    return View::make('treballadors.esborrartreballador');
});



/*
Route::get('/', 'HomeController@index');

Route::get('home', 'HomeController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
*/