@extends('layout_admin')
@section('title','Liste des Partenaires')

@section('content')
 <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800">Tableau de bord</h1>
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Nos Partenaires ({{ $partenaire->count() }})</h6>
              @if(@auth()->user()->is_admin)
              <a href="{{ route('addPartner') }}" class="btn pull-right btnadmin" style="float: right;"><i class="fa fa-plus"></i> Ajouter un partenaire</a>
              @endif
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                        <th>Logo</th>
                        <th>Nom du partenaire</th>

                        <th>Site du partenaire</th>
                      <th>Date d'ajout</th>
                      @if(@auth()->user()->is_admin)
                      <th>Action</th>
                      @endif
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                        <th>Logo</th>
                        <th>Nom du partenaire</th>

                        <th>Site du partenaire</th>
                      <th>Date d'ajout</th>
                      @if(@auth()->user()->is_admin)
                      <th>Action</th>
                      @endif
                    </tr>
                  </tfoot>
                  <tbody>
                  @foreach($partenaire as $p)
                    <tr>
                        <td>
                            <img style="width: 100px" src='{{ asset("/assets/img/partenaires/$p->logo") }}' alt="post">
                        </td>
                        <td>{{ $p->nom }}</td>
                        <td><a target="_blank" href="{{ $p->url }}">{{ $p->url }}</a></td>
                      <td>{{ $p->created_at->format('d-m-Y') }}</td>
                      @if(@auth()->user()->is_admin)
                      <td>
                          <a href="{{ route('deletePartner', ['id' => $p->id]) }}" class="btn btn-danger btn-sm btnad" onclick="return confirm('Vraiment supprimer cet partenaire ?') "><i class="fa fa-trash"></i></a>
                          <a href="{{ route('editPartner', ['id' => $p->id]) }}" class="btn btn-primary btn-sm btnadmin"><i class="fa fa-edit"></i></a>
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
