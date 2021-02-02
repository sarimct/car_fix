<?php

namespace App\DataTables\Admin;

use App\Models\RequestForQuotation;
use App\Models\RequestForQuotationPending;
use Illuminate\Support\Facades\Auth;
use Yajra\DataTables\Services\DataTable;
use Yajra\DataTables\EloquentDataTable;

class PendingRequestsDataTable extends DataTable
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
        $dataTable->addColumn('reqid', function ($requestForQuotation) {
            return $requestForQuotation->rfqId;
        });
        $dataTable->addColumn('area', function ($requestForQuotation) {
            return $requestForQuotation->area->name;
        });
        $dataTable->addColumn('car', function ($requestForQuotation) {
            return ($requestForQuotation->car->carModel->title) ?? "Not Found";
        });
        $dataTable->addColumn('service', function ($requestForQuotation) {
            return $requestForQuotation->service->name;
        });
        $dataTable->addColumn('quotations', function ($requestForQuotation) {
            return $requestForQuotation->quotations()->count();
        });
        /*$dataTable->addColumn('duration', function ($requestForQuotation) {
            if ($requestForQuotation->with_in_time == 10) {
                return '<span class="label label-danger">Urgent</span>';
            }
            if ($requestForQuotation->with_in_time == 20) {
                return '<span class="label label-primary">This Week</span>';
            }
            return '<span class="label label-info">Two Week</span>';
        });*/
        $dataTable->addColumn('status', function ($requestForQuotation) {
            if ($requestForQuotation->status == 10) {
                return '<span class="label label-danger">Pending</span>';
            }
            if ($requestForQuotation->status == 20) {
                return '<span class="label label-info">In Progress</span>';
            }
            return '<span class="label label-success">Complete</span>';
        });
        $dataTable->addColumn('action', 'admin.request_for_quotations.datatables_actions');
        $dataTable->rawColumns(['car', 'area', 'service', 'duration', 'status', 'action']);

        return $dataTable;
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\Models\RequestForQuotationPending $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(RequestForQuotationPending $model)
    {
        $user = Auth::user();
        if ($user->hasRole('driver')) {
            return $model->whereHas('car', function ($driver_cars) use ($user) {
                return $driver_cars->newQuery()->where('driver_id', $user->id);
            });

        } elseif ($user->hasRole('mechanic')) {
            return $model = $model->where('area_id', $user->details->area_id)->whereIn('service_id', $user->services->pluck('id'));
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
        if (\Entrust::can('requestForQuotations.create') || \Entrust::hasRole('super-admin')) {
            $buttons = ['create'];
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
            'id'    => ['visible' => false],
            'reqid' => [
                'title' => 'Job ID'
            ],
            'area',
            'car',
            'service',
            'quotations',
//            'duration',
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
        return 'request_for_quotationsdatatable_' . time();
    }
}