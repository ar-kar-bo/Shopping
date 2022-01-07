<?php

use Illuminate\Routing\RouteGroup;
use Illuminate\Support\Facades\Route;


Route::group(['middleware'=>'ShareData'],function(){
    Route::get('/','PageController@index');
    Route::get('/product/category/{slug}','PageController@byCategory');
    Route::get('/product/search','PageController@search');

    #User Auth
    Route::get('/login','User\AuthController@showLogin')->name('login');
    Route::post('/login','User\AuthController@postLogin');

    Route::get('/register','User\AuthController@showRegister');
    Route::post('/register','User\AuthController@postRegister');


    //product
    Route::group(['middleware'=>'auth'],function(){
        Route::get('/product/{slug}','PageController@detail');

        Route::get('/product/cart/add/{slug}','PageController@addToCart');
        Route::get('/cart','PageController@cart');

        Route::get('/order/make','PageController@makeOrder');
        Route::get('/order/pending','PageController@pendingOrder');
        Route::get('/order/complete','PageController@completeOrder');
        Route::get('/order','PageController@order');

        Route::get('/profile','PageController@profile');
        Route::put('/profile/update','PageController@update');

        Route::get('/privacy','User\AuthController@privacy');
        Route::post('/privacy/update','User\AuthController@update');

        Route::get('/logout','User\AuthController@logout');
    });




});



//admin route
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
