<!-- Definition Field -->
<div class="mb-3 m-form__group col-md-6">
    {!! Form::label('definition', __('models/annoncements.fields.definition').':', ['class' => 'form-label']) !!}
    {!! Form::text('definition', null, ['class' => 'form-control']) !!}
</div>


<!-- Message Field -->
<div class="mb-3 m-form__group">
    {!! Form::label('message', __('models/annoncements.fields.message').':', ['class' => 'form-label']) !!}
    {!! Form::textarea('message', null, ['class' => 'form-control']) !!}
</div>


<!-- Finish Date Field -->
<div class="mb-3 m-form__group col-md-6">
    {!! Form::label('finish_date', __('models/annoncements.fields.finish_date').':', ['class' => 'form-label']) !!}
    {!! Form::date('finish_date', null, ['class' => 'datepicker-here form-control digits','id'=>'finish_date']) !!}
</div>

@push('scripts')
    <script src="../assets/js/datepicker/date-time-picker/moment.min.js"></script>
    <script src="../assets/js/datepicker/date-time-picker/tempusdominus-bootstrap-4.min.js"></script>
    <script src="../assets/js/datepicker/date-time-picker/datetimepicker.custom.js"></script>
@endpush

<!-- Submit Field -->
<div class="card-footer">
    {!! Form::submit(__('crud.save'), ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('annoncements.index') }}" class="btn btn-light">@lang('crud.cancel')</a>
</div>
