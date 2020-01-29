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

Route::get('login', function () {
    return view('welcome');
});

Route::get('/', function () {
    return view('index2');
});

Route::get('calculate', 'calculateController@index');
Route::get('empty', function () {
    return view('empty');
});
Route::get('enkripsi', function () {
    return view('stegano.enkripsi');
});
Route::get('dekripsi', function () {
    return view('stegano.dekripsi');
});

Route::resource('maps', 'mapController');
// Route::post('import', 'mapController@import')->name('maps.import');
Route::get('eksport', 'mapController@eksport')->name('maps.eksport');

Route::resource('stegano', 'steganoController');
Route::resource('admin', 'adminController');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
