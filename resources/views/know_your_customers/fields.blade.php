<!-- Name Field -->
<div class="mb-3 m-form__group col-md-6">
    {!! Form::label('name', __('models/knowYourCustomers.fields.name').':', ['class' => 'form-label']) !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>


<!-- Surname Field -->
<div class="mb-3 m-form__group col-md-6">
    {!! Form::label('surname', __('models/knowYourCustomers.fields.surname').':', ['class' => 'form-label']) !!}
    {!! Form::text('surname', null, ['class' => 'form-control']) !!}
</div>


<!-- Birthday Field -->
<div class="mb-3 m-form__group col-md-6">
    {!! Form::label('birthday', __('models/knowYourCustomers.fields.birthday').':', ['class' => 'form-label']) !!}
    {!! Form::date('birthday', null, ['class' => 'datepicker-here form-control digits','id'=>'birthday']) !!}
</div>

@push('scripts')
    <script src="../assets/js/datepicker/date-time-picker/moment.min.js"></script>
    <script src="../assets/js/datepicker/date-time-picker/tempusdominus-bootstrap-4.min.js"></script>
    <script src="../assets/js/datepicker/date-time-picker/datetimepicker.custom.js"></script>
@endpush


<!-- Id Card Serial Field -->
<div class="mb-3 m-form__group col-md-6">
    {!! Form::label('id_card_serial', __('models/knowYourCustomers.fields.id_card_serial').':', ['class' => 'form-label']) !!}
    {!! Form::text('id_card_serial', null, ['class' => 'form-control']) !!}
</div>


<!-- Id Card Number Field -->
<div class="mb-3 m-form__group col-md-6">
    {!! Form::label('id_card_number', __('models/knowYourCustomers.fields.id_card_number').':', ['class' => 'form-label']) !!}
    {!! Form::text('id_card_number', null, ['class' => 'form-control']) !!}
</div>


<!-- Status Field -->
<div class="mb-3 m-form__group col-md-6">
    {!! Form::label('status', __('models/knowYourCustomers.fields.status').':', ['class' => 'form-label']) !!}
    {!! Form::select('status', ['0' => 'Tamamlandı', '1' => ' Red', '3' => ' Onay'], null, ['class' => 'form-select']) !!}
</div>


<!-- Is Active Field -->
<div class="form-check checkbox checkbox-solid-info col-md-6 col-sm-6">
        {!! Form::checkbox('is_active', '1', null, ['class' => 'form-check-input', 'id'=>'is_active' ]) !!} 1
        {!! Form::label('is_active', __('models/knowYourCustomers.fields.is_active').':', ['class' => 'form-check-label']) !!}
</div>

<!-- Submit Field -->
<div class="card-footer">
    {!! Form::submit(__('crud.save'), ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('knowYourCustomers.index') }}" class="btn btn-light">@lang('crud.cancel')</a>
</div>
