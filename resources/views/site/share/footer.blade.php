         <style type="text/css">
          /** scroll to top page **/
        #bouton_haut {
          display: none;
          position: fixed;
          bottom: 20px;
          right: 30px;
          z-index: 99;
          font-size: 18px;
          border: none;
          outline: none;
          background-color: #5fc6c9;
          color: white;
          cursor: pointer;
          padding: 8px;
          width: 45px;
          height: 45px;
          border-radius: 4px;
        }

        #bouton_haut:hover {
          background-color: #6b2f90;
        }
      </style> 
        <div class="container">
            <button onclick="topFunction()" id="bouton_haut" title="Vers le haut">
            <i class="fa fa-arrow-up"></i>
            </button>
        </div>
        <!--================Blog Area =================-->


        <div class="container mb-5">
            <h4>Nos partenaires</h4>
            <section class="customer-logos slider">
                <div class="slide"><img src="https://image.freepik.com/free-vector/3d-box-logo_1103-876.jpg"></div>
                <div class="slide"><img src="https://image.freepik.com/free-vector/blue-tech-logo_1103-822.jpg"></div>
                <div class="slide"><img src="https://image.freepik.com/free-vector/colors-curl-logo-template_23-2147536125.jpg"></div>
                <div class="slide"><img src="https://image.freepik.com/free-vector/abstract-cross-logo_23-2147536124.jpg"></div>
                <div class="slide"><img src="https://image.freepik.com/free-vector/football-logo-background_1195-244.jpg"></div>
                <div class="slide"><img src="https://image.freepik.com/free-vector/background-of-spots-halftone_1035-3847.jpg"></div>
                <div class="slide"><img src="https://image.freepik.com/free-vector/retro-label-on-rustic-background_82147503374.jpg"></div>
            </section>

        </div>
        <!--================ start footer Area  =================-->
        <footer class="footer-area section_gap pt-5 pb-5">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3  col-md-6 col-sm-6">
                        <div class="single-footer-widget">
                            <h6 class="footer_title">A propos de FORTIFIE-TOI</h6>
                            <div class="row">
                                <div class="col-12">
                                    <ul class="list_style">
                                        <li><a href="#">A propos de nous</a></li>
                                        <li><a href="#">Avantage de l'inscription</a></li>
                                        <li><a href="#">Nous contacter</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="single-footer-widget">
                            <h6 class="footer_title">Renseignements</h6>
                            <div class="row">
                                <div class="col-12">
                                    <ul class="list_style">
                                        <li><a href="#">Condition d'utilisation</a></li>
                                        <li><a href="#">Politique de confidentialité</a></li>
                                        <li><a href="#">Règle d'affichage</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="single-footer-widget">
                            <h6 class="footer_title">Liens utiles</h6>
                            <div class="row">
                                <div class="col-12">
                                    <ul class="list_style">
                                        <li><a href="#">Conférence épiscopale de CI</a></li>
                                        <li><a href="#">Notre Galérie</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="single-footer-widget instafeed">
                            <h6 class="footer_title">Soutien</h6>
                            <div class="row">
                                <div class="col-12">
                                    <ul class="list_style">
                                        <li><a href="#">Centre d'Aide</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="border_line"></div>
                <div class="row footer-bottom d-flex justify-content-between align-items-center">
                    <p class="col-lg-8 col-sm-8 footer-text m-0">
                        Copyright &copy; 2018 - <script>document.write(new Date().getFullYear());</script> Tous droits reservés | Developed by <a href="#" target="_blank">GayaTech</a></p>
                </div>
            </div>
        </footer>
        <!--================ End footer Area  =================-->
        <style>
            .slick-slide {
                margin: 0px 20px;
            }

            .slick-slide img {
                width: 100%;
            }

            .slick-slider
            {
                position: relative;
                display: block;
                box-sizing: border-box;
                -webkit-user-select: none;
                -moz-user-select: none;
                -ms-user-select: none;
                user-select: none;
                -webkit-touch-callout: none;
                -khtml-user-select: none;
                -ms-touch-action: pan-y;
                touch-action: pan-y;
                -webkit-tap-highlight-color: transparent;
            }

            .slick-list
            {
                position: relative;
                display: block;
                overflow: hidden;
                margin: 0;
                padding: 0;
            }
            .slick-list:focus
            {
                outline: none;
            }
            .slick-list.dragging
            {
                cursor: pointer;
                cursor: hand;
            }

            .slick-slider .slick-track,
            .slick-slider .slick-list
            {
                -webkit-transform: translate3d(0, 0, 0);
                -moz-transform: translate3d(0, 0, 0);
                -ms-transform: translate3d(0, 0, 0);
                -o-transform: translate3d(0, 0, 0);
                transform: translate3d(0, 0, 0);
            }

            .slick-track
            {
                position: relative;
                top: 0;
                left: 0;
                display: block;
            }
            .slick-track:before,
            .slick-track:after
            {
                display: table;
                content: '';
            }
            .slick-track:after
            {
                clear: both;
            }
            .slick-loading .slick-track
            {
                visibility: hidden;
            }

            .slick-slide
            {
                display: none;
                float: left;
                height: 100%;
                min-height: 1px;
            }
            [dir='rtl'] .slick-slide
            {
                float: right;
            }
            .slick-slide img
            {
                display: block;
            }
            .slick-slide.slick-loading img
            {
                display: none;
            }
            .slick-slide.dragging img
            {
                pointer-events: none;
            }
            .slick-initialized .slick-slide
            {
                display: block;
            }
            .slick-loading .slick-slide
            {
                visibility: hidden;
            }
            .slick-vertical .slick-slide
            {
                display: block;
                height: auto;
                border: 1px solid transparent;
            }
            .slick-arrow.slick-hidden {
                display: none;
            }
        </style>


        <script src="{{ asset('js/share.js') }}"></script>
