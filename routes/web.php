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

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/', function () {
    return redirect('/login');
});
Route::get('/admin/top','AdminController@top')->name('admin.top');

Route::get('/user/top','UserController@top')->name('user.top');

Route::get('/list','ItemController@list')->name('item.list');
Route::get('/show','ItemController@show')->name('item.show');
Route::get('/basket','ListController@basket')->name('list.basket');
Route::get('/history','ListController@history')->name('list.history');
Route::get('/confirm','ListController@confirm')->name('list.confirm');

Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
