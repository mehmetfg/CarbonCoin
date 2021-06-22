<!-- Name Field -->
<div class="mb-3 m-form__group col-md-6">
    {!! Form::label('name', __('models/tokens.fields.name').':', ['class' => 'form-label']) !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>


<!-- Symbol Field -->
<div class="mb-3 m-form__group col-md-6">
    {!! Form::label('symbol', __('models/tokens.fields.symbol').':', ['class' => 'form-label']) !!}
    {!! Form::text('symbol', null, ['class' => 'form-control']) !!}
</div>


<!-- Total Supply Field -->
<div class="mb-3 m-form__group col-md-6">
    {!! Form::label('total_supply', __('models/tokens.fields.total_supply').':', ['class' => 'form-label']) !!}
    {!! Form::number('total_supply', null, ['class' => 'form-control']) !!}
</div>


<!-- Decimal Field -->
<div class="mb-3 m-form__group col-md-6">
    {!! Form::label('decimal', __('models/tokens.fields.decimal').':', ['class' => 'form-label']) !!}
    {!! Form::number('decimal', null, ['class' => 'form-control']) !!}
</div>


<!-- Definition Field -->
<div class="mb-3 m-form__group col-md-6">
    {!! Form::label('definition', __('models/tokens.fields.definition').':', ['class' => 'form-label']) !!}
    {!! Form::text('definition', null, ['class' => 'form-control']) !!}
</div>


<!-- Description Field -->
<div class="mb-3 m-form__group">
    {!! Form::label('description', __('models/tokens.fields.description').':', ['class' => 'form-label']) !!}
    {!! Form::textarea('description', null, ['class' => 'form-control']) !!}
</div>


<!-- Owner Address Field -->
<div class="mb-3 m-form__group col-md-6">
    {!! Form::label('owner_address', __('models/tokens.fields.owner_address').':', ['class' => 'form-label']) !!}
    {!! Form::text('owner_address', null, ['class' => 'form-control']) !!}
</div>


<!-- Contract Address Field -->
<div class="mb-3 m-form__group col-md-6">
    {!! Form::label('contract_address', __('models/tokens.fields.contract_address').':', ['class' => 'form-label']) !!}
    {!! Form::text('contract_address', null, ['class' => 'form-control']) !!}
</div>


<!-- Status Field -->
<div class="mb-3 m-form__group col-md-6">
    {!! Form::label('status', __('models/tokens.fields.status').':', ['class' => 'form-label']) !!}
    {!! Form::select('status', ['Uretimte' => 'Uretimte', 'Dağıtıma Başladı' => ' Dağıtıma Başladı', 'Borsada' => ' Borsada'], null, ['class' => 'form-select']) !!}
</div>


<!-- Is Active Field -->
<div class="mb-3 m-form__group col-md-6">
    {!! Form::label('is_active', __('models/tokens.fields.is_active').':', ['class' => 'form-label']) !!}
    {!! Form::select('is_active', ['1' => 'Aktif', '0' => 'Pasif'], null, ['class' => 'form-select']) !!}
</div>

<!-- Submit Field -->
<div class="card-footer">
    {!! Form::submit(__('crud.save'), ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('tokens.index') }}" class="btn btn-light">@lang('crud.cancel')</a>
</div>
