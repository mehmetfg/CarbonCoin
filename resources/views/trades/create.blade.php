@extends('layouts.app')
@section('content')
    <div class="card-header">
        <h5>
            @lang('models/trades.singular')
        </h5>
    </div>
    <div class="card-body">
        <div class="row g-2">
            <div class="col-md-12">
                @include('adminlte-templates::common.errors')
                {!! Form::open(['route' => 'trades.store']) !!}
                <div class="row">
                @include('trades.fields')
                </div>
                {!! Form::close() !!}

            </div>
        </div>
    </div>
@endsection
