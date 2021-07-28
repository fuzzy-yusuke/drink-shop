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

Route::get('/user/top','UserController@top')->name('user.top');

Route::get('/index','ItemController@index')->name('item.index');
Route::get('/search','ItemController@index')->name('item.search');

Route::get('/show/{id}','ItemController@show')->name('item.show');

Route::get('/pay','ItemController@pay')->name('item.pay');

Route::get('/new','ItemController@new')->name('item.new');


});
Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
