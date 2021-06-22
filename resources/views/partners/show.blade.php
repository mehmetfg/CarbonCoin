@extends('layouts.app')
@section('content')
    <div class="card-header">
        <h5>
            @lang('models/partners.singular')
        </h5>
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col-md-12">
                @include('partners.show_fields')
            </div>
        </div>
    </div>
    <div class="card-footer">
        <a href="{{ route('partners.index') }}" class="btn btn-default">
            @lang('crud.back')
        </a>
    </div>
@endsection
