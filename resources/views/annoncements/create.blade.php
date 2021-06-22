@extends('layouts.app')
@section('content')
    <div class="card-header">
        <h5>
            @lang('models/annoncements.singular')
        </h5>
    </div>
    <div class="card-body">
        <div class="row g-2">
            <div class="col-md-12">
                @include('adminlte-templates::common.errors')
                {!! Form::open(['route' => 'annoncements.store']) !!}
                <div class="row">
                @include('annoncements.fields')
                </div>
                {!! Form::close() !!}

            </div>
        </div>
    </div>
@endsection