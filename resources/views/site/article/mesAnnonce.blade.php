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
                </div>
                <div class="row mt-3 mb-3">
                    <div class="col-12">
                        <a href="{{ route('myAnnonce') }}" class="btn btn-light">Annonces actives ({{ $my_article_a->count() }})</a> |
                        <a href="{{ route('myAnnonce',['active'=>false]) }}" class="btn btn-light">Annonces inactives ({{ $my_article_i->count() }})</a>
                    </div>
                </div>
            </div>
            @if($my_article->count() > 0)
            <table  class="table table-bordered" id="dataTable"width="100%" cellspacing="0">
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
                            <a @if(!$a->sans_titre) href="{{ route('editPublier', ['id' => $a->id]) }}" @else href="{{ route('editPublierParticulier', ['id' => $a->id]) }}" @endif class="edit" title="edit" data-toggle="tooltip"><i class="fa fa-edit"></i></a>
                            <a href="{{ route('article.delete', ['id' => $a->id]) }}" class="delete" title="Delete" data-toggle="tooltip"><i class="fa fa-trash"></i></a>
                        </td>
                    </tr>
                @endforeach

                </tbody>
            </table>
            @else
                <div class="col-12">
                    <div class="qutes" style="text-align: center; font-size: 30px;opacity: 0.3">
                        <span class="fa fa-copy mb-4" style="font-size: 80px "></span><br>
                        Aucune annonce trouvée
                    </div>
                </div>
            @endif
        </div>
</div>
@endsection
