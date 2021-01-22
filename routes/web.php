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

Route::get('products','crudController@getproducts');
Route::group(['prefix'=>'products'],function(){
   // Route::get('store','crudController@store');
    Route::get('create','crudController@create');
    Route::post('store','crudController@store')->name('products.store');   
    Route::get('all','crudController@getallproducts');   

    //Route::post('store','crudController@store')->name('products.store');   

});