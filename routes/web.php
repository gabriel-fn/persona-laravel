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

Route::get('/personas/desvantagens', function () {
    return App\Desvantagem::all();
});

Route::get('/personas/poderes', function () {
    return App\Poder::all();
});

Route::get('/personas/extras', function () {
    return App\Extra::all();
});

Route::get('/personas/falhas', function () {
    return App\Falha::all();
});

Route::get('/personas/opcoes', function () {
    return App\Opcao::all();
});

Route::get('/personas', function () {
    return App\Persona::all();
});

Route::get('/personas/{id}', function ($id) {
    return App\Persona::findOrFail($id);
});

Route::get('/personas/pdf/{id}', function ($id) {
    $persona = App\Persona::findOrFail($id);
    $info = new Classes\Persona($persona);
    $bonus = $info->bonusPoints();
    $total = $info->totalPoints();
    $pdf = PDF::loadView('pdf', compact('persona', 'bonus', 'total'));
    return $pdf->download(str_slug($persona->nome, '-'));
});
