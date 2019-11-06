@extends('layout_admin')
@section('title','Liste des categories')

@section('content')
 <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800">Tablau de bord</h1>
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Nos Catégories ({{ $category->count() }})</h6>
              <a href="add_diocese.html" class="btn btn-danger pull-right" style="float: right;"><i class="fa fa-plus"></i> Ajouter une Catégorie</a>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Nom de la categorie</th>
                      <th>Date d'ajout</th>

                      <th>Action</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>Nom de la categorie</th>
                      <th>Date d'ajout</th>

                      <th>Action</th>
                    </tr>
                  </tfoot>
                  <tbody>
                    @foreach($category as $c)
                        <tr>
                          <td>{{ $c->libelle }}</td>
                          <td>{{ $c->created_at->format('d-m-Y h:m:s') }}</td>
                          <td>
                              <a href="{{ route('deleteCategorie', ['id' => $c->id]) }}" class="btn btn-danger btn-sm" onclick="return confirm('Vraiment supprimer cette CAtégorie ?') ">
                                  <i class="fa fa-trash"></i>
                              </a>
                              <a href="{{ route('editCategorie', ['id' => $c->id]) }}" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></a>
                          </td>
                        </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
            </div>
          </div>

        </div>
        <!-- /.container-fluid -->
@endsection
