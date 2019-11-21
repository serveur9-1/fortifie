@extends('layout_admin')
@section('title','Ajouter Nouvelles Pub')

@section('content')
 <!-- Begin Page Content -->
       <div class="container-fluid">
          <div class="x_panel">
           <div class="x_title">
              <h2><small>@if(!$edit) Ajouter @else Modifier @endif Publicité</small></h2>
              <a href="{{ route('listPub') }}" class="btn btn-danger btn-sm pull-right mb-4 btnadmin" style="float: right;"><i class="fa fa-eye"></i> Liste des Publicités</a>
              <div class="clearfix"></div>
            </div>
          </div>
          <div class="card mb-4">
            <div class="card-header">
                @if(!$edit) Ajout @else Modification @endif de publicité
            </div>
            <div class="card-body">
              <div class="x_content">
                <form @if($edit) action="{{ route('updatePub',['id' => $p->id]) }}" @else action="{{ route('validPub') }}"  @endif method="POST" class="form-horizontal form-label-left" enctype="multipart/form-data">
                    @csrf
                    @if($edit)
                        <div class="form-group">
                            <img src='{{ asset("assets/img/pubs/$p->img") }}' alt="">
                        </div>
                    @endif
                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Image de la publicité<em style="color:red;">*</em>
                      </label>
                      <div class="col-md-12 col-sm-12 col-lg-6 col-xs-12">
                          <input type="file" id="last-name" name="img" @if(!$edit) required="required" @endif class="form-control col-md-9 col-xs-12">
                          @error('img')
                            <p class="text-danger">{{ $message }}</p>
                          @enderror
                      </div>
                   </div>
                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Url de la publicité
                      </label>
                      <div class="col-md-12 col-sm-6 col-lg-6 col-xs-6">
                          <input @if($edit) value="{{ $p->url }}" @else value="{{ old('url') }}" @endif type="url" id="last-name" name="url" required="required" class="form-control col-md-9 col-xs-12" placeholder="https://www.google.com">
                          @error('url')
                          <p class="text-danger">{{ $message }}</p>
                          @enderror
                      </div>
                   </div>
                   <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Date debut
                      </label>
                      <div class="col-md-6 col-sm-6 col-lg-6 col-xs-6">
                          <input @if($edit) value="{{ $p->debut }}" @else value="{{ old('debut') }}" @endif type="date" id="last-name" name="debut"  class="form-control col-md-9 col-xs-12">
                          @error('debut')
                          <p class="text-danger">{{ $message }}</p>
                          @enderror
                      </div>
                   </div>
                   <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Date fin
                      </label>
                      <div class="col-md-6 col-sm-6 col-lg-6 col-xs-6">
                          <input @if($edit) value="{{ $p->fin }}" @else value="{{ old('debut') }}" @endif type="date" id="last-name" name="fin"  class="form-control col-md-9 col-xs-12">
                          @error('fin')
                          <p class="text-danger">{{ $message }}</p>
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
