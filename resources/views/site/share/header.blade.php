<!--================Header Area =================-->
        <header class="header_area">
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
                            <ul class="nav navbar-nav menu_nav ml-auto">
                                <li class="nav-item"><a class="nav-link text_white" href="#">Se connecter</a></li>
                                <li class="nav-item"><a class="nav-link text_white" href="#">S'inscrire</a></li>
                            </ul>
                            <ul class="nav navbar-nav navbar-right">
                                <li class="nav-item">
                                    <a href="#" class="genric-btn radius" style="background: #5fc6c9"><strong class="text-white">Publier</strong></a>
                                </li>
                            </ul>
                        </div>
                    </div>
            </nav>
            <div class="container">
                <div class="row">
                    <div class="row col-lg-11">
                        <input style="border-radius: 4px 0 0 4px;" type="text" class="col-lg-4  form-control d-inline-block ml-0 mr-0" id="name" name="name" placeholder="Enter your name">
                        <div style="border-radius: 0%; border:1px solid #ced4da" class="col-lg-4 form-select d-inline-block ml-0 mr-0" id="default-select2">
                            <select style="display: none;">
                                @foreach($category as $cat)
                                    <option value="{{ $cat->id }}">{{ $cat->libelle }}</option>
                                @endforeach
                            </select>
                            <div class="nice-select" tabindex="0">
                                <span class="current">Categorie</span>
                                <ul class="list">
                                    @foreach($category as $cat)
                                        <li data-value="{{ $cat->id }}" class="option">{{ $cat->libelle }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                        <div style=" border-radius: 0; border:1px solid #ced4da" class="form-select d-inline-block ml-0 mr-0 col-lg-4" id="default-select2">
                            <select style="display: none;">
                                @foreach($diocese as $d)
                                    @foreach($diocese as $d)
                                        <option value="1">{{ $d->nom }}</option>
                                    @endforeach
                                @endforeach
                            </select>
                            <div class="nice-select" tabindex="0">
                                <span class="current" disabled="">Diocèse</span>
                                <ul class="list">
                                    @foreach($diocese as $d)
                                        <li data-value="1" class="option">{{ $d->nom }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="row col-lg-1">
                        <button style="border-radius:0 4px 4px 0;" class="col-12 btn"><i class="fa fa-search"></i></button>
                    </div>
                </div>
            </div>
            <style>
                .flex-container {
                    display: flex;
                    flex-wrap: nowrap;
                    flex-direction: row;
                    max-width: 1200px;
                    overflow-y: hidden;
                    overflow-x: auto;
                }
            </style>
            <nav class="navbar navbar-expand-lg navbar-light">
                <div class="container">
                    <div>
                        <ul class="flex-container nav navbar-nv mr-auto">
                            @for($i=0; $i<15; $i++)
                                @foreach($category as $cat)
                                    <li class="nav-item"><a class="nav-link" href="#">{{ $cat->libelle }}({{ $cat->count() }})</a></li>
                                @endforeach
                            @endfor
                        </ul>
                    </div>
                </div>
            </nav>
        </header>
        <!--================Header Area =================-->
