<!--========= Pub area ==============-->
<div class="col-lg-4">
    <div class="blog_right_sidebar">
        <!--============= END PUB AREA HERE  ===================-->
        <aside class="single_sidebar_widget post_category_widget">
            <h4 class="widget_title">Toutes les catégories</h4>
            <ul class="list_style cat-list">
                @foreach($category as $c)
                <li>
                    <a data-aos="fade-left" href="{{ route('categorie', [ 'id' => $c->id]) }}" class="d-flex justify-content-between">
                        <p>{{ $c->libelle }}</p>
                        <p>{{ $c->article->count() }}</p>
                    </a>
                </li>
                @endforeach
            </ul>
            <div class="br"></div>
        </aside>
        <!--============= PUB AREA HERE  ===================-->
        <aside class="single_sidebar_widget popular_post_widget">
            <h3 class="widget_title">Annonces populaires</h3>
                @foreach($p_article as $a)
                    <div class="media post_item" data-aos="fade-left">
                        <div style="width: 100px;height: 60px ;background: url('{{ asset("assets/img/articles") }}/{{ $a->article['img']  }}') no-repeat;background-size: cover;"></div>
                        <div class="media-body">
                            <a href="{{ route('description', ['id' => $a->article['id'] ]) }}"><h3>{{ $a->article['titre'] }}</h3></a>
                            <p>{{ Carbon\Carbon::now()->diffForHumans($a->article['created_at']) }}</p>
                        </div>
                    </div>
                @endforeach

            <div class="br"></div>
            
        </aside>
        <!--============= PUB AREA HERE  ===================-->
        @if($g_pub->count() > 0)
            @foreach($g_pub as $p)
                <aside class="single_sidebar_widget ads_widget">
                    <a target="_blank" href="{{ $p->url }}"><img class="img-fluid" src="{{ asset("/assets/img/pubs/$p->img") }}" alt=""></a>
                    <div class="br"></div>
                </aside>
            @endforeach
        @else
            <aside class="single_sidebar_widget ads_widget">
                <a href="#"><img class="img-fluid" src="{{ asset('/assets/img/pubs/add.jpg') }}" alt=""></a>
                <div class="br"></div>
            </aside>
        @endif

        <!--============= Galerie  ===================-->
        <aside class="single_sidebar_widget popular_post_widget ">
            <h3 class="widget_title">Galérie</h3>
            <a href="{{ route('album') }}"><div class="col-lg-12 col-md-12 col-sm-12 mb-5">
            <div class="single-footer-widget instafeed">
                <ul class="list_style instafeed d-flex flex-wrap">
                    <li style="width: 21%;height: 60px ;background: url('{{ asset('assets/image/instagram/Image-01.jpg')}}') no-repeat;background-size: cover;"></li>
                    <li style="width: 21%;height: 60px ;background: url('{{ asset('assets/image/instagram/Image-02.jpg')}}') no-repeat;background-size: cover;"></li>
                    <li style="width: 21%;height: 60px ;background: url('{{ asset('assets/image/instagram/Image-03.jpg')}}') no-repeat;background-size: cover;"></li>
                    <li style="width: 21%;height: 60px ;background: url('{{ asset('assets/image/instagram/Image-04.jpg')}}') no-repeat;background-size: cover;"></li>
                    <li style="width: 21%;height: 60px ;background: url('{{ asset('assets/image/instagram/Image-05.jpg')}}') no-repeat;background-size: cover;"></li>
                    <li style="width: 21%;height: 60px ;background: url('{{ asset('assets/image/instagram/Image-06.jpg')}}') no-repeat;background-size: cover;"></li>
                    <li style="width: 21%;height: 60px ;background: url('{{ asset('assets/image/instagram/Image-07.jpg')}}') no-repeat;background-size: cover;"></li>
                    <li style="width: 21%;height: 60px ;background: url('{{ asset('assets/image/instagram/Image-08.jpg')}}') no-repeat;background-size: cover;"></li>
                </ul>
            </div>
        </div>
        </a> 
            <div class="br"></div>
            
        </aside>
        <!--============= END PUB AREA HERE  ===================-->
        <aside class="single-sidebar-widget newsletter_widget">
            <h4 class="widget_title">Newsletter</h4>
            <p>
                Abonnez-vous à la newsletter pour être informé de toutes les nouvelles informations à tout moment.
            </p>
            @error('email')
            <p class="text-warning" role="alert">
                <strong>{{ $message }}</strong>
            </p>
            @enderror
            <div class="form-group d-flex flex-row">
                <form action="{{ route('newsletter') }}" method="post" class="col-12 d-inline-flex">
                    @csrf
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <div class="input-group-text"><i class="fa fa-envelope" aria-hidden="true"></i></div>
                        </div>
                        <input name="email" type="text" class="form-control" id="inlineFormInputGroup" placeholder="Entrer email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Entrer email'">
                    </div>
                    <button type="submit" href="#" class="btn bbtns">S'abonner</button>
                </form>
            </div>
            <div class="br"></div>
        </aside>

        <!--============= PUB AREA HERE  ===================-->
        <aside class="single_sidebar_widget ads_widget">
            <a href="#"><img class="img-fluid" src="{{ asset('/assets/image/blog/add.jpg') }}" alt=""></a>
            <div class="br"></div>
        </aside>

        <aside class="single_sidebar_widget ads_widget">
            <a href="#"><img class="img-fluid" src="{{ asset('/assets/image/blog/add.jpg') }}" alt=""></a>
            <div class="br"></div>
        </aside>
        <!--============= END PUB AREA HERE  ===================-->

    </div>
</div>
