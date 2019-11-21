@extends('layout_admin')
@section('title','Liste des Abonnés')

@section('content')
 <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800">Tableau de bord</h1>
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Nos Abonnés ({{ $newsletter->count() }})</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Email</th>
                      <th>Date d'abonnement</th>

                      <th>Action</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>E-mail</th>
                      <th>Date d'abonnement</th>

                      <th>Action</th>
                    </tr>
                  </tfoot>
                  <tbody>
                  @foreach($newsletter as $n)
                    <tr>
                      <td>{{ $n->email }}</td>
                      <td>{{ $n->created_at->format('d-m-Y') }}</td>

                      <td>
                          <a href="{{ route('deleteNewsletter', ['id' => $n->id]) }}" class="btn btn-danger btn-sm" onclick="return confirm('Vraiment supprimer cet abonné ?') "><i class="fa fa-trash"></i></a>
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
