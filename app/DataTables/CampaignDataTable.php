<?php

namespace App\DataTables;

use App\Models\Campaign;
use Yajra\DataTables\Services\DataTable;

class CampaignDataTable extends DataTable
{

    public function dataTable($query)
    {
        return datatables()
            ->eloquent($query)
            ->addColumn('action', 'campaigns.action')
            ->rawColumns([
                'action'
            ]);

    }


    public function query(Campaign $model)
    {
        return $model->newQuery();
    }


    public function html()
    {
        return $this->builder()
                    ->setTableId('campaign-table')
                    ->columns($this->getColumns())
                    ->minifiedAjax()
                    ->orderBy(1)
                    ->parameters([
                        'dom' => 'Blfrtip',
                        'lengthMenu' => [[10, 25, 100, -1], [10, 25, 100, 'All record']],
                    ]);
    }


    protected function getColumns()
    {
        return [
            [
                'name' => 'id',
                'data' => 'id',
                'title' => 'id',
            ],
            [
                'name' => 'name',
                'data' => 'name',
                'title' => 'name',
            ],
            [
                'name' => 'from',
                'data' => 'from',
                'title' => 'from Date',
            ],
            [
                'name' => 'to',
                'data' => 'to',
                'title' => 'To Date',
            ],
            [
                'name' => 'action',
                'data' => 'action',
                'title' => 'action',
                'searchable' => false,
                'orderable' => false,
                'exportable' => false
            ],
        ];
    }


    protected function filename()
    {
        return 'Campaign_' . date('YmdHis');
    }
}
