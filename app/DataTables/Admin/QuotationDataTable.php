<?php

namespace App\DataTables\Admin;

use App\Models\Quotation;
use Illuminate\Support\Facades\Auth;
use Yajra\DataTables\Services\DataTable;
use Yajra\DataTables\EloquentDataTable;

class QuotationDataTable extends DataTable
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
        $dataTable->addColumn('requested_car',function($quotation) {
            return $quotation->quotation_request->car->carModel->title;
        });
        $dataTable->addColumn('status',function($myCar) {
            if($myCar->status == 10){
                return '<span class="label label-warning">Pending</span>';
            }
            if($myCar->status == 20){
                return '<span class="label label-success">Accepted</span>';
            }
            return '<span class="label label-danger">Rejected</span>';
        });
        $dataTable->addColumn('action', 'admin.quotations.datatables_actions');
        $dataTable->rawColumns(['requested_car', 'amount', 'message', 'status', 'action']);

        return $dataTable;
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\Models\Quotation $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(Quotation $model)
    {
        $user = Auth::user();

        if ($user->hasRole('driver')) {
            return $model->newQuery();
        }
        elseif ($user->hasRole('mechanic')){
            return $model->where('mechanic_id','=',Auth::id())->newQuery();
        }

        return $model->newQuery();

    }

    /**
     * Optional method if you want to use html builder.
     *
     * @return \Yajra\DataTables\Html\Builder
     */
    public function html()
    {
        $buttons = [];
        if (\Entrust::can('quotations.create') || \Entrust::hasRole('super-admin')) {
            $buttons = [];
        }
        $buttons = array_merge($buttons, [
            'export',
            'print',
            'reset',
            'reload',
        ]);
        return $this->builder()
            ->columns($this->getColumns())
            ->minifiedAjax()
            ->addAction(['width' => '80px'])
            ->parameters([
                'dom'     => 'Bfrtip',
                'order'   => [[0, 'desc']],
                'buttons' => $buttons,
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
            'id' => ['visible' => false],
            'mechanic_id' => ['visible' => false],
            'requested_car',
            'amount',
            'message',
            'status'
        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return 'quotationsdatatable_' . time();
    }
}