@extends('layout_admin')
@section('title','Ajouter Gestionnaire')

@section('content')
 <!-- Begin Page Content -->
       <div class="container-fluid">
          <div class="x_panel">
           <div class="x_title">
              <h2><small>@if(!$edit) Ajouter @else Modifier @endif un Compte</small></h2>
              <a href="{{ route('ges.listUsers') }}" class="btn  btn-sm pull-right mb-4 btnadmin" style="float: right;"><i class="fa fa-eye"></i> Liste des gestionnaire</a>
              <div class="clearfix"></div>
            </div>
          </div>
          <div class="card mb-4">
            <div class="card-header">
                @if(!$edit) Ajout @else Modification @endif de compte
            </div>
            <div class="card-body">
              <div class="x_content">
                <form @if(!$edit) action="{{ route('ges.validUsers') }}" @else action="{{ route('ges.updateUsers', ['id'=> $u->id]) }}" @endif method="POST" class="form-horizontal form-label-left" enctype="multipart/form-data">
                    @csrf
                    @if($edit)
                        {{ method_field('patch') }}
                    @endif
                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Nom d'utilisateur<em style="color:red;">*</em>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                          <input @if($edit) value="{{ $u->name }}" @else value="{{ old('telephone') }}" @endif type="text" id="last-name" name="name" required="required" class="form-control col-md-9 col-xs-12">
                          @error('name')
                          <p class="text-danger">{{ $message }}</p>
                          @enderror
                      </div>
                  </div>

                  <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Rôle<em style="color:red;">*</em>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <select name="role" class="form-control col-md-9 col-xs-12">
                          <option @if($edit) @if($u->is_admin == 1) selected @endif @endif value="1">Super admin</option>
                          <option @if($edit) @if($u->is_staff == 1) selected @endif @endif value="2">Superviseur</option>
                        </select>
                          @error('name')
                          <p class="text-danger">{{ $message }}</p>
                          @enderror
                      </div>
                  </div>

                   <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">E-mail<em style="color:red;">*</em>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                          <input @if($edit) value="{{ $u->email }}" @else value="{{ old('email') }}" @endif type="email" id="last-name" name="email" required="required" class="form-control col-md-9 col-xs-12">
                          <input hidden @if($edit) value="{{ $u->email }}" @else value="{{ old('email') }}" @endif type="email" id="last-name" name="email_old" class="form-control col-md-9 col-xs-12">
                          @error('email')
                          <p class="text-danger">{{ $message }}</p>
                          @enderror
                      </div>
                   </div>
                   <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Mot de passe<em style="color:red;">*</em>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="password" id="last-name" name="password" required="required" class="form-control col-md-9 col-xs-12">
                          @error('password')
                          <p class="text-danger">{{ $message }}</p>
                          @enderror
                      </div>
                   </div>
                   <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Confirmer le mot de passe<em style="color:red;">*</em>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="password" id="last-name" name="password_confirmation" required="required" class="form-control col-md-9 col-xs-12">
                      </div>
                   </div>
                    @if($edit)
                        <div class="form-group">
                            <img src='{{ asset("/assets/img/users/$u->img") }}' alt="">
                        </div>
                    @endif
                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Charger l'image de profil<em style="color:red;">*</em>
                      </label>
                      <div class="col-md-12 col-sm-12 col-lg-6 col-xs-12">
                          <input type="file" id="last-name" name="img" @if(!$edit) required="required" @endif class="form-control col-md-9 col-xs-12">
                          @error('img')
                          <p class="text-danger">{{ $message }}</p>
                          @enderror
                      </div>
                   </div><br><br>
                   <div class="form-group">
                      <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-2">
                          <input type="submit" class="btn btnadmin" value="Enregistrer">
                          <input type="reset" class="btn  btnad" value="Effacer le contenu">
                      </div>
                    </div>
                </form>
              </div>
            </div>
          </div>
        </div>
        <!-- /.container-fluid -->

@endsection
