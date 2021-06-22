@extends('layouts.vue')
@section('content')
    <div id="root">

    </div>
@endsection
@push('js')

@endpush
@push('css')
    <style>

        .hidden { display:none; }

        .page-wrapper .page-body-wrapper .page-title {
            padding-top: 10px;
            padding-bottom: 10px;
        }
        .card .card-body {
            padding: 15px;
            background-color: rgba(0,0,0,0);
        }
    </style>
@endpush
