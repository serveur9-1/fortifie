@extends('layout_admin')
@section('title','Liste des Annonces')

@section('content')
 <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800">Tableau de bord</h1>
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Nos Annonces ({{ $article->count() }})</h6>
              @if(@auth()->user()->is_admin)
              <a href="{{ route('addAnnonce') }}" class="btn pull-right btnadmin" style="float: right;"><i class="fa fa-plus"></i> Ajouter une annonce</a>
              @endif
            </div>
            <div class="card-body">
                <div class="alert alert-info">
                    <h5>INFORMATION</h5>
                    <ul class="list_style">
                        <li>Lorsqu' une annonce est desactivée, elle ne s'affiche pas sur le site.</li>
                    </ul>
                </div>
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
                      @if(@auth()->user()->is_admin)
                      <th>Action</th>
                      @endif
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
                      @if(@auth()->user()->is_admin)
                      <th>Action</th>
                      @endif
                    </tr>
                  </tfoot>
                  <tbody>
                  @foreach($article as $a)
                    <tr>
                      <td title="{{ $a->titre }}">
                          <a target="_blank" href="{{ route('description', ['id' => $a->id]) }}" >{{ Str::limit($a->titre, 10) }}</a>
                      </td>
                      <td>{{ $a->category->libelle }}</td>
                      <td>{{ $a->paroisse->nom }}</td>
                      <td>{{ $a->contact_email }}</td>
                      <td>{{ $a->created_at->format('Y-m-d h:m:s')}}</td>
                      <td>
                        <div class="confirm-switch">
                            <input onchange="change{{ $a->id }}()" type="checkbox" id="confirm-switch{{ $a->id }}" @if($a->is_active) checked @endif>
                            <label for="confirm-switch{{ $a->id }}"></label>
                        </div>
                        @if(@auth()->user()->is_admin)
                          <script>
                              function change{{ $a->id }}(){
                                  document.getElementById("changeStateForm{{ $a->id }}").submit();
                              }
                          </script>
                          <form style="display: none;" id="changeStateForm{{ $a->id }}" action="{{ route('enableOrdisableArticle', ['id'=> $a->id, 'enable' => $a->is_active]) }}" method="post">
                              @csrf
                          </form>
                        @endif
                      </td>
                      <td>{{ $a->contact_fixe }} {{ $a->contact_telephone }}</td>
                      @if(@auth()->user()->is_admin)
                      <td>
                          <a href="{{ route('deleteAnnonce', ['id' => $a->id]) }}" class="btn  btn-sm btnad" onclick="return confirm('Vraiment supprimer cette annonce ?') "><i class="fa fa-trash"></i></a>
                          <a href="{{ route('editAnnonce', ['id' => $a->id]) }}" class="btn  btn-sm btnadmin"><i class="fa fa-edit"></i></a>
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
