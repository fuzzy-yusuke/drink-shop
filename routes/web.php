<?php

use App\Http\Controllers\ItemController;
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

//トップ画面
Route::get('/user/top','UserController@top')->name('user.top');

//一覧画面
Route::get('/index','ItemController@index')->name('item.index');
Route::get('/search','ItemController@index')->name('item.search');

//詳細画面
Route::get('/show/{id}','ItemController@show')->name('item.show');

//購入画面
Route::get('/pay/{id}','ItemController@pay')->name('item.pay');
Route::post('/buy/{id}','ItemController@buy')->name('item.buy');

//追加画面
Route::get('/new','ItemController@new')->name('item.new');

//追加完了画面
Route::post('/item','ItemController@store')->name('item.store');

//追加完了画面
Route::get('/complete','ItemController@complete')->name('item.complete');


});
Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
