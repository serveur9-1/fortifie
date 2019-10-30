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



Route::get('/description', function () {
    return view('site.annonce_desc');
});

Route::get('/contact', function () {
    return view('site.contact');
});

Route::get('/galerie', function () {
    return view('site.galerie');
});

Route::get('/inscription', function () {
    return view('site.inscription');
});

Route::get('/connexion', function () {
    return view('site.connexion');
});

Route::get('/mesAnnonce', function () {
    return view('site.mesAnnonce');
});

Route::get('/profil', function () {
    return view('site.profil');
});

Route::get('/publier', function () {
    return view('site.publier');
});

Route::get('/modify', function () {
    return view('site.modify');
});


