@extends('layout_right')
@section('title','Nouveau de mot de passe')
@section('content')

    <div class="col-lg-8">
            <div class="blog_left_sidebar">
               <div class="container">
                    <div class="panel panel-primary">
                    
                        <form class="contact_form col-md-10" method="POST" action="{{ route('password.update') }}">

                            @csrf

                            <div class="panel-heading">
                                <h3 class="panel-title text-uppercase  mb-5">Nouveau de passe oublié </h3>
                            </div>

                            <div class="panel-body">
                                <div class="form-group">
                                    <label for="">Adresse e-mail <em style="color:red;">*</em> </label>
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="">Nouveau mot de passe <em style="color:red;">*</em> </label>
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                        <label for="">Confirmer mot de passe <em style="color:red;">*</em> </label>
                                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
    
                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                </div>
                            
                                <button class="btn btn-block mt-3 radius text-uppercase" style="background: #5fc6c9; color: #fff" type="submit">{{ __('Réinitialiser') }}</button>
                            </div>
                        </form>

                    </div>
               </div>
            </div>
        </div>

@endsection







