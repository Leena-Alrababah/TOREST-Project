<?php

namespace App\DataTables;

use App\Models\Table;
use Illuminate\Database\Eloquent\Builder as QueryBuilder;
use Yajra\DataTables\EloquentDataTable;
use Yajra\DataTables\Html\Builder as HtmlBuilder;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Html\Editor\Editor;
use Yajra\DataTables\Html\Editor\Fields;
use Yajra\DataTables\Services\DataTable;

class TablesDataTable extends DataTable
{
    /**
     * Build DataTable class.
     *
     * @param QueryBuilder $query Results from query() method.
     * @return \Yajra\DataTables\EloquentDataTable
     */
    public function dataTable(QueryBuilder $query): EloquentDataTable
    {
        return (new EloquentDataTable($query))
            ->addColumn('action', function ($query) {
                $editBtn = "<a href='" . route('dashboard.tables.edit', $query->id) . "' class='btn btn-dark'><i class='far fa-edit'></i></a>";
                $deleteBtn = "<a href='" . route('dashboard.tables.destroy', $query->id) . "' class='btn btn-danger ml-2 delete-item'><i class='fas fa-trash-alt'></i></a>";

                return "<div class='btn-group'>" . $editBtn . $deleteBtn . "</div>";
            })
            ->setRowId('id');
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\Models\Table $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(Table $model): QueryBuilder
    {
        $user = auth()->user(); // Get the currently logged-in user

        if ($user->role == 'provider') {
            // If the user is a provider, fetch menus for the restaurant they own
            return $model->join('restaurants', 'tables.restaurant_id', '=', 'restaurants.id')
                ->where('restaurants.user_id', $user->id)
                ->select('tables.*')
                ->newQuery();
        }

        // For other roles or scenarios, return a default query
        return $model->newQuery();
    }

    /**
     * Optional method if you want to use html builder.
     *
     * @return \Yajra\DataTables\Html\Builder
     */
    public function html(): HtmlBuilder
    {
        return $this->builder()
            ->setTableId('tables-table')
            ->columns($this->getColumns())
            ->minifiedAjax()
            //->dom('Bfrtip')
            ->orderBy(0)
            ->selectStyleSingle()
            ->buttons([
                Button::make('excel'),
                Button::make('csv'),
                Button::make('pdf'),
                Button::make('print'),
                Button::make('reset'),
                Button::make('reload')
            ]);
    }

    /**
     * Get the dataTable columns definition.
     *
     * @return array
     */
    public function getColumns(): array
    {
        return [
            Column::make('name'),
            Column::make('capacity'),
            Column::make('status'),
            Column::computed('action')
                ->exportable(false)
                ->printable(false)
                ->width(60)
                ->addClass('text-center'),
        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename(): string
    {
        return 'Tables_' . date('YmdHis');
    }
}
