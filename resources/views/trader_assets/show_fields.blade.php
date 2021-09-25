<!-- Exchange Id Field -->
<div class="form-group">
    {!! Form::label('exchange_id', __('models/traderAssets.fields.exchange_id').':', ['class' => 'form-label']) !!}
    <p>{{ $traderAsset->exchange_id }}</p>
</div>


<!-- Locked Balance Field -->
<div class="form-group">
    {!! Form::label('locked_balance', __('models/traderAssets.fields.locked_balance').':', ['class' => 'form-label']) !!}
    <p>{{ $traderAsset->locked_balance }}</p>
</div>


<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', __('models/traderAssets.fields.created_at').':', ['class' => 'form-label']) !!}
    <p>{{ $traderAsset->created_at }}</p>
</div>


<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', __('models/traderAssets.fields.updated_at').':', ['class' => 'form-label']) !!}
    <p>{{ $traderAsset->updated_at }}</p>
</div>


