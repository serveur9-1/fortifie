@component('mail::message')
{{-- Greeting --}}
@if (! empty($greeting))
# {{ $greeting }}
@else
@if ($level === 'error')
# @lang('Whoops!')
@else
# @lang('Bonjour, ')
@endif
@endif

{{-- Intro Lines --}}
<p>Vous recevez cet e-mail, car nous avons reçu une demande de réinitialisation du mot de passe pour votre compte.</p>

{{-- Action Button --}}
@isset($actionText)
<?php
    switch ($level) {
        case 'success':
        case 'error':
            $color = $level;
            break;
        default:
            $color = 'primary';
    }
?>
@component('mail::button', ['url' => $actionUrl, 'color' => $color])
Réinitialiser le mot de passe
@endcomponent

<p>Ce lien de réinitialisation de mot de passe expire dans 60 minutes.</p>

<p>Si vous n'avez pas demandé de réinitialisation de mot de passe, aucune autre action n'est réquise.</p>

@endisset

{{-- Subcopy --}}
@isset($actionText)
@slot('subcopy')
@lang(
    "Si vous ne parvenez pas à cliquer sur le bouton \":actionText\", copiez et collez l'URL ci-dessous\n".
    'dans votre navigateur Web : [:actionURL](:actionURL)',
    [
        'actionText' => $actionText,
        'actionURL' => $actionUrl,
    ]
)
@endslot
@endisset
@endcomponent
