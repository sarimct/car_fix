<?php

namespace App\DataTables\Admin;

use App\Models\JobHistory;
use App\Models\RequestForQuotation;
use Illuminate\Support\Facades\Auth;
use Yajra\DataTables\Services\DataTable;
use Yajra\DataTables\EloquentDataTable;

class JobHistoryDataTable extends DataTable
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
            //return $requestForQuotation->car_withTrashed['carModel'][''];
            return $requestForQuotation->car->carModel->maker->title . '/' . $requestForQuotation->car->carModel->title . ' - ' . $requestForQuotation->car->year . ' ( ' . $requestForQuotation->car->registration_no . ' )';
        });
        $dataTable->addColumn('service', function ($requestForQuotation) {
            return $requestForQuotation->service->name;
        });
//        if (Auth::user()->hasRole('driver')) {
        $dataTable->addColumn('amount', function ($requestForQuotation) {
            return number_format($requestForQuotation->quotations()->where('status', 20)->pluck('amount')->first(), 2);
        });
//        }

        /*$dataTable->addColumn('duration', function ($requestForQuotation) {
            if ($requestForQuotation->with_in_time == 10) {
                return '<span class="label label-danger">Urgent</span>';
            }
            if ($requestForQuotation->with_in_time == 20) {
                return '<span class="label label-primary">This Week</span>';
            }
            return '<span class="label label-info">Two Week</span>';
        });
        $dataTable->addColumn('status', function ($requestForQuotation) {
            if (($requestForQuotation->status == 10 && $requestForQuotation->quotations()->where('mechanic_id', Auth::id())->count() == 0) && Auth::user()->hasRole('mechanic')) {
                return '<span class="label label-primary">New Job</span>';
            } elseif (($requestForQuotation->status == 10 && $requestForQuotation->quotations()->count() == 0) && Auth::user()->hasRole('driver')) {
                return '<span class="label label-primary">New Job</span>';
            }
            return '<span class="label ' . ($requestForQuotation->status == 10 ? 'label-primary">' : ($requestForQuotation->status == 20 ? 'label-warning">' : 'label-success">')) . $requestForQuotation->status_text . '</span>';
            if ($requestForQuotation->status == 10) {
                return '<span class="label label-danger">Pending</span>';
            }
            if ($requestForQuotation->status == 20) {
                return '<span class="label label-info">In Progress</span>';
            }
            return '<span class="label label-success">Complete</span>';
        });*/
        $dataTable->addColumn('action', 'admin.request_for_quotations.datatables_actions');
        $dataTable->rawColumns(['car', 'area', 'service', 'duration', 'action']);

        return $dataTable;
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\Models\JobHistory $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(RequestForQuotation $model)
    {
        $user = Auth::user();
        if ($user->hasRole('driver')) {
            $model = $model->whereHas('car', function ($driver_cars) use ($user) {
                return $driver_cars->where('driver_id', $user->id)->withTrashed();
            })->where('status', 30);
//            $trashedAndNotTrashed = Model::withTrashed()->get();
        } elseif ($user->hasRole('mechanic')) {
            $model = $model->whereHas('quotations', function ($quotations) use ($user) {
                return $quotations->where('mechanic_id', $user->id);
            })->where('status', 30)->orderBy('created_at', 'desc');
        }
//        dd($model->newQuery()->toSql());
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
        if (\Entrust::can('job_histories.create') || \Entrust::hasRole('super-admin')) {
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
            'amount',
//            'duration',
//            'status'
        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return 'job_historiesdatatable_' . time();
    }
}