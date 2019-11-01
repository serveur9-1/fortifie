<!--================Header Area =================-->
        <header class="header_area" style="background: #fff !important">
            <nav class="navbar navbar-expand-lg navbar-light haut">
                    <div class="container">
                        <!-- Brand and toggle get grouped for better mobile display -->
                        <a class="navbar-brand logo_h" href="#"><img style="width: 200px" src="{{ asset('/assets/image/Logo.png') }}" alt=""></a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                            <!-- <ul class="nav navbar-nav menu_nav ml-auto">
                                <li class="nav-item"><a class="nav-link text_white" href="#">Se connecter</a></li>
                                <li class="nav-item"><a class="nav-link text_white" href="#">S'inscrire</a></li>
                            </ul> -->

                            <ul class="nav navbar-nav menu_nav ml-auto">
                                <li  class="dropdown nav-item">
                                  <a style="color:#fff;" href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" id="dropdownMenuButton"  aria-haspopup="true" aria-expanded="false"><span class="fa fa-user w-5"  aria-hidden="true"></span><span class="caret ml-0"></span>

                                  </a>
                                  <ul class="dropdown-menu" role="menu">
                                    <li class="dropdown-item">
                                        <a href="https://fortifietoi.ci/utilisateur/annonces">Mes annonces(10) </a>
                                    </li>
                                    <li class="dropdown-item">
                                        <a href="https://fortifietoi.ci/utilisateur">Mon profil </a>
                                    </li>
                                    <li class="dropdown-divider"></li>
                                    <li class="dropdown-item">
                                      <a href="#">
                                        Déconnexion
                                      </a>
                                    </li>
                                  </ul>
                                </li>
                            </ul>

                            <ul class="nav navbar-nav navbar-right">
                                <li class="nav-item">
                                    <a href="#" class="genric-btn radius" style="background: #5fc6c9"><strong class="text-white">Publier</strong></a>
                                </li>
                            </ul>
                        </div>
                    </div>
            </nav>
            <div class="container" style="background: #ffffff !important">
                <div class="row">
                    <form class="col-md-12 col-lg-12 p-0" action="{{ route('query') }}" method="get">
                        <div class="row col-lg-11">
                            <input style="border-radius: 4px 0 0 4px;" type="text" maxlength="30" minlength="1" class="col-lg-4  form-control d-inline-block ml-0 mr-0" id="name" name="title" placeholder="Entrez le titre">
                            <div style="border-radius: 0%; border:1px solid #ced4da" class="col-lg-4 form-select d-inline-block ml-0 mr-0" id="default-select2">
                                <select name="category" style="display: none;">
                                    <option value="">Toutes les catégories</option>
                                @foreach($category as $cat)
                                        <option value="{{ $cat->id }}">{{ $cat->libelle }}</option>
                                    @endforeach
                                </select>
                                <div class="nice-select" tabindex="0">
                                    <span class="current">Categorie</span>
                                    <ul class="list">
                                        <li data-value="" class="option">Toutes les catégories</li>
                                    @foreach($category as $cat)
                                            <li data-value="{{ $cat->id }}" class="option">{{ $cat->libelle }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                            <div style=" border-radius: 0; border:1px solid #ced4da" class="form-select d-inline-block ml-0 mr-0 col-lg-4" id="default-select2">
                                <select name="diocese" style="display: none;">
                                    @foreach($diocese as $d)
                                        <option value="">Tous les diocèse</option>
                                    @foreach($diocese as $d)
                                            <option value="{{ $d->id }}">{{ $d->nom }}</option>
                                        @endforeach
                                    @endforeach
                                </select>
                                <div class="nice-select" tabindex="0">
                                    <span class="current" disabled="">Diocèse</span>
                                    <ul class="list">
                                        <li data-value="" class="option">Tous les diocèses</li>
                                    @foreach($diocese as $d)
                                            <li data-value="{{ $d->id }}" class="option">{{ $d->nom }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="row col-lg-1">
                            <button type="submit" style="border-radius:0 4px 4px 0;" class="col-12 btn"><i class="fa fa-search"></i></button>
                        </div>
                    </form>
                </div>
            </div>
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
                }

                @media (max-width: 800px) {
                    .flex-container {
                        width: 700px;
                    }
                }

                @media (max-width: 700px) {
                    .flex-container {
                        width: 600px;
                    }
                }

                @media (max-width: 600px) {
                    .flex-container {
                        width: 500px;
                    }
                }

                @media (max-width: 500px) {
                    .flex-container {
                        width: 400px;
                    }
                }

                @media (max-width: 400px) {
                    .flex-container {
                        width: 330px;
                    }
                }

                @media (max-width: 300px) {
                    .flex-container {
                        width: 300px;
                    }
                }

            </style>
            <nav class="navbar navbar-expand-lg navbar-light">
                <div class="container">
                    <div>
                        <ul class="flex-container nav navbar-nv mr-auto">
                                @foreach($category as $cat)
                                    <li class="nav-item"><a class="nav-link" href="{{ route('categorie', [ 'id' => $cat->id]) }}">{{ $cat->libelle }}</a></li>
                                @endforeach
                        </ul>
                    </div>
                </div>
            </nav>
        </header>
        <!--================Header Area =================-->
