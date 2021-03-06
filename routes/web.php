<?php

use App\Ville;
use App\Paroisse;
use App\Diocese;
use App\Article;
use App\SubCategory;

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



Route::group(['middleware'=> 'auth'],function(){

    //#############################   GESTIONNAIRE

    Route::group(['middleware'=> 'gestionnaire'],function(){
        
        Route::get('/mes_annonces',[
            'as' => 'myAnnonce',
            'uses' => 'HomeController@myAnnonce'
        ]);
    
        Route::get('/publier',[
            'as' => 'publier',
            'uses' => 'HomeController@publier'
        ]);
    
    
        Route::get('/publier/edit/{id}',[
            'as' => 'editPublier',
            'uses' => 'HomeController@editPublier'
        ])->where('id','[0-9]+');

        Route::get('/publier/particulier',[
            'as' => 'publier.particulier',
            'uses' => 'HomeController@publierParticulier'
        ]);
    
        Route::get('/publier/particulier/edit/{id}',[
            'as' => 'editPublierParticulier',
            'uses' => 'HomeController@editPublierParticulier'
        ])->where('id','[0-9]+');

        Route::get('/profil',[
            'as' => 'profil',
            'uses' => 'UserController@gestionnaireProfil'
        ]);
        
        
        Route::post('/profil/update',[
            'as' => 'updateGestionnaireProfil',
            'uses' => 'UserController@updateGestionnaireProfil'
        ]);

    });




    //#############################   ADMIN AND GESTIONNAIRE

    Route::get('/modification',[
        'as' => 'modify',
        'uses' => 'UserController@modify'
    ]);

    //Action article

    Route::get('article/delete/{id}',[
        'as' => 'article.delete',
        'uses' => 'HomeController@deleteArticle'
    ])->where('id','[0-9]+');

    Route::get('/deleteAnnonce/{id}',[
        'as' => 'deleteAnnonce',
        'uses' => 'ArticleController@deleteAnnonce'
    ])->where('id','[0-9]+');

    Route::post('/validAnnonce',[
        'as' => 'validAnnonce',
        'uses' => 'ArticleController@validAnnonce'
    ]);

    Route::post('/updateAnnonce/{id}',[
        'as' => 'updateAnnonce',
        'uses' => 'ArticleController@updateAnnonce'
    ])->where('id','[0-9]+');

    Route::patch('/updateUsers/{id}',[
        'as' => 'updateUsers',
        'uses' => 'UserController@updateUsers'
    ])->where('id','[0-9]+');
    
    
});



    //#############################   ADMIN

    //administration
    Route::group(['prefix'=> 'admin'],function(){

        Route::get('/login',[
            'as' => 'adminLogin',
            'uses' => 'UserController@adminLogin'
        ]);

    //resetAdmin route
        Route::get('/reset',[
            'as' => 'resetAdmin',
            'uses' => 'UserController@resetAdmin'
        ]);

    //emailAdmin route
        Route::get('/password/reset',[
            'as' => 'adminResetPassword',
            'uses' => 'UserController@emailAdmin'
        ]);

        Route::group(['middleware'=> 'auth'],function(){
            
            Route::group(['middleware'=> 'staff'],function(){


                Route::get('/configuration',[
                    'as' => 'config',
                    'uses' => 'ConfigController@configuration'
                ]);

                Route::post('/config/valid',[
                    'as' => 'config.valid',
                    'uses' => 'ConfigController@valid'
                ]);
                
                

                Route::get('/profil',[
                    'as' => 'profilAdmin',
                    'uses' => 'UserController@adminProfil'
                ]);
        
        
                Route::post('/profil/update',[
                    'as' => 'updateAdminProfil',
                    'uses' => 'UserController@updateAdminProfil'
                ]);

                //DIOCESE

                Route::get('/diocese',[
                    'as' => 'listDiocese',
                    'uses' => 'DioceseController@listDiocese'
                ]);
    

                //CATEGORY

                Route::get('/listCategorie',[
                    'as' => 'listCategorie',
                    'uses' => 'CategorieController@listCategorie'
                ]);
    
    
                Route::get('/listSousCategorie',[
                    'as' => 'listSousCategorie',
                    'uses' => 'CategorieController@listSousCategorie'
                ]);



                //  ANNONCES

                Route::get('/listAnnonce',[
                    'as' => 'listAnnonce',
                    'uses' => 'ArticleController@listAnnonce'
                ]);

                Route::get('/annonce/signalee',[
                    'as' => 'annonceSignale',
                    'uses' => 'ArticleController@annonceSignale'
                ]);

                Route::get('/waitAnnonce',[
                    'as' => 'waitAnnonce',
                    'uses' => 'ArticleController@waitAnnonce'
                ]);




                //USERS

                Route::get('/listUsers',[
                    'as' => 'listUsers',
                    'uses' => 'UserController@listUsers'
                ]);


                Route::get('/ask/list',[
                    'as' => 'askList',
                    'uses' => 'UserController@askAccount'
                ]);


                //GESTIONNAIRE


                Route::group(['prefix'=> 'gestionnaire'],function(){
                    
                    Route::get('/listUsers',[
                        'as' => 'ges.listUsers',
                        'uses' => 'UserController@listGestionnaire'
                    ]);
                });

                //PUB

                Route::get('/listPub',[
                    'as' => 'listPub',
                    'uses' => 'PubController@listPub'
                ]);


                //PARTENAIRE

                Route::get('/listPartner',[
                    'as' => 'listPartner',
                    'uses' => 'PartenaireController@listPartner'
                ]);

                //VILLES

                Route::get('/listVille',[
                    'as' => 'listVille',
                    'uses' => 'VilleController@listVille'
                ]);


                //GALERIE

                Route::get('/listGallerie',[
                    'as' => 'listGallerie',
                    'uses' => 'GalleryController@listGalleryAdmin'
                ]);

                Route::get('/createAlbum',[
                    'as' => 'createAlbum',
                    'uses' => 'GalleryController@createAlbum'
                ]);




                //PAROISSE

                Route::get('/listParoisse',[
                    'as' => 'listParoisse',
                    'uses' => 'ParoisseController@listParoisse'
                ]);

                //NEWSLETTER

                Route::get('/newsletter',[
                    'as' => 'newsletterAdmin',
                    'uses' => 'NewsletterController@newslettersAdmin'
                ]);

                Route::get('/deleteNewsletter/{id}',[
                    'as' => 'deleteNewsletter',
                    'uses' => 'NewsletterController@deleteNewsletter'
                ])->where('id','[0-9]+');


                Route::get('/',[
                    'as' => 'Accueil',
                    'uses' => 'HomeController@admin'
                ]);

                Route::get('/accueil',[
                    'as' => 'Accueil',
                    'uses' => 'HomeController@admin'
                ]);

                //faqs


                Route::get('/faq',[
                    'as' => 'admin.faq',
                    'uses' => 'FaqController@index'
                ]);


                Route::get('/question',[
                    'as' => 'admin.question',
                    'uses' => 'FaqController@question'
                ]);

                Route::get('/answer',[
                    'as' => 'admin.answer',
                    'uses' => 'FaqController@answer'
                ]);




                Route::group(['middleware'=> 'admin'],function(){

                    Route::get('/addDiocese',[
                        'as' => 'addDiocese',
                        'uses' => 'DioceseController@addDiocese'
                    ]);
        
                    Route::post('/validDiocese',[
                        'as' => 'validDiocese',
                        'uses' => 'DioceseController@validDiocese'
                    ]);
        
                    Route::get('/diocese/edit/{id}',[
                        'as' => 'editDiocese',
                        'uses' => 'DioceseController@editDiocese'
                    ])->where('id','[0-9]+');
        
                    Route::post('/updateDiocese/{id}',[
                        'as' => 'updateDiocese',
                        'uses' => 'DioceseController@updateDiocese'
                    ])->where('id','[0-9]+');
        
                    Route::get('/deleteDiocese/{id}',[
                        'as' => 'deleteDiocese',
                        'uses' => 'DioceseController@deleteDiocese'
                    ])->where('id','[0-9]+');

                    Route::get('/addCategorie',[
                        'as' => 'addCategorie',
                        'uses' => 'CategorieController@addCategorie'
                    ]);
        
                    Route::get('/Categorie/edit/{id}',[
                        'as' => 'editCategorie',
                        'uses' => 'CategorieController@editCategorie'
                    ])->where('id','[0-9]+');
        
                    Route::post('/updateCategorie/{id}',[
                        'as' => 'updateCategorie',
                        'uses' => 'CategorieController@updateCategorie'
                    ])->where('id','[0-9]+');
        
                    Route::get('/deleteCategorie/{id}',[
                        'as' => 'deleteCategorie',
                        'uses' => 'CategorieController@deleteCategorie'
                    ])->where('id','[0-9]+');
        
                    Route::post('/validCategorie',[
                        'as' => 'validCategorie',
                        'uses' => 'CategorieController@validCategorie'
                    ]);

                    Route::get('/addSousCategorie',[
                        'as' => 'addSousCategorie',
                        'uses' => 'CategorieController@addSousCategorie'
                    ]);
        
                    Route::get('/deleteSousCategorie/{id}',[
                        'as' => 'deleteSousCategorie',
                        'uses' => 'CategorieController@deleteSousCategorie'
                    ])->where('id','[0-9]+');
        
        
                    Route::post('/validSousCategorie',[
                        'as' => 'validSousCategorie',
                        'uses' => 'CategorieController@validSousCategorie'
                    ]);
        
        
                    Route::get('/sousCategorie/edit/{id}',[
                        'as' => 'editSousCategorie',
                        'uses' => 'CategorieController@editSousCategorie'
                    ])->where('id','[0-9]+');
        
                    Route::post('/updateSousCategorie/{id}',[
                        'as' => 'updateSousCategorie',
                        'uses' => 'CategorieController@updateSousCategorie'
                    ])->where('id','[0-9]+');

                    Route::post('/listAnnonce/changeState/{id}/{enable}',[
                        'as' => 'enableOrdisableArticle',
                        'uses' => 'ArticleController@enableOrdisableArticle'
                    ])->where('id','[0-9]+');
    
                    Route::get('/addAnnonce',[
                        'as' => 'addAnnonce',
                        'uses' => 'ArticleController@addAnnonce'
                    ]);
    
                    Route::get('/annonce/edit/{id}',[
                        'as' => 'editAnnonce',
                        'uses' => 'ArticleController@editAnnonce'
                    ])->where('id','[0-9]+');


                    Route::get('/ask/accept/{id}',[
                        'as' => 'acceptUserAsk',
                        'uses' => 'UserController@acceptUserAsk'
                    ])->where('id','[0-9]+');
    
                    Route::post('/listUser/changeState/{id}/{enable}',[
                        'as' => 'enableOrdisableUserAccount',
                        'uses' => 'UserController@enableOrdisableUserAccount'
                    ])->where('id','[0-9]+');
    
    
                    Route::get('/addUsers',[
                        'as' => 'addUsers',
                        'uses' => 'UserController@addUsers'
                    ]);
    
                    Route::get('/deleteUser/{id}',[
                        'as' => 'deleteUser',
                        'uses' => 'UserController@deleteUser'
                    ])->where('id','[0-9]+');
    
                    Route::get('/users/edit/{id}',[
                        'as' => 'editUser',
                        'uses' => 'UserController@editUsers'
                    ])->where('id','[0-9]+');

                    Route::group(['prefix'=> 'gestionnaire'],function(){
                    
                        Route::get('/addUsers',[
                            'as' => 'ges.addUsers',
                            'uses' => 'UserController@addGestionnaire'
                        ]);
    
                        Route::post('/validUsers',[
                            'as' => 'ges.validUsers',
                            'uses' => 'UserController@validGestionnaire'
                        ]);
        
                        Route::get('/deleteUser/{id}',[
                            'as' => 'ges.deleteUser',
                            'uses' => 'UserController@deleteGestionnaire'
                        ])->where('id','[0-9]+');
        
                        Route::get('/users/edit/{id}',[
                            'as' => 'ges.editUser',
                            'uses' => 'UserController@editGestionnaire'
                        ])->where('id','[0-9]+');
        
                        Route::patch('/updateUsers/{id}',[
                            'as' => 'ges.updateUsers',
                            'uses' => 'UserController@updateGestionnaire'
                        ])->where('id','[0-9]+');
    
                    });


                    Route::post('/listUsers/changeState/{id}/{enable}',[
                        'as' => 'enableOrdisablePub',
                        'uses' => 'PubController@enableOrdisablePub'
                    ])->where('id','[0-9]+');
    
                    Route::get('/deletePub/{id}',[
                        'as' => 'deletePub',
                        'uses' => 'PubController@deletePub'
                    ])->where('id','[0-9]+');
    
                    Route::get('/pub/edit/{id}',[
                        'as' => 'editPub',
                        'uses' => 'PubController@editPub'
                    ])->where('id','[0-9]+');
    
                    Route::post('/updatePub/{id}',[
                        'as' => 'updatePub',
                        'uses' => 'PubController@updatePub'
                    ])->where('id','[0-9]+');
    
    
                    Route::get('/addPub',[
                        'as' => 'addPub',
                        'uses' => 'PubController@addPub'
                    ]);
    
                    Route::post('/validPub',[
                        'as' => 'validPub',
                        'uses' => 'PubController@validPub'
                    ]);

                    Route::get('/deletePartner/{id}',[
                        'as' => 'deletePartner',
                        'uses' => 'PartenaireController@deletePartner'
                    ])->where('id','[0-9]+');
    
                    Route::get('/addPartner',[
                        'as' => 'addPartner',
                        'uses' => 'PartenaireController@addPartner'
                    ]);
    
                    Route::post('/validPartner',[
                        'as' => 'validPartner',
                        'uses' => 'PartenaireController@validPartner'
                    ]);
    
    
                    Route::get('/partner/edit/{id}',[
                        'as' => 'editPartner',
                        'uses' => 'PartenaireController@editPartner'
                    ])->where('id','[0-9]+');
    
                    Route::post('/updatePartner/{id}',[
                        'as' => 'updatePartner',
                        'uses' => 'PartenaireController@updatePartner'
                    ])->where('id','[0-9]+');                    

                    Route::get('/deleteVille/{id}',[
                        'as' => 'deleteVille',
                        'uses' => 'VilleController@deleteVille'
                    ])->where('id','[0-9]+');
    
                    Route::get('/addVille',[
                        'as' => 'addVille',
                        'uses' => 'VilleController@addVille'
                    ]);
    
                    Route::get('/ville/edit/{id}',[
                        'as' => 'editVille',
                        'uses' => 'VilleController@editVille'
                    ])->where('id','[0-9]+');
    
    
    
                    Route::post('/validVille',[
                        'as' => 'validVille',
                        'uses' => 'VilleController@validVille'
                    ]);
    
                    Route::post('/updateVille/{id}',[
                        'as' => 'updateVille',
                        'uses' => 'VilleController@updateVille'
                    ])->where('id','[0-9]+');

                    Route::post('/addAlbum',[
                        'as' => 'addAlbum',
                        'uses' => 'GalleryController@validAlbum'
                    ]);
    
    
                    Route::get('/listAlbum/changeState/{id}/{enable}',[
                        'as' => 'enableOrDisableAlbum',
                        'uses' => 'GalleryController@enableOrDisableAlbum'
                    ])->where('id','[0-9]+');
    
    
    
                    Route::post('/listGallery/changeState/{id}/{enable}',[
                        'as' => 'enableOrDisableGalleryImage',
                        'uses' => 'GalleryController@enableOrDisableGalleryImage'
                    ])->where('id','[0-9]+');
    
                    
    
                    Route::get('/deleteGallerie/{id}',[
                        'as' => 'deleteGallerie',
                        'uses' => 'GalleryController@deleteGallery'
                    ])->where('id','[0-9]+');
    
    
                    Route::get('/deleteAlbum/{id}',[
                        'as' => 'deleteAlbum',
                        'uses' => 'GalleryController@deleteAlbum'
                    ])->where('id','[0-9]+');
    
    
                    Route::get('/addGallerie',[
                        'as' => 'addGallerie',
                        'uses' => 'GalleryController@addGalleryAdmin'
                    ]);
    
                    Route::post('/validGallerie',[
                        'as' => 'validGallerie',
                        'uses' => 'GalleryController@validGallery'
                    ]);

                    Route::get('/gallerie/edit/{id}',[
                        'as' => 'editGallerie',
                        'uses' => 'GalleryController@editGallery'
                    ])->where('id','[0-9]+');
    
                    Route::post('/updateGallerie/{id}',[
                        'as' => 'updateGallerie',
                        'uses' => 'GalleryController@updateGallery'
                    ])->where('id','[0-9]+');
    
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


                    Route::get('/addParoisse',[
                        'as' => 'addParoisse',
                        'uses' => 'ParoisseController@addParoisse'
                    ]);

                    Route::post('/validParoisse',[
                        'as' => 'validParoisse',
                        'uses' => 'ParoisseController@validParoisse'
                    ]);

                    Route::get('/deleteParoisse/{id}',[
                        'as' => 'deleteParoisse',
                        'uses' => 'ParoisseController@deleteParoisse'
                    ])->where('id','[0-9]+');


                    Route::get('/editParoisse/{id}',[
                        'as' => 'editParoisse',
                        'uses' => 'ParoisseController@editParoisse'
                    ])->where('id','[0-9]+');

                    Route::post('/updateParoisse/{id}',[
                        'as' => 'updateParoisse',
                        'uses' => 'ParoisseController@updateParoisse'
                    ])->where('id','[0-9]+');

                    Route::get('/faq/section/{id}/edit',[
                        'as' => 'editSection',
                        'uses' => 'FaqController@editSection'
                    ])->where('id','[0-9]+');
    
                    Route::post('/faq/section/valid',[
                        'as' => 'sectionValid',
                        'uses' => 'FaqController@createSection'
                    ]);
    
                    Route::get('/faq/section/delete/{id}',[
                        'as' => 'deleteSection',
                        'uses' => 'FaqController@deleteSection'
                    ])->where('id','[0-9]+');

                    Route::get('/faq/question/{id}/edit',[
                        'as' => 'editQuestion',
                        'uses' => 'FaqController@editQuestion'
                    ])->where('id','[0-9]+');
    
                    Route::post('/faq/question/valid',[
                        'as' => 'questionValid',
                        'uses' => 'FaqController@createQuestion'
                    ]);
    
                    Route::get('/faq/question/delete/{id}',[
                        'as' => 'deleteQuestion',
                        'uses' => 'FaqController@deleteQuestion'
                    ])->where('id','[0-9]+');

                    Route::get('/faq/answer/{id}/edit',[
                        'as' => 'editAnswer',
                        'uses' => 'FaqController@editAnswer'
                    ])->where('id','[0-9]+');
    
                    Route::post('/faq/answer/valid',[
                        'as' => 'answerValid',
                        'uses' => 'FaqController@createAnswer'
                    ]);
    
                    Route::get('/faq/answer/delete/{id}',[
                        'as' => 'deleteAnswer',
                        'uses' => 'FaqController@deleteAnswer'
                    ])->where('id','[0-9]+');
                });
                

            });
        });



});



