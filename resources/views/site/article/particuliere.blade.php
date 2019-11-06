@extends('layout_right')
@section('title','publication')
@section('bread')
        <!--================Breadcrumb Area =================-->
        <section class="breadcrumb_area blog_banner_two">
            <div class="overlay bg-parallax" data-stellar-ratio="0.8" data-stellar-vertical-offset="0" data-background=""></div>
            <div class="container">
                <div class="page-cover text-center">
                    <h2 class="page-cover-tittle f_48">Publier une annonce</h2>
                    <ol class="breadcrumb">
                        <li><a href="">Accueil</a></li>
                        <li><a href="">Annonce</a></li>
                        <li class="active">Publier annonce</li>
                    </ol>
                </div>
            </div>
        </section>
        <!--================Breadcrumb Area =================-->
@endsection
@section('content')
    <div class="col-lg-8">
        <div class="blog_left_sidebar">
           <div class="container">
                <div class="stepwizard">
                    <div class="stepwizard-row setup-panel">
                        <div class="stepwizard-step col-xs-3">
                            <a href="#step-1" type="button" class="btn btn-success stepp">1</a>
                            <p><small>Catégories</small></p>
                        </div>
                        <div class="stepwizard-step col-xs-3">
                            <a href="#step-2" type="button" class="btn stepp" disabled="disabled">2</a>
                            <p><small>Sous-catégories</small></p>
                        </div>
                        <div class="stepwizard-step col-xs-3">
                            <a href="#step-3" type="button" class="btn tn-circle stepp" disabled="disabled">3</a>
                            <p><small>Informations</small></p>
                        </div>
                        <div class="stepwizard-step col-xs-3">
                            <a href="#step-4" type="button" class="btn stepp" disabled="disabled"><i class="fa fa-eye"></i></a>
                            <p><small>Resumé</small></p>
                        </div>
                    </div>
                </div>

                <form role="form" class="contact_form">
                    <div class="panel panel-primary setup-content" id="step-1">
                        <div class="panel-heading">
                             <h3 class="panel-title"> Catégories <span style="color: red">*</span></h3>
                        </div>
                        <div class="panel-body">
                            <div id="list-example" class="list-group">
                                @foreach($category as $c)
                                    <div class="list-group-item list-group-item-action" disabled>{{ $c->libelle }}
                                        <div class="primary-radio" style="float: right;background-color: #5fc6c9">
                                            <input value="{{ $c->id }}" type="radio" id="{{ $c->id }}" name="category" checked>
                                            <label for="{{ $c->id }}"></label>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                            <button class="btn stepp nextBtn pull-right mt-3" type="button">Next</button>
                        </div>
                    </div>

                    <div class="panel panel-primary setup-content" id="step-2">
                         <div class="panel-heading">
                             <h3 class="panel-title">Sous-Catégories <span style="color: red">*</span></h3>
                        </div>
                        <div class="panel-body">
                            <div id="list-example" class="list-group">
                                @foreach($category as $c)
                                    <div class="list-group-item list-group-item-action" disabled>{{ $c->libelle }}
                                        <div class="primary-radio" style="float: right;background-color: #5fc6c9">
                                            <input value="{{ $c->id }}" type="radio" id="{{ $c->id }}" name="category" checked>
                                            <label for="{{ $c->id }}"></label>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                            <button class="btn stepp nextBtn pull-right mt-3" type="button">Next</button>
                        </div>
                    </div>

                    <div class="panel panel-primary setup-content" id="step-3">
                        <div class="panel-heading">
                             <h3 class="panel-title">Informations <span style="color: red">*</span></h3>
                        </div>
                        <div class="panel-body">
                            <div class="card">
                                <div class="card-body">
                                    <h6> 1- Détails de l'annonce</h6><hr>
                                    <div class="form-group">
                                        <div class="row">
                                            <input type="hidden" name="categorie_id" value="1">
                                            <input type="hidden" name="user_id" value="78">
                                            <div class="col-lg-3 col-sm-6">
                                                <label for="">Date debut <em style="color:red;">*</em> </label>
                                                <input type="date" id="date_debut" required class="datepicker form-control" name="date_debut" placeholder="Heure debut">
                                            </div>
                                            <div class="col-lg-3 col-sm-6">
                                                <label for="">Heure debut <em style="color:red;">*</em> </label>
                                                <input type="time" id="date_debut" required class="datepicker form-control" name="date_debut" placeholder="Heure debut">
                                            </div>
                                            
                                            <div class="col-lg-3 col-sm-6">
                                                <label for="">Heure fin <em style="color:red;">*</em></label>
                                                <input type="time" id="heure_fin" required class=" form-control" name="heure_fin" placeholder="Heure fin">
                                            </div>
                                            <div class="col-lg-3 col-sm-6">
                                                <label for="">Date fin <em style="color:red;">*</em></label>
                                                <input type="date" id="date_fin" required class=" form-control" name="date_fin" placeholder="Heure fin">
                                            </div>

                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="">Description </label>
                                        <textarea rows="4" id="desc" class="form-control" name="description" placeholder="Description"></textarea>

                                    </div>
                                    <div class="form-group">
                                        <label >Ville <em style="color:red;">*</em></label>
                                        <div>
                                            <select id="communes" name="commune_id" required class="form-control col-lg-12 col-sm-12">
                                                @foreach($ville as $v)
                                                    <option value="{{ $v->id }}">{{ $v->libelle }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br>

                            <div class="card">
                                <div class="card-body">
                                    <h6>2- Médias <em style="color:red;">*</em> </h6>
                                    <hr>
                                    <p>Inclure une image de 300px et au plus de 1000px de haut ou de large.
                                        <br> Cette image devra accompagner votre annonce afin d'avoir plus de précision sur cette annonce. </p>
                                    <div class="form-group">

                                        <div class="container">
                                            <div class="row">
                                                <div class="col-lg-12 col-sm-12">
                                                    <div class="card">
                                                        <div class="card-body">
                                                            <div class="white-box">
                                                                <input required type="file" id="input-file-now1" name="premiere" class="files dropify">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="">Url de la video Youtube</label>
                                        <input id="youtube" type="text" name="urlYoutube" class="form-control" value="" placeholder="https://www.youtube.com/watch?v=mJQBrHMUOfs">

                                    </div>
                                    <div class="form-group">
                                        <div style="margin-bottom:5px;" class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="customCheckSiteWeb">
                                            <label class="custom-control-label" for="customCheckSiteWeb"> URL du site Web</label>
                                        </div>
                                        <input type="text" id="site" name="siteWeb" class="form-control" placeholder="https://www.monsite.ci" value="">

                                    </div>
                                </div>
                            </div>
                            <br>
                            <div class="card">
                                <div class="card-body">
                                    <h6>3- Coordonnées (Ces informations seront affichées sur l'annonce)</h6><hr>
                                    <div class="form-group">
                                        <label for="">Numéro de téléphone</label>
                                        <input type="text" id="contacts" name="telephone" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Adresse email de l'annonce</label>
                                        <input type="email" id="email" name="email" class="form-control">
                                    </div>

                                </div>
                            </div>

                            <button class="btn stepp nextBtn pull-right mt-3" type="button">next</button>
                        </div>
                    </div>

                    <div class="panel panel-primary setup-content" id="step-4">
                        <div class="panel-heading">
                             <h3 class="panel-title">Resumé</h3>
                        </div>
                        <div class="panel-body">
                            <div class="card">
                                <div class="card-body">
                                    <h6> 1- Détails de l'annonce</h6><hr>
                                    <div class="form-group">
                                        <label for="">Catégories </label>
                                        <input type="text" class="form-control" id="theme" name="libelle" value="theme" disabled>
                                    </div>
                                    <div class="form-group">
                                        <label for="">Sous-Catégorie </label>
                                        <input type="text" class="form-control" id="theme" name="libelle" value="évengelisation" disabled>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-lg-3 col-sm-6">
                                                <label for="">Date début</label>
                                                <h5 href="#"> <i class="lnr lnr-calendar-full"></i> 12-01-2018</h5>
                                            </div>

                                            <div class="col-lg-3 col-sm-6">
                                                <label for="">Heure début</label>
                                                <h5 href="#"> <i class="lnr lnr-clock"></i> 08:10</h5>
                                            </div>
                                            <div class="col-lg-3 col-sm-6">
                                                <label for="">Date Fin</label>
                                                <h5 href="#"> <i class="lnr lnr-calendar-full"></i> 12-01-2019</h5>
                                            </div>
                                            <div class="col-lg-2 col-sm-6">
                                                <label for="">Heure fin </label>
                                                <h5 href="#"> <i class="lnr lnr-clock"></i> 18:10</h5>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="">Description </label>
                                        <textarea rows="4" maxlength="999" id="desc" class="form-control" name="description" placeholder="Description" disabled>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                        tempor incididunt ut labore et dolore magna.</textarea>

                                    </div>
                                    <div class="form-group">
                                        <label for="">Ville </label>
                                        <input type="text" class="form-control" id="theme" name="libelle" value="Abidjan" disabled>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <div class="card">
                                <div class="card-body">
                                    <h6>2- Médias <em style="color:red;">*</em> </h6>
                                    <hr>
                                    <p>Votre image qui sera affiché en entète de votre annonce afin de donner un appercu sur votre annonce.</p>
                                    <div class="form-group">

                                        <div class="container">
                                            <div class="row">
                                                <div class="col-lg-12 col-sm-12">
                                                    <img src="{{ asset('/assets/image/blog/post4.jpg') }}" alt="post">
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="">Url de la video Youtube </label>
                                        <input type="text" class="form-control" id="theme" name="libelle" value="https://www.youtube.com/watch?v=mJQBrHMUOfs" disabled>
                                    </div>
                                    <div class="form-group">
                                        <div style="margin-bottom:5px;" class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="customCheckSiteWeb">
                                            <label class="custom-control-label" for="customCheckSiteWeb"> URL du site Web</label>
                                        </div>
                                        <input type="text" class="form-control" id="theme" name="libelle" value="https://www.monsite.ci" disabled>

                                    </div>
                                </div>
                            </div>
                            <br>
                            <div class="card">
                                <div class="card-body">
                                    <h6>3- Coordonnées (Ces informations seront affichées sur l'annonce)</h6><hr>
                                    <div class="form-group">
                                        <label for="">Numéro de téléphone</label>
                                        <input type="text" class="form-control" id="theme" name="libelle" value="+225 77 83 29 82" disabled>
                                    </div>
                                    <div class="form-group">
                                        <label for="">Adresse email de l'annonce</label>
                                        <input type="email" class="form-control" id="theme" name="libelle" value="sande@gmail.com" disabled>
                                    </div>

                                </div>
                            </div>
                            <div class="form-group">
                                <button class="btn stepp pull-right mt-3" type="submit">Finish!</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

        <style type="text/css">

            
            .stepwizard-step p {
                margin-top: 0px;
                color:#666;
            }
            .stepwizard-row {
                display: table-row;
            }
            .stepwizard {
                display: table;
                width: 100%;
                position: relative;
            }
            .stepwizard-step button[disabled] {
                /*opacity: 1 !important;
                filter: alpha(opacity=100) !important;*/
            }
            .stepwizard .btn.disabled, .stepwizard .btn[disabled], .stepwizard fieldset[disabled] .btn {
                opacity:1 !important;
                color:#bbb;
            }
            .stepwizard-row:before {
                top: 14px;
                bottom: 0;
                position: absolute;
                content:" ";
                width: 100%;
                height: 1px;
                background-color: #ccc;
                z-index: 0;
            }
            .stepwizard-step {
                display: table-cell;
                text-align: center;
                position: relative;
            }
            .btn-circle {
                width: 30px;
                height: 30px;
                text-align: center;
                padding: 6px 0;
                font-size: 12px;
                line-height: 1.428571429;
                border-radius: 15px;
            }
            .stepp{
                background-color: #5fc6c9;
                color: #ffffff;
            }
        </style>

@endsection
