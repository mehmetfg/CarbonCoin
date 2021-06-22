<!-- Definition Field -->
<div class="form-group">
    {!! Form::label('definition', __('models/annoncements.fields.definition').':', ['class' => 'form-label']) !!}
    <p>{{ $annoncement->definition }}</p>
</div>


<!-- Message Field -->
<div class="form-group">
    {!! Form::label('message', __('models/annoncements.fields.message').':', ['class' => 'form-label']) !!}
    <p>{{ $annoncement->message }}</p>
</div>


<!-- Finish Date Field -->
<div class="form-group">
    {!! Form::label('finish_date', __('models/annoncements.fields.finish_date').':', ['class' => 'form-label']) !!}
    <p>{{ $annoncement->finish_date }}</p>
</div>


<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', __('models/annoncements.fields.created_at').':', ['class' => 'form-label']) !!}
    <p>{{ $annoncement->created_at }}</p>
</div>


<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', __('models/annoncements.fields.updated_at').':', ['class' => 'form-label']) !!}
    <p>{{ $annoncement->updated_at }}</p>
</div>


