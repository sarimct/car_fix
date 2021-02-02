<?php

namespace App\DataTables\Admin;

use App\Models\Message;
use App\Models\Thread;
use Illuminate\Support\Facades\Auth;
use Yajra\DataTables\Services\DataTable;
use Yajra\DataTables\EloquentDataTable;

class MessageDataTable extends DataTable
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
        $dataTable->editColumn('recipient', function ($model) {
            return $model->receiver_details->name;
        });

        $dataTable->editColumn('message', function ($model) {
            return $model->last_message;
        });

        $dataTable->editColumn('status', function ($model) {
            return $model->messages->last()->message_status_text;
        });
        return $dataTable->addColumn('action', 'admin.messages.datatables_actions');
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\Models\Message $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(Thread $model)
    {
        return $model
            ->select('threads.id', 'last_message_id')
            ->join('thread_users', 'threads.id', 'thread_users.thread_id')
            ->where('thread_users.user_id', Auth::id())
            ->orderBy('threads.updated_at', 'desc')
            //->whereRaw('(created_by = ' . $sender_id . ' AND thread_users.`user_id` = ' . $receiver_id . ') OR (created_by = ' . $receiver_id . ' AND thread_users.`user_id` = ' . $sender_id . ')')
            ->newQuery();
        //$model;
    }

    /**
     * Optional method if you want to use html builder.
     *
     * @return \Yajra\DataTables\Html\Builder
     */
    public function html()
    {
        $buttons = [];
        if (\Entrust::can('messages.create') || \Entrust::hasRole('super-admin')) {
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
            'id',
            'recipient',
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
        return 'messagesdatatable_' . time();
    }
}