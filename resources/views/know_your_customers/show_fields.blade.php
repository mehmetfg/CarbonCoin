<!-- Name Field -->
<div class="form-group">
    {!! Form::label('name', __('models/knowYourCustomers.fields.name').':', ['class' => 'form-label']) !!}
    <p>{{ $knowYourCustomer->name }}</p>
</div>


<!-- Surname Field -->
<div class="form-group">
    {!! Form::label('surname', __('models/knowYourCustomers.fields.surname').':', ['class' => 'form-label']) !!}
    <p>{{ $knowYourCustomer->surname }}</p>
</div>


<!-- Birthday Field -->
<div class="form-group">
    {!! Form::label('birthday', __('models/knowYourCustomers.fields.birthday').':', ['class' => 'form-label']) !!}
    <p>{{ $knowYourCustomer->birthday }}</p>
</div>


<!-- Status Field -->
<div class="form-group">
    {!! Form::label('status', __('models/knowYourCustomers.fields.status').':', ['class' => 'form-label']) !!}
    <p>{{ $knowYourCustomer->status }}</p>
</div>


<!-- Is Active Field -->
<div class="form-group">
    {!! Form::label('is_active', __('models/knowYourCustomers.fields.is_active').':', ['class' => 'form-label']) !!}
    <p>{{ $knowYourCustomer->is_active }}</p>
</div>


