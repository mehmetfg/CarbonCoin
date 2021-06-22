<!-- Name Field -->
<div class="form-group">
    {!! Form::label('name', __('models/partners.fields.name').':', ['class' => 'form-label']) !!}
    <p>{{ $partner->name }}</p>
</div>


<!-- Email Field -->
<div class="form-group">
    {!! Form::label('email', __('models/partners.fields.email').':', ['class' => 'form-label']) !!}
    <p>{{ $partner->email }}</p>
</div>


<!-- Phone Field -->
<div class="form-group">
    {!! Form::label('phone', __('models/partners.fields.phone').':', ['class' => 'form-label']) !!}
    <p>{{ $partner->phone }}</p>
</div>


<!-- Address Field -->
<div class="form-group">
    {!! Form::label('address', __('models/partners.fields.address').':', ['class' => 'form-label']) !!}
    <p>{{ $partner->address }}</p>
</div>


<!-- Tax Number Field -->
<div class="form-group">
    {!! Form::label('tax_number', __('models/partners.fields.tax_number').':', ['class' => 'form-label']) !!}
    <p>{{ $partner->tax_number }}</p>
</div>


<!-- Authorized Field -->
<div class="form-group">
    {!! Form::label('authorized', __('models/partners.fields.authorized').':', ['class' => 'form-label']) !!}
    <p>{{ $partner->authorized }}</p>
</div>


<!-- Web Field -->
<div class="form-group">
    {!! Form::label('web', __('models/partners.fields.web').':', ['class' => 'form-label']) !!}
    <p>{{ $partner->web }}</p>
</div>


<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', __('models/partners.fields.created_at').':', ['class' => 'form-label']) !!}
    <p>{{ $partner->created_at }}</p>
</div>


<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', __('models/partners.fields.updated_at').':', ['class' => 'form-label']) !!}
    <p>{{ $partner->updated_at }}</p>
</div>


