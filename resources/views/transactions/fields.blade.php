<!-- Definition Field -->
<div class="mb-3 m-form__group col-md-6">
    {!! Form::label('definition', __('models/transactions.fields.definition').':', ['class' => 'form-label']) !!}
    {!! Form::text('definition', null, ['class' => 'form-control']) !!}
</div>


<!-- Description Field -->
<div class="mb-3 m-form__group">
    {!! Form::label('description', __('models/transactions.fields.description').':', ['class' => 'form-label']) !!}
    {!! Form::textarea('description', null, ['class' => 'form-control']) !!}
</div>


<!-- Address Field -->
<div class="mb-3 m-form__group col-md-6">
    {!! Form::label('address', __('models/transactions.fields.address').':', ['class' => 'form-label']) !!}
    {!! Form::text('address', null, ['class' => 'form-control']) !!}
</div>


<!-- Quentity Field -->
<div class="mb-3 m-form__group col-md-6">
    {!! Form::label('quentity', __('models/transactions.fields.quentity').':', ['class' => 'form-label']) !!}
    {!! Form::text('quentity', null, ['class' => 'form-control']) !!}
</div>


<!-- Date Field -->
<div class="mb-3 m-form__group col-md-6">
    {!! Form::label('date', __('models/transactions.fields.date').':', ['class' => 'form-label']) !!}
    {!! Form::date('date', null, ['class' => 'datepicker-here form-control digits','id'=>'date']) !!}
</div>

@push('scripts')
    <script src="../assets/js/datepicker/date-time-picker/moment.min.js"></script>
    <script src="../assets/js/datepicker/date-time-picker/tempusdominus-bootstrap-4.min.js"></script>
    <script src="../assets/js/datepicker/date-time-picker/datetimepicker.custom.js"></script>
@endpush

<!-- Submit Field -->
<div class="card-footer">
    {!! Form::submit(__('crud.save'), ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('transactions.index') }}" class="btn btn-light">@lang('crud.cancel')</a>
</div>
