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
                            <p><small>Thème</small></p>
                        </div>
                        <div class="stepwizard-step col-xs-3">
                            <a href="#step-2" type="button" class="btn stepp" disabled="disabled">2</a>
                            <p><small>Catégorie</small></p>
                        </div>
                        <div class="stepwizard-step col-xs-3">
                            <a href="#step-3" type="button" class="btn tn-circle stepp" disabled="disabled">3</a>
                            <p><small>Informations</small></p>
                        </div>
                        <div class="stepwizard-step col-xs-3">
                            <a href="#step-4" type="button" class="btn stepp" disabled="disabled"><i class="material-icons">&#xE417;</i></a>
                            <p><small>Resumé</small></p>
                        </div>
                    </div>
                </div>

                <form role="form" class="contact_form">
                    <div class="panel panel-primary setup-content" id="step-1">
                        <div class="panel-heading">
                             <h3 class="panel-title">Thème <span style="color: red">*</span></h3>
                        </div>
                        <div class="panel-body">
                            <div class="form-group">
                                <input type="text" class="form-control" required name="theme" placeholder="Entre le thème ici">
                            </div>
                            <div class="form-group">
                                <div class="alert alert-primary" style="text-align:center;" role="alert">
                                    Plus le texte est descriptif, plus l'annonce est comprehensive
                                </div>
                            </div>
                            <div class="form-group">
                                <center><a href="https://fortifietoi.ci/annonce/particuliere">Votre annonce n'a pas de thème? </a></center>
                            </div>
                            <button class="btn nextBtn pull-right stepp mt-3" type="button">Next</button>
                        </div>
                    </div>

                    <div class="panel panel-primary setup-content" id="step-2">
                         <div class="panel-heading">
                             <h3 class="panel-title">Catégories <span style="color: red">*</span></h3>
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
                                                <input type="date" id="date_debut" required class="datepicker form-control" name="dateDebut" placeholder="Heure debut">
                                            </div>

                                            <div class="col-lg-3 col-sm-6">
                                                <label for="">Heure début <em style="color:red;">*</em></label>
                                                <select class="form-control" name="HeureDebut" id="heure_debut">
                                                    <option value="">Choisir</option>
                                                    <option value="00:00">00:00</option> <option value="00:30">00:30</option>
                                                        <option value="01:00">01:00</option> <option value="01:30">01:30</option>
                                                        <option value="02:00">02:00</option> <option value="02:30">02:30</option>
                                                        <option value="03:00">03:00</option> <option value="03:30">03:30</option>
                                                        <option value="04:00">04:00</option> <option value="04:30">04:30</option>
                                                        <option value="05:00">05:00</option> <option value="05:30">05:30</option>
                                                        <option value="06:00">06:00</option> <option value="06:30">06:30</option>
                                                        <option value="07:00">07:00</option> <option value="07:30">07:30</option>
                                                        <option value="08:00">08:00</option> <option value="08:30">08:30</option>
                                                        <option value="09:00">09:00</option> <option value="09:30">09:30</option>
                                                        <option value="10:00">10:00</option> <option value="10:30">10:30</option>
                                                        <option value="11:00">11:00</option> <option value="11:30">11:30</option>
                                                        <option value="12:00">12:00</option> <option value="12:30">12:30</option>
                                                        <option value="13:00">13:00</option> <option value="13:30">13:30</option>
                                                        <option value="14:00">14:00</option> <option value="14:30">14:30</option>
                                                        <option value="15:00">15:00</option> <option value="15:30">15:30</option>
                                                        <option value="16:00">16:00</option> <option value="16:30">16:30</option>
                                                        <option value="17:00">17:00</option> <option value="17:30">17:30</option>
                                                        <option value="18:00">18:00</option> <option value="18:30">18:30</option>
                                                        <option value="19:00">19:00</option> <option value="19:30">19:30</option>
                                                        <option value="20:00">20:00</option> <option value="20:30">20:30</option>
                                                        <option value="21:00">21:00</option> <option value="21:30">21:30</option>
                                                        <option value="22:00">22:00</option> <option value="22:30">22:30</option>
                                                        <option value="23:00">23:00</option> <option value="23:30">23:30</option>
                                                </select>
                                            </div>
                                            <div class="col-lg-1 col-sm-12">
                                                <label for="">&nbsp;</label>
                                                <p style="text-align: center;margin-top: 8px;">au</p>
                                            </div>
                                            <div class="col-lg-3 col-sm-6">
                                                <label for="">Date fin <em style="color:red;">*</em></label>
                                                <input type="date" id="date_fin" required class=" form-control" name="dateFin" placeholder="Heure fin">
                                            </div>
                                            <div class="col-lg-2 col-sm-6">
                                                <label for="">Heure fin <em style="color:red;">*</em></label>
                                                <select class="form-control" name="HeureFin" id="heure_fin">
                                                    <option value="">Choisir</option>
                                                    <option value="00:00">00:00</option>
                                                    <option value="00:30">00:30</option>
                                                    <option value="01:00">01:00</option> <option value="01:30">01:30</option>
                                                    <option value="02:00">02:00</option> <option value="02:30">02:30</option>
                                                    <option value="03:00">03:00</option> <option value="03:30">03:30</option>
                                                    <option value="04:00">04:00</option> <option value="04:30">04:30</option>
                                                    <option value="05:00">05:00</option> <option value="05:30">05:30</option>
                                                    <option value="06:00">06:00</option> <option value="06:30">06:30</option>
                                                    <option value="07:00">07:00</option> <option value="07:30">07:30</option>
                                                    <option value="08:00">08:00</option> <option value="08:30">08:30</option>
                                                    <option value="09:00">09:00</option> <option value="09:30">09:30</option>
                                                    <option value="10:00">10:00</option> <option value="10:30">10:30</option>
                                                    <option value="11:00">11:00</option> <option value="11:30">11:30</option>
                                                    <option value="12:00">12:00</option> <option value="12:30">12:30</option>
                                                    <option value="13:00">13:00</option> <option value="13:30">13:30</option>
                                                    <option value="14:00">14:00</option> <option value="14:30">14:30</option>
                                                    <option value="15:00">15:00</option> <option value="15:30">15:30</option>
                                                    <option value="16:00">16:00</option> <option value="16:30">16:30</option>
                                                    <option value="17:00">17:00</option> <option value="17:30">17:30</option>
                                                    <option value="18:00">18:00</option> <option value="18:30">18:30</option>
                                                    <option value="19:00">19:00</option> <option value="19:30">19:30</option>
                                                    <option value="20:00">20:00</option> <option value="20:30">20:30</option>
                                                    <option value="21:00">21:00</option> <option value="21:30">21:30</option>
                                                    <option value="22:00">22:00</option> <option value="22:30">22:30</option>
                                                    <option value="23:00">23:00</option> <option value="23:30">23:30</option>
                                                </select>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="">Description </label>
                                        <textarea rows="4" id="desc" class="form-control" name="description" placeholder="Description"></textarea>

                                    </div>
                                    <div class="form-group">
                                        <label for="" style="margin-bottom: 10px">Ville <em style="color:red;">*</em></label>
                                        <select id="communes" name="commune_id" required class="form-control col-lg-12 col-sm-12">
                                            @foreach($ville as $v)
                                                <option value="{{ $v->id }}">{{ $v->libelle }}</option>
                                            @endforeach
                                    </select>
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
                                        <label for="">Thème </label>
                                        <input type="text" class="form-control" id="theme" name="libelle" value="theme" disabled>
                                    </div>
                                    <div class="form-group">
                                        <label for="">Catégorie </label>
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
