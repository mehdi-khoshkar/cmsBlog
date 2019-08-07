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

Route::group(['prefix' => 'adminPanel', 'namespace' => 'Admin'], function (){
    
    Route::get('/', 'AdminController@index')->name('admin.dashboard');
    Route::get('/profile', 'AdminController@profile')->name('admin.profile');
    Route::get('/post', 'PostController@index')->name('adminPanel.post.index');
    Route::get('/post/create', 'PostController@create')->name('adminPanel.post.create');
    Route::post('/post/save', 'PostController@save')->name('adminPanel.post.save');

});
Auth::routes();

Route::get('/login', 'AdminLoginController@index')->name('admin.login');
Route::post('/login/auth', 'AdminLoginController@login')->name('admin.login.submit');


Route::get('/home', 'HomeController@index')->name('home');
