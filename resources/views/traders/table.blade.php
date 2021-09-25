@push('css')
    @include('layouts.datatables_css')
@endpush
<div class="dt-ext table-responsive">
{!! $dataTable->table(['class' => 'display dt-responsive']) !!}
</div>
@push('js')
    @include('layouts.datatables_js')
    {!! $dataTable->scripts() !!}
@endpush
