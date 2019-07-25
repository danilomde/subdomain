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



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::group(['middleware' => ['auth']], function() {
    Route::resource('escolas','EscolaController');
    


});



Route::domain('{account}.jumpercursos.com.br')->group(function () {
    Route::get('/', function ($account) {
        $var = [$account];
        dd($var);
    });
});