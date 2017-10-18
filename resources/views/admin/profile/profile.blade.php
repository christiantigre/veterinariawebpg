@extends('adminlte::page')

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Perfil
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{ url('/admin/home') }}"><i class="fa fa-dashboard"></i> Admin</a></li>
        <li class="active">Perfil usuario</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-3">

          <!-- Profile Image -->
          <div class="box box-primary">
            <div class="box-body box-profile">
              @if(empty($administrador->img))
              <img class="profile-user-img img-responsive img-circle" src="{{ asset('uploads/statics/avatar.jpg') }}" alt="User profile picture">
              @else
              <img class="profile-user-img img-responsive img-circle" src="{{ asset($administrador->img) }}" alt="User profile picture">
              @endif

              @if(empty($administrador->name))
              <h3 class="profile-username text-center">No Name</h3>
              @else
              <h3 class="profile-username text-center">{{ $administrador->name }}</h3>
              @endif

              
              @if(empty($administrador->abrev))
              <p class="text-muted text-center">Sin Cargo</p>
              @else
              <p class="text-muted text-center">{{ $administrador->abrev }}</p>
              @endif

              <ul class="list-group list-group-unbordered">
                <li class="list-group-item">
                  <b>Publicaciónes</b> <a class="pull-right">{{ count($notices)+count($notes)+count($services)+count($productos)+count($cursos) }}</a>
                </li>
                <li class="list-group-item">
                  <b>Noticias</b> <a class="pull-right">{{ count($notices) }}</a>
                </li>
                <li class="list-group-item">
                  <b>Notas</b> <a class="pull-right">{{ count($notes) }}</a>
                </li>
                <li class="list-group-item">
                  <b>Servicios</b> <a class="pull-right">{{ count($services) }}</a>
                </li>
                <li class="list-group-item">
                  <b>Productos</b> <a class="pull-right">{{ count($productos) }}</a>
                </li>
                <li class="list-group-item">
                  <b>Cursos</b> <a class="pull-right">{{ count($cursos) }}</a>
                </li>
              </ul>


              <a href="{{ url('/admin/settings/' . $administrador->id . '/edit') }}" title="Edit Card"><button class="btn btn-primary btn-block"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Editar</button></a>
              <br/>
              <a href="{{ url('/admin/settingscred/' . $administrador->id . '/edit_cred') }}" title="Edit Card"><button class="btn btn-primary btn-block"><i class="fa fa-lock" aria-hidden="true"></i> Editar Credenciales</button></a>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

          <!-- About Me Box -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Sobre mi</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <strong><i class="fa fa-book margin-r-5"></i> Educación</strong>

              <p class="text-muted">
                @if(empty($administrador->educacion))
                  No especificar
                @else
                  {{ $administrador->educacion }}
                @endif
              </p>

              <hr>

              <strong><i class="fa fa-map-marker margin-r-5"></i> Ubicación</strong>

              <p class="text-muted">
                @if(empty($administrador->pais))
                  No definido
                @else
                  {{ $administrador->pais }}
                @endif
              , 
              @if(empty($administrador->ciudad))
                  No definido
                @else
                  {{ $administrador->ciudad }}
                @endif
            </p>

              <hr>

              
              <strong><i class="fa fa-file-text-o margin-r-5"></i> Frase</strong>

              <p>
                @if(empty($administrador->frase))
                  Sin frase
                @else
                  {{ $administrador->frase }}
                @endif
            </p>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
        <div class="col-md-9">
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#cuenta" data-toggle="tab">Cuenta</a></li>
              <li><a href="#noticias" data-toggle="tab">Noticias</a></li>
              <li><a href="#notas" data-toggle="tab">Notas</a></li>
              <li><a href="#servicios" data-toggle="tab">Servicios</a></li>
              <li><a href="#productos" data-toggle="tab">Productos</a></li>
              <li><a href="#cursos" data-toggle="tab">Cursos</a></li>
            </ul>
            <div class="tab-content">
              <!--Cuenta-->
              <div class="active tab-pane" id="cuenta">
                <!-- Post -->
                <div class="post">
                  <div class="user-block">
                    @if(empty($administrador->img))
              <img class="profile-user-img img-responsive img-circle" src="{{ asset('uploads/statics/avatar.jpg') }}" alt="User profile picture">
              @else

                    <img class="img-circle img-bordered-sm" src="{{ asset($administrador->img) }}" alt="user image">
              @endif
                        <span class="username">
                          <a href="#">
                            @if(empty($administrador->nombres))
              No Name
              @else
              {{ $administrador->nombres }}
              @endif
              @if(empty($administrador->apellidos))
              No App
              @else
              {{ $administrador->apellidos }}
              @endif
                          .</a>
                          <a href="#" class="pull-right btn-box-tool"><i class="fa fa-times"></i></a>
                        </span>
                    <span class="description">Creado - {{$administrador->created_at}}</span>
                  </div>
                  <ul class="list-group list-group-unbordered">
                <li class="list-group-item">
                  <b>Fecha nacimiento</b> <a class="pull-right">
                     @if(empty($administrador->fecha_nacimiento))
                     -
                    @else
                    {{ $administrador->fecha_nacimiento }}
                    @endif
                  </a>
                </li>
                <li class="list-group-item">
                  <b>Telefono</b> <a class="pull-right">
                    @if(empty($administrador->telefono))
                     -
                    @else
                    {{ $administrador->telefono }}
                    @endif
                  </a>
                </li>
                <li class="list-group-item">
                  <b>Celular</b> <a class="pull-right">
                    @if(empty($administrador->celular))
                     -
                    @else
                    {{ $administrador->celular }}
                    @endif
                  </a>
                </li>
                <li class="list-group-item">
                  <b>Correo</b> <a class="pull-right">
                    @if(empty($administrador->email))
                     -
                    @else
                    {{ $administrador->email }}
                    @endif
                  </a>
                </li>
                <li class="list-group-item">
                  <b>Título</b> <a class="pull-right">
                    @if(empty($administrador->abrev))
                     -
                    @else
                    {{ $administrador->abrev }}
                    @endif
                  </a>
                </li>
                <li class="list-group-item">
                  <b>Pais</b> <a class="pull-right">
                    @if(empty($administrador->pais))
                     -
                    @else
                    {{ $administrador->pais }}
                    @endif
                  </a>
                </li>                
                <li class="list-group-item">
                  <b>Ciudad</b> <a class="pull-right">
                    @if(empty($administrador->ciudad))
                     -
                    @else
                    {{ $administrador->ciudad }}
                    @endif
                  </a>
                </li>              
                <li class="list-group-item">
                  <b>Estado</b> <a class="pull-right">
                    @if(($administrador->activo)=='1')
                      <span class="label label-success">Activado</span>
                    @else          
                    <span class="label label-warning">Desactivado</span>
                    @endif
                  </a>
                </li>
              </ul>

                  

                </div>
                <!-- /.post -->
              </div>
              <!--Fin cuenta-->

              <div class="tab-pane" id="noticias">
                @if(count($notices)>0)
                <!-- Post -->
                @foreach($notices as $noticia)
                <div class="post">
                  <div class="user-block">
                    @if(empty($noticia->img))
              <img class="img-circle img-bordered-sm" src="{{ asset('uploads/statics/avatar.jpg') }}" alt="User profile picture">
              @else

                    <img class="img-circle img-bordered-sm" src="{{ asset($noticia->img) }}" alt="user image">
              @endif
                        <span class="username">
                          <a href="{{ url('/admin/notices/' . $noticia->id) }}">{{ $noticia->title }}.</a>
                          <a href="{{ url('/admin/notices/' . $noticia->id) }}" class="pull-right btn-box-tool"><i class="fa fa-times"></i></a>
                        </span>
                    <span class="description">Creado - {{ $noticia->created_at }}</span>
                  </div>
                  <!-- /.user-block -->
                  <p>
                    {!! $noticia->content !!}
                  </p>
                </div>
                @endforeach
                <!-- /.post -->
                @endif
              </div>
              <!-- /.tab-pane -->
              <div class="tab-pane" id="notas">

                @if(count($notes)>0)
                <!-- Post -->
                @foreach($notes as $note)
                <div class="post">
                  <div class="user-block">
                    @if(empty($note->imgHeader))
              <img class="img-circle img-bordered-sm" src="{{ asset('uploads/statics/avatar.jpg') }}" alt="User profile picture">
              @else

                    <img class="img-circle img-bordered-sm" src="{{ asset($note->imgHeader) }}" alt="user image">
              @endif
                        <span class="username">
                          <a href="{{ url('/admin/notes/' . $note->id) }}">{{ $note->title }}.</a>
                          <a href="{{ url('/admin/notes/' . $note->id) }}" class="pull-right btn-box-tool"><i class="fa fa-times"></i></a>
                        </span>
                    <span class="description">Creado - {{ $note->created_at }}</span>
                  </div>
                  <!-- /.user-block -->
                  <p>
                    {!! $note->description !!}
                  </p>
                </div>
                @endforeach
                <!-- /.post -->
                @endif

              </div>
              <!-- /.tab-pane -->

              <div class="tab-pane" id="servicios">
                @if(count($services)>0)
                <!-- Post -->
                @foreach($services as $service)
                <div class="post">
                  <div class="user-block">
                    @if(empty($service->img))
              <img class="img-circle img-bordered-sm" src="{{ asset('uploads/statics/avatar.jpg') }}" alt="User profile picture">
              @else

                    <img class="img-circle img-bordered-sm" src="{{ asset($service->img) }}" alt="user image">
              @endif
                        <span class="username">
                          <a href="{{ url('/admin/service/' . $service->id) }}">{{ $service->service }}.</a>
                          <a href="{{ url('/admin/service/' . $service->id) }}" class="pull-right btn-box-tool"><i class="fa fa-times"></i></a>
                        </span>
                    <span class="description">Creado - {{ $service->created_at }}</span>
                  </div>
                  <!-- /.user-block -->
                  <p>
                    {!! $service->description !!}
                  </p>
                </div>
                @endforeach
                <!-- /.post -->
                @endif
              </div>
              <!-- /.tab-pane -->
              <div class="tab-pane" id="productos">
                @if(count($productos)>0)
                <!-- Post -->
                @foreach($productos as $producto)
                <div class="post">
                  <div class="user-block">
                    @if(empty($producto->img))
              <img class="img-circle img-bordered-sm" src="{{ asset('uploads/statics/avatar.jpg') }}" alt="User profile picture">
              @else

                    <img class="img-circle img-bordered-sm" src="{{ asset($producto->img) }}" alt="user image">
              @endif
                        <span class="username">
                          <a href="{{ url('/admin/product/' . $producto->id) }}">{{ $producto->name }}.</a>
                          <a href="{{ url('/admin/product/' . $producto->id) }}" class="pull-right btn-box-tool"><i class="fa fa-times"></i></a>
                        </span>
                    <span class="description">Creado - {{ $producto->created_at }}</span>
                  </div>
                  <!-- /.user-block -->
                  <p>
                    {!! $producto->description !!}
                  </p>
                </div>
                @endforeach
                <!-- /.post -->
                @endif
              </div>

              <div class="tab-pane" id="cursos">
                @if(count($cursos)>0)
                <!-- Post -->
                @foreach($cursos as $curso)
                <div class="post">
                  <div class="user-block">
                    @if(empty($curso->img))
              <img class="img-circle img-bordered-sm" src="{{ asset('uploads/statics/avatar.jpg') }}" alt="User profile picture">
              @else

                    <img class="img-circle img-bordered-sm" src="{{ asset($curso->img) }}" alt="user image">
              @endif
                        <span class="username">
                          <a href="{{ url('/admin/courses/' . $curso->id) }}">{{ $curso->title }}.</a>
                          <a href="{{ url('/admin/courses/' . $curso->id) }}" class="pull-right btn-box-tool"><i class="fa fa-times"></i></a>
                        </span>
                    <span class="description">Creado - {{ $curso->created_at }}</span>
                  </div>
                  <!-- /.user-block -->
                  <p>
                    {!! $curso->description !!}
                  </p>
                </div>
                @endforeach
                <!-- /.post -->
                @endif
              </div>


            </div>
            <!-- /.tab-content -->
          </div>
          <!-- /.nav-tabs-custom -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->

@endsection