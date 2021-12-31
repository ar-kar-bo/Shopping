<?php

use Illuminate\Support\Facades\Route;

Route::get('/','PageController@index');

//User Auth
Route::get('/login','User\AuthController@showLogin');
Route::post('/login','User\AuthController@postLogin');

Route::get('/register','User\AuthController@showRegister');
Route::post('/register','User\AuthController@postRegister');

Route::get('/logout','User\AuthController@logout');

Route::get('/detail','PageController@productDetail');
Route::get('/cart','PageController@productCart');
Route::get('/order','PageController@productOrder');
Route::get('/profile','PageController@profile');

Route::get('/admin/login','Admin\AuthController@showLogin');
Route::post('/admin/login','Admin\AuthController@postLogin');

Route::group(['prefix'=>'admin','namespace'=>'Admin','as'=>'admin.','middleware'=>'Admin'],function(){
    Route::get('/','PageController@dashboard');
    Route::resource('/category', 'CategoryController');
    Route::resource('/product', 'ProductController');

    #order
    Route::get('/order/panding','OrderController@pending');
    Route::get('/order/complete/{id}','OrderController@makeComplete');
    Route::get('/order/complete','OrderController@complete');

    #user
    Route::get('/user','PageController@alluser');
    Route::get('/logout','AuthController@logout');

});
