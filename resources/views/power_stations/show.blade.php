@extends('layouts.app')
@section('content')
    <div class="card-header">
        <h5>
            @lang('models/powerStations.singular')
        </h5>
        <a href="/react/transfer-list/{{$token->id}}/{{$powerStation->wallet_address}}" class="pull-right btn btn-primary">
            @lang('Transfer')
        </a>
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col-md-12">
                @include('power_stations.show_fields')
            </div>
        </div>
    </div>
    <div class="card-footer">
        <a href="{{ route('powerStations.index') }}" class="pull-right btn btn-default">
            @lang('crud.back')
        </a>
        @if(auth_user()->isAdmin())
        <a href="/react/transfer-list/{{$token->id}}/{{$powerStation->wallet_address}}" class=" btn btn-primary">
            @lang('Transfer')
        </a>
        @else
            <a href="/react/transfer-view/{{$token->id}}/{{$powerStation->wallet_address}}" class=" btn btn-primary">
                @lang('Transfer')
            </a>
            @endif

    </div>
@endsection
