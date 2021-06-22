<!-- Name Field -->
<div class="form-group">
    {!! Form::label('name', __('models/users.fields.name').':', ['class' => 'form-label']) !!}
    <p>{{ $user->name }}</p>
</div>


<!-- Email Field -->
<div class="form-group">
    {!! Form::label('email', __('models/users.fields.email').':', ['class' => 'form-label']) !!}
    <p>{{ $user->email }}</p>
</div>


<!-- Phone Field -->
<div class="form-group">
    {!! Form::label('phone', __('models/users.fields.phone').':', ['class' => 'form-label']) !!}
    <p>{{ $user->phone }}</p>
</div>


<!-- Address Field -->
<div class="form-group">
    {!! Form::label('address', __('models/users.fields.address').':', ['class' => 'form-label']) !!}
    <p>{{ $user->address }}</p>
</div>


<!-- Tax Number Field -->
<div class="form-group">
    {!! Form::label('tax_number', __('models/users.fields.tax_number').':', ['class' => 'form-label']) !!}
    <p>{{ $user->tax_number }}</p>
</div>


<!-- Authorized Field -->
<div class="form-group">
    {!! Form::label('authorized', __('models/users.fields.authorized').':', ['class' => 'form-label']) !!}
    <p>{{ $user->authorized }}</p>
</div>


<!-- Web Field -->
<div class="form-group">
    {!! Form::label('web', __('models/users.fields.web').':', ['class' => 'form-label']) !!}
    <p>{{ $user->web }}</p>
</div>


<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', __('models/users.fields.created_at').':', ['class' => 'form-label']) !!}
    <p>{{ $user->created_at }}</p>
</div>


<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', __('models/users.fields.updated_at').':', ['class' => 'form-label']) !!}
    <p>{{ $user->updated_at }}</p>
</div>


