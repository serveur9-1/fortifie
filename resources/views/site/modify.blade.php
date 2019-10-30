@extends('layout_right')
@section('title','modifier information')
@section('bread')

    <!--================Breadcrumb Area =================-->
    <section class="breadcrumb_area blog_banner_two">
        <div class="overlay bg-parallax" data-stellar-ratio="0.8" data-stellar-vertical-offset="0" data-background=""></div>
        <div class="container">
            <div class="page-cover text-center">
                <h2 class="page-cover-tittle f_48">Modifier Mes informations</h2>
                <ol class="breadcrumb">
                    <li><a href="#">Accueil</a></li>
                    <li><a href="#">Informations</a></li>
                    <li class="active">Modification</li>
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
                <div class="col">
                    <div class="card">
                        <div class="">
                            <div class="panel-heading text-center">
                                <h3 class="panel-title">Informations Personnelle</h3>
                            </div>
                            <div class="panel-body">
                                <div class="card">
                                    <div class="card-body">
                                        <h6> 1- Information</h6><hr>
                                        <div class="form-group">
                                            <label for="">Diocèce Rattaché </label>
                                            <input type="text" class="form-control" id="theme" name="libelle" value="Diocèse de Grand Bassam" disabled>
                                        </div>
                                        <div class="form-group">
                                            <label for="">Nom de la paroisse </label>
                                            <input type="text" class="form-control" id="theme" name="libelle" value="Notre dame de l'assemption Koumassi" disabled>
                                        </div>
                                        <div class="form-group">
                                            <label for=""> E-mail </label>
                                            <input type="text" class="form-control" id="theme" name="libelle" value=" Nda@gmail.com" disabled>
                                        </div>
                                        <div class="form-group">
                                            <label for=""> Téléphone mobile </label>
                                            <input type="text" class="form-control" id="theme" name="libelle" value=" +225 65 12 23 33" disabled>
                                        </div>
                                        <div class="form-group">
                                            <label for=""> Téléphone fixe </label>
                                            <input type="text" class="form-control" id="theme" name="libelle" value=" +225 22 22 22 22" disabled>
                                        </div>
                                        <div class="form-group">
                                            <label for="">Description </label>
                                            <textarea rows="4" id="desc" class="form-control" name="description" placeholder="Description" disabled>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
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
                                    </div>
                                </div>
                                <br>
                                <div class="form-group text-center">
                                    <button class="btn btn-primary mb-3 mt-3 pr-3" type="submit">Modifier!</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
