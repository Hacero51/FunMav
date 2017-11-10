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

Route::get('/', function () {
    return view('index');
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

Route::get('/admin', function () {
    return view('admin.usuarios.crear-usuario');
});

Route::group([],function(){
    Route::resource('usuario','UsuarioController');
});

