@extends('layout_right')
@section('title','Mot de passe Oublié')
@section('bread')

    <!--================Breadcrumb Area =================-->
        <section class="breadcrumb_area blog_banner_two">
            <div class="overlay bg-parallax" data-stellar-ratio="0.8" data-stellar-vertical-offset="0" data-background=""></div>
            <div class="container">
                <div class="page-cover text-center">
                    <h2 class="page-cover-tittle f_48">Mot de passe Oublié</h2>
                    <ol class="breadcrumb">
                        <li><a href="{{ route('home') }}">Accueil</a></li>
                        <li class="active">Mot de passe Oublié</li>
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
                            @if (session('status'))
                                <div class="alert alert-success" role="alert">
                                    {{ session('status') }}
                                </div>
                            @endif
                            <form class="contact_form" method="POST" action="{{ route('password.email') }}">

                            @csrf

                            <div class="panel-body">
                                <div class="form-group">
                                    <label for="">Adresse e_mail <em style="color:red;">*</em> </label>
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                </div>
                                
                                <div class="form-group">
                                    <div class="alert alert-primary" style="text-align:center;" role="alert">
                                        Lorsque vous soumettez votre adresse E-mail, un message de reinitialisation vous sera envoyé ! 
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Réinitialiser') }}
                                </button>
                            </div>
                        </form>
                        </div>
               </div>
            </div>
        </div>

@endsection

