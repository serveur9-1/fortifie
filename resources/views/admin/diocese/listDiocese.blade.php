@extends('layout_admin')
@section('title','Liste des diocèses')

@section('content')
 <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800">Tableau de bord</h1>
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Nos diocèses ({{ $diocese->count() }})</h6>
              @if(@auth()->user()->is_admin)
              <a href="{{ route('addDiocese') }}" class="btn  pull-right btnadmin" style="float: right;"><i class="fa fa-plus"></i> Ajouter un diocèse</a>
              @endif
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Nom</th>
                      <th>Ville</th>
                      <th>Date de création</th>
                      @if(@auth()->user()->is_admin)
                      <th>Action</th>
                      @endif
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>Nom</th>
                      <th>Ville rattachée</th>
                      <th>Date de création</th>
                      @if(@auth()->user()->is_admin)
                      <th>Action</th>
                      @endif
                    </tr>
                  </tfoot>
                  <tbody>
                  @foreach($diocese as $d)
                    <tr>
                      <td>{{ $d->nom }}</td>
                      <td>
                        @foreach($d->ville as $v)
                          <span class="badge badge-dark">{{ $v->libelle }}</span>
                        @endforeach
                      </td>
                      <td>{{ $d->created_at->format('d-m-Y h:m:s') }}</td>
                      @if(@auth()->user()->is_admin)
                      <td>
                          <a href="{{ route('deleteDiocese',['id' => $d->id]) }}" class="btn  btn-sm btnad" onclick="return confirm('Vraiment supprimer cette region ?') ">
                              <i class="fa fa-trash"></i>
                          </a>
                        <a href="{{ route("editDiocese", ['id' => $d->id]) }}" class="btn btn-primary btn-sm btnadmin"><i class="fa fa-edit"></i></a>
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
