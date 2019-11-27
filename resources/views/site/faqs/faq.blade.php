@extends('layout')
@section('title','foire aux questions')
@section('content')


        <!--================Breadcrumb Area =================-->
        <section class="breadcrumb_area br_image">
            <div class="container">
                <div class="page-cover text-center">
                    <h2 class="page-cover-tittle">foire aux questions</h2>
                    <ol class="breadcrumb">
                        <li><a href="{{ route('home') }}">Accueil</a></li>
                        <li class="active">foire aux questions</li>
                    </ol>
                </div>
            </div>
        </section>
        <!--================Breadcrumb Area =================-->

        
<!-- 
<style type="text/css">
    
.accordion dl,
.accordion-list {
   border:1px solid #ddd;
   &:after {
       content: "";
       display:block;
       height:1em;
       width:100%;
       background-color:darken(#fff, 10%);
     }
}
.accordion dd,
.accordion__panel {
   background-color:#eee;
   font-size:1em;
   line-height:1.5em; 
}
.accordion p {
  padding:1em 2em 1em 2em;
}

.accordion {
    position:relative;
    background-color:#5fc6c9;
}

.accordionTitle,
.accordion__Heading {
 background-color:#6c2f91; 
   text-align:center;
     font-weight:700; 
     font-size: 20px;
          padding:1em;
          display:block;
          text-decoration:none;
          color:#fff;
          transition:background-color 0.5s ease-in-out;
  border-bottom:1px solid darken(#fff, 5%);
  &:before {
   content: "+";
   font-size:1.5em;
   line-height:0.5em;
   float:left; 
   transition: transform 0.3s ease-in-out;
  }
  &:hover {
    background-color:darken(#fff, 10%);
  }
}
.accordionTitleActive, 
.accordionTitle.is-expanded {
   background-color:darken(#fff, 10%);
    &:before {
     
      transform:rotate(-225deg);
    }
}
.accordionItem {
    height:auto;
    overflow:hidden; 
    //SHAME: magic number to allow the accordion to animate
    
     max-height:50em;
    transition:max-height 1s;   
 
    
    @media screen and (min-width:48em) {
         max-height:15em;
        transition:max-height 0.5s
        
    }
    
   
}
 
.accordionItem.is-collapsed {
    max-height:0;
}
.no-js .accordionItem.is-collapsed {
  max-height: auto;
}
.animateIn {
     animation: accordionIn 0.45s normal ease-in-out both 1; 
}
.animateOut {
     animation: accordionOut 0.45s alternate ease-in-out both 1;
}
@keyframes accordionIn {
  0% {
    opacity: 0;
    transform:scale(0.9) rotateX(-60deg);
    transform-origin: 50% 0;
  }
  100% {
    opacity:1;
    transform:scale(1);
  }
}

@keyframes accordionOut {
    0% {
       opacity: 1;
       transform:scale(1);
     }
     100% {
          opacity:0;
           transform:scale(0.9) rotateX(-60deg);
       }
}
</style>
<div class="container mt-4">
          
          <div class="accordion">
            <dl>
              <dt>
                <h3 href="#accordion1" aria-expanded="false" aria-controls="accordion1" class="accordion-title accordionTitle js-accordionTrigger">Comment s'inscrie sur la plateforme fortifietoi ?</h3>
              </dt>
              <dd class="accordion-content accordionItem is-collapsed" id="accordion1" aria-hidden="true">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum, aspernatur quaerat id ipsum error animi quidem velit saepe fugiat, asperiores corrupti illum accusantium doloribus, nisi quos labore recusandae modi iste?</p>
              </dd>
              <dt>
                <h3 href="#accordion2" aria-expanded="false" aria-controls="accordion2" class="accordion-title accordionTitle js-accordionTrigger">
                Comment publier une annonce ?</h3>
              </dt>
              <dd class="accordion-content accordionItem is-collapsed" id="accordion2" aria-hidden="true">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi eu interdum diam. Donec interdum porttitor risus non bibendum. Maecenas sollicitudin eros in quam imperdiet placerat. Cras justo purus, rhoncus nec lobortis ut, iaculis vel ipsum. Donec dignissim arcu nec elit faucibus condimentum. Donec facilisis consectetur enim sit amet varius. Pellentesque justo dui, sodales quis luctus a, iaculis eget mauris. </p>
                <p>Aliquam dapibus, ante quis fringilla feugiat, mauris risus condimentum massa, at elementum libero quam ac ligula. Pellentesque at rhoncus dolor. Duis porttitor nibh ut lobortis aliquam. Nullam eu dolor venenatis mauris placerat tristique eget id dolor. Quisque blandit adipiscing erat vitae dapibus. Nulla aliquam magna nec elementum tincidunt.</p>
              </dd>
              <dt>
                <h3 href="#accordion3" aria-expanded="false" aria-controls="accordion3" class="accordion-title accordionTitle js-accordionTrigger">
                   Que dit notre Politique de confidentialité ?
                </h3>
              </dt>
              <dd class="accordion-content accordionItem is-collapsed" id="accordion3" aria-hidden="true">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi eu interdum diam. Donec interdum porttitor risus non bibendum. Maecenas sollicitudin eros in quam imperdiet placerat. Cras justo purus, rhoncus nec lobortis ut, iaculis vel ipsum. Donec dignissim arcu nec elit faucibus condimentum. Donec facilisis consectetur enim sit amet varius. Pellentesque justo dui, sodales quis luctus a, iaculis eget mauris. </p>
                <p>Aliquam dapibus, ante quis fringilla feugiat, mauris risus condimentum massa, at elementum libero quam ac ligula. Pellentesque at rhoncus dolor. Duis porttitor nibh ut lobortis aliquam. Nullam eu dolor venenatis mauris placerat tristique eget id dolor. Quisque blandit adipiscing erat vitae dapibus. Nulla aliquam magna nec elementum tincidunt.</p>
              </dd>
            </dl>
          </div>
        </div>

        <script type="text/javascript">
            //uses classList, setAttribute, and querySelectorAll
//if you want this to work in IE8/9 youll need to polyfill these
(function(){
    var d = document,
    accordionToggles = d.querySelectorAll('.js-accordionTrigger'),
    setAria,
    setAccordionAria,
    switchAccordion,
  touchSupported = ('ontouchstart' in window),
  pointerSupported = ('pointerdown' in window);
  
  skipClickDelay = function(e){
    e.preventDefault();
    e.target.click();
  }

        setAriaAttr = function(el, ariaType, newProperty){
        el.setAttribute(ariaType, newProperty);
    };
    setAccordionAria = function(el1, el2, expanded){
        switch(expanded) {
      case "true":
        setAriaAttr(el1, 'aria-expanded', 'true');
        setAriaAttr(el2, 'aria-hidden', 'false');
        break;
      case "false":
        setAriaAttr(el1, 'aria-expanded', 'false');
        setAriaAttr(el2, 'aria-hidden', 'true');
        break;
      default:
                break;
        }
    };
//function
switchAccordion = function(e) {
  console.log("triggered");
    e.preventDefault();
    var thisAnswer = e.target.parentNode.nextElementSibling;
    var thisQuestion = e.target;
    if(thisAnswer.classList.contains('is-collapsed')) {
        setAccordionAria(thisQuestion, thisAnswer, 'true');
    } else {
        setAccordionAria(thisQuestion, thisAnswer, 'false');
    }
    thisQuestion.classList.toggle('is-collapsed');
    thisQuestion.classList.toggle('is-expanded');
        thisAnswer.classList.toggle('is-collapsed');
        thisAnswer.classList.toggle('is-expanded');
    
    thisAnswer.classList.toggle('animateIn');
    };
    for (var i=0,len=accordionToggles.length; i<len; i++) {
        if(touchSupported) {
      accordionToggles[i].addEventListener('touchstart', skipClickDelay, false);
    }
    if(pointerSupported){
      accordionToggles[i].addEventListener('pointerdown', skipClickDelay, false);
    }
    accordionToggles[i].addEventListener('click', switchAccordion, false);
  }
})();
        </script> -->

  <style>
h2 {
  font-size: 1.75rem;
  color: #6c2f91;
  padding: 1.3rem;
  margin: 0;
}

p{
  text-align: justify;
}

.accordion a {
  position: relative;
  display: -webkit-box;
  display: -webkit-flex;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
  -webkit-flex-direction: column;
  -ms-flex-direction: column;
  flex-direction: column;
  width: 100%;
  padding: 1rem 3rem 1rem 1rem;
  color: #7288a2;
  font-size: 1.15rem;
  font-weight: 400;
  border-bottom: 1px solid #6c2f91;
}

.accordion a:hover,
.accordion a:hover::after {
  content: '\002B';
  color: #777;
  cursor: pointer;
  color: #03b5d2;
}

.accordion a:hover::after {
  content: '\002B';
  color: #777;
  border: 1px solid #6c2f91;
}

.accordion a.active {
  color: #03b5d2;
  border-bottom: 2px solid #6c2f91;
}

.accordion a::after {
  content: '\002B';
  color: #777;
  position: absolute;
  float: right;
  right: 1rem;
  font-size: 1rem;
  color: #7288a2;
  padding: 5px;
  width: 30px;
  height: 30px;
  -webkit-border-radius: 50%;
  -moz-border-radius: 50%;
  border-radius: 50%;
  border: 1px solid #7288a2;
  text-align: center;
}

.accordion a.active::after {
  content: '\002B';
  color: #777;
  color: #03b5d2;
  border: 1px solid #03b5d2;
}

.accordion .content {
  opacity: 0;
  padding: 0 1rem;
  max-height: 0;
  border-bottom: 1px solid #e5e5e5;
  overflow: hidden;
  clear: both;
  -webkit-transition: all 0.2s ease 0.15s;
  -o-transition: all 0.2s ease 0.15s;
  transition: all 0.2s ease 0.15s;
}

.accordion .content p {
  font-size: 1rem;
  font-weight: 300;
}

.accordion .content.active {
  opacity: 2;
  padding: 1rem;
  max-height: 100%;
  -webkit-transition: all 0.35s ease 0.15s;
  -o-transition: all 0.35s ease 0.15s;
  transition: all 0.35s ease 0.15s;
}
  </style>

<div class="container mt-5">
  <div class="container">
 <div class="container">
    <div class="container">
    <h2 class="text-center">Informations</h2>
    <div class="accordion">
      <div class="accordion-item">
        <a>Qu'est-ce fortifietoi ?</a>
        <div class="content">
           <p>
               <b>Fortifie-toi</b>
            L’expression « Fortifie-toi » se trouve 13 fois dans la Bible. Elle est employée
            pour diverses intentions :
                Pour croire dans la promesse du Seigneur (Deutéronome 31,7, 23 ; Josué 1,6)
                Pour obéir à la Parole de Dieu (Josué 1,7)
                Pour chasser la peur, le doute, l’inquiétude (Deutéronome 31, 6 ; Josué 1, 9,
            18 ; 1 Chroniques     
                22, 13 ; 28, 20)
                Pour devenir un homme (1 Rois 2, 2)
                Pour faire et agir (1 Rois 20, 22 ; 1 Chroniques 28, 10, 20)
                Pour affermir son cœur dans l’espérance (Psaume 27,14)
                Pour travailler avec Dieu (Aggée 2, 4)
                Dans le Seigneur, la grâce en Jésus (2 Timothée 2, 1)
            Notons tout d’abord que le « fortifie-toi » de l’Ancien Testament est utilisé plus
            pour une action tandis que le « fortifie-toi » du Nouveau Testament est utilisé
            comme étant une recherche, un état permanent à avoir dans le Seigneur.
            Ainsi il revient comme un conseil, un ordre, un impératif, un encouragement que
            Dieu adresse à chacun au travers de ces deux mots. C’est à nous de « nous
            fortifier » pour reprendre courage et marcher en vainqueur dans le nom de
            l’Eternel. D’où le rôle que souhaite joué le site « fortifie-toi » dans ce
            cheminement à l’instant où nous en éprouvons le besoin en présentant
            l’information partagée pour tous. Ainsi nous souhaitons que chacun y trouve son
            compte. Que la gloire revienne au Seigneur Jésus !
          </p>
        </div>
      </div>
      <div class="accordion-item">
        <a>Comment s'inscrire sur Fortifietoi.ci ?</a>
        <div class="content">
          <p>
                      L’inscription est obligatoire pour afficher une annonce sur Fortifie-toi,
            toutefois être membre inscrit procure plusieurs avantages et options.
            Pour s’inscrire sur Fortifie-toi :<br>
            1 - Cliquez sur le lien S’inscrire dans le haut de votre écran. <br>
            2 - Fournissez les informations demandées et cliquez sur le bouton
            S’inscrire. <br>
            3 - Un courriel sera envoyé à l’adresse fournie. Suivez les instructions
            dans le courriel pour terminer votre inscription.
        </p>
        </div>
      </div>
      <div class="accordion-item">
        <a>Comment publier une annonce ?</a>
        <div class="content">
          <p>
                       Afficher une annonce sur Fortifie-toi est simple! Pour commencer,
              accédez à votre compte fortifie-toi en sélectionnant Ouvrir une session.
              Si vous n'avez pas de compte, vous pouvez facilement en créer un
              avant d'afficher votre annonce. <br>
              Pour publier une annonce: <br>
              1 - Sélectionnez le bouton Publier en haut de la page. <br>
              2 - Saisissez un thème pour votre annonce, puis cliquez sur Suivant. <br>
              3 - Selon votre thème, choisissez une catégorie et une sous-catégorie,
              le cas échéant, dans la liste qui s'affiche la plus appropriée pour
              votre annonce. <br>
                  Si votre publication n’a pas de thème, veuillez sur le lien « Votre
              publication n’a pas de thème ? »
              4 -  Une fois la catégorie choisie, vous serez redirigé vers la page
              Afficher votre annonce. Vous pourrez alors ajouter les détails relatifs
              à votre annonce, comme une date, une description, des photos ainsi
              que des options pour augmenter la visibilité. <br>
              5 - Choisissez la ville où votre évènement doit se dérouler.
                 Si votre ville de figure pas parmi celle affichée, veuillez nous écrire à
              l’adresse mail de contact.      Dans ce cas, précisez nous la ville à
              laquelle elle est rattachée administrativement, s’il y a lieu, ainsi que
              le diocèse à auquel elle appartient.
              S’il s’agit d’une petite localité, veuillez le précisez dans la partie
              description et choisir la ville la plus proche ou la ville à laquelle elle
              est rattachée administrativement. <br>
              6 - Une fois que vous avez indiquez tous les détails pertinents, cliquez
              sur Afficher votre annonce au bas de la page.

        </p>
        </div>
      </div>
    </div>
    <h2 class="text-center mt-4">Politique</h2>
  
    <div class="accordion">
      <div class="accordion-item">
        <a>Que dit notre politique de confidentialité ?</a>
        <div class="content">
          <p>Politique de confidentialité pour les petites annonces de Fortifie-toi
              Mise à jour: 5 août 2018 <br>
<b>1. Généralités</b><br> 
La présente Politique de confidentialité décrit le règlement de Fortifie-toi concernant la collecte,
l'utilisation, le stockage, et la protection de vos renseignements personnels (la «Politique de
confidentialité»). La présente Politique de confidentialité s'applique au site www.fortifie-toi.ci («
Fortifie-toi» ou le «  site Web  ») et aux services qui intègrent par renvoi la présente (les
«services»), peu importe la méthode d'accès à ces services, y compris l'accès au moyen
d'appareils mobiles. 
Portée et consentement: En utilisant Fortifie-toi et les services connexes, vous consentez
expressément à la collecte, à l'utilisation et à la conservation de vos renseignements
personnels par Fortifie-toi, conformément à la présente Politique de confidentialité et à nos
conditions d'utilisation. 
Fortifie-toi peut modifier la présente Politique de confidentialité en fonction des besoins. Nous
vous conseillons de le consulter régulièrement. Les changements majeurs apportés à notre
politique de confidentialité seront annoncés sur notre site Web. La politique de confidentialité
modifiée entrera en vigueur immédiatement après sa première publication sur notre site Web.
La présente Politique de confidentialité est en vigueur en date du 5 août 2018. <br>
<b>2. Renseignements personnels que nous recueillons </b><br>
Vous pouvez consulter notre site Web sans ouvrir de compte. Si vous décidez de nous fournir
vos renseignements personnels, vous acceptez que cette information soit transmise et
conservée sur notre espace d’hébergement. Nous recueillons les renseignements personnels
suivants: 
Informations que vous nous fournissez: Nous recueillons et stockons toutes les
informations que vous saisissez sur notre site Web ou que vous nous fournissez lorsque vous
utilisez nos services. Ces informations incluent, sans toutefois s'y limiter: 
l'information que vous nous fournissez lorsque vous ouvrez un compte ou que vous
vous inscrivez à un service;  
les informations fournies dans le contexte de la résolution de litiges, de
correspondances sur notre site ou de correspondances à notre intention; <br>
<b>3. Utilisation de vos renseignements personnels </b><br>
Vous acceptez que nous puissions utiliser vos renseignements personnels aux fins suivantes: 
vous donnez accès à nos services et à notre service de soutien à la clientèle par courriel
ou par téléphone; 
prévenir, détecter et étudier les activités potentiellement interdites ou illégales, les
fraudes et les intrusions et assurer le respect de nos conditions d'utilisation; 
personnaliser, évaluer et améliorer nos services, notre contenu et nos publicités; 
communiquer avec vous par courriel, par notification en mode push, par message texte
(SMS) ou par téléphone, vous poser des questions sur nos services.
Informations que vous partagez sur www.Fortifie-toi.ci: Notre site Web permet aux
utilisateurs de partager des annonces, des publicités et d'autres informations avec les autres
utilisateurs, rendant ainsi ces informations partagées accessibles aux autres utilisateurs. Vous
êtes le seul responsable des renseignements personnels que vous diffusez sur notre site Web.
Par conséquent, nous ne pouvons garantir la confidentialité ni la sécurité de l'information que
vous transmettez à d'autres utilisateurs. 
Si vous consultez notre site Web à partir d'un ordinateur partagé ou d'un café Internet, nous
vous suggérons fortement de fermer votre session après chaque consultation. Si vous ne
souhaitez pas que l'ordinateur partagé mémorise votre utilisation ou vos renseignements, vous
devez supprimer les témoins ou l'historique de vos consultations de notre site Web. <br>
<b>4. Témoins (cookies) </b><br>
Lorsque vous utilisez nos services, nos fournisseurs de services et nous-mêmes pouvons
placer des témoins (des fichiers de données sur votre ordinateur, téléphone ou votre appareil
mobile), des repères Web (des images électroniques ajoutées au code d'une page Web) ou
des outils similaires. Nous utilisons les témoins afin de vous identifier en tant qu'utilisateur, de
vous offrir une meilleure expérience sur notre site Web,  d'assurer le respect des règlements et
la sécurité sur notre site Web. <br>
<b>5. Renseignements personnels: accès, consultation et modification </b> <br>
Nous ne pouvons pas modifier vos renseignements personnels ni vos informations de compte.
Vous pouvez modifier vos renseignements en ouvrant une session dans votre compte Fortifietoi. Si vous voulez fermer votre compte, veuillez nous envoyer une demande. Nous traiterons
votre demande dans un délai raisonnable.
25/11/2019 Aide Fortifie-toi :: Accueil
https://aide.fortifietoi.ci/politique/politique-de-confidentialite 2/2 <br>
<b>6. Protection et conservation de vos renseignements personnels</b> <br>
Nous protégeons vos renseignements à l'aide de mesures de sécurité techniques
(notamment  le chiffrement des données) qui limitent les risques de perte, d'abus, d'accès non
autorisé, de divulgation et de modification. Néanmoins, si vous pensez que votre compte a fait
l'objet d'un abus, veuillez communiquer avec nous au moyen  de l’aide.
Contact: Si vous avez des questions concernant Fortifie-toi ou notre site Web, veuillez
nous contacter.
</p>
        </div>
      </div>
      <div class="accordion-item">
        <a>Qu'ai-je le droit de publier ?</a>
        <div class="content">
          <p>Pour assurer un environnement agréable pour tous, nous avons décidé d'interdire sur Fortifietoi tout annonces et publicités autres que celles liées à la religion chrétienne catholique.
Les annonces chrétienne catholique à caractère mensongère et ou dans avec des intentions
d’arnaques ou de tromperie. 
Les annonces ne correspondant pas aux rubriques sur le site sont susceptible d’être
supprimer.
Des images obscènes, inappropriées, douteux ou interdit par l’église catholique entraineront la
suppression de l’annonce.
</p>
        </div>
      </div>
      <div class="accordion-item">
        <a>Quelles sont les règles de fortifietoi ?</a>
        <div class="content">
          <p>Les activités suivantes sont interdites sur Fortifie-toi :
Afficher des annonces en dehors du territoire ivoirien. <br>
Afficher des annonces autres que celle de la religion chrétienne catholique. <br>
Afficher des annonces pour la vente d'articles de la religion chrétienne catholique omis la
promotion des livres chrétiens catholique et des œuvres discographiques. <br>
Afficher des  annonces identiques dans plusieurs catégories. <br>
Afficher des annonces en utilisant différentes adresses courriel. <br>
Afficher des annonces dans le seul but de générer de l'achalandage sur un autre site Web. <br>
Afficher des annonces contenant une liste de mots-clés qui ne sont pas directement liés au
contenu de l’annonce. <br>
Afficher des annonces dans une langue autre le français.
Remarque : <br>
Pour des raisons de sécurité, les utilisateurs âgés de moins de 18 ans doivent faire appel à un
adulte pour afficher des annonces sur notre site.
Toute annonce qui n'est pas conforme aux règlements de Fortifie-toi pourrait être retirée du
site. Par ailleurs, les utilisateurs qui enfreignent nos règlements pourraient perdre l'accès au
site Fortifie-toi de façon définitive.
Nous pouvons, en tout temps, retirer une annonce si nous jugeons qu'elle nuit au bien-être de
la communauté chrétienne catholique en Côte d’Ivoire ou qu'elle va à l'encontre de l'esprit de
Fortifie-toi.
En résumé, vous ne pouvez pas afficher, ou faire la promotion d’œuvre discographique ou
d’œuvre littéraire chrétienne catholique n’ayant pas d’imprimatur. Il vous incombe de vous
assurer du respect de toutes les règles applicables concernant l'annonce que vous affichez, ou
que vous faite la promotion.
</p>
        </div>
      </div>
    </div>
  </div>  </div>
 
  </div>

  </div>

    <script>
        const items = document.querySelectorAll(".accordion a");

        function toggleAccordion(){
          this.classList.toggle('active');
          this.nextElementSibling.classList.toggle('active');
        }

        items.forEach(item => item.addEventListener('click', toggleAccordion));
    </script>


@endsection
