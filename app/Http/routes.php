<?php

Route::controllers([
    'auth' => 'Auth\AuthController',
    'password' => 'Auth\PasswordController',
]);

Route::get('register', function() {
    return View::make('auth.register');
});


Route::get('password', function() {
    return View::make('auth.password');
});

Route::get('reset', function() {
    return View::make('auth.reset');
});


//Totes les routes que estiguin aqui dintre requeriran estar loguejat per poder entrar.
Route::group(['middleware' => 'App\Http\Middleware\Authenticate'], function(){

    Route::get('veureusuari', function() {
        $data = array();
        if(Auth::user()->tipususuari == '3'){
            $data['client'] = \App\Client::find(Auth::user()->id_persona);
        }
        else if(Auth::user()->tipususuari == '2') {
            $data['treballador'] = \App\Worker::find(Auth::user()->id_persona);
        }
        return View::make('usuari.veureusuari', $data);
    });

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

    Route::post('creartreballadorpost','Treballadors@creartreballador');

    Route::get('creartreballador', function() {
        return View::make('treballadors.creartreballador');
    });

    Route::get('llistartreballador','Treballadors@llistartreballador');

    Route::get('esborrartreballador/{id}','Treballadors@esborrartreballador');

    Route::get('veuretreballador/{id}','Treballadors@veuretreballador');

//CLIENTS

    Route::post('crearclientpost','Clients@crearclient');

    Route::get('crearclient', function() {
        return View::make('clients.crearclient');
    });

    Route::get('llistarclient','Clients@llistarclient');

    Route::get('esborrarclient/{id}','Clients@esborrarclient');

    Route::get('veureclient/{id}','Clients@veureclient');


//TASQUES


    Route::post('creartascapost','Tasques@creartasca');

    Route::get('creartasca', function() {
        return View::make('tasques.creartasca');
    });

    Route::any('asignartasca/{id}','Tasques@asignartasca');

    Route::any('tascaproces/{id}','Tasques@tascaproces');

    Route::any('tascacompleta/{id}','Tasques@tascacompleta');

    Route::get('llistartasca','Tasques@llistartasca');

    Route::get('veuretasca/{id}','Tasques@veuretasca');

    Route::get('esborrartasca/{id}','Tasques@esborrartasca');

    Route::any('calendari', function() {
        return View::make('tasques.calendaritasques');
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


});
