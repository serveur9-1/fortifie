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

//Gallery

Route::get('/galerie',[
    'as' => 'galerie',
    'uses' => 'GalleryController@gallery'
]);


Route::get('/galerie/delete/{id}',[
    'as' => 'galerie.delete',
    'uses' => 'GalleryController@delete'
])->where('id', '[0-9]+');

Route::get('/galerie/update/{id}',[
    'as' => 'galerie.update',
    'uses' => 'GalleryController@update'
])->where('id', '[0-9]+');


//Pubs

Route::get('/pub/delete/{id}',[
    'as' => 'pub.delete',
    'uses' => 'PubController@delete'
])->where('id', '[0-9]+');

Route::get('/pubcategorie/update/{id}',[
    'as' => 'pub.update',
    'uses' => 'PubController@update'
])->where('id', '[0-9]+');



Route::get('/categorie/{id}',[
    'as' => 'categorie',
    'uses' => 'CategorieController@categorie'
])->where('id','[0-9]+');

Route::get('/paroisse/{id}',[
    'as' => 'paroisse',
    'uses' => 'ParoisseController@index'
])->where('id','[0-9]+');

//Action article

Route::get('article/delete/{id}',[
    'as' => 'article.delete',
    'uses' => 'HomeController@deleteArticle'
])->where('id','[0-9]+');


//Query Rechercher

Route::get('/query',[
    'as' => 'query',
    'uses' => 'HomeController@query'
]);

Route::get('/q',[
    'as' => 'q',
    'uses' => 'HomeController@searchAnnonce'
]);

//Authentification

Auth::routes();


//NEWSLETTER

Route::post('/newsletter',[
    'as' => 'newsletter',
    'uses' => 'NewsletterController@suscribe'
]);


Route::get('/unsuscribe',[
    'as' => 'unsuscribe',
    'uses' => 'NewsletterController@unsuscribe'
]);


// CONTACTEZ NOUS

Route::post('/contact/send',[
    'as' => 'sendMail',
    'uses' => 'ContactController@sendContactMail'
]);


//administration

Route::get('/diocese',[
    'as' => 'listDiocese',
    'uses' => 'DioceseController@listDiocese'
]);

Route::get('/addDiocese',[
    'as' => 'addDiocese',
    'uses' => 'DioceseController@addDiocese'
]);

Route::get('/listCategorie',[
    'as' => 'listCategorie',
    'uses' => 'CategorieController@listCategorie'
]);

Route::get('/listSousCategorie',[
    'as' => 'listSousCategorie',
    'uses' => 'CategorieController@listSousCategorie'
]);

Route::get('/addSousCategorie',[
    'as' => 'addSousCategorie',
    'uses' => 'CategorieController@addSousCategorie'
]);

Route::get('/addCategorie',[
    'as' => 'addCategorie',
    'uses' => 'CategorieController@addCategorie'
]);

Route::get('/listAnnonce',[
    'as' => 'listAnnonce',
    'uses' => 'ArticleController@listAnnonce'
]);

Route::get('/addAnnonce',[
    'as' => 'addAnnonce',
    'uses' => 'ArticleController@addAnnonce'
]);

Route::get('/listUsers',[
    'as' => 'listUsers',
    'uses' => 'UserController@listUsers'
]);

Route::get('/addUsers',[
    'as' => 'addUsers',
    'uses' => 'UserController@addUsers'
]);

Route::get('/listPub',[
    'as' => 'listPub',
    'uses' => 'PubliciteController@listPub'
]);

Route::get('/addPub',[
    'as' => 'addPub',
    'uses' => 'PubliciteController@addPub'
]);

Route::get('/listPartner',[
    'as' => 'listPartner',
    'uses' => 'PartenaireController@listPartner'
]);

Route::get('/addPartner',[
    'as' => 'addPartner',
    'uses' => 'PartenaireController@addPartner'
]);

Route::get('/listVille',[
    'as' => 'listVille',
    'uses' => 'VilleController@listVille'
]);

Route::get('/addVille',[
    'as' => 'addVille',
    'uses' => 'VilleController@addVille'
]);

Route::get('/listGallerie',[
    'as' => 'listGallerie',
    'uses' => 'GalleryController@listGalleryAdmin'
]);

Route::get('/addGallerie',[
    'as' => 'addGallerie',
    'uses' => 'GalleryController@addGalleryAdmin'
]);

Route::get('/listParoisse',[
    'as' => 'listParoisse',
    'uses' => 'ParoisseController@listParoisse'
]);

Route::get('/addParoisse',[
    'as' => 'addParoisse',
    'uses' => 'ParoisseController@addParoisse'
]);

Route::get('/newsletter',[
    'as' => 'newsletter',
    'uses' => 'NewsletterController@newslettersAdmin'
]);

Route::get('/Accueil',[
    'as' => 'Accueil',
    'uses' => 'HomeController@admin'
]);