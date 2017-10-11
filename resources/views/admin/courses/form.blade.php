<div class="form-group {{ $errors->has('title') ? 'has-error' : ''}}">
    {!! Form::label('title', 'Titulo curso', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('title', null, ['class' => 'form-control']) !!}
        {!! $errors->first('title', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('subtitle') ? 'has-error' : ''}}">
    {!! Form::label('subtitle', 'Sub Titulo', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('subtitle', null, ['class' => 'form-control']) !!}
        {!! $errors->first('subtitle', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('content') ? 'has-error' : ''}}">
    {!! Form::label('content', 'Introducción', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::textarea('content', null, ['class' => 'form-control my-editor']) !!}
        {!! $errors->first('content', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('description') ? 'has-error' : ''}}">
    {!! Form::label('description', 'Descripción', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::textarea('description', null, ['class' => 'form-control my-editor']) !!}
        <!--<textarea name="content" class="form-control my-editor">    </textarea>-->
        {!! $errors->first('description', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('duration') ? 'has-error' : ''}}">
    {!! Form::label('duration', 'Horas Duración', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('duration', null, ['class' => 'form-control','placeholder'=>'250 Horas']) !!}
        {!! $errors->first('duration', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('hourdesde') ? 'has-error' : ''}}">
    {!! Form::label('hourdesde', 'Desde', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('hourdesde', null, ['class' => 'form-control','placeholder'=>'13:00']) !!}
        {!! $errors->first('hourdesde', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('hourhasta') ? 'has-error' : ''}}">
    {!! Form::label('hourhasta', 'Hasta', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('hourhasta', null, ['class' => 'form-control','placeholder'=>'18:00']) !!}
        {!! $errors->first('hourhasta', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('precio') ? 'has-error' : ''}}">
    {!! Form::label('precio', 'Precio curso', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('precio', null, ['class' => 'form-control','placeholder'=>'150']) !!}
        {!! $errors->first('precio', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('fechainit') ? 'has-error' : ''}}">
    {!! Form::label('fechainit', 'Fecha de inicio', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('fechainit', null, ['class' => 'form-control','placeholder'=>'']) !!}
        {!! $errors->first('fechainit', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('dais') ? 'has-error' : ''}}">
    {!! Form::label('dais', 'Dias del curso', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('dais', null, ['class' => 'form-control','placeholder'=>'Lunes - Viernes']) !!}
        {!! $errors->first('dais', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('img') ? 'has-error' : ''}}">
    {!! Form::label('img', 'Imagen', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::file('img', null, ['class' => 'form-control']) !!}
        {!! $errors->first('img', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<!--<div class="form-group {{ $errors->has('file') ? 'has-error' : ''}}">
    {!! Form::label('file', 'Video', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::file('video', null, ['class' => 'form-control']) !!}
        {!! $errors->first('video', '<p class="help-block">:message</p>') !!}
    </div>
</div>-->
<div class="form-group {{ $errors->has('files') ? 'has-error' : ''}}">
    {!! Form::label('files', 'Archivos curso', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        <input type="file" name="files[]" multiple class="form-control" />
        {!! $errors->first('files', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('link') ? 'has-error' : ''}}">
    {!! Form::label('link', 'Link', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('link', null, ['class' => 'form-control']) !!}
        {!! $errors->first('link', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('visible') ? 'has-error' : ''}}">
    {!! Form::label('visible', 'Visible', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        <div class="checkbox">
    <label>{!! Form::radio('visible', '1', true) !!} Yes</label>
</div>
<div class="checkbox">
    <label>{!! Form::radio('visible', '0') !!} No</label>
</div>
        {!! $errors->first('visible', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('clasification_id') ? 'has-error' : ''}}">
    {!! Form::label('clasification_id', 'Clasificación', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::select('clasification_id', $clases, null, ['class' => 'form-control']) !!}
        {!! $errors->first('clasification_id', '<p class="help-block">:message</p>') !!}
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