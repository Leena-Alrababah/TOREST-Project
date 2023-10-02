<?php

namespace App\DataTables;

use App\Models\Reservation;
use Illuminate\Database\Eloquent\Builder as QueryBuilder;
use Yajra\DataTables\EloquentDataTable;
use Yajra\DataTables\Html\Builder as HtmlBuilder;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Html\Editor\Editor;
use Yajra\DataTables\Html\Editor\Fields;
use Yajra\DataTables\Services\DataTable;

class ReservationsDataTable extends DataTable
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
                $editBtn = "<a href='' class='btn btn-dark'><i class='far fa-edit'></i></a>";
                $deleteBtn = "<a href='' class='btn btn-danger ml-2 delete-item'><i class='fas fa-trash-alt'></i></a>";

                return "<div class='btn-group'>" . $editBtn . $deleteBtn . "</div>";
            })

            ->addColumn('image', function ($query) {
                return $img = "<img width='100px' height='100px' src='" . asset($query->image) . "'></img>";
            })
            // ->addColumn('action', 'customers.action')

            // ->addColumn('customer', function ($query) {
            //     if ($query->user) {
            //         return $query->user->name;
            //     } else {
            //         return 'N/A'; // Or any other placeholder value you want to use
            //     }
            // })

            

            ->addColumn('restaurant', function ($reservation) {
                return $reservation->restaurant_name;
            })


            ->rawColumns(['action', 'image'])
            ->setRowId('id');
    }
    

    /**
     * Get query source of dataTable.
     *
     * @param \App\Models\Reservation $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(Reservation $model)
    {
        $user = auth()->user(); // Get the currently logged-in user

        if ($user->role == 'provider') {
            
            // If the user is a provider, fetch reservations where the restaurant has the same provider
            return $model->join('restaurants', 'reservations.restaurant_id', '=', 'restaurants.id')
            ->where('restaurants.user_id', $user->id)
                ->select('reservations.*')
                ->newQuery();
        }

        // For other roles or scenarios, return a default query
        // return $model->newQuery();
        
        return $model->select(['reservations.*', 'restaurants.name as restaurant_name'])
        ->leftJoin('restaurants', 'reservations.restaurant_id', '=', 'restaurants.id');
    }

    /**
     * Optional method if you want to use html builder.
     *
     * @return \Yajra\DataTables\Html\Builder
     */
    public function html(): HtmlBuilder
    {
        return $this->builder()
                    ->setTableId('reservations-table')
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
            // Column::make('restaurant_name')->width(150),
            Column::make('name'),
            Column::make('restaurant'),
            Column::make('reservation_date')->width(300),
            Column::make('reservation_time'),
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
        return 'Reservations_' . date('YmdHis');
    }
}
