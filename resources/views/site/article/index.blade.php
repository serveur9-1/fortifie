@extends('layout_right')
@section('title','Accueil FortifieToi')




@section('content')


<section class="col-md-12" style="padding:0px">
        <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
            <div class="carousel-inner">
            @foreach($p_article as $a)
                <div class="carousel-item @if($loop->first) active @endif">
                    <div data-aos="slide-left" class="bold-title-section">
                        <span class="bold-title-cat">{{ $a->article["category"]->libelle}}</span>
                        <h1 class="bold-title">{{ $a->article["titre"]}}</h1>
                        <a class="mt-5" href="{{ route('description', ['id' => $a->article["id"]]) }}">Lire</a>
                    </div>
                    <img style="padding:0px" src='{{ asset("assets/img/articles") }}/{{ $a->article['img']  }}' class="img-fluid d-block col-md-12" alt="...">
                </div>
            @endforeach
            </div>
            <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </section>
    <section class="search-sec col-lg-12 pb-0 mb-0">
        <div class="container">
            <form action="{{ route('query') }}" method="get">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="row">
                            <div class="col-lg-3 col-md-3 col-sm-12 p-0">
                                <input id="js--search-input-word" type="text" name="title" class="form-control search-slt" placeholder="Entrer un mot clé...">
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-12 p-0">
                                <input name="date" type="text" id="datepicker" autocomplete="off" class="form-control search-slt" placeholder="Entrer la date">
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-12 p-0">
                                <select name="category"  class="form-control search-slt" id="js--search-category">
                                    <option disabled selected>Toutes les catégories</option>
                                    @foreach($category as $cat)
                                        <option value="{{ $cat->id }}">{{ $cat->libelle }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-12 p-0">
                                <button type="submit" class="btn btn-danger wrn-btn">Rechercher</button>
                            </div>
                        </div>
                    </div>
                    <div id="js--search-content" class="col-lg-9 col-md-9 col-sm-12" style="background:#fff;display:block;padding:0px !important">
                        <div id="js--search-result" class="row bg-danger">
                            {{-- Ajax here!!! --}}
                        </div>
                        {{-- LOADING --}}
                    </div>
                </div>
            </form>
        </div>
    </section>
    <div class="col-md-12 mb-2" style="background: #fff">
        @if($banner_pub->count() > 0)
            @foreach ($banner_pub as $item)
                <a target="_blank" href="{{ $item->url }}">
                    <img class="img-fluid" src='{{ asset("/assets/img/pubs/$item->img") }}'>
                </a>
            @endforeach
        @else
            <p class="text-center text-muted">PLACEZ VOUS ICI !!!</p>
        @endif
    </div>

    <style>
        .bold-title-section{
            font-size: 3rem;
            position: absolute;
            top: 30%;
            padding:2px 8px;
            left:10%;
            text-align: left;
            z-index: 9999;
        }
        .bold-title{
            font-size: 73%;
            background: #fff;
            padding: 3px 14px;
            text-align: justify;
            width: 90%;
            text-transform: uppercase;
            line-height: 42px;
        }
        .bold-title-cat{
            font-size: 1rem;
            background: #ff4444;
            padding:3px 7px;
            color: #fff;
        }
        .bold-title-section a{
            text-transform: uppercase;
            width: 150px;
            height: 40px;
            border-radius: 80px;
            font-size: 16px;
            line-height: 35px;
            text-align: center;
            border: 3px solid #e6de08;
            display: block;
            text-decoration: none;
            color: #000;
            overflow: hidden;        
            position: relative;
            background-color: #e6de08;
        }
        .s-card{
            color: #000;
            font-size: 1rem;
        }
        #js--search-content{
            max-height: 200px;
            overflow-y: scroll;
            
        }
        #js--search-result a{
            text-decoration: none !important;
            padding: 0px !important;
        }
        #js--search-result a:hover{
            text-decoration: none !important;
            padding: none !important;
        }
        .s-card i{
            opacity: 0.4;
            font-size: 1.1rem;
        }
        .s-card:hover{
            background: #f2f2f2;
        }
        .search-sec{
            padding: 2rem;
        }
        .search-slt{
            display: block;
            width: 100%;
            font-size: 0.875rem;
            line-height: 1.5;
            color: #55595c;
            background-color: #fff;
            background-image: none;
            border: 1px solid #ccc;
            height: calc(3rem + 2px) !important;
            border-radius:0;
        }
        .wrn-btn{
            width: 100%;
            font-size: 16px;
            font-weight: 400;
            text-transform: capitalize;
            height: calc(3rem + 2px) !important;
            border-radius:0;
        }
        @media (min-width: 992px){
            .search-sec{
                position: relative;
                top: -114px;
                background: rgba(26, 70, 104, 0.51);
            }
        }

        @media (max-width: 992px){
            .search-sec{
                background: #1A4668;
            }
        }


        /* DATEPICKER */

        input:focus {outline: none;}
        #ui-datepicker-div {
            display: none;
            background-color: #fff;
            box-shadow: 0 0.125rem 0.5rem rgba(0,0,0,0.1);
            margin-top: 0.25rem;
            border-radius: 0.5rem;
            padding: 0.5rem;
        }
        table {
            border-collapse: collapse;
            border-spacing: 0;
        }
        .ui-datepicker-calendar thead th {
            padding: 0.25rem 0;
            text-align: center;
            font-size: 0.75rem;
            font-weight: 400;
            color: #78909C;
        }
        .ui-datepicker-calendar tbody td {
            width: 2.5rem;
            text-align: center;
            padding: 0;
        }
        .ui-datepicker-calendar tbody td a {
            display: block;
            border-radius: 0.25rem;
            line-height: 2rem;
            transition: 0.3s all;
            color: #546E7A;
            font-size: 0.875rem;
            text-decoration: none;
        }
        .ui-datepicker-calendar tbody td a:hover {	
            background-color: #E0F2F1;
        }
        .ui-datepicker-calendar tbody td a.ui-state-active {
            background-color: #009688;
            color: white;
        }
        .ui-datepicker-header a.ui-corner-all {
            cursor: pointer;
            position: absolute;
            top: 0;
            width: 2rem;
            height: 2rem;
            margin: 0.5rem;
            border-radius: 0.25rem;
            transition: 0.3s all;
        }
        .ui-datepicker-header a.ui-corner-all:hover {
            background-color: #ECEFF1;
        }
        .ui-datepicker-header a.ui-datepicker-prev {	
            left: 0;	
            background: url("data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIxMyIgaGVpZ2h0PSIxMyIgdmlld0JveD0iMCAwIDEzIDEzIj48cGF0aCBmaWxsPSIjNDI0NzcwIiBmaWxsLXJ1bGU9ImV2ZW5vZGQiIGQ9Ik03LjI4OCA2LjI5NkwzLjIwMiAyLjIxYS43MS43MSAwIDAgMSAuMDA3LS45OTljLjI4LS4yOC43MjUtLjI4Ljk5OS0uMDA3TDguODAzIDUuOGEuNjk1LjY5NSAwIDAgMSAuMjAyLjQ5Ni42OTUuNjk1IDAgMCAxLS4yMDIuNDk3bC00LjU5NSA0LjU5NWEuNzA0LjcwNCAwIDAgMS0xLS4wMDcuNzEuNzEgMCAwIDEtLjAwNi0uOTk5bDQuMDg2LTQuMDg2eiIvPjwvc3ZnPg==");
            background-repeat: no-repeat;
            background-size: 0.5rem;
            background-position: 50%;
            transform: rotate(180deg);
        }
        .ui-datepicker-header a.ui-datepicker-next {
            right: 0;
            background: url('data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIxMyIgaGVpZ2h0PSIxMyIgdmlld0JveD0iMCAwIDEzIDEzIj48cGF0aCBmaWxsPSIjNDI0NzcwIiBmaWxsLXJ1bGU9ImV2ZW5vZGQiIGQ9Ik03LjI4OCA2LjI5NkwzLjIwMiAyLjIxYS43MS43MSAwIDAgMSAuMDA3LS45OTljLjI4LS4yOC43MjUtLjI4Ljk5OS0uMDA3TDguODAzIDUuOGEuNjk1LjY5NSAwIDAgMSAuMjAyLjQ5Ni42OTUuNjk1IDAgMCAxLS4yMDIuNDk3bC00LjU5NSA0LjU5NWEuNzA0LjcwNCAwIDAgMS0xLS4wMDcuNzEuNzEgMCAwIDEtLjAwNi0uOTk5bDQuMDg2LTQuMDg2eiIvPjwvc3ZnPg==');
            background-repeat: no-repeat;
            background-size: 10px;
            background-position: 50%;
        }
        .ui-datepicker-header a>span {
            display: none;
        }
        .ui-datepicker-title {
            text-align: center;
            line-height: 2rem;
            margin-bottom: 0.25rem;
            font-size: 0.875rem;
            font-weight: 500;
            padding-bottom: 0.25rem;
        }
        .ui-datepicker-week-col {
            color: #78909C;
            font-weight: 400;
            font-size: 0.75rem;
        }

        /* .card-o{
            border-bottom-left-radius: 4px;
            border-bottom-right-radius: 4px;
            align-items: center;
            background: linear-gradient(180deg,transparent,#373373), url("//ca.classistatic.com/service-static/frontend-service/kijiji-central-how-to-take-fabulous-photographs-that-sell-your-item-for-you.1ac66df4.jpg");
            background-size:contain;
            height: 36px;
            padding: 40px 20px 20px;
            font-size: 16px;
            font-weight: 700;
            line-height: 22px
        }
    .blog-card {
        display: flex;
        flex-direction: column;
        margin: 1rem auto;
        box-shadow: 0 3px 7px -1px rgba(0, 0, 0, .1);
        margin-bottom: 1.6%;
        background: #fff;
        line-height: 1.4;
        font-family: sans-serif;
        border-radius: 5px;
        overflow: hidden;
        z-index: 0;
    }
    .blog-card a {
        color: inherit;
    }
    .blog-card a:hover {
        color: #6c3191;
    }
    .blog-card:hover .photo {
        transform: scale(1.3) rotate(3deg);
    }
    .blog-card .meta {
        position: relative;
        z-index: 0;
        height: 200px;
    }
    .blog-card .photo {
        position: absolute;
        top: 0;
        right: 0;
        bottom: 0;
        left: 0;
        background-size: cover;
        background-position: center;
        transition: transform 0.2s;
    }
    .blog-card .details, .blog-card .details ul {
        margin: auto;
        padding: 0;
        list-style: none;
    }
    .blog-card .details {
        position: absolute;
        top: 0;
        bottom: 0;
        left: -100%;
        margin: auto;
        transition: left 0.2s;
        background: rgba(0, 0, 0, .6);
        color: #fff;
        padding: 10px;
        width: 100%;
        font-size: 0.9rem;
    }
    .blog-card .details a {
        text-decoration: dotted underline;
    }
    .blog-card .details ul li {
        display: inline-block;
    }
    .blog-card .details .author:before {
        font-family: FontAwesome;
        margin-right: 10px;
    }
    .blog-card .details .date:before {
        font-family: FontAwesome;
        margin-right: 10px;
        content: "\f133";
    }
    .blog-card .details .tags ul:before {
        font-family: FontAwesome;
        content: "\f02b";
        margin-right: 10px;
    }
    .blog-card .details .tags li {
        margin-right: 2px;
    }
    .blog-card .details .tags li:first-child {
        margin-left: -4px;
    }
    .blog-card .description {
        padding: 1rem;
        background: #fff;
        position: relative;
        z-index: 1;
    }
    .blog-card .description h1, .blog-card .description h2 {
        font-family: Poppins, sans-serif;
    }
    .blog-card .description h1 {
        line-height: 1;
        margin: 0;
        font-size: 1.7rem;
    }
    .blog-card .description h2 {
        font-size: 1rem;
        font-weight: 300;
        text-transform: uppercase;
        color: #a2a2a2;
        margin-top: 5px;
    }
    .blog-card .description .read-more {
        text-align: right;
    }
    .blog-card .description .read-more a {
        color: #6c3191;
        display: inline-block;
        position: relative;
    }
    .blog-card .description .read-more a:after {
        content: "\f061";
        font-family: FontAwesome;
        margin-left: -10px;
        opacity: 0;
        vertical-align: middle;
        transition: margin 0.3s, opacity 0.3s;
    }
    .blog-card .description .read-more a:hover:after {
        margin-left: 5px;
        opacity: 1;
    }
    .blog-card p {
        position: relative;
        margin: 1rem 0 0;
    }
    .blog-card p:first-of-type {
        margin-top: 1.25rem;
    }
    .blog-card p:first-of-type:before {
        content: "";
        position: absolute;
        height: 5px;
        background: #6c3191; 
        width: 35px;
        top: -0.75rem;
        border-radius: 3px;
    }
    .blog-card:hover .details {
        left: 0%;
    }

 @media (min-width: 640px) {
	 .blog-card {
		 flex-direction: row;
         max-width: 700px;
	}
	 .blog-card .meta {
		 flex-basis: 40%;
		 height: auto;
	}
	 .blog-card .description {
		 flex-basis: 60%;
	}
	 .blog-card .description:before {
		 transform: skewX(-3deg);
		 content: "";
		 background: #fff;
		 width: 30px;
		 position: absolute;
		 left: -10px;
		 top: 0;
		 bottom: 0;
		 z-index: -1;
	}
	 .blog-card.alt {
		 flex-direction: row-reverse;
	}
	 .blog-card.alt .description:before {
		 left: inherit;
		 right: -10px;
		 transform: skew(3deg);
	}
	 .blog-card.alt .details {
		 padding-left: 25px;
	}
}


 */


