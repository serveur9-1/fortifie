@extends('layout_login')
@section('title','Nouveau mot de passe')
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
                                            {{ __('Nouveau mot de passe') }}
                                        </span>
                                </div>
                                <form method="POST" action="{{ route('password.update') }}">
                                    @csrf
                                    <input type="hidden" name="token" value="">

                                    <div class="form-group">
                                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror " name="password" required autocomplete="current-password" placeholder=" Mot de passe">

                                        @error('password')
                                        <span class="text-danger" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <input id="password-confirm" type="password" class="form-control @error('password') is-invalid @enderror " name="password" required autocomplete="current-password" placeholder=" Confirmer mot de passe">

                                        @error('password')
                                        <span class="text-danger" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div>

                                    <button  class="btn btn-primary  btn-block btnadmin" type="submit">
                                        {{ __('Réinitialiser mot de passe') }}
                                    </button>
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
