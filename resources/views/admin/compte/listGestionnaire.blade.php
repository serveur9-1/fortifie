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
              <h6 class="m-0 font-weight-bold text-primary">Nos Comptes ({{ $user->count() }})</h6>
              @if(@auth()->user()->is_admin)
              <a href="{{ route('ges.addUsers') }}" class="btn  pull-right btnadmin" style="float: right;"><i class="fa fa-plus"></i> Ajouter un gestionnaire</a>
              @endif
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Gestionnaire</th>
                      <th>Email</th>
                      <th>Image</th>
                      <th>Rôle</th>
                      <th>Date d'ajout</th>
                      @if(@auth()->user()->is_admin)
                      <th width="100">Action</th>
                      @endif
                    </tr>
                  </thead>
                  <tbody>
                  @foreach($user as $u)
                      @if($u->id != auth()->user()->id)
                        <tr>
                          <td>{{ $u->name }}</td>
                          <td>{{ $u->email }}</td>
                          <td>
                            <img style="width: 30px" src='{{ asset("/assets/img/users/$u->img") }}' alt="post">
                          </td>
                          <td>
                              <div class="confirm-switch">
                                  <label for="confirm-switch">@if($u->is_admin == 1) <span class="badge badge-danger">Super admin</span> @endif  @if($u->is_staff == 1) <span class="badge badge-success">Superviseur</span> @endif</label>
                              </div>
                          </td>
                          <td>{{ $u->created_at->format('d-m-Y') }}</td>
                          @if(@auth()->user()->is_admin)
                          <td>
                              <a href="{{ route("ges.deleteUser", ["id" => $u->id ]) }}" class="btn  btn-sm btnad" onclick="return confirm('Vraiment supprimer ce gestionnaire ?') "><i class="fa fa-trash"></i></a>
                              <a href="{{ route("ges.editUser", ["id" => $u->id ]) }}" class="btn  btn-sm btnadmin"><i class="fa fa-edit"></i></a>
                          </td>
                          @endif
                        </tr>
                      @endif
                  @endforeach
                  </tbody>
                </table>
              </div>
            </div>
          </div>

        </div>
        <!-- /.container-fluid -->
@endsection
