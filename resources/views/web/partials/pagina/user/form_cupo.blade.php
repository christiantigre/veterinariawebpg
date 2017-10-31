@extends('web.index')
@section('content')


<div class="container" style="background-color: #ffffff;">
  <div class="row" style="background-color: #ffffff;">
    <div class="col-md-10 " style="background-color: #ffffff;">


      <a href="{{ url('DetallCourses',$id) }}" title="Back"><button class="btn btn-warning btn-xs"><i class="fa fa-arrow-left" aria-hidden="true"></i> Atras</button></a>


      @if ($errors->any())
      <ul class="alert alert-danger">
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
      </ul>
      @endif

      {!! Form::open(['url' => 'crear_cupo','method'=>'POST','enctype'=>'multipart/form-data', 'class' => 'form-horizontal', 'files' => true]) !!}
      <!--<form class="form-horizontal">-->
        <fieldset>

          <!-- Form Name -->
          <legend>Separár mi cupo</legend>
          <p>
            El curso del que desea obtener un cupo es :
            <strong> {{ $course->title }},</strong> al enviarnos tu datos se le enviará un correo de verificación en el que te daremos el numero de cuenta si aun no lo tiene, para que realices el pago del valor de nuestro curso.



            
          </p>



          <div class="form-group {{ $errors->has('nombres') ? 'has-error' : ''}}">
            <label class="col-md-4 control-label" for="Nombres">Nombres</label>  
            <div class="col-md-4">
             <div class="input-group">
               <div class="input-group-addon">
                <i class="fa fa-user">
                </i>
              </div>
              {!! Form::text('nombres', $user->nombres, ['class' => 'form-control input-md','placeholder'=>'Nombres']) !!} 
              {!! Form::hidden('curso_id', $id, ['class' => 'form-control input-md','placeholder'=>'Nombres','readonly'=>'readonly']) !!}                
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
            {!! Form::text('apellidos', $user->apellidos, ['class' => 'form-control input-md','placeholder'=>'Apellidos']) !!}               
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
           {!! Form::text('correo', $user->email, ['class' => 'form-control input-md','placeholder'=>'Correo']) !!}    
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
         {!! Form::text('telefono', $user->telefono, ['class' => 'form-control input-md','placeholder'=>'Teléfono']) !!}               
       </div>
       <div class="input-group othertop {{ $errors->has('celular') ? 'has-error' : ''}}">
         <div class="input-group-addon">
           <i class="fa fa-mobile fa-1x" style="font-size: 20px;"></i>
         </div>
         {!! Form::text('celular', $user->celular, ['class' => 'form-control input-md','placeholder'=>'Celular','value'=>'1']) !!}   
       </div>
     </div>
   </div>
 <!-- Text input-->
      <div class="form-group">
        <label class="col-md-4 control-label" for="Email Address">Cantidad cupos</label>  
        <div class="col-md-4">
          <div class="input-group {{ $errors->has('separarcupos') ? 'has-error' : ''}}">
           <div class="input-group-addon">
             <i class="fa fa-sticky-note-o"></i>
           </div>
           {!! Form::number('separarcupos', 1, ['class' => 'form-control input-md','placeholder'=>'N#','min'=>'1']) !!}    
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
        {{ Form::checkbox('precio_teorico', $course->precio_teorico, true, ['class' => 'field']) }}
        ({{ $course->precio_teorico }}) Teórico
      </label>              
    </div>
    <div class="input-group othertop {{ $errors->has('precio_practico') ? 'has-error' : ''}}">
     <label>
      <!--<input type="checkbox">-->
      {{ Form::checkbox('precio_practico', $course->precio_practico, null, ['class' => 'field']) }}
      ({{ $course->precio_practico }}) Práctico
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

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="Date Of Birth">Fecha de depósito</label>  
  <div class="col-md-4">

    <div class="input-group">
     <div class="input-group-addon">
       <i class="fa fa-calendar"></i>

     </div>
     {!! Form::text('fecha_deposito', $user->fecha, ['class' => 'form-control input-md date','placeholder'=>'','id'=>'datepicker']) !!}
     {!! $errors->first('fecha_deposito', '<p class="help-block">:message</p>') !!}
   </div>


 </div>
</div>



<!-- File Button --> 
<div class="form-group">
  <label class="col-md-4 control-label" for="Upload photo">Nombre depositante</label>
  <div class="col-md-4">
    {!! Form::text('nombre_depositante', null, ['class' => 'form-control','placeholder'=>'Depositante']) !!}
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
    {!! Form::text('numero_control', null, ['class' => 'form-control input-md','placeholder'=>'Numero de control']) !!} 
  </div>   
</div>









<div class="form-group">
  <label class="col-md-4 control-label" ></label>  
  <div class="col-md-4">
    {!! Form::submit(isset($submitButtonText) ? $submitButtonText : 'Enviar', ['class' => 'btn btn-success']) !!}

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

