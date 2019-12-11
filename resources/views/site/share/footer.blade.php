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


        <div class="container mb-5" style="margin-top: 100px">
            <h4 class="text-uppercase">Nos partenaires</h4>
            <section class="customer-logos slider mt-5">
                @foreach($g_partenaire as $p)
                <a target="_blank" href="{{ $p->url }}">
                    <div class="slide"
                        style='height: 60px ;background: url({{ asset("/assets/img/partenaires/$p->logo") }}); background-repeat: no-repeat; background-position: center; background-size: contain'>
                    </div>
                </a>
                @endforeach
            </section>

        </div>

        <!-- LOADING PART ============================== -->

                <!-- LOADING -->

    <style>

        .loading{
            background:#6c3191;
            position:fixed;
            z-index:9999;
            height:100%;
            width:100%;
            top:0;
            left:0;
            display:block;
            

        }
        body{
            overflow-y:hidden !important;
        }

        svg {
            display: none;
        }
        .blobs {
            filter: url(#goo);
            width: 300px;
            height: 300px;
            position: relative;
            overflow: hidden;
            border-radius: 70px;
            transform-style: preserve-3d;
            position:absolute;
            top:50%;
            left:50%;
            transform:translate(-50%,-50%)
        }
        .blobs .blob-center {
            transform-style: preserve-3d;
            position: absolute;
            background: #fff200;
            top: 50%;
            left: 50%;
            width: 30px;
            height: 30px;
            transform-origin: left top;
            transform: scale(0.9) translate(-50%, -50%);
            animation: blob-grow linear 3.4s infinite;
            border-radius: 50%;
            box-shadow: 0 -10px 40px -5px #fff200;
        }
        .blob {
            position: absolute;
            background: #fff200;
            top: 50%;
            left: 50%;
            width: 30px;
            height: 30px;
            border-radius: 50%;
            animation: blobs ease-out 3.4s infinite;
            transform: scale(0.9) translate(-50%, -50%);
            transform-origin: center top;
            opacity: 0;
        }
        .blob:nth-child(1) {
            -webkit-animation-delay: 0.2s;
            -moz-animation-delay: 0.2s;
            -ms-animation-delay: 0.2s;
            -o-animation-delay: 0.2s;
            animation-delay: 0.2s;
        }
        .blob:nth-child(2) {
            -webkit-animation-delay: 0.4s;
            -moz-animation-delay: 0.4s;
            -ms-animation-delay: 0.4s;
            -o-animation-delay: 0.4s;
            animation-delay: 0.4s;
        }
        .blob:nth-child(3) {
            -webkit-animation-delay: 0.6s;
            -moz-animation-delay: 0.6s;
            -ms-animation-delay: 0.6s;
            -o-animation-delay: 0.6s;
            animation-delay: 0.6s;
        }
        .blob:nth-child(4) {
            -webkit-animation-delay: 0.8s;
            -moz-animation-delay: 0.8s;
            -ms-animation-delay: 0.8s;
            -o-animation-delay: 0.8s;
            animation-delay: 0.8s;
        }
        .blob:nth-child(5) {
            -webkit-animation-delay: 1s;
            -moz-animation-delay: 1s;
            -ms-animation-delay: 1s;
            -o-animation-delay: 1s;
            animation-delay: 1s;
        }
        @-moz-keyframes blobs {
            0% {
                opacity: 0;
                transform: scale(0) translate(calc(-330px - 50%), -50%);
            }
            1% {
                opacity: 1;
            }
            35%, 65% {
                opacity: 1;
                transform: scale(0.9) translate(-50%, -50%);
            }
            99% {
                opacity: 1;
            }
            100% {
                opacity: 0;
                transform: scale(0) translate(calc(330px - 50%), -50%);
            }
        }

        @-webkit-keyframes blobs {
            0% {
                opacity: 0;
                transform: scale(0) translate(calc(-330px - 50%), -50%);
            }
            1% {
                opacity: 1;
            }
            35%, 65% {
                opacity: 1;
                transform: scale(0.9) translate(-50%, -50%);
            }
            99% {
                opacity: 1;
            }
            100% {
                opacity: 0;
                transform: scale(0) translate(calc(330px - 50%), -50%);
            }
        }

        @-ms-keyframes blobs {
            0% {
                opacity: 0;
                transform: scale(0) translate(calc(-330px - 50%), -50%);
            }
            1% {
                opacity: 1;
            }
            35%, 65% {
                opacity: 1;
                transform: scale(0.9) translate(-50%, -50%);
            }
            99% {
                opacity: 1;
            }
            100% {
                opacity: 0;
                transform: scale(0) translate(calc(330px - 50%), -50%);
            }
        }

        @-o-keyframes blobs {
            0% {
                opacity: 0;
                transform: scale(0) translate(calc(-330px - 50%), -50%);
            }
            1% {
                opacity: 1;
            }
            35%, 65% {
                opacity: 1;
                transform: scale(0.9) translate(-50%, -50%);
            }
            99% {
                opacity: 1;
            }
            100% {
                opacity: 0;
                transform: scale(0) translate(calc(330px - 50%), -50%);
            }
        }

        @keyframes blobs {
            0% {
                opacity: 0;
                transform: scale(0) translate(calc(-330px - 50%), -50%);
            }
            1% {
                opacity: 1;
            }
            35%, 65% {
                opacity: 1;
                transform: scale(0.9) translate(-50%, -50%);
            }
            99% {
                opacity: 1;
            }
            100% {
                opacity: 0;
                transform: scale(0) translate(calc(330px - 50%), -50%);
            }
        }


        @-moz-keyframes blob-grow {
            0%, 39% {
                transform: scale(0) translate(-50%, -50%);
            }
            40%, 42% {
                transform: scale(1, 0.9) translate(-50%, -50%);
            }
            43%, 44% {
                transform: scale(1.2, 1.1) translate(-50%, -50%);
            }
            45%, 46% {
                transform: scale(1.3, 1.2) translate(-50%, -50%);
            }
            47%, 48% {
                transform: scale(1.4, 1.3) translate(-50%, -50%);
            }
            52% {
                transform: scale(1.5, 1.4) translate(-50%, -50%);
            }
            54% {
                transform: scale(1.7, 1.6) translate(-50%, -50%);
            }
            58% {
                transform: scale(1.8, 1.7) translate(-50%, -50%);
            }
            68%, 70% {
                transform: scale(1.7, 1.5) translate(-50%, -50%);
            }
            78% {
                transform: scale(1.6, 1.4) translate(-50%, -50%);
            }
            80%, 81% {
                transform: scale(1.5, 1.4) translate(-50%, -50%);
            }
            82%, 83% {
                transform: scale(1.4, 1.3) translate(-50%, -50%);
            }
            84%, 85% {
                transform: scale(1.3, 1.2) translate(-50%, -50%);
            }
            86%, 87% {
                transform: scale(1.2, 1.1) translate(-50%, -50%);
            }
            90%, 91% {
                transform: scale(1, 0.9) translate(-50%, -50%);
            }
            92%, 100% {
                transform: scale(0) translate(-50%, -50%);
            }
        }

        @-webkit-keyframes blob-grow {
            0%, 39% {
                transform: scale(0) translate(-50%, -50%);
            }
            40%, 42% {
                transform: scale(1, 0.9) translate(-50%, -50%);
            }
            43%, 44% {
                transform: scale(1.2, 1.1) translate(-50%, -50%);
            }
            45%, 46% {
                transform: scale(1.3, 1.2) translate(-50%, -50%);
            }
            47%, 48% {
                transform: scale(1.4, 1.3) translate(-50%, -50%);
            }
            52% {
                transform: scale(1.5, 1.4) translate(-50%, -50%);
            }
            54% {
                transform: scale(1.7, 1.6) translate(-50%, -50%);
            }
            58% {
                transform: scale(1.8, 1.7) translate(-50%, -50%);
            }
            68%, 70% {
                transform: scale(1.7, 1.5) translate(-50%, -50%);
            }
            78% {
                transform: scale(1.6, 1.4) translate(-50%, -50%);
            }
            80%, 81% {
                transform: scale(1.5, 1.4) translate(-50%, -50%);
            }
            82%, 83% {
                transform: scale(1.4, 1.3) translate(-50%, -50%);
            }
            84%, 85% {
                transform: scale(1.3, 1.2) translate(-50%, -50%);
            }
            86%, 87% {
                transform: scale(1.2, 1.1) translate(-50%, -50%);
            }
            90%, 91% {
                transform: scale(1, 0.9) translate(-50%, -50%);
            }
            92%, 100% {
                transform: scale(0) translate(-50%, -50%);
            }
        }

        @-ms-keyframes blob-grow {
            0%, 39% {
                transform: scale(0) translate(-50%, -50%);
            }
            40%, 42% {
                transform: scale(1, 0.9) translate(-50%, -50%);
            }
            43%, 44% {
                transform: scale(1.2, 1.1) translate(-50%, -50%);
            }
            45%, 46% {
                transform: scale(1.3, 1.2) translate(-50%, -50%);
            }
            47%, 48% {
                transform: scale(1.4, 1.3) translate(-50%, -50%);
            }
            52% {
                transform: scale(1.5, 1.4) translate(-50%, -50%);
            }
            54% {
                transform: scale(1.7, 1.6) translate(-50%, -50%);
            }
            58% {
                transform: scale(1.8, 1.7) translate(-50%, -50%);
            }
            68%, 70% {
                transform: scale(1.7, 1.5) translate(-50%, -50%);
            }
            78% {
                transform: scale(1.6, 1.4) translate(-50%, -50%);
            }
            80%, 81% {
                transform: scale(1.5, 1.4) translate(-50%, -50%);
            }
            82%, 83% {
                transform: scale(1.4, 1.3) translate(-50%, -50%);
            }
            84%, 85% {
                transform: scale(1.3, 1.2) translate(-50%, -50%);
            }
            86%, 87% {
                transform: scale(1.2, 1.1) translate(-50%, -50%);
            }
            90%, 91% {
                transform: scale(1, 0.9) translate(-50%, -50%);
            }
            92%, 100% {
                transform: scale(0) translate(-50%, -50%);
            }
        }

        @-o-keyframes blob-grow {
            0%, 39% {
                transform: scale(0) translate(-50%, -50%);
            }
            40%, 42% {
                transform: scale(1, 0.9) translate(-50%, -50%);
            }
            43%, 44% {
                transform: scale(1.2, 1.1) translate(-50%, -50%);
            }
            45%, 46% {
                transform: scale(1.3, 1.2) translate(-50%, -50%);
            }
            47%, 48% {
                transform: scale(1.4, 1.3) translate(-50%, -50%);
            }
            52% {
                transform: scale(1.5, 1.4) translate(-50%, -50%);
            }
            54% {
                transform: scale(1.7, 1.6) translate(-50%, -50%);
            }
            58% {
                transform: scale(1.8, 1.7) translate(-50%, -50%);
            }
            68%, 70% {
                transform: scale(1.7, 1.5) translate(-50%, -50%);
            }
            78% {
                transform: scale(1.6, 1.4) translate(-50%, -50%);
            }
            80%, 81% {
                transform: scale(1.5, 1.4) translate(-50%, -50%);
            }
            82%, 83% {
                transform: scale(1.4, 1.3) translate(-50%, -50%);
            }
            84%, 85% {
                transform: scale(1.3, 1.2) translate(-50%, -50%);
            }
            86%, 87% {
                transform: scale(1.2, 1.1) translate(-50%, -50%);
            }
            90%, 91% {
                transform: scale(1, 0.9) translate(-50%, -50%);
            }
            92%, 100% {
                transform: scale(0) translate(-50%, -50%);
            }
        }

        @keyframes blob-grow {
            0%, 39% {
                transform: scale(0) translate(-50%, -50%);
            }
            40%, 42% {
                transform: scale(1, 0.9) translate(-50%, -50%);
            }
            43%, 44% {
                transform: scale(1.2, 1.1) translate(-50%, -50%);
            }
            45%, 46% {
                transform: scale(1.3, 1.2) translate(-50%, -50%);
            }
            47%, 48% {
                transform: scale(1.4, 1.3) translate(-50%, -50%);
            }
            52% {
                transform: scale(1.5, 1.4) translate(-50%, -50%);
            }
            54% {
                transform: scale(1.7, 1.6) translate(-50%, -50%);
            }
            58% {
                transform: scale(1.8, 1.7) translate(-50%, -50%);
            }
            68%, 70% {
                transform: scale(1.7, 1.5) translate(-50%, -50%);
            }
            78% {
                transform: scale(1.6, 1.4) translate(-50%, -50%);
            }
            80%, 81% {
                transform: scale(1.5, 1.4) translate(-50%, -50%);
            }
            82%, 83% {
                transform: scale(1.4, 1.3) translate(-50%, -50%);
            }
            84%, 85% {
                transform: scale(1.3, 1.2) translate(-50%, -50%);
            }
            86%, 87% {
                transform: scale(1.2, 1.1) translate(-50%, -50%);
            }
            90%, 91% {
                transform: scale(1, 0.9) translate(-50%, -50%);
            }
            92%, 100% {
                transform: scale(0) translate(-50%, -50%);
            }
        }

        </style>

<div class="loading" id="js--loading">
    <div class="blobs">
        <div class="blob-center"></div>
        <div class="blob"></div>
        <div class="blob"></div>
        <div class="blob"></div>
        <div class="blob"></div>
        <div class="blob"></div>
        <div class="blob"></div>
    </div>

    <svg xmlns="http://www.w3.org/2000/svg" version="1.1">
    <defs>
        <filter id="goo">
        <feGaussianBlur in="SourceGraphic" stdDeviation="10" result="blur" />
        <feColorMatrix in="blur" mode="matrix" values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 18 -7" result="goo" />
        <feBlend in="SourceGraphic" in2="goo" />
        </filter>
    </defs>
    </svg>
</div>

<script src="{{ asset('/dist/js/jquery-3.2.1.min.js') }}"></script>
<script>
    $('document').ready( function() { 
        $("#js--loading").hide();
        $('body,html').css('overflow','auto');
    });
</script>



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
                                        <li><a href="{{ route('faq')}}">A propos de nous</a></li>
                                        <li><a href="{{ route('faq')}}">Avantage de l'inscription</a></li>
                                        <li><a href="{{ route('contact')}}">Nous contacter</a></li>
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
                                        <li><a href="{{ route('faq')}}">Condition d'utilisation</a></li>
                                        <li><a href="{{ route('faq')}}">Politique de confidentialité</a></li>
                                        <li><a href="{{ route('faq')}}">Règle d'affichage</a></li>
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
                                        <li><a href="{{ route('faq')}}">Conférence épiscopale de CI</a></li>
                                        <li><a href="{{ route('album')}}">Notre Galérie</a></li>
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
                                        <li><a href="{{ route('faq')}}">Centre d'Aide</a></li>
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
