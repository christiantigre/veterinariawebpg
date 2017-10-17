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
        'method' => 'POST',
        'url' => ['/perfil', $user->id,'upcredentials'],
        'class' => 'form-horizontal',
        'files' => true
        ]) !!}
        <!--<form class="form-horizontal">-->
          <fieldset>

            <!-- Form Name -->
            <legend>Configuración de credenciales</legend>


            <div class="form-group {{ $errors->has('name') ? 'has-error' : ''}}">
              <label class="col-md-4 control-label" for="Nombres">Usuario</label>  
              <div class="col-md-4">
               <div class="input-group">
                 <div class="input-group-addon">
                  <i class="fa fa-user">
                  </i>
                </div>
                {!! Form::text('name', null, ['class' => 'form-control input-md','placeholder'=>'Usuario']) !!}
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


         <div class="form-group {{ $errors->has('password') ? 'has-error' : ''}}">
          <label class="col-md-4 control-label" for="Nombres">Clave</label>  
          <div class="col-md-4">
           <div class="input-group">                {!! Form::password('password', null, ['class' => 'form-control input-md','placeholder'=>'Usuario']) !!}
           </div>    
         </div>  
       </div>






       <div class="form-group {{ $errors->has('password_confirmation') ? 'has-error' : ''}}">
        <label class="col-md-4 control-label" for="Nombres">Confirma clave</label>  
        <div class="col-md-4">
         <div class="input-group">
          {!! Form::password('password_confirmation', null, ['class' => 'form-control input-md','placeholder'=>'Usuario']) !!}
        </div>    
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


</div>
</div>



@stop

