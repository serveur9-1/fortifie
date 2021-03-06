<!--================Header Area =================-->
        <header class="header_area" style="background: #fff !important">
            <nav class="navbar navbar-expand-lg navbar-light haut" id="dispa">
                    <div class="container">
                        <!-- Brand and toggle get grouped for better mobile display -->
                        <a class="navbar-brand logo_h" href="{{ route('home') }}"><img style="width: 200px" src="{{ asset('/assets/image/Logo.png') }}" alt=""></a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <div class="collapse navbar-collapse offset" id="navbarSupportedContent">

                        @auth
                        @if(!auth()->user()->is_admin && !auth()->user()->is_staff)
                            
                            <ul class="nav navbar-nav navbar-right ml-auto">
                                <li class="nav-item">
                                    <a href="{{ route('publier') }}" class="genric-btn radius" style="background: #5fc6c9"><strong class="text-white">Publier</strong></a>
                                </li>
                            </ul>
                            <ul class="nav navbar-nav menu_nav col-md-1 ml-2">
                                <li  class="dropdown nav-item">
                                    <a style="color:#fff;" href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" id="dropdownMenuButton"  aria-haspopup="true" aria-expanded="false"><span class="fa fa-user w-5 fa-2x"  aria-hidden="true"></span><span class="caret ml-0"></span>

                                    </a>
                                    <ul class="dropdown-menu col-md-11" role="menu">
                                    <li class="dropdown-item">
                                        <a href="{{ route('myAnnonce') }}">Mes annonces </a>
                                    </li>
                                    <li class="dropdown-item">
                                        <a href="{{ route('profil') }}">Mon profil </a>
                                    </li>
                                    <li class="dropdown-divider"></li>
                                    <li class="dropdown-item">
                                        <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                        document.getElementById('logout-form').submit();">
                                        <strong>Déconnexion</strong>
                                        </a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            @csrf
                                        </form>
                                    </li>
                                    </ul>
                                </li>
                            </ul>
                        @endif
                        @endauth
                        @guest
                            <ul class="nav navbar-nav menu_nav ml-auto">
                                <li class="nav-item"><a class="nav-link text_white" href="{{ route('login') }}">Se connecter</a></li>
                                <li class="nav-item"><a class="nav-link text_white" href="{{ route('register') }}">S'inscrire</a></li>
                            </ul>
                        @endguest

                        </div>
                    </div>
            </nav>
            {{-- <div class="container" id="dispa1" style="background: #ffffff !important">
                <form class="contact_form" action="{{ route('query') }}" method="get">
                <div class="row">

                    <div class="row col-lg-11 col-11 col-md-12">
                        <input style="border-radius: 4px 0 0 4px;color: black" type="text" maxlength="30" minlength="1" class="col-lg-3 place form-control d-inline-block ml-0 mr-0 col-12" id="name" name="title" placeholder="Entrez le titre">

                        <input style="border-radius: 4px 0 0 4px;color: black" type="date" class="col-lg-3  form-control d-inline-block ml-0 mr-0 col-12 form_hidden" size="1" name="date">

                           <!--  <select name="category"  data-live-search="true" class="form-control selectpicker" style="display: none;">
                                    <option disabled>Toutes les catégories</option>
                                    @foreach($category as $cat)
                                        <option value="{{ $cat->id }}">{{ $cat->libelle }}</option>
                                    @endforeach
                            </select> -->
                        <div class=" col-lg-3 place form-control form-select d-inline-block ml-0 mr-0 form_hidden" style="padding: 0px !important">

                             <select name="category"  class="form-control form-select">
                                    <option selected="disabled">Toutes les catégories</option>
                                    @foreach($category as $cat)
                                        <option value="{{ $cat->id }}">{{ $cat->libelle }}</option>
                                    @endforeach
                            </select>

                        </div><!-- 
                        <div class="autocomplete col-lg-3 place form-control d-inline-block ml-0 mr-0 form_hidden" style="padding: 0px !important">

                            <input  style="padding: 0px !important;border: 0px;width: 100%;height: 100%;text-align: center;border-radius: 4px 0 0 4px;color: black" type="text" name="myCountry" placeholder="Selectionner une catégorie">

                        </div> -->

                        <div class="autocomplete col-lg-3 place form-control d-inline-block ml-0 mr-0 form_hidden" style="padding: 0px !important">

                            <input id="myInput" style="padding: 0px !important;border: 0px;width: 100%;height: 100%;text-align: center" type="text" name="myCountry" placeholder="Selectionner un lieu">

                        </div>
                            <!-- <select name="diocese" data-live-search="true" class="form-control selectpicker" style="display: none;">
                                    <option disabled>Tous les diocèse</option>
                                    @foreach($diocese as $d)
                                        <option value="{{ $d->id }}">{{ $d->nom }}</option>
                                    @endforeach
                            </select> -->
                    </div>
                    <div class="row col-lg-1 col-2">
                        <button style="border-radius:0 4px 4px 0; background-color: #5fc6c9;
                        color: #fff;text-align: center;margin:0px !important " class="col-12 btn"><i class="fa fa-search"></i></button>
                    </div>

                </div>
                </form>
            </div> --}}
            <style>
                .flex-container {
                    display: flex;
                    flex-wrap: nowrap;
                    flex-direction: row;
                    overflow-y: auto;
                    overflow-x: auto;

                }

                li{
                    margin-right: 15px;
                }

                @media (min-width: 1200px) {
                    .flex-container {
                        max-width: 1200px;
                    }
                }

                @media (max-width: 1200px) {
                    .flex-container {
                       width: 1000px;
                    }
                }

                @media (max-width: 1000px) {
                    .flex-container {
                        width: 900px;
                    }
                }

                @media (max-width: 900px) {
                    .flex-container {
                        width: 800px;
                    }
                    .form_hidden{
                        display: none !important
                    }
                    #nav_cat{
                        padding: 0px !important
                    }
                    .text_white{
                        color: #6c2f91 !important;
                        text-align: center;
                    }
                }

                @media (max-width: 800px) {
                    .flex-container {
                        width: 700px;
                    }
                    .form_hidden{
                        display: none !important
                    }
                    #nav_cat{
                        padding: 0px !important
                    }
                    .text_white{
                        color: #6c2f91 !important;
                        text-align: center;
                    }
                }

                @media (max-width: 700px) {
                    .flex-container {
                        width: 600px;
                    }
                    .form_hidden{
                        display: none !important
                    }
                    #nav_cat{
                        padding: 0px !important
                    }
                    .text_white{
                        color: #6c2f91 !important;
                        text-align: center;
                    }
                }

                @media (max-width: 600px) {
                    .flex-container {
                        width: 500px;
                    }
                    .form_hidden{
                        display: none !important
                    }
                    #nav_cat{
                        padding: 0px !important
                    }
                    .text_white{
                        color: #6c2f91 !important;
                        text-align: center;
                    }
                }

                @media (max-width: 500px) {
                    .flex-container {
                        width: 400px;
                    }
                    .form_hidden{
                        display: none !important
                    }
                    #nav_cat{
                        padding: 0px !important
                    }
                    .text_white{
                        color: #6c2f91 !important;
                        text-align: center;
                    }
                }

                @media (max-width: 400px) {
                    .flex-container {
                        width: 330px;
                    }
                    .form_hidden{
                        display: none !important
                    }
                    #nav_cat{
                        padding: 0px !important
                    }
                    .text_white{
                        color: #6c2f91 !important;
                        text-align: center;
                    }
                }

                @media (max-width: 300px) {
                    .flex-container {
                        width: 300px;
                    }
                    .form_hidden{
                        display: none !important
                    }
                    #nav_cat{
                        padding: 0px !important;
                    }
                    .text_white{
                        color: #6c2f91 !important;
                        text-align: center;
                    }
                }
                /*the container must be positioned relative:*/
                .autocomplete {
                  position: relative;
                  display: inline-block;
                }


                .autocomplete-items {
                  position: absolute;
                  border-bottom: none;
                  border-top: none;
                  z-index: 99;
                  /*position the autocomplete items to be the same width as the container:*/
                  left: 0;
                  right: 0;
                }

                .autocomplete-items div {
                  cursor: pointer;
                  background-color: #fff; 
                }

                /*when hovering an item:*/
                .autocomplete-items div:hover {
                  background-color: #e9e9e9; 
                }

                /*when navigating through the items using the arrow keys:*/
                .autocomplete-active {
                  background-color: DodgerBlue !important; 
                  color: #ffffff; 
                }

            </style>
            <nav class="navbar navbar-expand-lg navbar-light" id="nav_cat" style="height: 30px ; overflow: hidden;padding-top: 15px;border-bottom: 2px solid #8e5bac">
                <div class="container">
                    <div>
                        <ul class="flex-container nav navbar-nv mr-auto">
                                @foreach($category as $cat)
                                    <li class="nav-item" id="color"><a class="nav-link" href="{{ route('categorie', ['id' => $cat->id]) }}">{{ $cat->libelle }}</a></li>
                                @endforeach
                        </ul>
                    </div>
                </div>
            </nav>
        </header>






        
