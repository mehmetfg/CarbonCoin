@extends('layouts.app')
@section('content')
    <div class="card-header">
        <h5>
            @lang('models/annoncements.singular')
        </h5>
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col-md-12">
                @include('annoncements.show_fields')
            </div>
        </div>
    </div>
    <div class="card-footer">
        <a href="{{ route('annoncements.index') }}" class="btn btn-default">
            @lang('crud.back')
        </a>
    </div>
@endsection
