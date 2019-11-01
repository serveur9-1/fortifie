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
    'uses' => 'HomeController@publier'
]);

Route::get('/description/{id}',[
    'as' => 'description',
    'uses' => 'HomeController@description'
])->where('id','[0-9]+');

Route::get('/mes_annonces',[
    'as' => 'myAnnonce',
    'uses' => 'HomeController@myAnnonce'
]);

Route::get('/profil',[
    'as' => 'profil',
    'uses' => 'UserController@profil'
]);

Route::get('/modification',[
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

Route::get('/categorie/{id}',[
    'as' => 'categorie',
    'uses' => 'CategorieController@categorie'
])->where('id','[0-9]+');

Route::get('/paroisse/{id}',[
    'as' => 'paroisse',
    'uses' => 'ParoisseController@index'
])->where('id','[0-9]+');




//Query Rechercher

Route::get('/query',[
    'as' => 'query',
    'uses' => 'HomeController@query'
]);

