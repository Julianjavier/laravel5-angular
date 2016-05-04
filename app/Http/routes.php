<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('index');
});

Route::get('/details/{id}', function ($id) {
    return view('details');
});

Route::resource('api/product','ProductsController');
Route::resource('api/product/details/{id}','ProductsController@details');
