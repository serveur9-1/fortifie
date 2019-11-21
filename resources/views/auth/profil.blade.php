@extends('layout_right')

@section('content')

    <div class="col-lg-8">
        <div class="blog_left_sidebar">
            <div class="container">
                <div class="panel-heading"><h3 class="panel-title mb-5">{{ __('MON PROFIL') }}</h3></div>
                <div class="panel panel-primary">
                    <form class="contact_form col-md-8" method="POST" action="{{ route('updateGestionnaireProfil') }}" enctype="multipart/form-data">

                        @csrf
                        <div class="panel-body">
                            <div class="form-group mt-3">
                                <label for="">{{ __('Nom d\'utilisateur') }}</label>
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ auth()->user()->name }}" required autofocus>

                                @error('name')
                                <span class="text-danger" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group mt-3">
                                <label for="">{{ __('Nom de la communauté') }}</label>
                                <input id="name" type="text" class="form-control @error('communaute') is-invalid @enderror" name="communaute" value="@foreach(auth()->user()->gestionnaire as $g){{ $g->communaute }} @endforeach" required autofocus>

                                @error('communaute')
                                <span class="text-danger" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group mt-3">
                                <label for="">{{ __('Adresse e-mail') }}<em style="color:red;">*</em> </label>
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ auth()->user()->email }}" required autocomplete="email">
                                @error('email')
                                <span class="text-danger" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group mt-3">
                                <label for="">{{ __('Téléphone Mobile') }}<em style="color:red;">*</em></label>
                                <input id="telephone_mobile" type="text" class="form-control @error('email') is-invalid @enderror" name="telephone" value="@foreach(auth()->user()->gestionnaire as $g){{ $g->telephone }} @endforeach" required >

                                @error('telephone')
                                <span class="text-danger" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="form-group mt-3">
                                <label for="">{{ __('Mot de passe') }}<em style="color:red;">*</em> </label>
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                <span class="text-danger" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror

                            </div>
                            <div class="form-group mt-3">
                                <label for="">{{__('Confirmer Mot de passe') }}<em style="color:red;">*</em> </label>
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">

                            </div>
                            <div class="form-group mt-3">
                                <label for="">Image <em style="color:red;">*</em></label>
                                <p>Inclure une image de 1000px et au plus de 2000px de haut ou de large.
                                    <br> Cette image sera la photo de couverture de l'église  </p>
                                <div class="container">
                                    <div class="row">

                                        <div class="col-lg-12 col-sm-12 mb-2">
                                            <img width="200" src='{{ asset("assets/img/users") }}/{{ auth()->user()->img }}' alt="">
                                        </div>
                                        <br>

                                        <div class="col-lg-12 col-sm-12">
                                            <div class="card">
                                                <div class="card-body">
                                                    <div class="white-box">
                                                        <input type="file" id="input-file-now1" name="img" class="files dropify">
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
                            <button class="btn btn-block mt-4 radius" style="background: #5fc6c9; color: #fff" type="submit">{{ __('Modifier') }}</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

