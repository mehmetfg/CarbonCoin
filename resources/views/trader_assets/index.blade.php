@extends('layouts.app')

@push('outside-content')
@include('components.exchange-asset-dashboard')
@endpush

@section('content')



            <div class="card-body">
            @include('flash::message')
            @include('trader_assets.table')
            </div>
            <div class="card-footer">

            </div>
@endsection
@include("components.exchange-assets")
