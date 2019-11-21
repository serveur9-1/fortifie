@extends('layout_admin')
@section('title','profil')

@section('content')
    <div class="container-fluid">
        <div class="x_panel">
            <div class="x_title">
                <h2><small>Mon profil </small></h2>

                <div class="clearfix"></div>
            </div>
        </div>
        <div class="card mb-4">
            <div class="card-header">
                information personnelle
            </div>
            <div class="card-body">
                <div class="x_content">
                    <form action="{{ route('updateAdminProfil') }}" method="POST" class="form-horizontal form-label-left" enctype="multipart/form-data">
                        @csrf
                        <div class="row" >
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Nom
                                    </label>
                                    <div class="col-md-9 col-sm-9 col-xs-12">
                                        <input type="text" id="last-name" value="{{ auth()->user()->name }}" name="name" required="required" class="form-control col-md-9 col-xs-12">
                                        @error('name')
                                        <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">E-mail
                                    </label>
                                    <div class="col-md-9 col-sm-9 col-xs-12">
                                        <input type="text" id="last-name" value="{{ auth()->user()->email }}" name="email" required="required" class="form-control col-md-9 col-xs-12">
                                        @error('email')
                                        <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Mot de passe
                                    </label>
                                    <div class="col-md-9 col-sm-9 col-xs-12">
                                        <input type="password" id="last-name" name="password" required="required" class="form-control col-md-9 col-xs-12">
                                        @error('password')
                                            <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Confirmer mot de passe
                                    </label>
                                    <div class="col-md-9 col-sm-9 col-xs-12">
                                        <input type="password" id="last-name" name="password_confirmation" required="required" class="form-control col-md-9 col-xs-12">
                                    </div>
                                </div>
                                <div class="form-group">

                                    <div class="col-md-9 col-sm-9 col-lg-6 col-xs-12">
                                        <img height="200" src='{{ asset("assets/img/users") }}/{{ auth()->user()->img }}' alt="">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-6 col-sm-6 col-xs-12" for="last-name">Modifier Image
                                    </label>
                                    <div class="col-md-9 col-sm-9 col-lg-6 col-xs-12">
                                        <input type="file"  name="img" class="form-control col-md-12 col-xs-12">
                                    </div>
                                </div>
                            </div>
                        </div><br><br>
                        <div class="form-group">
                            <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-2">
                                <input type="submit" class="btn btn-success" value="Enregistrer"style="background-color: #55acee !important;">
                                <input type="reset" class="btn btn-danger" value="Effacer le contenu"style="background-color: #5c267d !important;">
                            </div>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
@endsection
