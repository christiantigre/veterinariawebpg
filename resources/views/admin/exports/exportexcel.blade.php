<center><p>Listado de postulantes</h1></p>

<table>
    <tr>
        <td><center>Cupo N#</center></td>
        <td><center>Estado cupo</center></td>
        <td><center>Nombre</center></td>
        <td><center>Correo</center></td>
        <td><center>Contactos</center></td>
        <td><center>Valor depositado</center></td>
        <td><center>Fecha de suscripción</center></td>
    </tr>
    @foreach($inscripciones as $item )
        <tr>
            <td><center>{{ $item->orden_cupo }}</center></td>
            <td><center>{{ $item->tipo }}</center></td>
            <td><center>{{ $item->nombres }} {{ $item->apellidos }}</center></td>
            <td><center>{{ $item->correo }}</center></td>
            <td><center>{{ $item->telefono }} {{ $item->celular }}</center></td>
            <td><center>${{ number_format($item->valor_depositado, 2) }}</center></td>
            <td><center>{{ $item->fecha_suscripcion }}</center></td>
            <td><center>{{ $item->title }}</center></td>
        </tr>
    @endforeach
</table>