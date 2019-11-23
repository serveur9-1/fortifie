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
              <a href="{{ route('addUsers') }}" class="btn  pull-right btnadmin" style="float: right;"><i class="fa fa-plus"></i> Ajouter un compte</a>
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
                      <th>Activé</th>
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
                      <th>Activé</th>
                      <th>Date d'ajout</th>

                      <th>Action</th>
                    </tr>
                  </tfoot>
                  <tbody>
                  @foreach($user as $u)
                      @if($u->id != 1)
                        <tr>
                      <td>{{ $u->name }}</td>

                     <td>
                        @foreach($u->gestionnaire as $g)
                            {{ $g->communaute }}
                        @endforeach
                     </td>
                    <td>
                        @foreach($u->gestionnaire as $g)
                            {{ $g->telephone }}
                        @endforeach
                    </td>
                      <td>{{ $u->email }}</td>
                    <td>
                        @foreach($u->gestionnaire as $g)
                            {{ $g->paroisse[0]->nom }}
                        @endforeach
                    </td>
                    <td>
                        @foreach($u->gestionnaire as $g)
                            {{ $g->paroisse[0]->diocese->nom }}
                        @endforeach
                    </td>
                      <td>
                        <img style="width: 100px" src='{{ asset("/assets/img/users/$u->img") }}' alt="post">
                      </td>
                    <td>
                        <div class="confirm-switch">
                            <input onchange="change{{ $u->id }}()" type="checkbox" id="confirm-switch{{ $u->id }}" @if($u->is_active) checked @endif>
                            <label for="confirm-switch{{ $u->id }}"></label>
                        </div>
                        <script>
                            function change{{ $u->id }}(){
                                document.getElementById("changeStateForm{{ $u->id }}").submit();
                            }
                        </script>
                        <form style="display: none;" id="changeStateForm{{ $u->id }}" action="{{ route('enableOrdisableUserAccount', ['id' => $u->id, 'enable' => $u->is_active]) }}" method="post">
                            @csrf
                        </form>
                    </td>
                      <td>{{ $u->created_at->format('d-m-Y') }}</td>

                      <td>
                          <a href="{{ route("deleteUser", ["id" => $u->id ]) }}" class="btn  btn-sm btnad" onclick="return confirm('Vraiment supprimer cette region ?') "><i class="fa fa-trash"></i></a>
                          <a href="{{ route("editUser", ["id" => $u->id ]) }}" class="btn  btn-sm btnadmin"><i class="fa fa-edit"></i></a>
                      </td>
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
