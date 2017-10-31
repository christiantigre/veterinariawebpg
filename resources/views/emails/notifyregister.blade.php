@component('mail::message')
# Asunto : {{ $data['subject'] }}.

# Hola {{ $data['name'] }},  se acaba de registrar una cuenta en nuestro sitio Austrogen con el correo  ({{ $data['email'] }}), para que puedas ingresar a tu cuenta tus credenciales de ingreso serán usuario: {{  $data['email'] }} y tu contraseña {{ $data['email'] }} (esta clave es por defecto creada automatica en nuestro sistema, debes cambiarla despues de tu primer ingreso a nuestro sitio).

# {{ $data['message'] }}

@component('mail::button', ['url' => 'https://austrogen.com/'])
Austrogen
@endcomponent

Gracias,<br>
{{ config('app.name') }}
@endcomponent
