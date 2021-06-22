<?php

namespace App\DataTables;

use App\Models\KnowYourCustomer;
use Yajra\DataTables\Services\DataTable;
use Yajra\DataTables\EloquentDataTable;
use Yajra\DataTables\Html\Column;

class KnowYourCustomerDataTable extends DataTable
{
    /**
     * Build DataTable class.
     *
     * @param mixed $query Results from query() method.
     * @return \Yajra\DataTables\DataTableAbstract
     */
    public function dataTable($query)
    {
        $dataTable = new EloquentDataTable($query);

        return $dataTable->addColumn('action', 'know_your_customers.datatables_actions');
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\Models\KnowYourCustomer $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(KnowYourCustomer $model)
    {
        return $model->newQuery();
    }

    /**
     * Optional method if you want to use html builder.
     *
     * @return \Yajra\DataTables\Html\Builder
     */
    public function html()
    {
        return $this->builder()
            ->columns($this->getColumns())
            ->minifiedAjax()
            ->addAction(['width' => '120px', 'printable' => false, 'title' => __('crud.action')])
            ->parameters([
                'dom'       => 'Bfrtip',
                'stateSave' => true,
                'order'     => [[0, 'desc']],
                'buttons'   => [
                    [
                       'extend' => 'export',
                       'className' => 'btn btn-default btn-sm no-corner',
                       'text' => '<i class="fa fa-download"></i> ' .__('auth.app.export').''
                    ],
                    [
                       'extend' => 'print',
                       'className' => 'btn btn-default btn-sm no-corner',
                       'text' => '<i class="fa fa-print"></i> ' .__('auth.app.print').''
                    ],
                    [
                       'extend' => 'reset',
                       'className' => 'btn btn-default btn-sm no-corner',
                       'text' => '<i class="fa fa-undo"></i> ' .__('auth.app.reset').''
                    ],
                    [
                       'extend' => 'reload',
                       'className' => 'btn btn-default btn-sm no-corner',
                       'text' => '<i class="fa fa-refresh"></i> ' .__('auth.app.reload').''
                    ],
                ],
                 'language' => [
                   'url' => url('//cdn.datatables.net/plug-ins/1.10.12/i18n/Turkish.json'),
                 ],
            ]);
    }

    /**
     * Get columns.
     *
     * @return array
     */
    protected function getColumns()
    {
        return [
            'id' => new Column(['title' => __('models/knowYourCustomers.fields.id'), 'data' => 'id','searchable' => false]),
            'name' => new Column(['title' => __('models/knowYourCustomers.fields.name'), 'data' => 'name','searchable' => false]),
            'surname' => new Column(['title' => __('models/knowYourCustomers.fields.surname'), 'data' => 'surname','searchable' => false]),
            'birthday' => new Column(['title' => __('models/knowYourCustomers.fields.birthday'), 'data' => 'birthday','searchable' => false]),
            'status' => new Column(['title' => __('models/knowYourCustomers.fields.status'), 'data' => 'status','searchable' => false]),
            'is_active' => new Column(['title' => __('models/knowYourCustomers.fields.is_active'), 'data' => 'is_active','searchable' => false])
        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return 'know_your_customers_datatable_' . time();
    }
}
