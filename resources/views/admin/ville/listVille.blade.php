@extends('layout_admin')
@section('title','Liste des Villes')

@section('content')
 <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800">Tableau de bord</h1>
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Nos Villes ({{ $ville->count() }})</h6>
              @if(@auth()->user()->is_admin)
              <a href="{{ route('addVille') }}" class="btn pull-right btnadmin" style="float: right;"><i class="fa fa-plus"></i> Ajouter une ville</a>
              @endif
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Nom de la Ville</th>
                      <th>Date d'ajout</th>
                      @if(@auth()->user()->is_admin)
                      <th>Action</th>
                      @endif
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>Nom de la ville</th>
                      <th>Date d'ajout</th>
                      @if(@auth()->user()->is_admin)
                      <th>Action</th>
                      @endif
                    </tr>
                  </tfoot>
                  <tbody>
                  @foreach($ville as $v)
                    <tr>
                      <td>{{ $v->libelle }}</td>
                      <td>{{ $v->created_at->format('d-m-Y') }}</td>
                      @if(@auth()->user()->is_admin)
                      <td><a href="{{ route('deleteVille', ['id' => $v->id]) }}" class="btn btn-danger btn-sm btnad" onclick="return confirm('Vraiment supprimer cette ville ?') "><i class="fa fa-trash"></i></a>
                        <a href="{{ route('editVille', ['id' => $v->id]) }}" class="btn btn-primary btn-sm btnadmin"><i class="fa fa-edit"></i></a>
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
