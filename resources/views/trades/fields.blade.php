<!-- Asset Pair Name Field -->
<div class="mb-3 m-form__group col-md-6">
    {!! Form::label('asset_pair_name', __('models/trades.fields.asset_pair_name').':', ['class' => 'form-label']) !!}
    {!! Form::text('asset_pair_name', null, ['class' => 'form-control']) !!}
</div>


<!-- Price Field -->
<div class="mb-3 m-form__group col-md-6">
    {!! Form::label('price', __('models/trades.fields.price').':', ['class' => 'form-label']) !!}
    {!! Form::text('price', null, ['class' => 'form-control']) !!}
</div>


<!-- Amount Field -->
<div class="mb-3 m-form__group col-md-6">
    {!! Form::label('amount', __('models/trades.fields.amount').':', ['class' => 'form-label']) !!}
    {!! Form::text('amount', null, ['class' => 'form-control']) !!}
</div>


<!-- Taker Side Field -->
<div class="mb-3 m-form__group col-md-6">
    {!! Form::label('taker_side', __('models/trades.fields.taker_side').':', ['class' => 'form-label']) !!}
    {!! Form::text('taker_side', null, ['class' => 'form-control']) !!}
</div>


<!-- Maker Order Id Field -->
<div class="mb-3 m-form__group col-md-6">
    {!! Form::label('maker_order_id', __('models/trades.fields.maker_order_id').':', ['class' => 'form-label']) !!}
    {!! Form::text('maker_order_id', null, ['class' => 'form-control']) !!}
</div>


<!-- Taker Order Id Field -->
<div class="mb-3 m-form__group col-md-6">
    {!! Form::label('taker_order_id', __('models/trades.fields.taker_order_id').':', ['class' => 'form-label']) !!}
    {!! Form::text('taker_order_id', null, ['class' => 'form-control']) !!}
</div>


<!-- Maker Fee Field -->
<div class="mb-3 m-form__group col-md-6">
    {!! Form::label('maker_fee', __('models/trades.fields.maker_fee').':', ['class' => 'form-label']) !!}
    {!! Form::text('maker_fee', null, ['class' => 'form-control']) !!}
</div>


<!-- Taker Fee Field -->
<div class="mb-3 m-form__group col-md-6">
    {!! Form::label('taker_fee', __('models/trades.fields.taker_fee').':', ['class' => 'form-label']) !!}
    {!! Form::text('taker_fee', null, ['class' => 'form-control']) !!}
</div>


<!-- Side Field -->
<div class="mb-3 m-form__group col-md-6">
    {!! Form::label('side', __('models/trades.fields.side').':', ['class' => 'form-label']) !!}
    {!! Form::date('side', null, ['class' => 'datepicker-here form-control digits','id'=>'side']) !!}
</div>

@push('scripts')
    <script src="../assets/js/datepicker/date-time-picker/moment.min.js"></script>
    <script src="../assets/js/datepicker/date-time-picker/tempusdominus-bootstrap-4.min.js"></script>
    <script src="../assets/js/datepicker/date-time-picker/datetimepicker.custom.js"></script>
@endpush


<!-- Inserted At Field -->
<div class="mb-3 m-form__group col-md-6">
    {!! Form::label('inserted_at', __('models/trades.fields.inserted_at').':', ['class' => 'form-label']) !!}
    {!! Form::text('inserted_at', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="card-footer">
    {!! Form::submit(__('crud.save'), ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('trades.index') }}" class="btn btn-light">@lang('crud.cancel')</a>
</div>
