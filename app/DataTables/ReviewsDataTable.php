<?php

namespace App\DataTables;

use App\Models\Review;
// use App\Models\User;

use Illuminate\Database\Eloquent\Builder as QueryBuilder;
use Yajra\DataTables\EloquentDataTable;
use Yajra\DataTables\Html\Builder as HtmlBuilder;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Html\Editor\Editor;
use Yajra\DataTables\Html\Editor\Fields;
use Yajra\DataTables\Services\DataTable;

class ReviewsDataTable extends DataTable
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
                $deleteBtn = "<a href='" . route('dashboard.reviews.destroy', $query->id) . "' class='btn btn-danger ml-2 delete-item'><i class='fas fa-trash-alt'></i></a>";

                $user = auth()->user();
                if ($user->role == 'provider') {
                    return "<div class='btn-group'></div>";
                } else {
                    return "<div class='btn-group'>"  . $deleteBtn . "</div>";
                }
            })

            
            ->addColumn('user', function ($query) {
                if ($query->user) {
                    return $query->user->name;
                } else {
                    return 'N/A'; // Or any other placeholder value you want to use
                }
            })

            ->addColumn('restaurant', function ($query) {
                if ($query->restaurant) {
                    return $query->restaurant->name;
                } else {
                    return 'N/A'; // Or any other placeholder value you want to use
                }
            })

            // ->addColumn('user', function ($review) {
            //     return $review->user_name;
            // })

            // ->addColumn('restaurant', function ($review) {
            //     return $review->restaurant_name;
            // })

            ->rawColumns(['action'])
            ->setRowId('id');
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\Models\Review $model
     * @return \Illuminate\Database\Eloquent\Builder
     */


    // public function query(Review $model)
    // {


    //     $user = auth()->user(); // Get the currently logged-in user

    //     if ($user->role == 'provider') {
    //         // If the user is a provider, fetch reviews where the restaurant has the same provider
    //         return $model->join('restaurants', 'reviews.restaurant_id', '=', 'restaurants.id')
    //         ->join('users', 'reviews.user_id', '=', 'users.id')
    //         ->where('restaurants.user_id', $user->id)
    //         ->select('reviews.*', 'users.name as user_name')
    //         ->newQuery();
    //     }

    //     // For other roles or scenarios, return a default query
    //     // return $model->newQuery();

    //     return $model->select(['reviews.*', 'users.name as user_name', 'restaurants.name as restaurant_name'])
    //         ->leftJoin('users', 'reviews.user_id', '=', 'users.id')
    //         ->leftJoin('restaurants', 'reviews.restaurant_id', '=', 'restaurants.id');
    // }
    public function query(Review $model)
    {
        $user = auth()->user();

        if ($user->role == 'provider') {
            // Assuming the reservation relationship with restaurant and table is defined in the Reservation model
            return $model->whereHas('restaurant',
                function ($query) {
                    $query->where('user_id', auth()->user()->id);
                }
            )->with(['restaurant', 'user'])->newQuery();
        }
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
            ->setTableId('reviews-table')
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
            Column::make('user')->width(150),
            Column::make('restaurant'),
            Column::make('review_text')->width(300),
            Column::make('rating'),
            // Column::make('discount_percentage'),
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
        return 'Reviews_' . date('YmdHis');
    }
}
