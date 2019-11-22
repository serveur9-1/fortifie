@extends('layout_right')
@section('title','publication sans thème')
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
                        <li class="active">Publier une annonce</li>
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

               <form enctype="multipart/form-data" role="form" class="contact_form" @if(!$edit) action="{{ route('validAnnonce') }}" @else action="{{ route('updateAnnonce',['id' => $a->id]) }}" @endif method="post" >
                    @csrf
                    <div class="panel panel-primary setup-content" id="step-1">
                        <div class="panel-heading">
                            <h3 class="panel-title">Catégories <span style="color: red">*</span></h3>
                        </div>
                        <div class="panel-body">
                            <div id="list-example" class="list-group">
                                @foreach($subCategory as $c)
                                    <div class="list-group-item list-group-item-action">{{ $c->category->libelle }}
                                        <div class="primary-radio" style="float: right;background-color: #5fc6c9">
                                            <input value="{{ $c->id }}" class="js--categorie" categorie="{{ $c->libelle }}" type="radio" id="{{ $c->id }}" name="category" @if($edit)  @if($c->id == $a->category->id) checked @endif @endif >
                                            <label for="{{ $c->id }}"></label>
                                        </div>
                                    </div>
                                @endforeach

                                <input type="text" value="true" name="sans_titre" hidden>

                                @error('category')
                                <p class="text-danger">{{ $message }}</p>
                                @enderror

                            </div>
                            <button class="btn stepp nextBtn pull-right mt-3" type="button">Suivant</button>
                        </div>
                    </div>

                    <div class="panel panel-primary setup-content" id="step-2">
                         <div class="panel-heading">
                             <h3 class="panel-title">Sous catégories <span style="color: red">*</span></h3>
                        </div>
                        <div class="panel-body">
                            <div id="list-example" class="list-group">
                                @foreach($subCategory as $c)
                                    <div class="list-group-item list-group-item-action">{{ $c->libelle }}
                                        <div class="primary-radio" style="float: right;background-color: #5fc6c9">
                                            <input value="{{ $c->libelle }}" class="js--subcategorie" subcategorie="{{ $c->libelle }}" @if($edit)  @if($c->libelle == $a->titre) checked @endif @endif type="radio" id="{{ $c->libelle }}" name="titre">
                                            <label for="{{ $c->libelle }}"></label>
                                        </div>
                                    </div>
                                @endforeach
                                @error('titre')
                                <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <button class="btn stepp nextBtn pull-right mt-3" type="button">Suivant</button>
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
                                    <div class="form-group mb-4">
                                        <label for="">Durée de l'annonce</label>
                                        <div class="row">
                                            <div class="col-lg-12">
                                               <div class="row mt-2">
                                                    <div class="col-md-12 ml-3">
                                                        <div class="clearfix"></div>
                                                        <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                                                        <div class="panel panel-default">
                                                              <div class="panel-heading" role="tab" id="headingTwoo">
                                                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwoo" aria-expanded="true" aria-controls="collapseTwoo"><label for="">Durée précise </label>
                                                                </a>
                                                              </div>
                                                              <div id="collapseTwoo" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingTwoo">
                                                                <div class="panel-body">
                                                                 <div class="row">

                                                                    <div class="col-lg-3 col-sm-6">
                                                                        <label for="">Date debut <em style="color:red;">*</em></label>
                                                                        <input @if($edit) value="{{ $a->debut }}" @else {{ old('debut') }} @endif type="date" id="date_debut" required class="datepicker form-control @error('debut') is-invalid @enderror" name="debut" placeholder="Date debut">
                                                                        @error('debut')
                                                                        <p class="text-danger">{{ $message }}</p>
                                                                        @enderror
                                                                    </div>

                                                                    <div class="col-lg-3 col-sm-6">
                                                                        <label for="">Heure debut <em style="color:red;">*</em> </label>
                                                                        <input @if($edit) value="{{ $a->heure_debut }}" @else {{ old('heure_debut') }} @endif type="time" id="heure_debut" required class="datepicker form-control @error('heure_debut') is-invalid @enderror" name="heure_debut" placeholder="Heure debut">
                                                                        @error('heure_debut')
                                                                        <p class="text-danger">{{ $message }}</p>
                                                                        @enderror
                                                                    </div>

                                                                    <div class="col-lg-3 col-sm-6">
                                                                        <label for="">Date fin <em style="color:red;">*</em></label>
                                                                        <input @if($edit) value="{{ $a->fin }}" @else {{ old('fin') }} @endif  type="date" id="date_fin" required class=" form-control @error('fin') is-invalid @enderror" name="fin" placeholder="Heure fin">
                                                                        @error('fin')
                                                                        <p class="text-danger">{{ $message }}</p>
                                                                        @enderror
                                                                    </div>

                                                                    <div class="col-lg-3 col-sm-6">
                                                                        <label for="">Heure fin <em style="color:red;">*</em></label>
                                                                        <input @if($edit) value="{{ $a->heure_fin }}" @else {{ old('heure_fin') }} @endif  type="time" id="heure_fin" required class=" form-control @error('heure_fin') is-invalid @enderror" name="heure_fin" placeholder="Heure fin">
                                                                        @error('heure_fin')
                                                                        <p class="text-danger">{{ $message }}</p>
                                                                        @enderror
                                                                    </div>

                                                                </div>
                                                                </div>
                                                              </div>
                                                        </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-12">
                                               <div class="row mt-2">
                                                    <div class="col-md-12 ml-3">
                                                        <div class="clearfix"></div>
                                                        <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                                                        <div class="panel panel-default">
                                                              <div class="panel-heading" role="tab" id="headingThree">
                                                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="true" aria-controls="collapseThree"><label for="">Durée étendue </label>
                                                                </a>
                                                              </div>
                                                              <div id="collapseThree" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingThree">
                                                                <div class="panel-body">
                                                                 <div class="row text-center">
                                                                    <h5>Tous les :</h5>

                                                                    <div class="col-lg-2 col_sm-2">
                                                                        <div class="switch-wrap d-flex justify-content-between ">
                                                                        <p>Lundi</p>
                                                                        <div class="confirm-checkbox ml-0">
                                                                            <input type="checkbox" id="confirm-checkbox1">
                                                                            <label for="confirm-checkbox1"></label>
                                                                        </div>
                                                                    </div>
                                                                    </div>

                                                                    <div class="col-lg-2 col_sm-2">
                                                                        <div class="switch-wrap d-flex justify-content-between ">
                                                                        <p>Mardi</p>
                                                                        <div class="confirm-checkbox">
                                                                            <input type="checkbox" id="confirm-checkbox2">
                                                                            <label for="confirm-checkbox2"></label>
                                                                        </div>
                                                                    </div>
                                                                    </div>
                                                                    <div class="col-lg-2 col_sm-2">
                                                                        <div class="switch-wrap d-flex justify-content-between ">
                                                                        <p>Mercredi</p>
                                                                        <div class="confirm-checkbox">
                                                                            <input type="checkbox" id="confirm-checkbox3">
                                                                            <label for="confirm-checkbox3"></label>
                                                                        </div>
                                                                    </div>
                                                                    </div>
                                                                    <div class="col-lg-2 col_sm-2">
                                                                        <div class="switch-wrap d-flex justify-content-between ">
                                                                        <p>jeudi</p>
                                                                        <div class="confirm-checkbox">
                                                                            <input type="checkbox" id="confirm-checkbox4">
                                                                            <label for="confirm-checkbox4"></label>
                                                                        </div>
                                                                    </div>
                                                                    </div>
                                                                    <div class="col-lg-2 col_sm-2">
                                                                        <div class="switch-wrap d-flex justify-content-between ">
                                                                        <p>Vendredi</p>
                                                                        <div class="confirm-checkbox">
                                                                            <input type="checkbox" id="confirm-checkbox5">
                                                                            <label for="confirm-checkbox5"></label>
                                                                        </div>
                                                                    </div>
                                                                    </div>
                                                                    <div class="col-lg-2 col_sm-2">
                                                                        <div class="switch-wrap d-flex justify-content-between ">
                                                                        <p>Samedi</p>
                                                                        <div class="confirm-checkbox">
                                                                            <input type="checkbox" id="confirm-checkbox6">
                                                                            <label for="confirm-checkbox6"></label>
                                                                        </div>
                                                                    </div>
                                                                    </div>

                                                                    <div class="col-lg-2 col_sm-2">
                                                                        <div class="switch-wrap d-flex justify-content-between ">
                                                                        <p>Samedi</p>
                                                                        <div class="confirm-checkbox">
                                                                            <input type="checkbox" id="confirm-checkbox7">
                                                                            <label for="confirm-checkbox7"></label>
                                                                        </div>
                                                                    </div>
                                                                    </div>

                                                                </div>
                                                                </div>
                                                              </div>
                                                        </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="">Description </label>
                                        <textarea rows="4" id="desc" class="form-control @error('description') is-invalid @enderror" name="description" placeholder="Description">@if($edit) {{ $a->description }} @else {{ old('description') }} @endif</textarea>
                                        @error('description')
                                        <p class="text-danger">{{ $message }}</p>
                                        @enderror

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
                                                @if($edit)
                                                    <div class="row">
                                                        <img src='{{ asset("assets/img/articles/$a->img") }}' alt="">
                                                    </div>
                                                @endif
                                                <div class="col-lg-12 col-sm-12">

                                                    <div class="card">
                                                        <div class="card-body">
                                                            <div class="white-box">
                                                                <input @if(!$edit) required @endif type="file" name="img" class=" @error('img') is-invalid @enderror">
                                                                @error('img')
                                                                <p class="text-danger">{{ $message }}</p>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <br>
                            <div class="card">
                                <div class="card-body">
                                    <h6>3- Coordonnées (Ces informations seront affichées sur l'annonce)</h6><hr>
                                    <div class="form-group">
                                        <label for="">Numéro de téléphone</label>
                                        <input @if($edit) value="{{ $a->contact_telephone }}" @else {{ old('contact_telephone') }} @endif type="number" id="contacts" name="contact_telephone" class="form-control @error('contact_telephone') is-invalid @enderror">
                                        @error('contact_telephone')
                                        <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="">Adresse email de l'annonce</label>
                                        <input @if($edit) value="{{ $a->contact_email }}" @else {{ old('contact_email') }} @endif type="email" id="email" name="contact_email" class=" @error('contact_email') is-invalid @enderror form-control">
                                        @error('contact_email')
                                        <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>

                                </div>
                            </div>

                            <button class="btn stepp nextBtn pull-right mt-3" type="button" id="confirmer">Suivant</button>
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
                                       <label for="">Catégorie </label>
                                       <input type="text" id="cat1" class="form-control" disabled>
                                   </div>
                                   <div class="form-group">
                                       <label for="">Sous-catégorie </label>
                                       <input type="text" id="subCat1" class="form-control" disabled>
                                   </div>
                                   <div class="form-group">
                                       <div class="row">
                                           <div class="col-lg-3 col-sm-6">
                                               <label for="">Date début</label>
                                               <h5 href="#" id="date1"> <i class="fa fa-calendar-full"></i> 12-01-2018</h5>
                                           </div>

                                           <div class="col-lg-3 col-sm-6">
                                               <label for="">Heure début</label>
                                               <h5 href="#" id="heure1"> <i class="fa fa-clock"></i> 08:10</h5>
                                           </div>
                                           <div class="col-lg-3 col-sm-6">
                                               <label for="">Date Fin</label>
                                               <h5 href="#" id="date2"> <i class="fa fa-calendar-full"></i> 12-01-2019</h5>
                                           </div>
                                           <div class="col-lg-2 col-sm-6">
                                               <label for="">Heure fin </label>
                                               <h5 href="#" id="heure2"> <i class="fa fa-clock"></i> 18:10</h5>
                                           </div>

                                       </div>
                                   </div>
                                   <div class="form-group">
                                       <label for="">Description </label>
                                       <p id="desc1"> </p>

                                   </div>
                               </div>
                           </div>
                           <br>
                           <div class="card">
                               <div class="card-body">
                                   <h6>3- Coordonnées (Ces informations seront affichées sur l'annonce)</h6><hr>
                                   <div class="form-group">
                                       <label for="">Numéro de téléphone</label>
                                       <input type="text" id="contact1" class="form-control" disabled>
                                   </div>
                                   <div class="form-group">
                                       <label for="">Adresse email de l'annonce</label>
                                       <input type="email" id="email1" class="form-control" disabled>
                                   </div>

                               </div>
                           </div>
                           <div class="form-group">
                               <button class="btn stepp pull-right mt-3" type="submit">@if($edit) Modifier @else Enregistrer @endif maintenant</button>
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
