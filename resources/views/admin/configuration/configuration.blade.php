@extends('layout_admin')
@section('title','Configuration du site')

@section('content')
 <!-- Begin Page Content -->
       <div class="container-fluid">
          <div class="x_panel">
           <div class="x_title">
              <h2><small>Configuration</small></h2>
              <div class="clearfix"></div>
            </div>
          </div>
          <div class="card mb-4">
            <div class="card-header">
               Modification des coordonnées du site
            </div>
            <div class="card-body">
              <div class="x_content">
              <form class="form-horizontal form-label-left" action="{{ route('config.valid') }}" method="POST" enctype="multipart/form-data">
                  @csrf
                  <div class="form-group">
                    
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Téléphone<em style="color:red;">*</em>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12 d-flex">
                          <input class="form-control col-md-2 text-center col-xs-2" disabled type="text" value="(+225)">
                          <input  type="text" value="@foreach($conf as $c) {{ $c->telephone }} @endforeach" id="last-name" name="telephone" required="required" class="form-control col-md-7 col-xs-10">
                          @error('name')
                          <p class="text-danger">{{ $message }}</p>
                          @enderror
                      </div>
                  </div>

                   <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">E-mail<em style="color:red;">*</em>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="email" value="@foreach($conf as $c) {{ $c->email }} @endforeach" id="last-name" name="email" required="required" class="form-control col-md-9 col-xs-12">
                         
                          @error('email')
                          <p class="text-danger">{{ $message }}</p>
                          @enderror
                      </div>
                   </div>
                   <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Localité<em style="color:red;">*</em>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" value="@foreach($conf as $c) {{ $c->localite }} @endforeach" id="last-name" name="localite" required="required" class="form-control col-md-9 col-xs-12">
                          @error('localite')
                          <p class="text-danger">{{ $message }}</p>
                          @enderror
                      </div>
                   </div>

                   <div class="form-group">
                        <label class="control-label col-md-12 col-sm-2 col-xs-12" for="last-name">Texte <em style="color:red;">*</em>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <textarea class="col-md-9 col-xs-12 description" name="description">@foreach($conf as $c) {{ $c->description }} @endforeach</textarea>  
                          @error('description')
                            <p class="text-danger">{{ $message }}</p>
                          @enderror
                        </div>
                        <script src="{{ asset('/dist/js/tinymce.min.js') }}"></script>
                        <script>
                            tinymce.init({
                                selector:'textarea.description',
                                height: 300
                            });
                        </script> 
                    </div>

                   <br><br>
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
