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
    return redirect('/login');
});

Auth::routes();
Route::get('/start/exam','TestController@index');
Route::post('/exam/question/{id}','TestController@next');
Route::get('/exam/question/{id}','TestController@prev');
Route::get('/exam/result','TestController@result');
Route::get('/home', 'HomeController@index');
Route::get('logout', 'Auth\LoginController@logout');
