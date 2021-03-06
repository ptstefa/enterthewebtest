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

Route::get('/about', function () {
  $tasks = [ '11111', '22222', '33333'];

    return view('about', [
      'tasks' => $tasks
  ]);
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/facilities', 'PagesController@facilities');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
