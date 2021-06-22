<!-- Title Field -->
<div class="mb-3 m-form__group col-md-6">
    {!! Form::label('title', __('models/messages.fields.title').':', ['class' => 'form-label']) !!}
    {!! Form::text('title', null, ['class' => 'form-control']) !!}
</div>


<!-- Message Field -->
<div class="mb-3 m-form__group">
    {!! Form::label('message', __('models/messages.fields.message').':', ['class' => 'form-label']) !!}
    {!! Form::textarea('message', null, ['class' => 'form-control']) !!}
</div>


<!-- File Field -->
<div class="mb-3 row">
        {!! Form::label('file', __('models/messages.fields.file').':', ['class' => 'col-sm-3 col-form-label']) !!}
        <div class="col-sm-9">
            {!! Form::file('file', ['class' => 'form-control']) !!}
        </div>
</div>



<!-- Submit Field -->
<div class="card-footer">
    {!! Form::submit(__('crud.save'), ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('messages.index') }}" class="btn btn-light">@lang('crud.cancel')</a>
</div>
