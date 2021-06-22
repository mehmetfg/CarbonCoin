@extends('layouts.app')
@section('content')
    <div class="card-header">
        <h5>
            @lang('models/vallets.singular')
        </h5>
    </div>
    <div class="card-body">
        <div class="row g-2">
            <div class="col-md-12">
                @include('adminlte-templates::common.errors')
                {!! Form::model($vallet, ['route' => ['vallets.update', $vallet->id], 'method' => 'patch']) !!}
                <div class="row">
                    @include('vallets.fields')
                </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection
