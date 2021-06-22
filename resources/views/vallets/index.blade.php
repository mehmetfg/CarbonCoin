@extends('layouts.app')
@section('content')
            <div class="card-header">
                <h5>@lang('models/vallets.plural')</h5>

            </div>
            <div class="card-body">
            @include('flash::message')
            @include('vallets.table')
            </div>
            <div class="card-footer">

            </div>
@endsection

