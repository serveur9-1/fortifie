@extends('layout_mail')

@section('content')

	<div style="padding:25px;">

		<h3 style="color:#6b2f90">  Bonjour, </h3>

		<p>Un nouvel évènement a été enregistré sur Fortifie-Toi</p>

		<p><a href="{{ $access_link }}">Cliquez ici pour visiter les détails de l'annonce </a></p>

		<p>Vous pouvez toujours vous désabonner à la catégorie de cette annonce en cliquant sur ce lien:
		</p>
		<p>
			Cliquez sur ce lien si vous ne voulez plus recevoir d'alerte pour cette catégorie 
			<a href="{{ route('unsuscribe', ['c' => $id, 'e' => $email]) }}">{{ route('unsuscribe', ['c' => $id, 'e' => $email]) }}</a>
		</p>

		<p>Que le Seigneur vous bénisse,<br> L'équipe Fortifie-Toi</p>

	</div>
@stop
