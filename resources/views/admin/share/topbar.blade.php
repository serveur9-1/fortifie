 <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>

          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">

              <!-- notification annonces signalées -->
              <li class="nav-item dropdown no-arrow mx-1" title="compte en attente">
                  <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <i class="fas fa-bell fa-fw"></i>
                      <!-- Counter - Alerts -->
                      <span class="badge @if($new_account_today->count() > 0) badge-danger @else badge-default @endif badge-counter"> @if($new_account_today->count() > 0) {{ $new_account_today->count() }} @endif</span>
                  </a>
                  <!-- Dropdown - Alerts -->
                  @if($new_account_today->count() > 0)
                      @foreach($new_account_today as $nat)
                      <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="alertsDropdown">
                          <h6 class="dropdown-header">
                              Demande du jour
                          </h6>
                          <a class="dropdown-item d-flex align-items-center" href="#">
                              <div>
                                  <div class="small text-gray-500">Aujourd'hui - {{ $nat->created_at->format('H:m') }}</div>
                                  <span class="font-weight-bold">{{ $nat->email }} fait une demande de création du compte de la paroisse @foreach($nat->gestionnaire as $g) {{ $g->paroisse[0]->nom }} @endforeach</span>
                              </div>
                          </a>
                          <a class="dropdown-item text-center small text-gray-500" href="{{ route('askList') }}">Voir toutes les demandes</a>
                      </div>
                      @endforeach
                  @endif
              </li>
              

              <!-- notification annonces signalées -->
              <li class="nav-item dropdown no-arrow mx-1" title="Annonces en attente">
                  <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown1" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <i class="fas fa-bullhorn fa-fw"></i>
                      <!-- Counter - Alerts -->
                      <span class="badge @if($new_post_today->count() > 0) badge-danger @else badge-default @endif badge-counter"> @if($new_post_today->count() > 0) {{ $new_post_today->count() }} @endif</span>
                  </a>
                  <!-- Dropdown - Alerts -->
                  @if($new_post_today->count() > 0)
                      @foreach($new_post_today as $p)
                      <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="alertsDropdown1">
                          <h6 class="dropdown-header">
                          Annonce du jour
                          </h6>
                          <a class="dropdown-item d-flex align-items-center" href="#">
                              <div>
                                  <div class="small text-gray-500">Aujourd'hui - {{ $p->created_at->format('H:m') }}</div>
                                  <span class="font-weight-bold">{{ $p->paroisse->nom }} vient de poster l'annonce << {{ $p->titre }} >></span>
                              </div>
                          </a>
                          <a class="dropdown-item text-center small text-gray-500" href="{{ route('waitAnnonce') }}">Voir toutes les anonnces</a>
                      </div>
                      @endforeach
                  @endif
              </li>

              <!-- notification annonces signalées -->
              <li class="nav-item dropdown no-arrow mx-1" title="denonciations">
                  <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown2" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <i class="fas fa-balance-scale fa-fw"></i>
                      <!-- Counter - Alerts -->
                      <span class="badge @if($new_denonciation_today->count() > 0) badge-danger @else badge-default @endif badge-counter"> @if($new_denonciation_today->count() > 0) {{ $new_denonciation_today->count() }} @endif</span>
                  </a>
                  <!-- Dropdown - Alerts -->
                  @if($new_denonciation_today->count() > 0)
                      @foreach($new_denonciation_today as $den)
                      <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="alertsDropdown2">
                          <h6 class="dropdown-header">
                              Denonciation du jour
                          </h6>
                          <a class="dropdown-item d-flex align-items-center" href="#">
                              <div>
                                  <div class="small text-gray-500">Aujourd'hui - {{ $den->created_at->format('H:m') }}</div>
                                  <span class="font-weight-bold">L'annonce << {{ $den->article->titre }} >> vient d'être dénoncée</span>
                              </div>
                          </a>
                          <a class="dropdown-item text-center small text-gray-500" href="{{ route('annonceSignale') }}">Voir toutes les denonciations</a>
                      </div>
                      @endforeach
                  @endif
              </li>

            <div class="topbar-divider d-none d-sm-block"></div>

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small">{{ auth()->user()->name }}</span>
                <div style="background: url('{{ asset("assets/img/users/") }}/{{  auth()->user()->img }} ') ;background-size: cover; background-repeat: no-repeat; width: 40px; height: 40px; border-radius: 50%">
                </div>
              </a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="{{ route('profil') }}">
                  <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                  Mon compte
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();" >
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Déconnexion
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                  @csrf
                </form>
              </div>
            </li>

          </ul>

        </nav>
