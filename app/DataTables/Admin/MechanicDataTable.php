<?php

namespace App\DataTables\Admin;

use App\Models\Mechanic;
use App\Models\User;
use Yajra\DataTables\Services\DataTable;
use Yajra\DataTables\EloquentDataTable;

class MechanicDataTable extends DataTable
{
    /**
     * Build DataTable class.
     * @param mixed $query Results from query() method.
     * @return \Yajra\DataTables\DataTableAbstract
     */
    public function dataTable($query)
    {
        //$query = $query->with(['company']);
        $dataTable = new EloquentDataTable($query);

        $dataTable->addColumn('company.name', function ($model) {
            return $model->company->name;
        });

        $dataTable->addColumn('pending_jobs', function ($model) {
            return $model->quotations->quotation_request;
        });

        $dataTable->addColumn('completed_jobs', function ($model) {
            return $model->company->name;
        });

        return $dataTable->addColumn('action', 'admin.mechanics.datatables_actions');
    }

    /**
     * Get query source of dataTable.
     * @param \App\Models\User $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(Mechanic $model)
    {
        return $model->newQuery()->whereHas('company');
    }

    /**
     * Optional method if you want to use html builder.
     * @return \Yajra\DataTables\Html\Builder
     */
    public function html()
    {
        $buttons = [];
        if (\Entrust::can('mechanics.create') || \Entrust::hasRole('super-admin')) {
            $buttons = ['create'];
        }

        $buttons = array_merge($buttons, [
            'export',
            'print',
            'reset',
            'reload'
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
     * @return array
     */
    protected function getColumns()
    {
        return [
            'name',
            'company.name' => ['title' => 'Company Name'],
            'pending_jobs',
            'completed_jobs'
        ];
    }

    /**
     * Get filename for export.
     * @return string
     */
    protected function filename()
    {
        return 'mechanicsdatatable_' . time();
    }
}