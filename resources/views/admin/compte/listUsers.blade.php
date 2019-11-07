@extends('layout_admin')
@section('title','Liste des utilisateurs')

@section('content')
 <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800">Tableau de bord</h1>
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Nos Comptes</h6>
              <a href="{{ route('addUsers') }}" class="btn btn-danger pull-right" style="float: right;"><i class="fa fa-plus"></i> Ajouter un compte</a>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Utilisateur</th>
                      <th>Communauté</th>
                      <th>téléphone</th>
                      <th>email</th>
                      <th>Paroisse</th>
                      <th>Diocèse</th>
                      <th>Image</th>
                      <th>Date d'ajout</th>
                      
                      <th width="100">Action</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>Utilisateur</th>
                      <th>Communauté</th>
                      <th>téléphone</th>
                      <th>email</th>
                      <th>Paroisse</th>
                      <th>Diocèse</th>
                      <th>Image</th>
                      <th>Date d'ajout</th>
                      
                      <th>Action</th>
                    </tr>
                  </tfoot>
                  <tbody>
                    <tr>
                      <td>kouassi Florentin</td>
                      <td>Mouvement Réveil</td>
                      <td>+225 77889944</td>
                      <td>nda@fortifie.ci</td>
                      <td>Notre Dame de Koumassi</td>
                      <td>Diocèse de Grand Bassam</td>
                      <td>
                        <img style="width: 100px" src="{{ asset('/assets/image/blog/post4.jpg') }}" alt="post">
                      </td>
                      <td>29-10-2019</td>
                      
                      <td><button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Vraiment supprimer cette region ?') "><i class="fa fa-trash"></i></button>
                        <a href="http://fortifietoi.ci/laravel-admin/region/2/edit" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></a>
                      </td>
                    </tr>
                    <tr>
                      <td>kouassi Florentin</td>
                      <td>Mouvement Réveil</td>
                      <td>+225 77889944</td>
                      <td>nda@fortifie.ci</td>
                      <td>Notre Dame de Koumassi</td>
                      <td>Diocèse de Grand Bassam</td>
                      <td>
                        <img style="width: 100px" src="{{ asset('/assets/image/blog/post4.jpg') }}" alt="post">
                      </td>
                      <td>29-10-2019</td>
                      
                      <td><button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Vraiment supprimer cette region ?') "><i class="fa fa-trash"></i></button>
                        <a href="http://fortifietoi.ci/laravel-admin/region/2/edit" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></a>
                      </td>
                    </tr>
                    <tr>
                      <td>kouassi Florentin</td>
                      <td>Mouvement Réveil</td>
                      <td>+225 77889944</td>
                      <td>nda@fortifie.ci</td>
                      <td>Notre Dame de Koumassi</td>
                      <td>Diocèse de Grand Bassam</td>
                      <td>
                        <img style="width: 100px" src="{{ asset('/assets/image/blog/post4.jpg') }}" alt="post">
                      </td>
                      <td>29-10-2019</td>
                      
                      <td><button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Vraiment supprimer cette region ?') "><i class="fa fa-trash"></i></button>
                        <a href="http://fortifietoi.ci/laravel-admin/region/2/edit" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></a>
                      </td>
                    </tr>
                    <tr>
                      <td>kouassi Florentin</td>
                      <td>Mouvement Réveil</td>
                      <td>+225 77889944</td>
                      <td>nda@fortifie.ci</td>
                      <td>Notre Dame de Koumassi</td>
                      <td>Diocèse de Grand Bassam</td>
                      <td>
                        <img style="width: 100px" src="{{ asset('/assets/image/blog/post4.jpg') }}" alt="post">
                      </td>
                      <td>29-10-2019</td>
                      
                      <td><button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Vraiment supprimer cette region ?') "><i class="fa fa-trash"></i></button>
                        <a href="http://fortifietoi.ci/laravel-admin/region/2/edit" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></a>
                      </td>
                    </tr>
                    <tr>
                      <td>kouassi Florentin</td>
                      <td>Mouvement Réveil</td>
                      <td>+225 77889944</td>
                      <td>nda@fortifie.ci</td>
                      <td>Notre Dame de Koumassi</td>
                      <td>Diocèse de Grand Bassam</td>
                      <td>
                        <img style="width: 100px" src="{{ asset('/assets/image/blog/post4.jpg') }}" alt="post">
                      </td>
                      <td>29-10-2019</td>
                      
                      <td><button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Vraiment supprimer cette region ?') "><i class="fa fa-trash"></i></button>
                        <a href="http://fortifietoi.ci/laravel-admin/region/2/edit" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></a>
                      </td>
                    </tr>
                    <tr>
                      <td>kouassi Florentin</td>
                      <td>Mouvement Réveil</td>
                      <td>+225 77889944</td>
                      <td>nda@fortifie.ci</td>
                      <td>Notre Dame de Koumassi</td>
                      <td>Diocèse de Grand Bassam</td>
                      <td>
                        <img style="width: 100px" src="{{ asset('/assets/image/blog/post4.jpg') }}" alt="post">
                      </td>
                      <td>29-10-2019</td>
                      
                      <td><button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Vraiment supprimer cette region ?') "><i class="fa fa-trash"></i></button>
                        <a href="http://fortifietoi.ci/laravel-admin/region/2/edit" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></a>
                      </td>
                    </tr>
                    <tr>
                      <td>kouassi Florentin</td>
                      <td>Mouvement Réveil</td>
                      <td>+225 77889944</td>
                      <td>nda@fortifie.ci</td>
                      <td>Notre Dame de Koumassi</td>
                      <td>Diocèse de Grand Bassam</td>
                      <td>
                        <img style="width: 100px" src="{{ asset('/assets/image/blog/post4.jpg') }}" alt="post">
                      </td>
                      <td>29-10-2019</td>
                      
                      <td><button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Vraiment supprimer cette region ?') "><i class="fa fa-trash"></i></button>
                        <a href="http://fortifietoi.ci/laravel-admin/region/2/edit" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></a>
                      </td>
                    </tr>
                    <tr>
                      <td>kouassi Florentin</td>
                      <td>Mouvement Réveil</td>
                      <td>+225 77889944</td>
                      <td>nda@fortifie.ci</td>
                      <td>Notre Dame de Koumassi</td>
                      <td>Diocèse de Grand Bassam</td>
                      <td>
                        <img style="width: 100px" src="{{ asset('/assets/image/blog/post4.jpg') }}" alt="post">
                      </td>
                      <td>29-10-2019</td>
                      
                      <td><button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Vraiment supprimer cette region ?') "><i class="fa fa-trash"></i></button>
                        <a href="http://fortifietoi.ci/laravel-admin/region/2/edit" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></a>
                      </td>
                    </tr>
                    <tr>
                      <td>kouassi Florentin</td>
                      <td>Mouvement Réveil</td>
                      <td>+225 77889944</td>
                      <td>nda@fortifie.ci</td>
                      <td>Notre Dame de Koumassi</td>
                      <td>Diocèse de Grand Bassam</td>
                      <td>
                        <img style="width: 100px" src="{{ asset('/assets/image/blog/post4.jpg') }}" alt="post">
                      </td>
                      <td>29-10-2019</td>
                      
                      <td><button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Vraiment supprimer cette region ?') "><i class="fa fa-trash"></i></button>
                        <a href="http://fortifietoi.ci/laravel-admin/region/2/edit" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></a>
                      </td>
                    </tr>
                    <tr>
                      <td>kouassi Florentin</td>
                      <td>Mouvement Réveil</td>
                      <td>+225 77889944</td>
                      <td>nda@fortifie.ci</td>
                      <td>Notre Dame de Koumassi</td>
                      <td>Diocèse de Grand Bassam</td>
                      <td>
                        <img style="width: 100px" src="{{ asset('/assets/image/blog/post4.jpg') }}" alt="post">
                      </td>
                      <td>29-10-2019</td>
                      
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