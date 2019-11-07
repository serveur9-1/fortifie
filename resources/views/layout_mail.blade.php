<!doctype html>
<html lang="en">
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="theme-color" content="#6c3191">
    <meta name="author" content="GAYATECH +225 77832982">
    <link rel="icon" href="{{{ asset('assets/image/favicon.png')}}}">
    <title>Fortifie-toi </title>
    <!-- Bootstrap core CSS -->
    @include('site.share.stylesheets')
</head>
<body>

<header>
    <div style="padding:18px 0px; background-color:#6b2f90;" class="navbar">
        <div class="container d-flex justify-content-between">
            <div class="col-4" style="padding-left: 15px;">
                <img style="height:45px;" src="{{ asset('/assets/image/Logo.png') }}" alt="Fortifie-toi">
            </div>
        </div>
    </div>
</header>

<main role="main">
    @yield('content')
</main>
    <hr>
    <div>
        <p><a target="_blank" href="#">Aide</a></p>
        <p><a target="_blank" href="#">A propos</a></p>
        <p><a target="_blank" href="#">Politiques de confidentialité</a></p>
        <p>Contactez Fortifie-toi</p>
        <p>©
            @if( date('Y') == 2018 )
                {{ date('Y')}}
            @else
                {{ '2018 - ' .date('Y') }}
            @endif
            Copyright: Fortifie-toi
        </p>
    </div>
</body>
</html>
