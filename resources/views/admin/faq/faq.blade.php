@trixassets
@extends('layout_admin')
@section('title','FAQs - Section')

@section('content')
    <div class="container-fluid">
        <div class="card mb-4">
            <div class="card-header">
                    @if($edit) Modifier @else Créer @endif une section
            <a href="{{ route('admin.faq')}}" class="text-white btn btnadmin float-right">Créer une section</a>
            </div>
            <div class="card-body">
                <div class="x_content">
                    <form  action="@if(!$edit){{ route('sectionValid') }}@else {{ route('sectionValid',['id' => $section->id,'edit'=>1]) }} @endif" method="POST" class="form-horizontal form-label-left" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label class="control-label col-md-12 col-sm-2 col-xs-12" for="last-name">Nom de la section <em style="color:red;">*</em>
                            </label>
                            <div class="row">
                                <div class="col-md-5 col-sm-5 col-xs-12">
                                <input type="text" @if($edit) value="{{ $section->libelle }}" @endif id="last-name" name="libelle" required="required" class=" @error('libelle') is-invalid @enderror form-control col-md-12 col-xs-12">
    
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
                                                        <tr>
                                                        <td width="70%"> <strong>Section # :</strong> {{ $s->libelle }}</td>
                                                            <td class="text-center">
                                                                <a class="mr-3" title="Modifier" href="{{ route('editSection', ['id' => $s->id])}}"><i class="fa fa-edit"></i></a>
                                                            <a class="text-danger" title="Supprimer" href="{{ route('deleteSection', ['id' => $s->id])}}"><i class="fa fa-trash"></i></a>
                                                            </td>
                                                        </tr>
                                                    @endforeach
                                                @else
                                                        <p class="text-center text-muted">Aucune section trouvée !</p>
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
    </div>
@endsection
