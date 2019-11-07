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
              <h6 class="m-0 font-weight-bold text-primary">Nos Annonces ({{ $article->count() }})</h6>
              <a href="{{ route('addAnnonce') }}" class="btn btn-danger pull-right" style="float: right;"><i class="fa fa-plus"></i> Ajouter une annonce</a>
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

                      <th>Catégorie</th>
                      <th>Paroisse</th>
                      <th>Email</th>
                      <th>Date de creation</th>
                      <th>Etat</th>
                      <th>Telephone</th>

                      <th>Action</th>
                    </tr>
                  </tfoot>
                  <tbody>
                  @foreach($article as $a)
                    <tr>
                      <td title="{{ $a->titre }}">{{ Str::limit($a->titre, 10) }}</td>
                      <td>{{ $a->category->libelle }}</td>
                      <td>{{ $a->paroisse->nom }}</td>
                      <td>{{ $a->contact_email }}</td>
                      <td>{{ $a->created_at->format('Y-m-d h:m:s')}}</td>
                      <td>
                        <div class="confirm-switch">
                        <form id="changeStateForm{{ $a->id }}" action="{{ route('enableOrdisableArticle', ['id'=> $a->id, 'enable' => $a->is_active]) }}" method="post">@csrf
                          <input onchange="test()" type="checkbox" id="confirm-switch{{ $a->id }}" @if($a->is_active) checked @endif>
                          <label for="confirm-switch{{ $a->id }}"></label>
                            <script>function test(){ document.getElementById("changeStateForm{{ $a->id }}").submit(); }</script>
                        </form>
                        </div>
                      </td>
                      <td>{{ $a->contact_fixe }} {{ $a->contact_telephone }}</td>

                      <td>
                          <a href="{{ route('deleteAnnonce', ['id' => $a->id]) }}" class="btn btn-danger btn-sm" onclick="return confirm('Vraiment supprimer cette region ?') "><i class="fa fa-trash"></i></a>
                          <a href="{{ route("editAnnonce", ['id' => $a->id]) }}" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></a>
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
