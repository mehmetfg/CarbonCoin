@extends('layouts.app')
@section('content')
            <div class="card-header">
                <h5>@lang('models/knowYourCustomers.plural')</h5>
                <h1 class="pull-right">
                    @if(auth_user()->isAdmin())
                    <a class="btn btn-primary pull-right" style="margin-top: -10px;margin-bottom: 5px"
                       href="{{ route('knowYourCustomers.create') }}">@lang('crud.add_new')</a>
                        @endif
                </h1>
            </div>
            <div class="card-body">
            @include('flash::message')
            @include('know_your_customers.table')
            </div>
            <div class="card-footer">

            </div>
@endsection

