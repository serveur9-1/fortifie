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
                        <li>Lorsqu' une annonce est signalée, elle ne s'affiche pas sur le site</li>
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
                        <tr>
                            <td>Tiger Nixon</td>
                            <td>System Architect</td>
                            <td>Edinburgh</td>
                            <td>61</td>
                            <td>2011/04/25</td>
                            <td>2011/04/25</td>
                            <td>2011/04/25</td>
                            <td><a href="#" class="btn  btn-sm btnad" onclick="return confirm('Vraiment supprimer cette CAtégorie ?') ">
                                    bloquer
                                </a>
                                <a href="#" class="btn  btn-sm btnadmin">débloquer</a>
                            </td>
                        </tr>
                        </tbody>

                    </table>
                </div>
            </div>
        </div>

    </div>



@endsection
