@extends('layouts.app')
@section('content')
            <div class="card-header">
                <h5>@lang('models/partners.plural')</h5>
                <h1 class="pull-right">

                </h1>
            </div>
            <div class="card-body">
            @include('flash::message')
            @include('partners.table')
            </div>
            <div class="card-footer">

            </div>
@endsection

