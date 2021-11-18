<?php

use Illuminate\Support\Facades\Route;

Route::get('/','PageController@index');
Route::get('/detail','PageController@productDetail');
Route::get('/cart','PageController@productCart');
Route::get('/order','PageController@productOrder');
Route::get('/profile','PageController@profile');

Route::group(['prefix'=>'admin','namespace'=>'Admin','as'=>'admin.'],function(){
    Route::get('/','PageController@dashboard');
    Route::resource('/category', 'CategoryController');
    Route::resource('/product', 'ProductController');
});
