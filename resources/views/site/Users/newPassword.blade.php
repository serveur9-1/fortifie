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
                                 <h3 class="panel-title">Reinitialiser le mot de passe </h3>
                            </div>
                            <form class="contact_form">
                            <div class="panel-body">
                                <div class="form-group">
                                    <label for="">Mot de passe<em style="color:red;">*</em> </label>
                                    <input type="password" class="form-control" required name="theme" placeholder="Entrer mot de passe">
                                </div>
                                <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                                <div class="form-group">
                                    <label for="">Saisissez a nouveau<em style="color:red;">*</em> </label>
                                    <input type="password" class="form-control" required name="theme" placeholder="Saisissez a nouveau">
                                </div>
                                <div class="form-group">
                                    <div class="alert alert-primary" style="text-align:center;" role="alert">
                                        Une fois le mot de passe réinitialisé l'ancien ne sera plus valide
                                    </div>
                                </div>
                                <button class="btn btn-success pull-right stepp mt-3" type="button">réinitialiser</button>
                            </div>
                        </form>
                        </div>
               </div>
            </div>
        </div>

@endsection






