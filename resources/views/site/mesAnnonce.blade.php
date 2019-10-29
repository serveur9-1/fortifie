@extends('layout')
@section('title','Mes Annonces')
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
            <!-- Modal -->
            <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Information Annonce</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body text-center">
                    <div class="col-lg-12 col-sm-12 m-0 p-0">
                        <div class="event_post">
                            <img src="{{ asset('/assets/image/blog1.jpg') }}" alt="">
                            <a href="event-details.html"><h2 class="event_title">Restauration divine</h2></a>
                            <ul class="list_style sermons_category event_category">
                                <li><i class="lnr lnr-user"></i>Samedi, 5 mai, 2018</li>
                                <li><i class="lnr lnr-apartment"></i>Rocky beach Church</li>
                                <li><i class="lnr lnr-location"></i>Santa monica, Los Angeles, USA</li>
                            </ul>
                            <a href="#" class="btn_hover">View Details</a>
                        </div>
                    </div>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                  </div>
                </div>
              </div>
            </div>
        <!--================Blog Area =================-->
        <section class="blog_area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                            <div class="table-wrapper" style="width: 100%">
                                <div class="table-title">
                                    <div class="row">
                                        <div class="col-sm-8"><h4>Mes Annonces</h4></div>
                                        <div class="col-sm-4">
                                            <div class="search-box">
                                                <a href="#" class="genric-btn primary circle">Publier</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mt-3 mb-3">
                                        <div class="col-12">
                                            <a href="#" class="btn btn-light">Annonces actives (0 )</a> |
                                            <a href="#" class="btn btn-light">Annonces inactives (0)</a>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-8"></div>
                                        <div class="col-sm-4">
                                            <div class="search-box">
                                                <i class="material-icons">&#xE8B6;</i>
                                                <input type="text" class="form-control" placeholder="Search&hellip;">
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <table class="table table-striped table-hover table-bordered">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Thème</th>
                                            <th>Catégorie</th>
                                            <th>Date</th>
                                            <th>Heure</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>restauration divine</td>
                                            <td>évengelisation</td>
                                            <td>17/10/19</td>
                                            <td>18:18</td>
                                            <td>
                                                <a href="#" class="view" title="View" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalLong"><i class="material-icons">&#xE417;</i></a>
                                                <a href="#" class="edit" title="edit" data-toggle="tooltip"><i class="material-icons">&#xE254;</i></a>
                                                <a href="#" class="delete" title="Delete" data-toggle="tooltip"><i class="material-icons">&#xE872;</i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>restauration divine</td>
                                            <td>évengelisation</td>
                                            <td>17/10/19</td>
                                            <td>18:18</td>
                                            <td>
                                                <a href="#" class="view" title="View" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalLong"><i class="material-icons">&#xE417;</i></a>
                                                <a href="#" class="edit" title="edit" data-toggle="tooltip"><i class="material-icons">&#xE254;</i></a>
                                                <a href="#" class="delete" title="Delete" data-toggle="tooltip"><i class="material-icons">&#xE872;</i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>restauration divine</td>
                                            <td>évengelisation</td>
                                            <td>17/10/19</td>
                                            <td>18:18</td>
                                            <td>
                                                <a href="#" class="view" title="View" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalLong"><i class="material-icons">&#xE417;</i></a>
                                                <a href="#" class="edit" title="edit" data-toggle="tooltip"><i class="material-icons">&#xE254;</i></a>
                                                <a href="#" class="delete" title="Delete" data-toggle="tooltip"><i class="material-icons">&#xE872;</i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td>restauration divine</td>
                                            <td>évengelisation</td>
                                            <td>17/10/19</td>
                                            <td>18:18</td>
                                            <td>
                                                <a href="#" class="view" title="View" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalLong"><i class="material-icons">&#xE417;</i></a>
                                                <a href="#" class="edit" title="edit" data-toggle="tooltip"><i class="material-icons">&#xE254;</i></a>
                                                <a href="#" class="delete" title="Delete" data-toggle="tooltip"><i class="material-icons">&#xE872;</i></a>
                                            </td>
                                        </tr>
                                        
                                    </tbody>
                                </table>
                                <div class="clearfix">
                                    <div class="hint-text">Showing <b>5</b> out of <b>25</b> entries</div>
                                    <ul class="pagination">
                                        <li class="page-item disabled"><a href="#"><i class="fa fa-angle-double-left"></i></a></li>
                                        <li class="page-item"><a href="#" class="page-link">1</a></li>
                                        <li class="page-item"><a href="#" class="page-link">2</a></li>
                                        <li class="page-item active"><a href="#" class="page-link">3</a></li>
                                        <li class="page-item"><a href="#" class="page-link">4</a></li>
                                        <li class="page-item"><a href="#" class="page-link">5</a></li>
                                        <li class="page-item"><a href="#" class="page-link"><i class="fa fa-angle-double-right"></i></a></li>
                                    </ul>
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