@extends('layout_right')
@section('title','Profil')

@section('content')
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

@endsection
