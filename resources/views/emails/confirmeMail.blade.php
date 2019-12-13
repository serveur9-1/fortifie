@extends('layout_mail')

@section('content')
    <div style="padding:25px;">

        <h3 style="color:#6b2f90">Salut {{ $user }},</h3>

        <p>Félicitations! Votre compte vient d'être activer vous pouvez desormais publier vos annonces sur Fortifie-toi</p>

        <p><a href="https://fortifietoi.ci/connexion">Cliquez ici pour accéder à la page de connexion.</a></p>

        <p>Une fois connecté, vous pourrez gérer vos annonces, vos courriels d'option, vos courriels de notification et plus à partir de la page mon compte de Fortifie-toi</p>
        <p>Que le Seigneur vous bénisse,<br> L'équipe Fortifie-toi</p>

    </div>
@stop
