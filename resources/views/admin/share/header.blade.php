
<ul class="navbar-nav bg-gradient sidebar sidebar-dark accordion" id="accordionSidebar">

  <!-- Sidebar - Brand -->
  <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ route('Accueil') }}">
      <div class="sidebar-brand-text mx-3"><img src="{{asset('assets/image/Logo.png')}}" style="width: 150px;height: 50px;"></div>
  </a>

  <!-- Divider -->
  <hr class="sidebar-divider my-0">

  <!-- Nav Item - Dashboard -->
  <li class="nav-item active">
    <a class="nav-link" href="{{ route('Accueil') }}">
      <i class="fa fa-fw fa-home"></i>
      <span>Accueil</span></a>
  </li>

  <!-- Divider -->
  <hr class="sidebar-divider">

  <!-- Heading -->
  <div class="sidebar-heading">
    Action
  </div>

  <!-- Nav Item - Pages Collapse Menu -->
  <li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
      <i class="fa fa-fw fa-bank"></i>
      <span>Diocèse</span>
    </a>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
      <div class="bg-white py-2 collapse-inner rounded">

        <a class="collapse-item" href="{{ route('listDiocese') }}">liste des diocèses</a>
        <a class="collapse-item" href="{{ route('addDiocese') }}">Ajouter un diocèse</a>
      </div>
    </div>
  </li>
  <!-- Nav Item - Utilities Collapse Menu -->
 <li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapse3" aria-expanded="true" aria-controls="collapse3">
      <i class="fa fa-fw fa-copy"></i>
      <span>Catégories</span>
    </a>
    <div id="collapse3" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
      <div class="bg-white py-2 collapse-inner rounded">

        <a class="collapse-item" href="{{ route('listCategorie') }}">liste des catégories</a>
        <a class="collapse-item" href="{{ route('addCategorie') }}">Ajouter une catégorie</a>
      </div>
    </div>
  </li>
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapse8" aria-expanded="true" aria-controls="collapse8">
            <i class="fa fa-fw fa-list-ul"></i>
            <span>Sous-Catégories</span>
        </a>
        <div id="collapse8" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">

                <a class="collapse-item" href="{{ route('listSousCategorie') }}">liste des sous catégories</a>
                <a class="collapse-item" href="{{ route('addSousCategorie') }}">Ajouter une sous catégorie</a>
            </div>
        </div>
    </li>
   <li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapse4" aria-expanded="true" aria-controls="collapse4">
      <i class="fa fa-fw fa-desktop"></i>
      <span>Annonce</span>
    </a>
    <div id="collapse4" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
      <div class="bg-white py-2 collapse-inner rounded">

        <a class="collapse-item" href="{{ route('listAnnonce') }}">liste des Annonces</a>
        <a class="collapse-item" href="{{ route('addAnnonce') }}">Ajouter une annonce</a>
          <a class="collapse-item" href="{{ route('annonceSignale') }}">Annonces signalées</a>
          <a class="collapse-item" href="{{ route('waitAnnonce') }}"> En Attentes de Publication</a>
      </div>
    </div>
  </li>
   <li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapse5" aria-expanded="true" aria-controls="collapse5">
      <i class="fa fa-fw fa-user"></i>
    <span>Compte</span>
    </a>
    <div id="collapse5" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
      <div class="bg-white py-2 collapse-inner rounded">

        <a class="collapse-item" href="{{ route('listUsers') }}">liste des comptes</a>
        <a class="collapse-item" href="{{ route('addUsers') }}">Ajouter comptes</a>
         <a class="collapse-item" href="{{ route('askList') }}">Liste des demandes</a>
      </div>
    </div>
   
  </li>
   <li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapse6" aria-expanded="true" aria-controls="collapse6">
      <i class="fa fa-fw fa-bullhorn"></i>
      <span>Publicité</span>
    </a>
    <div id="collapse6" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
      <div class="bg-white py-2 collapse-inner rounded">

        <a class="collapse-item" href="{{ route('listPub') }}">liste des publicités</a>
        <a class="collapse-item" href="{{ route('addPub') }}">Ajouter une publicité</a>
      </div>
    </div>
  </li>
   <li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapse7" aria-expanded="true" aria-controls="collapse7">
      <i class="fa fa-fw fa-suitcase"></i>
      <span>Partenaires</span>
    </a>
    <div id="collapse7" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
      <div class="bg-white py-2 collapse-inner rounded">

        <a class="collapse-item" href="{{ route('listPartner') }}">liste des Partenaires</a>
        <a class="collapse-item" href="{{ route('addPartner') }}">Ajouter un partenaire</a>
      </div>
    </div>
  </li>
   <li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapse0" aria-expanded="true" aria-controls="collapse0">
      <i class="fa fa-fw fa-hospital-o"></i>
      <span>Ville</span>
    </a>
    <div id="collapse0" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
      <div class="bg-white py-2 collapse-inner rounded">

        <a class="collapse-item" href="{{ route('listVille') }}">liste des Villes</a>
        <a class="collapse-item" href="{{ route('addVille') }}">Ajouter une ville</a>
      </div>
    </div>
  </li>
   <li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapse9" aria-expanded="true" aria-controls="collapse9">
      <i class="fa fa-fw fa-picture-o"></i>
      <span>Gallerie</span>
    </a>
    <div id="collapse9" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
      <div class="bg-white py-2 collapse-inner rounded">

        <a class="collapse-item" href="{{ route('listGallerie') }}">liste des Images</a>
        <a class="collapse-item" href="{{ route('addGallerie') }}">Ajouter une image</a>
        <a class="collapse-item" href="{{ route('createAlbum') }}">Créer Album</a>
      </div>
    </div>
  </li>
   <li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapse10" aria-expanded="true" aria-controls="collapse10">
      <i class="fa fa-fw fa-plus"></i>
      <span>Paroisse</span>
    </a>
    <div id="collapse10" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
      <div class="bg-white py-2 collapse-inner rounded">

        <a class="collapse-item" href="{{ route('listParoisse') }}">liste des Paroisses</a>
        <a class="collapse-item" href="{{ route('addParoisse') }}">Ajouter une paroisse</a>
      </div>
    </div>
  </li>
   <li class="nav-item">
        <a class="nav-link" href="{{ route('newsletterAdmin') }}">
      <i class="fa fa-fw fa-envelope-o"></i>
      <span>Abonnés à la newsletter</span></a>
  </li>


  <!-- Divider -->
  <hr class="sidebar-divider d-none d-md-block">

  <!-- Sidebar Toggler (Sidebar) -->
  <div class="text-center d-none d-md-inline">
    <button class="rounded-circle border-0" id="sidebarToggle"></button>
  </div>

</ul>
<style type="text/css">

</style>
