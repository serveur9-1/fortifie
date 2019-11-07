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
                            <form method="get" action="{{ route('q') }}">
                                <div class="col-12 col-sm-12 col-lg-12" style="display: flex">
                                    <i class="material-icons">&#xE8B6;</i>
                                    <input type="text" name="word" class="form-control" placeholder="Search&hellip;">
                                    <button type="submit"><i class="fa fa-search"></i></button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

<<<<<<< HEAD
=======
                    </tbody>
                </table>
                <div class="clearfix">
                    {{ $my_article->links() }}
                </div>
                @else
                    ========Aucune annonce==========
                @endif
>>>>>>> 723d00357046628035cfdeca85c21e7d4054e737
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
                        <td>{{ $a->created_at->format('H:m:s') }}</td>
                        <td>
                            <a target="_blank" href="{{ route('description', ['id'=> $a->id]) }}" class="view" title="View" class="btn btn-primary"><i class="fa fa-eye"></i></a>
                            <a href="#" class="edit" title="edit" data-toggle="tooltip"><i class="fa fa-edit"></i></a>
                            <a href="{{ route('article.delete', ['id' => $a->id]) }}" class="delete" title="Delete" data-toggle="tooltip"><i class="fa fa-trash"></i></a>
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
                <div class="col-12">
                    <div class="quotes" style="text-align: center; font-size: 30px;opacity: 0.3">
                        Aucune Catégorie
                    </div>
               </div>
            @endif
        </div>
</div>
@endsection
