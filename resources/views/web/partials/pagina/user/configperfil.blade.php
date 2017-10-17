@extends('web.index')
@section('content')


<div class="container">
  <div class="row">
    <div class="col-md-10 ">


<a href="{{ url('/perfil') }}" title="Back"><button class="btn btn-warning btn-xs"><i class="fa fa-arrow-left" aria-hidden="true"></i> Atras</button></a>
                        
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


          <div class="form-group">
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


            <div class="form-group">
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

          <div class="form-group">
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
            <input id="Upload photo" name="Upload photo" class="input-file" type="file">
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
             <input id="fecha_nacimiento" name="fecha_nacimiento" type="text" placeholder="Fecha de nacimiento" class="form-control input-md">
           </div>


         </div>
       </div>



       <!-- Multiple Radios (inline) -->
       <div class="form-group">
        <label class="col-md-4 control-label" for="Gender">Genero</label>
        <div class="col-md-4"> 
          {!! Form::select('id_gender', $genero, null, ['class' => 'form-control']) !!}
          <label class="radio-inline" for="Gender-0">
            <input type="radio" name="Gender" id="Gender-0" value="1" checked="checked">
            Masculino
          </label> 
          <label class="radio-inline" for="Gender-1">
            <input type="radio" name="Gender" id="Gender-1" value="2">
            Femenino
          </label> 
          <label class="radio-inline" for="Gender-2">
            <input type="radio" name="Gender" id="Gender-2" value="3">
            Otro
          </label>
        </div>
      </div>




      <div class="form-group">
        <label class="col-md-4 control-label col-xs-12" for="Permanent Address">Dirección</label>  
        <div class="col-md-2  col-xs-4">
          <input id="Permanent Address" name="Permanent Address" type="text" placeholder="Provincia" class="form-control input-md ">
        </div>

        <div class="col-md-2 col-xs-4">
          <input id="Permanent Address" name="Permanent Address" type="text" placeholder="Ciudad" class="form-control input-md ">
        </div>  
      </div>

      <div class="form-group">
        <label class="col-md-4 control-label" for="Permanent Address"></label>  
        <div class="col-md-4  col-xs-4">
          <input id="Permanent Address" name="Permanent Address" type="text" placeholder="Dirección" class="form-control input-md ">
        </div>   
      </div>




      <!-- Text input-->
      <div class="form-group">
        <label class="col-md-4 control-label" for="Phone number ">Mis Contactos </label>  
        <div class="col-md-4">
          <div class="input-group">
           <div class="input-group-addon">
             <i class="fa fa-phone"></i>

           </div>
           {!! Form::text('telefono', null, ['class' => 'form-control input-md','placeholder'=>'Teléfono']) !!}                
           <!--<input id="telefono" name="telefono" type="text" placeholder="Teléfono" class="form-control input-md">-->

         </div>
         <div class="input-group othertop">
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
      <textarea class="form-control" rows="10"  id="historia" placeholder="Tu Historia" name="historia"></textarea>
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
  <img src="http://websamplenow.com/30/userprofile/images/avatar.jpg" class="img-responsive img-thumbnail ">
</div>


</div>
</div>
@stop