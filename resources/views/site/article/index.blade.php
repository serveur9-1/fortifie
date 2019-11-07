@extends('layout_right')
@section('title','Accueil Fortifietoi')

@section('content')
    <div class="mb-5 mt-5" style="height: 110px;background: #fff;width: 100%">
        <img src="{{ asset('/assets/image/blog/main-blog/m-blog-2.jpg') }}" style="height: 110px;width: 100%">
    </div>

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
                        @if($visiteur->count() > 0)
                            @foreach($visiteur as $v)
                                <div class="col-lg-4 mb-4">
                                <div class="categories_post">
                                    {{--<img src='{{ asset("/assets/image/blog/cat-post/$cat->img") }}' alt="post">--}}
                                    <img src='{{ $v->article->category->slug }}' alt="post">
                                    <div class="categories_details">
                                        <div class="categories_text">
                                            <a href="#"><h5>{{ $v->article->category->libelle }}</h5></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        @else
                            <div class="col-12">
                                <div class="quotes" style="text-align: center; font-size: 30px;opacity: 0.3">
                                    Aucune Catégorie
                                </div>
                           </div>
                        @endif
                        </div>
                    </div>
                </section>
                <!--================Blog Categorie Area =================-->

                <!--================Blog Post Area =================-->
                <div class="blog_left_sidebar mt-5">
                    <style>
                        .article-img{
                            transition: all .2s;
                        }
                        .article-img:hover{
                            transform: scale(1.03);
                            transition: all .5s;
                        }
                    </style>
                    @if($article->count() > 0)
                        @foreach($article as $a)
                            <article class="row blog_item" style="background: #fff">
                            <div class="col-md-12">
                                <div class="blog_post">
                                    <div class="article-img" style="width: 555px;height: 280px ;background: url('{{ $a->img }}') no-repeat;background-size: cover;"></div>
                                    <div class="blog_details">
                                        <a href="{{ route('description',['id' => $a->id])}}"><h2>{{ $a->category->libelle }} : <span>{{ $a->titre }}</span></h2></a>
                                        {{--{!!
                                            Share::page('http://jorenvanhocht.be', 'Share title', ['class' => 'text_danger'])
                                            ->facebook()
                                            ->twitter()
                                            ->linkedin('Extra linkedin summary can be passed here')
                                            ->whatsapp();
                                        !!}--}}
                                        <ul class="blog_meta list_style mb-4" style="display: flex;">
                                            <li><a href=""> <img style="width: 30px" class="author_img rounded-circle" src="{{ asset('/assets/image/blog/author.png') }}" alt="">{{ $a->paroisse->nom }}</a></li>
                                            <li><i class="fa fa-calendar"></i> :   Du {{ Carbon\Carbon::create($a->debut)->toFormattedDateString()  }}</li>
                                            <li>Au  {{ Carbon\Carbon::create($a->fin)->toFormattedDateString()  }}</li>
                                            <li> <i class="fa fa-eye w-8"></i> {{ $a->visiteur->count() }}</li>
                                        </ul>
                                        <p>
                                            {{ Str::limit($a->description, 300) }}
                                        </p>
                                        <a href="{{ route('description',['id' => $a->id])}}" class="view_btn button_hover btn btn-primary mb-4">VOIR DETAILS</a>
                                    </div>
                                </div>
                            </div>
                        </article>
                        @endforeach
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
                    @else
                        <div class="col-12">
                            <div class="quotes" style="text-align: center; font-size: 30px;opacity: 0.3">
                                <span class="fa fa-home mb-4" style="font-size: 80px "></span><br>
                                Aucun Article
                            </div>
                       </div>
                    @endif
                </div>
                <!--================End Blog Post Area =================-->
        </div>
@endsection
