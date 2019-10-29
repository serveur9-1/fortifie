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

Route::get('/',[
    'as' => 'home',
    'uses' => 'HomeController@index'
]);



Route::get('/desc', function () {
    return view('site.annonce_desc');
});

Route::get('/contact', function () {
    return view('site.contact');
});


