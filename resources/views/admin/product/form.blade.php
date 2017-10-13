<div class="form-group {{ $errors->has('name') ? 'has-error' : ''}}">
    {!! Form::label('name', 'Nombre', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('name', null, ['class' => 'form-control']) !!}
        {!! $errors->first('name', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('slug') ? 'has-error' : ''}}">
    {!! Form::label('slug', 'Sub Titulo', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('slug', null, ['class' => 'form-control']) !!}
        {!! $errors->first('slug', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('cod') ? 'has-error' : ''}}">
    {!! Form::label('cod', 'Codigo', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('cod', null, ['class' => 'form-control']) !!}
        {!! $errors->first('cod', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('description') ? 'has-error' : ''}}">
    {!! Form::label('description', 'Descripción', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::textarea('description', null, ['class' => 'form-control my-editor']) !!}
        {!! $errors->first('description', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('precio_compra') ? 'has-error' : ''}}">
    {!! Form::label('precio_compra', 'Precio Compra', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('precio_compra', null, ['class' => 'form-control','placeholder'=>'355.99']) !!}
        {!! $errors->first('precio_compra', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('precio_venta') ? 'has-error' : ''}}">
    {!! Form::label('precio_venta', 'Precio Venta', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('precio_venta', null, ['class' => 'form-control','placeholder'=>'355.99']) !!}
        {!! $errors->first('precio_venta', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('porcent_descuento') ? 'has-error' : ''}}">
    {!! Form::label('porcent_descuento', 'Porcentaje Descuento', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('porcent_descuento', null, ['class' => 'form-control','placeholder'=>'355.99']) !!}
        {!! $errors->first('porcent_descuento', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('stock') ? 'has-error' : ''}}">
    {!! Form::label('stock', 'Stock', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::number('stock', null, ['class' => 'form-control']) !!}
        {!! $errors->first('stock', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('vendidos') ? 'has-error' : ''}}">
    {!! Form::label('vendidos', 'Vendidos', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::number('vendidos', null, ['class' => 'form-control']) !!}
        {!! $errors->first('vendidos', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('img') ? 'has-error' : ''}}">
    {!! Form::label('img', 'Imagen', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::file('img', null, ['class' => 'form-control']) !!}
        {!! $errors->first('img', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('visible') ? 'has-error' : ''}}">
    {!! Form::label('visible', 'Activo', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        <div class="checkbox">
    <label>{!! Form::radio('visible', '1', true) !!} Yes</label>
</div>
<div class="checkbox">
    <label>{!! Form::radio('visible', '0') !!} No</label>
</div>
        {!! $errors->first('visible', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('oferta') ? 'has-error' : ''}}">
    {!! Form::label('oferta', 'Oferta', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        <div class="checkbox">
    <label>{!! Form::radio('oferta', '1', true) !!} Yes</label>
</div>
<div class="checkbox">
    <label>{!! Form::radio('oferta', '0') !!} No</label>
</div>
        {!! $errors->first('oferta', '<p class="help-block">:message</p>') !!}
    </div>
</div>


<div class="form-group {{ $errors->has('visible_slider') ? 'has-error' : ''}}">
    {!! Form::label('visible_slider', 'Visible Slider', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        <div class="checkbox">
    <label>{!! Form::radio('visible_slider', '1', true) !!} Yes</label>
</div>
<div class="checkbox">
    <label>{!! Form::radio('visible_slider', '0') !!} No</label>
</div>
        {!! $errors->first('visible_slider', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('promocion') ? 'has-error' : ''}}">
    {!! Form::label('promocion', 'Promoción', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        <div class="checkbox">
    <label>{!! Form::radio('promocion', '1', true) !!} Yes</label>
</div>
<div class="checkbox">
    <label>{!! Form::radio('promocion', '0') !!} No</label>
</div>
        {!! $errors->first('promocion', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('nuevo') ? 'has-error' : ''}}">
    {!! Form::label('nuevo', 'Nuevo', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        <div class="checkbox">
    <label>{!! Form::radio('nuevo', '1', true) !!} Yes</label>
</div>
<div class="checkbox">
    <label>{!! Form::radio('nuevo', '0') !!} No</label>
</div>
        {!! $errors->first('nuevo', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('tipeproduct_id') ? 'has-error' : ''}}">
    {!! Form::label('tipeproduct_id', 'Agrupar', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::select('tipeproduct_id', $tipos, null, ['class' => 'form-control']) !!}
        {!! $errors->first('tipeproduct_id', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group">
    <div class="col-md-offset-4 col-md-4">
        {!! Form::submit(isset($submitButtonText) ? $submitButtonText : 'Crear', ['class' => 'btn btn-primary']) !!}
    </div>
</div>





<script>
  var editor_config = {
    path_absolute : "/",
    selector: "textarea.my-editor",
    plugins: [
      "advlist autolink lists link image charmap print preview hr anchor pagebreak",
      "searchreplace wordcount visualblocks visualchars code fullscreen",
      "insertdatetime media nonbreaking save table contextmenu directionality",
      "emoticons template paste textcolor colorpicker textpattern"
    ],
    toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image media",
    relative_urls: false,
    file_browser_callback : function(field_name, url, type, win) {
      var x = window.innerWidth || document.documentElement.clientWidth || document.getElementsByTagName('body')[0].clientWidth;
      var y = window.innerHeight|| document.documentElement.clientHeight|| document.getElementsByTagName('body')[0].clientHeight;

      var cmsURL = editor_config.path_absolute + 'laravel-filemanager?field_name=' + field_name;
      if (type == 'image') {
        cmsURL = cmsURL + "&type=Images";
      } else {
        cmsURL = cmsURL + "&type=Files";
      }

      tinyMCE.activeEditor.windowManager.open({
        file : cmsURL,
        title : 'Filemanager',
        width : x * 0.8,
        height : y * 0.8,
        resizable : "yes",
        close_previous : "no"
      });
    }
  };

  tinymce.init(editor_config);
</script>