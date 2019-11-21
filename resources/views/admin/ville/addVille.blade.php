@extends('layout_admin')
@section('title','Ajouter des Villes')

@section('content')
 <!-- Begin Page Content -->
       <div class="container-fluid">
          <div class="x_panel">
           <div class="x_title">
              <h2><small>@if($edit) Modifier @else Ajouter @endif une ville</small></h2>
              <a href="{{ route('listVille') }}" class="btn btn-danger btn-sm pull-right mb-4 btnadmin" style="float: right;"><i class="fa fa-eye"></i> Liste des Villes</a>
              <div class="clearfix"></div>
            </div>
          </div>
          <div class="card mb-4">
            <div class="card-header">
                @if($edit) Modification @else Ajout @endif de Ville
            </div>
            <div class="card-body">
              <div class="x_content">
                <form @if(!$edit) action="{{ route('validVille') }}" @else action="{{ route('updateVille', ['id' => $v->id]) }}" @endif method="POST" class="form-horizontal form-label-left" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Nom de la ville<em style="color:red;">*</em>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                          <input @if($edit) value="{{ $v->libelle }}" @else value="{{ old('libelle') }}" @endif type="text" id="last-name" name="libelle" required="required" class="form-control col-md-9 col-xs-12">
                          @error('libelle')
                            <p class="text-danger">
                                {{ $message }}
                            </p>
                          @enderror
                      </div>
                   </div>
                   <div class="form-group">
                      <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-2">
                          <input type="submit" class="btn btn-success btnadmin" value="Enregistrer">
                          <input type="reset" class="btn btn-danger btnad" value="Effacer le contenu">
                      </div>
                    </div>
                </form>
              </div>
            </div>
          </div>
        </div>
        <!-- /.container-fluid -->

@endsection
