@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Confirm Password') }}</div>

                <div class="card-body">
                    {{ __('Please confirm your password before continuing.') }}

                    <form method="POST" action="{{ route('password.confirm') }}">
                        @csrf

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

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Confirm Password') }}
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
</div>
@endsection




@extends('layout_right')
@section('title','Confirmation de mot de oublié')

@section('content')

    <div class="col-lg-8">
            <div class="blog_left_sidebar">
               <div class="container">
                    <div class="panel panel-primary">
                    
                        <form class="contact_form col-md-10" method="POST" action="{{ route('password.confirm') }}">
                            @csrf

                            <div class="panel-heading">
                                <h3 class="panel-title text-uppercase  mb-5">Confirmez votre mot de passe avant de continuer. </h3>
                            </div>

                            <div class="panel-body">
                                <div class="form-group">
                                    <label for="password">Mot de passe <em style="color:red;">*</em> </label>
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" value="{{ old('password') }}" required autocomplete="password" autofocus>

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                </div>
                            
                                <button class="btn btn-block mt-3 radius text-uppercase" style="background: #5fc6c9; color: #fff" type="submit">{{ __('Confirmer') }}</button>
                            </div>
                        </form>

                    </div>
               </div>
            </div>
        </div>

@endsection


