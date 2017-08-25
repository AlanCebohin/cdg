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


/*===============
=====CDG=========
=================*/

/*===============
======FRONT======
=================*/

Route::get('clubdegorras/home', 'HomeController@index');
Route::get('clubdegorras/products', 'ProductsController@show');

/*===============
======ADMIN======
===============*/
Route::get('admin/products', 'Admin\ProductsController@index');
Route::get('admin/products/create', 'Admin\ProductsController@create');
Route::post('admin/products/create', 'Admin\ProductsController@store');
Route::get('admin/products/{id}', 'Admin\ProductsController@show');
//------STOCK----
Route::get('admin/stock/{id}', 'Admin\StockController@update');



/*------------------------------------------*/
Auth::routes();

Route::get('home', 'HomeController@index')->name('home');