#ads {
    margin: 30px 0 30px 0;
   
}

#ads .card-notify-badge {
        position: absolute;
        left: -10px;
        top: -20px;
        background: #f2d900;
        text-align: center;
        border-radius: 30px 30px 30px 30px; 
        color: #000;
        padding: 5px 10px;
        font-size: 14px;

    }

#ads .card-notify-year {
        position: absolute;
        right: -10px;
        top: -20px;
        background: #ff4444;
        border-radius: 50%;
        text-align: center;
        color: #fff;      
        font-size: 14px;      
        width: 50px;
        height: 50px;    
        padding: 15px 0 0 0;
}


#ads .card-detail-badge {      
        background: #f2d900;
        text-align: center;
        border-radius: 30px 30px 30px 30px;
        color: #000;
        padding: 5px 10px;
        font-size: 14px;        
    }

   

#ads .card:hover {
            background: #fff;
            box-shadow: 12px 15px 20px 0px rgba(46,61,73,0.15);
            border-radius: 4px;
            transition: all 0.3s ease;
        }

#ads .card-image-overlay {
        font-size: 20px;
        
    }


#ads .card-image-overlay span {
            display: inline-block;              
        }


#ads .ad-btn {
        text-transform: uppercase;
        width: 150px;
        height: 40px;
        border-radius: 80px;
        font-size: 16px;
        line-height: 35px;
        text-align: center;
        border: 3px solid #e6de08;
        display: block;
        text-decoration: none;
        margin: 20px auto 1px auto;
        color: #000;
        overflow: hidden;        
        position: relative;
        background-color: #e6de08;
    }

