<!-- Name Field -->
<div class="form-group">
    {!! Form::label('name', __('models/tokens.fields.name').':', ['class' => 'form-label']) !!}
    <p>{{ $token->name }}</p>
</div>


<!-- Symbol Field -->
<div class="form-group">
    {!! Form::label('symbol', __('models/tokens.fields.symbol').':', ['class' => 'form-label']) !!}
    <p>{{ $token->symbol }}</p>
</div>


<!-- Total Supply Field -->
<div class="form-group">
    {!! Form::label('total_supply', __('models/tokens.fields.total_supply').':', ['class' => 'form-label']) !!}
    <p>{{ $token->total_supply }}</p>
</div>


<!-- Owner Address Field -->
<div class="form-group">
    {!! Form::label('owner_address', __('models/tokens.fields.owner_address').':', ['class' => 'form-label']) !!}
    <p>{{ $token->owner_address }}</p>
</div>


<!-- Contract Address Field -->
<div class="form-group">
    {!! Form::label('contract_address', __('models/tokens.fields.contract_address').':', ['class' => 'form-label']) !!}
    <p>{{ $token->contract_address }}</p>
</div>


<!-- Usd Price Field -->
<div class="form-group">
    {!! Form::label('usd_price', __('models/tokens.fields.usd_price').':', ['class' => 'form-label']) !!}
    <p>{{ $token->usd_price }}</p>
</div>


<!-- Description Field -->
<div class="form-group">
    {!! Form::label('description', __('models/tokens.fields.description').':', ['class' => 'form-label']) !!}
    <p>{{ $token->description }}</p>
</div>


<!-- Main Abi Field -->
<div class="form-group">
    {!! Form::label('main_abi', __('models/tokens.fields.main_abi').':', ['class' => 'form-label']) !!}
    <p>{{ $token->main_abi }}</p>
</div>


<!-- Sub Abi Field -->
<div class="form-group">
    {!! Form::label('sub_abi', __('models/tokens.fields.sub_abi').':', ['class' => 'form-label']) !!}
    <p>{{ $token->sub_abi }}</p>
</div>


<!-- Status Field -->
<div class="form-group">
    {!! Form::label('status', __('models/tokens.fields.status').':', ['class' => 'form-label']) !!}
    <p>{{ $token->status }}</p>
</div>


<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', __('models/tokens.fields.created_at').':', ['class' => 'form-label']) !!}
    <p>{{ $token->created_at }}</p>
</div>


<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', __('models/tokens.fields.updated_at').':', ['class' => 'form-label']) !!}
    <p>{{ $token->updated_at }}</p>
</div>


