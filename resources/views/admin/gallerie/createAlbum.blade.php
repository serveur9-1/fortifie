@extends('layout_admin')
@section('title','Créer Album')

@section('content')
    <div class="container-fluid">
        <div class="x_panel">
            <div class="x_title">
                <a href="{{ route('listGallerie') }}" class="btn  btn-sm pull-right mb-4 btnadmin" style="float: right;"><i class="fa fa-eye"></i> Liste des Medias</a>
                <div class="clearfix"></div>
            </div>
        </div>
        <div class="card mb-4">
            <div class="card-header">
                Créer un album
            </div>
            <div class="card-body">
                <div class="x_content">
                    <form  action="{{ route('addAlbum') }}" method="POST" class="form-horizontal form-label-left" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label class="control-label col-md-12 col-sm-2 col-xs-12" for="last-name">Nom de l'album <em style="color:red;">*</em>
                            </label>
                            <div class="col-md-8 col-sm-8 col-xs-12">
                                    <input type="text" id="last-name" name="libelle" required="required" class=" @error('libelle') is-invalid @enderror form-control col-md-9 col-xs-12">

                                @error('nom')
                                <p class="text-danger" role="alert">
                                    <strong>{{ $message }}</strong>
                                </p>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-2">
                                <input type="submit" class="btn  btnadmin" value="Enregistrer ">
                                <input type="reset" class="btn  btnad" value="Effacer le contenu ">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="card mb-4">
            <div class="card-header">
                Liste des albums ({{ $album->count()}})
            </div>
            <div class="card-body">
            @foreach($album as $alb)
                <div class="x_content d-inline-block m-2">
                    <a class="text-gray-500" href="{{ route('listGallerie',['folder' => $alb->id]) }}">
                        <i class="fas fa-folder fa-fw fa-5x"></i>
                        <p class="text-center"><i><small>{{ $alb->libelle }} <strong>({{ $alb->gallery->count() }})</strong>
                        &nbsp; <a href="{{ route('deleteAlbum', ['id'=> $alb->id]) }}" title="Supprimer cet album" class="text-danger"><i class="fa fa-trash"></i></a>
                        &nbsp; <a href="{{ route('enableOrDisableAlbum', ['id'=> $alb->id, 'enable' => $alb->is_active]) }}" title="@if($alb->is_active) Désactiver @else Activer @endif cet album" @if(!$alb->is_active) style="opacity:0.4" @endif><i class="fa @if($alb->is_active) fa-eye @else fa-eye-slash @endif"></i></a>
                        </small></i>
                        </p>
                    </a>
                </div>
            @endforeach
            </div>
        </div>
    </div>
@endsection
