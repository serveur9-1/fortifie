@extends('layout_right')
@section('title','Inscription')
@section('bread')

    <!--================Breadcrumb Area =================-->
    <section class="breadcrumb_area blog_banner_two">
        <div class="overlay bg-parallax" data-stellar-ratio="0.8" data-stellar-vertical-offset="0" data-background=""></div>
        <div class="container">
            <div class="page-cover text-center">
                <h2 class="page-cover-tittle f_48">Inscription</h2>
                <ol class="breadcrumb">
                    <li><a href="#">Accueil</a></li>
                    <li><a href="#">Catégorie</a></li>
                    <li class="active">Publication</li>
                </ol>
            </div>
        </div>
    </section>
    <!--================Breadcrumb Area =================-->
@endsection
@section('content')

    <div class="col-lg-8">
        <div class="blog_left_sidebar">
           <div class="container">
               <div class="col">
            <div class="card">
                <div class="card-body">
                    <h6>Inscription</h6>
                    <form method="POST" class="contact_form">

                        <div class="form-group" style="width: 100%">
                            <label for="">Diocèse rattaché</label>
                            <div class="form-group">
                                <select class="form-control" style="width: 100% !important">
                                <option value="2">Abengourou</option>
                                <option value="10">Abidjan</option>
                                <option value="11">Agboville</option>
                                <option value="3">Bondoukou</option>
                                <option value="14">Bouaké</option>
                                <option value="6">Daloa</option>
                                <option value="5">Gagnoa</option>
                                <option value="12">Grand-Bassam</option>
                                <option value="9">Katiola</option>
                                <option value="8">Korhogo</option>
                                <option value="15">Odiénné</option>
                                <option value="7">San-Pedro</option>
                                <option value="4">Yamoussoukro</option>
                                <option value="13">Yopougon</option>
                            </select>
                            </div><br>
                        </div>
                        <div class="form-group">
                            <label for="">Nom de la Paroisse</label>
                            <input type="text" name="paroisse" class="form-control" placeholder="Notre Dame de l'Assomption de Koumassi">

                        </div>
                        <div class="form-group ">
                            <label for="">Adresse Email <em style="color:red;">*</em> </label>
                            <input type="text" class="form-control" name="email" value="" placeholder="Votre adresse email ici">

                        </div>
                        <div class="form-group">
                            <label for="">Téléphone Fixe</label>
                            <input type="text" class="form-control" name="telephone_fixe" placeholder="Téléphone fixe">
                        </div>
                        <div class="form-group ">
                            <label for="">Téléphone Mobile <em style="color:red;">*</em></label>
                            <input type="text" class="form-control" name="telephone_mobile" placeholder="Téléphone mobile" value="">

                        </div>
                        <div class="form-group ">
                            <label for="">Mot de passe  <em style="color:red;">*</em> </label>
                            <input type="password" class="form-control" name="password" placeholder="Votre mot de passe ici">

                        </div>
                        <div class="form-group ">
                            <label for="">Confirmez le Mot de passe  <em style="color:red;">*</em> </label>
                            <input type="password" class="form-control" name="password" placeholder="rétapez Votre mot de passe ici">

                        </div>
                        <div class="form-group ">
                            <label for="">Description de la paroisse ou de la communauté</label>
                            <textarea type="text" class="form-control" name="password" placeholder="Donnez une description de l'église"></textarea>

                        </div>

                        <div class="form-group">
                            <label for="">Image</label>
                                <p>Inclure une image de 1000px et au plus de 2000px de haut ou de large.
                                <br> Cette image sera la photo de couverture de l'église  </p>
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-12 col-sm-12">
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="white-box">
                                                    <input required type="file" id="input-file-now1" name="premiere" class="files dropify">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btn btn-success" value="S'inscrire">
                        </div>
                    </form>

                </div>
            </div>
        </div>
            </div>
        </div>
    </div>

@endsection
