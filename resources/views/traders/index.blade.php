@extends('layouts.app')
@section('content')
            <div class="card-header">
                <h5>@lang('models/traders.plural')</h5>
                <h1 class="pull-right">
                    <a class="btn btn-primary pull-right" style="margin-top: -10px;margin-bottom: 5px"
                       href="{{ route('traders.create') }}">@lang('crud.add_new')</a>
                </h1>
            </div>
            <div class="card-body">
            @include('flash::message')
            @include('traders.table')
            </div>
            <div class="card-footer">
                
            </div>
@endsection