Route::get('/',[
    'as' => 'home',
    'uses' => 'HomeController@index'
]);


Route::get('/description/{id}',[
    'as' => 'description',
    'uses' => 'HomeController@description'
])->where('id','[0-9]+');


Route::get('/categorie/{id}',[
    'as' => 'categorie',
    'uses' => 'CategorieController@categorie'
])->where('id','[0-9]+');

Route::get('/paroisse/{id}',[
    'as' => 'paroisse',
    'uses' => 'ParoisseController@index'
])->where('id','[0-9]+');


Route::post('/denonciation/valid/{id}',[
    'as' => 'denoncer',
    'uses' => 'ArticleController@validDenonciation'
])->where('id','[0-9]+');


Route::get('/contact',[
    'as' => 'contact',
    'uses' => 'ContactController@contact'
]);

//Gallery

Route::get('/galerie',[
    'as' => 'galerie',
    'uses' => 'GalleryController@gallery'
]);




//Query Rechercher

Route::get('/query',[
    'as' => 'query',
    'uses' => 'HomeController@query'
]);


//Authentification

Auth::routes();


//NEWSLETTER

Route::post('/newsletter/send',[
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

Route::get('/faqs',[
    'as' => 'faq',
    'uses' => 'FaqController@faq'
]);




///login route site


Route::get('/login',[
    'as' => 'login',
    'uses' => 'UserController@login'
]);

//register route site

Route::get('/register',[
    'as' => 'register',
    'uses' => 'UserController@register'
]);

Route::post('/validUsers',[
    'as' => 'validUsers',
    'uses' => 'UserController@validUsers'
]);

//album

Route::get('/album',[
    'as' => 'album',
    'uses' => 'GalleryController@album'
]);


Route::get('/paroisse/all',[
    'as' => 'all.paroisse',
    'uses' => 'ParoisseController@paroisses'
]);


Route::get('/api/ville/{id}', function ($id){
    $v = new Ville();
    return $v->newQuery()->select()->where('diocese_id', $id)->get();
});

Route::get('/api/paroisse/{id}', function ($id){
    $v = new Paroisse();
    return $v->newQuery()->select()->where('ville_id', $id)->get();
});


Route::get('/api/souscat/{id}', function ($id){
    $ss = new SubCategory();
    return $ss->newQuery()->select()->where('category_id', $id)->get();
});


Route::get('/api/query',[
    'as' => 'apiQuery',
    'uses' => 'HomeController@apiQuery'
]);


Route::get('/api/villes/{q}', function ($q){
    $v = new Ville();
    $vi = $v->newQuery()->select()->where('libelle','LIKE',"%$q%")->limit(4)->get()->toArray();

    for ($i=0; $i < count($vi); $i++) { 

        $s = $v->newQuery()->select()->where('libelle','LIKE',"%$q%")->limit(4)->get()[$i]->diocese()->get()->toArray();
        $vi[$i]['diocese'] = $s;
    }

    
    return $vi ;
});


Route::get('/api/diocese/{q}', function ($q){
    $d =new Diocese();
    $di = $d->newQuery()->select()->where('nom','LIKE',"%$q%")->limit(4)->get()->toArray();

    return $di ;
});


Route::get('/api/annonce/{q}', function ($q){
    $a =new Article();
    $ar = $a->newQuery()->select()
            ->where('is_active',true)
            ->where('titre','LIKE',"%$q%")
            ->limit(4)->get()->toArray();

    return $ar ;
});










