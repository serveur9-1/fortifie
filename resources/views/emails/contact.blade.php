@extends('layout_mail')

@section('content')
    <div style="font-size:18px; padding: 25px;">
        <h3 style="color:#6b2f90">Bonjour </h3>
        
        <p>Un utilisateur vient de vous laisser un message depuis <a href="https://fortifietoi.ci">FORTIFIE TOI</a>.</p>


        <p>$message <em> test </em></p>

        <p>Merci d'utiliser Fortifie-toi</p>
        <p>Que le seigneur vous bénisse,<br>
            L'équipe de Fortifie-toi.</p>

        <p>NB : Nous nous réservons le droit de supprimer les annonces qui ne respecte pas nos politiques.</p>
    </div>
@endsection

