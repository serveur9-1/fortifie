@extends('layout_mail')

@section('content')
	<div style="font-size:18px; padding: 25px;">
        <h3 style="color:#6b2f90">Bonjour Administrateur,</h3>

        <p>un utilisateur vous a laissé un message depuis <a href="https://fortifietoi.ci">FORTIFIE TOI</a>.</p>

        <p>Objet du message : {{ $subject }}</p>

        <p>{{ $message }}</p>

        <p>Que le Seigneur vous bénisse,<br>
            L'équipe de Fortifie-Toi.</p>

        <p>NB : Nous nous réservons le droit de supprimer les annonces qui ne respecte pas nos politiques.</p>
    </div>

@endsection

