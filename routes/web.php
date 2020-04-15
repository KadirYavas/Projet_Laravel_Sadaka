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

Route::get('/', 'IndexController@index')->name('index');

Route::get('/About', 'AboutController@index')->name('about');

Route::get('/Gallery', 'GalleryController@index')->name('gallery');

Route::get('/Contact', 'ContactController@index')->name('contact');

Route::get('/Causes', 'CausesController@index')->name('causes');

Route::get('/Causes-Single', 'CausesController@indexSingle')->name('causes-single');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
