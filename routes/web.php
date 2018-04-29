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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/personas/feitos', function () {
    return App\Feito::all();
});

Route::get('/personas/pericias', function () {
    return App\Pericia::all();
});

Route::get('/personas', function () {
    return App\Persona::all();
});

Route::get('/personas/{id}', function ($id) {
    return App\Persona::with(['periciasPersona', 'feitosPersona'])->findOrFail($id);
});
