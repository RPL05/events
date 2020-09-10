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

use Illuminate\Routing\RouteGroup;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix' => 'kegiatan'], function(){
    Route::get('index', 'ActivityController@index')->name('backend.kegiatan.index');
    Route::get('create', 'ActivityController@create')->name('backend.kegiatan.create');
});

Route::Group(['prefix' => 'users'], function(){
    Route::get('index', 'User\UserController@index')->name('users');
});

Route::group(['prefix' => 'registers'], function () {
    Route::get('index','Register\RegisterController@index')->name('registers');
    Route::get('ambil_formulir','Register\RegisterController@create')->name('register.ambil_formulir');
});