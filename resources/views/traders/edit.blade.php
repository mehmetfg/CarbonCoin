@extends('layouts.app')
@section('content')
    <div class="card-header">
        <h5>
            @lang('models/traders.singular')
        </h5>
    </div>
    <div class="card-body">
        <div class="row g-2">
            <div class="col-md-12">
                @include('adminlte-templates::common.errors')
                {!! Form::model($trader, ['route' => ['traders.update', $trader->id], 'method' => 'patch']) !!}
                <div class="row">
                    @include('traders.fields')
                </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection
