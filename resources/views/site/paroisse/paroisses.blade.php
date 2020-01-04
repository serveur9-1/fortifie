@extends('layout')
@section('title','Notre répertoire')
@section('content')


        <!--================Breadcrumb Area =================-->
        <section class="breadcrumb_area br_image">
            <div class="container">
                <div class="page-cover text-center">
                    <h2 class="page-cover-tittle">Nos paroisses</h2>
                    <ol class="breadcrumb">
                        <li><a href="{{ route('home') }}">Accueil</a></li>
                        <li class="active">Répertoire</li>
                    </ol>
                </div>
            </div>
        </section>
        <!--================Breadcrumb Area =================-->

        <div class="container mt-5" id="tourpackages-carousel">
            <div class=" pl-0 pr-0 pb-5 pt-5 mb-2">
                <h4 class="float-left text-left text-uppercase">Notre répertoire</h4>
            </div>
          <div class="row">
            @if($paroisse->count() > 0)
                @foreach($paroisse as $p)
                    <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                        <div class="thumbnail">
                            <div class="caption">
                                <div class='col-lg-12 well well-add-card pt-2'>
                                    <h5 title="{{ $p->communaute }}" class="text-uppercase mb-0">{{ Str::limit($p->communaute, 30) }} &nbsp;<i class="fa fa-certificate text-secondary"></i></h5>
                                <small class="mt-0"><i>Inscrit depuis {{ $p->created_at->format('d M Y') }}</i></small>
                                </div>
                                <div class='col-lg-12 text-muted'>
                                    <p><i class="fa fa-building"></i>&nbsp;&nbsp;{{ $p->paroisse[0]->nom }}</p>
                                    <p><i class="fa fa-map-marker"></i>&nbsp;&nbsp;{{ $p->paroisse[0]->ville->libelle }}</p>
                                    <p><i class="fa fa-phone"></i>&nbsp;&nbsp;(+225) {{ $p->telephone }}</p>
                                    <p><i class="fa fa-envelope"></i>&nbsp;&nbsp;{{ $p->paroisse[0]->email }}</p>
                                </div>
                                <div class='col-lg-12 text-center mt-4'>
                                    <a href="{{ route('paroisse', ['id' => $p->paroisse[0]->id]) }}" @if($p->paroisse[0]->article->count() < 1) disabled @endif class="btn btn-danger btn-md col-md-12"><strong>@if($p->paroisse[0]->article->count() > 0) Voir plus de @else Pas d' @endif @if($p->paroisse[0]->article->count() > 0) {{ $p->paroisse[0]->article->count() }} @endif {{ Str::plural('annonce', $p->paroisse[0]->article->count()) }}</strong></a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            @endif


          </div><!-- End row -->
        </div>

        

        <style type="text/css">

            .well {
                min-height: 20px;
                padding: 0px;
                margin-bottom: 20px;
                background-color: #D9D9D9;
                border: 1px solid #D9D9D9;
                border-radius: 0px;
                -webkit-box-shadow: inset 0 1px 1px rgba(0,0,0,.05);
                box-shadow: inset 0 1px 1px rgba(0,0,0,.05);
                padding-left: 15px;
                border:0px;
            }
            .thumbnail .caption {
                padding: 9px;
                color: #333;
                padding-left: 0px;
                padding-right: 0px;
            }
            .icon-style
            {
                margin-right:15px;
                font-size:18px;
                margin-top:20px;
            }
            p
            {
                margin:3px;
            }
            .well-add-card
            {
                margin-bottom:10px;
            }
            .btn-add-card
            {
                margin-top:20px;
            }
            .thumbnail {
                display: block;
                padding: 4px;
                margin-bottom: 20px;
                line-height: 1.42857143;
                background-color: #fff;
                border: 6px solid #D9D9D9;
                border-radius: 15px;
                -webkit-transition: border .2s ease-in-out;
                -o-transition: border .2s ease-in-out;
                transition: border .2s ease-in-out;
                padding-left: 0px;
                padding-right: 0px;
            }
            .btn
            {
                border-radius:0px;
            }
            .btn-update
            {
                margin-left:15px;
        </style>
@endsection
