@extends('layout_admin')
@section('title','Liste des sous-categories')

@section('content')
 <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800">Tablau de bord</h1>
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Nos sous-categories</h6>
              <a href="add_diocese.html" class="btn btn-danger pull-right" style="float: right;"><i class="fa fa-plus"></i> Ajouter une sous-categorie</a>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Nom de la sous-categorie</th>
                      
                      <th>Nom de la categorie parent</th>
                      <th>Date d'ajout</th>
                      
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>Nom de la sous categorie</th>
                      
                      <th>Nom de la categorie parent</th>
                      <th>Date d'ajout</th>
                      
                      <th>Action</th>
                    </tr>
                  </tfoot>
                  <tbody>
                    <tr>
                      <td>Abidjan</td>
                      <td>Abengourou</td>
                      <td>Abengourou</td>
                      
                      <td><button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Vraiment supprimer cette sous-catégorie ?') "><i class="fa fa-trash"></i></button>
                        <a href="#" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></a>
                      </td>
                    </tr>
                    <tr>
                      <td>Abengourou</td>
                      <td>Abengourou</td>
                      <td>Abengourou</td>

                      
                      <td><button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Vraiment supprimer cette region ?') "><i class="fa fa-trash"></i></button>
                        <a href="http://fortifietoi.ci/laravel-admin/region/2/edit" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></a>
                      </td>
                    </tr>
                    <tr>
                      <td>Agboville</td>
                      <td>Abengourou</td>
                      <td>Abengourou</td>
                      
                     <td><button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Vraiment supprimer cette region ?') "><i class="fa fa-trash"></i></button>
                        <a href="http://fortifietoi.ci/laravel-admin/region/2/edit" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></a>
                      </td>
                    </tr>
                    <tr>
                      <td>Bondoukou</td>
                      <td>Abengourou</td>
                      <td>Abengourou</td>
                     
                     <td><button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Vraiment supprimer cette region ?') "><i class="fa fa-trash"></i></button>
                        <a href="http://fortifietoi.ci/laravel-admin/region/2/edit" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></a>
                      </td>
                    </tr>
                    <tr>
                      <td>Bouaké</td>
                      <td>Abengourou</td>
                      <td>Abengourou</td>

                     <td><button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Vraiment supprimer cette region ?') "><i class="fa fa-trash"></i></button>
                        <a href="http://fortifietoi.ci/laravel-admin/region/2/edit" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></a>
                      </td>
                      
                    </tr>
                    <tr>
                      <td>Daloa</td>
                      <td>Abengourou</td>
                      <td>Abengourou</td>
                      
                      <td><button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Vraiment supprimer cette region ?') "><i class="fa fa-trash"></i></button>
                        <a href="http://fortifietoi.ci/laravel-admin/region/2/edit" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></a>
                      </td>
                    </tr>
                    <tr>
                      <td>Gagnoa</td>
                      <td>Abengourou</td>
                      <td>Abengourou</td>
                      
                     <td><button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Vraiment supprimer cette region ?') "><i class="fa fa-trash"></i></button>
                        <a href="http://fortifietoi.ci/laravel-admin/region/2/edit" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></a>
                      </td>
                    </tr>
                    <tr>
                      <td>Grand Bassam</td>
                      <td>Abengourou</td>
                      <td>Abengourou</td>
                     <td><button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Vraiment supprimer cette region ?') "><i class="fa fa-trash"></i></button>
                        <a href="http://fortifietoi.ci/laravel-admin/region/2/edit" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></a>
                      </td>
                    </tr>
                    <tr>
                      <td>Colleen Hurst</td>
                      <td>Abengourou</td>
                      <td>Abengourou</td>
                      
                     <td><button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Vraiment supprimer cette region ?') "><i class="fa fa-trash"></i></button>
                        <a href="http://fortifietoi.ci/laravel-admin/region/2/edit" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></a>
                      </td>
                    </tr>
                    <tr>
                      
                      <td>Charde Marshall</td>
                      <td>Abengourou</td>
                      <td>Abengourou</td>
                      
                     <td><button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Vraiment supprimer cette region ?') "><i class="fa fa-trash"></i></button>
                        <a href="http://fortifietoi.ci/laravel-admin/region/2/edit" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></a>
                      </td>
                    </tr>
                  
                  </tbody>
                </table>
              </div>
            </div>
          </div>

        </div>
        <!-- /.container-fluid -->
@endsection