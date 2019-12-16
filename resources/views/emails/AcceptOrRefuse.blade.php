@extends('layout_mail')

@section('content')
    <div style="padding:25px;">

        <h3>Bonjour {{ $user }},</h3>

        <p>
            @if($is_enable) Félicitation @else Oups!!! désolé @endif votre demande d'inscription vient d'être @if($is_enable) acceptée. @else réfusée. @endif
        </p>


        @if($is_enable)
            <p>Vous pouvez maintenant vous connecter à votre compte. Cliquez ici <a href="{{ route('login') }}">{{ route('login') }}</a></p>
        @endif

        @if(!$is_enable)<p>Veuillez contacter l'administrateur pour savoir le motif Cliquez sur ce lien <a href="{{ route('contact') }}">{{ route('contact') }}</a></p>@endif

        <p>Que le Seigneur vous bénisse,<br> L'équipe Fortifie-toi</p>

    </div>
@stop

