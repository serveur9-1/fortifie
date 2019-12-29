@extends('layout_admin')
@section('title','Liste des Demandes de compte')

@section('content')
 <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800">Tableau de bord</h1>
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Demandes de comptes ({{ $ask->count() }})</h6>
            </div>
            <div class="card-body">
                <div class="alert alert-info">
                    <h5>INFORMATION</h5>
                    <ul class="list_style">
                        <li>Lorsque vous refusez la demande, l'utilisateur est automatiquement supprimé.</li>
                    </ul>
                </div>
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Email</th>
                      <th>Téléphone</th>
                      <th>Paroisse</th>
                      <th>Date de demande</th>

                      <th>Action</th>
                    </tr>
                  </thead>
                  <tfoot>
                      <tr>
                          <th>Email</th>
                          <th>Téléphone</th>
                          <th>Paroisse</th>
                          <th>Date de demande</th>

                          <th>Action</th>
                      </tr>
                  </tfoot>
                  <tbody>
                  @foreach($ask as $a)
                    <tr>
                      <td>{{ $a->email }}</td>
                      <td>
                          @foreach($a->gestionnaire as $g)
                              {{ $g->telephone }}
                          @endforeach
                      </td>
                      <td>
                            @foreach($a->gestionnaire as $g)
                                {{ $g->paroisse[0]->nom }}
                            @endforeach
                      </td>
                      <td width="150">{{ $a->created_at->format('d-m-Y') }} {{ $a->created_at->format('H:m:s') }}</td>

                      <td width="150">
                          <a href="{{ route('deleteUser', ['id' => $a->id, 'refus' => true]) }}" class="btn btn-sm btnad" onclick="return confirm('Vraiment refuser cette demande ?') ">Refuser</a>
                          <a href="{{ route('acceptUserAsk', ['id' => $a->id]) }}" class="btn btn-sm btnadmin">Accepter</a>
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
