@extends('layout_admin')
@section('title','Ajouter des annonces')

@section('content')
 <!-- Begin Page Content -->
       <div class="container-fluid">
          <div class="x_panel">
           <div class="x_title">
              <h2><small>Ajouter une annonce</small></h2>
              <a href="#" class="btn btn-danger btn-sm pull-right mb-4" style="float: right;"><i class="fa fa-eye"></i> Liste des annonces</a>
              <div class="clearfix"></div>
            </div>
          </div>
          <div class="card mb-4">
            <div class="card-header">
              Ajout d'annonce
            </div>
            <div class="card-body">
              <div class="x_content">
                <form action="{{ route('validAnnonce') }}" method="POST" class="form-horizontal form-label-left" enctype="multipart/form-data">
                @csrf
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Titre<em style="color:red;">*</em>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input type="text" id="titre" name="titre" class="form-control col-md-9 col-xs-12">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Description<em style="color:red;">*</em>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <textarea rows="10" type="text" id="last-name" name="description" required="required" class="form-control col-md-9 col-xs-12"></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Téléphone
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="last-name" name="contact_telephone" class="form-control col-md-9 col-xs-12">
                      </div>
                   </div>
                   <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Fixe
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="last-name" name="contact_fixe"  class="form-control col-md-9 col-xs-12">
                      </div>
                   </div>
                   <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">E-mail
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="last-name" name="contact_email" class="form-control col-md-9 col-xs-12">
                      </div>
                   </div>
                   <div class="form-group">
                      <label class="control-label col-md-3 col-sm-2 col-xs-12" for="last-name">Catégorie <em style="color:red;">*</em>
                      </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <select name="category" required="required" class="form-control col-md-9 col-xs-12">
                            <option>Sélectionnez une catégorie</option>
                          @foreach($category as $c)
                            <option value="{{ $c->id }}">{{ $c->libelle }}</option>
                          @endforeach
                           </select>
                        </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-2 col-xs-12" for="last-name">Paroisse <em style="color:red;">*</em>
                      </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <select name="paroisse" required="required" class="form-control col-md-9 col-xs-12">
                            <option>Sélectionnez paroisse</option>
                          @foreach($paroisse as $p)
                            <option value="{{ $p->id }}">{{ $p->nom }}</option>
                          @endforeach
                           </select>
                        </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Ajoutez une image<em style="color:red;">*</em>
                      </label>
                      <div class="col-md-12 col-sm-12 col-lg-6 col-xs-12">
                          <input type="file" id="" name="img" required="required" class="form-control col-md-9 col-xs-12">
                      </div>
                   </div>
                   <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Date debut<em style="color:red;">*</em>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="date" id="last-name" name="debut" required="required" class="form-control col-md-9 col-xs-12">
                      </div>
                   </div>

                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Heure debut<em style="color:red;">*</em>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input type="time" id="last-name" name="heure_debut" required="required" class="form-control col-md-9 col-xs-12">
                        </div>
                    </div>

                   <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Date de fin<em style="color:red;">*</em>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="date" id="last-name" name="fin" required="required" class="form-control col-md-9 col-xs-12">
                      </div>
                   </div>
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Heure fin<em style="color:red;">*</em>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input type="time" id="last-name" name="heure_fin" required="required" class="form-control col-md-9 col-xs-12">
                        </div>
                    </div>

                    <br><br>
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