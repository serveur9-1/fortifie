@extends('layout_right')
@section('title','Inscription')
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
                                    <select  name="diocese_id" data-live-search="true" class="form-control selectpicker">
                                        <option disabled>Sélectionnez un Diocèse</option>
                                        @foreach($diocese as $d)
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
                                        <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>



                                <div class="form-group" id="dioc">
                                    Diocese
                                    <select name="" class="">
                                         <option selected="disabled">Diocese</option>
                                        @foreach($diocese as $d)
                                            <option value="{{ $d->id }}">{{ $d->nom }}</option>
                                        @endforeach
                                    </select>
                                    
                                </div>

                                <div class="form-group" id="vil">
                                    ville
                                    <select name="" class="">
                                         <option selected="disabled">ville</option>
                                        @foreach($diocese as $d)
                                        @endforeach
                                    </select>
                                    <span></span>
                                </div>

                                <div class="form-group" id="paro" >
                                    paroisse
                                    <select name=""class="">
                                         <option selected="disabled">paroisse</option>
                                        @foreach($diocese as $d)
                                        @endforeach
                                    </select>
                                    <span></span>
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
                                    <label for="">Nom<em style="color:red;">*</em> (Groupe, Communauté, Ministère, Mouvement…)</label>
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
                                    <div class="container pl-0">
                                        <div class="row pl-0">
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

<!--JS AJAX REQUEST-->
<script>
    $(document).ready(()=>{

        $('#dioc select').on('change', (e) => {
            $('#vil span').html('<small>Loading...</small>');
            $('#vil select').html(``);
            $('#paro select').html(`<option></option>`);
            fetch("http://127.0.0.1:8000/api/ville/"+$('#dioc select').val()) // Call the fetch function passing the url of the API as a parameter
            .then(resp => resp.json())
            .then( data =>{
                setTimeout(()=>{
                    $('#vil span').html(' ');
                    console.log(data);
                    data.forEach(i => {
                        $('#vil select').append(`<option value="${i.id}">${i.libelle}</option>`);
                    });
                },2000);
                
            })
            .catch(err => {
                console.log(err);
                $('#vil span').html(`<strong class="text-danger">Error !!!</strong>`);
            })
        });



        $('#vil select').on('change', (e) => {
            $('#paro span').html('<small>Loading...</small>');
            $('#paro select').html(``);
            fetch("http://127.0.0.1:8000/api/paroisse/"+$('#vil select').val()) // Call the fetch function passing the url of the API as a parameter
            .then(resp => resp.json())
            .then( data =>{
                setTimeout(()=>{
                    $('#paro span').html(' ');
                    console.log(data);
                    data.forEach(i => {
                        $('#paro select').append(`<option value="${i.id}">${i.nom}</option>`);
                    });
                },2000);
            })
            .catch(err => {
                console.log(err);
                $('#paro span').html(`<strong class="text-danger">Error !!!</strong>`);
            })
        });

    })
</script>

@endsection







