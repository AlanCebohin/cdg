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

Route::get('clubdegorras/home', 'HomeController@show');
Route::get('clubdegorras/products', 'ProductsController@show');

/*===============
======ADMIN======
===============*/
Route::get('admin/products', 'Admin\ProductsController@show');
Route::get('admin/products/create', 'Admin\ProductsController@create');



/*------------------------------------------*/
Auth::routes();

Route::get('home', 'HomeController@index')->name('home');
