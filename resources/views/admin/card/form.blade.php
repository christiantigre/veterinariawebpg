<div class="form-group {{ $errors->has('title') ? 'has-error' : ''}}">
    {!! Form::label('title', 'Title', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('title', null, ['class' => 'form-control']) !!}
        {!! $errors->first('title', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('paragraph') ? 'has-error' : ''}}">
    {!! Form::label('paragraph', 'Paragraph', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::textarea('paragraph', null, ['class' => 'form-control']) !!}
        {!! $errors->first('paragraph', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('subtitle') ? 'has-error' : ''}}">
    {!! Form::label('subtitle', 'Subtitle', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::textarea('subtitle', null, ['class' => 'form-control']) !!}
        {!! $errors->first('subtitle', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('subtitle2') ? 'has-error' : ''}}">
    {!! Form::label('subtitle2', 'Subtitle2', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::textarea('subtitle2', null, ['class' => 'form-control']) !!}
        {!! $errors->first('subtitle2', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('subtitle3') ? 'has-error' : ''}}">
    {!! Form::label('subtitle3', 'Subtitle3', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::textarea('subtitle3', null, ['class' => 'form-control']) !!}
        {!! $errors->first('subtitle3', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('linkcard') ? 'has-error' : ''}}">
    {!! Form::label('linkcard', 'Linkcard', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::textarea('linkcard', null, ['class' => 'form-control']) !!}
        {!! $errors->first('linkcard', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('img') ? 'has-error' : ''}}">
    {!! Form::label('img', 'Img', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::textarea('img', null, ['class' => 'form-control']) !!}
        {!! $errors->first('img', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group">
    <div class="col-md-offset-4 col-md-4">
        {!! Form::submit(isset($submitButtonText) ? $submitButtonText : 'Create', ['class' => 'btn btn-primary']) !!}
    </div>
</div>
