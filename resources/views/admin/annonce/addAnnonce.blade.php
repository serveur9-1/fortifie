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
                <form action="#" method="POST" class="form-horizontal form-label-left" enctype="multipart/form-data">
                  <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Téléphone<em style="color:red;">*</em>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="last-name" name="contact_telephone" required="required" class="form-control col-md-9 col-xs-12">
                      </div>
                   </div>
                   <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Fixe<em style="color:red;">*</em>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="last-name" name="contact_fixe" required="required" class="form-control col-md-9 col-xs-12">
                      </div>
                   </div>
                   <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">E-mail<em style="color:red;">*</em>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="last-name" name="contact_email" required="required" class="form-control col-md-9 col-xs-12">
                      </div>
                   </div>
                   <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Description<em style="color:red;">*</em>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                          <textarea type="text" id="last-name" name="description" required="required" class="form-control col-md-9 col-xs-12"></textarea> 
                      </div>
                   </div>
                   <div class="form-group">
                      <label class="control-label col-md-3 col-sm-2 col-xs-12" for="last-name">Catégorie <em style="color:red;">*</em>
                      </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <select name="categorie_id" required="required" class="form-control col-md-9 col-xs-12">
                            <option value="2">Evengelisation</option>
                            <option value="6">Promotion</option>
                           </select>
                        </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-2 col-xs-12" for="last-name">Diocèse <em style="color:red;">*</em>
                      </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <select name="diocese_id" required="required" class="form-control col-md-9 col-xs-12">
                            <option value="2">diocèse 1</option>
                            <option value="6">Promotion</option>
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
                          <input type="datetime-local" id="last-name" name="debut" required="required" class="form-control col-md-9 col-xs-12">
                      </div>
                   </div>
                   <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Date de fin<em style="color:red;">*</em>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="datetime-local" id="last-name" name="fin" required="required" class="form-control col-md-9 col-xs-12">
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