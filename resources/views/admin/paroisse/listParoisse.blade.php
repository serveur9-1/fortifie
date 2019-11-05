@extends('layout_admin')
@section('title','Liste des Paroisse')

@section('content')
 <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800">Tableau de bord</h1>
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Nos Paroisse</h6>
              <a href="add_diocese.html" class="btn btn-danger pull-right" style="float: right;"><i class="fa fa-plus"></i> Ajouter une paroisse</a>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Nom de la paroisse</th>
                      <th>Telephone</th>
                      <th>Fixe</th>
                      <th>email</th>
                      <th>Diocèse</th>
                      <th>date d'ajout</th>
                      
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>Nom de la paroisse</th>
                      <th>Telephone</th>
                      <th>Fixe</th>
                      <th>email</th>
                      <th>Diocèse</th>
                      <th>date d'ajout</th>
                      
                      <th>Action</th>
                    </tr>
                  </tfoot>
                  <tbody>
                    <tr>
                      <td>Notre Dame de l'Assemption Koumassi</td>
                      <td>+225 77889944</td>
                      <td>+225 22887788</td>
                      <td>nda@fortifie.ci</td>
                      <td>Diocèse de Grand-Bassam</td>
                      <td>27-10-2019</td>
                      
                      <td><button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Vraiment supprimer cette region ?') "><i class="fa fa-trash"></i></button>
                        <a href="http://fortifietoi.ci/laravel-admin/region/2/edit" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></a>
                      </td>
                    </tr>
                    <tr>
                      <td>Notre Dame de l'Assemption Koumassi</td>
                      <td>+225 77889944</td>
                      <td>+225 22887788</td>
                      <td>nda@fortifie.ci</td>
                      <td>Diocèse de Grand-Bassam</td>
                      <td>27-10-2019</td>
                      
                      <td><button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Vraiment supprimer cette region ?') "><i class="fa fa-trash"></i></button>
                        <a href="http://fortifietoi.ci/laravel-admin/region/2/edit" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></a>
                      </td>
                    </tr>
                    <tr>
                      <td>Notre Dame de l'Assemption Koumassi</td>
                      <td>+225 77889944</td>
                      <td>+225 22887788</td>
                      <td>nda@fortifie.ci</td>
                      <td>Diocèse de Grand-Bassam</td>
                      <td>27-10-2019</td>
                      
                      <td width="100"><button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Vraiment supprimer cette region ?') "><i class="fa fa-trash"></i></button>
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