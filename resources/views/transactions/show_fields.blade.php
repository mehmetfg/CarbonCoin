<!-- Description Field -->
<div class="form-group">
    {!! Form::label('description', __('models/transactions.fields.description').':', ['class' => 'form-label']) !!}
    <p>{{ $transaction->description }}</p>
</div>


<!-- Address Field -->
<div class="form-group">
    {!! Form::label('address', __('models/transactions.fields.address').':', ['class' => 'form-label']) !!}
    <p>{{ $transaction->address }}</p>
</div>


<!-- Quentity Field -->
<div class="form-group">
    {!! Form::label('quentity', __('models/transactions.fields.quentity').':', ['class' => 'form-label']) !!}
    <p>{{ $transaction->quentity }}</p>
</div>


<!-- Date Field -->
<div class="form-group">
    {!! Form::label('date', __('models/transactions.fields.date').':', ['class' => 'form-label']) !!}
    <p>{{ $transaction->date }}</p>
</div>


<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', __('models/transactions.fields.created_at').':', ['class' => 'form-label']) !!}
    <p>{{ $transaction->created_at }}</p>
</div>


<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', __('models/transactions.fields.updated_at').':', ['class' => 'form-label']) !!}
    <p>{{ $transaction->updated_at }}</p>
</div>


