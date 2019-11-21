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
              <h6 class="m-0 font-weight-bold text-primary">Nos Paroisses ({{ $paroisse->count() }})</h6>
              <a href="{{ route('addParoisse') }}" class="btn btn-danger pull-right btnadmin" style="float: right;"><i class="fa fa-plus"></i> Ajouter une paroisse</a>
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
                  @foreach($paroisse as $p)
                    <tr>
                      <td>{{ $p->nom }}</td>
                      <td>{{ $p->telephone }}</td>
                      <td>{{ $p->fixe }}</td>
                      <td>{{ $p->email }}</td>
                      <td>{{ $p->diocese->nom }}</td>
                      <td>{{ $p->created_at->format('d-m-Y') }}</td>

                      <td>
                          <a href="{{ route('deleteParoisse', ['id' => $p->id]) }}" class="btn btn-danger btn-sm btnad" onclick="return confirm('Vraiment supprimer cette paroisse ?') "><i class="fa fa-trash"></i></a>
                        <a href="{{ route('editParoisse', ['id' => $p->id]) }}" class="btn btn-primary btn-sm btnadmin"><i class="fa fa-edit"></i></a>
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
