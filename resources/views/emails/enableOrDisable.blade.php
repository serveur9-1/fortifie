@extends('layout_mail')

@section('content')
    <div style="padding:25px;">

        <h3> Bonjour {{ $user }},</h3>

        <p>
            @if($is_enable) Félicitation @else Oups!!! désolé @endif votre anonnce vient d'être @if($is_enable) activée. @else désactivée. @endif
        </p>

        @if(!$is_enable)<p>Veuillez contacter l'administrateur pour savoir le motif</p>@endif

        <p>Titre : {{ $titre }}</p>
        <img src="{{ asset("assets/img/articles/$img") }}" alt="{{ $img }}">

        <p>Que le Seigneur vous bénisse,<br> L'équipe Fortifie-Toi</p>


        <p>Cliquez sur ce lien pour voir l'annonce <a href="{{ $url }}">{{ $url }}</a></p>

    </div>
@stop

