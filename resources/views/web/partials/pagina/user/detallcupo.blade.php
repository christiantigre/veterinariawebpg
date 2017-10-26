@extends('web.index')
@section('content')

<div class="container profile" style="background-color: #ffffff;">
  <div class="row" style="background-color: #ffffff;">
    <div class="span12" style="background-color: #ffffff;">

      <div class="well clearfix" style="background-color: #ffffff;">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 clearfix">


          Mis cursos

          <div class="panel-body">


            <br/>
            <br/>

            <a href="{{ url('/miscursos/' . $suscribir->id) }}" title="Back"><button class="btn btn-warning btn-xs"><i class="fa fa-arrow-left" aria-hidden="true"></i> Atras</button></a>
            <a href="{{ url('/editcupo/' . $suscribir->id ) }}" title="Edit Suscribir"><button class="btn btn-primary btn-xs"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Editar</button></a>
            
              <br/>
              <br/>

              <div class="table-responsive">
                <table class="table table-borderless">
                  <tbody>
                    <tr>
                    </tr>
                    <tr>
                      <th> Nombres </th><td> {{ $suscribir->nombres }} {{ $suscribir->apellidos }} </td>
                    </tr>
                    <tr>
                      <th> Contactos </th><td> {{ $suscribir->celular }} -/- {{ $suscribir->telefono }}</td>
                    </tr>
                    <tr>
                      <th> Correo </th><td> {{ $suscribir->correo }} </td>
                    </tr>
                    <tr>
                      <th> Curso de interés </th><td>
                        <a href="{{ url('DetallCourses', ['id' => $suscribir->curso_id])}}">
                          {{ $suscribir->Course->title }} 
                        </a>
                     </td>
                    </tr>
                    <tr>
                      <th> Estado </th>
                      <td>
                        @if(($suscribir->tipesuscription_id)=='1')
                        <small class="label label-warning">En espera</small>
                        @endif
                        @if(($suscribir->tipesuscription_id)=='2')
                        <small class="label label-success">Aprobado</small>
                        @endif
                        @if(($suscribir->tipesuscription_id)=='3')
                        <small class="label label-info">Finalizado</small>
                        @endif
                      </td>
                    </tr>
                    <tr>
                      <th>Imagen comprobante</th>
                      <td>
                        @if(empty($suscribir->comprobante))
                        <img class="img-responsive img-thumbnail" src="{{ asset('uploads/statics/imagennodisponible.png') }}" width="150px"/>
                        @else
                        <a href="{{ asset($suscribir->comprobante) }}"><img class="img-responsive img-thumbnail" src="{{ asset($suscribir->comprobante) }}" width="150px"/></a>
                        @endif
                      </td>
                    </tr>
                    <tr>
                      <th>Número # control</th>
                      <td>{{ $suscribir->numero_control }}</td>
                    </tr>
                    <tr>
                      <th>Nombre depositante</th>
                      <td>{{ $suscribir->nombre_depositante }}</td>
                    </tr>
                    <tr>
                      <th>Valor depositado</th>
                      <td>{{ $suscribir->valor_depositado }}</td>
                    </tr>
                    <tr>
                      <th>Fecha depósito</th>
                      <td>{{ $suscribir->fecha_deposito }}</td>
                    </tr>
                    <tr>
                      <th>Fecha suscripción</th>
                      <td>{{ $suscribir->fecha_suscripcion }}</td>
                    </tr>                    
                    <tr>
                      <th>Cupo asignado</th>
                      <td> 
                        @if(empty($suscribir->orden_cupo))
                          En espera
                        @else
                          N# {{ $suscribir->orden_cupo }}
                        @endif


                       </td>
                    </tr>
                  </tbody>
                </table>
              </div>



            </div>

          </div>
        </div>
      </div>
    </div>
  </div>

<!--<link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.no-icons.min.css" rel="stylesheet">
  <link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">-->

  <style type="text/css">
  li{
    list-style: none; 
  }
  
  .stats {
    text-align:center;
    text-shadow:1px 1px 0px #fff;
    margin-top:25px;  

  }
  .stats li{
    width:125px; 
  }
  .stats span{
    font-family:Helvetica;
    font-weight:bold;
    text-shadow:1px 1px 0px #fff;
    font-size:4em;

    display:block;
    line-height:1em;
  }

  /* Large desktop */
  @media (min-width: 1200px) { 
  }

  /* Portrait tablet to landscape and desktop */
  @media (min-width: 768px) and (max-width: 979px) { 
  }

  /* Landscape phone to portrait tablet */
  @media (max-width: 767px) { 
    .profile img{
      width:75px;
    }
    .profile h2{
      font-size:1.7em;
    }
    .stats span{
      font-size: 2em;
    }
  }
</style>


@stop