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


<!-- Definition Field -->
<div class="form-group">
    {!! Form::label('definition', __('models/tokens.fields.definition').':', ['class' => 'form-label']) !!}
    <p>{{ $token->definition }}</p>
</div>


<!-- Description Field -->
<div class="form-group">
    {!! Form::label('description', __('models/tokens.fields.description').':', ['class' => 'form-label']) !!}
    <p>{{ $token->description }}</p>
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


