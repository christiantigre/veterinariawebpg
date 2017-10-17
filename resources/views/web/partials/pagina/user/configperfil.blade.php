@extends('web.index')
@section('content')


<div class="container" style="background-color: #ffffff;">
  <div class="row" style="background-color: #ffffff;">
    <div class="col-md-10 " style="background-color: #ffffff;">


<a href="{{ url('/perfil') }}" title="Back"><button class="btn btn-warning btn-xs"><i class="fa fa-arrow-left" aria-hidden="true"></i> Atras</button></a>


                @if ($errors->any())
                            <ul class="alert alert-danger">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        @endif
                        
      {!! Form::model($user, [
        'method' => 'PATCH',
        'url' => ['/perfil', $user->id],
        'class' => 'form-horizontal',
        'files' => true
        ]) !!}
        <!--<form class="form-horizontal">-->
          <fieldset>

            <!-- Form Name -->
            <legend>Configuración de perfil</legend>


          <div class="form-group {{ $errors->has('name') ? 'has-error' : ''}}">
              <label class="col-md-4 control-label" for="Nombres">Usuario</label>  
              <div class="col-md-4">
               <div class="input-group">
                 <div class="input-group-addon">
                  <i class="fa fa-user">
                  </i>
                </div>

                {!! Form::text('name', null, ['class' => 'form-control input-md','placeholder'=>'Usuario']) !!}
                <!--<input id="name" name="name" type="text" placeholder="Usuario" class="form-control input-md">-->
              </div>    
            </div>  
          </div>




            <!-- Text input-->


            <div class="form-group {{ $errors->has('nombres') ? 'has-error' : ''}}">
              <label class="col-md-4 control-label" for="Nombres">Nombres</label>  
              <div class="col-md-4">
               <div class="input-group">
                 <div class="input-group-addon">
                  <i class="fa fa-user">
                  </i>
                </div>
                {!! Form::text('nombres', null, ['class' => 'form-control input-md','placeholder'=>'Nombres']) !!}                
                <!--<input id="nombres" name="nombres" type="text" placeholder="Nombres" class="form-control input-md">-->
              </div>    
            </div>  
          </div>

          <div class="form-group {{ $errors->has('apellidos') ? 'has-error' : ''}}">
            <label class="col-md-4 control-label" for="Apellidos">Apellidos</label>  
            <div class="col-md-4">
             <div class="input-group">
               <div class="input-group-addon">
                <i class="fa fa-user">
                </i>
              </div>
              {!! Form::text('apellidos', null, ['class' => 'form-control input-md','placeholder'=>'Apellidos']) !!}                
              <!--<input id="apellidos" name="apellidos" type="text" placeholder="Apellidos" class="form-control input-md">-->
            </div>    
          </div>  
        </div>

        <!-- File Button --> 
        <div class="form-group">
          <label class="col-md-4 control-label" for="Upload photo">Foto perfíl</label>
          <div class="col-md-4">

        {!! Form::File('img', null, ['class' => 'input-file','accept'=>'image/*']) !!}
            <!--<input id="Upload photo" name="Upload photo" class="input-file" type="file">-->
          </div>
        </div>

        <!-- Text input-->
        <div class="form-group">
          <label class="col-md-4 control-label" for="Date Of Birth">Fecha de nacimiento</label>  
          <div class="col-md-4">

            <div class="input-group">
             <div class="input-group-addon">
               <i class="fa fa-birthday-cake"></i>

             </div>
              {!! Form::text('fecha_nacimiento', null, ['class' => 'form-control input-md date','placeholder'=>'','id'=>'datepicker']) !!}
        {!! $errors->first('fechainit', '<p class="help-block">:message</p>') !!}
             <!--<input id="fecha_nacimiento" name="fecha_nacimiento" type="text" placeholder="Fecha de nacimiento" class="form-control input-md">-->
           </div>


         </div>
       </div>



       <!-- Multiple Radios (inline) -->
       <div class="form-group">
        <label class="col-md-4 control-label" for="Gender">Genero</label>
        <div class="col-md-4"> 
          {!! Form::select('id_gender', $genero, null, ['class' => 'form-control']) !!}
        </div>
      </div>




      <div class="form-group {{ $errors->has('domicilio') ? 'has-error' : ''}}">
        <label class="col-md-4 control-label col-xs-12" for="Permanent Address">Dirección</label>  
        <div class="col-md-2  col-xs-4">
          {!! Form::select('id_country', $paises, null, ['class' => 'form-control input-md']) !!}

          <!--<input id="Permanent Address" name="Permanent Address" type="text" placeholder="Provincia" class="form-control input-md ">-->
        </div>

        <div class="col-md-2 col-xs-4">
          {!! Form::select('id_province', $provincias, null, ['class' => 'form-control input-md']) !!}

          <!--<input id="Permanent Address" name="Permanent Address" type="text" placeholder="Ciudad" class="form-control input-md ">-->
        </div>  
      </div>

      <div class="form-group">
        <label class="col-md-4 control-label" for="Permanent Address"></label>  
        <div class="col-md-4  col-xs-4">
          {!! Form::text('domicilio', null, ['class' => 'form-control input-md','placeholder'=>'Dirección']) !!} 
          <!--<input id="Permanent Address" name="Permanent Address" type="text" placeholder="Dirección" class="form-control input-md ">-->
        </div>   
      </div>




      <!-- Text input-->
      <div class="form-group">
        <label class="col-md-4 control-label" for="Phone number ">Mis Contactos </label>  
        <div class="col-md-4">
          <div class="input-group {{ $errors->has('telefono') ? 'has-error' : ''}}">
           <div class="input-group-addon">
             <i class="fa fa-phone"></i>

           </div>
           {!! Form::text('telefono', null, ['class' => 'form-control input-md','placeholder'=>'Teléfono']) !!}                
           <!--<input id="telefono" name="telefono" type="text" placeholder="Teléfono" class="form-control input-md">-->

         </div>
         <div class="input-group othertop {{ $errors->has('celular') ? 'has-error' : ''}}">
           <div class="input-group-addon">
             <i class="fa fa-mobile fa-1x" style="font-size: 20px;"></i>

           </div>
           {!! Form::text('celular', null, ['class' => 'form-control input-md','placeholder'=>'Celular']) !!}                
          <!--<input id="celular" name="celular" type="text" placeholder="Celular " class="form-control input-md">-->

         </div>

       </div>
     </div>

     <!-- Text input-->
     <div class="form-group">
      <label class="col-md-4 control-label" for="Email Address">Email</label>  
      <div class="col-md-4">
        <div class="input-group">
         <div class="input-group-addon">
           <i class="fa fa-envelope-o"></i>

         </div>
           {!! Form::text('email', null, ['class' => 'form-control input-md','placeholder'=>'Correo']) !!}                

         <!--<input id="email" name="email" type="text" placeholder="Tu correo" class="form-control input-md">-->

       </div>

     </div>
   </div>



   <!-- Textarea -->
   <div class="form-group">
    <label class="col-md-4 control-label" for="Overview (max 200 words)">Cuentas sobre tí </label>
    <div class="col-md-4">                     
      <textarea class="form-control" rows="10"  id="history" placeholder="Tu Historia" name="history"></textarea>
    </div>
  </div>


  <div class="form-group">
    <label class="col-md-4 control-label" ></label>  
    <div class="col-md-4">
        {!! Form::submit(isset($submitButtonText) ? $submitButtonText : 'Actualizar', ['class' => 'btn btn-success']) !!}
      <!--<a href="#" class="btn btn-success"><span class="glyphicon glyphicon-thumbs-up"></span> Submit</a>
      <a href="#" class="btn btn-danger" value=""><span class="glyphicon glyphicon-remove-sign"></span> Clear</a>-->

    </div>
  </div>

</fieldset>
<!--</form>-->
{!! Form::close() !!}
</div>
<div class="col-md-2 hidden-xs">
  @if(!empty($user->img))
    <img src="{{ asset($user->img) }}" class="img-responsive img-thumbnail ">
  @else
    <img src="{{ asset('uploads/statics/avatar.jpg') }}" class="img-responsive img-thumbnail ">
  @endif
</div>


</div>
</div>



<script type="text/javascript">

    $('.date').datepicker({  

       format: 'yyyy-mm-dd'

     });  

</script> 




@stop

