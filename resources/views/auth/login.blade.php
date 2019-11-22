@extends('layout_right')

@section('content')
 <div class="col-lg-8">
        <div class="blog_left_sidebar">
            <div class="container">
                <div class="panel panel-primary">
                    <form class="contact_form col-md-8"  method="POST" action="{{ route('login') }}">
                        <div class="panel-heading"><h3 class="panel-title mb-5">{{ __('CONNEXION') }}</h3></div>
                        <div class="alert alert-primary" style="text-align:center;" role="alert">
                            Vous n'avez pas de compte ? &nbsp;  Cliquez <a href="{{ route('register') }}">ici</a> pour en créer.
                        </div>
                        @csrf
                        <div class="panel-body">
                            <div class="form-group">
                                <label for="">{{ __('Adresse e-mail') }}<em style="color:red;">*</em> </label>
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                @error('email')
                                <span class="text-danger" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="">{{ __('Mot de passe') }}<em style="color:red;">*</em> </label>
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                <span class="text-danger" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group row">
                                <div class="col-md-6 offset-md-1">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                        <label class="form-check-label" for="remember">
                                            {{ __('Se souvenir de moi') }}
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Mot de passe oublié') }}
                                    </a>
                                @endif
                            </div>
                            <button class="btn btn-block mt-3 radius" style="background: #5fc6c9; color: #fff" type="submit">{{ __('Connexion') }}</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
