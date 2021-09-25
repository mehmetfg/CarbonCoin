<!-- Exchange Id Field -->
<div class="mb-3 m-form__group col-md-6">
    {!! Form::label('exchange_id', __('models/traders.fields.exchange_id').':', ['class' => 'form-label']) !!}
    {!! Form::select('exchange_id', $exchangeItems, null, ['class' => 'form-select']) !!}
</div>


<!-- Name Field -->
<div class="mb-3 m-form__group col-md-6">
    {!! Form::label('name', __('models/traders.fields.name').':', ['class' => 'form-label']) !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>


<!-- Secret Key Field -->
<div class="mb-3 m-form__group col-md-6">
    {!! Form::label('secret_key', __('models/traders.fields.secret_key').':', ['class' => 'form-label']) !!}
    {!! Form::text('secret_key', null, ['class' => 'form-control']) !!}
</div>


<!-- Public Key Field -->
<div class="mb-3 m-form__group col-md-6">
    {!! Form::label('public_key', __('models/traders.fields.public_key').':', ['class' => 'form-label']) !!}
    {!! Form::text('public_key', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="card-footer">
    {!! Form::submit(__('crud.save'), ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('traders.index') }}" class="btn btn-light">@lang('crud.cancel')</a>
</div>
