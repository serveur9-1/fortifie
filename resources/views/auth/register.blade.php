@section('content')
    <div class="col-lg-8">
        <div class="blog_left_sidebar">
            <div class="container">
                <div class="col">
                    <div class="panel-heading"><h3 class="panel-title">{{ __('Inscription') }}</h3></div>
                        <div class="alert alert-info mb-5 col-md-8">
                            <p>Si votre paroisse ne figure pas dans la liste, veuillez nous envoyer un message en précisant le diocèse, la ville et le nom de votre paroisse.  Si tel est le cas, <b><a style="font-weight: bold;color: #6c2f91" href="{{ route('contact') }}">cliquez ici</a></b>.
                            </p>
                            <b class="text-dark">Nb : Ne continuez pas votre inscription s’il vous plait. Veuillez patienter jusqu’à l’ajout des informations adéquates dans un délai de un (1) jour maximum. Cela permettra de retrouver vos annonces facilement.</b>
                        </div>
                        

                            <form method="POST" action="{{ route('validUsers') }}" class="contact_form col-md-8" enctype="multipart/form-data">
                            @csrf
                            <style>
                                .nice-select, .list{ width:100% !important }
                                .selectpicker{
                                    background-color: #fff !important;
                                }
                                
                            </style>

                                <div class="form-group mb-5">
                                    <label for="">{{ __('Diocèse rattaché') }}<em style="color:red;">*</em></label>
                                    <select name="diocese_id" data-live-search="true" class="form-control selectpicker">
                                        <option disabled>Sélectionnez un Diocèse</option>
                                        @foreach($paroisse as $d)
                                            <option value="{{ $d->id }}">{{ $d->nom }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="form-group mb-5">
                                    <label for="">{{ __('Ville') }}<em style="color:red;">*</em></label>
                                    <select name="ville_id" data-live-search="true" class="form-control selectpicker">
                                        <option disabled>Sélectionnez une ville</option>
                                        @foreach($paroisse as $d)
                                            <option value="{{ $d->id }}">{{ $d->nom }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="form-group mb-5">
                                    <label for="exampleDropdown">{{ __('Paroisse rattachée') }}<em style="color:red;">*</em></label>
                                    <select name="paroisse_id" data-live-search="true" class="form-control selectpicker" style="background-color: #fff">
                                        <option disabled>Sélectionnez une paroisse</option>
                                        @foreach($paroisse as $d)
                                            <option value="{{ $d->id }}">{{ $d->nom }}</option>
                                        @endforeach
                                    </select>
                                    @error('paroisse_id')
                                        <br>
                                        <span class="text-danger" role="alert">
                                            <strong>Désolé un compte est déjà associé à cette paroisse.</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="form-group mb-4">
                                    <label for="">{{ __('Nom d\'utilisateur') }}</label>
                                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autofocus>

                                    @error('name')
                                    <span class="text-danger" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="form-group mb-4">
                                    <label for="">Nom<em style="color:red;">*</em> (Paroisse, Groupe, Communauté, Ministère, Mouvement…)</label>
                                    <input id="name" type="text" class="form-control @error('communaute') is-invalid @enderror" name="communaute" value="{{ old('communaute') }}" required autofocus>

                                    @error('communaute')
                                        <span class="text-danger" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="form-group mb-4">
                                    <label for="">{{ __('Adresse e-mail') }}<em style="color:red;">*</em> </label>
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                                    @error('email')
                                        <span class="text-danger" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="form-group mb-4">
                                    <label for="">{{ __('Téléphone Mobile') }}<em style="color:red;">*</em></label>
                                    <input id="telephone_mobile" type="text" class="form-control @error('email') is-invalid @enderror" name="telephone" value="{{ old('telephone') }}" required >

                                    @error('telephone')
                                    <span class="text-danger" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

                                <div class="form-group mb-4">
                                    <label for="">{{ __('Mot de passe') }}<em style="color:red;">*</em> </label>
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                    @error('password')
                                    <span class="text-danger" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

                                <div class="form-group mb-4">
                                    <label for="">{{__('Confirmer Mot de passe') }}<em style="color:red;">*</em> </label>
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                </div>

                                <div class="form-group mb-4">
                                    <label for="">Image de profil</label><em style="color:red;">*</em>
                                    <p>Inclure une image de 1000px et au plus de 2000px de haut ou de large.
                                        <br> Cette image représentera la paroisse, le groupe, la communauté, le ministère, le mouvement… </p>
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-lg-12 col-sm-12">
                                                <div class="card">
                                                    <div class="card-body">
                                                        <div class="white-box">
                                                            <input required type="file" id="input-file-now1" name="img" class="files dropify">
                                                            @error('img')
                                                                <span class="text-danger" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="g-recaptcha" data-sitekey="6LeghscUAAAAAElX3NC_isG2fhQkMwWeyLEomeYm"></div>
                                </div>
                                <div class="form-group">
                                    <button class="btn btn-block mt-3 radius" style="background: #5fc6c9; color: #fff" type="submit"> {{ __('Demande de création de compte') }}</button>
                                </div>
                            </form>

                        </div>

                    </div>
                </div>
            </div>

@endsection



<!-- @extends('layout_right')

@section('content')
    <div class="col-lg-8">
        <div class="blog_left_sidebar">
            <div class="container">
                <div class="col">
                    <div class="alert alert-info">
                        <p>Si votre diocèse et/ou paroisse ne figure pas dans la liste, veuillez nous envoyer un message> en precisant le nom de votre diocèse et/ou paroisse dans le message <a href="{{ route('contact') }}">cliquez ici</a>.
                        </p>
                        <b class="text-dark">NB: Ne continuez pas l'inscription.</b>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <h6>{{ __('Inscription') }}</h6>
                            <form method="POST" action="{{ route('validUsers') }}" class="contact_form" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group col-lg-12 col-sm-12 col-md-12" style="width: 100%">
                                    <div class="col-lg-6 col-sm-6 col-md-6">
                                        <label for="">{{ __('Diocèse rattaché') }}</label>
                                        <div class="form-group">
                                            <select name="diocese" class="form-control" style="width: 100% !important">
                                                <option disabled>Sélectionnez un diocèse</option>
                                                @foreach($diocese as $d)
                                                    <option value="{{ $d->id }}">{{ $d->nom }}</option>
                                                @endforeach
                                            </select>
                                            @error('diocese')
                                            <span class="text-danger" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-sm-6 col-md-6">
                                        <label for="">{{ __('Paroisse rattachée') }}</label>
                                        <div class="form-group">
                                            <select name="paroisse" class="form-control" style="width: 100% !important">
                                                <option disabled>Sélectionnez une paroisse</option>
                                                @foreach($paroisse as $d)
                                                    <option value="{{ $d->id }}">{{ $d->nom }}</option>
                                                @endforeach
                                            </select>
                                            @error('paroisse')
                                            <span class="text-danger" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="">{{ __('Nom d\'utilisateur') }}</label>
                                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autofocus>

                                    @error('name')
                                    <span class="text-danger" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="">{{ __('Nom de la communauté') }}</label>
                                    <input id="name" type="text" class="form-control @error('communaute') is-invalid @enderror" name="communaute" value="{{ old('communaute') }}" required autofocus>

                                    @error('communaute')
                                    <span class="text-danger" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group ">
                                    <label for="">{{ __('Adresse e-mail') }}<em style="color:red;">*</em> </label>
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                                    @error('email')
                                    <span class="text-danger" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="form-group ">
                                    <label for="">{{ __('Téléphone Mobile') }}<em style="color:red;">*</em></label>
                                    <input id="telephone_mobile" type="text" class="form-control @error('email') is-invalid @enderror" name="telephone" value="{{ old('telephone') }}" required >

                                    @error('telephone')
                                    <span class="text-danger" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

                                <div class="form-group ">
                                    <label for="">{{ __('Mot de passe') }}<em style="color:red;">*</em> </label>
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                    @error('password')
                                    <span class="text-danger" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror

                                </div>
                                <div class="form-group ">
                                    <label for="">{{__('Confirmer Mot de passe') }}<em style="color:red;">*</em> </label>
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">

                                </div>

                                <div class="form-group">
                                    <label for="">Image</label>
                                    <p>Inclure une image de 1000px et au plus de 2000px de haut ou de large.
                                        <br> Cette image sera la photo de couverture de l'église  </p>
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-lg-12 col-sm-12">
                                                <div class="card">
                                                    <div class="card-body">
                                                        <div class="white-box">
                                                            <input required type="file" id="input-file-now1" name="img" class="files dropify">
                                                            @error('img')
                                                            <span class="text-danger" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-block btn-social btn-twitter pull-right stepp mt-3">
                                        {{ __('Enregistrer') }}
                                    </button>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection -->



