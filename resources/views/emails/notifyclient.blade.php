@component('mail::message')
# Asunto : {{ $data['subject'] }}.

# Hola {{ $data['name'] }},  acabamos de aceptar tu suscripción en nuestro curso  ({{ $data['cursotitulo'] }}), para ver los detalles del curso ingresa en nuestra pagina web y conoce fecha de inicio, materiales entre mas información del curso que elegiste. 

# {{ $data['message'] }}.

@component('mail::button', ['url' => 'https://austrogen.com/'])
Austrogen
@endcomponent

Gracias,<br>
{{ config('app.name') }}
@endcomponent
