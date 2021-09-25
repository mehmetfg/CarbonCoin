<?php

namespace App\DataTables;

use App\Models\PowerStation;
use App\Models\Token;
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

    function docControl($value){
        if($value!=null) {
            return '<i class="fa fa-check"></i>';
        }
        else{
            return "<i class='fa fa-ban'></i>";
        }

    }
    public function dataTable($query)
    {
        $link="";

        $dataTable = new EloquentDataTable($query);
        return $dataTable
            ->addColumn('action', 'power_stations.datatables_actions')
            ->addColumn('test', function ($item) {
                if(auth_user()->isPartner()){
                    $link="transfer-view";
                }else{
                    $link="transfer-list";
                }
                $vallet=Token::select("id")->where("dealer_id", get_user_dealer_id())->first();
                return    "<a href='/react/$link/$vallet->id/$item->wallet_address' class='btn btn-primary'>
                Transfer
            </a>";
            })
            ->editColumn('paid_date', function ($request) {
            return $request->paid_date->toDateString();
            })->editColumn('status', function ($request) {
            if($request->status=="1") {
                return 'Onayladı';
            }elseif($request->status=="2"){
                return 'Bekelemede';
            }else{
                return 'Reddedildi';
            }
        })->editColumn('doc1', function ($request) {
           return $this->docControl($request->doc1);
        })->editColumn('doc2', function ($request) {
           return $this->docControl($request->doc2);
        })->editColumn('doc3', function ($request) {
            return $this->docControl($request->doc3);
        })->editColumn('doc4', function ($request) {
           return $this->docControl($request->doc4);
        })
            ->rawColumns(['doc1', 'doc2', 'doc3', 'doc4', 'action', 'test']);




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
            //'is_active' => new Column(['title' => __('models/powerStations.fields.is_active'), 'data' => 'is_active','searchable' => false]),
            'doc1' => new Column(['title' => __('models/powerStations.fields.doc1'), 'data' => 'doc1','searchable' => false]),
            'doc2' => new Column(['title' => __('models/powerStations.fields.doc2'), 'data' => 'doc2','searchable' => false]),
            'doc3' => new Column(['title' => __('models/powerStations.fields.doc3'), 'data' => 'doc3','searchable' => false]),
            'doc4' => new Column(['title' => __('models/powerStations.fields.doc4'), 'data' => 'doc4','searchable' => false]),
             'test' => new Column(['title' => 'Test', 'data' => 'test','searchable' => false])
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
