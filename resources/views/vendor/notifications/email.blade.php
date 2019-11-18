@component('mail::message')

{{-- Action Button --}}
@isset($actionText)
<?php
    switch ($level) {
        case 'success':
            $color = 'green';
            break;
        case 'error':
            $color = 'red';
            break;
        default:
            $color = 'blue';
    }
?>
@component('mail::button', ['url' => $actionUrl, 'color' => $color])
Restablecer contraseña
@endcomponent
@endisset

Si no has solicitado un cambio de contraseña, ignora este mensaje.

Saludos!

Sistema de Gestión de Consultas - Ticketing

{{-- Subcopy --}}
@isset($actionText)
@component('mail::subcopy')
@lang(
    "Si no puedes solucionar algo, copia y pega la URL de abajo \n".
    'en tu navegador web: [:actionURL](:actionURL)',
    [
        'actionText' => $actionText,
        'actionURL' => $actionUrl,
    ]
)
@endcomponent
@endisset
@endcomponent
