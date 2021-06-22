<!-- Name Field -->
<div class="form-group">
    {!! Form::label('name', __('models/dealers.fields.name').':', ['class' => 'form-label']) !!}
    <p>{{ $dealer->name }}</p>
</div>


<!-- Email Field -->
<div class="form-group">
    {!! Form::label('email', __('models/dealers.fields.email').':', ['class' => 'form-label']) !!}
    <p>{{ $dealer->email }}</p>
</div>


<!-- Phone Field -->
<div class="form-group">
    {!! Form::label('phone', __('models/dealers.fields.phone').':', ['class' => 'form-label']) !!}
    <p>{{ $dealer->phone }}</p>
</div>


<!-- Address Field -->
<div class="form-group">
    {!! Form::label('address', __('models/dealers.fields.address').':', ['class' => 'form-label']) !!}
    <p>{{ $dealer->address }}</p>
</div>


<!-- Tax Number Field -->
<div class="form-group">
    {!! Form::label('tax_number', __('models/dealers.fields.tax_number').':', ['class' => 'form-label']) !!}
    <p>{{ $dealer->tax_number }}</p>
</div>


<!-- Authorized Field -->
<div class="form-group">
    {!! Form::label('authorized', __('models/dealers.fields.authorized').':', ['class' => 'form-label']) !!}
    <p>{{ $dealer->authorized }}</p>
</div>


<!-- Web Field -->
<div class="form-group">
    {!! Form::label('web', __('models/dealers.fields.web').':', ['class' => 'form-label']) !!}
    <p>{{ $dealer->web }}</p>
</div>


<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', __('models/dealers.fields.created_at').':', ['class' => 'form-label']) !!}
    <p>{{ $dealer->created_at }}</p>
</div>


<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', __('models/dealers.fields.updated_at').':', ['class' => 'form-label']) !!}
    <p>{{ $dealer->updated_at }}</p>
</div>


