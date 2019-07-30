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

// Route::get('/', function () {
//      return view('welcome');
//  });

//  Route::get('/index', function () {
//     return redirect('/');
// });

Route::get('/', 'ClientsController@accueil');
Route::get('/search', 'ClientsController@search');
Route::get('/client/{catbio}', 'ClientsController@showcat')->name('client.showcat');
Route::get('/client.contact', 'ClientsController@contact')->name('client.contact');
Route::get('/', 'ClientsController@accueil')->name('welcome');
Route::get('/index', 'AdminsController@index')->name('admin.index')->middleware('auth');
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::resource('client', 'ClientsController');
Route::resource('admin', 'AdminsController');


