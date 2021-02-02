<?php

namespace App\DataTables\Admin;

use App\Models\RequestForQuotation;
use function foo\func;
use Illuminate\Support\Facades\Auth;
use Yajra\DataTables\Services\DataTable;
use Yajra\DataTables\EloquentDataTable;

class RequestForQuotationDataTable extends DataTable
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
        if (Auth::user()->hasRole('driver')) {
            $dataTable->addColumn('quotations', function ($requestForQuotation) {
                return $requestForQuotation->quotations()->count();
            });
        }

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
            if (Auth::user()->hasRole('mechanic') && ($requestForQuotation->status == 10 && $requestForQuotation->quotations()->where('mechanic_id', Auth::id())->count() == 0)) {
                return '<span class="label label-primary">New Job</span>';
            } elseif (Auth::user()->hasRole('driver') && ($requestForQuotation->status == 10 && $requestForQuotation->quotations()->count() == 0)) {
                return '<span class="label label-primary">New Job</span>';
            }
//            return '<span class="label ' . ($requestForQuotation->status == 10 ? 'label-primary">' : ($requestForQuotation->status == 20 ? 'label-warning">' : 'label-success">')) . $requestForQuotation->status_text . '</span>';

            return '<span class="label label-' . $requestForQuotation->status_css . '">' . $requestForQuotation->status_text . '</span>';

            /*if ($requestForQuotation->status == 10) {
                return '<span class="label label-danger">Pending</span>';
            }
            if ($requestForQuotation->status == 20) {
                return '<span class="label label-info">In Progress</span>';
            }
            return '<span class="label label-success">Complete</span>';*/
        });
        $dataTable->addColumn('action', 'admin.request_for_quotations.datatables_actions');
        $dataTable->rawColumns(['car', 'area', 'service', 'duration', 'status', 'action']);

        return $dataTable;
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\Models\RequestForQuotation $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(RequestForQuotation $model)
    {
        $user = Auth::user();
        if ($user->hasRole('driver')) {

            return $model->whereHas('car', function ($driver_cars) use ($user) {
                return $driver_cars->newQuery()->where('driver_id', $user->id);
            })->where('status', '!=', RequestForQuotation::STATUS_COMPLETE);

        } elseif ($user->hasRole('mechanic')) {
            $model = $model->whereHas('pendingQuotation', function ($quotations) use ($user) {
                return $quotations->where('mechanic_id', $user->id)->where('status', RequestForQuotation::STATUS_NEW);
            })->orderBy('created_at', 'desc');

            $model = $model->orWhereHas('quotations', function ($quotations) use ($user) {
                return $quotations->where('mechanic_id', $user->id);
            })->where('status', '!=', RequestForQuotation::STATUS_COMPLETE)->orderBy('created_at', 'desc');
            return $model;
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
        if (Auth::user()->hasRole('mechanic')) {
            return [
                'id'    => ['visible' => false],
                'reqid' => [
                    'title' => 'Job ID'
                ],
                'area',
                'car',
                'service',
//            'quotations',
//            'duration',
                'status'
            ];
        } elseif (Auth::user()->hasRole('driver')) {
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
        return [
            'id'    => ['visible' => false],
            'reqid' => [
                'title' => 'Job ID'
            ],
            'area',
            'car',
            'service',
//            'quotations',
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