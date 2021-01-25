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
Route::group(['middleware'=>'auth'], function () {
    Route::get('dat-hang','HomeController@dathang')->name('dathang');
});
Route::get('/','HomeController@index')->name('home');

Route::get('all-product','HomeController@allproduct')->name('allproduct');

Route::post('/dangxuat','HomeController@dangxuat')->name('dangxuat');
Route::post('dat-hang','HomeController@postdathang')->name('dathang');
Route::get('dathang-thanhcong','HomeController@thanhcong')->name('thanhcong');

Route::get('/search','HomeController@search')->name('search');
Route::get('/{slug}','HomeController@view')->name('view');


Route::group(['prefix' => 'admin','namespace'=>'Admin','middleware'=>'auth'],function () {

        Route::get('/','AdminController@index')->name('admin');
        Route::get('/logout','AdminController@logout')->name('logout');

        include 'admin.php';
    }
);
Route::get('admin/login','Admin\AdminController@login')->name('login');
Route::post('admin/login','Admin\AdminController@post_login')->name('login');


Route::group(['prefix' => 'cart'], function () {
    Route::get('view','CartController@view')->name('cart.view');
    Route::get('add/{id}','CartController@add')->name('cart.add');
    Route::get('remove/{id}','CartController@remove')->name('cart.remove');
    Route::get('update/{id}','CartController@update')->name('cart.update');
    Route::get('clear','CartController@clear')->name('cart.clear');

});

Route::get('/unactive/{id}','HomeController@unactive');
Route::get('/active/{id}','HomeController@active');


Route::get('sendemail','HomeController@SendReminderEmail');
