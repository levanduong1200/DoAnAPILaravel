<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::namespace('Api')->group(function(){
    Route::get('category', 'CategoryController@index');
    Route::get('category/{id}', 'CategoryController@show')->where('id','[0-9]+');
    Route::get('category/{id}/search', 'CategoryController@search');
    Route::post('category', 'CategoryController@store')->name('category.store');
    Route::put('category/{id}', 'CategoryController@update')->name('category.update');
    Route::delete('category/{id}', 'CategoryController@destroy')->name('category.destroy');


    Route::get('product', 'ProductController@index');
    Route::get('product/{id}', 'ProductController@show')->where('id','[0-9]+');
    Route::get('product/search', 'ProductController@search')->where('id', '[0-9]+');
    Route::post('product', 'ProductController@store')->name('product.store');
    Route::put('product/{id}', 'ProductController@update')->name('product.update');
    Route::delete('product/{id}', 'ProductController@destroy')->name('product.destroy');


    Route::get('customers', 'CustomerController@index');
    Route::get('customers/{id}', 'CustomerController@show');
    Route::post('customers/create', 'CustomerController@store');
    Route::put('customers/update/{id}', 'CustomerController@update');
    Route::post('customers/delete/{id}', 'CustomerController@destroy');


    Route::group([
        'middleware' => 'api',
        'prefix' => 'auth'
    ], function ($router) {
        Route::post('login', 'APIController@login');
        Route::post('logout', 'APIController@logout');
        Route::post('register', 'APIController@register');
        Route::post('refresh', 'APIController@refresh');
        Route::post('me', 'APIController@me');

//         Route::post('register', 'UserController@register');
//         Route::post('login', 'UserController@login');
//         Route::group(['middleware' => 'jwt.auth'], function () {
//         Route::get('user-info', 'UserController@getUserInfo');
// });

     
        // Route::post('auth/login', 'UserController@login');
    });
    // Route::group([
    //     'prefix' => 'auth'
    // ], function() {
    //     Route::post('login', 'UserController@login');
    //     Route::post('register', 'UserController@register');

    //     Route::group([
    //         'middleware' => 'auth:api'
    //     ], function() {
    //         Route::get('logout', 'UserController@logout');
    //         Route::get('detail', 'UserController@detail');
    //     });
    // });
});
