<!-- Name Field -->
<div class="mb-3 m-form__group col-md-6">
    {!! Form::label('name', __('models/dealers.fields.name').':', ['class' => 'form-label']) !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>


<!-- Email Field -->
<div class="mb-3 m-form__group col-md-6">
    {!! Form::label('email', __('models/dealers.fields.email').':', ['class' => 'form-label']) !!}
    {!! Form::text('email', null, ['class' => 'form-control']) !!}
</div>


<!-- Password Field -->
<div class="mb-3 m-form__group  col-md-6">
    {!! Form::label('password', __('models/dealers.fields.password').':', ['class' => 'form-label']) !!}
    {!! Form::password('password', ['class' => 'form-control']) !!}
</div>


<!-- Phone Field -->
<div class="mb-3 m-form__group col-md-6">
    {!! Form::label('phone', __('models/dealers.fields.phone').':', ['class' => 'form-label']) !!}
    {!! Form::text('phone', null, ['class' => 'form-control']) !!}
</div>


<!-- Address Field -->
<div class="mb-3 m-form__group">
    {!! Form::label('address', __('models/dealers.fields.address').':', ['class' => 'form-label']) !!}
    {!! Form::textarea('address', null, ['class' => 'form-control']) !!}
</div>


<!-- Tax Number Field -->
<div class="mb-3 m-form__group col-md-6">
    {!! Form::label('tax_number', __('models/dealers.fields.tax_number').':', ['class' => 'form-label']) !!}
    {!! Form::text('tax_number', null, ['class' => 'form-control']) !!}
</div>


<!-- Authorized Field -->
<div class="mb-3 m-form__group col-md-6">
    {!! Form::label('authorized', __('models/dealers.fields.authorized').':', ['class' => 'form-label']) !!}
    {!! Form::text('authorized', null, ['class' => 'form-control']) !!}
</div>


<!-- Web Field -->
<div class="mb-3 m-form__group col-md-6">
    {!! Form::label('web', __('models/dealers.fields.web').':', ['class' => 'form-label']) !!}
    {!! Form::text('web', null, ['class' => 'form-control']) !!}
</div>


<!-- Logo Field -->
<div class="mb-3 row">
        {!! Form::label('logo', __('models/dealers.fields.logo').':', ['class' => 'col-sm-3 col-form-label']) !!}
        <div class="col-sm-9">
            {!! Form::file('logo', ['class' => 'form-control']) !!}
        </div>
</div>




<!-- Width Field -->
<div class="mb-3 m-form__group col-md-6">
    {!! Form::label('width', __('models/dealers.fields.width').':', ['class' => 'form-label']) !!}
    {!! Form::text('width', null, ['class' => 'form-control']) !!}
</div>


<!-- Favicon Field -->
<div class="mb-3 m-form__group col-md-6">
    {!! Form::label('favicon', __('models/dealers.fields.favicon').':', ['class' => 'form-label']) !!}
    {!! Form::text('favicon', null, ['class' => 'form-control']) !!}
</div>


<!-- Language Field -->
<div class="mb-3 m-form__group col-md-6">
    {!! Form::label('language', __('models/dealers.fields.language').':', ['class' => 'form-label']) !!}
    {!! Form::select('language', ['tr' => 'Türkçe', 'en' => 'İngilizce'], null, ['class' => 'form-select']) !!}
</div>


<!-- Is Active Field -->
<div class="mb-3 m-form__group col-md-6">
    {!! Form::label('is_active', __('models/dealers.fields.is_active').':', ['class' => 'form-label']) !!}
    {!! Form::select('is_active', ['1' => 'Aktif', '0' => 'Pasif'], null, ['class' => 'form-select']) !!}
</div>

<!-- Submit Field -->
<div class="card-footer">
    {!! Form::submit(__('crud.save'), ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('dealers.index') }}" class="btn btn-light">@lang('crud.cancel')</a>
</div>
