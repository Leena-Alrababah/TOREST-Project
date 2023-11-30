<?php

namespace App\Http\Controllers;

use App\DataTables\ReviewsDataTable;
use App\Models\Review;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    // public function index()
    // {
    //     //
    // }
    public function index(ReviewsDataTable $dataTable)
    {
        $isAdmin = auth()->user()->role == 'admin';

        // Determine which view to render based on the user's role
        if ($isAdmin) {
            return $dataTable->render('admin.reviews.index');
        } else {
            return $dataTable->render('provider.reviews.index');
        }
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Review $review)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Review $review)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Review $review)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $review = Review::findOrFail($id);
        // $this->deleteImage($restaurant->image);
        $review->delete();

        return response(['status' => 'success', 'message' => 'Deleted Successfully!']);
    }
}
