@component('mail::message')
# Asunto : {{ $data['subject'] }}.

# Mensaje emitido por {{ $data['name'] }},  y ha dejado su número para contacto ({{ $data['phone'] }}). 

# {{ $data['message'] }}.

@component('mail::button', ['url' => ''])
Veterinaria
@endcomponent

Gracias,<br>
{{ config('app.name') }}
@endcomponent
