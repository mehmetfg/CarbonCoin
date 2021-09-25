<?php

namespace App\DataTables;

use App\Models\TraderAsset;
use Yajra\DataTables\Services\DataTable;
use Yajra\DataTables\EloquentDataTable;
use Yajra\DataTables\Html\Column;

class TraderAssetDataTable extends DataTable
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

        return $dataTable
            ->editColumn('trader_id', function ($request){

                return $request->trader_id=='1'?'<strong>Hasan Karaozan</strong>':'<strong>Susa Karaozan</strong>';
            })->rawColumns(['trader_id']);
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\Models\TraderAsset $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(TraderAsset $model)
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
                   'url' => url('//cdn.datatables.net/plug-ins/1.10.12/i18n/English.json'),
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
            'id' => new Column(['title' => __('models/traderAssets.fields.id'), 'data' => 'id','searchable' => false]),
            'trader_id' => new Column(['title' => __('models/traderAssets.fields.trader_id'), 'data' => 'trader_id','searchable' => false]),
            'asset_symbol' => new Column(['title' => __('models/traderAssets.fields.asset_symbol'), 'data' => 'asset_symbol','searchable' => true]),
            'balance' => new Column(['title' => __('models/traderAssets.fields.balance'), 'data' => 'balance','searchable' => false]),
            'locked_balance' => new Column(['title' => __('models/traderAssets.fields.locked_balance'), 'data' => 'locked_balance','searchable' => false])
        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return 'trader_assets_datatable_' . time();
    }
}
