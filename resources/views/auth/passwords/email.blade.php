@extends('layout_right')
@section('title','Mot de passe oublié')

@section('content')

    <div class="col-lg-8">
            <div class="blog_left_sidebar">
               <div class="container">
                    <div class="panel panel-primary">
                    
                        <form class="contact_form col-md-10" method="POST" action="{{ route('password.email') }}">

                            @csrf

                            <div class="panel-heading">
                                    <h3 class="panel-title text-uppercase  mb-5">Mot de passe oublié </h3>
                               </div>
                               <div class="form-group">
                                   <div class="alert alert-primary" style="text-align:center;" role="alert">
                                       Lorsque vous soumettez votre adresse E-mail, un message de reinitialisation vous sera envoyé ! 
                                   </div>
                               </div>
                               @if (session('status'))
                                   <div class="alert alert-success" role="alert">
                                       {{ session('status') }}
                                   </div>
                               @endif

                            <div class="panel-body">
                                <div class="form-group">
                                    <label for="">Adresse e-mail <em style="color:red;">*</em> </label>
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
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

