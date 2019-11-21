@extends('layout_right')

@section('content')
    <!-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

        <div class="form-group row">
            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
        </div>
    </div>

    <div class="form-group row">
        <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
        </div>
    </div>

    <div class="form-group row">
        <div class="col-md-6 offset-md-4">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
        </label>
    </div>
</div>
</div>

<div class="form-group row mb-0">
<div class="col-md-8 offset-md-4">
    <button type="submit" class="btn btn-primary">
{{ __('Login') }}
        </button>

@if (Route::has('password.request'))
        <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
            </a>
@endif
        </div>
    </div>
</form>
</div>
</div>
</div>
</div>
</div> -->


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
