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
                        <li><a href="{{ route('home') }}">Accueil</a></li>
                        <li><a href="{{ route('home') }}">Catégorie</a></li>
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
                                 <h3 class="panel-title">Mot de passe oublié </h3>
                            </div>
                            <form class="contact_form">
                            <div class="panel-body">
                                <div class="form-group">
                                    <label for="">Adresse e_mail <em style="color:red;">*</em> </label>
                                    <input type="email" class="form-control" required name="theme" placeholder="Entrer Identifiant">
                                </div>
                                
                                <div class="form-group">
                                    <div class="alert alert-primary" style="text-align:center;" role="alert">
                                        Lorsque vous soumettez votre adresse E-mail, un message de reinitialisation vous sera envoyé ! 
                                    </div>
                                </div>
                                <button class="btn btn-success pull-right stepp mt-3" type="submit">Réinitialiser</button>
                            </div>
                        </form>
                        </div>
               </div>
            </div>
        </div>

@endsection
