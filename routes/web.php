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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::post('/login', 'HomeController@login')->name('login.login');
Route::get('/login', 'HomeController@logout')->name('login.keluar');

Route::get('/backend', 'ProductController@home')->name('admin.home');

Route::get('/backend/products', 'ProductController@index')->name('products.index');
Route::get('/backend/products/create', 'ProductController@create')->name('products.create');
Route::get('/backend/products/{id}/show', 'ProductController@show')->name('products.show');
Route::post('/backend/products', 'ProductController@store')->name('products.store');
Route::get('/backend/products/{id}/edit', 'ProductController@edit')->name('products.edit');
Route::post('/backend/products/{id}/update', 'ProductController@update')->name('products.update');
Route::get('/backend/products/{id}/delete', 'ProductController@destroy')->name('products.destroy');

Route::get('/backend/customer', 'CustomerController@index')->name('customer.index');
Route::get('/backend/customer/create', 'CustomerController@create')->name('customer.create');
Route::get('/backend/customer/{id}/show', 'CustomerController@show')->name('customer.show');
Route::post('/backend/customer', 'CustomerController@store')->name('customer.store');
Route::get('/backend/customer/{id}/edit', 'CustomerController@edit')->name('customer.edit');
Route::post('/backend/customer/{id}/update', 'CustomerController@update')->name('customer.update');
Route::get('/backend/customer/{id}/delete', 'CustomerController@destroy')->name('customer.destroy');

Route::get('/backend/ordes', 'OrdersController@index')->name('orders.index');