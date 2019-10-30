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
                        @if($category->count() > 0)
                            @foreach($category as $cat)
                                <div class="col-lg-4 mb-4">
                                <div class="categories_post">
                                    {{--<img src='{{ asset("/assets/image/blog/cat-post/$cat->img") }}' alt="post">--}}
                                    <img src='{{ $cat->slug }}' alt="post">
                                    <div class="categories_details">
                                        <div class="categories_text">
                                            <a href=""><h5>{{ $cat->libelle }}</h5></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        @else
                            =   =   =   =   =   =
                            =   Aucune categorie   =
                            =   =   =   =   =   =
                        @endif
                        </div>
                    </div>
                </section>
                <!--================Blog Categorie Area =================-->

                <!--================Blog Post Area =================-->
                <div class="blog_left_sidebar">
                    <style>
                        .article-img{
                            transition: all .2s;
                        }
                        .article-img:hover{
                            transform: scale(1.05);
                            transition: all .5s;
                        }
                    </style>
                    @if($article->count() > 0)
                        @foreach($article as $a)
                            <article class="row blog_item">
                            <div class="col-md-9">
                                <div class="blog_post">
                                    {{--<img src='{{ asset("/assets/image/blog/main-blog/$a->img") }}' alt="">--}}
                                    <img class="article-img" src='{{ $a->img }}' alt="">
                                   {{-- <div class="social-buttons">
                                        <a href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode($url) }}"
                                           target="_blank">
                                            <i class="fa fa-facebook-official"></i>
                                        </a>
                                        <a href="https://twitter.com/intent/tweet?url={{ urlencode($url) }}"
                                           target="_blank">
                                            <i class="fa fa-twitter-square"></i>
                                        </a>
                                        <a href="https://plus.google.com/share?url={{ urlencode($url) }}"
                                           target="_blank">
                                            <i class="fa fa-google-plus-square"></i>
                                        </a>
                                        <a href="https://pinterest.com/pin/create/button/?{{
                                            http_build_query([
                                                'url' => $url,
                                                'media' => $image,
                                                'description' => $description
                                            ])
                                            }}" target="_blank">
                                            <i class="fa fa-pinterest-square"></i>
                                        </a>
                                    </div>--}}
                                    <div class="blog_details">
                                        <a href=""><h2>{{ $a->category->libelle }} : <span>{{ $a->titre }}</span></h2></a>
                                        <p>
                                            {{ Str::limit($a->description, 400) }}
                                        </p>
                                        <a href="" class="view_btn button_hover">VOIR DETAILS</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="blog_info text-right">
                                    <div class="post_tag">
                                        <a href="#">{{ $a->category->libelle }}</a>
                                    </div>
                                    <ul class="blog_meta list_style">
                                        <li><a href="#">Mark wiens <img style="width: 30px" class="author_img rounded-circle" src="{{ asset('/assets/image/blog/author.png') }}" alt=""></a></li>
                                        <li><a href="#">{{ Carbon\Carbon::create($a->debut)->toFormattedDateString()  }}<i class="lnr lnr-calendar-full"></i></a></li>
                                        <li><a href="#">{{ Carbon\Carbon::create($a->fin)->toFormattedDateString()  }}<i class="lnr lnr-calendar-full"></i></a></li>
                                        <li><a href="#">1.2M Views<i class="lnr lnr-eye"></i></a></li>
                                        <li class="mt-3"><a href="#"><i style="font-size: 40px" class="fa fa-facebook-official text-primary"></i></a></li>
                                        <li class="mt-3"><a href="#"><i style="font-size: 40px" class="fa fa-whatsapp text-success"></i></a></li>
                                    </ul>
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
                        =   =   =   =   =   =
                        =   Aucun article   =
                        =   =   =   =   =   =
                    @endif
                </div>
                <!--================End Blog Post Area =================-->
        </div>
@endsection
