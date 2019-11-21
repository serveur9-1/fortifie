@extends('layout_right')
@section('title','Accueil Fortifietoi')

@section('content')
    <div class="mb-5 mt-5" style="height: 110px;background: #fff;width: 100%">
        <a href="#">
            <img src="{{ asset('/assets/image/blog/main-blog/m-blog-2.jpg') }}" style="height: 110px;width: 100%">
        </a>
    </div>

        <div class="col-lg-8">
            <!--================Blog Categorie Area =================-->
            <section class="blog_categorie_area pt-0">
                    <div class=" pl-0 pr-0 pb-5 pt-5 mb-2">
                        <div class="col-lg-12 d-flex justify-content-between">
                            <h4 class="float-left text-left">Catégories les plus visitées</h4>
                        </div>
                    </div>
                    <div class="container">
                        <div class="row">
                        @if($p_category->count() > 0)
                            @foreach($p_category as $a)
                            <div class="col-lg-4 mb-4">
                                <div class="categories_post">
                                    {{ $a->category->libelle }}
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
                                    <div class="article-img" style="width: 100%;height:300px ;background: url('{{ asset("assets/img/articles/$a->img") }}') no-repeat;background-size: cover; background-position: center"></div>
                                    <div class="blog_details">
                                        <a href="{{ route('description',['id' => $a->id])}}"><h2>{{ $a->category->libelle }} : <span>{{ $a->titre }}</span></h2></a>
                                        {{--{!!
                                            Share::page('http://jorenvanhocht.be', 'Share title', ['class' => 'text_danger'])
                                            ->facebook()
                                            ->twitter()
                                            ->linkedin('Extra linkedin summary can be passed here')
                                            ->whatsapp();
                                        !!}--}}
                                        <ul class="col-12 blog_meta list_style mb-4 d-block">
                                            <li class="col-sm-4"><a href="{{ route('paroisse',['id' => $a->paroisse->id]) }}"> <img style="width: 30px" class="author_img rounded-circle" src="{{ asset('/assets/image/blog/author.png') }}" alt="">{{ $a->paroisse->nom }}</a></li>
                                            <li class="col-sm-8"><i class="fa fa-calendar"></i> :   Du {{ Carbon\Carbon::create($a->debut)->toFormattedDateString()  }} Au  {{ Carbon\Carbon::create($a->fin)->toFormattedDateString()  }}</li>
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
                            {{ $article->links() }}
                        </nav>
                    @else
                        <div class="col-12">
                            <div class="qutes" style="text-align: center; font-size: 30px;opacity: 0.3">
                                <span class="fa fa-copy mb-4" style="font-size: 80px "></span><br>
                                Aucune annonce trouvée
                            </div>
                       </div>
                    @endif
                </div>
                <!--================End Blog Post Area =================-->
        </div>
@endsection
