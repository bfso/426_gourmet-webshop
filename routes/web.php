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

Route::group(array('prefix' => 'products'), function() {
    Route::get('/', 'ProductController@index')->name('products.index');
    Route::get('{slug}', 'ProductController@show')->name('products.show');
});

Route::group(array('prefix' => 'cart'), function() {
    Route::post('add', 'CartController@add')->name('cart.add');
});


Route::get('checkout/payment', 'CheckoutController@payment')->name('checkout.payment');
Route::post('checkout/pay', 'CheckoutController@pay')->name('checkout.pay');
