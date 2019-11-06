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
                    <img class="img-fluid" src="{{ $article->img }}" alt="">
                </div>
            </div>
            <div class="col-lg-12 col-md-12 blog_details">
                <a class="btn btn-block btn-social btn-facebook">
                            <span class="fa fa-facebook-official"></span>
                        </a>
                <h2>{{ $article->titre }}</h2>
                <h5>{{ $article->category->libelle }}</h5>
                <div class="post_tag mb-4">

                    <ul class="blog_meta list_style" style="display: flex">

                        <li> <img style="width: 30px" class="author_img rounded-circle" src="{{ asset('/assets/image/blog/author.png') }}" alt=""> {{ $article->diocese->nom }}</li>

                        <li><i class="fa fa-calendar"></i> :   Du {{ Carbon\Carbon::create($article->debut)->toFormattedDateString()  }}</li>

                        <li>Au  {{ Carbon\Carbon::create($article->fin)->toFormattedDateString()  }}</li>

                        <li></a>{{ $article->visiteur->count() }} <i class="fa fa-eye w-8"></i></li>

                        <li><a href="#"><i style="font-size: 20px" class="fa fa-facebook-official text-primary"></i></a></li>

                        <li><a href="#"><i style="font-size: 20px" class="fa fa-whatsapp text-success"></i></a></li>
                    </ul>
                    
                </div>
                        
                <p class="excert">
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

        <div class="navigation-area">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-12 nav-left flex-row d-flex justify-content-start align-items-center">
                    <div class="thumb">
                        <a href="#"><img class="img-fluid" src="{{ asset('/assets/image/blog/prev.jpg') }}" alt=""></a>
                    </div>
                    <div class="arrow">
                        <a href="#"><span class="lnr text-white lnr-arrow-left"></span></a>
                    </div>
                    <div class="detials">
                        <p>Prev Post</p>
                        <a href="#"><h4>Space The Final Frontier</h4></a>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-12 nav-right flex-row d-flex justify-content-end align-items-center">
                    <div class="detials">
                        <p>Next Post</p>
                        <a href="#"><h4>Telescopes 101</h4></a>
                    </div>
                    <div class="arrow">
                        <a href="#"><span class="lnr text-white lnr-arrow-right"></span></a>
                    </div>
                    <div class="thumb">
                        <a href="#"><img class="img-fluid" src="{{ asset('/assets/image/blog/next.jpg') }}" alt=""></a>
                    </div>
                </div>
            </div>
        </div>

    </div>
    
@endsection

@section('decompte')
    <script type="text/javascript">

            countdownManager = {
            // Configuration
            targetTime: new Date('2020-01-01 00:00:00'), // Date cible du compte à rebours (00:00:00)
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