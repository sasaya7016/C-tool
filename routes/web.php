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

Route::get('/', function () {
    return view('top');
});


Route::group(['prefix' => 'post'], function(){
  Route::get('blog', 'PostFormController@blog')->name('post.blog');
  Route::get('index', 'PostFormController@index')->name('post.index');
  Route::get('create', 'PostFormController@create')->name('post.create');
  Route::post('store', 'PostFormController@store')->name('post.store');
  Route::get('show/{id}', 'PostFormController@show')->name('post.show');
  Route::get('edit/{id}', 'PostFormController@edit')->name('post.edit');
  Route::post('update/{id}', 'PostFormController@update')->name('post.update');
  Route::post('destroy/{id}', 'PostFormController@destroy')->name('post.destroy');
  Route::post('/upload', 'PostController@upload')->name('post.upload');;
});

Route::resource('post', 'PostFormController')->only([
    'index', 'show','blog'
]);


Route::group(['prefix' => 'contact', 'middleware' => 'auth'], function(){
  Route::get('index', 'ContactFormController@index')->name('contact.index');
  Route::get('create', 'ContactFormController@create')->name('contact.create');
  Route::post('store', 'ContactFormController@store')->name('contact.store');
  Route::get('show/{id}', 'ContactFormController@show')->name('contact.show');
  Route::get('edit/{id}', 'ContactFormController@edit')->name('contact.edit');
  Route::post('update/{id}', 'ContactFormController@update')->name('contact.update');
  Route::post('destroy/{id}', 'ContactFormController@destroy')->name('contact.destroy');
});

Route::resource('contact', 'ContactFormController')->only([
    'index', 'show'
]);

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


