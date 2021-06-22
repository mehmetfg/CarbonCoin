@extends('layouts.app')
@section('content')
    <div class="card-header">
        <h5>
            @lang('models/knowYourCustomers.singular')
        </h5>
    </div>
    <div class="card-body">
        <div class="row g-2">
            <div class="col-md-12">
                @include('adminlte-templates::common.errors')
                {!! Form::open(['route' => 'knowYourCustomers.store']) !!}
                <div class="row">
                @include('know_your_customers.fields')
                </div>
                {!! Form::close() !!}

            </div>
        </div>
    </div>
@endsection
