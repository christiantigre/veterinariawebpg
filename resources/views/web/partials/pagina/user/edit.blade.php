@extends('web.index')
@section('content')


<div class="container" style="background-color: #ffffff;">
  <div class="row" style="background-color: #ffffff;">
    <div class="col-md-10 " style="background-color: #ffffff;">


      <a href="{{ url('verdetallcupo',$id) }}" title="Back"><button class="btn btn-warning btn-xs"><i class="fa fa-arrow-left" aria-hidden="true"></i> Atras</button></a>


      @if ($errors->any())
      <ul class="alert alert-danger">
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
      </ul>
      @endif

      {!! Form::model($suscribir, [
                            'method' => 'POST',
                            'url' => ['/suscribirupdate', $suscribir->id],
                            'class' => 'form-horizontal',
                            'files' => true
                        ]) !!}
      <!--<form class="form-horizontal">-->
        <fieldset>

          <!-- Form Name -->
          <legend>Editar mi suscripción</legend>
          <p>


            
          </p>



          <div class="form-group {{ $errors->has('nombres') ? 'has-error' : ''}}">
            <label class="col-md-4 control-label" for="Nombres">Nombres</label>  
            <div class="col-md-4">
             <div class="input-group">
               <div class="input-group-addon">
                <i class="fa fa-user">
                </i>
              </div>
              {!! Form::text('nombres', null, ['class' => 'form-control input-md','placeholder'=>'Nombres']) !!} 
              {!! Form::hidden('curso_id',null, ['class' => 'form-control input-md','placeholder'=>'Nombres','readonly'=>'readonly']) !!}                
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
            {!! Form::text('apellidos',null, ['class' => 'form-control input-md','placeholder'=>'Apellidos']) !!}               
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
           {!! Form::text('correo',null, ['class' => 'form-control input-md','placeholder'=>'Correo']) !!}    
         </div>
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
         {!! Form::text('telefono',null, ['class' => 'form-control input-md','placeholder'=>'Teléfono']) !!}               
       </div>
       <div class="input-group othertop {{ $errors->has('celular') ? 'has-error' : ''}}">
         <div class="input-group-addon">
           <i class="fa fa-mobile fa-1x" style="font-size: 20px;"></i>
         </div>
         {!! Form::text('celular',null, ['class' => 'form-control input-md','placeholder'=>'Celular']) !!}   
       </div>
     </div>
   </div>

   <!-- checkbox -->
   <!-- Text input-->
   <div class="form-group">
    <label class="col-md-4 control-label" for="Phone number ">Seleccione los ítems de su interés </label>  
    <div class="col-md-4">
      <div class="input-group {{ $errors->has('precio_teorico') ? 'has-error' : ''}}">
       <label>
        <!--<input type="checkbox">-->
        @if(($suscribir->precio_teorico)=='0.00')
        {{ Form::checkbox('precio_teorico', $curso->precio_teorico, null, ['class' => 'field']) }}
        @else
        {{ Form::checkbox('precio_teorico', $curso->precio_teorico, true, ['class' => 'field']) }}
        @endif
        ({{ $curso->precio_teorico }}) Teórico
      </label>              
    </div>
    <div class="input-group othertop {{ $errors->has('precio_practico') ? 'has-error' : ''}}">
     <label>
      <!--<input type="checkbox">-->
      @if(($suscribir->precio_practico)=='0.00')
      {{ Form::checkbox('precio_practico', $curso->precio_practico, null, ['class' => 'field']) }}
        @else
      {{ Form::checkbox('precio_practico', $curso->precio_practico, true, ['class' => 'field']) }}
        @endif
      ({{ $curso->precio_practico }}) Práctico
    </label> 
  </div>
</div>
</div>


   <!-- File Button --> 
   <div class="form-group">
    <label class="col-md-4 control-label" for="Upload photo">Voucher depósito</label>
    <div class="col-md-4">
      {!! Form::File('comprobante', null, ['class' => 'input-file','accept'=>'image/*']) !!}
    </div>
  </div>

  <!-- File Button --> 
   <div class="form-group">
    <label class="col-md-4 control-label" for="Upload photo">Nombre depositante</label>
    <div class="col-md-4">
      {!! Form::text('nombre_depositante', null, ['class' => 'form-control','placeholder'=>'Depositante']) !!}
    </div>
  </div>

  <!-- Text input-->
  <div class="form-group">
    <label class="col-md-4 control-label" for="Date Of Birth">Fecha de depósito</label>  
    <div class="col-md-4">

      <div class="input-group">
       <div class="input-group-addon">
         <i class="fa fa-calendar"></i>

       </div>
       {!! Form::text('fecha_deposito',null, ['class' => 'form-control input-md date','placeholder'=>'','id'=>'datepicker']) !!}
       {!! $errors->first('fecha_deposito', '<p class="help-block">:message</p>') !!}
     </div>


   </div>
 </div>







 <div class="form-group">
  <label class="col-md-4 control-label" for="Permanent Address"></label>  
  <div class="col-md-4  col-xs-4">
    {!! Form::text('valor_depositado', null, ['class' => 'form-control input-md','placeholder'=>'Valor depositado']) !!} 
  </div>   
</div>

<div class="form-group">
  <label class="col-md-4 control-label" for="Permanent Address"></label>  
  <div class="col-md-4  col-xs-4">
    {!! Form::text('numero_control', null, ['class' => 'form-control input-md','placeholder'=>'Número de control']) !!} 
  </div>   
</div>









<div class="form-group">
  <label class="col-md-4 control-label" ></label>  
  <div class="col-md-4">
    {!! Form::submit(isset($submitButtonText) ? $submitButtonText : 'Actualizar', ['class' => 'btn btn-success']) !!}

      </div>
    </div>

  </fieldset>
  <!--</form>-->
  {!! Form::close() !!}
</div>


</div>
</div>



<script type="text/javascript">

  $('.date').datepicker({  

   format: 'yyyy-mm-dd'

 });  

</script> 




@stop

