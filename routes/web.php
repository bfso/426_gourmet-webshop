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
    Route::get('index', 'CartController@index')->name('cart.index');
    Route::get('destroy/{cart_item}', 'CartController@destroy')->name('cart.destroy');
});

Route::get('checkout/shipment', 'CheckoutController@shipment')->name('checkout.shipment');
Route::post('checkout/ship', 'CheckoutController@ship')->name('checkout.ship');
