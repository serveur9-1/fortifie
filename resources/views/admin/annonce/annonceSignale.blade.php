@extends('layout_admin')
@section('title','Annonces signalées')

@section('content')
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Tableau de bord</h1>
        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Annonces Signalées</h6>
            </div>
            <div class="card-body">
                <div class="alert alert-info">
                    <h5>INFORMATION</h5>
                    <ul class="list_style">
                        <li>Lorsqu' une annonce est bloquée, elle est automatique supprimée. Cliquez <a href="{{route('listAnnonce') }}">ici</a> pour plutôt désactiver</li>
                    </ul>
                </div>
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                        <tr>
                            <th>Annonce</th>

                            <th>Motif</th>
                            <th>Date de dénonciation</th>

                            <th>Activée?</th>
                        </tr>
                        </thead>
                        <tfoot>
                        <tr>
                            <th>Annonce</th>

                            <th>Motif</th>
                            <th>Date de dénonciation</th>

                            <th>Activée?</th>
                        </tr>
                        </tfoot>
                        <tbody>
                        @foreach($denonciation as $d)
                            <tr>
                                <td title="{{ $d->article->titre }}"><b>{{ $d->article->id }}# </b>{{ $d->article->titre }}</td>
                                <td>{{ $d->motif }}</td>
                                <td>{{ $d->created_at }}</td>
                                <td>
                                    <div class="confirm-switch">
                                        <input onchange="change{{ $d->id }}()" type="checkbox" id="confirm-switch{{ $d->id }}" @if($d->article->is_active) checked @endif>
                                        <label for="confirm-switch{{ $d->id }}"></label>
                                    </div>

                                    <script>
                                        function change{{ $d->id }}(){
                                            document.getElementById("changeStateForm{{ $d->id }}").submit();
                                        }
                                    </script>
                                    <form style="display: none;" id="changeStateForm{{ $d->id }}" action="{{ route('enableOrdisableArticle', ['id'=> $d->article->id, 'enable' => $d->article->is_active]) }}" method="post">
                                        @csrf
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>

                    </table>
                </div>
            </div>
        </div>

    </div>



@endsection
