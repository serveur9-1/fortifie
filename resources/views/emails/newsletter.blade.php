<!-- @extends('layout_mail')

@section('content')
<div style="padding:25px;">
<h3 style="color:#6b2f90"> Salut, </h3>
<p>Une nouvelle annonce a laquelle vous ètes abonnés a été enregistré sur Fortifie-toi</p>
<p><a href="#">Cliquez ici pour visiter les détails de l'annonce </a></p>
<p>Pour vous désabonner à cette catégorie d'annonce cliquez sur ce lien
	<a href="#">gdfhjjklhgghjkjhghjkjhjkjhuiokj</a></p>
<p>Que le seigneur vous bénisse,<br> L'équipe Fortifie-toi</p>
</div>
@stop
 -->

 @extends('layouts.email')

@section('content')
    <div style="padding:25px;">
        <h3 style="color:#6b2f90">Salut Sande</h3>

        <p>Félicitations! Votre compte vient d'être activer vous pouvez desormais publier vos annonces sur Fortifie-toi</p>

        <p><a href="https://fortifietoi.ci/connexion">Cliquez ici pour accéder à la page de connexion.</a></p> 

        <p>Une fois connecté, vous pourrez gérer vos annonces, vos courriels 
        d'option, vos courriels de notification et plus à partir de la page mon compte de Fortifie-toi</p>
        <p>Que le seigneur vous bénisse,<br> L'équipe Fortifie-toi</p>
    </div>
@stop