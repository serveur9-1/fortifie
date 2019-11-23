@extends('layout_admin')
@section('title','Liste des Pubs')

@section('content')
 <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800">Tableau de bord</h1>
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Nos Publicités ({{ $pub->count() }})</h6>
              <a href="{{ route('addPub') }}" class="btn  pull-right btnadmin" style="float: right;"><i class="fa fa-plus"></i> Ajouter une Publicité</a>
            </div>
            <div class="card-body">
                <div class="alert alert-info">
                    <h5>INFORMATION</h5>
                    <ul class="list_style">
                        <li>Lorsque la date de fin d'affichage est dépassée, la publicité est désactivée automatiquement.</li>
                        <li>Lorsque la date de fin d'affichage est dépassée et la publicité est coché <b>"activé"</b>, elle est désactivée automatiquement.</li>
                        <li>Lorsque la date de fin d'affichage est toujours valable et la publicité est coché <b>"désactivé"</b>, elle est désactivée automatiquement.</li>
                        <li>Par défaut les publicités sont activées.</li>
                    </ul>
                </div>
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0" style="text-align: center">
                  <thead>
                    <tr>
                      <th>Image</th>
                      <th>Lien</th>
                      <th>Date de début</th>
                      <th>date de fin</th>
                      <th>Etat</th>
                      <th>Date d'ajout</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>Image</th>
                      <th>Lien</th>
                      <th>Date de début</th>
                      <th>date de fin</th>
                      <th>Etat</th>
                      <th>Date d'ajout</th>
                      <th>Action</th>
                    </tr>
                  </tfoot>
                  <tbody>
                  @foreach($pub as $p)
                    <tr>
                      <td><img style="width: 100px" src='{{ asset("/assets/img/pubs/$p->img") }}' alt="post"></td>
                      <td>{{ $p->url }}</td>
                      <td>{{ $p->debut }}</td>
                      <td>{{ $p->fin }}</td>
                      <td>
                            <div class="confirm-switch">
                                <input onchange="change{{ $p->id }}()" type="checkbox" id="confirm-switch{{ $p->id }}" @if($p->is_active) checked @endif>
                                <label for="confirm-switch{{ $p->id }}"></label>
                            </div>
                            <script>
                                function change{{ $p->id }}(){
                                    document.getElementById("changeStateForm{{ $p->id }}").submit();
                                }
                            </script>
                            <form style="display: none;" id="changeStateForm{{ $p->id }}" action="{{ route('enableOrdisablePub', ['id'=> $p->id, 'enable' => $p->is_active]) }}" method="post">
                                @csrf
                            </form>
                      </td>

                      <td>{{ $p->created_at->format('d-m-Y') }}</td>

                      <td>
                        <a href="{{ route('deletePub' ,[ 'id' => $p->id]) }}" class="btn  btn-sm btnad" onclick="return confirm('Vraiment supprimer cette publicité ?') "><i class="fa fa-trash"></i></a>
                        <a href="{{ route('editPub' ,[ 'id' => $p->id]) }}" class="btn  btn-sm btnadmin"><i class="fa fa-edit"></i></a>
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
