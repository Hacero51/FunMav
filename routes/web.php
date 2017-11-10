<?php

Route::get('/', function () {
    return view('admin/admin');
});
Route::get('/hv', function () {
    return view('/hv');
});
Route::get('/acudiente', function () {
    return view('/acudiente');
});
Route::get('/diario', function () {
    return view('/diario');
});
Route::get('/hc', function () {
    return view('/hc');
});
Route::get('/sproceso', function () {
    return view('/sproceso');
});
Route::get('/cproceso', function () {
    return view('/cproceso');
});
Route::get('/rpsicologica', function () {
    return view('/rpsicologica');
});
Route::get('/hingreso', function () {
    return view('/hingreso');
});
Route::get('/eingreso', function () {
    return view('/eingreso');
});
Route::get('/eegreso', function () {
    return view('/eegreso');
});
Route::get('/eto', function () {
    return view('/tocupacional');
});
Route::get('/encuesta', function () {
    return view('/encuestaeto');
});


Route::get('/admin', function () {
    return view('admin.usuarios.crear-usuario');
});
Route::group([],function(){
    Route::resource('usuario','UsuarioController');
});

// Registration routes...
Route::get('register', [
    'uses'=>'Auth\RegisterController@getRegister',
    'as'=>'register'
]);
Route::post('register', [
    'uses'=>'Auth\RegisterController@postRegister',
    'as'=>'register'
]);