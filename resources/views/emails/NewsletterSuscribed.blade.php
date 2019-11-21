@extends('layout_mail')

@section('content')
    <div style="padding:25px;">

        <h3>Salut cher abonné</h3>

        <p>
            Félicitation votre abonnement à la newsletter a été prise en contact, vous pouvez visiter les annonces les plus visités maintenant. Cliquez sur ce lien <a href="{{ route('home') }}">{{ route("home") }}</a>
        </p>
        <p>Votre adresse e-mail : <strong>{{ $user }}</strong></p>
        <p>Que le seigneur vous bénisse,<br> L'équipe Fortifie-toi</p>

    </div>
@stop

