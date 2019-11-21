@extends('layout_login')
@section('title','Admin_login')

@section('content')
    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0 btnad" >
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-md-6" style="margin-left: 230px;" >
                                <div class="p-5">
                                    <div class="text-center mb-5">
                                        <img src="{{asset('assets/image/Logo.png')}}">
                                        <span style="background-color: #fff200; color: rgb(145,145,145)" class=" pt-1 pb-1 pl-3 pr-3 mt-5">
                                            CONNEXION
                                        </span>
                                    </div>
                                    <form class="user" method="POST" action="{{ route('login') }}">
                                        @csrf
                                        <div class="form-group">
                                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror " name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Adresse e-mail">

                                            @error('email')
                                            <span class="text-danger" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror " name="password" required autocomplete="current-password" placeholder="Mot de passe">

                                            @error('password')
                                            <span class="text-danger" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <div class="custom-control custom-checkbox small">
                                                <input type="checkbox" class="custom-control-input" id="customCheck"  {{ old('remember') ? 'checked' : '' }}>
                                                <label class="custom-control-label" for="customCheck">{{ __('Remember Me') }}</label>
                                            </div>
                                        </div>
                                        <button  class="btn btn-primary  btn-block btnadmin" type="submit">
                                            Connexion
                                        </button>
                                        @if (Route::has('password.request'))
                                            <a class="btn btn-link text-warning" href="{{ route('adminResetPassword') }}">
                                                {{ __('Mot de passe oublié') }}
                                            </a>
                                        @endif
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

@endsection
