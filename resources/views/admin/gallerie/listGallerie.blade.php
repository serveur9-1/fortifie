@extends('layout_admin')
@section('title','Liste des Medias')

@section('content')
 <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800">Tableau de bord</h1>
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">{{ $gallery->count() }} image(s)</h6>
              @if(@auth()->user()->is_admin)
              <a href="{{ route('addGallerie') }}" class="btn  pull-right btnadmin" style="float: right;"><i class="fa fa-plus"></i> Ajouter une image</a>
              @endif
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Image</th>

                        <th>Activée</th>
                      <th>Date d'ajout</th>
                      @if(@auth()->user()->is_admin)
                      <th>Action</th>
                      @endif
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>Image</th>

                      <th>Activée</th>
                      <th>Date d'ajout</th>
                      @if(@auth()->user()->is_admin)
                      <th>Action</th>
                      @endif
                    </tr>
                  </tfoot>
                  <tbody>
                  @foreach($gallery as $g)
                    <tr>
                      <td>
                        <img style="width: 100px" src='{{ asset("/assets/img/galeries/$g->img") }}' alt="post">
                      </td>
                      <td>
                            <div class="confirm-switch">
                                <input onchange="change{{ $g->id }}()" type="checkbox" id="confirm-switch{{ $g->id }}" @if($g->is_active) checked @endif>
                                <label for="confirm-switch{{ $g->id }}"></label>
                            </div>
                            <script>
                                function change{{ $g->id }}(){
                                    document.getElementById("changeStateForm{{ $g->id }}").submit();
                                }
                            </script>
                            <form style="display: none;" id="changeStateForm{{ $g->id }}" action="{{ route('enableOrDisableGalleryImage', ['id'=> $g->id, 'enable' => $g->is_active]) }}" method="post">
                                @csrf
                            </form>
                      </td>
                      <td>{{ $g->created_at->format('d-m-Y') }}</td>
                      @if(@auth()->user()->is_admin)
                      <td>
                          <a href="{{ route('deleteGallerie', ['id' => $g->id]) }}" class="btn btn-sm btnad" onclick="return confirm('Vraiment supprimer cette image ?') "><i class="fa fa-trash"></i></a>
                          <!-- <a href="{{ route('editGallerie', ['id' => $g->id]) }}" class="btn btn-primary btn-sm btnadmin"><i class="fa fa-edit"></i></a> -->
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
