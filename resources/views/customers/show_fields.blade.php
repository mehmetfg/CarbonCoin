<!-- Name Field -->
<div class="form-group">
    {!! Form::label('name', __('models/customers.fields.name').':', ['class' => 'form-label']) !!}
    <p>{{ $customer->name }}</p>
</div>


<!-- Email Field -->
<div class="form-group">
    {!! Form::label('email', __('models/customers.fields.email').':', ['class' => 'form-label']) !!}
    <p>{{ $customer->email }}</p>
</div>


<!-- Phone Field -->
<div class="form-group">
    {!! Form::label('phone', __('models/customers.fields.phone').':', ['class' => 'form-label']) !!}
    <p>{{ $customer->phone }}</p>
</div>


<!-- Address Field -->
<div class="form-group">
    {!! Form::label('address', __('models/customers.fields.address').':', ['class' => 'form-label']) !!}
    <p>{{ $customer->address }}</p>
</div>


<!-- Tax Number Field -->
<div class="form-group">
    {!! Form::label('tax_number', __('models/customers.fields.tax_number').':', ['class' => 'form-label']) !!}
    <p>{{ $customer->tax_number }}</p>
</div>


<!-- Authorized Field -->
<div class="form-group">
    {!! Form::label('authorized', __('models/customers.fields.authorized').':', ['class' => 'form-label']) !!}
    <p>{{ $customer->authorized }}</p>
</div>


<!-- Web Field -->
<div class="form-group">
    {!! Form::label('web', __('models/customers.fields.web').':', ['class' => 'form-label']) !!}
    <p>{{ $customer->web }}</p>
</div>


<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', __('models/customers.fields.created_at').':', ['class' => 'form-label']) !!}
    <p>{{ $customer->created_at }}</p>
</div>


<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', __('models/customers.fields.updated_at').':', ['class' => 'form-label']) !!}
    <p>{{ $customer->updated_at }}</p>
</div>


