@extends('layouts.app')
@section('content')
    <div class="card-header">
        <h5>
            @lang('models/tokens.singular')
        </h5>
    </div>
    <div class="card-body">
        <div class="row g-2">
            <div class="col-md-12">
                @include('adminlte-templates::common.errors')
                {!! Form::model($token, ['route' => ['tokens.update', $token->id], 'method' => 'patch']) !!}
                <div class="row">
                    @include('tokens.fields')
                </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection
