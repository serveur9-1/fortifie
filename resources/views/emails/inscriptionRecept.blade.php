@extends('layout_mail')

@section('content')
    <div style="padding:25px;">
        <h3 style="color:#6b2f90">Salut {{ $user }},</h3>

        <p>Félicitations! Vous ètes à quelques quelque étapes de la finalisation de votre compte</p>


        <p>Une fois votre compte confirmée par l'administration vous récévrerez un message de confirmation, ainsi vous pourez vous connecter pour gérer vos annonces, vos courriels
            d'option, vos courriels de notification et plus à partir de la page mon compte de Fortifie-toi</p>
        <p>Que le Seigneur vous bénisse,<br> L'équipe Fortifie-toi</p>
    </div>
@stop
