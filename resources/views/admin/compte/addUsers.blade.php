@extends('layout_admin')
@section('title','Ajouter Paroisse')

@section('content')
 <!-- Begin Page Content -->
       <div class="container-fluid">
          <div class="x_panel">
           <div class="x_title">
              <h2><small>Ajouter un Compte</small></h2>
              <a href="{{ route('listUsers') }}" class="btn btn-danger btn-sm pull-right mb-4" style="float: right;"><i class="fa fa-eye"></i> Liste des Comptes</a>
              <div class="clearfix"></div>
            </div>
          </div>
          <div class="card mb-4">
            <div class="card-header">
              Ajout de compte
            </div>
            <div class="card-body">
              <div class="x_content">
                <form action="#" method="POST" class="form-horizontal form-label-left" enctype="multipart/form-data">
                  <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Nom d'utilisateur
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="last-name" name="name" required="required" class="form-control col-md-9 col-xs-12">
                      </div>
                  </div>
                  <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Nom de la communauté 
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="last-name" name="communaute" required="required" class="form-control col-md-9 col-xs-12">
                      </div>
                  </div>
                  <div class="form-group">
                      <label class="control-label col-md-3 col-sm-2 col-xs-12" for="last-name">Diocese rattaché<em style="color:red;">*</em>
                      </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <select name="diocese_id" required="required" class="form-control col-md-9 col-xs-12">
                            <option value="2">Diocèse de Grand Bassam</option>
                            <option value="6">Diocèse d'abengourou</option>
                           </select>
                        </div>
                  </div>
                  <div class="form-group">
                      <label class="control-label col-md-3 col-sm-2 col-xs-12" for="last-name">Paroisse rattachée<em style="color:red;">*</em>
                      </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <select name="paroisse_id" required="required" class="form-control col-md-9 col-xs-12">
                            <option value="2">paroisse de Grand Bassam</option>
                            <option value="6">Paroisse d'abengourou</option>
                           </select>
                        </div>
                    </div>
                   <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Numero de téléphone
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="last-name" name="telephone" required="required" class="form-control col-md-9 col-xs-12">
                      </div>
                   </div>
                   <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">E-mail<em style="color:red;">*</em>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="email" id="last-name" name="email" required="required" class="form-control col-md-9 col-xs-12">
                      </div>
                   </div>
                   <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Mot de passe<em style="color:red;">*</em>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="password" id="last-name" name="password" required="required" class="form-control col-md-9 col-xs-12">
                      </div>
                   </div>
                   <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Confirmer le mot de passe<em style="color:red;">*</em>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="password" id="last-name" name="password" required="required" class="form-control col-md-9 col-xs-12">
                      </div>
                   </div>
                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Upload l'image<em style="color:red;">*</em>
                      </label>
                      <div class="col-md-12 col-sm-12 col-lg-6 col-xs-12">
                          <input type="file" id="last-name" name="img" required="required" class="form-control col-md-9 col-xs-12">
                      </div>
                   </div><br><br>
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