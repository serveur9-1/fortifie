@extends('layout')
@section('title','Connexion')
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
                                <div class="panel panel-primary">
                                        <div class="panel-heading">
                                             <h3 class="panel-title">Connexion </h3>
                                        </div>
                                        <div class="panel-body">
                                            <div class="form-group">
                                                <label for="">Adresse e_mail <em style="color:red;">*</em> </label>
                                                <input type="email" class="form-control" required name="theme" placeholder="Entrer Identifiant">
                                            </div>
                                            <div class="form-group">
                                                <label for="">Mot de passe<em style="color:red;">*</em> </label>
                                                <input type="password" class="form-control" required name="theme" placeholder="Entrer mot de passe">
                                            </div>
                                            <div class="form-group">
                                                <div class="alert alert-primary" style="text-align:center;" role="alert">
                                                    Si vous n'avez pas de compte , veuillez creer un compte en cliquant  <a href="#">ici</a>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <center><a href="https://fortifietoi.ci/annonce/particuliere">mot de passe oublié? </a></center>
                                            </div>
                                            <button class="btn btn-success pull-right stepp mt-3" type="button">Connexion</button>
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