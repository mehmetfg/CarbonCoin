<?php

namespace App\DataTables;

use App\Models\PowerStation;
use Yajra\DataTables\Services\DataTable;
use Yajra\DataTables\EloquentDataTable;
use Yajra\DataTables\Html\Column;

class PowerStationDataTable extends DataTable
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

        return $dataTable->addColumn('action', 'power_stations.datatables_actions');
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\Models\PowerStation $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(PowerStation $model)
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
            'id' => new Column(['title' => __('models/powerStations.fields.id'), 'data' => 'id','searchable' => false]),
            'name' => new Column(['title' => __('models/powerStations.fields.name'), 'data' => 'name','searchable' => false]),
            'installed_power' => new Column(['title' => __('models/powerStations.fields.installed_power'), 'data' => 'installed_power','searchable' => false]),
            'authorized' => new Column(['title' => __('models/powerStations.fields.authorized'), 'data' => 'authorized','searchable' => false]),
            'paid_date' => new Column(['title' => __('models/powerStations.fields.paid_date'), 'data' => 'paid_date','searchable' => false]),
            'status' => new Column(['title' => __('models/powerStations.fields.status'), 'data' => 'status','searchable' => false]),
            'is_active' => new Column(['title' => __('models/powerStations.fields.is_active'), 'data' => 'is_active','searchable' => false]),
            'doc1' => new Column(['title' => __('models/powerStations.fields.doc1'), 'data' => 'doc1','searchable' => false]),
            'doc2' => new Column(['title' => __('models/powerStations.fields.doc2'), 'data' => 'doc2','searchable' => false]),
            'doc3' => new Column(['title' => __('models/powerStations.fields.doc3'), 'data' => 'doc3','searchable' => false]),
            'doc4' => new Column(['title' => __('models/powerStations.fields.doc4'), 'data' => 'doc4','searchable' => false])
        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return 'power_stations_datatable_' . time();
    }
}
