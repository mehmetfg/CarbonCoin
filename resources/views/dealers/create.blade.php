@extends('layouts.app')
@section('content')
    <div class="card-header">
        <h5>
            @lang('models/dealers.singular')
        </h5>
    </div>
    <div class="card-body">
        <div class="row g-2">
            <div class="col-md-12">
                @include('adminlte-templates::common.errors')
                {!! Form::open(['route' => 'dealers.store']) !!}
                <div class="row">
                @include('dealers.fields')
                </div>
                {!! Form::close() !!}

            </div>
        </div>
    </div>
@endsection
