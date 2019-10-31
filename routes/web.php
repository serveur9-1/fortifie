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

Route::get('/publier',[
    'as' => 'publier',
    'uses' => 'ArticleController@publier'
]);

Route::get('/description',[
    'as' => 'description',
    'uses' => 'ArticleController@description'
]);

Route::get('/myAnnonce',[
    'as' => 'myAnnonce',
    'uses' => 'ArticleController@myAnnonce'
]);

Route::get('/profil',[
    'as' => 'profil',
    'uses' => 'UserController@profil'
]);

Route::get('/modify',[
    'as' => 'modify',
    'uses' => 'UserController@modify'
]);

Route::get('/contact',[
    'as' => 'contact',
    'uses' => 'ContactController@contact'
]);

Route::get('/galerie',[
    'as' => 'galerie',
    'uses' => 'GalleryController@gallery'
]);