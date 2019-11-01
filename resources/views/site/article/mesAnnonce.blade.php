@extends('layout_right')
@section('title','Mes Annonces')
@section('bread')

    <!--================Breadcrumb Area =================-->
        <section class="breadcrumb_area blog_banner_two">
            <div class="overlay bg-parallax" data-stellar-ratio="0.8" data-stellar-vertical-offset="0" data-background=""></div>
            <div class="container">
                <div class="page-cover text-center">
                    <h2 class="page-cover-tittle f_48">Thème de l'annonce</h2>
                    <ol class="breadcrumb">
                        <li><a href="{{ route('home')}}">Accueil</a></li>
                        <li class="active">Detail Annonce</li>
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
@endsection

@section('content')
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
                            <a href="{{ route('myAnnonce') }}" class="btn btn-light">Annonces actives ({{ $my_article_a->count() }})</a> |
                            <a href="{{ route('myAnnonce',['active'=>false]) }}" class="btn btn-light">Annonces inactives ({{ $my_article_i->count() }})</a>
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
                @if($my_article->count() > 0)
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
                    @foreach($my_article as $a)
                        <tr>
                            <td>{{ $loop->index + 1 }}</td>
                            <td title="{{ $a->titre }}">{{ Str::limit($a->titre, 20) }}</td>
                            <td>{{ $a->category->libelle }}</td>
                            <td>{{ Carbon\Carbon::create("$a->created_at")->toFormattedDateString() }}</td>
                            <td>00:00:00</td>
                            <td>
                                <a href="#" class="view" title="View" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalLong"><i class="material-icons">&#xE417;</i></a>
                                <a href="#" class="edit" title="edit" data-toggle="tooltip"><i class="material-icons">&#xE254;</i></a>
                                <a href="#" class="delete" title="Delete" data-toggle="tooltip"><i class="material-icons">&#xE872;</i></a>
                            </td>
                        </tr>
                    @endforeach

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
                @else
                    ========Aucune annonce==========
                @endif
            </div>
    </div>
@endsection
