@extends('layouts.app')
@section('content')
    <div class="card-header">
        <h5>
            @lang('models/traders.singular')
        </h5>
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col-md-12">
                @include('traders.show_fields')
            </div>
        </div>
    </div>
    <div class="card-footer">
        <a href="{{ route('traders.index') }}" class="btn btn-default">
            @lang('crud.back')
        </a>
    </div>
@endsection
