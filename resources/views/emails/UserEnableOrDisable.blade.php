@extends('layout_mail')

@section('content')
    <div style="padding:25px;">

        <h3>Salut {{ $user }},</h3>

        <p>
            @if($is_enable) Félicitation @else Oups!!! désolé @endif votre compte vient d'être @if($is_enable) activé. @else désactivé. @endif
        </p>

        @if(!$is_enable)<p>Veuillez contacter l'administrateur pour savoir le motif</p>@endif

        <p>Que le seigneur vous bénisse,<br> L'équipe Fortifie-toi</p>

    </div>
@stop

