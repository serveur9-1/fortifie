@extends('layout_mail')

@section('content')
    <div style="padding:25px;">

        <h3>Bonjour, </h3>

        <p>Nous vous souhaitons la bienvenue sur le service de l’alerte de Fortifie-Toi.</p>

		<p>Votre inscription a bien été prise en compte. Nous vous alerterons désormais de toute publication d’annonce.
		</p>

        <p>Votre adresse e-mail : <strong>{{ $user }}</strong></p>

        <p>Que le Seigneur vous bénisse,<br> L'équipe Fortifie-toi</p>

    </div>
@stop

