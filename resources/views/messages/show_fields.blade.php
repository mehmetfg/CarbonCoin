<!-- Title Field -->
<div class="form-group">
    {!! Form::label('title', __('models/messages.fields.title').':', ['class' => 'form-label']) !!}
    <p>{{ $message->title }}</p>
</div>


<!-- Message Field -->
<div class="form-group">
    {!! Form::label('message', __('models/messages.fields.message').':', ['class' => 'form-label']) !!}
    <p>{{ $message->message }}</p>
</div>


<!-- File Field -->
<div class="form-group">
    {!! Form::label('file', __('models/messages.fields.file').':', ['class' => 'form-label']) !!}
    <p>{{ $message->file }}</p>
</div>


<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', __('models/messages.fields.created_at').':', ['class' => 'form-label']) !!}
    <p>{{ $message->created_at }}</p>
</div>


<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', __('models/messages.fields.updated_at').':', ['class' => 'form-label']) !!}
    <p>{{ $message->updated_at }}</p>
</div>


