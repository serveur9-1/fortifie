@extends('layout_mail')

@section('content')
    <div style="padding:25px;">

        <h3> Bonjour {{ $user }},</h3>

        <p>
            Votre compte sur le site Fortifie-Toi a bien été @if($is_enable) activé. @else désactivé. @endif
        </p>

        @if($is_enable)Vous pouvez à présent soumettre vos annonces en accorde avec nos conditions d’utilisation. @else<p>Nous avons constaté le non-respect de nos conditions d’utilisation, de nos règles et de notre politique.
		Veuillez nous contacter pour en savoir plus.</p>@endif

        <p>Que le Seigneur vous bénisse,<br> L'équipe Fortifie-toi</p>

    </div>
@stop

