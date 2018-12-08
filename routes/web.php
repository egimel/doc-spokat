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
Route::get('/spokatmania', function () {
    return view('index');
});
Route::get('/signup','register@index');
Route::post('/signup','register@daftar');
Route::get('/signin','login@index');
Route::post('/carts','cart@index');
Route::get('/contacts','contact@index');
Route::get('/treatments','treatment@index');
Route::get('/products','product@index');
Route::get('/abouts','about@index');
