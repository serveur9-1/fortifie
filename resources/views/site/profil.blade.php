@extends('layout')
@section('title','Profil')
@section('content')
    
    <!--================Breadcrumb Area =================-->
        <section class="breadcrumb_area blog_banner_two">
            <div class="overlay bg-parallax" data-stellar-ratio="0.8" data-stellar-vertical-offset="0" data-background=""></div>
            <div class="container">
                <div class="page-cover text-center">
                    <h2 class="page-cover-tittle f_48">Thème de l'annonce</h2>
                    <ol class="breadcrumb">
                        <li><a href="#">Accueil</a></li>
                        <li><a href="#">Annonce</a></li>
                        <li class="active">Detail Annonce</li>
                    </ol>
                </div>
            </div>
        </section>
        <!--================Breadcrumb Area =================-->
        
        <!--================Blog Area =================-->
        <section class="blog_area single-post-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 posts-list">
                        <div class="single-post row">
                            <div class="col-lg-12">
                                <div class="feature-img">
                                    <img class="img-fluid" src="{{ asset('/assets/image/blog/feature-img1.jpg') }}" alt="">
                                </div>                                  
                            </div>
                            <div class="col-lg-3  col-md-3">
                                <div class="blog_info text-right">
                                    
                                    <ul class="blog_meta list_style">
                                        <li><a href="#">+225 01 10 10 10<i class="lnr lnr-phone-handset"></i></a></li>
                                        <li><a href="#">+255 22 22 22 22 <i class="lnr lnr-phone"></i></a></li>
                                        <li><a href="#">contact@nda.com<i class="lnr lnr-envelope"></i></a></li>
                                        <li><a href="#">Crée: 12 jan, 2018 <i class="lnr lnr-calendar-full"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-9 col-md-9 blog_details">
                                <h2>Notre Dame de l'Assemption de Koumassi</h2>
                                <h4>Diocèce de Grand-bassam</h4>
                                <p class="excert">
                                    Boot camps have its supporters and its detractors. Some people do not understand why you should have to spend money on boot camp when you can get the MCSE study materials yourself at a fraction of the camp price. However, who has the willpower to actually sit through a self-imposed MCSE training. who has the willpower to actually sit through a self-imposed
                                </p>
                            </div>
                        </div>
                        <!--================Event Blog Area=================-->
                        <section class="event_blog_area section_gap">
                            <div class="container">
                                <div class="section_title text-center">
                                    <h2>Annonces récente</h2>
                                    <p>Toutes les annonces faites par Notre Dame de l'Assomption Koumassi</p>
                                </div>
                                <div class="row">
                                    <div class="col-md-4 mb-5">
                                        <div class="event_post">
                                            <img src="{{ asset('/assets/image/blog1.jpg') }}" alt="">
                                            <a href="#"><h4 class="event_title">Exhortation</h4></a>
                                            <ul class="list_style sermons_category event_category">
                                                <li><i class="lnr lnr-user"></i>Jeudi, 5 mai, 2018</li>
                                                <li><i class="lnr lnr-apartment"></i>Evengelisation</li>
                                            </ul>
                                            <a href="#" class="btn_hover">Voir detail</a>
                                        </div>
                                    </div>
                                    <div class="col-md-4 mb-5">
                                        <div class="event_post">
                                            <img src="{{ asset('/assets/image/blog2.jpg') }}" alt="">
                                            <a href="#"><h4 class="event_title">Réveil Spirituel</h4></a>
                                            <ul class="list_style sermons_category event_category">
                                                <li><i class="lnr lnr-user"></i>Jeudi, 5 mai, 2018</li>
                                                <li><i class="lnr lnr-apartment"></i>Evengelisation</li>
                                            </ul>
                                            <a href="#" class="btn_hover">Voir detail</a>
                                        </div>
                                    </div>
                                    <div class="col-md-4 mb-5">
                                        <div class="event_post">
                                            <img src="{{ asset('/assets/image/blog3.jpg') }}" alt="">
                                            <a href="#"><h4 class="event_title">Veillée de Prière</h4></a>
                                            <ul class="list_style sermons_category event_category">
                                                <li><i class="lnr lnr-user"></i>Jeudi, 5 mai, 2018</li>
                                                <li><i class="lnr lnr-apartment"></i>Evengelisation</li>
                                            </ul>
                                            <a href="#" class="btn_hover">Voir detail</a>
                                        </div>
                                    </div>
                                    <div class="col-md-4 mb-5">
                                        <div class="event_post">
                                            <img src="{{ asset('/assets/image/blog2.jpg') }}" alt="">
                                            <a href="#"><h4 class="event_title">Réveil Spirituel</h4></a>
                                            <ul class="list_style sermons_category event_category">
                                                <li><i class="lnr lnr-user"></i>Jeudi, 5 mai, 2018</li>
                                                <li><i class="lnr lnr-apartment"></i>Evengelisation</li>
                                            </ul>
                                            <a href="#" class="btn_hover">Voir detail</a>
                                        </div>
                                    </div>
                                    <div class="col-md-4 mb-5">
                                        <div class="event_post">
                                            <img src="{{ asset('/assets/image/blog3.jpg') }}" alt="">
                                            <a href="#"><h4 class="event_title">Veillée de Prière</h4></a>
                                            <ul class="list_style sermons_category event_category">
                                                <li><i class="lnr lnr-user"></i>Jeudi, 5 mai, 2018</li>
                                                <li><i class="lnr lnr-apartment"></i>Evengelisation</li>
                                            </ul>
                                            <a href="#" class="btn_hover">Voir detail</a>
                                        </div>
                                    </div>
                                    <div class="col-md-4 mb-5">
                                        <div class="event_post">
                                            <img src="{{ asset('/assets/image/blog3.jpg') }}" alt="">
                                            <a href="#"><h4 class="event_title">Veillée de Prière</h4></a>
                                            <ul class="list_style sermons_category event_category">
                                                <li><i class="lnr lnr-user"></i>Jeudi, 5 mai, 2018</li>
                                                <li><i class="lnr lnr-apartment"></i>Evengelisation</li>
                                            </ul>
                                            <a href="#" class="btn_hover">Voir detail</a>
                                        </div>
                                    </div>
                                </div>
                                <nav class="blog-pagination justify-content-center d-flex">
                                    <ul class="pagination">
                                        <li class="page-item">
                                            <a href="#" class="page-link" aria-label="Previous">
                                                <span aria-hidden="true">
                                                    <span class="lnr lnr-chevron-left"></span>
                                                </span>
                                            </a>
                                        </li>
                                        <li class="page-item"><a href="#" class="page-link">01</a></li>
                                        <li class="page-item active"><a href="#" class="page-link">02</a></li>
                                        <li class="page-item"><a href="#" class="page-link">03</a></li>
                                        <li class="page-item"><a href="#" class="page-link">04</a></li>
                                        <li class="page-item"><a href="#" class="page-link">09</a></li>
                                        <li class="page-item">
                                            <a href="#" class="page-link" aria-label="Next">
                                                <span aria-hidden="true">
                                                    <span class="lnr lnr-chevron-right"></span>
                                                </span>
                                            </a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </section>

                        <!--================Blog Area=================-->
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
                                        <a href=""><h3>Space The Final Frontier</h3></a>
                                        <p>Il y a 2 min</p>
                                    </div>
                                </div>
                                <div class="media post_item">
                                    <img src="{{ asset('/assets/image/blog/post1.jpg') }}" alt="post">
                                    <div class="media-body">
                                        <a href=""><h3>Space The Final Frontier</h3></a>
                                        <p>Il y a 2 min</p>
                                    </div>
                                </div>
                                <div class="media post_item">
                                    <img src="{{ asset('/assets/image/blog/post1.jpg') }}" alt="post">
                                    <div class="media-body">
                                        <a href=""><h3>Space The Final Frontier</h3></a>
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