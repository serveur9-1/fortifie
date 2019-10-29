@extends('layout')
@section('title','Inscription')
@section('content')
    
    <!--================Breadcrumb Area =================-->
        <section class="breadcrumb_area blog_banner_two">
            <div class="overlay bg-parallax" data-stellar-ratio="0.8" data-stellar-vertical-offset="0" data-background=""></div>
            <div class="container">
                <div class="page-cover text-center">
                    <h2 class="page-cover-tittle f_48">Publication</h2>
                    <ol class="breadcrumb">
                        <li><a href="#">Accueil</a></li>
                        <li><a href="#">Catégorie</a></li>
                        <li class="active">Publication</li>
                    </ol>
                </div>
            </div>
        </section>
        <!--================Breadcrumb Area =================-->
        
        
        <!--================Blog Area =================-->
        <section class="blog_area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="blog_left_sidebar">
                           <div class="container">
                               <div class="col">
                            <div class="card">
                                <div class="card-body">
                                    <h6>Inscription</h6>
                                    <form method="POST">
                                        
                                        <div class="form-group" style="width: 100%">
                                            <label for="">Diocèse rattaché</label>
                                            <div class="form-group">
                                                <select class="form-control" style="width: 100% !important">
                                                <option value="2">Abengourou</option>
                                                <option value="10">Abidjan</option>
                                                <option value="11">Agboville</option>
                                                <option value="3">Bondoukou</option>
                                                <option value="14">Bouaké</option>
                                                <option value="6">Daloa</option>
                                                <option value="5">Gagnoa</option>
                                                <option value="12">Grand-Bassam</option>
                                                <option value="9">Katiola</option>
                                                <option value="8">Korhogo</option>
                                                <option value="15">Odiénné</option>
                                                <option value="7">San-Pedro</option>
                                                <option value="4">Yamoussoukro</option>
                                                <option value="13">Yopougon</option>
                                            </select>
                                            </div><br>
                                        </div>
                                        <div class="form-group">
                                            <label for="">Nom de la Paroisse</label>
                                            <input type="text" name="paroisse" class="form-control" placeholder="Notre Dame de l'Assomption de Koumassi">
                                            
                                        </div>
                                        <div class="form-group ">
                                            <label for="">Adresse Email <em style="color:red;">*</em> </label>
                                            <input type="text" class="form-control" name="email" value="" placeholder="Votre adresse email ici">
                                            
                                        </div>
                                        <div class="form-group">
                                            <label for="">Téléphone Fixe</label>
                                            <input type="text" class="form-control" name="telephone_fixe" placeholder="Téléphone fixe">
                                        </div>
                                        <div class="form-group ">
                                            <label for="">Téléphone Mobile <em style="color:red;">*</em></label>
                                            <input type="text" class="form-control" name="telephone_mobile" placeholder="Téléphone mobile" value="">
                                            
                                        </div>
                                        <div class="form-group ">
                                            <label for="">Mot de passe  <em style="color:red;">*</em> </label>
                                            <input type="password" class="form-control" name="password" placeholder="Votre mot de passe ici">
                                            
                                        </div>
                                        <div class="form-group ">
                                            <label for="">Confirmez le Mot de passe  <em style="color:red;">*</em> </label>
                                            <input type="password" class="form-control" name="password" placeholder="rétapez Votre mot de passe ici">
                                            
                                        </div>
                                        <div class="form-group ">
                                            <label for="">Description de la paroisse ou de la communauté</label>
                                            <textarea type="text" class="form-control" name="password" placeholder="Donnez une description de l'église"></textarea> 
                                            
                                        </div>

                                        <div class="form-group">
                                            <label for="">Image</label>
                                                <p>Inclure une image de 1000px et au plus de 2000px de haut ou de large.
                                                <br> Cette image sera la photo de couverture de l'église  </p>
                                            <div class="container">
                                                <div class="row">
                                                    <div class="col-lg-12 col-sm-12">
                                                        <div class="card">
                                                            <div class="card-body">
                                                                <div class="white-box">
                                                                    <input required type="file" id="input-file-now1" name="premiere" class="files dropify">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <input type="submit" class="btn btn-success" value="S'inscrire">
                                        </div>
                                    </form>

                                </div>
                            </div>
                        </div>
                            </div>
                        </div>
                    </div>
                    <!--========= Pub area ==============-->
                    <div class="col-lg-4">
                        <div class="blog_right_sidebar">
                            <!--============= END PUB AREA HERE  ===================-->
                            <aside class="single_sidebar_widget post_category_widget">
                                <h4 class="widget_title">Toutes les catégories</h4>
                                <ul class="list_style cat-list">
                                    <li>
                                        <a href="#" class="d-flex justify-content-between">
                                            <p>Technology</p>
                                            <p>37</p>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="d-flex justify-content-between">
                                            <p>Lifestyle</p>
                                            <p>24</p>
                                        </a>
                                    </li>                                                           
                                </ul>
                                <div class="br"></div>
                            </aside>
                            <!--============= PUB AREA HERE  ===================-->
                            <aside class="single_sidebar_widget popular_post_widget">
                                <h3 class="widget_title">Annonces populaires</h3>
                                <div class="media post_item">
                                    <img src="{{ asset('/assets/image/blog/post1.jpg') }}" alt="post">
                                    <div class="media-body">
                                        <a href="blog-details.html"><h3>Space The Final Frontier</h3></a>
                                        <p>Il y a 2 min</p>
                                    </div>
                                </div>
                                <div class="media post_item">
                                    <img src="{{ asset('/assets/image/blog/post1.jpg') }}" alt="post">
                                    <div class="media-body">
                                        <a href="#"><h3>Space The Final Frontier</h3></a>
                                        <p>Il y a 2 min</p>
                                    </div>
                                </div>
                                <div class="media post_item">
                                    <img src="{{ asset('/assets/image/blog/post1.jpg') }}" alt="post">
                                    <div class="media-body">
                                        <a href="#"><h3>Space The Final Frontier</h3></a>
                                        <p>Il y a 2 min</p>
                                    </div>
                                </div>

                                <div class="br"></div>
                            </aside>
                            <!--============= PUB AREA HERE  ===================-->
                            <aside class="single_sidebar_widget ads_widget">
                                <a href="#"><img class="img-fluid" src="{{ asset('/assets/image/blog/add.jpg') }}" alt=""></a>
                                <div class="br"></div>
                            </aside>
                            
                            <aside class="single_sidebar_widget ads_widget">
                                <a href="#"><img class="img-fluid" src="{{ asset('/assets/image/blog/add.jpg') }}" alt=""></a>
                                <div class="br"></div>
                            </aside>
                            <!--============= END PUB AREA HERE  ===================-->
                            <aside class="single-sidebar-widget newsletter_widget">
                                <h4 class="widget_title">Newsletter</h4>
                                <p>
                                Abonnez-vous à la newsletter pour être informé de toutes les nouvelles informations à tout moment.
                                </p>
                                <div class="form-group d-flex flex-row">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text"><i class="fa fa-envelope" aria-hidden="true"></i></div>
                                        </div>
                                        <input type="text" class="form-control" id="inlineFormInputGroup" placeholder="Enter email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email'">
                                    </div>
                                    <a href="#" class="bbtns">S'abonner</a>
                                </div>  
                                <div class="br"></div>                          
                            </aside>
                            <aside class="single-sidebar-widget tag_cloud_widget">
                                <h4 class="widget_title">Tags</h4>
                                <ul class="list_style">
                                    <li><a href="#">Technology</a></li>
                                    <li><a href="#">Fashion</a></li>
                                    <li><a href="#">Architecture</a></li>
                                    <li><a href="#">Fashion</a></li>
                                    <li><a href="#">Food</a></li>
                                    <li><a href="#">Technology</a></li>
                                    <li><a href="#">Lifestyle</a></li>
                                    <li><a href="#">Art</a></li>
                                    <li><a href="#">Adventure</a></li>
                                    <li><a href="#">Food</a></li>
                                    <li><a href="#">Lifestyle</a></li>
                                    <li><a href="#">Voir plus</a></li>
                                </ul>
                            </aside>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--================Blog Area =================-->

@endsection