#ads .ad-btn:hover {
            background-color: #e6de08;
            color: #1e1717;
            border: 2px solid #e6de08;
            background: transparent;
            transition: all 0.3s ease;
            box-shadow: 12px 15px 20px 0px rgba(46,61,73,0.15);
        }

#ads .ad-title h5 {
        text-transform: uppercase;
        font-size: 18px;
    }
 
        
    </style>

        <div class="col-lg-8">
            <!--================Blog Categorie Area =================-->
            <section class="blog_categorie_area pt-0">
                    <div class=" pl-0 pr-0 pb-5 pt-5 mb-2">
                        <div class="col-lg-12 d-flex justify-content-between">
                            <h4 class="float-left text-left text-uppercase">Catégories les plus visitées</h4>
                        </div>
                    </div>
                    <div class="container">
                        <div class="row">
                        @if($p_category->count() > 0)
                            @foreach($p_category as $a)
                            <div class="col-lg-4 mb-4">
                                <a href="{{ route('categorie', ['id' => $a->category->id]) }}">
                                    <div class="categories_post text-uppercase card-o article-img" style="color:#fff;height:100px">
                                        <strong>{{ $a->category->libelle }}</strong>
                                    </div>
                                </a>
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
                    <div class=" pl-0 pr-0 pb-5 pt-5 mb-2">
                        <div class="col-lg-12 d-flex justify-content-between">
                            <h4 class="float-left text-left text-uppercase">Annonces à la une</h4>
                        </div>
                    </div>
                    <style>
                        .article-img{
                            transition: all .2s;
                        }
                        .article-img:hover{
                            transform: scale(1.03);
                            transition: all .5s;
                        }
                    </style>
                    
                            {{-- <div class="blog-card mb-5" data-aos="fade-up">
                                <div class="meta">
                                <div class="photo" style="background-image: url({{ asset('assets/img/articles/'.$a->img) }})"></div>
                                <ul class="details">
                                    <li> 
                                        <img style="width: 30px" class="author_img rounded-circle" src='{{ asset("/assets/img/users/".$a->user->img) }}' alt="profil">
                                        <a href="{{ route('paroisse',['id' => $a->paroisse->id]) }}">{{ $a->paroisse->nom }}</a>
                                    </li>
                                    @if($a->date_string == null)
                                        <li class="date">{{ Carbon\Carbon::create($a->debut)->toFormattedDateString()  }}</li>
                                        <li class="date">{{ Carbon\Carbon::create($a->fin)->toFormattedDateString()  }}</li>
                                    @else
                                        <li class="date">{{ $a->date_string }}</li>
                                    @endif
                                </ul>
                                </div>
                                <div class="description">
                                <h1 class="text-dark">{{ $a->titre }}</h1>
                                <h2><a href="{{ route('categorie',['id' => $a->category->id]) }}">{{ $a->category->libelle }}</a></h2>
                                <p>{{ Str::limit($a->description, 300) }}</p>
                                <p class="read-more">
                                    <a href="{{ route('description',['id' => $a->id])}}">Voir détails</a>
                                </p>
                                </div>
                            </div> --}}
                            <div class="contaier">
                                <div class="row" id="ads">
                                @if($article->count() > 0)
                                    @foreach($article as $a)
                                    <div class="col-md-6 mb-5" data-aos="fade-up">
                                        <div class="card rounded">
                                            <div class="card-image">
                                                <span class="card-notify-badge">{{ $a->category->libelle }}</span>
                                                {{-- <span class="card-notify-year">New</span> --}}
                                                <img class="img-fluid" src="{{ asset('assets/img/articles/'.$a->img) }}" alt="Alternate Text" />
                                            </div>
                                            <div class="card-body text-center">
                                                <div class="ad-title m-auto">
                                                    <h5 style="font-size:96%" class="text-left">{{ Str::limit($a->titre, 26) }}</h5>
                                                    <p style="margin-top:-10px" class="text-left"><small><i class="text-muted text-left">Publié le {{ $a->created_at->format('d M Y') }}</i></small></p>
                                                    <p style="line-height: 1.2;word-spacing:-0.1px" class="text-justify">{{ Str::limit($a->description, 200) }}</p>
                                                </div>
                                                <a class="ad-btn" href="{{ route('description',['id' => $a->id])}}">Plus d'info</a>
                                            </div>
                                        </div>
                                    </div>
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
                            </div>

                </div>
                <!--================End Blog Post Area =================-->
        </div>
        <script>
            $( function() {
                $( "#datepicker" ).datepicker({
                    dateFormat: "dd-mm-yy"
                    ,	duration: "fast"
                });
            } );
        </script>



        <script>
            $(document).ready(function(){

                var diocese = [];

                var article = [];

                $('#js--search-input-word').on('keyup', (e)=>{
                    
                    if(e.target.value.length > 1)
                    {
                        console.log(e.target.value);

                        $('#js--search-content').show();


                        $('#js--search-content').text('');

                        fetch(`{{route('home')}}/api/villes/${e.target.value}`) // Call the fetch function passing the url of the API as a parameter
                        .then(resp => { 
                            $('#js--search-content').append(`
                                <div class="d-flex justify-content-center">
                                    <img class="img-fluid"  src="{{ asset('/assets/img/loading.gif') }}" alt="">
                                </div>
                            `);
                            return resp.json();
                        })
                        .then( data =>{
                            console.log(data);
                            $('#js--search-content').text('');

                            //Request for diocese
                            fetch(`{{route('home')}}/api/diocese/${e.target.value}`)
                            .then(dio => {
                                return dio.json()
                            })
                            .then(dio => {
                                diocese = dio;

                                    //Request for Annonce
                                    fetch(`{{route('home')}}/api/annonce/${e.target.value}`)
                                    .then(article => {
                                        return article.json()
                                    })
                                    .then(articl => {
                                        article = articl;
                                    })
                                    .catch(err => {
                                        console.log(err);
                                    })
                            })
                            .catch(err => {
                                console.log(err);
                            })
                            data.forEach( i => {
                                //add villes
                                $('#js--search-content').append(`
                                    <a class="col-md-12" href="{{ route('home') }}{{ "/query?diocese="}}${i.diocese[0].id}" style="padding: 0px !important;">
                                        <div class="s-card col-lg-12 col-md-12 col-sm-12 item-1 pt-3 pb-3 pl-4">
                                            <i class="fa fa-map-marker"></i>&nbsp;&nbsp;${i.libelle}, ${i.libelle}, ${i.diocese[0].nom}
                                        </div>
                                    </a>
                                `);
                            });


                            diocese.forEach( i => {
                                console.log(i)
                                //add diocese
                                $('#js--search-content').append(`
                                    <a class="col-md-12" href="{{ route('home') }}{{ "/query?diocese="}}${i.id}" style="padding: 0px !important;">
                                        <div class="s-card col-lg-12 col-md-12 col-sm-12 item-1 pt-3 pb-3 pl-4">
                                            <i class="fa fa-bank"></i>&nbsp;&nbsp;Diocèse, ${i.nom}
                                        </div>
                                    </a>
                                `);
                            });

                            article.forEach( i => {
                                console.log("okk");
                                console.log(i);
                                //add article
                                $('#js--search-content').append(`
                                    <a class="col-md-12" href="{{ route('home') }}{{ "/description/"}}${i.id}" style="padding: 0px !important;">
                                        <div class="s-card col-lg-12 col-md-12 col-sm-12 item-1 pt-3 pb-3 pl-4">
                                            <i class="fa fa-copy"></i>&nbsp;&nbsp;Annonce, ${i.titre}
                                        </div>
                                    </a>
                                `);
                            });
                            
                        })
                        .catch(err => {
                            console.log(err);
                        })

                    }else{

                        $('#js--search-content').hide();
                    }

                });

            });
        </script>
@endsection
