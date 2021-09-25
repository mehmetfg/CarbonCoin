<?php

namespace App\DataTables;

use App\Models\Trade;
use Yajra\DataTables\Services\DataTable;
use Yajra\DataTables\EloquentDataTable;
use Yajra\DataTables\Html\Column;

class TradeDataTable extends DataTable
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

        return $dataTable->addColumn('action', 'trades.datatables_actions')
            ->editColumn('type', function ($request){

                return $request->side=='SELF_TRADING'?'Kendi İşlemimiz':'<strong>Dışardan İşlem</strong>';
            })->editColumn('inserted_at', function ($request){

                return date('d-m-Y H:m:s', strtotime($request->inserted_at) );
            })   ->orderColumn('id', 'id desc')

            ->rawColumns(['type']);;

    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\Models\Trade $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(Trade $model)
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
            ->minifiedAjax();


    }

    /**
     * Get columns.
     *
     * @return array
     */
    protected function getColumns()
    {
        return [
            'id' => new Column(['title' => __('models/trades.fields.id'), 'data' => 'id']),
            'type' => new Column(['title' => __('models/trades.fields.type'), 'data' => 'type']),
            'price' => new Column(['title' => __('models/trades.fields.price'), 'data' => 'price']),
            'amount' => new Column(['title' => __('models/trades.fields.amount'), 'data' => 'amount']),
            'taker_side' => new Column(['title' => __('models/trades.fields.taker_side'), 'data' => 'taker_side']),
            'maker_order_id' => new Column(['title' => __('models/trades.fields.maker_order_id'), 'data' => 'maker_order_id','searchable' => false]),
            'taker_order_id' => new Column(['title' => __('models/trades.fields.taker_order_id'), 'data' => 'taker_order_id','searchable' => false]),
            'maker_fee' => new Column(['title' => __('models/trades.fields.maker_fee'), 'data' => 'maker_fee','searchable' => false]),
            'taker_fee' => new Column(['title' => __('models/trades.fields.taker_fee'), 'data' => 'taker_fee','searchable' => false]),
            'inserted_at' => new Column(['title' => __('models/trades.fields.inserted_at'), 'data' => 'inserted_at','searchable' => false])
        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return 'trades_datatable_' . time();
    }
}
