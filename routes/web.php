<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', 'PostController@posts')->name('index');
Route::get('/admin', 'PostController@admin')->name('admin');
Route::get('/details/{id}', 'PostController@details')->name('details');
Route::get('/insert', 'PostController@insert')->name('insert');
Route::post('/add', 'PostController@add')->name('add');
Route::get('/manage', 'PostController@manage')->name('manage');
Route::post('/publish/{id}', 'PostController@publish')->name('publish');
Route::post('/un_publish/{id}', 'PostController@un_publish')->name('un_publish');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
