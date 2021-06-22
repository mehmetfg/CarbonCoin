@extends('layouts.app')
@section('content')
    <div class="card-header">
        <h5>
            @lang('models/powerStations.singular')
        </h5>
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col-md-12">
                @include('power_stations.show_fields')
            </div>
        </div>
    </div>
    <div class="card-footer">
        <a href="{{ route('powerStations.index') }}" class="btn btn-default">
            @lang('crud.back')
        </a>
    </div>
@endsection
