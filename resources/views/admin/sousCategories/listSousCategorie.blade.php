@extends('layout_admin')
@section('title','Liste des sous-categories')

@section('content')
 <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800">Tableau de bord</h1>
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Nos sous-categories ({{ $subCategory->count() }})</h6>
              @if(@auth()->user()->is_admin)
              <a href="{{ route('addSousCategorie') }}" class="btn  pull-right btnadmin" style="float: right;"><i class="fa fa-plus"></i> Ajouter une sous-categorie</a>
              @endif
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Nom de la sous-categorie</th>

                      <th>Nom de la categorie parent</th>
                      <th>Date d'ajout</th>
                      @if(@auth()->user()->is_admin)
                      <th>Action</th>
                      @endif
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>Nom de la sous categorie</th>

                      <th>Nom de la categorie parent</th>
                      <th>Date d'ajout</th>
                      @if(@auth()->user()->is_admin)
                      <th>Action</th>
                      @endif
                    </tr>
                  </tfoot>
                  <tbody>
                  @foreach($subCategory as $sc)
                    <tr>
                      <td>{{ $sc->libelle }}</td>
                      <td>{{ $sc->category->libelle }}</td>
                      <td>{{ $sc->created_at->format('Y-m-d h:m:s') }}</td>
                      @if(@auth()->user()->is_admin)
                      <td>
                          <a href="{{ route('deleteSousCategorie', ['id' => $sc->id]) }}" class="btn  btn-sm btnad" onclick="return confirm('Vraiment supprimer cette sous-catégorie ?') ">
                              <i class="fa fa-trash"></i>
                          </a>
                          <a href="{{ route('editSousCategorie', ['id' => $sc->id]) }}" class="btn  btn-sm btnadmin"><i class="fa fa-edit"></i></a>
                      </td>
                      @endif
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
