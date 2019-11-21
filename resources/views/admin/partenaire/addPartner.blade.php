@extends('layout_admin')
@section('title','Ajouter des Partenaires')

@section('content')
 <!-- Begin Page Content -->
       <div class="container-fluid">
          <div class="x_panel">
           <div class="x_title">
              <h2><small>@if($edit) Modifier @else Ajouter @endif un Partenaire</small></h2>
              <a href="{{ route('listPartner') }}" class="btn btn-danger btn-sm pull-right mb-4 btnadmin" style="float: right;"><i class="fa fa-eye"></i> Liste des Partenaires</a>
              <div class="clearfix"></div>
            </div>
          </div>
          <div class="card mb-4">
            <div class="card-header">
             @if($edit) Modification @else Ajout @endif de Partenaire
            </div>
            <div class="card-body">
              <div class="x_content">
                <form @if($edit) action="{{ route('updatePartner', ['id' => $p->id]) }}" @else action="{{ route('validPartner') }}" @endif method="POST" class="form-horizontal form-label-left" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Nom du partenaire<em style="color:red;">*</em>
                      </label>
                      <div class="col-md-12 col-sm-6 col-lg-6 col-xs-6">
                          <input @if($edit) value="{{ $p->nom }}" @else value="{{ old('name') }}" @endif type="text" id="last-name" name="nom" required="required" class="form-control col-md-9 col-xs-12" placeholder="orange ci">
                          @error('name')
                                <p class="text-danger">{{ $message }}</p>
                          @enderror
                      </div>
                   </div>
                   <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Site du partenaire<em style="color:red;">*</em>
                      </label>
                      <div class="col-md-12 col-sm-6 col-lg-6 col-xs-6">
                          <input @if($edit) value="{{ $p->url }}" @else value="{{ old('url') }}" @endif type="text" id="last-name" name="url" required="required" class="form-control col-md-9 col-xs-12" placeholder="www.google.com">
                          @error('url')
                          <p class="text-danger">{{ $message }}</p>
                          @enderror
                      </div>
                   </div>
                    @if($edit)
                        <div class="form-group">
                            <img src='{{ asset("assets/img/partenaire/$p->logo") }}' alt="">
                        </div>
                    @endif
                   <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Logo du partenaire<em style="color:red;">*</em>
                      </label>
                      <div class="col-md-12 col-sm-12 col-lg-6 col-xs-12">
                          <input  type="file" id="last-name" name="logo" @if(!$edit) required="required" @endif class="form-control col-md-9 col-xs-12">
                          @error('logo')
                          <p class="text-danger">{{ $message }}</p>
                          @enderror
                      </div>
                   </div><br><br>
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
