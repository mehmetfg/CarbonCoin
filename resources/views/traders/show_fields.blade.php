<!-- Exchange Id Field -->
<div class="form-group">
    {!! Form::label('exchange_id', __('models/traders.fields.exchange_id').':', ['class' => 'form-label']) !!}
    <p>{{ $trader->exchange_id }}</p>
</div>


<!-- Public Key Field -->
<div class="form-group">
    {!! Form::label('public_key', __('models/traders.fields.public_key').':', ['class' => 'form-label']) !!}
    <p>{{ $trader->public_key }}</p>
</div>


<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', __('models/traders.fields.created_at').':', ['class' => 'form-label']) !!}
    <p>{{ $trader->created_at }}</p>
</div>


<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', __('models/traders.fields.updated_at').':', ['class' => 'form-label']) !!}
    <p>{{ $trader->updated_at }}</p>
</div>


