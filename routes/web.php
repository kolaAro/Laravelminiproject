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
Route::get('/contact', [
    'uses' => 'Contactcontroller@create'
]);
Route::post('/contact', [
    'uses' => 'Contactcontroller@store',
    'as'=>'contact.store'
]);
Route::resource('todo','todocontroller');
