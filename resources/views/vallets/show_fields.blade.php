<!-- Name Field -->
<div class="form-group">
    {!! Form::label('name', __('models/vallets.fields.name').':', ['class' => 'form-label']) !!}
    <p>{{ $vallet->name }}</p>
</div>


<!-- Public Key Field -->
<div class="form-group">
    {!! Form::label('public_key', __('models/vallets.fields.public_key').':', ['class' => 'form-label']) !!}
    <p>{{ $vallet->public_key }}</p>
</div>


<!-- Balance Field -->
<div class="form-group">
    {!! Form::label('balance', __('models/vallets.fields.balance').':', ['class' => 'form-label']) !!}
    <p>{{ $vallet->balance }}</p>
</div>


<!-- Progress Payment Field -->
<div class="form-group">
    {!! Form::label('progress_payment', __('models/vallets.fields.progress_payment').':', ['class' => 'form-label']) !!}
    <p>{{ $vallet->progress_payment }}</p>
</div>


<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', __('models/vallets.fields.created_at').':', ['class' => 'form-label']) !!}
    <p>{{ $vallet->created_at }}</p>
</div>


<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', __('models/vallets.fields.updated_at').':', ['class' => 'form-label']) !!}
    <p>{{ $vallet->updated_at }}</p>
</div>


