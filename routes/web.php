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
    return view('home');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/start', function () {
    return view('pages.start');
});

Route::get('file/{path}/{name}/{slug}', [
    'as'         => 'file.showImage',
    'uses'       => 'FileController@showImage',
    //'middleware' => 'auth',
]);
Route::get('file_exists/{path}/{name}/{slug}', [
    'as'         => 'file.exists',
    'uses'       => 'FileController@exists',
    //'middleware' => 'auth',
]);