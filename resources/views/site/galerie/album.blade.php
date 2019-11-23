@extends('layout')
@section('title','Album')
@section('content')


        <!--================Breadcrumb Area =================-->
        <section class="breadcrumb_area br_image">
            <div class="container">
                <div class="page-cover text-center">
                    <h2 class="page-cover-tittle">Album Photos</h2>
                    <ol class="breadcrumb">
                        <li><a href="{{ route('home') }}">Accueil</a></li>
                        <li class="active">Album</li>
                    </ol>
                </div>
            </div>
        </section>
        <!--================Breadcrumb Area =================-->

        <!--================Breadcrumb Area =================-->
        <section class="gallery_area section_gap">
            <div class="container">
                <div class="alert alert-info mb-5 col-md-12 col-lg-12">
                    <p>Avez-vous des images d'un évènement à partager ? <br> Envoyez nous un message <a href="{{ route('contact') }}"> ici</a> afin que nous rentrons en contact avec vous pour les recuperer et les mettres dans la galerie.
                    </p>
                </div>
                @if($album->count() > 0)
                    <div class="row">
                    @foreach($album as $alb)
                        <div class="col-lg-4 mb-4">
                            <div class="categories_post">
                                <img src="{{ asset('assets/image/im1.jpg') }}" alt="post">
                                <a href="{{ route('galerie',['folder'=>$alb->id]) }}">
                                    <div class="categories_details">
                                        <div class="categories_text">
                                        <h5 class="mb-2">{{ $alb->libelle }}</h5><h1>{{ $alb->gallery->count() }}</h1>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    @endforeach
                </div>
                @else
                    <div class="col-12">
                        <div class="quotes" style="text-align: center; font-size: 30px;opacity: 0.4">
                            <span class="fa fa-folder mb-4" style="font-size: 150px "></span><br>
                            Aucun Album dans la galerie
                        </div>
                    </div>
                @endif
            </div>
        </section>
        <!--================Gallery Area =================-->


@endsection
