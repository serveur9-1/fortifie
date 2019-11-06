@extends('layout_admin')
@section('title','Ajouter des sous-catégories')

@section('content')
 <!-- Begin Page Content -->
       <div class="container-fluid">
          <div class="x_panel">
           <div class="x_title">
              <h2><small>@if(!$edit) Ajouter @else Modifier @endif une sous-catégorie</small></h2>
              <a href="#" class="btn btn-danger btn-sm pull-right mb-4" style="float: right;"><i class="fa fa-eye"></i> Liste des sous-catégories</a>
              <div class="clearfix"></div>
            </div>
          </div>
          <div class="card mb-4">
            <div class="card-header">
                @if(!$edit) Ajout @else Modification @endif de sous-catégorie
            </div>
            <div class="card-body">
              <div class="x_content">
              @if(!$edit)
                <form  method="POST" action="{{ route('validSousCategorie') }}" class="form-horizontal form-label-left">
              @else
                <form  method="POST" action="{{ route('updateSousCategorie', ['id' => $subCategory->id]) }}" class="form-horizontal form-label-left">
              @endif
                    @csrf
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Nom de la sous-catégorie<em style="color:red;">*</em>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            @if($edit)
                                <input value="{{ $subCategory->libelle }}" type="text" id="last-name" name="libelle" required="required" class="form-control col-md-9 col-xs-12">
                            @else
                                <input value="{{ old('libelle') }}" type="text" id="last-name" name="libelle" required="required" class="@error('libelle') is-invalid @enderror form-control col-md-9 col-xs-12">
                            @endif
                        </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-2 col-xs-12" for="last-name">Catégorie <em style="color:red;">*</em>
                      </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <select name="category" required="required" class="form-control col-md-9 col-xs-12">
                            <option selected disabled>Selectionnez une catégorie</option>
                              @foreach($category as $c)
                                  @if($edit)
                                      <option @if($c->id == $subCategory->category->id) selected @endif value="{{ $c->id }}">{{ $c->libelle }}</option>
                                  @else
                                      <option value="{{ $c->id }}">{{ $c->libelle }}</option>
                                  @endif
                              @endforeach
                           </select>
                        </div>
                    </div>
                   <div class="form-group">
                      <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-2">
                          <input type="submit" class="btn btn-success" value="Enregistrer">
                          <input type="reset" class="btn btn-danger" value="Effacer le contenu">
                      </div>
                    </div>
                </form>
              </div>
            </div>
          </div>
        </div>
        <!-- /.container-fluid -->

@endsection
