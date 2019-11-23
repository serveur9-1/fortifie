@extends('layout_admin')
@section('title','Ajouter Diocèse')

@section('content')

        <!-- Begin Page Content -->
        <div class="container-fluid">
          <div class="x_panel">
           <div class="x_title">
              <h2><small>@if($edit) Modifier @else Ajouter @endif un diocèse</small></h2>
              <a href="{{ route('listDiocese') }}" class="btn  btn-sm pull-right mb-4 btnadmin" style="float: right;"><i class="fa fa-eye"></i> Liste des diocèses</a>
              <div class="clearfix"></div>
            </div>
          </div>
          <div class="card mb-4">
            <div class="card-header">
                @if($edit) Modification @else Ajout @endif de diocèse
            </div>
            <div class="card-body">
              <div class="x_content">
                <form @if(!$edit) action="{{ route('validDiocese') }}" @else action="{{ route('updateDiocese', ['id' => $diocese->id ]) }}" @endif method="POST" class="form-horizontal form-label-left" enctype="multipart/form-data">
                  @csrf
                    <div class="form-group">
                    <label class="control-label col-md-12 col-sm-2 col-xs-12" for="last-name">Nom <em style="color:red;">*</em>
                     </label>
                      <div class="col-md-8 col-sm-8 col-xs-12">
                      @if($edit)
                          <input type="text" value="{{ $diocese->nom }}" id="last-name" name="nom" required="required" class=" @error('nom') is-invalid @enderror form-control col-md-9 col-xs-12">
                      @else
                          <input type="text" value="{{ old('nom') }}" id="last-name" name="nom" required="required" class=" @error('nom') is-invalid @enderror form-control col-md-9 col-xs-12">
                      @endif
                          @error('nom')
                              <p class="text-danger" role="alert">
                                  <strong>{{ $message }}</strong>
                              </p>
                          @enderror
                      </div>
                   </div>
                    <div class="form-group">
                        <label class="col-md-8 col-sm-8 col-xs-12" for="last-name">Ville<em style="color:red;">*</em>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <select name="ville" required="required" class="@error('ville') is-invalid @enderror form-control col-md-12 col-xs-12">
                                <option selected disabled>Choisir une ville</option>
                                @foreach($ville as $v)
                                    @if($edit)
                                        <option @if($v->id == $diocese->ville_id ) selected @endif value="{{ $v->id }}">{{ $v->libelle }}</option>
                                    @else
                                        <option value="{{ $v->id }}">{{ $v->libelle }}</option>
                                    @endif
                                    @endforeach
                            </select>
                            @error('ville')
                            <p class="text-danger" role="alert">
                                <strong>{{ $message }}</strong>
                            </p>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group">
                      <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-2">
                        <input type="submit" class="btn  btnadmin" value="Enregistrer ">
                        <input type="reset" class="btn  btnad" value="Effacer le contenu ">
                      </div>
                    </div>
                </form>
              </div>
            </div>
          </div>
        </div>
        <!-- /.container-fluid -->

@endsection
