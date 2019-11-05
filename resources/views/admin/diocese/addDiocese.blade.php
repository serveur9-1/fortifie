@extends('layout_admin')
@section('title','Ajouter Diocèse')

@section('content')

        <!-- Begin Page Content -->
        <div class="container-fluid">
          <div class="x_panel">
           <div class="x_title">
              <h2><small>Ajouter un diocèse</small></h2>
              <a href="#" class="btn btn-danger btn-sm pull-right mb-4" style="float: right;"><i class="fa fa-eye"></i> Liste des diocèses</a>
              <div class="clearfix"></div>
            </div>
          </div>
          <div class="card mb-4">
            <div class="card-header">
              Ajout de diocèse
            </div>
            <div class="card-body">
              <div class="x_content">
                <form action="http://fortifietoi.ci/laravel-admin/region" method="POST" class="form-horizontal form-label-left" enctype="multipart/form-data">
                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-2 col-xs-12" for="last-name">Ville <em style="color:red;">*</em>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <select name="ville_id" required="required" class="form-control col-md-9 col-xs-12">
                          <option value="2">diocèse 1</option>
                          <option value="6">Promotion</option>
                         </select>
                      </div>
                    </div>
                  <div class="form-group">
                    <label class="control-label col-md-12 col-sm-2 col-xs-12" for="last-name">Nom <em style="color:red;">*</em>
                     </label>
                      <div class="col-md-8 col-sm-8 col-xs-12">
                        <input type="text" id="last-name" name="nom " required="required" class="form-control col-md-9 col-xs-12">
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