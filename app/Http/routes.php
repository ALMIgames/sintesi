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
    return View::make('pages.home');
});

Route::get('home', function() {
    return View::make('pages.home');
});

Route::get('inici', function() {
    return View::make('pages.home');
});

//TREBALLADORS
Route::get('creartreballador', function() {
    return View::make('treballadors.creartreballador');
});

Route::get('llistartreballador', function() {
    return View::make('treballadors.llistartreballador');
});

Route::get('esborrartreballador', function() {
    return View::make('treballadors.esborrartreballador');
});

//CLIENTS
Route::get('crearclient', function() {
    return View::make('clients.crearclient');
});

Route::get('llistarclient', function() {
    return View::make('clients.llistarclient');
});

Route::get('esborrarclient', function() {
    return View::make('clients.esborrarclient');
});


//RELACIONS
Route::get('crearrelacio', function() {
    return View::make('relacions.crearrelacio');
});

Route::get('llistarrelacio', function() {
    return View::make('relacions.llistarrelacio');
});

Route::get('esborrarrelacio', function() {
    return View::make('relacions.esborrarrelacio');
});


//TASQUES
Route::get('creartasca', function() {
    return View::make('tasques.creartasca');
});

Route::get('llistartasca', function() {
    return View::make('tasques.llistartasca');
});

Route::get('esborrartasca', function() {
    return View::make('tasques.esborrartasca');
});


//INCIDENCIES
Route::get('crearincidencia', function() {
    return View::make('incidencies.crearincidencia');
});

Route::get('llistarincidencia', function() {
    return View::make('incidencies.llistarincidencia');
});

Route::get('esborrarincidencia', function() {
    return View::make('incidencies.esborrarincidencia');
});




/*
Route::get('/', 'HomeController@index');

Route::get('home', 'HomeController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
*/