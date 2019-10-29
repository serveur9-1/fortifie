@extends('layout')
@section('title','Contact')
@section('content')
    
    <!--================Breadcrumb Area =================-->
        <section class="breadcrumb_area br_image" style="height: 200px">
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
        <section class="contact_area section_gap">

            <div class="container">
                <div class="section-top-border">
                        <h3 class="mb-15 title_color">Nous contacter</h3>
                        <div class="row">
                            <div class="col-lg-12">
                                <blockquote class="generic-blockquote">
                                    “Pour une quelconque préoccupation vous pouvez nous laisser un message afin que nous remedions a votre preoccupation au plus vite.
                                    nous sommes disponibles du lundi au vendredi entre 7h et 17h .
                                    Merci de bien vouloir renseigner se formulaire afin que nous sachons votre preoccuapation.” 
                                </blockquote>
                            </div>
                        </div>
                    </div>
                <div class="row">
                    <div class="col-md-3">
                        <div class="contact_info">
                            <div class="info_item">
                                <i class="lnr lnr-home"></i>
                                <h6>Abidjan, Côte d'Ivoire</h6>
                                <p>Eglise Catholique</p>
                            </div>
                            <div class="info_item">
                                <i class="lnr lnr-phone-handset"></i>
                                <h6><a href="#">00 (440) 9865 562</a></h6>
                                <p>Lun au ven 9h à 17h</p>
                            </div>
                            <div class="info_item">
                                <i class="lnr lnr-envelope"></i>
                                <h6><a href="#">support@fortifietoi.com</a></h6>
                                <p>Disponible chaque jours!</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-9">
                        <form class="row contact_form" action="contact_process.php" method="post" id="contactForm" novalidate="novalidate">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" id="name" name="name" placeholder="Entrez votre nom">
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control" id="email" name="email" placeholder="Entrer votre adresse e-mail">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" id="subject" name="subject" placeholder="Entrer un sujet">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <textarea class="form-control" name="message" id="message" rows="1" placeholder="Enter votre Message"></textarea>
                                </div>
                            </div>
                            <div class="col-md-12 text-right">
                                <button type="submit" value="submit" class="btn btn_hover btn_hover_two">Envoyer le message</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <!--================Contact Area =================-->
               <!--================Contact Success and Error message Area =================-->
        <div id="success" class="modal modal-message fade" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <i class="fa fa-close"></i>
                        </button>
                        <h2>Thank you</h2>
                        <p>Your message is successfully sent...</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modals error -->

        <div id="error" class="modal modal-message fade" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <i class="fa fa-close"></i>
                        </button>
                        <h2>Sorry !</h2>
                        <p> Something went wrong </p>
                    </div>
                </div>
            </div>
        </div>
        <!--================End Contact Success and Error message Area =================-->

@endsection