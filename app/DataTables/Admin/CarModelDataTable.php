<?php

namespace App\DataTables\Admin;

use App\Models\CarModel;
use Yajra\DataTables\Services\DataTable;
use Yajra\DataTables\EloquentDataTable;

class CarModelDataTable extends DataTable
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
        $dataTable->addColumn('car_maker', function($carmaker) {
            return $carmaker->maker->title;
        });
        $dataTable->editColumn('model',function($carmodel) {
            return $carmodel->title;
        });
        return $dataTable->addColumn('action', 'admin.car_models.datatables_actions');
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\Models\CarModel $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(CarModel $model)
    {
        return $model->newQuery()->orderBy('car_maker_id', SORT_DESC);
    }

    /**
     * Optional method if you want to use html builder.
     *
     * @return \Yajra\DataTables\Html\Builder
     */
    public function html()
    {
        $buttons = [];
        if (\Entrust::can('car_models.create') || \Entrust::hasRole('super-admin')) {
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
            'title',
            'car_maker',
        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return 'car_modelsdatatable_' . time();
    }
}