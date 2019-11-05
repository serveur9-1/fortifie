@extends('layout_admin')
@section('title','Ajouter des Medias')

@section('content')
 <!-- Begin Page Content -->
       <div class="container-fluid">
          <div class="x_panel">
           <div class="x_title">
              <h2><small>Ajouter une image a la galerie</small></h2>
              <a href="#" class="btn btn-danger btn-sm pull-right mb-4" style="float: right;"><i class="fa fa-eye"></i> Liste des images de la galerie</a>
              <div class="clearfix"></div>
            </div>
          </div>
          <div class="card mb-4">
            <div class="card-header">
              Ajout d'image
            </div>
            <div class="card-body">
              <div class="x_content">
                <form action="#" method="POST" class="form-horizontal form-label-left" enctype="multipart/form-data">
                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Nom de l'image<em style="color:red;">*</em>
                      </label>
                      <div class="col-md-12 col-sm-12 col-lg-6 col-xs-12">
                          <input type="file" id="last-name" name="img" required="required" class="form-control col-md-9 col-xs-12">
                      </div>
                   </div>
                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Ajouter une legende a l'image<em style="color:red;">*</em>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="last-name" name="legende" required="required" class="form-control col-md-9 col-xs-12">
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