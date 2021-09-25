<!-- Type Field -->
<div class="form-group">
    {!! Form::label('type', __('models/trades.fields.type').':', ['class' => 'form-label']) !!}
    <p>{{ $trade->type }}</p>
</div>


<!-- Price Field -->
<div class="form-group">
    {!! Form::label('price', __('models/trades.fields.price').':', ['class' => 'form-label']) !!}
    <p>{{ $trade->price }}</p>
</div>


<!-- Amount Field -->
<div class="form-group">
    {!! Form::label('amount', __('models/trades.fields.amount').':', ['class' => 'form-label']) !!}
    <p>{{ $trade->amount }}</p>
</div>


<!-- Taker Side Field -->
<div class="form-group">
    {!! Form::label('taker_side', __('models/trades.fields.taker_side').':', ['class' => 'form-label']) !!}
    <p>{{ $trade->taker_side }}</p>
</div>


<!-- Maker Order Id Field -->
<div class="form-group">
    {!! Form::label('maker_order_id', __('models/trades.fields.maker_order_id').':', ['class' => 'form-label']) !!}
    <p>{{ $trade->maker_order_id }}</p>
</div>


<!-- Taker Order Id Field -->
<div class="form-group">
    {!! Form::label('taker_order_id', __('models/trades.fields.taker_order_id').':', ['class' => 'form-label']) !!}
    <p>{{ $trade->taker_order_id }}</p>
</div>


<!-- Maker Fee Field -->
<div class="form-group">
    {!! Form::label('maker_fee', __('models/trades.fields.maker_fee').':', ['class' => 'form-label']) !!}
    <p>{{ $trade->maker_fee }}</p>
</div>


<!-- Taker Fee Field -->
<div class="form-group">
    {!! Form::label('taker_fee', __('models/trades.fields.taker_fee').':', ['class' => 'form-label']) !!}
    <p>{{ $trade->taker_fee }}</p>
</div>


<!-- Side Field -->
<div class="form-group">
    {!! Form::label('side', __('models/trades.fields.side').':', ['class' => 'form-label']) !!}
    <p>{{ $trade->side }}</p>
</div>


<!-- Inserted At Field -->
<div class="form-group">
    {!! Form::label('inserted_at', __('models/trades.fields.inserted_at').':', ['class' => 'form-label']) !!}
    <p>{{ $trade->inserted_at }}</p>
</div>


<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', __('models/trades.fields.created_at').':', ['class' => 'form-label']) !!}
    <p>{{ $trade->created_at }}</p>
</div>


<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', __('models/trades.fields.updated_at').':', ['class' => 'form-label']) !!}
    <p>{{ $trade->updated_at }}</p>
</div>


