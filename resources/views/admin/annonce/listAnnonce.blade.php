@extends('layout_admin')
@section('title','Liste des Annonces')

@section('content')
 <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800">Tablau de bord</h1>
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Nos Annonces</h6>
              <a href="add_diocese.html" class="btn btn-danger pull-right" style="float: right;"><i class="fa fa-plus"></i> Ajouter une annonce</a>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Titre</th>
                      
                      <th>catégorie</th>
                      <th>paroisse</th>
                      <th>email</th>
                      <th>Date de creation</th>
                      <th>Etat</th>
                      <th>telephone</th>
                      
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>Titre</th>
                      
                      <th>catégorie</th>
                      <th>paroisse</th>
                      <th>email</th>
                      <th>Date de creation</th>
                      <th>Etat</th>
                      <th>telephone</th>
                      
                      <th>Action</th>
                    </tr>
                  </tfoot>
                  <tbody>
                    <tr>
                      <td>demande priere</td>
                      <td>Evangelisation</td>
                      <td>Notre dame de Koumassi</td>
                      <td>nda@fortifie.ci</td>
                      <td>15-10-19</td>
                      <td>
                        <div class="confirm-switch">
                          <input type="checkbox" id="confirm-switch" checked>
                          <label for="confirm-switch"></label>
                        </div>
                      </td>
                      <td>77832982</td>
                      
                      <td><button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Vraiment supprimer cette region ?') "><i class="fa fa-trash"></i></button>
                        <a href="http://fortifietoi.ci/laravel-admin/region/2/edit" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></a>
                      </td>
                    </tr>
                    <tr>
                      <td>demande priere</td>
                      <td>Evangelisation</td>
                      <td>Notre dame de Koumassi</td>
                      <td>nda@fortifie.ci</td>
                      <td>15-10-19</td>
                      <td>
                        <div class="confirm-switch">
                          <input type="checkbox" id="confirm-switch0" checked>
                          <label for="confirm-switch0"></label>
                        </div>
                      </td>
                      <td>77832982</td>
                      
                      <td><button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Vraiment supprimer cette region ?') "><i class="fa fa-trash"></i></button>
                        <a href="http://fortifietoi.ci/laravel-admin/region/2/edit" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></a>
                      </td>
                    </tr>
                    <tr>
                      <td>demande priere</td>
                      <td>Evangelisation</td>
                      <td>Notre dame de Koumassi</td>
                      <td>nda@fortifie.ci</td>
                      <td>15-10-19</td>
                      <td>
                        <div class="confirm-switch">
                          <input type="checkbox" id="confirm-switch3" checked>
                          <label for="confirm-switch3"></label>
                        </div>
                      </td>
                      <td>77832982</td>
                      
                      <td><button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Vraiment supprimer cette region ?') "><i class="fa fa-trash"></i></button>
                        <a href="http://fortifietoi.ci/laravel-admin/region/2/edit" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></a>
                      </td>
                    </tr>
                    <tr>
                      <td>demande priere</td>
                      <td>Evangelisation</td>
                      <td>Notre dame de Koumassi</td>
                      <td>nda@fortifie.ci</td>
                      <td>15-10-19</td>
                      <td>
                        <div class="confirm-switch">
                          <input type="checkbox" id="confirm-switch4" checked>
                          <label for="confirm-switch4"></label>
                        </div>
                      </td>
                      <td>77832982</td>
                      
                      <td><button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Vraiment supprimer cette region ?') "><i class="fa fa-trash"></i></button>
                        <a href="http://fortifietoi.ci/laravel-admin/region/2/edit" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></a>
                      </td>
                    </tr>
                    <tr>
                      <td>demande priere</td>
                      <td>Evangelisation</td>
                      <td>Notre dame de Koumassi</td>
                      <td>nda@fortifie.ci</td>
                      <td>15-10-19</td>
                      <td>
                        <div class="confirm-switch">
                          <input type="checkbox" id="confirm-switch5" checked>
                          <label for="confirm-switch5"></label>
                        </div>
                      </td>
                      <td>77832982</td>
                      
                      <td><button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Vraiment supprimer cette region ?') "><i class="fa fa-trash"></i></button>
                        <a href="http://fortifietoi.ci/laravel-admin/region/2/edit" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></a>
                      </td>
                    </tr>
                    <tr>
                      <td>demande priere</td>
                      <td>Evangelisation</td>
                      <td>Notre dame de Koumassi</td>
                      <td>nda@fortifie.ci</td>
                      <td>15-10-19</td>
                      <td>
                        <div class="confirm-switch">
                          <input type="checkbox" id="confirm-switch6" checked>
                          <label for="confirm-switch6"></label>
                        </div>
                      </td>
                      <td>77832982</td>
                      
                      <td><button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Vraiment supprimer cette region ?') "><i class="fa fa-trash"></i></button>
                        <a href="http://fortifietoi.ci/laravel-admin/region/2/edit" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></a>
                      </td>
                    </tr>
                    <tr>
                      <td>demande priere</td>
                      <td>Evangelisation</td>
                      <td>Notre dame de Koumassi</td>
                      <td>nda@fortifie.ci</td>
                      <td>15-10-19</td>
                      <td>
                        <div class="confirm-switch">
                          <input type="checkbox" id="confirm-switch7" checked>
                          <label for="confirm-switch7"></label>
                        </div>
                      </td>
                      <td>77832982</td>
                      
                      <td><button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Vraiment supprimer cette region ?') "><i class="fa fa-trash"></i></button>
                        <a href="http://fortifietoi.ci/laravel-admin/region/2/edit" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></a>
                      </td>
                    </tr>
                    <tr>
                      <td>demande priere</td>
                      <td>Evangelisation</td>
                      <td>Notre dame de Koumassi</td>
                      <td>nda@fortifie.ci</td>
                      <td>15-10-19</td>
                      <td>
                        <div class="confirm-switch">
                          <input type="checkbox" id="confirm-switch8" checked>
                          <label for="confirm-switch8"></label>
                        </div>
                      </td>
                      <td>77832982</td>
                      
                      <td><button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Vraiment supprimer cette region ?') "><i class="fa fa-trash"></i></button>
                        <a href="http://fortifietoi.ci/laravel-admin/region/2/edit" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></a>
                      </td>
                    </tr>
                    <tr>
                      <td>demande priere</td>
                      <td>Evangelisation</td>
                      <td>Notre dame de Koumassi</td>
                      <td>nda@fortifie.ci</td>
                      <td>15-10-19</td>
                      <td>
                        <div class="confirm-switch">
                          <input type="checkbox" id="confirm-switch2" checked>
                          <label for="confirm-switch2"></label>
                        </div>
                      </td>
                      <td>77832982</td>
                      
                      <td><button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Vraiment supprimer cette region ?') "><i class="fa fa-trash"></i></button>
                        <a href="http://fortifietoi.ci/laravel-admin/region/2/edit" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></a>
                      </td>
                    </tr>
                    <tr>
                      <td>demande priere</td>
                      <td>Evangelisation</td>
                      <td>Notre dame de Koumassi</td>
                      <td>nda@fortifie.ci</td>
                      <td>15-10-19</td>
                      <td>
                        <div class="confirm-switch">
                          <input type="checkbox" id="confirm-switch1" checked>
                          <label for="confirm-switch1"></label>
                        </div>
                      </td>
                      <td>77832982</td>
                      
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