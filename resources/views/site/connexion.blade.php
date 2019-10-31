@extends('layout_right')
@section('title','Connexion')
@section('bread')

    <!--================Breadcrumb Area =================-->
        <section class="breadcrumb_area blog_banner_two">
            <div class="overlay bg-parallax" data-stellar-ratio="0.8" data-stellar-vertical-offset="0" data-background=""></div>
            <div class="container">
                <div class="page-cover text-center">
                    <h2 class="page-cover-tittle f_48">Connexion</h2>
                    <ol class="breadcrumb">
                        <li><a href="#">Accueil</a></li>
                        <li><a href="#">Catégorie</a></li>
                        <li class="active">Publication</li>
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
                    <div class="panel panel-primary">
                            <div class="panel-heading">
                                 <h3 class="panel-title">Connexion </h3>
                            </div>
                            <form class="contact_form">
                            <div class="panel-body">
                                <div class="form-group">
                                    <label for="">Adresse e_mail <em style="color:red;">*</em> </label>
                                    <input type="email" class="form-control" required name="theme" placeholder="Entrer Identifiant">
                                </div>
                                <div class="form-group">
                                    <label for="">Mot de passe<em style="color:red;">*</em> </label>
                                    <input type="password" class="form-control" required name="theme" placeholder="Entrer mot de passe">
                                </div>
                                <div class="form-group">
                                    <div class="alert alert-primary" style="text-align:center;" role="alert">
                                        Si vous n'avez pas de compte , veuillez creer un compte en cliquant  <a href="#">ici</a>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <center><a href="https://fortifietoi.ci/annonce/particuliere">mot de passe oublié? </a></center>
                                </div>
                                <button class="btn btn-success pull-right stepp mt-3" type="button">Connexion</button>
                            </div>
                        </form>
                        </div>
               </div>
            </div>
        </div>

@endsection
