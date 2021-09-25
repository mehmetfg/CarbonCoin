<!-- Exchange Id Field -->
<div class="mb-3 m-form__group col-md-6">
    {!! Form::label('exchange_id', __('models/traderAssets.fields.exchange_id').':', ['class' => 'form-label']) !!}
    {!! Form::select('exchange_id', $exchangeItems, null, ['class' => 'form-select']) !!}
</div>


<!-- Asset Symbol Field -->
<div class="mb-3 m-form__group col-md-6">
    {!! Form::label('asset_symbol', __('models/traderAssets.fields.asset_symbol').':', ['class' => 'form-label']) !!}
    {!! Form::text('asset_symbol', null, ['class' => 'form-control']) !!}
</div>


<!-- Balance Field -->
<div class="mb-3 m-form__group col-md-6">
    {!! Form::label('balance', __('models/traderAssets.fields.balance').':', ['class' => 'form-label']) !!}
    {!! Form::text('balance', null, ['class' => 'form-control']) !!}
</div>


<!-- Locked Balance Field -->
<div class="mb-3 m-form__group col-md-6">
    {!! Form::label('locked_balance', __('models/traderAssets.fields.locked_balance').':', ['class' => 'form-label']) !!}
    {!! Form::text('locked_balance', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="card-footer">
    {!! Form::submit(__('crud.save'), ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('traderAssets.index') }}" class="btn btn-light">@lang('crud.cancel')</a>
</div>
