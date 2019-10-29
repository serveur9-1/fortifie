@extends('layout')
@section('title','Accueil Fortifietoi')
@section('content')

    <!--================Blog Area =================-->
        <section class="blog_area">
            <div class="container">
                <div class="mb-5 mt-5" style="height: 110px;background: #fff;width: 100%">
                    <img src="{{ asset('/assets/image/blog/main-blog/m-blog-2.jpg') }}" style="height: 110px;width: 100%">
                </div>
                <div class="row">
                    <div class="col-lg-8">
                        <!--================Blog Categorie Area =================-->
                        <section class="blog_categorie_area pt-0">
                                <div class=" p-0 mb-2">
                                    <div class="col-lg-12 d-flex justify-content-between">
                                        <h4 class="float-left text-left">Catégories les plus visitées</h4>
                                        <p class="float-right"><a href="#">Voir tous</a></p>
                                    </div>
                                </div>
                                <div class="container">
                                    <div class="row">
                                        @foreach($category as $cat)
                                            <div class="col-lg-4 mb-4">
                                            <div class="categories_post">
                                                <img src='{{ asset("/assets/image/blog/cat-post/$cat->img") }}' alt="post">
                                                <div class="categories_details">
                                                    <div class="categories_text">
                                                        <a href=""><h5>{{ $cat->libelle }}</h5></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach
                                    </div>
                                </div>
                            </section>
                            <!--================Blog Categorie Area =================-->

                            <!--================Blog Post Area =================-->
                            <div class="blog_left_sidebar">
                                <article class="row blog_item">
                                    <div class="col-md-9">
                                        <div class="blog_post">
                                            <img src="{{ asset('/assets/image/blog/main-blog/m-blog-1.jpg') }}" alt="">
                                            <div class="blog_details">
                                                <a href=""><h2>Astronomy Binoculars A Great Alternative</h2></a>
                                                <p>MCSE boot camps have its supporters and its detractors. Some people do not understand why you should have to spend money on boot camp when you can get the MCSE study materials yourself at a fraction.</p>
                                                <a href="" class="view_btn button_hover">VOIR DETAILS</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="blog_info text-right">
                                            <div class="post_tag">
                                                <a href="#">Food,</a>
                                                <a href="#">Technology,</a>
                                                <a href="#">Politics,</a>
                                                <a href="#">Lifestyle</a>
                                            </div>
                                            <ul class="blog_meta list_style">
                                                <li><a href="#">Mark wiens <img style="width: 30px" class="author_img rounded-circle" src="{{ asset('/assets/image/blog/author.png') }}" alt=""></a></li>
                                                <li><a href="#">12 Dec, 2017<i class="lnr lnr-calendar-full"></i></a></li>
                                                <li><a href="#">1.2M Views<i class="lnr lnr-eye"></i></a></li>
                                                <li><a href="#">06 Comments<i class="lnr lnr-bubble"></i></a></li>
                                                <li class="mt-3"><a href="#"><i style="font-size: 40px" class="fa fa-facebook-official text-primary"></i></a></li>
                                                <li class="mt-3"><a href="#"><i style="font-size: 40px" class="fa fa-whatsapp text-success"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </article>
                                <article class="row blog_item">
                                    <div class="col-md-9">
                                        <div class="blog_post">
                                            <img src="{{ asset('/assets/image/blog/main-blog/m-blog-1.jpg') }}" alt="">
                                            <div class="blog_details">
                                                <a href="#"><h2>Astronomy Binoculars A Great Alternative</h2></a>
                                                <p>MCSE boot camps have its supporters and its detractors. Some people do not understand why you should have to spend money on boot camp when you can get the MCSE study materials yourself at a fraction.</p>
                                                <a href="#" class="view_btn button_hover">VOIR DETAILS</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="blog_info text-right">
                                            <div class="post_tag">
                                                <a href="#">Food,</a>
                                                <a href="#">Technology,</a>
                                                <a href="#">Politics,</a>
                                                <a href="#">Lifestyle</a>
                                            </div>
                                            <ul class="blog_meta list_style">
                                                <li><a href="#">Mark wiens <img style="width: 30px" class="author_img rounded-circle" src="{{ asset('/assets/image/blog/author.png') }}" alt=""></a></li>
                                                <li><a href="#">12 Dec, 2017<i class="lnr lnr-calendar-full"></i></a></li>
                                                <li><a href="#">1.2M Views<i class="lnr lnr-eye"></i></a></li>
                                                <li><a href="#">06 Comments<i class="lnr lnr-bubble"></i></a></li>
                                                <li class="mt-3"><a href="#"><i style="font-size: 40px" class="fa fa-facebook-official text-primary"></i></a></li>
                                                <li class="mt-3"><a href="#"><i style="font-size: 40px" class="fa fa-whatsapp text-success"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </article>
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
                            <!--================End Blog Post Area =================-->
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
