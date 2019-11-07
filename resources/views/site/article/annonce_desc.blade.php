@extends('layout_right')
@section('title','Description')
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
        </div>
    </section>
    <!--================Breadcrumb Area =================-->
@endsection
@section('content')
    <div class="col-lg-8 posts-list">
        <div class="single-post row">
            <div class="col-lg-12">
                <div class="feature-img">
                    {{--<img class="img-fluid" src="{{ asset('/assets/image/blog/feature-img1.jpg') }}" alt="">--}}
                    <div style="width: 100%;height: 300px ;background: url('{{ $article->img }}') no-repeat;background-size: cover;"></div>
                </div>
            </div>
            <div class="col-lg-12 col-md-12 blog_details">
                <h2 class="text-uppercase">{{ $article->titre }}</h2>
                <h5 class="text-uppercase">Catégorie: <a href="{{ route('categorie', ['id' => $article->category->id ]) }}">{{ $article->category->libelle }}</a></h5>
                <div class="post_tag mb-4">

                    <ul class="blog_meta list_style" style="display: flex">

                        <li> <img style="width: 30px" class="author_img rounded-circle" src="{{ asset('/assets/image/blog/author.png') }}" alt=""> {{ $article->paroisse->diocese->nom }}</li>

                        <li><i class="fa fa-calendar"></i> :   Du {{ Carbon\Carbon::create($article->debut)->toFormattedDateString()  }}</li>

                        <li>Au  {{ Carbon\Carbon::create($article->fin)->toFormattedDateString()  }} </li>

                        <li>{{ $vue }} {{ Str::plural('vue', $article->visiteur->count() ) }} </li>

                    </ul>

                </div>
                <div style="height: 30px; display: flex;color: #fff" class="mb-3 col-lg-12 col-md-12">
                    <div class="col-lg-3 col-md-3">
                        <a class="btn btn-block btn-social btn-facebook" style="width: 150px;height: 20px;font-size: 15px;padding-bottom: 30px">
                            <i class="fa fa-facebook-f"></i>
                            Facebook
                        </a>
                    </div>
                    <div class="col-lg-3 col-md-3">
                        <a class="btn btn-block btn-social btn-twitter" style="width: 150px;height: 20px;font-size: 15px;padding-bottom: 30px">
                            <i class="fa fa-twitter"></i>
                            Twitter
                        </a>
                    </div>
                    <div class="col-lg-3 col-md-3">
                        <a class="btn btn-block btn-social btn-success whatsapp" style="width: 150px;height: 20px;font-size: 15px;padding-bottom: 30px">
                            <i class="fa fa-whatsapp"></i>
                            Whatsapp
                        </a>
                    </div>
                </div>

                <p class="excert mt-5">
                    {{ $article->description }}
                </p>
            </div>

            <div class="col-lg-12">
                <div class="quotes">
                    <div id="countdown">
                        <strong>Temps restant</strong> :
                        <span id="countdown_day" >--</span> jours
                        <span id="countdown_hour">--</span> heures
                        <span id="countdown_min" >--</span> minutes
                        <span id="countdown_sec" >--</span> secondes
                    </div>
                </div>
            </div>
        </div>

    </div>
    <style type="text/css">
        .whatsapp:hover{
            background-color: #00e676;
        }
    </style>

@endsection

@section('decompte')
    <script type="text/javascript">

            countdownManager = {
            // Configuration
            targetTime: new Date("{{ Carbon\Carbon::create($article->fin)->format('Y-m-d')  }} {{ Carbon\Carbon::create($article->fin)->format('H:m:s')  }}"), // Date cible du compte à rebours (00:00:00)
            displayElement: { // Elements HTML où sont affichés les informations
                day:  null,
                hour: null,
                min:  null,
                sec:  null
            },

            // Initialisation du compte à rebours (à appeler 1 fois au chargement de la page)
            init: function(){
                // Récupération des références vers les éléments pour l'affichage
                // La référence n'est récupérée qu'une seule fois à l'initialisation pour optimiser les performances
                this.displayElement.day  = jQuery('#countdown_day');
                this.displayElement.hour = jQuery('#countdown_hour');
                this.displayElement.min  = jQuery('#countdown_min');
                this.displayElement.sec  = jQuery('#countdown_sec');

                // Lancement du compte à rebours
                this.tick(); // Premier tick tout de suite
                window.setInterval("countdownManager.tick();", 1000); // Ticks suivant, répété toutes les secondes (1000 ms)
            },

            // Met à jour le compte à rebours (tic d'horloge)
            tick: function(){
            // Instant présent
            var timeNow  = new Date();

            // On s'assure que le temps restant ne soit jamais négatif (ce qui est le cas dans le futur de targetTime)
            if( timeNow > this.targetTime ){
                timeNow = this.targetTime;
            }

            // Calcul du temps restant
            var diff = this.dateDiff(timeNow, this.targetTime);

            this.displayElement.day.text(  diff.day  );
            this.displayElement.hour.text( diff.hour );
            this.displayElement.min.text(  diff.min  );
            this.displayElement.sec.text(  diff.sec  );
            },

                // Calcul la différence entre 2 dates, en jour/heure/minute/seconde
                dateDiff: function(date1, date2){
                    var diff = {}                           // Initialisation du retour
                    var tmp = date2 - date1;

                    tmp = Math.floor(tmp/1000);             // Nombre de secondes entre les 2 dates
                    diff.sec = tmp % 60;                    // Extraction du nombre de secondes
                    tmp = Math.floor((tmp-diff.sec)/60);    // Nombre de minutes (partie entière)
                    diff.min = tmp % 60;                    // Extraction du nombre de minutes
                    tmp = Math.floor((tmp-diff.min)/60);    // Nombre d'heures (entières)
                    diff.hour = tmp % 24;                   // Extraction du nombre d'heures
                    tmp = Math.floor((tmp-diff.hour)/24);   // Nombre de jours restants
                    diff.day = tmp;

                    return diff;
                }
            };

                jQuery(function($){
                    // Lancement du compte à rebours au chargement de la page
                    countdownManager.init();
                });
        </script>

@endsection
