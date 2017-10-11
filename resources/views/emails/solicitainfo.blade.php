@component('mail::message')
# Asunto : {{ $data['subject'] }}.

# Mensaje emitido por {{ $data['nombre'] }},  
ha dejado su número para contacto ({{ $data['contactos'] }}). 
ha dejado su correo ({{ $data['correo'] }}). 
ha dejado su información de la ciudad ({{ $data['ciudad'] }}). 

# {{ $data['message'] }}.

@component('mail::button', ['url' => ''])
Veterinaria
@endcomponent

Gracias,<br>
{{ config('app.name') }}
@endcomponent
