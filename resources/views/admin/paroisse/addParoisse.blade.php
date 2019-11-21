@extends('layout_admin')
@section('title','Ajouter Paroisse')

@section('content')
 <!-- Begin Page Content -->
       <div class="container-fluid">
          <div class="x_panel">
           <div class="x_title">
              <h2><small>@if(!$edit) Ajouter @else Modifier @endif une Paroisse</small></h2>
              <a href="{{ route('listParoisse') }}" class="btn btn-danger btn-sm pull-right mb-4 btnadmin" style="float: right;"><i class="fa fa-eye"></i> Liste des paroisses</a>
              <div class="clearfix"></div>
            </div>
          </div>
          <div class="card mb-4">
            <div class="card-header">
                @if(!$edit) Ajout @else Modification @endif de paroisse
            </div>
            <div class="card-body">
              <div class="x_content">
                <form @if(!$edit) action="{{ route('validParoisse') }}" @else action="{{ route('updateParoisse', ['id' => $p->id]) }}" @endif method="POST" class="form-horizontal form-label-left" enctype="multipart/form-data">
                  @csrf
                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Nom de la Paroisse<em style="color:red;">*</em>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                          <input @if($edit) value="{{ $p->nom }}" @else value="{{ old('nom') }}" @endif  type="text" id="last-name" name="nom" required="required" class="form-control col-md-9 col-xs-12">
                          @error('nom')
                          <p class="text-danger">
                              {{ $message }}
                          </p>
                          @enderror
                      </div>
                   </div>
                   <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Numero
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                          <input @if($edit) value="{{ $p->telephone }}" @else value="{{ old('telephone') }}" @endif type="number" id="last-name" name="telephone"  class="form-control col-md-9 col-xs-12">
                          @error('telephone')
                          <p class="text-danger">
                              {{ $message }}
                          </p>
                          @enderror
                      </div>
                   </div>
                   <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Numero Fixe
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                          <input @if($edit) value="{{ $p->fixe }}" @else value="{{ old('fixe') }}" @endif type="text" id="last-name" name="fixe"  class="form-control col-md-9 col-xs-12">
                          @error('fixe')
                          <p class="text-danger">
                              {{ $message }}
                          </p>
                          @enderror
                      </div>
                   </div>
                   <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">E-mail
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                          <input @if($edit) value="{{ $p->email }}" @else value="{{ old('email') }}" @endif type="email" id="last-name" name="email"  class="form-control col-md-9 col-xs-12">
                          @error('email')
                              <p class="text-danger">
                                  {{ $message }}
                              </p>
                          @enderror
                      </div>
                   </div>
                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-2 col-xs-12" for="last-name">Diocese rattaché<em style="color:red;">*</em>
                      </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <select name="diocese" required="required" class="form-control col-md-9 col-xs-12">
                            <option disabled>Sélectionnez un diocèse</option>
                          @foreach($diocese as $d)
                              @if($edit)
                                  <option @if($p->diocese->id == $d->id) selected @endif value="{{ $d->id }}">{{ $d->nom }}</option>
                              @else
                                  <option value="{{ $d->id }}">{{ $d->nom }}</option>
                              @endif
                          @endforeach
                           </select>

                            @error('diocese')
                                <p class="text-danger">
                                    {{ $message }}
                                </p>
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
