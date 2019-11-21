@extends('layout_admin')
@section('title','Ajouter des Medias')

@section('content')
 <!-- Begin Page Content -->
       <div class="container-fluid">
          <div class="x_panel">
           <div class="x_title">
              <h2><small>@if(!$edit) Ajouter @else Modifier  @endif une image a la galerie</small></h2>
              <a href="{{ route('listGallerie') }}" class="btn btn-danger btn-sm pull-right mb-4 btnadmin"  style="float: right;"><i class="fa fa-eye"></i> Liste des images de la galerie</a>
              <div class="clearfix"></div>
            </div>
          </div>
          <div class="card mb-4">
            <div class="card-header">
                @if(!$edit) Ajout @else Modification  @endif d'image
            </div>
            <div class="card-body">
              <div class="x_content">
                <form @if(!$edit) action="{{ route('validGallerie') }}" @else action="{{ route('updateGallerie', ['id' => $g->id]) }}"  @endif action="#" method="POST" class="form-horizontal form-label-left" enctype="multipart/form-data">
                    @csrf
                    @if($edit)
                        <div class="form-group">
                            <img src="{{ asset("assets/img/galeries/$g->img") }}" alt="">
                        </div>
                    @endif
                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Charger l'image<em style="color:red;">*</em>
                      </label>
                      <div class="col-md-12 col-sm-12 col-lg-6 col-xs-12">
                          <input type="file" id="last-name" name="img" @if(!$edit) required="required" @endif  class="form-control col-md-9 col-xs-12">
                          @error('img')
                          <p class="text-danger">
                              {{ $message }}
                          </p>
                          @enderror
                      </div>
                   </div>
                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Ajouter une legende à l'image<em style="color:red;">*</em>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                          <input @if($edit) value="{{ $g->legende }}" @else value="{{ old('legende') }}" @endif type="text" id="last-name" name="legende" required="required" class="form-control col-md-9 col-xs-12">
                          @error('legende')
                            <p class="text-danger">
                                {{ $message }}
                            </p>
                          @enderror
                      </div>
                   </div>
                    <div class="form-group">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-8 col-sm-12 col-11 main-section">
                                    <h1 class="text-center text-danger">File Input Example</h1><br>
                                    <form enctype="multipart/form-data">
                                        <div class="form-group">
                                            <div class="file-loading">
                                                <input id="file-1" type="file" multiple class="file" data-overwrite-initial="false" data-min-file-count="2">
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
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
