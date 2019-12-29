@extends('layout_right')
@section('title','Accueil Fortifietoi')

@section('content')
    <div class="mb-5 mt-5" style="height: 110px;background: #fff;width: 100%">
        <a href="#">
            <img src="{{ asset('/assets/image/blog/main-blog/m-blog-2.jpg') }}" style="height: 110px;width: 100%">
        </a>
    </div>

    <style>
        .card-o{
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
 
        
    </style>

        <div class="col-lg-8">

                <!--================Blog Post Area =================-->
                <div class="blog_left_sidebar">
                    <div class=" pl-0 pr-0 pb-5 mb-2">
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
                    @if($paroisse->count() > 0)
                        @foreach($paroisse as $p)
                            <div class="blog-card mb-5" data-aos="fade-up">
                                <div class="meta">
                                    <div class="photo" style="background-image: url({{ asset('assets/img/articles/') }})"></div>
                                    <ul class="details">
                                        <li> 
                                            <img style="width: 30px" class="author_img rounded-circle" src='{{ asset("/assets/img/users/") }}' alt="profil">
                                            {{-- <a href="{{ route('paroisse',['id' => $paroisse->id]) }}">{{ $paroisse->nom }}</a> --}}
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        @endforeach
                        <nav class="blog-pagination justify-content-center d-flex">
                            {{ $paroisse->links() }}
                        </nav>
                    @else
                        <div class="col-12">
                            <div class="qutes" style="text-align: center; font-size: 30px;opacity: 0.3">
                                <span class="fa fa-building mb-4" style="font-size: 80px "></span><br>
                                Aucune paroisse trouvée
                            </div>
                       </div>
                    @endif
                </div>
                <!--================End Blog Post Area =================-->
        </div>
@endsection
