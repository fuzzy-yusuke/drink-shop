<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Route::get('/login', function () {
    return redirect('/login');
});

Route::group(['middleware'=>['auth','verified']],function(){


Route::get('/admin/top','AdminController@top')->name('admin.top');

Route::get('/user/top','UserController@top')->name('user.top');

Route::get('/index','ItemController@index')->name('item.index');
Route::get('/{id}','ItemController@show')->name('item.show');

//買い物かごに関するルーティング
Route::resource('cartlist','ItemController',['only'=>['index']]);
Route::post('/cart/addcart/cartlistremove','itemController@remove')->name('cart.remove');
Route::post('/cart/addcart','itemController@addCart')->name('cart.addCart');
Route::post('/cart/addcart/store','itemController@store')->name('cart.store');




Route::get('/cart','CartController@cart')->name('item.cart');
Route::get('/history','CartController@history')->name('list.history');
Route::get('/confirm','CartController@confirm')->name('list.confirm');
});
Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
