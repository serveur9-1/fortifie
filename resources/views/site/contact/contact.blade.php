@extends('layout')
@section('title','Contact')
@section('content')

    <!--================Breadcrumb Area =================-->
        <section class="breadcrumb_area br_image" style="height: 50px !important ; margin-bottom: 0px !important">
            <div class="container">
                <div class="page-cover text-center">
                    <h2 class="page-cover-tittle">Contactez-nous</h2>
                    <ol class="breadcrumb">
                        <li><a href="">Accueil</a></li>
                        <li class="active">Contactez-nous</li>
                    </ol>
                </div>
            </div>
        </section>
        <!--================Breadcrumb Area =================-->

        <!--================Contact Area =================-->
        <section class="contact_area section_gap" style="margin-top: 0px !important">

            <div class="container">
                <div class="section-top-border">
                        <h3 class="mb-15 title_color">Nous contacter</h3>
                        <div class="row">
                            <div class="col-lg-12">
                                <blockquote class="generic-blockquote">
                                    Pour un quelconque besoin, laissez-nous un message. Votre préoccupation sera résolue dans les plus brefs délais. <br>
                                    Nous sommes disponibles du lundi au vendredi entre 7h et 17h. Merci de bien vouloir renseigner ce formulaire.
                                </blockquote>
                            </div>
                        </div>
                    </div>
                <div class="row">
                    <div class="col-md-3">
                        <div class="contact_info">
                            @foreach($config as $c)
                            <div class="info_item mb-2">
                                <i class="lnr lnr-home"></i>
                                <h6>{{ $c->localite }}</h6>
                            </div>
                            <div class="info_item mb-2">
                                <i class="lnr lnr-phone-handset"></i>
                                <h6><a href="#">(+255) {{ $c->telephone }}</a></h6>
                            </div>
                            <div class="info_item mb-2">
                                <i class="lnr lnr-envelope"></i>
                                <h6><a href="#">{{ $c->email }}</a></h6>
                            </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="col-md-9">
                        <form class="row contact_form" action="{{ route('sendMail') }}" method="post" id="contactForm">
                            @csrf
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" id="name" name="senderName" placeholder="Entrez votre nom">
                                    @error('senderName')
                                        <small class="text-warning" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </small>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control" id="email" name="senderEmail" placeholder="Entrer votre adresse e-mail">
                                    @error('senderEmail')
                                    <small class="text-warning" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </small>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" id="subject" name="subject" placeholder="Entrer un sujet">
                                    @error('subject')
                                    <small class="text-warning" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </small>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <textarea maxlength="500" class="form-control" name="message" id="message" rows="1" placeholder="Enter votre Message"></textarea>
                                    @error('message')
                                    <small class="text-warning" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </small>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-12" style="display: flex;">
                                <div class="g-recaptcha" data-sitekey="6LeghscUAAAAAElX3NC_isG2fhQkMwWeyLEomeYm"></div>
                                
                                <div class="col-md-6 text-right">
                                <button type="submit" value="submit" class="btn btn_hover btn_hover_two">Envoyer</button>
                            </div>
                                <br/>
                            </div>
                            
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <!--================Contact Area =================-->

@endsection



