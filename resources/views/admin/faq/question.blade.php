@trixassets
@extends('layout_admin')
@section('title','FAQs - Section')

@section('content')
    <div class="container-fluid">
        <div class="card mb-4">
            <div class="card-header">
                    @if($edit) Modifier @else Créer @endif une question 
            <a href="{{ route('admin.question')}}" class="text-white btn btnadmin float-right">Créer une question</a>
            </div>
            <div class="card-body">
                <div class="x_content">
                    <form  action="@if(!$edit){{ route('questionValid') }}@else {{ route('questionValid',['id' => $question->id,'edit'=>1]) }} @endif" method="POST" class="form-horizontal form-label-left" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label class="control-label col-md-12 col-sm-2 col-xs-12" for="last-name">Question <em style="color:red;">*</em>
                            </label>
                            <div class="row">
                                <div class="col-md-5 col-sm-5 col-xs-12">
                                    <textarea placeholder="Que dit notre politique de confidentialité ?" type="text" rows="5" id="last-name" name="libelle" required="required" class=" @error('libelle') is-invalid @enderror form-control col-md-12 col-xs-12">@if($edit){{$question->libelle }} @endif</textarea>
    
                                    @error('libelle')
                                    <p class="text-danger" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </p>
                                    @enderror
                                    <label class="mt-3 control-label col-md-12 col-sm-2 col-xs-12" for="last-name">Section associée <em style="color:red;">*</em>
                                    </label>
                                    <select class="form-control" name="section" id="">
                                        @foreach($sections as $s)
                                            <option  value="{{ $s->id }}">{{ $s->libelle }}</option>
                                        @endforeach
                                    </select>
                                    @error('libelle')
                                    <p class="text-danger" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </p>
                                    @enderror

                                    <div class="col-md-12 col-sm-12 col-xs-12 mt-4 pl-0">
                                        <input type="submit" class="btn  btnadmin" @if($edit) value="Modifier " @else value="Enregistrer " @endif>
                                        <input type="reset" class="btn  btnad" value="Effacer le contenu ">
                                    </div>
                                </div>
                                <div class="col-md-7 col-sm-7 col-xs-12 ">
                                    <div class="table-responsive">
                                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                            <tbody>
                                                @if($sections->count() > 0)
                                                    @foreach ($sections as $s)
                                                        <thead class="bg-light mt-3">
                                                            <th colspan="2">Section # {{ $s->libelle }}</th>
                                                        </thead>
                                                        @if($s->question->count() > 0)
                                                            @foreach ($s->question as $q)
                                                            <tr style="font-size:86%">
                                                                <td width="80%"> <strong>Question # :</strong> {{ $q->libelle }}</td>
                                                                <td class="text-center">
                                                                    <a class="mr-3" title="Modifier" href="{{ route('editQuestion', ['id' => $q->id])}}"><i class="fa fa-edit"></i></a>
                                                                    <a class="text-danger" title="Supprimer" href="{{ route('deleteQuestion', ['id' => $q->id])}}"><i class="fa fa-trash"></i></a>
                                                                </td>
                                                            </tr>
                                                            @endforeach
                                                        @else
                                                            <tr>
                                                                <td><p class="text-center text-muted">Aucune question dans cette section</p></td>
                                                            </tr>
                                                        @endif
                                                    @endforeach
                                                @else
                                                        <p class="text-center text-muted">Aucune question trouvée !</p>
                                                @endif
                                                
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                
                    </form>
                </div>
            </div>
        </div>
        
        {{-- <div class="card mb-4">
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
        </div> --}}
    </div>
@endsection
