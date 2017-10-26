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
                        <div class="table-responsive">
                            <table class="table table-borderless">
                                <thead>
                                    <tr>
                                        <th>Curso</th>
                                        <th>Nombre</th>
                                        <th>Correo</th>
                                        <th>Cupo</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($suscribir as $item)
                                    <tr>
                                        <td>
                                          <a href="{{ url('DetallCourses', ['id' => $item->curso_id])}}">
                                            {{ $item->Course->title }} 
                                          </a>
                                        </td>
                                        <td>{{ $item->nombres }} {{ $item->apellidos }}</td>
                                        <td>{{ $item->correo }}</td>
                                        <td>
                                          @if(($item->tipesuscription_id)==1)
                                          <small class="label label-warning">En espera</small>
                                          @endif
                                          @if(($item->tipesuscription_id)==2)
                                          <small class="label label-success">Aprobado</small>
                                          @endif
                                          @if(($item->tipesuscription_id)==3)
                                          <small class="label label-info">Finalizado</small>
                                          @endif
                                        </td>
                                        <td>
                                            <a href="{{ url('/verdetallcupo/' . $item->id) }}" title="View Suscribir"><button class="btn btn-info btn-xs"><i class="fa fa-eye" aria-hidden="true"></i> Ver</button></a>
                                            <a href="{{ url('/editcupo/' . $item->id ) }}" title="Edit Suscribir"><button class="btn btn-primary btn-xs"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Editar</button></a>
                                            
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <div class="pagination-wrapper"> {!! $suscribir->appends(['search' => Request::get('search')])->render() !!} </div>
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