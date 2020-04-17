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
Route::get('/AboutBDD', 'AboutController@indexBDD')->name('AboutBDD');
Route::get('/envoiAbout', 'AboutController@create')->name('createAbout');
Route::post('/storeAbout', 'AboutController@store')->name('envoiAbout');
Route::get('/editAbout/{id}', 'AboutController@edit')->name('editAbout');
Route::post('/updateAbout/{id}', 'AboutController@update')->name('updateAbout');
Route::get('/destroyAbout/{id}', 'AboutController@destroy')->name('destroyAbout');

Route::get('/Gallery', 'GalleryController@index')->name('gallery');
Route::get('/GalleryBDD', 'GalleryController@indexBDD')->name('GalleryBDD');
Route::get('/envoiGallery', 'GalleryController@create')->name('createGallery');
Route::post('/storeGallery', 'GalleryController@store')->name('envoiGallery');
Route::get('/editGallery/{id}', 'GalleryController@edit')->name('editGallery');
Route::post('/updateGallery/{id}', 'GalleryController@update')->name('updateGallery');
Route::get('/destroyGallery/{id}', 'GalleryController@destroy')->name('destroyGallery');

Route::get('/Contact', 'ContactController@index')->name('contact');
Route::get('/ContactBDD', 'ContactController@indexBDD')->name('ContactBDD');
Route::get('/envoiContact', 'ContactController@create')->name('createContact');
Route::post('/storeContact', 'ContactController@store')->name('envoiContact');
Route::get('/editContact/{id}', 'ContactController@edit')->name('editContact');
Route::post('/updateContact/{id}', 'ContactController@update')->name('updateContact');
Route::get('/destroyContact/{id}', 'ContactController@destroy')->name('destroyContact');
Route::post('/sendMessage', 'ContactController@message')->name('message');

Route::get('/Causes', 'CausesController@index')->name('causes');
Route::get('/Causes-Single', 'CausesController@indexSingle')->name('causes-single');
Route::get('/CauseBDD', 'CausesController@indexBDD')->name('CauseBDD');
Route::get('/envoiCause', 'CausesController@create')->name('createCause');
Route::post('/storeCause', 'CausesController@store')->name('envoiCause');
Route::get('/editCause/{id}', 'CausesController@edit')->name('editCause');
Route::post('/updateCause/{id}', 'CausesController@update')->name('updateCause');
Route::get('/destroyCause/{id}', 'CausesController@destroy')->name('destroyCause');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::post('/messageSend', 'MailController@store')->name('email');

Auth::routes();

Route::get('/home', function() {
    return view('home');
})->name('home')->middleware('auth');
