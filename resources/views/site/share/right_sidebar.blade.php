<!--========= Pub area ==============-->
<div class="col-lg-4">
    <div class="blog_right_sidebar">
        <!--============= END PUB AREA HERE  ===================-->
        <aside class="single_sidebar_widget post_category_widget">
            <h4 class="widget_title">Toutes les catégories</h4>
            <ul class="list_style cat-list">
                @foreach($category as $c)
                <li>
                    <a href="#" class="d-flex justify-content-between">
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
            @for($i=0; $i<5; $i++)
                @foreach($article as $a)
                    <div class="media post_item">
                        <img style="width: 100px" src='{{ asset("/assets/image/blog/main-blog/$a->img") }}' alt="post">
                        <div class="media-body">
                            <a href=""><h3>{{ $a->titre }}</h3></a>
                            <p>{{ Carbon\Carbon::now()->diffForHumans($a->created_at) }}</p>
                        </div>
                    </div>
                @endforeach
            @endfor

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
        <aside class="single-sidebar-widget newsletter_widget">
            <h4 class="widget_title">Newsletter</h4>
            <p>
                Abonnez-vous à la newsletter pour être informé de toutes les nouvelles informations à tout moment.
            </p>
            <div class="form-group d-flex flex-row">
                <div class="input-group">
                    <div class="input-group-prepend">
                        <div class="input-group-text"><i class="fa fa-envelope" aria-hidden="true"></i></div>
                    </div>
                    <input type="text" class="form-control" id="inlineFormInputGroup" placeholder="Enter email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email'">
                </div>
                <a href="#" class="bbtns">S'abonner</a>
            </div>
            <div class="br"></div>
        </aside>
        <aside class="single-sidebar-widget tag_cloud_widget">
            <h4 class="widget_title">Tags</h4>
            <ul class="list_style">
                <li><a href="#">Technology</a></li>
                <li><a href="#">Fashion</a></li>
                <li><a href="#">Architecture</a></li>
                <li><a href="#">Fashion</a></li>
                <li><a href="#">Food</a></li>
                <li><a href="#">Technology</a></li>
                <li><a href="#">Lifestyle</a></li>
                <li><a href="#">Art</a></li>
                <li><a href="#">Adventure</a></li>
                <li><a href="#">Food</a></li>
                <li><a href="#">Lifestyle</a></li>
                <li><a href="#">Voir plus</a></li>
            </ul>
        </aside>
    </div>
</div>
