<div class="form-group {{ $errors->has('title') ? 'has-error' : ''}}">
    {!! Form::label('title', 'Title', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('title', null, ['class' => 'form-control']) !!}
        {!! $errors->first('title', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('body') ? 'has-error' : ''}}">
    {!! Form::label('body', 'Body', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::textarea('body', null, ['class' => 'form-control']) !!}
        {!! $errors->first('body', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('slug') ? 'has-error' : ''}}">
    {!! Form::label('slug', 'Slug', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::textarea('slug', null, ['class' => 'form-control']) !!}
        {!! $errors->first('slug', '<p class="help-block">:message</p>') !!}
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
</div>
<div class="form-group {{ $errors->has('category_id') ? 'has-error' : ''}}">
    {!! Form::label('category_id', 'Category Id', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {{ Form::select('category_id', $category, null, ['class' => 'form-control']) }}
        {!! $errors->first('category_id', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('category_id') ? 'has-error' : ''}}">
    {!! Form::label('category_id', 'Tags', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        <select class="js-example-basic-multiple form-control" name="tags[]" multiple="multiple">
            @foreach($tags as $tag)
          <option value="{{ $tag->id }}">{{ $tag->name }}</option>
          @endforeach
        </select>
        {!! $errors->first('category_id', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group">
    <div class="col-md-offset-4 col-md-4">
        {!! Form::submit(isset($submitButtonText) ? $submitButtonText : 'Create', ['class' => 'btn btn-primary']) !!}
    </div>
</div>

<script type="text/javascript">
    $(document).ready(function() {
        $('.js-example-basic-multiple').select2();
    });
</script>