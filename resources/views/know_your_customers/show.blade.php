@extends('layouts.app')
@section('content')
    <div class="card-header">
        <h5>
            @lang('models/knowYourCustomers.singular')
        </h5>
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col-md-12">
                @include('know_your_customers.show_fields')
            </div>
        </div>
    </div>
    <div class="card-footer">
        <a href="{{ route('knowYourCustomers.index') }}" class="btn btn-default">
            @lang('crud.back')
        </a>
    </div>
@endsection
